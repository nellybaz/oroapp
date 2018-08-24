<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Oro\Bundle\SaleBundle\Form\Type\ContactInfoSourceOptionsType;
use Oro\Bundle\SaleBundle\Provider\OptionsProviderInterface;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;

class ContactInfoSourceOptionsTypeTest extends FormIntegrationTestCase
{
    /**
     * @var OptionsProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $customerOptionProvider;

    /**
     * @var ContactInfoSourceOptionsType
     */
    private $formType;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->customerOptionProvider = $this->createMock(OptionsProviderInterface::class);
        $this->formType = new ContactInfoSourceOptionsType($this->customerOptionProvider);
        parent::setUp();
    }

    public function testSubmit()
    {
        $allowedOptions = [
            'option1',
            'option2',
        ];
        $inputOptions = [];
        $submittedData = 'option1';
        $expectedOptions = [
            'choices' => [
                new ChoiceView('option1', 'option1', 'oro.sale.available_customer_options.type.option1.label'),
                new ChoiceView('option2', 'option2', 'oro.sale.available_customer_options.type.option2.label')
            ],
        ];
        $this->customerOptionProvider
            ->method('getOptions')
            ->willReturn($allowedOptions);

        $this->doTestForm($inputOptions, $expectedOptions, $submittedData);
    }

    /**
     * @param array $inputOptions
     * @param array $expectedOptions
     * @param mixed $submittedData
     *
     * @return FormInterface
     */
    protected function doTestForm(array $inputOptions, array $expectedOptions, $submittedData)
    {
        $form = $this->factory->create($this->formType, null, $inputOptions);
        $formConfig = $form->getConfig();

        foreach ($expectedOptions as $key => $value) {
            static::assertTrue($formConfig->hasOption($key));
        }

        static::assertEquals($expectedOptions['choices'], $form->createView()->vars['choices']);
        $form->submit($submittedData);
        static::assertTrue($form->isValid());
        static::assertEquals($submittedData, $form->getData());

        return $form;
    }
}
