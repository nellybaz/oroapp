<?php

/* OroPricingBundle:Product:subtotal.html.twig */
class __TwigTemplate_ce3826c1210be1c27cc3a9a539f36aa9001fee573da3ad91b901051c55e3c60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroPricingBundle:layouts/default:layout.html.twig", "OroPricingBundle:Product:subtotal.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroPricingBundle:layouts/default:layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                '_quick_add_subtotal_widget' => array($this, 'block__quick_add_subtotal_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_subtotal_widget', $context, $blocks);
    }

    public function block__quick_add_subtotal_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    <div class=\"quick-order-add__col quick-order-add__subtotal\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/quick-add-item-price-view", "elements" => array("pricesHint" => "[data-name=\"prices-hint\"]", "pricesHintContent" => "[data-name=\"prices-hint-content\"]"))), "html", null, true);
        // line 11
        echo "\"
    >
        <label class=\"quick-order-add__label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.price.label"), "html", null, true);
        echo "</label>
        <script type=\"text/template\" data-name=\"prices-hint-content\">
            ";
        // line 15
        $this->displayBlock("product_price_hint_content_js_widget", $context, $blocks);
        echo "
        </script>
        <script type=\"text/template\" data-name=\"prices-hint\">
            ";
        // line 18
        $this->displayBlock("product_price_hint_js_widget", $context, $blocks);
        echo "
        </script>

        <input type=\"text\" class=\"input input--full quick-order-add__subtotal-input\"
               data-name=\"field__product-subtotal\" disabled>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Product:subtotal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  55 => 15,  50 => 13,  46 => 11,  44 => 5,  40 => 3,  38 => 2,  32 => 1,  14 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Product:subtotal.html.twig", "");
    }
}
