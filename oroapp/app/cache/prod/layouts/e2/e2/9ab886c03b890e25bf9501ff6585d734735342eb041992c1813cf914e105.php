<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list_item/oro_product_list_item.yml
 */

class __Oro_Layout_Update_e2e29ab886c03b890e25bf9501ff6585d734735342eb041992c1813cf914e105 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    private $parentLayoutUpdate;
    private $import;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (null === $this->import) {
            throw new \RuntimeException('Missing import configuration for layout update');
        }

        if ($this->parentLayoutUpdate instanceof Oro\Component\Layout\IsApplicableLayoutUpdateInterface
            && !$this->parentLayoutUpdate->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator  = new ImportLayoutManipulator($layoutManipulator, $this->import);
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list_item/oro_product_list_item.html.twig' );
        $layoutManipulator->add( '__product', '__root', 'container' );
        $layoutManipulator->add( '__product_box', '__product', 'container' );
        $layoutManipulator->add( '__product_content', '__product_box', 'container' );
        $layoutManipulator->add( '__product_image_holder', '__product_content', 'container', array (
          'attr' => 
          array (
            'class' => 'product-item__image-holder--aspect-ratio',
          ),
        ) );
        $layoutManipulator->add( '__product_view', '__product_image_holder', 'product_listing_view', array (
          'popup_gallery' => '=data["system_config_provider"].getValue("oro_product.image_preview_on_product_listing_enabled")',
        ) );
        $layoutManipulator->add( '__product_view_image', '__product_view', 'product_list_item_image' );
        $layoutManipulator->add( '__product_popup_gallery', '__product_view', 'block', array (
          'visible' => '=data["system_config_provider"].getValue("oro_product.image_preview_on_product_listing_enabled")',
        ) );
        $layoutManipulator->add( '__product_sticker_new', '__product_image_holder', 'product_sticker' );
        $layoutManipulator->add( '__product_quick_view', '__product_image_holder', 'block', array (
          'visible' => '=false',
        ) );
        $layoutManipulator->add( '__product_title', '__product_content', 'container' );
        $layoutManipulator->add( '__product_primary_content_container', '__product_content', 'container' );
        $layoutManipulator->add( '__product_specification', '__product_primary_content_container', 'container' );
        $layoutManipulator->add( '__product_sku', '__product_specification', 'container' );
        $layoutManipulator->add( '__product_mfg', '__product_specification', 'block', array (
          'visible' => '=false',
        ) );
        $layoutManipulator->add( '__product_sticker_new_text', '__product_specification', 'product_sticker', array (
          'visible' => '=false',
          'mode' => 'text',
        ) );
        $layoutManipulator->add( '__product_short_description', '__product_primary_content_container', 'container' );
        $layoutManipulator->add( '__product_details', '__product_primary_content_container', 'block' );
        $layoutManipulator->add( '__product_secondary_content_container', '__product_content', 'container' );
        $layoutManipulator->add( '__product_secondary_content_first_container', '__product_secondary_content_container', 'container' );
        $layoutManipulator->add( '__product_specification_delivery', '__product_secondary_content_first_container', 'block', array (
          'visible' => '=false',
        ) );
        $layoutManipulator->add( '__product_secondary_content_second_container', '__product_secondary_content_container', 'container' );
        $layoutManipulator->add( '__product_more_info', '__product_secondary_content_second_container', 'block', array (
          'visible' => '=false',
        ) );
    }

    public function setParentUpdate(\Oro\Component\Layout\ImportsAwareLayoutUpdateInterface $parentLayoutUpdate)
    {
        $this->parentLayoutUpdate = $parentLayoutUpdate;
    }

    public function setImport(\Oro\Component\Layout\Model\LayoutUpdateImport $import)
    {
        $this->import = $import;
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return true;
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_product_line_item_form',
            'root' => '__product_secondary_content_second_container',
            'namespace' => 'product',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}