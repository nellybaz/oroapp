<?php

namespace Oro\Bundle\SEOBundle\Form\Extension;

use Oro\Bundle\ProductBundle\Form\Type\BrandType;

class BrandFormExtension extends BaseMetaFormExtension
{
    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return BrandType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaFieldLabelPrefix()
    {
        return 'oro.product.brand';
    }
}
