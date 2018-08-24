<?php

namespace Oro\Bundle\RFPBundle\EventListener;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureCheckerHolderTrait;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureToggleableInterface;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;

class CustomerViewListener extends AbstractCustomerViewListener implements FeatureToggleableInterface
{
    use FeatureCheckerHolderTrait;

    /**
     * {@inheritdoc}
     */
    public function onCustomerView(BeforeListRenderEvent $event)
    {
        if (!$this->isFeaturesEnabled()) {
            return;
        }
        parent::onCustomerView($event);
    }

    /**
     * {@inheritdoc}
     */
    public function onCustomerUserView(BeforeListRenderEvent $event)
    {
        if (!$this->isFeaturesEnabled()) {
            return;
        }
        parent::onCustomerUserView($event);
    }

    /**
     * {@inheritdoc}
     */
    protected function getCustomerViewTemplate()
    {
        return 'OroRFPBundle:Customer:rfp_view.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    protected function getCustomerLabel()
    {
        return 'oro.rfp.datagrid.customer.label';
    }

    /**
     * {@inheritdoc}
     */
    protected function getCustomerUserViewTemplate()
    {
        return 'OroRFPBundle:CustomerUser:rfp_view.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    protected function getCustomerUserLabel()
    {
        return 'oro.rfp.datagrid.customer_user.label';
    }
}
