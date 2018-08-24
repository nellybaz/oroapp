<?php
namespace Oro\Bundle\UserBundle\Form\Type;

use Doctrine\ORM\EntityManager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\FormBundle\Form\DataTransformer\EntitiesToIdsTransformer;

class UserMultiSelectType extends AbstractType
{
    const NAME = 'oro_user_multiselect';

    /**
     * @var EntityManager
     */
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // The event listener fixes transformation from empty string to array with empty string.
        // The case is affected by Genemu\Bundle\FormBundle\Form\JQuery\DataTransformer::reverseTransform()
        // Example: explode(',', '') => array(0=>'').
        // @todo remove after vendor fixation
        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) {
                $value = $event->getData();
                if (empty($value)) {
                    $event->setData(array());
                }
            }
        );
        $builder->addModelTransformer(
            new EntitiesToIdsTransformer($this->entityManager, $options['entity_class'])
        );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'autocomplete_alias'  => 'users',
                'configs'             => array(
                    'multiple'                   => true,
                    'width'                      => '400px',
                    'placeholder'                => 'oro.user.form.choose_user',
                    'allowClear'                 => true,
                    'result_template_twig'       => 'OroUserBundle:User:Autocomplete/result.html.twig',
                    'selection_template_twig'    => 'OroUserBundle:User:Autocomplete/selection.html.twig',
                )
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'oro_jqueryselect2_hidden';
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
