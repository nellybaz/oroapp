<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\OptionsConfigurator;

use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\OptionsConfigurator\PriceRuleEditorOptionsConfigurator;
use Oro\Bundle\ProductBundle\Expression\Autocomplete\AutocompleteFieldsProviderInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PriceRuleEditorOptionsConfiguratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AutocompleteFieldsProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $autocompleteFieldsProvider;

    /**
     * @var FormFactoryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $formFactory;

    /**
     * @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject
     */
    private $twig;

    /**
     * @var PriceRuleEditorOptionsConfigurator
     */
    private $configurator;

    protected function setUp()
    {
        $this->autocompleteFieldsProvider = $this->createMock(AutocompleteFieldsProviderInterface::class);
        $this->formFactory = $this->createMock(FormFactoryInterface::class);
        $this->twig = $this->getMockBuilder(\Twig_Environment::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->configurator = new PriceRuleEditorOptionsConfigurator(
            $this->autocompleteFieldsProvider,
            $this->formFactory,
            $this->twig
        );
    }

    public function testConfigureOptionsWithoutPriceList()
    {
        $optionsResolver = new OptionsResolver();
        $this->configurator->configureOptions($optionsResolver);

        $this->formFactory->expects($this->never())
            ->method('createNamed');

        $this->twig->expects($this->never())
            ->method('render')
            ->with('OroPricingBundle:Form:form_widget.html.twig');

        $expected = [
            'numericOnly' => false,
            'entities' => null,
            'dataSource' => [],

        ];
        $this->assertEquals($expected, $optionsResolver->resolve([]));
    }

    public function testConfigureOptionsWithPriceList()
    {
        $optionsResolver = new OptionsResolver();
        $this->configurator->configureOptions($optionsResolver);

        $this->assertFormCalled();
        $selectHtml = '<select/>';
        $this->twig->expects($this->once())
            ->method('render')
            ->with('OroPricingBundle:Form:form_widget.html.twig')
            ->willReturn($selectHtml);

        $this->autocompleteFieldsProvider->expects($this->never())
            ->method('getAutocompleteData');

        $options = [
            'numericOnly' => false,
            'entities' => [
                AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']
            ],
            'dataSource' => [],
        ];

        $expected = [
            'numericOnly' => false,
            'entities' => [
                AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']
            ],
            'dataSource' => [
                'price_list' => $selectHtml
            ],

        ];
        $this->assertEquals($expected, $optionsResolver->resolve($options));
    }

    public function testConfigureOptionsWithPriceListEntitiesFilledByProvider()
    {
        $optionsResolver = new OptionsResolver();
        $this->configurator->configureOptions($optionsResolver);

        $this->assertFormCalled();
        $selectHtml = '<select/>';
        $this->twig->expects($this->once())
            ->method('render')
            ->with('OroPricingBundle:Form:form_widget.html.twig')
            ->willReturn($selectHtml);

        $this->autocompleteFieldsProvider->expects($this->once())
            ->method('getAutocompleteData')
            ->with(false)
            ->willReturn(
                [AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']]
            );

        $options = [
            'numericOnly' => false,
            'entities' => [],
            'dataSource' => [],
        ];

        $expected = [
            'numericOnly' => false,
            'entities' => [
                AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']
            ],
            'dataSource' => [
                'price_list' => $selectHtml
            ],

        ];
        $this->assertEquals($expected, $optionsResolver->resolve($options));
    }

    public function testConfigureOptionsWithPriceListTwigFailed()
    {
        $optionsResolver = new OptionsResolver();
        $this->configurator->configureOptions($optionsResolver);

        $this->assertFormCalled();
        $this->twig->expects($this->once())
            ->method('render')
            ->with('OroPricingBundle:Form:form_widget.html.twig')
            ->willThrowException(new \Exception('test'));

        $options = [
            'numericOnly' => false,
            'entities' => [
                AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']
            ],
            'dataSource' => [],
        ];

        $expected = [
            'numericOnly' => false,
            'entities' => [
                AutocompleteFieldsProviderInterface::ROOT_ENTITIES_KEY => [PriceList::class => 'price_list']
            ],
            'dataSource' => [],

        ];
        $this->assertEquals($expected, $optionsResolver->resolve($options));
    }

    public function testLimitNumericOnlyRulesNonNumeric()
    {
        $view = new FormView();
        $view->vars['attr']['data-page-component-options'] = json_encode([]);
        $options = ['numericOnly' => false];

        $this->configurator->limitNumericOnlyRules($view, $options);

        $this->assertJsonStringEqualsJsonString(json_encode([]), $view->vars['attr']['data-page-component-options']);
    }

    public function testLimitNumericOnlyRulesNumeric()
    {
        $view = new FormView();
        $view->vars['attr']['data-page-component-options'] = json_encode([]);
        $options = ['numericOnly' => true];

        $this->configurator->limitNumericOnlyRules($view, $options);

        $this->assertJsonStringEqualsJsonString(
            json_encode(['allowedOperations' => ['math']]),
            $view->vars['attr']['data-page-component-options']
        );
    }

    private function assertFormCalled()
    {
        $priceListSelectFormView = $this->getMockBuilder(FormView::class)
            ->disableOriginalConstructor()
            ->getMock();
        $priceListSelectForm = $this->createMock(FormInterface::class);
        $priceListSelectForm->expects($this->once())
            ->method('createView')
            ->willReturn($priceListSelectFormView);
        $this->formFactory->expects($this->once())
            ->method('createNamed')
            ->willReturn($priceListSelectForm);
    }
}
