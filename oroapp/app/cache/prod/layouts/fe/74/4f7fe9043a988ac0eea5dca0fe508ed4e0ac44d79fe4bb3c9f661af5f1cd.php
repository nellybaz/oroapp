<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_frontend_root/default.yml
 */

class __Oro_Layout_Update_fe744f7fe9043a988ac0eea5dca0fe508ed4e0ac44d79fe4bb3c9f661af5f1cd implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_frontend_root/default.html.twig' );
        $layoutManipulator->appendOption( 'page_main', 'attr.class', ' offset-none' );
        $layoutManipulator->add( 'featured_categories_container', 'page_content', 'container', array (
          'attr' => 
          array (
            'itemprop' => 'hasOfferCatalog',
            'itemscope' => NULL,
            'itemtype' => 'http://schema.org/OfferCatalog',
          ),
        ), 'featured_menu_container' );
        $layoutManipulator->add( 'featured_categories', 'featured_categories_container', 'embedded_list', array (
          'label' => 'oro.catalog.featured_categories.label',
          'item_key' => 'category',
          'items' => '=data["featured_categories"].getAll([2,3,4,6,7,8,9,10])',
          'items_data' => 
          array (
            'categoryProductsCount' => '=data["categories_products"].getCountByCategories([2,3,4,6,7,8,9,10])',
          ),
          'item_extra_class' => 'embedded-list__item--hide-same',
        ) );
        $layoutManipulator->add( 'featured_category', 'featured_categories', 'container', array (
          'attr' => 
          array (
            'itemprop' => 'itemListElement',
            'itemscope' => NULL,
            'itemtype' => 'http://schema.org/OfferCatalog',
          ),
        ) );
        $layoutManipulator->add( 'featured_category_link', 'featured_category', 'container', array (
          'attr' => 
          array (
            'itemprop' => 'url',
          ),
        ) );
        $layoutManipulator->add( 'featured_category_image', 'featured_category_link', 'block', array (
          'attr' => 
          array (
            'itemprop' => 'image',
          ),
        ) );
        $layoutManipulator->add( 'featured_category_desc', 'featured_category_link', 'container' );
        $layoutManipulator->add( 'featured_category_label', 'featured_category_desc', 'block', array (
          'attr' => 
          array (
            'itemprop' => 'name',
          ),
        ) );
        $layoutManipulator->add( 'featured_category_products', 'featured_category_desc', 'block' );
    }
}