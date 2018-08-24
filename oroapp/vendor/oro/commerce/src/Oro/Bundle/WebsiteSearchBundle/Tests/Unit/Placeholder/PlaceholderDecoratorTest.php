<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Unit\Placeholder;

use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderDecorator;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderInterface;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderRegistry;

class PlaceholderDecoratorTest extends \PHPUnit_Framework_TestCase
{
    /** @var PlaceholderDecorator */
    protected $placeholder;

    /** @var PlaceholderRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = $this->createMock(PlaceholderRegistry::class);

        $this->placeholder = new PlaceholderDecorator($this->registry);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->registry, $this->placeholder);
    }

    /**
     * @expectedException \BadMethodCallException
     */
    public function testGetPlaceholderNotIntendedToRun()
    {
        $this->placeholder->getPlaceholder();
    }

    public function testReplace()
    {
        $placeholder1 = $this->createMock(PlaceholderInterface::class);
        $placeholder1->expects($this->once())->method('getPlaceholder')
            ->willReturn('PLACEHOLDER1');
        $placeholder1->expects($this->once())->method('replace')
            ->with(
                'string_PLACEHOLDER1_PLACEHOLDER2',
                ['PLACEHOLDER1' => 'value1', 'PLACEHOLDER2' => 'value2']
            )
            ->willReturn('string_value1_PLACEHOLDER2');

        $placeholder2 = $this->createMock(PlaceholderInterface::class);
        $placeholder2->expects($this->once())->method('getPlaceholder')
            ->willReturn('PLACEHOLDER2');
        $placeholder2->expects($this->once())->method('replace')
            ->with(
                'string_value1_PLACEHOLDER2',
                ['PLACEHOLDER1' => 'value1', 'PLACEHOLDER2' => 'value2']
            )
            ->willReturn('string_value1_value2');

        $this->registry->expects($this->at(0))->method('getPlaceholders')->willReturn([$placeholder1, $placeholder2]);
        $this->registry->expects($this->at(1))->method('getPlaceholder')
            ->with('PLACEHOLDER1')
            ->willReturn($placeholder1);
        $this->registry->expects($this->at(2))->method('getPlaceholder')
            ->with('PLACEHOLDER2')
            ->willReturn($placeholder2);

        $this->assertEquals(
            'string_value1_value2',
            $this->placeholder->replace(
                'string_PLACEHOLDER1_PLACEHOLDER2',
                ['PLACEHOLDER1' => 'value1', 'PLACEHOLDER2' => 'value2']
            )
        );
    }

    public function testReplaceDefault()
    {
        $placeholder1 = $this->createMock(PlaceholderInterface::class);
        $placeholder1->expects($this->once())->method('replaceDefault')
            ->with('string_PLACEHOLDER1_PLACEHOLDER2')
            ->willReturn('string_value1_PLACEHOLDER2');

        $placeholder2 = $this->createMock(PlaceholderInterface::class);
        $placeholder2->expects($this->once())->method('replaceDefault')
            ->with('string_value1_PLACEHOLDER2')
            ->willReturn('string_value1_value2');

        $this->registry->expects($this->once())->method('getPlaceholders')->willReturn([$placeholder1, $placeholder2]);

        $this->assertEquals(
            'string_value1_value2',
            $this->placeholder->replaceDefault('string_PLACEHOLDER1_PLACEHOLDER2')
        );
    }

    public function testReplaceWithNull()
    {
        $this->registry->expects($this->once())->method('getPlaceholders')->willReturn(
            []
        );

        $result = $this->placeholder->replace(null, []);

        $this->assertSame('', $result);
    }
}
