<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\SaleBundle\Form\Type\ContactInfoUserOptionsType;
use Oro\Bundle\SaleBundle\Provider\OptionProviderWithDefaultValueInterface;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;

class ContactInfoUserOptionsTypeTest extends FormIntegrationTestCase
{
    /**
     * @var OptionProviderWithDefaultValueInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $optionProvider;

    /**
     * @var ContactInfoUserOptionsType
     */
    private $formType;

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $configManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->configManager = $this->createMock(ConfigManager::class);
        $this->optionProvider = $this->createMock(OptionProviderWithDefaultValueInterface::class);
        $this->formType = new ContactInfoUserOptionsType($this->optionProvider, $this->configManager);
        parent::setUp();
    }

    public function testSubmit()
    {
        $this->configManager->expects(static::once())
            ->method('get')
            ->willReturn('');
        $this->optionProvider->expects($this->once())
            ->method('getDefaultOption')
            ->willReturn('option1');
        $allowedOptions = [
            'option1',
            'option2',
        ];
        $inputOptions = [];
        $submittedData = 'option1';
        $expectedOptions = [
            'choices' => [
                new ChoiceView('option1', 'option1', 'oro.sale.contact_info_user_options.type.option1.label'),
                new ChoiceView('option2', 'option2', 'oro.sale.contact_info_user_options.type.option2.label')
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
