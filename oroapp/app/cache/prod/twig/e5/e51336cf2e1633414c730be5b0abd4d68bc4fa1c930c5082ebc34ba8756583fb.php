<?php

/* @OroPricing/layouts/blank/oro_product_frontend_product_view/mobile.yml */
class __TwigTemplate_86baf2e2088e3cafb8920946b14348dabff838322e18070bd8291a2cad8e069d extends Twig_Template
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
            id: oro_product_price
            root: product_view_specification_container
    actions:
        - '@setBlockTheme':
            themes: 'mobile.html.twig'
    conditions: 'context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/oro_product_frontend_product_view/mobile.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/oro_product_frontend_product_view/mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/mobile.yml");
    }
}
