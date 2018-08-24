<?php

/* @OroCatalog/layouts/blank/oro_product_frontend_product_index/product_index.yml */
class __TwigTemplate_0d94ba21082e69d7ebe003184c67eeff7587feda6065dc8b88634fe5f857802a extends Twig_Template
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
        - '@setBlockTheme':
            themes: 'product_index.html.twig'
        - '@addTree':
            items:
                breadcrumbs:
                    blockType: breadcrumbs
                    options:
                        breadcrumbs: '=data[\"category_breadcrumbs\"].getItems()'
                breadcrumbs_filters:
                    blockType: block
                category_picture:
                    blockType: category
                    options:
                        category: '=data[\"category\"].getCurrentCategory()'
                category_title:
                    blockType: text
                    options:
                        text: '=data[\"locale\"].getLocalizedValue(data[\"category\"].getCurrentCategory().getTitles())'
            tree:
                page_main_header:
                    category_picture: ~
                    breadcrumbs:
                        breadcrumbs_filters: ~
                    category_title: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/oro_product_frontend_product_index/product_index.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/oro_product_frontend_product_index/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml");
    }
}
