<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Symfony\Component\Validator\Constraints;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\ApiBundle\Model\Error;
use Oro\Bundle\ApiBundle\Model\ErrorSource;
use Oro\Bundle\ApiBundle\Processor\Shared\CollectFormErrors;
use Oro\Bundle\ApiBundle\Request\ConstraintTextExtractor;
use Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\FormType\NameValuePairType;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\FormProcessorTestCase;

class CollectFormErrorsTest extends FormProcessorTestCase
{
    /** @var CollectFormErrors */
    protected $processor;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->processor = new CollectFormErrors(new ConstraintTextExtractor());
    }

    public function testProcessWithoutForm()
    {
        $this->processor->process($this->context);
        $this->assertFalse($this->context->hasErrors());
    }

    public function testProcessWithNotSubmittedForm()
    {
        $form = $this->createFormBuilder()->create('testForm')->getForm();

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($this->context->hasErrors());
    }

    public function testProcessWithoutFormConstraints()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add('field1', 'text')
            ->add('field2', 'text')
            ->getForm();
        $form->submit([]);

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($this->context->hasErrors());
    }

    public function testProcessWithEmptyData()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add('field1', 'text', ['constraints' => [new Constraints\NotBlank()]])
            ->add('field2', 'text', ['constraints' => [new Constraints\NotBlank()]])
            ->getForm();
        $form->submit([]);

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field1'),
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field2')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithDataKeyWhichDoesNotRegisteredInForm()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add('field1', 'text', ['constraints' => [new Constraints\NotBlank()]])
            ->add('field2', 'text', ['constraints' => [new Constraints\NotBlank()]])
            ->getForm();
        $form->submit(
            [
                'field1' => 'value',
                'field3' => 'value'
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject(
                    'extra fields constraint',
                    'This form should not contain extra fields.',
                    'testForm'
                ),
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field2')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithPropertyWhichDoesNotRegisteredInFormAndHasInvalidExistingValue()
    {
        $dataClass = 'Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\FormValidation\TestObject';
        $data = new $dataClass();

        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true, 'data_class' => $dataClass])
            ->add('id', 'integer')
            ->getForm();
        $form->setData($data);
        $form->submit(
            [
                'id' => 123,
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'title'),
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidRenamedPropertyValue()
    {
        $dataClass = 'Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\FormValidation\TestObject';
        $data = new $dataClass();

        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true, 'data_class' => $dataClass])
            ->add('renamedTitle', 'text', ['property_path' => 'title'])
            ->getForm();
        $form->setData($data);
        $form->submit(
            [
                'renamedTitle' => null,
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'renamedTitle'),
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidPropertyValues()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add('field1', 'text', ['constraints' => [new Constraints\NotBlank(), new Constraints\NotNull()]])
            ->add('field2', 'text', ['constraints' => [new Constraints\Length(['min' => 2, 'max' => 4])]])
            ->getForm();
        $form->submit(
            [
                'field1' => null,
                'field2' => 'value'
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field1'),
                $this->createErrorObject('not null constraint', 'This value should not be null.', 'field1'),
                $this->createErrorObject(
                    'length constraint',
                    'This value is too long. It should have 4 characters or less.',
                    'field2'
                )
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidCollectionPropertyValue()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add('field1', 'text', ['constraints' => [new Constraints\All(new Constraints\NotNull())]])
            ->getForm();
        $form->submit(
            [
                'field1' => [1, null],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not null constraint', 'This value should not be null.', 'field1.1')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidCollectionRenamedPropertyValue()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add(
                'renamedField1',
                'text',
                ['property_path' => '[field1]', 'constraints' => [new Constraints\All(new Constraints\NotNull())]]
            )
            ->getForm();
        $form->submit(
            [
                'renamedField1' => [1, null],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not null constraint', 'This value should not be null.', 'renamedField1.1')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidCollectionPropertyValueWhenFormFieldIsCollectionType()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add(
                'field1',
                'collection',
                [
                    'type'      => 'text',
                    'options'   => ['constraints' => [new Constraints\NotBlank()]],
                    'allow_add' => true
                ]
            )
            ->getForm();
        $form->submit(
            [
                'field1' => [1, null],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field1.1')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidCollectionRenamedPropertyValueWhenFormFieldIsCollectionType()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add(
                'renamedField1',
                'collection',
                [
                    'property_path' => '[field1]',
                    'type'          => 'text',
                    'options'       => ['constraints' => [new Constraints\NotBlank()]],
                    'allow_add'     => true
                ]
            )
            ->getForm();
        $form->submit(
            [
                'renamedField1' => [1, null],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'renamedField1.1')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidValueOfThirdNestedLevelProperty()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add(
                'field1',
                'collection',
                [
                    'type'      => new NameValuePairType(),
                    'options'   => [
                        'name_options' => ['constraints' => [new Constraints\NotBlank()]]
                    ],
                    'allow_add' => true
                ]
            )
            ->getForm();
        $form->submit(
            [
                'field1' => [
                    [
                        'name' => null
                    ]
                ],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field1.0.name')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidValueOfThirdNestedLevelPropertyAndEnabledErrorBubbling()
    {
        $form = $this->createFormBuilder()->create('testForm', null, ['compound' => true])
            ->add(
                'field1',
                'collection',
                [
                    'type'      => new NameValuePairType(),
                    'options'   => [
                        'name_options' => [
                            'constraints'    => [new Constraints\NotBlank()],
                            'error_bubbling' => true
                        ]
                    ],
                    'allow_add' => true
                ]
            )
            ->getForm();
        $form->submit(
            [
                'field1' => [
                    [
                        'name' => null
                    ]
                ],
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('not blank constraint', 'This value should not be blank.', 'field1.0.name')
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithRootLevelValidationErrorOccurred()
    {
        $rootLevelConstraint = new Constraints\Callback(
            function ($object, ExecutionContextInterface $context) {
                $context->addViolation('Some issue with a whole form data');
            }
        );
        $form = $this->createFormBuilder()
            ->create('testForm', null, ['compound' => true, 'constraints' => [$rootLevelConstraint]])
            ->add('field1', 'text')
            ->getForm();
        $form->submit(
            [
                'field1' => null
            ]
        );

        $this->context->setForm($form);
        $this->processor->process($this->context);

        $this->assertFalse($form->isValid());
        $this->assertTrue($this->context->hasErrors());
        $this->assertEquals(
            [
                $this->createErrorObject('callback constraint', 'Some issue with a whole form data', 'testForm')
            ],
            $this->context->getErrors()
        );
    }

    /**
     * @param string $title
     * @param string $detail
     * @param string $propertyPath
     *
     * @return Error
     */
    protected function createErrorObject($title, $detail, $propertyPath)
    {
        $error = Error::createValidationError($title, $detail);
        if ($propertyPath) {
            $error->setSource(ErrorSource::createByPropertyPath($propertyPath));
        }

        return $error;
    }
}
