<?php

namespace Oro\Bundle\SalesBundle\Tests\Behat\Context;

use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;

/**
 * This context save behat execution time, all detailed steps can be found at
 * - "Manage Opportunity Feature"
 * - "Manage Salesfunnel Feature"
 * - "Manage Lead Feature"
 */
class SalesFeatureToggleContext extends OroFeatureContext implements KernelAwareContext
{
    use KernelDictionary;

    /**
     * @When /^(?:|I )enable Opportunity feature$/
     */
    public function enableOpportunityFeature()
    {
        $this->setFeatureState(1, 'oro_sales', 'opportunity_feature_enabled');
    }

    /**
     * @When /^(?:|I )disable Opportunity feature$/
     */
    public function disableOpportunityFeature()
    {
        $this->setFeatureState(0, 'oro_sales', 'opportunity_feature_enabled');
    }

    /**
     * @When /^(?:|I )enable Lead feature$/
     */
    public function enableLeadFeature()
    {
        $this->setFeatureState(1, 'oro_sales', 'lead_feature_enabled');
    }

    /**
     * @When /^(?:|I )disable Lead feature$/
     */
    public function disableLeadFeature()
    {
        $this->setFeatureState(0, 'oro_sales', 'lead_feature_enabled');
    }

    /**
     * @When /^(?:|I )enable SalesFunnel feature$/
     */
    public function enableSalesFunnelFeature()
    {
        $this->setFeatureState(1, 'oro_sales', 'salesfunnel_feature_enabled');
    }

    /**
     * @When /^(?:|I )disable SalesFunnel feature$/
     */
    public function disableSalesFunnelFeature()
    {
        $this->setFeatureState(0, 'oro_sales', 'salesfunnel_feature_enabled');
    }

    /**
     * @param mixed $state
     * @param string $section
     * @param string $name
     */
    protected function setFeatureState($state, $section, $name)
    {
        $configManager = $this->getContainer()->get('oro_config.global');
        $configManager->set(sprintf('%s.%s', $section, $name), $state ? 1 : 0);
        $configManager->flush();
    }
}
