<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type;

use Oro\Bundle\FrontendBundle\Form\Type\RuleEditorTextareaType;
use Oro\Bundle\PayPalBundle\PayPal\Payflow\Option\OptionsResolver;
use Oro\Bundle\PricingBundle\Form\OptionsConfigurator\PriceRuleEditorOptionsConfigurator;
use Oro\Bundle\PricingBundle\Form\Type\PriceRuleEditorType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class PriceRuleEditorTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PriceRuleEditorOptionsConfigurator|\PHPUnit_Framework_MockObject_MockObject
     */
    private $optionsConfigurator;

    /**
     * @var PriceRuleEditorType
     */
    private $type;

    protected function setUp()
    {
        $this->optionsConfigurator = $this->getMockBuilder(PriceRuleEditorOptionsConfigurator::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->type = new PriceRuleEditorType($this->optionsConfigurator);
    }

    public function testGetName()
    {
        $this->assertEquals(PriceRuleEditorType::NAME, $this->type->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(PriceRuleEditorType::NAME, $this->type->getBlockPrefix());
    }

    public function testGetParent()
    {
        $this->assertEquals(RuleEditorTextareaType::class, $this->type->getParent());
    }

    public function testFinishView()
    {
        /** @var FormInterface $form */
        $form = $this->createMock(FormInterface::class);
        $view = new FormView();

        $this->optionsConfigurator->expects($this->once())
            ->method('limitNumericOnlyRules')
            ->with($view, []);

        $this->type->finishView($view, $form, []);
    }

    public function testConfigureOptions()
    {
        $resolver = new OptionsResolver();

        $this->optionsConfigurator->expects($this->once())
            ->method('configureOptions')
            ->with($resolver);

        $this->type->configureOptions($resolver);
    }
}
