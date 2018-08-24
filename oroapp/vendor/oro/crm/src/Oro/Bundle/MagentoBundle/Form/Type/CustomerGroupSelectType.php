<?php

namespace Oro\Bundle\MagentoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class CustomerGroupSelectType extends AbstractType
{
    const NAME = 'oro_magento_customer_group_select';

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var bool */
    protected $canAssignChannel;

    /**
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'autocomplete_alias' => 'magento_customer_group',
                'grid_name' => 'magento-customers-group-by-channel-grid',
                'configs' => [
                    'placeholder' => 'oro.magento.customergroup.placeholder'
                ]
            ]
        );

        // Set store form type readonly if ASSIGN permissions for integration not set
        $resolver->setNormalizers(
            [
                'disabled' => function (Options $options, $value) {
                    return $this->isReadOnly($options) ? true : $value;
                },
                'validation_groups' => function (Options $options, $value) {
                    return $options['disabled'] ? false : $value;
                },
            ]
        );
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

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'oro_entity_create_or_select_inline_channel_aware';
    }

    /**
     * Checks if the form type should be read-only or not
     *
     * @param array $options
     *
     * @return bool
     */
    protected function isReadOnly($options)
    {
        return !$this->authorizationChecker->isGranted('oro_integration_assign');
    }
}
