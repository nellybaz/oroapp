<?php

namespace Oro\Bundle\MagentoBundle\Form\Handler;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\AddressBundle\Entity\AbstractAddress;
use Oro\Bundle\MagentoBundle\Entity\Cart;
use Oro\Bundle\MagentoBundle\Entity\CartItem;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class CartHandler
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var RegistryInterface */
    protected $manager;

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
        $this->form    = $form;
        $this->request = $request;
        $this->manager = $registry->getManager();
        $this->organization = $security->getOrganization();
    }

    /**
     * Process form
     *
     * @param  Cart $entity
     *
     * @return bool True on successful processing, false otherwise
     */
    public function process(Cart $entity)
    {
        $this->form->setData($entity);

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $this->form->submit($this->request);

            if ($this->form->isValid()) {
                $this->onSuccess($entity);

                return true;
            }
        }

        return false;
    }

    /**
     * "Success" form handler
     *
     * @param Cart $entity
     */
    protected function onSuccess(Cart $entity)
    {
        $count = 0;
        /** @var CartItem $item */
        foreach ($entity->getCartItems() as $item) {
            $item->setCart($entity);
            ++$count;
        }

        $entity->setItemsCount($count);

        if (null === $entity->getOrganization()) {
            $entity->setOrganization($this->organization);
        }

        if ($entity->getShippingAddress() instanceof AbstractAddress
            && null === $entity->getShippingAddress()->getOrganization()
        ) {
            $entity->getShippingAddress()->setOrganization($this->organization);
        }

        if ($entity->getBillingAddress() instanceof AbstractAddress
            && null === $entity->getBillingAddress()->getOrganization()
        ) {
            $entity->getBillingAddress()->setOrganization($this->organization);
        }

        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
