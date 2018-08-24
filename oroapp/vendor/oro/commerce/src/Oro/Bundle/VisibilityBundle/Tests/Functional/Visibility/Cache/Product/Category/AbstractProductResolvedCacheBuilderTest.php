<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Functional\Visibility\Cache\Product\Category;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\VisibilityBundle\Tests\Functional\DataFixtures\LoadCategoryVisibilityData;

abstract class AbstractProductResolvedCacheBuilderTest extends WebTestCase
{
    const ROOT = 'root';

    /** @var Registry */
    protected $registry;

    /** @var Scope */
    protected $scope;

    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);
        $this->loadFixtures([
            LoadCategoryVisibilityData::class,
        ]);

        $this->getContainer()->get('oro_visibility.visibility.cache.cache_builder')->buildCache();
        $this->registry = $this->client->getContainer()->get('doctrine');
    }

    public function tearDown()
    {
        $this->getContainer()->get('doctrine')->getManager()->clear();
        parent::tearDown();
    }

    /**
     * @return Category
     */
    protected function getRootCategory()
    {
        return $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroCatalogBundle:Category')
            ->getRepository('OroCatalogBundle:Category')
            ->getMasterCatalogRoot();
    }
}
