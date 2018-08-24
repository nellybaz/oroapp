<?php

namespace Oro\Bundle\EntityMergeBundle\Twig;

use Oro\Bundle\EntityMergeBundle\Event\ValueRenderEvent;
use Oro\Bundle\EntityMergeBundle\Exception\InvalidArgumentException;
use Oro\Bundle\EntityMergeBundle\MergeEvents;
use Oro\Bundle\EntityMergeBundle\Metadata\Metadata;
use Oro\Bundle\EntityMergeBundle\Metadata\FieldMetadata;
use Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class MergeRenderer
{
    /**
     * @var \Twig_Environment
     */
    protected $environment;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var string
     */
    protected $defaultTemplate;

    /**
     * @param \Twig_Environment $environment
     * @param EventDispatcherInterface $eventDispatcher
     * @param string $defaultTemplate
     */
    public function __construct(
        \Twig_Environment $environment,
        EventDispatcherInterface $eventDispatcher,
        $defaultTemplate
    ) {
        $this->environment = $environment;
        $this->eventDispatcher = $eventDispatcher;
        $this->defaultTemplate = $defaultTemplate;
    }

    /**
     * Render entity label
     *
     * @param mixed $entity
     * @param EntityMetadata $metadata
     * @return string
     */
    public function renderEntityLabel($entity, EntityMetadata $metadata)
    {
        $template = $metadata->get('template') ? : $this->defaultTemplate;

        $stringValue = $this->convertToString($entity, $metadata);

        return $this->environment->render(
            $template,
            array(
                'metadata' => $metadata,
                'entity' => $entity,
                'convertedValue' => $stringValue,
                'isListValue' => false,
            )
        );
    }

    /**
     * Render field value to string
     *
     * @param mixed $value
     * @param FieldMetadata $metadata
     * @param object $entity
     * @return string
     */
    public function renderFieldValue($value, FieldMetadata $metadata, $entity)
    {
        $template = $metadata->get('template') ? : $this->defaultTemplate;

        if (is_array($value) || $value instanceof \Traversable) {
            $isListValue = true;
            $stringValue = $this->convertListToStringArray($value, $metadata);
        } else {
            $isListValue = false;
            $stringValue = $this->convertToString($value, $metadata);
        }

        return $this->environment->render(
            $template,
            array(
                'convertedValue' => $stringValue,
                'isListValue'    => $isListValue,
                'metadata'       => $metadata,
                'value'          => $value,
            )
        );
    }

    /**
     * Convert list to array of strings
     *
     * @param array|\Traversable $list
     * @param Metadata $metadata
     * @return string[]
     * @throws InvalidArgumentException
     */
    protected function convertListToStringArray($list, Metadata $metadata)
    {
        $result = array();

        foreach ($list as $object) {
            $result[] = $this->convertToString($object, $metadata);
        }

        return $result;
    }

    /**
     * Convert value to string
     *
     * @param mixed $value
     * @param Metadata $metadata
     * @return string
     */
    protected function convertToString($value, Metadata $metadata)
    {
        $convertResult = null;

        if (null === $value || is_scalar($value)) {
            $convertResult = $value;
        } else {
            $method = $metadata->get('cast_method') ? : '__toString';

            if (method_exists($value, $method)) {
                $convertResult = $value->$method();
            }
        }

        $event = new ValueRenderEvent($convertResult, $value, $metadata);
        $this->eventDispatcher->dispatch(MergeEvents::BEFORE_VALUE_RENDER, $event);
        $convertResult = $event->getConvertedValue();

        return (string)$convertResult;
    }
}
