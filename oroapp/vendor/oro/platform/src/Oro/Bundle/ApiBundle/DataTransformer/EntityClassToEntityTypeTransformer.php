<?php

namespace Oro\Bundle\ApiBundle\DataTransformer;

use Oro\Component\EntitySerializer\DataTransformerInterface;
use Oro\Bundle\ApiBundle\Processor\Context;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Request\ValueNormalizer;

class EntityClassToEntityTypeTransformer implements DataTransformerInterface
{
    /** @var ValueNormalizer */
    private $valueNormalizer;

    /**
     * @param ValueNormalizer $valueNormalizer
     */
    public function __construct(ValueNormalizer $valueNormalizer)
    {
        $this->valueNormalizer = $valueNormalizer;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($class, $property, $value, array $config, array $context)
    {
        if (empty($value)) {
            return $value;
        }

        return $this->valueNormalizer->normalizeValue(
            $value,
            DataType::ENTITY_TYPE,
            $context[Context::REQUEST_TYPE]
        );
    }
}
