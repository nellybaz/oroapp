<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model;

use Symfony\Component\PropertyAccess\PropertyPath;

use Oro\Bundle\ActionBundle\Model\Attribute;
use Oro\Bundle\WorkflowBundle\Model\FormOptionsAssembler;

use Oro\Component\Action\Action\Configurable;

class FormOptionsAssemblerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $actionFactory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $configurationPass;

    /**
     * @var FormOptionsAssembler
     */
    protected $assembler;

    protected function setUp()
    {
        $this->actionFactory = $this->createMock('Oro\Component\Action\Action\ActionFactoryInterface');

        $this->configurationPass = $this->getMockBuilder(
            'Oro\Component\ConfigExpression\ConfigurationPass\ConfigurationPassInterface'
        )->getMockForAbstractClass();

        $this->assembler = new FormOptionsAssembler($this->actionFactory);
        $this->assembler->addConfigurationPass($this->configurationPass);
    }

    public function testAssemble()
    {
        $options = array(
            'attribute_fields' => array(
                'attribute_one' => array('form_type' => 'text'),
                'attribute_two' => array('form_type' => 'text'),
            ),
            'attribute_default_values' => array(
                'attribute_one' => '$foo',
                'attribute_two' => '$bar',
            ),
            'form_init' => array(
                array('@foo' => 'bar')
            )
        );

        $expectedOptions = array(
            'attribute_fields' => array(
                'attribute_one' => array('form_type' => 'text'),
                'attribute_two' => array('form_type' => 'text'),
            ),
            'attribute_default_values' => array(
                'attribute_one' => new PropertyPath('data.foo'),
                'attribute_two' => new PropertyPath('data.bar'),
            ),
            'form_init' => $this->createMock('Oro\Component\Action\Action\ActionInterface')
        );

        $attributes = array(
            $this->createAttribute('attribute_one'),
            $this->createAttribute('attribute_two'),
        );

        $this->configurationPass->expects($this->at(0))
            ->method('passConfiguration')
            ->with($options['attribute_fields'])
            ->will($this->returnValue($expectedOptions['attribute_fields']));

        $this->configurationPass->expects($this->at(1))
            ->method('passConfiguration')
            ->with($options['attribute_default_values'])
            ->will($this->returnValue($expectedOptions['attribute_default_values']));

        $this->actionFactory->expects($this->once())
            ->method('create')
            ->with(Configurable::ALIAS, $options['form_init'])
            ->will($this->returnValue($expectedOptions['form_init']));

        $this->assertEquals(
            $expectedOptions,
            $this->assembler->assemble(
                $options,
                $attributes,
                'step',
                'test'
            )
        );
    }

    /**
     * @dataProvider invalidOptionsDataProvider
     * @param array $options
     * @param array $attributes
     * @param string $owner
     * @param string $ownerName
     * @param string $expectedException
     * @param string $expectedExceptionMessage
     */
    public function testAssembleRequiredOptionException(
        array $options,
        array $attributes,
        $owner,
        $ownerName,
        $expectedException,
        $expectedExceptionMessage
    ) {
        $this->expectException($expectedException);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $this->assembler->assemble($options, $attributes, $owner, $ownerName);
    }

    /**
     * @return array
     */
    public function invalidOptionsDataProvider()
    {
        return array(
            'string_attribute_fields' => array(
                'options' => array(
                    'attribute_fields' => 'string'
                ),
                'attributes' => array(),
                'owner' => FormOptionsAssembler::STEP_OWNER,
                'ownerName' => 'test',
                'expectedException' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'expectedExceptionMessage' => 'Option "form_options.attribute_fields" at step "test" must be an array.'
            ),
            'string_attribute_default_values' => array(
                'options' => array(
                    'attribute_default_values' => 'string'
                ),
                'attributes' => array(),
                'owner' => FormOptionsAssembler::STEP_OWNER,
                'ownerName' => 'test',
                'expectedException' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'expectedExceptionMessage' =>
                    'Option "form_options.attribute_default_values" of step "test" must be an array.'
            ),
            'attribute_not_exist_at_attribute_fields' => array(
                'options' => array(
                    'attribute_fields' => array(
                        'attribute_one' => array('form_type' => 'text'),
                    )
                ),
                'attributes' => array(),
                'owner' => FormOptionsAssembler::STEP_OWNER,
                'ownerName' => 'test',
                'expectedException' => 'Oro\Bundle\WorkflowBundle\Exception\UnknownAttributeException',
                'expectedExceptionMessage' => 'Unknown attribute "attribute_one" at step "test".'
            ),
            'attribute_not_exist_at_attribute_default_values' => array(
                'options' => array(
                    'attribute_default_values' => array(
                        'attribute_one' => array('form_type' => 'text'),
                    )
                ),
                'attributes' => array(),
                'owner' => FormOptionsAssembler::STEP_OWNER,
                'ownerName' => 'test',
                'expectedException' => 'Oro\Bundle\WorkflowBundle\Exception\UnknownAttributeException',
                'expectedExceptionMessage' => 'Unknown attribute "attribute_one" at step "test".'
            ),
            'attribute_default_value_not_in_attribute_fields' => array(
                'options' => array(
                    'attribute_fields' => array(
                        'attribute_one' => array('form_type' => 'text'),
                    ),
                    'attribute_default_values' => array(
                        'attribute_two' => '$attribute_one'
                    )
                ),
                array(
                    $this->createAttribute('attribute_one'),
                    $this->createAttribute('attribute_two'),
                ),
                'owner' => FormOptionsAssembler::STEP_OWNER,
                'ownerName' => 'test',
                'expectedException' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'expectedExceptionMessage' =>
                    'Form options of step "test" doesn\'t have attribute "attribute_two" which is referenced in ' .
                    '"attribute_default_values" option.'
            ),
        );
    }

    /**
     * @param string $name
     * @return Attribute
     */
    protected function createAttribute($name)
    {
        $attribute = new Attribute();
        $attribute->setName($name);

        return $attribute;
    }
}
