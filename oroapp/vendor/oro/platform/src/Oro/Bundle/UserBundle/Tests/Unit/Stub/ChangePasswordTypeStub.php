<?php

namespace Oro\Bundle\UserBundle\Tests\Unit\Stub;

use Symfony\Component\Form\FormBuilderInterface;

use Oro\Bundle\UserBundle\Form\Type\ChangePasswordType;

class ChangePasswordTypeStub extends ChangePasswordType
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
}
