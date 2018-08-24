<?php

namespace Oro\Bundle\DotmailerBundle\Form\Type;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\ChannelBundle\Form\Type\CreateOrSelectInlineChannelAwareType;

class AddressBookSelectType extends CreateOrSelectInlineChannelAwareType
{
    const NAME = 'oro_dotmailer_address_book_list_select';

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(['marketing_list_id']);
        $resolver->setDefaults(
            [
                'autocomplete_alias' => 'dotmailer_address_books',
                'create_form_route'  => 'oro_dotmailer_address_book_create',
                'grid_name'          => 'oro_dotmailer_address_books_grid',
                'configs'            => [
                    'placeholder'  => 'oro.dotmailer.addressbook.select.placeholder',
                ]
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars['configs']['component'] .= '-address-book';
        $view->vars['marketing_list_id'] = isset($options['marketing_list_id']) ? $options['marketing_list_id'] : null;
        $view->vars['component_options']['marketing_list_id'] = $view->vars['marketing_list_id'];
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'oro_entity_create_or_select_inline_channel_aware';
    }

    /**
     * {@inheritdoc}
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
