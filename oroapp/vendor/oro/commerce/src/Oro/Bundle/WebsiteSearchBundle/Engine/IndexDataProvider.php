<?php

namespace Oro\Bundle\WebsiteSearchBundle\Engine;

use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\EntityBundle\ORM\EntityAliasResolver;
use Oro\Bundle\SearchBundle\Query\Query;
use Oro\Bundle\UIBundle\Tools\HtmlTagHelper;
use Oro\Bundle\WebsiteSearchBundle\Engine\Context\ContextTrait;
use Oro\Bundle\WebsiteSearchBundle\Event;
use Oro\Bundle\WebsiteSearchBundle\Helper\PlaceholderHelper;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderInterface;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderValue;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * Class is responsible for triggering all events during indexation
 * and returning all collected and prepared for saving event data
 */
class IndexDataProvider
{
    use ContextTrait;

    const ALL_TEXT_FIELD = 'all_text';
    const ALL_TEXT_L10N_FIELD = 'all_text_LOCALIZATION_ID';

    /** @var array */
    private $cache;

    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    /** @var EntityAliasResolver */
    private $entityAliasResolver;

    /** @var PlaceholderInterface */
    private $placeholder;

    /** @var HtmlTagHelper */
    protected $htmlTagHelper;

    /** @var PlaceholderHelper */
    private $placeholderHelper;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     * @param EntityAliasResolver $entityAliasResolver
     * @param PlaceholderInterface $placeholder
     * @param HtmlTagHelper $htmlTagHelper
     * @param PlaceholderHelper $placeholderHelper
     */
    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        EntityAliasResolver $entityAliasResolver,
        PlaceholderInterface $placeholder,
        HtmlTagHelper $htmlTagHelper,
        PlaceholderHelper $placeholderHelper
    ) {
        $this->eventDispatcher = $eventDispatcher;
        $this->entityAliasResolver = $entityAliasResolver;
        $this->placeholder = $placeholder;
        $this->htmlTagHelper = $htmlTagHelper;
        $this->placeholderHelper = $placeholderHelper;
    }

    /**
     * @param int $websiteId
     * @param array $context
     * @return array
     */
    public function collectContextForWebsite($websiteId, array $context)
    {
        $context = $this->setContextCurrentWebsite($context, $websiteId);
        $collectContextEvent = new Event\CollectContextEvent($context);
        $this->eventDispatcher->dispatch(Event\CollectContextEvent::NAME, $collectContextEvent);

        return $collectContextEvent->getContext();
    }

    /**
     * @param string $entityClass
     * @param object[] $restrictedEntities
     * @param array $context
     * $context = [
     *     'currentWebsiteId' int Current website id. Should not be passed manually. It is computed from 'websiteIds'
     * ]
     *
     * @param array $entityConfig
     * @return array
     */
    public function getEntitiesData($entityClass, array $restrictedEntities, array $context, array $entityConfig)
    {
        $entityAlias = $this->entityAliasResolver->getAlias($entityClass);

        $indexEntityEvent = new Event\IndexEntityEvent($entityClass, $restrictedEntities, $context);
        $this->eventDispatcher->dispatch(Event\IndexEntityEvent::NAME, $indexEntityEvent);
        $this->eventDispatcher->dispatch(
            sprintf('%s.%s', Event\IndexEntityEvent::NAME, $entityAlias),
            $indexEntityEvent
        );

        return $this->prepareIndexData($indexEntityEvent->getEntitiesData(), $entityConfig);
    }

    /**
     * Adds field types according to entity config, applies placeholders
     * @param array $indexData
     * @param array $entityConfig
     * @return array Structured and cleared data ready to be saved
     */
    private function prepareIndexData(array $indexData, array $entityConfig)
    {
        $preparedIndexData = [];

        if (!array_key_exists('fields', $entityConfig)) {
            return $preparedIndexData;
        }

        $allText = $this->getFieldConfig($entityConfig, self::ALL_TEXT_FIELD, 'name', self::ALL_TEXT_FIELD);
        $allTextL10N = $this->getFieldConfig(
            $entityConfig,
            self::ALL_TEXT_L10N_FIELD,
            'name',
            self::ALL_TEXT_L10N_FIELD
        );

        foreach ($indexData as $entityId => $fieldsValues) {
            $allTextL10NFieldNames = [];

            foreach ($this->toArray($fieldsValues) as $fieldName => $values) {
                $type = $this->getFieldConfig($entityConfig, $fieldName, 'type');

                foreach ($this->toArray($values) as $value) {
                    $singleValueFieldName = $fieldName;
                    $addToAllText = $value['all_text'];
                    $value = $value['value'];

                    if ($value instanceof PlaceholderValue) {
                        $placeholders = $value->getPlaceholders();
                        $value = $value->getValue();

                        if ($this->isAllTextCollected($type, $addToAllText)) {
                            $allTextL10NFieldName = $this->placeholder->replace($allTextL10N, $placeholders);
                            $allTextL10NFieldNames[$allTextL10NFieldName] = $allTextL10NFieldName;
                            $this->setIndexValue($preparedIndexData, $entityId, $allTextL10NFieldName, $value, $type);
                        }

                        $singleValueFieldName = $this->placeholder->replace($singleValueFieldName, $placeholders);
                    } elseif ($this->isAllTextCollected($type, $addToAllText)) {
                        $this->setIndexValue($preparedIndexData, $entityId, $allText, $value, $type);
                    }

                    $this->setIndexValue($preparedIndexData, $entityId, $singleValueFieldName, $value, $type);
                }
            }

            $allTextValue = $this->getIndexValue($preparedIndexData, $entityId, $allText);
            foreach ($allTextL10NFieldNames as $allTextL10NFieldName) {
                $fieldsValue = $this->getIndexValue($preparedIndexData, $entityId, $allTextL10NFieldName);
                $this->setIndexValue($preparedIndexData, $entityId, $allText, $fieldsValue);
                $this->setIndexValue($preparedIndexData, $entityId, $allTextL10NFieldName, $allTextValue);
            }
        }

        return $this->squashTextFields($preparedIndexData);
    }

    /**
     * @param string $fieldType
     * @param bool $addToAllText
     * @return bool
     */
    private function isAllTextCollected($fieldType, $addToAllText)
    {
        return $fieldType === Query::TYPE_TEXT && $addToAllText;
    }

    /**
     * @param mixed $value
     * @return array
     */
    private function toArray($value)
    {
        if (is_array($value) && !array_key_exists('value', $value)) {
            return $value;
        }

        return [$value];
    }

    /**
     * @param array $preparedIndexData
     * @return array
     */
    private function squashTextFields(array $preparedIndexData)
    {
        foreach ($preparedIndexData as $entityId => $fieldsValues) {
            if (!empty($fieldsValues[Query::TYPE_TEXT])) {
                foreach ($fieldsValues[Query::TYPE_TEXT] as $fieldName => $fieldValue) {
                    if (is_array($fieldValue)) {
                        $preparedIndexData[$entityId][Query::TYPE_TEXT][$fieldName] = implode(' ', $fieldValue);
                    }
                }
            }
        }

        return $preparedIndexData;
    }

    /**
     * @param array $preparedIndexData
     * @param int $entityId
     * @param string $fieldName
     * @param array|string $value
     * @param string $type
     */
    private function setIndexValue(array &$preparedIndexData, $entityId, $fieldName, $value, $type = Query::TYPE_TEXT)
    {
        if (is_array($value)) {
            foreach ($value as $data) {
                $this->setIndexValue($preparedIndexData, $entityId, $fieldName, $data, $type);
            }
            return;
        }

        $value = $this->clearValue($type, $fieldName, $value);

        if ($value === null || $value === '') {
            return;
        }

        if ($type === Query::TYPE_TEXT) {
            $existingValues = $this->getIndexValue($preparedIndexData, $entityId, $fieldName);
            if (strpos($fieldName, self::ALL_TEXT_FIELD) === 0) {
                $value = $this->updateAllTextFieldValue($existingValues, $value);
            } else {
                $value = $this->updateRegularTextFieldValue($existingValues, $value);
            }
        }

        $preparedIndexData[$entityId][$type][$fieldName] = $value;
    }

    /**
     * @param string|array  $existingValues
     * @param string        $value
     *
     * @return array
     */
    private function updateAllTextFieldValue(&$existingValues, string $value)
    {
        $value = explode(' ', $value);
        if ($existingValues) {
            $value = array_merge($existingValues, $value);
        }

        return array_unique($value);
    }

    /**
     * @param string|array  $existingValues
     * @param string        $value
     *
     * @return array
     */
    private function updateRegularTextFieldValue($existingValues, string $value)
    {
        if ($existingValues) {
            $existingValues[] = $value;

            return $existingValues;
        }

        return [$value];
    }

    /**
     * @param array $preparedIndexData
     * @param int $entityId
     * @param string $fieldName
     * @return string|array
     */
    private function getIndexValue(array &$preparedIndexData, $entityId, $fieldName)
    {
        return isset($preparedIndexData[$entityId][Query::TYPE_TEXT][$fieldName])
            ? $preparedIndexData[$entityId][Query::TYPE_TEXT][$fieldName] : '';
    }

    /**
     * @param array $entityConfig
     * @param string $fieldName
     * @param string $configName
     * @param string $default
     * @return string
     * @throws InvalidConfigurationException
     */
    private function getFieldConfig(array $entityConfig, $fieldName, $configName, $default = null)
    {
        $cacheKey = md5(json_encode($entityConfig)) . $fieldName . $configName;

        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $fields = array_filter($entityConfig['fields'], function ($fieldConfig) use ($fieldName, $configName) {
            if (!array_key_exists('name', $fieldConfig)) {
                return false;
            }

            if (!array_key_exists($configName, $fieldConfig)) {
                return false;
            }

            return $fieldConfig['name'] === $fieldName ||
                $this->placeholderHelper->isNameMatch($fieldConfig['name'], $fieldName);
        });

        if (!$fields) {
            if ($default) {
                return $default;
            }

            if (in_array($fieldName, [self::ALL_TEXT_FIELD, self::ALL_TEXT_L10N_FIELD], true)) {
                return $configName === 'type' ? Query::TYPE_TEXT : $fieldName;
            }

            throw new InvalidConfigurationException(
                sprintf('Missing option "%s" for "%s" field', $configName, $fieldName)
            );
        }

        $field = end($fields);

        $result = $field[$configName];

        $this->cache[$cacheKey] = $result;

        return $result;
    }

    /**
     * Keep HTML in text fields except all_text* fields
     *
     * @param string $type
     * @param string $fieldName
     * @param mixed $value
     * @return mixed|string
     */
    protected function clearValue($type, $fieldName, $value)
    {
        if ($type === Query::TYPE_TEXT && strpos($fieldName, self::ALL_TEXT_FIELD) === 0) {
            $value = $this->htmlTagHelper->stripTags((string)$value);
        }

        return $value;
    }

    /**
     * @param string $entityClass
     * @param QueryBuilder $queryBuilder
     * @param array $context
     * $context = [
     *     'currentWebsiteId' int Current website id. Should not be passed manually. It is computed from 'websiteIds'
     * ]
     *
     * @return QueryBuilder
     */
    public function getRestrictedEntitiesQueryBuilder($entityClass, $queryBuilder, array $context)
    {
        $entityAlias = $this->entityAliasResolver->getAlias($entityClass);

        $restrictEntitiesEvent = new Event\RestrictIndexEntityEvent($queryBuilder, $context);
        $this->eventDispatcher->dispatch(Event\RestrictIndexEntityEvent::NAME, $restrictEntitiesEvent);
        $this->eventDispatcher->dispatch(
            sprintf('%s.%s', Event\RestrictIndexEntityEvent::NAME, $entityAlias),
            $restrictEntitiesEvent
        );

        return $restrictEntitiesEvent->getQueryBuilder();
    }
}
