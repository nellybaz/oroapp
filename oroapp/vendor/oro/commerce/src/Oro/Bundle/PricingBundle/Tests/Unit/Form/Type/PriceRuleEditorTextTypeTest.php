<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type;

use Oro\Bundle\FrontendBundle\Form\Type\RuleEditorTextType;
use Oro\Bundle\PayPalBundle\PayPal\Payflow\Option\OptionsResolver;
use Oro\Bundle\PricingBundle\Form\OptionsConfigurator\PriceRuleEditorOptionsConfigurator;
use Oro\Bundle\PricingBundle\Form\Type\PriceRuleEditorTextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class PriceRuleEditorTextTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PriceRuleEditorOptionsConfigurator|\PHPUnit_Framework_MockObject_MockObject
     */
    private $optionsConfigurator;

    /**
     * @var PriceRuleEditorTextType
     */
    private $type;

    protected function setUp()
    {
        $this->optionsConfigurator = $this->getMockBuilder(PriceRuleEditorOptionsConfigurator::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->type = new PriceRuleEditorTextType($this->optionsConfigurator);
    }

    public function testGetName()
    {
        $this->assertEquals(PriceRuleEditorTextType::NAME, $this->type->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(PriceRuleEditorTextType::NAME, $this->type->getBlockPrefix());
    }

    public function testGetParent()
    {
        $this->assertEquals(RuleEditorTextType::class, $this->type->getParent());
    }

    public function testFinishView()
    {
        $view = new FormView();
        /** @var FormInterface $form */
        $form = $this->createMock(FormInterface::class);
        $options = [];

        $this->optionsConfigurator->expects($this->once())
            ->method('limitNumericOnlyRules')
            ->with($view, $options);

        $this->type->finishView($view, $form, $options);
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
