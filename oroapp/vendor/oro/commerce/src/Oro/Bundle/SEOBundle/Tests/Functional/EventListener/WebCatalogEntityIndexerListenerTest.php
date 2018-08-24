<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\EventListener;

use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\FrontendTestFrameworkBundle\Test\FrontendWebTestCase;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures\LoadWebCatalogWithContentNodes;
use Oro\Bundle\WebCatalogBundle\Entity\ContentNode;
use Oro\Bundle\WebCatalogBundle\Entity\ContentVariant;
use Oro\Bundle\WebCatalogBundle\Entity\WebCatalog;
use Oro\Bundle\WebCatalogBundle\EventListener\WebCatalogEntityIndexerListener;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Bundle\WebsiteSearchBundle\Tests\Functional\Engine\ORM\OrmIndexerTest;

class WebCatalogEntityIndexerListenerTest extends FrontendWebTestCase
{
    const QUERY = 'web_catalog_entit_indexer_listener_test_query_string';
    
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        OrmIndexerTest::checkSearchEngine($this);
        $this->setCurrentWebsite();
        $this->loadFixtures([
            LoadWebCatalogWithContentNodes::class,
        ]);
        $this->getContainer()->get('request_stack')->push(Request::create(''));
    }

    public function testOnWebsiteSearchIndex()
    {
        $container = $this->getContainer();
        $localizedFallbackValueManager = $container->get('doctrine')->getManagerForClass(LocalizedFallbackValue::class);
        
        /** @var WebCatalog $webCatalog */
        $webCatalog = $this->getReference(LoadWebCatalogWithContentNodes::WEB_CATALOG_NAME);
        
        // set WebCatalog for current Website
        $container->get('oro_config.global')->set(
            'oro_web_catalog.web_catalog',
            $webCatalog->getId(),
            $container->get('oro_website.manager')->getCurrentWebsite()
        );
        
        /** @var ContentNode $contentNode */
        $contentNode = $this->getReference(LoadWebCatalogWithContentNodes::CONTENT_NODE_1);
        /** @var ContentVariant $contentVariant */
        $notAssignedContentVariant = $this->getReference(LoadWebCatalogWithContentNodes::CONTENT_VARIANT_2);
        /** @var ContentVariant $contentVariant */
        $contentVariant = $this->getReference(LoadWebCatalogWithContentNodes::CONTENT_VARIANT_1);
        $product = $contentVariant->getProductPageProduct();
        
        /** @var LocalizedFallbackValue $metaDescription */
        $metaDescription = $contentNode->getMetaDescriptions()[0];
        $metaDescription->setString(self::QUERY);
        
        $localizedFallbackValueManager->persist($metaDescription);
        $localizedFallbackValueManager->flush();
        
        $container->get('event_dispatcher')->dispatch(
            ReindexationRequestEvent::EVENT_NAME,
            new ReindexationRequestEvent([Product::class], [], [$product->getId()], false)
        );
        
        $query = $container->get('oro_product.website_search.repository.product')
            ->getSearchQuery(self::QUERY, 0, 1)
            ->addSelect(sprintf(
                'integer.assigned_to_%s_%s as assigned',
                WebCatalogEntityIndexerListener::ASSIGN_TYPE_CONTENT_VARIANT,
                $contentVariant->getId()
            ))
            ->addSelect(sprintf(
                'integer.assigned_to_%s_%s as notAssigned',
                WebCatalogEntityIndexerListener::ASSIGN_TYPE_CONTENT_VARIANT,
                $notAssignedContentVariant->getId()
            ));
        
        $results = $query->getResult();
        
        $this->assertEquals(1, $results->getRecordsCount());
        $this->assertEquals($product->getId(), $results[0]->getRecordId());
        $this->assertEquals(1, $results[0]->getSelectedData()['assigned']);
        $this->assertEmpty($results[0]->getSelectedData()['notAssigned']);
    }
}
