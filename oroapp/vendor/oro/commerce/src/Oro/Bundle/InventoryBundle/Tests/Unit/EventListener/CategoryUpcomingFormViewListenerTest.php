<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\EventListener;

use Oro\Bundle\InventoryBundle\EventListener\CategoryUpcomingFormViewListener;
use Oro\Bundle\UIBundle\Tests\Unit\Fallback\AbstractFallbackFieldsFormViewTest;

class CategoryUpcomingFormViewListenerTest extends AbstractFallbackFieldsFormViewTest
{
    /**
     * @var CategoryUpcomingFormViewListener
     */
    protected $fallbackFieldsFormView;

    public function setUp()
    {
        parent::setUp();

        $this->fallbackFieldsFormView = new CategoryUpcomingFormViewListener(
            $this->requestStack,
            $this->doctrine,
            $this->translator
        );
    }

    public function testOnCategoryEdit()
    {
        $env = $this->getMockBuilder(\Twig_Environment::class)->disableOriginalConstructor()->getMock();
        $env->expects($this->once())->method('render')->willReturn('Rendered template');
        $this->event->expects($this->once())->method('getEnvironment')->willReturn($env);

        $this->scrollData->expects($this->once())->method('getData')->willReturn(
            ['dataBlocks' => [1 => ['title' => 'oro.catalog.sections.default_options.trans']]]
        );
        $this->scrollData->expects($this->once())->method('addSubBlockData');
        $this->event->expects($this->once())->method('getScrollData')->willReturn($this->scrollData);

        $this->fallbackFieldsFormView->onCategoryEdit($this->event);
    }
}
