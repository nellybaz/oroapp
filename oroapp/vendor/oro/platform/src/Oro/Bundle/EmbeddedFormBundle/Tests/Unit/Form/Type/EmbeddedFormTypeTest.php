<?php
namespace Oro\Bundle\EmbeddedFormBundle\Tests\Unit\Form\Type;

use Oro\Bundle\EmbeddedFormBundle\Form\Type\EmbeddedFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmbeddedFormTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeConstructed()
    {
        new EmbeddedFormType();
    }

    /**
     * @test
     */
    public function shouldBuildForm()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject | FormBuilderInterface $builder */
        $builder = $this->createMock('\Symfony\Component\Form\FormBuilder');
        $builder->expects($this->at(0))
            ->method('add')
            ->with('title', 'text')
            ->will($this->returnSelf());
        $builder->expects($this->at(1))
            ->method('add')
            ->with('formType', 'oro_available_embedded_forms')
            ->will($this->returnSelf());
        $builder->expects($this->at(2))
            ->method('add')
            ->with('css', 'textarea')
            ->will($this->returnSelf());
        $builder->expects($this->at(3))
            ->method('add')
            ->with('successMessage', 'textarea')
            ->will($this->returnSelf());

        $formType = new EmbeddedFormType();
        $formType->buildForm($builder, []);
    }

    /**
     * @test
     */
    public function shouldSetDefaultOptions()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject | OptionsResolverInterface $resolver */
        $resolver = $this->createMock('\Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with(['data_class' => 'Oro\Bundle\EmbeddedFormBundle\Entity\EmbeddedForm']);

        $formType = new EmbeddedFormType();
        $formType->setDefaultOptions($resolver);
    }

    /**
     * @test
     */
    public function shouldReturnFormName()
    {
        $formType = new EmbeddedFormType();

        $this->assertEquals('embedded_form', $formType->getName());
    }
}
