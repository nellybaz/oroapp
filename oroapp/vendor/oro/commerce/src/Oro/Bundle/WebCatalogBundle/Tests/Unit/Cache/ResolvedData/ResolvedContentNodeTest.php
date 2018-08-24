<?php

namespace Oro\Bundle\WebCatalogBundle\Tests\Unit\Cache\ResolvedData;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\WebCatalogBundle\Cache\ResolvedData\ResolvedContentNode;
use Oro\Bundle\WebCatalogBundle\Cache\ResolvedData\ResolvedContentVariant;

class ResolvedContentNodeTest extends \PHPUnit_Framework_TestCase
{
    public function testAccessors()
    {
        $variant1 = (new ResolvedContentVariant())
            ->setData(['id' => 3, 'type' => 'test_type', 'test' => 1])
            ->addLocalizedUrl((new LocalizedFallbackValue())->setString('/test'));
        $titles1 = new ArrayCollection([(new LocalizedFallbackValue())->setString('Child Title 1')]);
        $variant2 = (new ResolvedContentVariant())
            ->setData(['id' => 7, 'type' => 'test_type', 'test' => 2])
            ->addLocalizedUrl((new LocalizedFallbackValue())->setString('/test/content'));
        $titles2 = new ArrayCollection([(new LocalizedFallbackValue())->setString('Title 1')]);

        $childNode = new ResolvedContentNode(2, 'root__second', $titles2, $variant2);

        $node = new ResolvedContentNode(1, 'root', $titles1, $variant1);
        $node->addChildNode($childNode);

        $this->assertEquals(1, $node->getId());
        $this->assertEquals('root', $node->getIdentifier());
        $this->assertEquals($titles1, $node->getTitles());
        $this->assertEquals($variant1, $node->getResolvedContentVariant());
        $this->assertEquals(new ArrayCollection([$variant1]), $node->getContentVariants());
        $this->assertEquals(new ArrayCollection([$childNode]), $node->getChildNodes());
    }
}
