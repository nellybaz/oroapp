<?php

namespace Oro\Bundle\LocaleBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Manager\LocalizationManager;
use Oro\Bundle\LocaleBundle\Validator\Constraints;
use Oro\Bundle\LocaleBundle\Validator\Constraints\DefaultLocalizationValidator;

class DefaultLocalizationValidatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var Constraints\DefaultLocalization */
    protected $constraint;

    /** @var ConstraintViolationBuilderInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $violationBuilder;

    /** @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $context;

    /** @var LocalizationManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $localizationManager;

    /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $form;

    /** @var DefaultLocalizationValidator */
    protected $validator;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->constraint = new Constraints\DefaultLocalization();
        $this->violationBuilder = $this->createMock(ConstraintViolationBuilderInterface::class);
        $this->context = $this->getMockBuilder(ExecutionContextInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->localizationManager = $this->getMockBuilder(LocalizationManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->form = $this->createMock(FormInterface::class);

        $this->validator = new DefaultLocalizationValidator($this->localizationManager);
        $this->validator->initialize($this->context);
    }

    public function testConfiguration()
    {
        $this->assertEquals(
            'oro_locale.default_localization_validator',
            $this->constraint->validatedBy()
        );
        $this->assertEquals(Constraint::CLASS_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testValidateAndNoLocalizationForm()
    {
        $this->context->expects($this->once())->method('getRoot')->willReturn($this->form);

        $this->form->expects($this->once())
            ->method('getName')
            ->willReturn('unknown_name');

        $this->validator->validate(1, $this->constraint);

        $this->context->expects($this->never())->method('buildViolation');
    }

    public function testValidateAndNoEnabledLocalizationsField()
    {
        $this->context->expects($this->once())->method('getRoot')->willReturn($this->form);
        $this->form->expects($this->once())->method('getName')->willReturn('localization');

        $this->form->expects($this->once())
            ->method('has')
            ->with(DefaultLocalizationValidator::ENABLED_LOCALIZATIONS_NAME)
            ->willReturn(false);

        $this->validator->validate(1, $this->constraint);

        $this->context->expects($this->never())->method('buildViolation');
    }

    public function testValidateAndValueInEnabledLocalizations()
    {
        $this->context->expects($this->once())->method('getRoot')->willReturn($this->form);
        $this->form->expects($this->once())->method('getName')->willReturn('localization');
        $this->form->expects($this->once())->method('has')->willReturn(true);

        $this->form->expects($this->once())
            ->method('getData')
            ->willReturn([
                DefaultLocalizationValidator::ENABLED_LOCALIZATIONS_NAME => [
                    'value' => [1, 2, 3]
                ],
            ]);

        $this->context->expects($this->never())->method('buildViolation');

        $this->validator->validate(1, $this->constraint);
    }

    public function testValidateAndNotEnabledLocalization()
    {
        $this->context->expects($this->once())->method('getRoot')->willReturn($this->form);
        $this->form->expects($this->once())->method('getName')->willReturn('localization');
        $this->form->expects($this->once())->method('has')->willReturn(true);

        $this->form->expects($this->once())
            ->method('getData')
            ->willReturn([
                DefaultLocalizationValidator::ENABLED_LOCALIZATIONS_NAME => [
                    'value' => [2, 3, 4]
                ],
            ]);

        $this->localizationManager->expects($this->once())
            ->method('getLocalization')
            ->willReturn((new Localization)->setName('L1'));

        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with('oro.locale.validators.is_not_enabled', ['%localization%' => 'L1'])
            ->willReturn($this->violationBuilder);

        $this->violationBuilder->expects($this->once())->method('addViolation');

        $this->validator->validate(1, $this->constraint);
    }

    public function testValidateAndUnknownLocalization()
    {
        $this->context->expects($this->once())->method('getRoot')->willReturn($this->form);
        $this->form->expects($this->once())->method('getName')->willReturn('localization');
        $this->form->expects($this->once())->method('has')->willReturn(true);

        $this->form->expects($this->once())
            ->method('getData')
            ->willReturn([
                DefaultLocalizationValidator::ENABLED_LOCALIZATIONS_NAME => [
                    'value' => [2, 3, 4]
                ],
            ]);

        $this->localizationManager->expects($this->once())
            ->method('getLocalization')
            ->willReturn(null);

        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with('oro.locale.validators.unknown_localization', ['%localization_id%' => 1])
            ->willReturn($this->violationBuilder);

        $this->violationBuilder->expects($this->once())->method('addViolation');

        $this->validator->validate(1, $this->constraint);
    }
}
