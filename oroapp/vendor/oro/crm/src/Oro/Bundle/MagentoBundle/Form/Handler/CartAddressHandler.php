<?php

namespace Oro\Bundle\MagentoBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;

use Oro\Bundle\AddressBundle\Entity\AddressType;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\MagentoBundle\Entity\CartAddress;
use Oro\Bundle\MagentoBundle\Entity\Cart;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class CartAddressHandler
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var ObjectManager */
    protected $manager;

    /** @var PropertyAccessor */
    protected $propertyAccessor;

    /** @var Organization */
    protected $organization;

    /** @var array */
    protected $addressTypes = [
        AddressType::TYPE_BILLING  => 'billingAddress',
        AddressType::TYPE_SHIPPING => 'shippingAddress'
    ];

    /**
     * @param FormInterface          $form
     * @param Request                $request
     * @param RegistryInterface      $registry
     * @param TokenAccessorInterface $security
     */
    public function __construct(
        FormInterface $form,
        Request $request,
        RegistryInterface $registry,
        TokenAccessorInterface $security
    ) {
        $this->form         = $form;
        $this->request      = $request;
        $this->manager      = $registry->getManager();
        $this->organization = $security->getOrganization();
    }

    /**
     * Process form
     *
     * @param CartAddress $entity
     * @param Cart        $cart
     * @param string      $type
     *
     * @return bool True on successful processing, false otherwise
     */
    public function process(CartAddress $entity, Cart $cart = null, $type = null)
    {
        $this->form->setData($entity);

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $this->form->submit($this->request);

            if ($this->form->isValid()) {
                $this->onSuccess($entity, $cart, $type);

                return true;
            }
        }

        return false;
    }

    /**
     * "Success" form handler
     *
     * @param CartAddress $entity
     * @param Cart        $cart
     * @param string      $type
     */
    protected function onSuccess(CartAddress $entity, Cart $cart = null, $type = null)
    {
        if (null !== $cart && null !== $type) {
            $this->getPropertyAccessor()->setValue($cart, $this->addressTypes[$type], $entity);
            $this->manager->persist($cart);
        }

        if (null === $entity->getOrganization()) {
            $entity->setOrganization($this->organization);
        }

        $this->manager->persist($entity);
        $this->manager->flush();
    }

    /**
     * @return PropertyAccessor
     */
    protected function getPropertyAccessor()
    {
        if (!$this->propertyAccessor) {
            $this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        }
        return $this->propertyAccessor;
    }
}
