<?php

namespace Oro\Bundle\SEOBundle\EventListener;

use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;

class BrandFormViewListener extends BaseFormViewListener
{
    /**
     * @param BeforeListRenderEvent $event
     */
    public function onBrandEdit(BeforeListRenderEvent $event)
    {
        $this->addEditPageBlock($event);
    }

    /**
     * @return string
     */
    public function getMetaFieldLabelPrefix()
    {
        return 'oro.product.brand';
    }
}
