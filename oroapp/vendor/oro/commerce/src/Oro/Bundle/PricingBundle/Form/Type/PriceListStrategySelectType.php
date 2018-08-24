<?php

namespace Oro\Bundle\PricingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\PricingBundle\PricingStrategy\StrategyRegister;

class PriceListStrategySelectType extends AbstractType
{
    const NAME = 'oro_pricing_list_strategy_selection';
    const ALIAS = 'oro.pricing.system_configuration.fields.strategy_type.choises.';

    /**
     * @var StrategyRegister
     */
    protected $strategyRegister;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var array
     */
    protected $strategies = [];

    /**
     * @param StrategyRegister $priceStrategyRegister
     * @param TranslatorInterface $translator
     */
    public function __construct(StrategyRegister $priceStrategyRegister, TranslatorInterface $translator)
    {
        $this->strategyRegister = $priceStrategyRegister;
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choices', $this->getChoices());
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'choice';
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
     * @return array
     */
    protected function getChoices()
    {
        $choices = [];

        foreach ($this->getStrategies() as $strategy => $value) {
            $choices[$strategy] = $this->translator->trans(self::ALIAS.$strategy);
        }

        return $choices;
    }

    /**
     * @return array
     */
    protected function getStrategies()
    {
        if (!$this->strategies) {
            $this->strategies = $this->strategyRegister->getStrategies();
        }

        return $this->strategies;
    }
}
