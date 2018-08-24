<?php

namespace Oro\Bundle\PaymentBundle\RuleFiltration\Basic;

use Oro\Bundle\PaymentBundle\Context\Converter\PaymentContextToRulesValueConverterInterface;
use Oro\Bundle\RuleBundle\RuleFiltration\RuleFiltrationServiceInterface;
use Oro\Bundle\PaymentBundle\Context\PaymentContextInterface;
use Oro\Bundle\PaymentBundle\RuleFiltration\MethodsConfigsRulesFiltrationServiceInterface;

class BasicMethodsConfigsRulesFiltrationService implements MethodsConfigsRulesFiltrationServiceInterface
{
    /**
     * @var RuleFiltrationServiceInterface
     */
    private $filtrationService;

    /**
     * @var PaymentContextToRulesValueConverterInterface
     */
    private $paymentContextToRulesValueConverter;

    /**
     * @param RuleFiltrationServiceInterface       $filtrationService
     * @param PaymentContextToRulesValueConverterInterface $converter
     */
    public function __construct(
        RuleFiltrationServiceInterface $filtrationService,
        PaymentContextToRulesValueConverterInterface $converter
    ) {
        $this->filtrationService = $filtrationService;
        $this->paymentContextToRulesValueConverter = $converter;
    }

    /**
     * {@inheritDoc}
     */
    public function getFilteredPaymentMethodsConfigsRules(
        array $paymentMethodsConfigsRules,
        PaymentContextInterface $context
    ) {
        $arrayContext = $this->paymentContextToRulesValueConverter->convert($context);

        return $this->filtrationService->getFilteredRuleOwners(
            $paymentMethodsConfigsRules,
            $arrayContext
        );
    }
}
