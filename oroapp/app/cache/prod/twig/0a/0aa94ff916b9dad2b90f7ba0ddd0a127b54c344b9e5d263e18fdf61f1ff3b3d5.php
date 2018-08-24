<?php

/* @OroPricing/layouts/default/oro_product_frontend_product_view/page_template/list/remove_listed.yml */
class __TwigTemplate_4a208593a309e8a71741b2191959c384fd61bcdb3f10db4b0d842faf2913c9c0 extends Twig_Template
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
        - '@remove':
            id: product_price_listed
    conditions: '!context[\"is_mobile\"] && context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/default/oro_product_frontend_product_view/page_template/list/remove_listed.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/default/oro_product_frontend_product_view/page_template/list/remove_listed.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/oro_product_frontend_product_view/page_template/list/remove_listed.yml");
    }
}
