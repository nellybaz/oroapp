<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/oro_product_frontend_product_index/layout.yml
 */

class __Oro_Layout_Update_cd5a85bd13422341f54bd3eec5a61ca334a199ede71afe5566e6125c073dedce implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'title', 'value', '=data["web_catalog_title"].getTitle(defaultValue, data["category"].getCurrentCategory())' );
        $layoutManipulator->add( 'meta_title', 'head', 'meta', array (
          'name' => 'title',
          'content' => '=data["category"].getCurrentCategory()!=null ? data["seo"].getMetaInformation(data["category"].getCurrentCategory(), "metaTitles") : null',
        ) );
        $layoutManipulator->add( 'meta_description', 'head', 'meta', array (
          'name' => 'description',
          'content' => '=data["category"].getCurrentCategory()!=null ? data["seo"].getMetaInformation(data["category"].getCurrentCategory(), "metaDescriptions") : null',
        ) );
        $layoutManipulator->add( 'meta_keywords', 'head', 'meta', array (
          'name' => 'keywords',
          'content' => '=data["category"].getCurrentCategory()!=null ? data["seo"].getMetaInformation(data["category"].getCurrentCategory(), "metaKeywords") : null',
        ) );
        $layoutManipulator->add( 'canonical', 'head', 'external_resource', array (
          'rel' => 'canonical',
          'href' => '=data["category"].getCurrentCategory()!=null ? data["canonical"].getUrl(data["category"].getCurrentCategory()) : null',
        ) );
        $layoutManipulator->add( 'entity_localized_urls', 'head', 'seo_localized_links_container', array (
          'linkItems' => '=data["web_catalog_content_variant"].getFromRequest()!=null ? data["seo_localized_links"].getAlternates(data["web_catalog_content_variant"].getFromRequest()) : (data["category"].getCurrentCategory()!=null ? data["seo_localized_links"].getAlternates(data["category"].getCurrentCategory()) : [])',
        ) );
    }
}