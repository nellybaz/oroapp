<?php

namespace Oro\Bundle\UserBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\UserBundle\Entity\AbstractUser;

class UserSubscriber implements EventSubscriberInterface
{
    /** @var FormFactoryInterface */
    protected $factory;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /**
     * @param FormFactoryInterface   $factory       Factory to add new form children
     * @param TokenAccessorInterface $tokenAccessor Security token accessor
     */
    public function __construct(FormFactoryInterface $factory, TokenAccessorInterface $tokenAccessor)
    {
        $this->factory = $factory;
        $this->tokenAccessor = $tokenAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    /**
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $submittedData = $event->getData();

        if (isset($submittedData['emails'])) {
            foreach ($submittedData['emails'] as $id => $email) {
                if (!$email['email']) {
                    unset($submittedData['emails'][$id]);
                }
            }
        }

        $event->setData($submittedData);
    }

    /**
     * @param FormEvent $event
     */
    public function preSetData(FormEvent $event)
    {
        /* @var AbstractUser $entity */
        $entity = $event->getData();
        $form = $event->getForm();

        if (is_null($entity)) {
            return;
        }

        if ($entity->getId()) {
            $form->remove('plainPassword');
        }

        if (!$this->isCurrentUser($entity)) {
            $form->remove('change_password');
        }

        $enabledChoices = ['oro.user.enabled.disabled', 'oro.user.enabled.enabled'];

        // do not allow editing of Enabled status
        if (!empty($entity->getId())) {
            $form->add('enabled', 'hidden', ['mapped' => false]);

            return;
        }

        $form->add(
            $this->factory->createNamed(
                'enabled',
                'choice',
                '',
                [
                    'label' => 'oro.user.enabled.label',
                    'required' => true,
                    'disabled' => false,
                    'choices' => $enabledChoices,
                    'empty_value' => 'Please select',
                    'empty_data' => '',
                    'auto_initialize' => false
                ]
            )
        );
    }

    /**
     * Returns true if passed user is currently authenticated
     *
     * @param  AbstractUser $user
     *
     * @return bool
     */
    protected function isCurrentUser(AbstractUser $user)
    {
        $token = $this->tokenAccessor->getToken();
        $currentUser = $token ? $token->getUser() : null;
        if ($user->getId() && is_object($currentUser)) {
            return $currentUser->getId() == $user->getId();
        }

        return false;
    }
}
