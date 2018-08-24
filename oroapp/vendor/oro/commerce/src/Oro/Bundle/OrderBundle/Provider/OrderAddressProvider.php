<?php

namespace Oro\Bundle\OrderBundle\Provider;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Util\ClassUtils;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Entity\Repository\CustomerAddressRepository;
use Oro\Bundle\CustomerBundle\Entity\Repository\CustomerUserAddressRepository;

class OrderAddressProvider implements AddressProviderInterface
{
    const ADDRESS_TYPE_SHIPPING = 'shipping';
    const ADDRESS_TYPE_BILLING = 'billing';

    const ADMIN_ACL_POSTFIX = '_backend';

    const ACCOUNT_ADDRESS_ANY = 'customer_any';
    const ACCOUNT_USER_ADDRESS_DEFAULT = 'customer_user_default';
    const ACCOUNT_USER_ADDRESS_ANY = 'customer_user_any';

    const ADDRESS_SHIPPING_ACCOUNT_USE_ANY = 'oro_order_address_shipping_customer_use_any';
    const ADDRESS_SHIPPING_ACCOUNT_USER_USE_DEFAULT = 'oro_order_address_shipping_customer_user_use_default';
    const ADDRESS_SHIPPING_ACCOUNT_USER_USE_ANY = 'oro_order_address_shipping_customer_user_use_any';

    const ADDRESS_BILLING_ACCOUNT_USE_ANY = 'oro_order_address_billing_customer_use_any';
    const ADDRESS_BILLING_ACCOUNT_USER_USE_DEFAULT = 'oro_order_address_billing_customer_user_use_default';
    const ADDRESS_BILLING_ACCOUNT_USER_USE_ANY = 'oro_order_address_billing_customer_user_use_any';

    /**
     * @var array
     */
    protected $permissionsByType = [
        self::ADDRESS_TYPE_SHIPPING => [
            self::ACCOUNT_ADDRESS_ANY => self::ADDRESS_SHIPPING_ACCOUNT_USE_ANY,
            self::ACCOUNT_USER_ADDRESS_DEFAULT => self::ADDRESS_SHIPPING_ACCOUNT_USER_USE_DEFAULT,
            self::ACCOUNT_USER_ADDRESS_ANY => self::ADDRESS_SHIPPING_ACCOUNT_USER_USE_ANY,
        ],
        self::ADDRESS_TYPE_BILLING => [
            self::ACCOUNT_ADDRESS_ANY => self::ADDRESS_BILLING_ACCOUNT_USE_ANY,
            self::ACCOUNT_USER_ADDRESS_DEFAULT => self::ADDRESS_BILLING_ACCOUNT_USER_USE_DEFAULT,
            self::ACCOUNT_USER_ADDRESS_ANY => self::ADDRESS_BILLING_ACCOUNT_USER_USE_ANY,
        ],
    ];

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var AclHelper */
    protected $aclHelper;

    /** @var string */
    protected $customerAddressClass;

    /** @var string */
    protected $customerUserAddressClass;

    /** @var array */
    protected $cache = [];

    /**
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenAccessorInterface        $tokenAccessor
     * @param ManagerRegistry               $registry
     * @param AclHelper                     $aclHelper
     * @param string                        $customerAddressClass
     * @param string                        $customerUserAddressClass
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        TokenAccessorInterface $tokenAccessor,
        ManagerRegistry $registry,
        AclHelper $aclHelper,
        $customerAddressClass,
        $customerUserAddressClass
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenAccessor = $tokenAccessor;
        $this->registry = $registry;
        $this->aclHelper = $aclHelper;

        $this->customerAddressClass = $customerAddressClass;
        $this->customerUserAddressClass = $customerUserAddressClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerAddresses(Customer $customer, $type)
    {
        static::assertType($type);

        $key = $this->getCacheKey($customer, $type);
        if (array_key_exists($key, $this->cache)) {
            return $this->cache[$key];
        }

        $result = [];
        $repository = $this->getCustomerAddressRepository();
        if ($this->authorizationChecker->isGranted($this->getPermission($type, self::ACCOUNT_ADDRESS_ANY))) {
            $result = $repository->getAddressesByType($customer, $type, $this->aclHelper);
        } elseif ($this->authorizationChecker->isGranted(sprintf('VIEW;entity:%s', $this->customerAddressClass))) {
            $result = $repository->getDefaultAddressesByType($customer, $type, $this->aclHelper);
        }

        $this->cache[$key] = $result;

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerUserAddresses(CustomerUser $customerUser, $type)
    {
        static::assertType($type);

        $key = $this->getCacheKey($customerUser, $type);
        if (array_key_exists($key, $this->cache)) {
            return $this->cache[$key];
        }

        $result = [];
        $repository = $this->getCustomerUserAddressRepository();
        if ($this->authorizationChecker->isGranted($this->getPermission($type, self::ACCOUNT_USER_ADDRESS_ANY))) {
            $result = $repository->getAddressesByType($customerUser, $type, $this->aclHelper);
        } elseif ($this->authorizationChecker->isGranted(
            $this->getPermission($type, self::ACCOUNT_USER_ADDRESS_DEFAULT)
        )) {
            $result = $repository->getDefaultAddressesByType($customerUser, $type, $this->aclHelper);
        }

        $this->cache[$key] = $result;

        return $result;
    }

    /**
     * @param string $type
     * @throws \InvalidArgumentException
     */
    public static function assertType($type)
    {
        $supportedTypes = [self::ADDRESS_TYPE_BILLING, self::ADDRESS_TYPE_SHIPPING];
        if (!in_array($type, $supportedTypes, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Unknown type "%s", known types are: %s',
                    $type,
                    implode(', ', $supportedTypes)
                )
            );
        }
    }

    /**
     * @return CustomerAddressRepository
     */
    protected function getCustomerAddressRepository()
    {
        return $this->registry->getManagerForClass($this->customerAddressClass)
            ->getRepository($this->customerAddressClass);
    }

    /**
     * @return CustomerUserAddressRepository
     */
    protected function getCustomerUserAddressRepository()
    {
        return $this->registry->getManagerForClass($this->customerUserAddressClass)
            ->getRepository($this->customerUserAddressClass);
    }

    /**
     * @param string $type
     * @param string $key
     * @return string
     */
    protected function getPermission($type, $key)
    {
        $postfix = '';
        if (!$this->tokenAccessor->getUser() instanceof CustomerUser) {
            $postfix = self::ADMIN_ACL_POSTFIX;
        }

        return $this->permissionsByType[$type][$key] . $postfix;
    }

    /**
     * @param Customer|CustomerUser $object
     * @param string $type
     * @return string
     */
    protected function getCacheKey($object, $type)
    {
        return sprintf('%s_%s_%s', ClassUtils::getClass($object), $object->getId(), $type);
    }
}
