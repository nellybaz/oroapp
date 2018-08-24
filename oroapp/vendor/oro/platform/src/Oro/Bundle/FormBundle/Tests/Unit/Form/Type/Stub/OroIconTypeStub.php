<?php

namespace Oro\Bundle\FormBundle\Tests\Unit\Form\Type\Stub;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OroIconTypeStub extends AbstractType
{
    /**
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * @param KernelInterface $kernel
     */
    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'placeholder' => 'oro.form.choose_value',
                'choices' => ['fa-anchor' => 'fa-anchor'],
                'empty_value' => '',
                'configs' => [
                    'placeholder' => 'oro.form.choose_value',
                    'result_template_twig' => 'OroFormBundle:Autocomplete:icon/result.html.twig',
                    'selection_template_twig' => 'OroFormBundle:Autocomplete:icon/selection.html.twig',
                ]
            ]
        );
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'oro_icon_select';
    }

    public function getParent()
    {
        return 'genemu_jqueryselect2_choice';
    }
}
