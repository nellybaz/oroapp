<?php

namespace Oro\Bundle\FlatRateShippingBundle\Tests\Unit\Form\Type;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectRepository;
use Oro\Bundle\FlatRateShippingBundle\Entity\FlatRateSettings;
use Oro\Bundle\FlatRateShippingBundle\Form\Type\FlatRateSettingsType;
use Oro\Bundle\FormBundle\Tests\Unit\Stub\StripTagsExtensionStub;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\LocaleBundle\Form\Type\FallbackPropertyType;
use Oro\Bundle\LocaleBundle\Form\Type\FallbackValueType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizedFallbackValueCollectionType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizedPropertyType;
use Oro\Bundle\LocaleBundle\Tests\Unit\Form\Type\Stub\LocalizationCollectionTypeStub;
use Oro\Bundle\UIBundle\Tools\HtmlTagHelper;
use Oro\Component\Testing\Unit\EntityTrait;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Validation;

class FlatRateSettingsTypeTest extends FormIntegrationTestCase
{
    use EntityTrait;

    const LOCALIZATION_ID = 998;

    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var FlatRateSettingsType */
    protected $formType;

    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    protected function setUp()
    {
        parent::setUp();
        $this->formType = new FlatRateSettingsType();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $repositoryLocalization = $this->createMock(ObjectRepository::class);
        $repositoryLocalization->expects($this->any())
            ->method('find')
            ->willReturnCallback(
                function ($id) {
                    return $this->getEntity(Localization::class, ['id' => $id]);
                }
            );

        $repositoryLocalizedFallbackValue = $this->createMock(ObjectRepository::class);
        $repositoryLocalizedFallbackValue->expects($this->any())
            ->method('find')
            ->willReturnCallback(
                function ($id) {
                    return $this->getEntity(LocalizedFallbackValue::class, ['id' => $id]);
                }
            );

        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->registry->expects($this->any())
            ->method('getRepository')
            ->willReturnMap(
                [
                    ['OroLocaleBundle:Localization', null, $repositoryLocalization],
                    ['OroLocaleBundle:LocalizedFallbackValue', null, $repositoryLocalizedFallbackValue],
                ]
            );
        $this->translator = $this->createMock(TranslatorInterface::class);

        return [
            new PreloadedExtension(
                [
                    LocalizedPropertyType::NAME => new LocalizedPropertyType(),
                    LocalizedFallbackValueCollectionType::NAME => new LocalizedFallbackValueCollectionType(
                        $this->registry
                    ),
                    LocalizationCollectionTypeStub::NAME => new LocalizationCollectionTypeStub(
                        [
                            $this->getEntity(Localization::class, ['id' => self::LOCALIZATION_ID]),
                        ]
                    ),
                    FallbackValueType::NAME => new FallbackValueType(),
                    FallbackPropertyType::NAME => new FallbackPropertyType($this->translator),
                ],
                ['form' => [new StripTagsExtensionStub($this->createMock(HtmlTagHelper::class))]]
            ),
            new ValidatorExtension(Validation::createValidator()),
        ];
    }

    public function testSubmitValid()
    {
        $submitData = [
            'labels' => [
                'values' => [
                    'default' => 'Label 1',
                    'localizations' => [
                        self::LOCALIZATION_ID => [
                            'value' => 'Label 2',
                        ],
                    ],
                ],
            ],
        ];
        $form = $this->factory->create($this->formType);

        $form->submit($submitData);
        $expected = (new FlatRateSettings())
            ->addLabel($this->createLocalizedValue(
                'Label 2_stripped',
                null,
                $this->getEntity(Localization::class, ['id' => self::LOCALIZATION_ID])
            ))->addLabel($this->createLocalizedValue(
                'Label 1_stripped'
            ));
        $this->assertTrue($form->isValid());
        $this->assertEquals($expected, $form->getData());
    }

    /**
     * @param string|null $string
     * @param string|null $text
     * @param Localization|null $localization
     *
     * @return LocalizedFallbackValue
     */
    protected function createLocalizedValue($string = null, $text = null, Localization $localization = null)
    {
        $value = new LocalizedFallbackValue();
        $value->setString($string)
            ->setText($text)
            ->setLocalization($localization);

        return $value;
    }

    public function testGetBlockPrefixReturnsString()
    {
        static::assertTrue(is_string($this->formType->getBlockPrefix()));
    }

    public function testConfigureOptions()
    {
        /** @var OptionsResolver|\PHPUnit_Framework_MockObject_MockObject $resolver */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolver');
        $resolver->expects(static::once())
            ->method('setDefaults')
            ->with([
                'data_class' => FlatRateSettings::class,
            ]);

        $this->formType->configureOptions($resolver);
    }
}
