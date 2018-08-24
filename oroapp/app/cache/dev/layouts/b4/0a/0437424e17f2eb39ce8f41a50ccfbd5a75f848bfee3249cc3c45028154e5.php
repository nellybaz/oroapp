<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout_mobile.yml
 */

class __Oro_Layout_Update_b40a0437424e17f2eb39ce8f41a50ccfbd5a75f848bfee3249cc3c45028154e5 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setOption( 'meta_viewport', 'content', 'width=device-width, initial-scale=1, viewport-fit=cover' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_mobile"];
    }
}