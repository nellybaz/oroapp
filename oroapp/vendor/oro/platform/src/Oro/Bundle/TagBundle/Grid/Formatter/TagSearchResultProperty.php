<?php

namespace Oro\Bundle\TagBundle\Grid\Formatter;

use Symfony\Component\Security\Core\Util\ClassUtils;

use Oro\Bundle\DataGridBundle\Datasource\ResultRecordInterface;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\SearchBundle\Datagrid\Extension\SearchResultProperty;

class TagSearchResultProperty extends SearchResultProperty
{
    /** @var ConfigProvider */
    protected $entityConfigProvider;

    /**
     * @param \Twig_Environment $environment
     * @param ConfigProvider    $configProvider
     * @param string            $defaultTemplate
     */
    public function __construct(\Twig_Environment $environment, ConfigProvider $configProvider, $defaultTemplate)
    {
        parent::__construct($environment, []);

        $this->entityConfigProvider = $configProvider;
        $this->defaultTemplate      = $defaultTemplate;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue(ResultRecordInterface $record)
    {
        $entity      = $record->getValue('entity');
        $entityClass = ClassUtils::getRealClass($entity);
        if ($this->mappingProvider->isClassSupported($entityClass)) {
            return parent::getValue($record);
        } else {
            $this->params[self::TEMPLATE_KEY] = $this->defaultTemplate;

            return $this->getTemplate()->render(
                [
                    'entityType'   => $this->entityConfigProvider->getConfig($entityClass)->get('label'),
                    'entity'       => $entity,
                    'indexer_item' => $record->getValue('indexer_item')
                ]
            );
        }
    }
}
