<?php

namespace Oro\Bundle\EntityBundle\Tests\Unit\Form\Stub;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\EntityBundle\Form\Type\EntityFieldFallbackValueType;

class FallbackParentStubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fallback_parent_stub';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('fallback');
        $resolver->setDefaults(['data_class' => FallbackParentStub::class]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('valueWithFallback', EntityFieldFallbackValueType::class, $options['fallback']);
    }
}
