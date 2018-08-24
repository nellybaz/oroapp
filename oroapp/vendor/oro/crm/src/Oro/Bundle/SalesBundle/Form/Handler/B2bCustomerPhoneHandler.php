<?php

namespace Oro\Bundle\SalesBundle\Form\Handler;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Bundle\SoapBundle\Entity\Manager\ApiEntityManager;
use Oro\Bundle\SalesBundle\Entity\B2bCustomer;
use Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone;
use Oro\Bundle\SalesBundle\Validator\B2bCustomerPhoneDeleteValidator;

class B2bCustomerPhoneHandler
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var EntityManagerInterface */
    protected $manager;

    /** @var  B2bCustomerPhoneDeleteValidator */
    protected $b2bCustomerPhoneDeleteValidator;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /**
     * @param FormInterface $form
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param B2bCustomerPhoneDeleteValidator $b2bCustomerPhoneDeleteValidator
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(
        FormInterface $form,
        Request $request,
        EntityManagerInterface $manager,
        B2bCustomerPhoneDeleteValidator $b2bCustomerPhoneDeleteValidator,
        AuthorizationCheckerInterface $authorizationChecker
    ) {
        $this->form    = $form;
        $this->request = $request;
        $this->manager = $manager;
        $this->b2bCustomerPhoneDeleteValidator = $b2bCustomerPhoneDeleteValidator;
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     * Process form
     *
     * @param B2bCustomerPhone $entity
     *
     * @return bool True on successful processing, false otherwise
     *
     * @throws AccessDeniedException
     */
    public function process(B2bCustomerPhone $entity)
    {
        $this->form->setData($entity);

        $submitData = [
            'phone' => $this->request->request->get('phone'),
            'primary' => $this->request->request->get('primary')
        ];

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $this->form->submit($submitData);

            $b2bCustomerId = $this->request->request->get('entityId');
            if ($this->form->isValid() && $b2bCustomerId) {
                $customer = $this->manager->find(
                    'OroSalesBundle:B2bCustomer',
                    $b2bCustomerId
                );
                if (!$this->authorizationChecker->isGranted('EDIT', $customer)) {
                    throw new AccessDeniedException();
                }

                if ($customer->getPrimaryPhone() && $this->request->request->get('primary') === true) {
                    return false;
                }

                $this->onSuccess($entity, $customer);

                return true;
            }
        }

        return false;
    }

    /**
     * @param $id
     * @param ApiEntityManager $manager
     *
     * @throws \Exception
     */
    public function handleDelete($id, ApiEntityManager $manager)
    {
        /** @var B2bCustomerPhone $b2bCustomerPhone */
        $b2bCustomerPhone = $manager->find($id);
        if (!$this->authorizationChecker->isGranted('EDIT', $b2bCustomerPhone->getOwner())) {
            throw new AccessDeniedException();
        }

        if ($this->b2bCustomerPhoneDeleteValidator->validate($b2bCustomerPhone)) {
            $em = $manager->getObjectManager();
            $em->remove($b2bCustomerPhone);
            $em->flush();
        } else {
            throw new \Exception("oro.sales.phone.error.delete.more_one", 500);
        }
    }

    /**
     * @param B2bCustomerPhone $entity
     * @param B2bCustomer $customer
     */
    protected function onSuccess(B2bCustomerPhone $entity, B2bCustomer $customer)
    {
        $entity->setOwner($customer);
        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
