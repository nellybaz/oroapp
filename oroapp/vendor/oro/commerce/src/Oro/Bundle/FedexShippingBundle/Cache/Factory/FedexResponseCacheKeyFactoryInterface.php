<?php

namespace Oro\Bundle\FedexShippingBundle\Cache\Factory;

use Oro\Bundle\FedexShippingBundle\Cache\FedexResponseCacheKeyInterface;
use Oro\Bundle\FedexShippingBundle\Client\Request\FedexRequestInterface;
use Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings;

interface FedexResponseCacheKeyFactoryInterface
{
    /**
     * @param FedexRequestInterface    $request
     * @param FedexIntegrationSettings $settings
     *
     * @return FedexResponseCacheKeyInterface
     */
    public function create(
        FedexRequestInterface $request,
        FedexIntegrationSettings $settings
    ): FedexResponseCacheKeyInterface;
}
