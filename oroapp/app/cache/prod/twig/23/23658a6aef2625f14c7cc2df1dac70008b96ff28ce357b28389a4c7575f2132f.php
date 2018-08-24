<?php

/* @OroProduct/layouts/blank/config/page_templates.yml */
class __TwigTemplate_c5ec75bfdc72d47a29f5115a6c7c23dc51451b8c6aeec59238f84c657a43cac3 extends Twig_Template
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
        echo "templates:
    -
        label: Short page
        description: Short page template of product page (no additional attributes groups are displayed at all)
        route_name: oro_product_frontend_product_view
        key: short
    -
        label: Two columns page
        description: Two columns template of product page (additional attribute groups are displayed in two columns)
        route_name: oro_product_frontend_product_view
        key: two-columns
    -
        label: List page
        description: List template of product page (additional attribute groups are displayed in column one below another)
        route_name: oro_product_frontend_product_view
        key: list
titles:
    oro_product_frontend_product_view: Product Page
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/config/page_templates.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/config/page_templates.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/config/page_templates.yml");
    }
}
