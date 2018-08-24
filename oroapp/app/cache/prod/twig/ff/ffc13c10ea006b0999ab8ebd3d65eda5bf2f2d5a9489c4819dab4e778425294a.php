<?php

/* @OroWebCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml */
class __TwigTemplate_8b793abdc7ff45fbd4738e31da5cde17feaeec3e38acc7a8684a80265a9a108a extends Twig_Template
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
            id: breadcrumbs
            optionName: breadcrumbs
            optionValue: '=data[\"web_catalog_breadcrumbs\"].getItemsForProduct(context[\"category_id\"], data[\"locale\"].getLocalizedValue(data[\"product\"].getNames()))'
    conditions: 'context[\"web_catalog_id\"] != null'
";
    }

    public function getTemplateName()
    {
        return "@OroWebCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml";
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
        return new Twig_Source("", "@OroWebCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/product_view.yml");
    }
}
