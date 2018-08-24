<?php

namespace Oro\Bundle\PromotionBundle\Form\Type;

use Oro\Bundle\PromotionBundle\Discount\Strategy\StrategyRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiscountStrategySelectType extends AbstractType
{
    const NAME = 'oro_discount_strategy_select';

    /**
     * @var StrategyRegistry
     */
    private $strategyRegistry;

    /**
     * @param StrategyRegistry $strategyRegistry
     */
    public function __construct(StrategyRegistry $strategyRegistry)
    {
        $this->strategyRegistry = $strategyRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $choices = [];
        foreach ($this->strategyRegistry->getStrategies() as $alias => $strategy) {
            $choices[$alias] = $strategy->getLabel();
        }

        $resolver->setDefault('choices', $choices);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
