<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Visibility\Cache\Product\Category;

use Oro\Bundle\VisibilityBundle\Tests\Unit\Visibility\Cache\Product\AbstractCacheBuilderTest;
use Oro\Bundle\VisibilityBundle\Visibility\Cache\CategoryCaseCacheBuilderInterface;
use Oro\Bundle\VisibilityBundle\Visibility\Cache\Product\Category\CacheBuilder;
use Oro\Bundle\CatalogBundle\Entity\Category;

class CacheBuilderTest extends AbstractCacheBuilderTest
{
    /**
     * @var CacheBuilder
     */
    protected $cacheBuilder;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->cacheBuilder = new CacheBuilder();

        foreach ($this->builders as $builder) {
            $this->cacheBuilder->addBuilder($builder);
        }
    }

    public function testAddBuilder()
    {
        $category = new Category();

        /** @var \PHPUnit_Framework_MockObject_MockObject|CategoryCaseCacheBuilderInterface $customBuilder */
        $customBuilder
            = $this->createMock('Oro\Bundle\VisibilityBundle\Visibility\Cache\CategoryCaseCacheBuilderInterface');
        $customBuilder->expects($this->once())
            ->method('categoryPositionChanged')
            ->with($category);

        $this->cacheBuilder->addBuilder($customBuilder);
        $this->cacheBuilder->categoryPositionChanged($category);
    }
}
