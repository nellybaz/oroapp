<?php

namespace Oro\Bundle\PricingBundle\Placeholder;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\PricingBundle\Model\PriceListTreeHandler;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\AbstractPlaceholder;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CPLIdPlaceholder extends AbstractPlaceholder
{
    const NAME = 'CPL_ID';

    /**
     * @var PriceListTreeHandler
     */
    private $priceListTreeHandler;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @param PriceListTreeHandler $priceListTreeHandler
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(PriceListTreeHandler $priceListTreeHandler, TokenStorageInterface $tokenStorage)
    {
        $this->priceListTreeHandler = $priceListTreeHandler;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * {@inheritdoc}
     */
    public function getPlaceholder()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        $token = $this->tokenStorage->getToken();
        $customer = null;

        if ($token && $token->getUser() instanceof CustomerUser) {
            $customer = $token->getUser()->getCustomer();
        }

        $cpl = $this->priceListTreeHandler->getPriceList($customer);

        if (!$cpl) {
            throw new \RuntimeException('Can\'t get current cpl');
        }

        return (string) $cpl->getId();
    }
}
