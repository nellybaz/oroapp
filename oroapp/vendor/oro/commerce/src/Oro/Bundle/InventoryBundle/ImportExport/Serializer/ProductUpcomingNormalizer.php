<?php

namespace Oro\Bundle\InventoryBundle\ImportExport\Serializer;

use Oro\Bundle\InventoryBundle\Provider\ProductUpcomingProvider;
use Oro\Bundle\ImportExportBundle\Serializer\Normalizer\DenormalizerInterface;
use Oro\Bundle\EntityBundle\Entity\EntityFieldFallbackValue;
use Oro\Bundle\ProductBundle\Entity\Product;

/** This class is used to transform scalar value from csv file to fallback value */
class ProductUpcomingNormalizer implements DenormalizerInterface
{
    /** @var ProductUpcomingProvider */
    protected $productUpcomingProvider;

    /** @param ProductUpcomingProvider $productUpcomingProvider */
    public function __construct(ProductUpcomingProvider $productUpcomingProvider)
    {
        $this->productUpcomingProvider = $productUpcomingProvider;
    }

    /** {@inheritdoc} */
    public function supportsDenormalization($data, $type, $format = null, array $context = array())
    {
        return is_a($type, EntityFieldFallbackValue::class, true) &&
            $context['entityName'] === Product::class &&
            !empty($context['fieldName']) &&
            $context['fieldName'] === ProductUpcomingProvider::IS_UPCOMING;
    }

    /** {@inheritdoc} */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if ($data === '1') {
            $fallbackEntity = new EntityFieldFallbackValue();
            $fallbackEntity->setScalarValue(1);
        } else {
            $fallbackEntity = null;
        }

        return $fallbackEntity;
    }
}
