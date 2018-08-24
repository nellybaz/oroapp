<?php

/* @OroPricing/layouts/blank/imports/oro_product_grid/grid.yml */
class __TwigTemplate_53c6c132ae58d4a0d52746189953f3956e6db202c6730394524fad23bb89da04 extends Twig_Template
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
            themes:
                - 'grid_row.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_grid/grid.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_grid/grid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid.yml");
    }
}
