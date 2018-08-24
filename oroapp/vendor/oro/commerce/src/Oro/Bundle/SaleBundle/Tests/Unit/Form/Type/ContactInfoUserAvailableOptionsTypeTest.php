<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Oro\Bundle\SaleBundle\Form\Type\ContactInfoUserAvailableOptionsType;
use Oro\Bundle\SaleBundle\Provider\ContactInfoSourceOptionsProvider;
use Oro\Bundle\SaleBundle\Provider\OptionsProviderInterface;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;

class ContactInfoUserAvailableOptionsTypeTest extends FormIntegrationTestCase
{
    /**
     * @var ContactInfoSourceOptionsProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $optionProvider;

    /**
     * @var ContactInfoUserAvailableOptionsType
     */
    private $formType;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->optionProvider = $this->createMock(OptionsProviderInterface::class);
        $this->formType = new ContactInfoUserAvailableOptionsType($this->optionProvider);
        parent::setUp();
    }

    public function testSubmit()
    {
        $allowedOptions = [
            'option1',
            'option2',
        ];
        $inputOptions = [];
        $submittedData = ['option1', 'option2'];
        $expectedOptions = [
            'choices' => [
                new ChoiceView('option1', 'option1', 'oro.sale.available_user_options.type.option1.label'),
                new ChoiceView('option2', 'option2', 'oro.sale.available_user_options.type.option2.label')
            ],
        ];
        $this->optionProvider
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
