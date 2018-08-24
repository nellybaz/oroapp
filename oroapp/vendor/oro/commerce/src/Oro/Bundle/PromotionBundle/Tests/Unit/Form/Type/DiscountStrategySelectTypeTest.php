<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Type;

use Oro\Bundle\PromotionBundle\Discount\Strategy\StrategyInterface;
use Oro\Bundle\PromotionBundle\Discount\Strategy\StrategyRegistry;
use Oro\Bundle\PromotionBundle\Form\Type\DiscountStrategySelectType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiscountStrategySelectTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StrategyRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    private $strategyRegistry;

    /**
     * @var DiscountStrategySelectType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->strategyRegistry = $this->createMock(StrategyRegistry::class);
        $this->formType = new DiscountStrategySelectType($this->strategyRegistry);
    }

    public function testGetName()
    {
        $this->assertEquals(DiscountStrategySelectType::NAME, $this->formType->getName());
    }

    public function testGetParent()
    {
        $this->assertEquals(ChoiceType::class, $this->formType->getParent());
    }

    public function testSetDefaultOptions()
    {
        $strategy = $this->createMock(StrategyInterface::class);
        $strategy->expects($this->once())
            ->method('getLabel')
            ->willReturn('test_strategy');
        $this->strategyRegistry->expects($this->once())
            ->method('getStrategies')
            ->willReturn(['test' => $strategy]);

        /* @var $resolver OptionsResolver|\PHPUnit_Framework_MockObject_MockObject */
        $resolver = $this->createMock(OptionsResolver::class);
        $resolver->expects($this->once())
            ->method('setDefault')
            ->with('choices', ['test' => 'test_strategy']);

        $this->formType->setDefaultOptions($resolver);
    }
}
