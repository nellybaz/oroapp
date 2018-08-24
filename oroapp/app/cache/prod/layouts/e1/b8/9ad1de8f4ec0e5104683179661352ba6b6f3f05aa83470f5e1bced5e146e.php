<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/oro_contactus_bridge_contact_us_page/layout.yml
 */

class __Oro_Layout_Update_e1b89ad1de8f4ec0e5104683179661352ba6b6f3f05aa83470f5e1bced5e146e implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'form_item', 'page_content', 'form_fields', array (
          'form' => '=data["contact_us_request_form"]',
        ) );
        $layoutManipulator->setOption( 'page_title', 'defaultValue', array (
          'label' => 'oro.contactus.title',
        ) );
    }
}