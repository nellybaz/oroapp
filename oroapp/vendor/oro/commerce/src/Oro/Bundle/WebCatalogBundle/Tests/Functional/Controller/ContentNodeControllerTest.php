<?php

namespace Oro\Bundle\WebCatalogBundle\Tests\Functional\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\CMSBundle\Tests\Functional\DataFixtures\LoadPageData;
use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageQueueAssertTrait;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebCatalogBundle\Async\Topics;
use Oro\Bundle\WebCatalogBundle\Entity\ContentNode;
use Oro\Bundle\WebCatalogBundle\Tests\Functional\DataFixtures\LoadContentNodesData;
use Oro\Bundle\WebCatalogBundle\Tests\Functional\DataFixtures\LoadContentVariantsData;

class ContentNodeControllerTest extends WebTestCase
{
    use MessageQueueAssertTrait;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->loadFixtures([
            LoadContentVariantsData::class,
            LoadPageData::class,
        ]);
    }

    public function testGetPossibleUrlsAction()
    {
        /** @var ContentNode $firstCatalogNode */
        $firstCatalogNode = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT);
        $slugGenerator = $this->getContainer()->get('oro_web_catalog.generator.slug_generator');
        $slugGenerator->generate($firstCatalogNode);
        /** @var EntityManagerInterface $em */
        $em = $this->getContainer()->get('doctrine')->getManagerForClass(ContentNode::class);
        $em->flush();

        /** @var ContentNode $contentNode */
        $contentNode = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT_SUBNODE_1_1);
        /** @var ContentNode $newParentContentNode */
        $newParentContentNode = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT_SUBNODE_2);

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_content_node_get_possible_urls',
                ['id' => $contentNode->getId(), 'newParentId' => $newParentContentNode->getId()]
            )
        );

        $result = $this->client->getResponse();
        $this->assertJsonResponseStatusCodeEquals($result, 200);

        $expected = [
            'Default Value' => [
                'before' => '/web_catalog.node.1.1/web_catalog.node.1.1.1',
                'after' => '/web_catalog.node.1.2/web_catalog.node.1.1.1'
            ]
        ];
        $actual = json_decode($result->getContent(), true);
        $this->assertEquals($expected, $actual);
    }

    public function testRedirectCreationDuringMove()
    {
        /** @var ContentNode $contentNode */
        $contentNode = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT_SUBNODE_1_1);
        /** @var ContentNode $newParentContentNode */
        $newParentContentNode = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT_SUBNODE_2);

        $this->client->request(
            'PUT',
            $this->getUrl(
                'oro_content_node_move',
                [
                    'id' => $contentNode->getId(),
                    'parent' => $newParentContentNode->getId(),
                    'position' => 0,
                    'createRedirect' => 1
                ]
            )
        );

        $expectedMessage = [
            'topic' => Topics::RESOLVE_NODE_SLUGS,
            'message' => [
                'id' => $contentNode->getId(),
                'createRedirect' => true
            ]
        ];

        $this->assertContains($expectedMessage, self::getSentMessages());
    }

    public function testValidationForLocalizedFallbackValues()
    {
        $rootNodeId = $this->getReference(LoadContentNodesData::CATALOG_1_ROOT)->getId();
        $crawler = $this->client->request('GET', $this->getUrl('oro_content_node_create', ['id' => $rootNodeId]));
        $form = $crawler->selectButton('Save')->form();

        $bigStringValue = str_repeat('a', 256);
        $formValues = $form->getPhpValues();
        $formValues['oro_web_catalog_content_node']['parentNode'] = $rootNodeId;
        $formValues['oro_web_catalog_content_node']['titles']['values']['default'] = $bigStringValue;
        $formValues['oro_web_catalog_content_node']['slugPrototypesWithRedirect']['slugPrototypes'] = [
            'values' => ['default' => $bigStringValue]
        ];
        $formValues['oro_web_catalog_content_node']['contentVariants'][] = [
            'default' => 1,
            'cmsPage' => $this->getReference(LoadPageData::PAGE_1)->getId(),
            'type' => 'cms_page',
        ];

        $this->client->followRedirects(true);
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $formValues);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $this->assertEquals(
            2,
            $crawler->filterXPath(
                "//li[contains(text(),'This value is too long. It should have 255 characters or less.')]"
            )->count()
        );
    }
}
