<?php

/* @OroSEO/layouts/default/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_65944b1e711b54d74e3f1d0cccf6417e0047a0c01c51792e5e400859f16ecdf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "layout:
    actions:
        - '@setOption':
            id: title
            optionName: value
            optionValue: '=data[\"web_catalog_title\"].getTitle(defaultValue, data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
        - '@add':
            id: meta_title
            parentId: head
            blockType: meta
            options:
                name: 'title'
                content: '=data[\"seo\"].getMetaInformation(data[\"oro_product_variant\"].getProductVariantOrProduct(data), \"metaTitles\")'
        - '@add':
            id: meta_description
            parentId: head
            blockType: meta
            options:
                name: 'description'
                content: '=data[\"seo\"].getMetaInformation(data[\"oro_product_variant\"].getProductVariantOrProduct(data), \"metaDescriptions\")'
        - '@add':
            id: meta_keywords
            parentId: head
            blockType: meta
            options:
                name: 'keywords'
                content: '=data[\"seo\"].getMetaInformation(data[\"oro_product_variant\"].getProductVariantOrProduct(data), \"metaKeywords\")'
        - '@add':
            id: canonical
            parentId: head
            blockType: external_resource
            options:
                rel: 'canonical'
                href: '=data[\"canonical\"].getUrl(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
        - '@add':
            id: entity_localized_urls
            parentId: head
            blockType: seo_localized_links_container
            options:
                linkItems: '=data[\"seo_localized_links\"].getAlternates(data[\"web_catalog_content_variant\"].getFromRequest() ? data[\"web_catalog_content_variant\"].getFromRequest() : data[\"product\"])'
";
    }

    public function getTemplateName()
    {
        return "@OroSEO/layouts/default/oro_product_frontend_product_view/layout.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroSEO/layouts/default/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/oro_product_frontend_product_view/layout.yml");
    }
}
