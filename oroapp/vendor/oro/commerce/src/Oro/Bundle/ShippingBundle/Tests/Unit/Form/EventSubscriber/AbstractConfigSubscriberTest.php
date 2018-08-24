<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Form\EventSubscriber;

use Genemu\Bundle\FormBundle\Form\JQuery\Type\Select2Type;
use Oro\Bundle\AddressBundle\Form\Type\CountryType;
use Oro\Bundle\AddressBundle\Form\Type\RegionType;
use Oro\Bundle\CurrencyBundle\Form\Type\CurrencySelectionType;
use Oro\Bundle\CurrencyBundle\Provider\CurrencyProviderInterface;
use Oro\Bundle\CurrencyBundle\Rounding\RoundingServiceInterface;
use Oro\Bundle\CurrencyBundle\Utils\CurrencyNameHelper;
use Oro\Bundle\FormBundle\Form\Extension\AdditionalAttrExtension;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\FormBundle\Form\Type\OroChoiceType;
use Oro\Bundle\FormBundle\Tests\Unit\Stub\StripTagsExtensionStub;
use Oro\Bundle\LocaleBundle\Model\LocaleSettings;
use Oro\Bundle\RuleBundle\Validator\Constraints\ExpressionLanguageSyntax;
use Oro\Bundle\RuleBundle\Validator\Constraints\ExpressionLanguageSyntaxValidator;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodConfig;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodConfigCollectionType;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodConfigType;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodsConfigsRuleDestinationType;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodsConfigsRuleType;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodSelectType;
use Oro\Bundle\ShippingBundle\Form\Type\ShippingMethodTypeConfigCollectionType;
use Oro\Bundle\ShippingBundle\Method\CompositeShippingMethodProvider;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodProviderInterface;
use Oro\Bundle\ShippingBundle\Provider\ShippingMethodChoicesProviderInterface;
use Oro\Bundle\ShippingBundle\Provider\ShippingMethodIconProviderInterface;
use Oro\Bundle\ShippingBundle\Validator\Constraints\EnabledTypeConfigsValidationGroup;
use Oro\Bundle\ShippingBundle\Validator\Constraints\EnabledTypeConfigsValidationGroupValidator;
use Oro\Bundle\ShippingBundle\Validator\Constraints\ShippingRuleEnable;
use Oro\Bundle\ShippingBundle\Validator\Constraints\ShippingRuleEnableValidator;
use Oro\Bundle\TranslationBundle\Form\Type\TranslatableEntityType;
use Oro\Bundle\UIBundle\Tools\HtmlTagHelper;
use Oro\Component\Testing\Unit\Form\EventListener\Stub\AddressCountryAndRegionSubscriberStub;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Asset\Packages as AssetHelper;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Translation\TranslatorInterface;

abstract class AbstractConfigSubscriberTest extends FormIntegrationTestCase
{
    /**
     * @var ConfigSubscriberProxyInterface
     */
    protected $subscriber;

    /**
     * @var MethodConfigSubscriberProxy
     */
    protected $methodConfigSubscriber;

    /**
     * @var MethodConfigCollectionSubscriberProxy
     */
    protected $methodConfigCollectionSubscriber;

    /**
     * @var MethodTypeConfigCollectionSubscriberProxy
     */
    protected $methodTypeConfigCollectionSubscriber;

    /**
     * @var ShippingMethodProviderInterface
     */
    protected $shippingMethodProvider;

    public function setUp()
    {
        $this->shippingMethodProvider = new CompositeShippingMethodProvider();
        $this->methodConfigSubscriber = new MethodConfigSubscriberProxy();
        $this->methodConfigCollectionSubscriber = new MethodConfigCollectionSubscriberProxy();
        $this->methodTypeConfigCollectionSubscriber = new MethodTypeConfigCollectionSubscriberProxy();
        parent::setUp();
        $this->methodConfigSubscriber->setFactory($this->factory)->setMethodRegistry($this->shippingMethodProvider);
        $this->methodConfigCollectionSubscriber
            ->setFactory($this->factory)
            ->setMethodRegistry($this->shippingMethodProvider);
        $this->methodTypeConfigCollectionSubscriber
            ->setFactory($this->factory)->setMethodRegistry($this->shippingMethodProvider);
    }

    public function test()
    {
        $this->assertEquals(
            [
                FormEvents::PRE_SET_DATA => 'preSet',
                FormEvents::PRE_SUBMIT => 'preSubmit'
            ],
            $this->subscriber->getSubscribedEvents()
        );
    }

    public function testPreSet()
    {
        $form = $this->factory->create(ShippingMethodsConfigsRuleType::class);
        $shippingRule = new ShippingMethodsConfigsRule();
        $methodConfig = new ShippingMethodConfig();
        $methodConfig->setMethod('flat_rate');
        $shippingRule->addMethodConfig($methodConfig);
        $form->setData($shippingRule);
        $this->assertCount(0, $form->get('methodConfigs'));
    }

