<?php

/* @OroPricing/layouts/default/oro_product_frontend_product_view/page_template/short/anon.yml */
class __TwigTemplate_34aace028708cd5859c1b493ae7b449c90ac0b226d71f27e7114869cb872423a extends Twig_Template
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
    conditions: '!context[\"is_mobile\"] && !context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/default/oro_product_frontend_product_view/page_template/short/anon.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/default/oro_product_frontend_product_view/page_template/short/anon.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/oro_product_frontend_product_view/page_template/short/anon.yml");
    }
}
