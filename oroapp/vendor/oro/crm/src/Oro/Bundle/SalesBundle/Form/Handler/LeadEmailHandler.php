<?php

namespace Oro\Bundle\SalesBundle\Form\Handler;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Bundle\SoapBundle\Entity\Manager\ApiEntityManager;
use Oro\Bundle\SalesBundle\Entity\LeadEmail;
use Oro\Bundle\SalesBundle\Entity\Lead;

class LeadEmailHandler
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
     * @param LeadEmail $entity
     *
     * @return bool True on successful processing, false otherwise
     *
     * @throws AccessDeniedException
     */
    public function process(LeadEmail $entity)
    {
        $form = $this->form->create('oro_sales_lead_email', $entity);

        $submitData = [
            'email' => $this->request->request->get('email'),
            'primary' => $this->request->request->get('primary')
        ];

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $form->submit($submitData);

            if ($form->isValid() && $this->request->request->get('entityId')) {
                /** @var Lead $lead */
                $lead = $this->manager->find(
                    'OroSalesBundle:Lead',
                    $this->request->request->get('entityId')
                );
                if (!$this->authorizationChecker->isGranted('EDIT', $lead)) {
                    throw new AccessDeniedException();
                }

                if ($lead->getPrimaryEmail() && $this->request->request->get('primary') === true) {
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
     * @throws \Exception
     */
    public function handleDelete($id, ApiEntityManager $manager)
    {
        /** @var LeadEmail $leadEmail */
        $leadEmail = $manager->find($id);
        if (!$this->authorizationChecker->isGranted('EDIT', $leadEmail->getOwner())) {
            throw new AccessDeniedException();
        }

        if ($leadEmail->isPrimary() && $leadEmail->getOwner()->getEmails()->count() === 1) {
            $em = $manager->getObjectManager();
            $em->remove($leadEmail);
            $em->flush();
        } else {
            throw new \Exception("oro.sales.email.error.delete.more_one", 500);
        }
    }

    /**
     * @param LeadEmail $entity
     * @param Lead $lead
     */
    protected function onSuccess(LeadEmail $entity, Lead $lead)
    {
        $entity->setOwner($lead);
        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
