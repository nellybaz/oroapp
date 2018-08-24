<?php

/* OroPricingBundle:layouts/blank/imports/oro_product_list_item:oro_product_totals.html.twig */
class __TwigTemplate_9bbddc9f9262e48802d0510bc4662a946367530c5187756466a97d7c281f0a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_list_item__totals_widget' => array($this, 'block___oro_product_list_item__totals_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_list_item__totals_widget', $context, $blocks);
    }

    public function block___oro_product_list_item__totals_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((($context["matrixFormType"] ?? null) == "popup")) {
            // line 3
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" form__col" . ((($this->getAttribute(            // line 4
($context["totals"] ?? null), "quantity", array()) == 0)) ? (" hide") : (""))), "data-page-component-view" => array("view" => "oropricing/js/app/views/product-total-price-view", "totals" =>             // line 7
($context["totals"] ?? null))));
            // line 10
            echo "
        <div ";
            // line 11
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 12
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/imports/oro_product_list_item:oro_product_totals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  34 => 10,  32 => 7,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/imports/oro_product_list_item:oro_product_totals.html.twig", "");
    }
}
