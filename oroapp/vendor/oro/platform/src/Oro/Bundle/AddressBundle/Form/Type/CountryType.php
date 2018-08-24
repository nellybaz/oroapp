<?php
namespace Oro\Bundle\AddressBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class CountryType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'label' => 'oro.address.country.entity_label',
                'class' => 'OroAddressBundle:Country',
                'random_id' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
                'configs' => array(
                    'allowClear' => true,
                    'placeholder'   => 'oro.address.form.choose_country'
                ),
                'empty_value' => '',
                'empty_data'  => null
            )
        );
    }

    public function getParent()
    {
        return 'genemu_jqueryselect2_translatable_entity';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oro_country';
    }
}