    public function testPreSubmitWithData()
    {
        $form = $this->factory->create(ShippingMethodsConfigsRuleType::class);
        $shippingRule = new ShippingMethodsConfigsRule();

        $form->submit([
            'methodConfigs' => [
                [
                    'method' => 'flat_rate',
                    'typeConfigs' => [
                        [
                            'type' => 'primary',
                        ]
                    ]
                ]
            ]
        ]);

        $this->assertCount(0, $shippingRule->getMethodConfigs());
        $this->assertCount(0, $form->get('methodConfigs'));
    }

    /**
     * {@inheritDoc}
     */
    protected function getValidators()
    {
        $enabledTypeConfigsValidationGroup = new EnabledTypeConfigsValidationGroup();
        $shippingRuleEnable = new ShippingRuleEnable();
        $expressionLanguageSyntax = new ExpressionLanguageSyntax();

        return [
            $enabledTypeConfigsValidationGroup->validatedBy() => new EnabledTypeConfigsValidationGroupValidator(),
            $shippingRuleEnable->validatedBy() => $this->createMock(ShippingRuleEnableValidator::class),
            $expressionLanguageSyntax->validatedBy() => $this->createMock(ExpressionLanguageSyntaxValidator::class),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensions()
    {
        $roundingService = $this->createMock(RoundingServiceInterface::class);
        $roundingService->expects($this->any())
            ->method('getPrecision')
            ->willReturn(4);
        $roundingService->expects($this->any())
            ->method('getRoundType')
            ->willReturn(RoundingServiceInterface::ROUND_HALF_UP);
        
        /** @var \PHPUnit_Framework_MockObject_MockObject|CurrencyProviderInterface */
        $currencyProvider = $this->getMockBuilder(CurrencyProviderInterface::class)
            ->disableOriginalConstructor()->getMockForAbstractClass();
        $currencyProvider->expects($this->any())
            ->method('getCurrencyList')
            ->willReturn(['USD']);

        /** @var \PHPUnit_Framework_MockObject_MockObject|TranslatableEntityType */
        $translatableEntity = $this->getMockBuilder(TranslatableEntityType::class)
            ->setMethods(['setDefaultOptions', 'buildForm'])
            ->disableOriginalConstructor()
            ->getMock();
        
        /** @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface */
        $translator = $this->createMock(TranslatorInterface::class);
        $translator->expects(static::any())
            ->method('trans')
            ->will(static::returnCallback(function ($message) {
                return $message.'_translated';
            }));

        /** @var \PHPUnit_Framework_MockObject_MockObject|ShippingMethodChoicesProviderInterface */
        $choicesProvider = $this->createMock(ShippingMethodChoicesProviderInterface::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|ShippingMethodIconProviderInterface */
        $iconProvider = $this->createMock(ShippingMethodIconProviderInterface::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|AssetHelper */
        $assetHelper = $this->createMock(AssetHelper::class);

        return [
            new PreloadedExtension(
                [
                    ShippingMethodsConfigsRuleType::class
                    => new ShippingMethodsConfigsRuleType(),
                    ShippingMethodConfigCollectionType::class
                    => new ShippingMethodConfigCollectionType($this->methodConfigCollectionSubscriber),
                    ShippingMethodConfigType::class
                    => new ShippingMethodConfigType($this->methodConfigSubscriber, $this->shippingMethodProvider),
                    ShippingMethodTypeConfigCollectionType::class =>
                        new ShippingMethodTypeConfigCollectionType($this->methodTypeConfigCollectionSubscriber),
                    CurrencySelectionType::NAME => new CurrencySelectionType(
                        $currencyProvider,
                        $this->getMockBuilder(LocaleSettings::class)->disableOriginalConstructor()->getMock(),
                        $this->getMockBuilder(CurrencyNameHelper::class)->disableOriginalConstructor()->getMock()
                    ),
                    CollectionType::NAME => new CollectionType(),
                    ShippingMethodsConfigsRuleDestinationType::NAME => new ShippingMethodsConfigsRuleDestinationType(
                        new AddressCountryAndRegionSubscriberStub()
                    ),
                    'genemu_jqueryselect2_choice' => new Select2Type('choice'),
                    OroChoiceType::class => new OroChoiceType(),
                    ShippingMethodSelectType::class => new ShippingMethodSelectType(
                        $choicesProvider,
                        $iconProvider,
                        $assetHelper
                    ),
                    'oro_country' => new CountryType(),
                    'genemu_jqueryselect2_translatable_entity' => new Select2Type('translatable_entity'),
                    'translatable_entity' => $translatableEntity,
                    'oro_region' => new RegionType(),
                ],
                ['form' => [
                    new AdditionalAttrExtension(),
                    new StripTagsExtensionStub($this->createMock(HtmlTagHelper::class))
                ]]
            ),
            $this->getValidatorExtension(true)
        ];
    }
}
