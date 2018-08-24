<?php

/* @OroPricing/layouts/default/oro_product_frontend_product_view/default.yml */
class __TwigTemplate_9260d9b2845cb6ecccf898969ab13e9ff35dcba5caf8fc5482f8f4b7888ab1ed extends Twig_Template
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
    imports:
        -
            id: oro_product_price_table
            root: product_view_specification_container
    actions: []
    conditions: '!context[\"is_mobile\"] && !context[\"page_template\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/default/oro_product_frontend_product_view/default.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/default/oro_product_frontend_product_view/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/oro_product_frontend_product_view/default.yml");
    }
}
