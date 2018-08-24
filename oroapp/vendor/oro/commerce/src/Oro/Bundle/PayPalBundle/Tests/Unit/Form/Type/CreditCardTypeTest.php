<?php

namespace Oro\Bundle\PayPalBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Validator\Validation;

use Oro\Bundle\PayPalBundle\Form\Type\CreditCardExpirationDateType;
use Oro\Bundle\PayPalBundle\Form\Type\CreditCardType;

class CreditCardTypeTest extends FormIntegrationTestCase
{
    /**
     * @var CreditCardType
     */
    protected $formType;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new CreditCardType();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        return [
            new PreloadedExtension(
                [
                    CreditCardExpirationDateType::NAME => new CreditCardExpirationDateType(),
                ],
                []
            ),
            new ValidatorExtension(Validation::createValidator()),
        ];
    }

    public function testFormConfigurationWhenCvvEntryNotRequired()
    {
        $form = $this->factory->create($this->formType, null, ['requireCvvEntryEnabled' => false]);
        $this->assertFalse($form->has('CVV2'));
        $this->assertFalse($form->has('save_for_later'));
    }

    public function testFormConfigurationWithoutOptions()
    {
        $form = $this->factory->create($this->formType);
        $this->assertTrue($form->has('CVV2'));
        $this->assertFalse($form->has('save_for_later'));
    }

    public function testFormConfigurationWhenCvvEntryRequired()
    {
        $form = $this->factory->create($this->formType, null, ['requireCvvEntryEnabled' => true]);
        $this->assertTrue($form->has('CVV2'));
        $this->assertTrue($form->has('ACCT'));
        $this->assertTrue($form->has('expirationDate'));
        $this->assertTrue($form->has('EXPDATE'));
    }

    public function testSafeForLaterFieldWithZeroAmountAuthorizationEnabledOption()
    {
        $form = $this->factory->create($this->formType, null, ['zeroAmountAuthorizationEnabled' => true]);
        $this->assertTrue($form->has('save_for_later'));
    }

    public function testSafeForLaterFieldWithZeroAmountAuthorizationEnabledOptionDisabled()
    {
        $form = $this->factory->create($this->formType, null, ['zeroAmountAuthorizationEnabled' => false]);
        $this->assertFalse($form->has('save_for_later'));
    }

    public function testGetName()
    {
        $this->assertEquals('oro_paypal_credit_card', $this->formType->getName());
    }

    public function testFinishView()
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock('Symfony\Component\Form\FormInterface');

        $formView = new FormView();
        $formChildrenView = new FormView();
        $formChildrenView->vars = [
            'full_name' => 'full_name',
            'name' => 'name',
        ];
        $formView->children = [$formChildrenView];

        $this->formType->finishView($formView, $form, []);

        foreach ($formView->children as $formItemData) {
            $this->assertEquals('name', $formItemData->vars['full_name']);
        }
    }
}
