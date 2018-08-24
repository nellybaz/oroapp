<?php

namespace Oro\Bundle\WebsiteSearchBundle\Event;

use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderValue;

use Symfony\Component\EventDispatcher\Event;

class IndexEntityEvent extends Event
{
    const NAME = 'oro_website_search.event.index_entity';

    /**
     * @var string
     */
    private $entityClass;

    /**
     * @var object[]
     */
    private $entities;

    /**
     * @var array
     */
    private $context;

    /**
     * @var array
     */
    private $entitiesData = [];

    /**
     * @param string $entityClass
     * @param object[] $entities
     * @param array $context
     */
    public function __construct($entityClass, array $entities, array $context)
    {
        $this->entityClass = $entityClass;
        $this->context = $context;
        $this->entities = $entities;
    }

    /**
     * @return string
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * @return array
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param int $entityId
     * @param string $fieldName
     * @param string|int|float|\DateTime $value
     * @param bool $addToAllText
     * @return $this
     * @throws \InvalidArgumentException if value is array
     */
    public function addField($entityId, $fieldName, $value, $addToAllText = false)
    {
        $this->validate($value);

        $this->entitiesData[$entityId][$fieldName][] = [
            'value' => $value,
            'all_text' => $addToAllText
        ];

        return $this;
    }

    /**
     * @param int $entityId
     * @param string $fieldName
     * @param string|int|float|\DateTime $value
     * @param array $placeholders
     * @param bool $addToAllText
     * @return $this
     * @throws \InvalidArgumentException if value is array
     */
    public function addPlaceholderField($entityId, $fieldName, $value, $placeholders, $addToAllText = false)
    {
        $this->validate($value);

        $this->entitiesData[$entityId][$fieldName][] = [
            'value' => new PlaceholderValue($value, $placeholders),
            'all_text' => $addToAllText
        ];

        return $this;
    }

    /**
     * @param mixed $value
     */
    protected function validate($value)
    {
        if (!is_scalar($value) && !$value instanceof \DateTime) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Scalars and \DateTime are supported only, "%s" given',
                    is_object($value) ? get_class($value) : gettype($value)
                )
            );
        }
    }

    /**
     * @return array
     */
    public function getEntitiesData()
    {
        return $this->entitiesData;
    }
}
