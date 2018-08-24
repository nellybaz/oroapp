<?php

namespace Oro\Bundle\CommerceMenuBundle\EventListener;

use Oro\Bundle\CommerceMenuBundle\Entity\MenuUpdate;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;

class MenuUpdateFormViewListener
{
    /**
     * @param BeforeListRenderEvent $event
     */
    public function onEdit(BeforeListRenderEvent $event)
    {
        if (!$event->getFormView()->vars['value'] instanceof MenuUpdate) {
            return;
        }
        $scrollData = $event->getScrollData();

        $blockIds = $scrollData->getBlockIds();
        $firstBlockId = reset($blockIds);
        $subblockIds = $scrollData->getSubblockIds($firstBlockId);
        $firstSubBlockId = reset($subblockIds);
        if (false !== $firstSubBlockId) {
            $template = $event->getEnvironment()->render(
                'OroCommerceMenuBundle:menuUpdate:commerce_menu_update_fields.html.twig',
                ['form' => $event->getFormView()]
            );
            $scrollData->addSubBlockData($firstBlockId, $firstSubBlockId, $template);
        }
    }
}
