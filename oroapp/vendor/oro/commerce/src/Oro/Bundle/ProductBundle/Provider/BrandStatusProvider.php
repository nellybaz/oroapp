<?php

namespace Oro\Bundle\ProductBundle\Provider;

use Oro\Bundle\ProductBundle\Entity\Brand;

class BrandStatusProvider
{
    /**
     * @return array
     */
    public function getAvailableBrandStatuses()
    {
        return [
            Brand::STATUS_DISABLED => 'oro.product.brand.status.disabled',
            Brand::STATUS_ENABLED => 'oro.product.brand.status.enabled'
        ];
    }
}
