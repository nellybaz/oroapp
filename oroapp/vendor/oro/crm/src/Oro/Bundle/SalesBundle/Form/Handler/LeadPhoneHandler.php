<?php

namespace Oro\Bundle\SalesBundle\Form\Handler;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Bundle\SoapBundle\Entity\Manager\ApiEntityManager;
use Oro\Bundle\SalesBundle\Entity\Lead;
use Oro\Bundle\SalesBundle\Entity\LeadPhone;

class LeadPhoneHandler
{
    /** @var FormFactory */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var EntityManagerInterface */
    protected $manager;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /**
     * @param FormFactory $form
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(
        FormFactory $form,
        Request $request,
        EntityManagerInterface $manager,
        AuthorizationCheckerInterface $authorizationChecker
    ) {
        $this->form    = $form;
        $this->request = $request;
        $this->manager = $manager;
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     * Process form
     *
     * @param LeadPhone $entity
     *
     * @return bool True on successful processing, false otherwise
     *
     * @throws AccessDeniedException
     */
    public function process(LeadPhone $entity)
    {
        $form = $this->form->create('oro_sales_lead_phone', $entity);

        $submitData = [
            'phone' => $this->request->request->get('phone'),
            'primary' => $this->request->request->get('primary')
        ];

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $form->submit($submitData);

            $leadId = $this->request->request->get('entityId');
            if ($form->isValid() && $leadId) {
                $lead = $this->manager->find(
                    'OroSalesBundle:Lead',
                    $leadId
                );
                if (!$this->authorizationChecker->isGranted('EDIT', $lead)) {
                    throw new AccessDeniedException();
                }

                if ($lead->getPrimaryPhone() && $this->request->request->get('primary') === true) {
                    return false;
                }

                $this->onSuccess($entity, $lead);

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
        /** @var LeadPhone $leadPhone */
        $leadPhone = $manager->find($id);
        if (!$this->authorizationChecker->isGranted('EDIT', $leadPhone->getOwner())) {
            throw new AccessDeniedException();
        }

        if ($leadPhone->isPrimary() && $leadPhone->getOwner()->getPhones()->count() === 1) {
            $em = $manager->getObjectManager();
            $em->remove($leadPhone);
            $em->flush();
        } else {
            throw new \Exception("oro.sales.phone.error.delete.more_one", 500);
        }
    }

    /**
     * @param LeadPhone $entity
     * @param Lead $lead
     */
    protected function onSuccess(LeadPhone $entity, Lead $lead)
    {
        $entity->setOwner($lead);
        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
