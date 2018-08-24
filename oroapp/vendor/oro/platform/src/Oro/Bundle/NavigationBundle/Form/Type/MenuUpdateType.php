<?php

namespace Oro\Bundle\NavigationBundle\Form\Type;

use Knp\Menu\ItemInterface;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

use Oro\Bundle\LocaleBundle\Form\Type\LocalizedFallbackValueCollectionType;
use Oro\Bundle\NavigationBundle\Entity\MenuUpdateInterface;

class MenuUpdateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'titles',
            LocalizedFallbackValueCollectionType::class,
            [
                'required' => true,
                'label' => 'oro.navigation.menuupdate.title.label',
                'options' => ['constraints' => [new NotBlank()]]
            ]
        );

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($options) {
                $form = $event->getForm();
                /** @var ItemInterface $menuItem */
                $menuItem = $options['menu_item'];
                /** @var MenuUpdateInterface $menuUpdate */
                $menuUpdate = $event->getData();
                $form->add(
                    'uri',
                    'text',
                    [
                        'disabled' => false === $menuUpdate->isCustom(),
                        'required' => false !== $menuUpdate->isCustom(),
                        'label' => 'oro.navigation.menuupdate.uri.label',
                    ]
                );
                if (null !== $options['menu_item'] && !empty($menuItem->getExtra('acl_resource_id'))) {
                    $form->add(
                        'aclResourceId',
                        'text',
                        [
                            'label' => 'oro.navigation.menuupdate.acl_resource_id.label',
                            'mapped' => false,
                            'disabled' => true,
                            'data' => $menuItem->getExtra('acl_resource_id'),
                        ]
                    );
                }
            }
        );

        $builder->add(
            'icon',
            'oro_icon_select',
            [
                'required' => false,
            ]
        );

        $builder->add(
            'descriptions',
            LocalizedFallbackValueCollectionType::class,
            [
                'required' => false,
                'label' => 'oro.navigation.menuupdate.description.label',
                'type' => 'textarea',
                'field' => 'text',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => function (Options $options) {
                    // for loading apropriate validation metadata we need to specify exact entity class in data_class
                    if ($options['data'] instanceof MenuUpdateInterface) {
                        return get_class($options['data']);
                    }

                    return null;
                },
                'menu_item' => null,
                'validation_groups' => function (FormInterface $form) {
                    $groups = ['Default'];
                    /** @var MenuUpdateInterface $menuUpdate */
                    $menuUpdate = $form->getData();
                    if (null === $menuUpdate || true === $menuUpdate->isCustom()) {
                        $groups[] = 'UserDefined';
                    }

                    return $groups;
                }
            ]
        );
    }
}
