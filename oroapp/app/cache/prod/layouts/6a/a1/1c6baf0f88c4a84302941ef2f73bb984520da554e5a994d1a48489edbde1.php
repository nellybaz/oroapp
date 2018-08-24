<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list/oro_product_list.yml
 */

class __Oro_Layout_Update_6aa11c6baf0f88c4a84302941ef2f73bb984520da554e5a994d1a48489edbde1 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list/oro_product_list.html.twig' );
        $layoutManipulator->add( '__products', '__root', 'embedded_list', array (
          'item_key' => 'product',
          'use_slider' => true,
          'slider_options' => 
          array (
            'slidesToShow' => 4,
            'arrows' => true,
            'responsive' => 
            array (
              0 => 
              array (
                'breakpoint' => 1100,
                'settings' => 
                array (
                  'arrows' => true,
                ),
              ),
              1 => 
              array (
                'breakpoint' => 993,
                'settings' => 
                array (
                  'slidesToShow' => 3,
                  'arrows' => true,
                ),
              ),
              2 => 
              array (
                'breakpoint' => 641,
                'settings' => 
                array (
                  'slidesToShow' => 2,
                  'arrows' => true,
                ),
              ),
              3 => 
              array (
                'breakpoint' => 415,
                'settings' => 
                array (
                  'slidesToShow' => 1,
                  'arrows' => true,
                ),
              ),
            ),
          ),
          'use_footer_align' => true,
          'footer_align_component_options' => 
          array (
            'view' => 'orofrontend/default/js/app/views/footer-align-view',
            'elements' => 
            array (
              'items' => '.embedded-list__item',
              'footer' => '.product-item__qty',
            ),
          ),
          'visible' => '=items',
          'item_extra_class' => 'embedded-products__item',
          'attr' => 
          array (
            'class' => 'embedded-products',
          ),
        ) );
        $layoutManipulator->setOption( '__product', 'class_prefix', 'gallery-view' );
        $layoutManipulator->setOption( '__products', 'items_data.matrixFormType', '=data["product_list_form_availability_provider"].getAvailableMatrixFormTypes(items, "gallery-view")' );
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
            'id' => 'oro_product_list_item',
            'root' => '__products',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}