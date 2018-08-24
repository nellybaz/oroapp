<?php

namespace Oro\Bundle\DotmailerBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Oro\Bundle\FormBundle\Utils\FormUtils;
use Oro\Bundle\SecurityBundle\Encoder\Mcrypt;

class IntegrationSettingsSubscriber implements EventSubscriberInterface
{
    /**
     * @var Mcrypt
     */
    protected $encoder;

    /**
     * @param Mcrypt $encoder
     */
    public function __construct(Mcrypt $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSet',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        ];
    }

    /**
     * Populate websites choices if exist in entity
     *
     * @param FormEvent $event
     */
    public function preSet(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();

        if ($data === null) {
            return;
        }

        if ($data->getId()) {
            // change label for apiKey field
            FormUtils::replaceField(
                $form,
                'password',
                [
                    'label' => 'oro.dotmailer.integration_transport.password.label',
                    'tooltip' => 'oro.dotmailer.form.password.tooltip',
                    'required' => false,
                ],
                ['constraints']
            );
        }
    }

    /**
     * Pre submit event listener
     * Encrypt protected fields and populate if empty
     *
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $data = (array)$event->getData();
        $form = $event->getForm();

        $protectedFields = ['password', 'clientKey'];
        foreach ($protectedFields as $field) {
            $oldData = $form->get($field)->getData();
            if (empty($data[$field]) && $oldData) {
                // populate old data
                $data[$field] = $oldData;
            } elseif (isset($data[$field])) {
                $data[$field] = $this->encoder->encryptData($data[$field]);
            }
        }

        $event->setData($data);
    }
}
