<?php

/* OroPricingBundle:layouts/blank/oro_product_frontend_product_view:mobile.html.twig */
class __TwigTemplate_4c94c05c6a5e7e7d88f41301a8ae74f7133d95883adef289c95d7d401f900290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_price_container_widget' => array($this, 'block__product_price_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_price_container_widget', $context, $blocks);
    }

    public function block__product_price_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-price--simple", "~data-page-component-options" => array("changeUnitLabel" => true)));
        // line 8
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/oro_product_frontend_product_view:mobile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/oro_product_frontend_product_view:mobile.html.twig", "");
    }
}
