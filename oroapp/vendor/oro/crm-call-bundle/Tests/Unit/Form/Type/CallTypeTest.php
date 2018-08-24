<?php

namespace Oro\Bundle\CallBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Test\FormIntegrationTestCase;

use Oro\Bundle\CallBundle\Form\Type\CallType;

class CallTypeTest extends FormIntegrationTestCase
{
    /**
     * @var CallType
     */
    protected $type;

    protected function setUp()
    {
        parent::setUp();

        $phoneProvider = $this->getMockBuilder('Oro\Bundle\AddressBundle\Provider\PhoneProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->type = new CallType($phoneProvider);
    }

    public function testSetDefaultOptions()
    {
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->isType('array'));
        $this->type->setDefaultOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_call_form', $this->type->getName());
    }

    public function testBuildForm()
    {
        $expectedFields = [
            'subject' => 'text',
            'phoneNumber' => 'oro_call_phone',
            'notes' => 'oro_resizeable_rich_text',
            'callDateTime' => 'oro_datetime',
            'callStatus' => 'translatable_entity',
            'duration' => 'oro_duration',
            'direction' => 'translatable_entity'
        ];

        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $counter = 0;
        foreach ($expectedFields as $fieldName => $formType) {
            $builder->expects($this->at($counter))
                ->method('add')
                ->with($fieldName, $formType)
                ->will($this->returnSelf());
            $counter++;
        }
        $options = [
            'phone_suggestions' => []
        ];
        $this->type->buildForm($builder, $options);
    }
}
