<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

use Oro\Bundle\DotmailerBundle\Entity\AddressBook;
use Oro\Bundle\DotmailerBundle\Form\Type\AddressBookType;

class AddressBookTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AddressBookType
     */
    protected $type;

    public function setUp()
    {
        $this->type = new AddressBookType();
    }

    public function testBuildForm()
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder **/
        $builder = $this->getMockBuilder(FormBuilderInterface::class)->getMock();

        $builder->expects($this->at(0))
            ->method('add')
            ->with(
                'channel',
                'oro_dotmailer_integration_select',
                [
                    'label'    => 'oro.dotmailer.integration.label',
                    'required' => true
                ]
            )
            ->will($this->returnSelf());

        $builder->expects($this->at(1))
            ->method('add')
            ->with(
                'name',
                'text',
                [
                    'label'    => 'oro.dotmailer.addressbook.name.label',
                    'required' => true
                ]
            )
            ->will($this->returnSelf());

        $builder->expects($this->at(2))
            ->method('add')
            ->with(
                'visibility',
                'oro_enum_select',
                [
                    'label'           => 'oro.dotmailer.addressbook.visibility.label',
                    'tooltip'         => 'oro.dotmailer.addressbook.visibility.tooltip',
                    'enum_code'       => 'dm_ab_visibility',
                    'excluded_values' => [AddressBook::VISIBILITY_NOTAVAILABLEINTHISVERSION],
                    'required'        => true,
                    'constraints'     => [new Assert\NotNull()]
                ]
            )
            ->will($this->returnSelf());

        $this->type->buildForm($builder, []);
    }

    public function testConfigureOptions()
    {
        /** @var OptionsResolver|\PHPUnit_Framework_MockObject_MockObject $resolver **/
        $resolver = $this->getMockBuilder(OptionsResolver::class)->getMock();
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with([
                'data_class' => 'Oro\Bundle\DotmailerBundle\Entity\AddressBook'
            ]);

        $this->type->configureOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_dotmailer_address_book_form', $this->type->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals('oro_dotmailer_address_book_form', $this->type->getBlockPrefix());
    }
}
