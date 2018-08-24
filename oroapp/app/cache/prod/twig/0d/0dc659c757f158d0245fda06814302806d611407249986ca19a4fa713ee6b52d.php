<?php

/* @OroSEO/layouts/default/oro_catalog_frontend_product_allproducts/layout.yml */
class __TwigTemplate_cdbc6599d7d33654140ef9aa672d955e427e34aa1c93043ea39c1b5f1f6a9e86 extends Twig_Template
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
            optionValue: '=data[\"web_catalog_title\"].getTitle(defaultValue, data[\"category\"].getCurrentCategory())'
        - '@add':
            id: meta_title
            parentId: head
            blockType: meta
            options:
                name: 'title'
                content: '=data[\"category\"].getCurrentCategory()!=null ? data[\"seo\"].getMetaInformation(data[\"category\"].getCurrentCategory(), \"metaTitles\") : null'
        - '@add':
            id: meta_description
            parentId: head
            blockType: meta
            options:
                name: 'description'
                content: '=data[\"category\"].getCurrentCategory()!=null ? data[\"seo\"].getMetaInformation(data[\"category\"].getCurrentCategory(), \"metaDescriptions\") : null'
        - '@add':
            id: meta_keywords
            parentId: head
            blockType: meta
            options:
                name: 'keywords'
                content: '=data[\"category\"].getCurrentCategory()!=null ? data[\"seo\"].getMetaInformation(data[\"category\"].getCurrentCategory(), \"metaKeywords\") : null'
        - '@add':
            id: canonical
            parentId: head
            blockType: external_resource
            options:
                rel: 'canonical'
                href: '=data[\"category\"].getCurrentCategory()!=null ? data[\"canonical\"].getUrl(data[\"category\"].getCurrentCategory()) : null'
        - '@add':
            id: entity_localized_urls
            parentId: head
            blockType: seo_localized_links_container
            options:
                linkItems: '=data[\"web_catalog_content_variant\"].getFromRequest()!=null ? data[\"seo_localized_links\"].getAlternates(data[\"web_catalog_content_variant\"].getFromRequest()) : (data[\"category\"].getCurrentCategory()!=null ? data[\"seo_localized_links\"].getAlternates(data[\"category\"].getCurrentCategory()) : [])'
";
    }

    public function getTemplateName()
    {
        return "@OroSEO/layouts/default/oro_catalog_frontend_product_allproducts/layout.yml";
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
        return new Twig_Source("", "@OroSEO/layouts/default/oro_catalog_frontend_product_allproducts/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/oro_catalog_frontend_product_allproducts/layout.yml");
    }
}
