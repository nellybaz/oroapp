<?php

namespace Oro\Bundle\FormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Oro\Bundle\FormBundle\Validator\Constraints as OroAssert;

class RelatedEntityApiType extends AbstractType
{
    /** @var DataTransformerInterface */
    protected $dataTransformer;

    /**
     * @param DataTransformerInterface $dataTransformer
     */
    public function __construct(DataTransformerInterface $dataTransformer)
    {
        $this->dataTransformer = $dataTransformer;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'id',
                'text',
                [
                    'required'    => true,
                    'constraints' => [new Assert\NotBlank()]
                ]
            )
            ->add(
                'entity',
                'text',
                [
                    'required'    => true,
                    'constraints' => [new Assert\NotBlank(), new OroAssert\EntityClass()]
                ]
            );
        $builder->addModelTransformer($this->dataTransformer);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'allow_extra_fields' => true,
                'error_bubbling'     => false,
                'constraints'        => [new OroAssert\RelatedEntity()]
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
        return 'oro_related_entity_api';
    }
}
