<?php

/* @OroPricing/layouts/blank/imports/oro_product_list_item/oro_product_totals.yml */
class __TwigTemplate_ec57a5c1a3bdbbf222fa0d386d4c844410a59b62db06f83d1a53063fa5c9724f extends Twig_Template
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
            id: oro_product_totals
            root: __product_line_item_form
            namespace: product
    actions:
        - '@setBlockTheme':
            themes: 'oro_product_totals.html.twig'
        - '@move':
            id: __product_totals
            parentId: __product_line_item_form
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_list_item/oro_product_totals.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_list_item/oro_product_totals.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_list_item/oro_product_totals.yml");
    }
}
