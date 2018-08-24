<?php

namespace Oro\Bundle\OrderBundle\RequestHandler;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\RequestStack;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermProvider;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;

class FrontendOrderDataHandler
{
    /** @var RequestStack */
    protected $requestStack;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var PaymentTermProvider  */
    protected $paymentTermProvider;

    /**
     * @param ManagerRegistry        $registry
     * @param RequestStack           $requestStack
     * @param TokenAccessorInterface $tokenAccessor
     * @param PaymentTermProvider    $paymentTermProvider
     */
    public function __construct(
        ManagerRegistry $registry,
        RequestStack $requestStack,
        TokenAccessorInterface $tokenAccessor,
        PaymentTermProvider $paymentTermProvider
    ) {
        $this->registry = $registry;
        $this->requestStack = $requestStack;
        $this->tokenAccessor = $tokenAccessor;
        $this->paymentTermProvider = $paymentTermProvider;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer()
    {
        $customerUser = $this->getCustomerUser();

        return $customerUser->getCustomer();
    }

    /**
     * @return CustomerUser
     */
    public function getCustomerUser()
    {
        $customerUser = $this->tokenAccessor->getUser();
        if (!$customerUser instanceof CustomerUser) {
            throw new \InvalidArgumentException('Only CustomerUser can create an Order');
        }

        return $customerUser;
    }

    /**
     * @return null|PaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->paymentTermProvider->getPaymentTerm($this->getCustomer());
    }

    /**
     * @return User
     */
    public function getOwner()
    {
        //TODO: BB-3825 set correct owner
        return $this->registry->getManagerForClass('OroUserBundle:User')
            ->getRepository('OroUserBundle:User')
            ->findOneBy([]);
    }
}
