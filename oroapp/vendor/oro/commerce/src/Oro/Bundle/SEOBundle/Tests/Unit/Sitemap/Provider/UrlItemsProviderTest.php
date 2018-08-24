<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\Sitemap\Provider;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\RedirectBundle\Generator\CanonicalUrlGenerator;
use Oro\Bundle\SEOBundle\Event\RestrictSitemapEntitiesEvent;
use Oro\Bundle\SEOBundle\Event\UrlItemsProviderEvent;
use Oro\Bundle\SEOBundle\Sitemap\Provider\UrlItemsProvider;
use Oro\Component\TestUtils\ORM\OrmTestCase;
use Oro\Component\Website\WebsiteInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class UrlItemsProviderTest extends OrmTestCase
{
    /**
     * @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $eventDispatcher;

    /**
     * @var CanonicalUrlGenerator|\PHPUnit_Framework_MockObject_MockObject
     */
    private $canonicalUrlGenerator;

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $configManager;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    private $registry;

    /**
     * @var UrlItemsProvider
     */
    private $urlItemsProvider;

    public function setUp()
    {
        $this->canonicalUrlGenerator = $this->createMock(CanonicalUrlGenerator::class);
        $this->configManager = $this->createMock(ConfigManager::class);
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->registry = $this->createMock(ManagerRegistry::class);

        $this->urlItemsProvider = new UrlItemsProvider(
            $this->canonicalUrlGenerator,
            $this->configManager,
            $this->eventDispatcher,
            $this->registry
        );
        $this->urlItemsProvider->setEntityClass(Product::class);
        $this->urlItemsProvider->setType('test');
        $this->urlItemsProvider->setChangeFrequencySettingsKey('sk_cf');
        $this->urlItemsProvider->setPrioritySettingsKey('sk_priority');
    }

    public function testItDispatchEvent()
    {
        $this->prepareEntityManager();

        /** @var WebsiteInterface $website */
        $website = $this->createMock(WebsiteInterface::class);
        $version = '1';

        $this->eventDispatcher->expects($this->exactly(6))
            ->method('dispatch')
            ->withConsecutive(
                [
                    UrlItemsProviderEvent::ON_START . '.test',
                    $this->isInstanceOf(UrlItemsProviderEvent::class)
                ],
                [
                    UrlItemsProviderEvent::ON_START,
                    $this->isInstanceOf(UrlItemsProviderEvent::class)
                ],
                [
                    RestrictSitemapEntitiesEvent::NAME . '.test',
                    $this->isInstanceOf(RestrictSitemapEntitiesEvent::class)
                ],
                [
                    RestrictSitemapEntitiesEvent::NAME,
                    $this->isInstanceOf(RestrictSitemapEntitiesEvent::class)
                ],
                [
                    UrlItemsProviderEvent::ON_END . '.test',
                    $this->isInstanceOf(UrlItemsProviderEvent::class)
                ],
                [
                    UrlItemsProviderEvent::ON_END,
                    $this->isInstanceOf(UrlItemsProviderEvent::class)
                ]
            );

        $this->urlItemsProvider->getUrlItems($website, $version)->current();
    }

    private function prepareEntityManager()
    {
        $reader = new AnnotationReader();
        $metadataDriver = new AnnotationDriver(
            $reader,
            'Oro\Bundle\BatchBundle\Tests\Unit\ORM\Query\Stub'
        );
        $entityManager = $this->getTestEntityManager();
        $entityManager->getConfiguration()->setMetadataDriverImpl($metadataDriver);
        $entityManager->getConfiguration()->setEntityNamespaces(
            array(
                'Product' => Product::class
            )
        );
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with(Product::class)
            ->willReturn($entityManager);
    }
}
