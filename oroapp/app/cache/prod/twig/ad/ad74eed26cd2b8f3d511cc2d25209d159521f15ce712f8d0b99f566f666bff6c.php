<?php

/* @OroCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml */
class __TwigTemplate_b7039ff3a03a5a86e430dd6db4e723786f9820ff44ceae038746ce96b179bc15 extends Twig_Template
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
        - '@add':
            id: breadcrumbs
            parentId: page_main_header
            blockType: breadcrumbs
            options:
                breadcrumbs: '=data[\"category_breadcrumbs\"].getItemsForProduct(context[\"category_id\"], data[\"locale\"].getLocalizedValue(data[\"product\"].getNames()))'
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/oro_product_frontend_product_view/product_view.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/product_view.yml");
    }
}
