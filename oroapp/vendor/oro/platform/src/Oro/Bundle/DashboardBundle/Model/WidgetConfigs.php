<?php

namespace Oro\Bundle\DashboardBundle\Model;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\DashboardBundle\Entity\Widget;
use Oro\Bundle\DashboardBundle\Event\WidgetItemsLoadDataEvent;
use Oro\Bundle\DashboardBundle\Filter\WidgetConfigVisibilityFilter;
use Oro\Bundle\DashboardBundle\Form\Type\WidgetItemsChoiceType;
use Oro\Bundle\DashboardBundle\Provider\ConfigValueProvider;
use Oro\Component\Config\Resolver\ResolverInterface;

class WidgetConfigs
{
    /** @var ConfigProvider */
    protected $configProvider;

    /** @var ResolverInterface */
    protected $resolver;

    /** @var EntityManagerInterface */
    protected $entityManager;

    /** @var Request|null */
    protected $request;

    /** @var ConfigValueProvider */
    protected $valueProvider;

    /** @var TranslatorInterface */
    protected $translator;

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var WidgetConfigVisibilityFilter */
    protected $visibilityFilter;

    /** @var array */
    protected $widgetOptionsById = [];

    /**
     * @param ConfigProvider               $configProvider
     * @param ResolverInterface            $resolver
     * @param EntityManagerInterface       $entityManager
     * @param ConfigValueProvider          $valueProvider
     * @param TranslatorInterface          $translator
     * @param EventDispatcherInterface     $eventDispatcher
     * @param WidgetConfigVisibilityFilter $visibilityFilter
     */
    public function __construct(
        ConfigProvider $configProvider,
        ResolverInterface $resolver,
        EntityManagerInterface $entityManager,
        ConfigValueProvider $valueProvider,
        TranslatorInterface $translator,
        EventDispatcherInterface $eventDispatcher,
        WidgetConfigVisibilityFilter $visibilityFilter
    ) {
        $this->configProvider = $configProvider;
        $this->resolver = $resolver;
        $this->entityManager = $entityManager;
        $this->valueProvider = $valueProvider;
        $this->translator = $translator;
        $this->eventDispatcher = $eventDispatcher;
        $this->visibilityFilter = $visibilityFilter;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    /**
     * Returns widget attributes with attribute name converted to use in widget's TWIG template
     *
     * @param string $widgetName The name of widget
     *
     * @return array
     */
    public function getWidgetAttributesForTwig($widgetName)
    {
        $result = [
            'widgetName' => $widgetName
        ];

        $widget = $this->configProvider->getWidgetConfig($widgetName);
        if (isset($widget['data_items'])) {
            $widget['data_items'] = $this->visibilityFilter->filterConfigs(
                $widget['data_items'],
                $widgetName
            );
        }
        unset($widget['route'], $widget['route_parameters'], $widget['acl'], $widget['items']);

        $options = $widget['configuration'];
        foreach ($options as $name => $config) {
            $widget['configuration'][$name]['value'] = $this->valueProvider->getViewValue(
                $config['type'],
                $this->getWidgetOptions()->get($name)
            );
        }

        foreach ($widget as $key => $val) {
            $attrName = 'widget';
            foreach (explode('_', str_replace('-', '_', $key)) as $keyPart) {
                $attrName .= ucfirst($keyPart);
            }
            $result[$attrName] = $val;
        }

        // get grid params, if exists, this line is required
        // to not override params passed via request to controller
        $gridParams = $this->request ? $this->request->get('params', []) : [];
        if (!empty($gridParams)) {
            $result['params'] = $this->addGridConfigParams($gridParams);
        }

        return $result;
    }

    /**
     * Add ability to pass widget instance configuration params as grid params
     * so they could be used to bound them to Query parameters,
     * which allows to filter grid by widget configuration values
     *
     * @param array $gridParams
     *
     * @return array
     */
    protected function addGridConfigParams(array $gridParams)
    {
        $result = [];
        $widgetOptions = $this->getWidgetOptions();

        // check if there are some parameter that marked as 'use_config_value'
        foreach ($gridParams as $paramName => $paramValue) {
            if ('use_config_value' !== $paramValue) {
                continue;
            }

            // replace config param value (raw value) in grid parameters
            $result[$paramName] = $widgetOptions->get($paramName);
        }

        return $result;
    }

    /**
     * Returns filtered list of widget configuration
     * based on applicable flags and acl
     *
     * @return array
     */
    public function getWidgetConfigs()
    {
        return $this->visibilityFilter->filterConfigs($this->configProvider->getWidgetConfigs());
    }

    /**
     * Returns widget configuration or null based on applicable flags and acl
     *
     * @param string $widgetName
     *
     * @return array|null
     */
    public function getWidgetConfig($widgetName)
    {
        $configs = $this->visibilityFilter->filterConfigs([
            $widgetName => $this->configProvider->getWidgetConfig($widgetName)
        ]);
        $config = reset($configs);

        return $config ?: null;
    }

    /**
     * Returns a list of items for the given widget
     *
     * @param string $widgetName The name of widget
     *
     * @return array
     */
    public function getWidgetItems($widgetName)
    {
        $widgetConfig = $this->configProvider->getWidgetConfig($widgetName);

        return $items = $this->visibilityFilter->filterConfigs(
            isset($widgetConfig['items']) ? $widgetConfig['items'] : [],
            $widgetName
        );
    }

    /**
     * @param $widgetName
     * @param $widgetId
     * @return array
     */
    public function getWidgetItemsData($widgetName, $widgetId)
    {
        $widgetConfig  = $this->configProvider->getWidgetConfig($widgetName);
        $widgetOptions = $this->getWidgetOptions($widgetId);

        $items = $this->visibilityFilter->filterConfigs(
            isset($widgetConfig['data_items']) ? $widgetConfig['data_items'] : [],
            $widgetName
        );

        if ($this->eventDispatcher->hasListeners(WidgetItemsLoadDataEvent::EVENT_NAME)) {
            $event = new WidgetItemsLoadDataEvent($items, $widgetConfig, $widgetOptions);
            $this->eventDispatcher->dispatch(WidgetItemsLoadDataEvent::EVENT_NAME, $event);
            $items = $event->getItems();
        }

        foreach ($items as $itemName => $config) {
            $items[$itemName]['value'] = $this->resolver->resolve(
                [$config['data_provider']],
                ['widgetOptions' => $widgetOptions]
            )[0];
        }

        return $items;
    }

    /**
     * Returns a list of options for widget with id $widgetId or current widget if $widgetId is not specified
     *
     * @param int|null $widgetId
     *
     * @return WidgetOptionBag
     */
    public function getWidgetOptions($widgetId = null)
    {
        if (is_null($widgetId) && $this->request) {
            $widgetId = $this->request->query->get('_widgetId', null);
        }

        if (!$widgetId) {
            return new WidgetOptionBag();
        }

        if (!empty($this->widgetOptionsById[$widgetId])) {
            return new WidgetOptionBag($this->widgetOptionsById[$widgetId]);
        }

        $widget       = $this->findWidget($widgetId);
        if (!$widget) {
            return new WidgetOptionBag();
        }
        $widgetConfig = $this->configProvider->getWidgetConfig($widget->getName());
        $options      = $widget->getOptions();

        foreach ($widgetConfig['configuration'] as $name => $config) {
            $value          = isset($options[$name]) ? $options[$name] : null;
            $options[$name] = $this->valueProvider->getConvertedValue(
                $widgetConfig,
                $config['type'],
                $value,
                $config,
                $options
            );
        }

        $this->widgetOptionsById[$widgetId] = $options;

        return new WidgetOptionBag($options);
    }

    /**
     * @param Widget $widget
     * @return array
     */
    public function getFormValues(Widget $widget)
    {
        $options      = $widget->getOptions();
        $widgetConfig = $this->configProvider->getWidgetConfig($widget->getName());

        foreach ($widgetConfig['configuration'] as $name => $config) {
            $value          = isset($options[$name]) ? $options[$name] : null;
            $options[$name] = $this->valueProvider->getFormValue($config['type'], $config, $value);
        }

        $options = $this->loadDefaultValue($options, $widgetConfig);

        return $options;
    }

    /**
     * @param $options
     * @param $widgetConfig
     *
     * @return mixed
     */
    protected function loadDefaultValue($options, $widgetConfig)
    {
        if (!$options['title']['title'] || $options['title']['useDefault']) {
            $options['title']['title'] = $this->translator->trans($widgetConfig['label']);
            $options['title']['useDefault'] = true;
        }

        return $options;
    }

    /**
     * @param int $id
     *
     * @return Widget
     */
    protected function findWidget($id)
    {
        return $this->entityManager->getRepository('OroDashboardBundle:Widget')->find($id);
    }

    /**
     * @param array           $widgetConfig
     * @param WidgetOptionBag $widgetOptions
     * @return array|mixed
     */
    protected function getEnabledItems(array $widgetConfig, WidgetOptionBag $widgetOptions)
    {
        if (isset($widgetConfig['configuration'])) {
            foreach ($widgetConfig['configuration'] as $parameterName => $config) {
                if ($config['type'] === WidgetItemsChoiceType::NAME) {
                    return $widgetOptions->get($parameterName, []);
                }
            }
        }

        return [];
    }
}
