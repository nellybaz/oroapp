<?php

namespace Oro\Bundle\MagentoBundle\Form\Handler;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\MagentoBundle\Entity\Order;
use Oro\Bundle\MagentoBundle\Entity\OrderAddress;
use Oro\Bundle\MagentoBundle\Entity\OrderItem;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class OrderHandler
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var RegistryInterface */
    protected $manager;

    /** @var Organization */
    protected $organization;

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
        $this->form = $form;
        $this->request = $request;
        $this->manager = $registry->getManager();
        $this->organization = $security->getOrganization();
    }

    /**
     * Process form
     *
     * @param  Order $entity
     *
     * @return bool True on successful processing, false otherwise
     */
    public function process(Order $entity)
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
     * @param Order $entity
     */
    protected function onSuccess(Order $entity)
    {
        if (null === $entity->getOrganization()) {
            $entity->setOrganization($this->organization);
        }

        /** @var OrderAddress $address */
        foreach ($entity->getAddresses() as $address) {
            if (null === $address->getOwner()) {
                $address->setOwner($entity);
            }

            if (null === $address->getOrganization()) {
                $address->setOrganization($this->organization);
            }
        }

        /** @var OrderItem $item */
        foreach ($entity->getItems() as $item) {
            if (null === $item->getOrder()) {
                $item->setOrder($entity);
            }
        }

        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
