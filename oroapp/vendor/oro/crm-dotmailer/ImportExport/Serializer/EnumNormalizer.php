<?php

namespace Oro\Bundle\DotmailerBundle\ImportExport\Serializer;

use Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue;
use Oro\Bundle\ImportExportBundle\Serializer\Normalizer\DenormalizerInterface;
use Oro\Bundle\ImportExportBundle\Serializer\Normalizer\NormalizerInterface;
use Oro\Bundle\DotmailerBundle\Provider\ChannelType;

class EnumNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * @param AbstractEnumValue $object
     * @param null|string       $format
     * @param array             $context
     *
     * @return array
     */
    public function normalize($object, $format = null, array $context = [])
    {
        return [
            'id'         => $object->getId(),
            'name'       => $object->getName(),
            'priority'   => (int)$object->getPriority(),
            'is_default' => (bool)$object->isDefault()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $reflection = new \ReflectionClass($class);

        $args = [
            'id'       => empty($data['id']) ? null : $data['id'],
            'name'     => empty($data['name']) ? '' : $data['name'],
            'priority' => empty($data['priority']) ? 0 : $data['priority'],
            'default'  => !empty($data['default'])
        ];

        return $reflection->newInstanceArgs($args);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null, array $context = [])
    {
        $channelType = empty($context['channelType']) ? null : $context['channelType'];

        return is_a($type, 'Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue', true)
            && $channelType == ChannelType::TYPE;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof AbstractEnumValue;
    }
}
