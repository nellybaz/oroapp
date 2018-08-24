<?php

namespace Oro\Bundle\ZendeskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RestTransportSettingsFormType extends AbstractType
{
    const NAME = 'oro_zendesk_rest_transport_setting_form_type';

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'url',
            'url',
            [
                'label' => 'oro.zendesk.zendeskresttransport.url.label',
                'required' => true,
                'tooltip' => 'oro.zendesk.form.zendesk_url.description',
            ]
        );
        $builder->add(
            'email',
            'email',
            [
                'label' => 'oro.zendesk.zendeskresttransport.email.label',
                'tooltip' => 'oro.zendesk.form.email.description',
                'required' => true,
            ]
        );
        $builder->add(
            'token',
            'text',
            [
                'label' => 'oro.zendesk.zendeskresttransport.token.label',
                'tooltip' => 'oro.zendesk.form.token.description',
                'required' => true
            ]
        );
        $builder->add(
            'zendeskUserEmail',
            'text',
            [
                'label' => 'oro.zendesk.zendeskresttransport.zendesk_user_email.label',
                'tooltip' => 'oro.zendesk.form.zendesk_user_email.description',
                'required' => true
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['data_class' => 'Oro\Bundle\ZendeskBundle\Entity\ZendeskRestTransport']);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }
}
