<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/oro_cms_frontend_page_view/page.yml
 */

class __Oro_Layout_Update_d48a38905244e14b7b5186a45b3cef5280b8add1e51676cd63aaa4b5a5465f78 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'title', 'value', '=data["web_catalog_title"].getTitle(defaultValue, data["page"])' );
        $layoutManipulator->add( 'meta_title', 'head', 'meta', array (
          'name' => 'title',
          'content' => '=data["seo"].getMetaInformation(data["page"], "metaTitles")',
        ) );
        $layoutManipulator->add( 'meta_description', 'head', 'meta', array (
          'name' => 'description',
          'content' => '=data["seo"].getMetaInformation(data["page"], "metaDescriptions")',
        ) );
        $layoutManipulator->add( 'meta_keywords', 'head', 'meta', array (
          'name' => 'keywords',
          'content' => '=data["seo"].getMetaInformation(data["page"], "metaKeywords")',
        ) );
        $layoutManipulator->add( 'canonical', 'head', 'external_resource', array (
          'rel' => 'canonical',
          'href' => '=data["canonical"].getUrl(data["page"])',
        ) );
        $layoutManipulator->add( 'entity_localized_urls', 'head', 'seo_localized_links_container', array (
          'linkItems' => '=data["seo_localized_links"].getAlternates(data["web_catalog_content_variant"].getFromRequest() ? data["web_catalog_content_variant"].getFromRequest() : data["page"])',
        ) );
    }
}