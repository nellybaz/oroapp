<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_row.html.twig */
class __TwigTemplate_91c6f1527bb16ba31d7b6cfef1fef9be1ce88b0b9f809b7284f37d916125e696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_grid__product_price_container_widget' => array($this, 'block___oro_product_grid__product_price_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_grid__product_price_container_widget', $context, $blocks);
    }

    public function block___oro_product_grid__product_price_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 3
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("productPrices" => $this->getAttribute(            // line 4
($context["product"] ?? null), "prices", array())));
            // line 6
            echo "
        ";
            // line 7
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  33 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_row.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_row.html.twig");
    }
}