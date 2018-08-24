<?php

/* OroRFPBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig */
class __TwigTemplate_70d6e98d1b7c832bf7bd2a1f6825cee6db4c60c1f6e267596a93d6f9eb1b702e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_units_request_for_quote_widget' => array($this, 'block__units_request_for_quote_widget'),
            '_request_a_quote_form_button_widget' => array($this, 'block__request_a_quote_form_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_units_request_for_quote_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('_request_a_quote_form_button_widget', $context, $blocks);
    }

    // line 1
    public function block__units_request_for_quote_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <tfoot class=\"product-prices__tfoot\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["units"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 4
            echo "            ";
            if (($context["isPriceUnitsVisible"] ?? null)) {
                // line 5
                echo "                <tr class=\"product-prices__tr\">
                    <td colspan=\"2\" class=\"product-prices__td\">
                        <strong>";
                // line 7
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format($this->getAttribute($context["unit"], "code", array()))), "html", null, true);
                echo "</strong>
                    </td>
                </tr>
            ";
            }
            // line 11
            echo "            <tr class=\"product-prices__tr\">
                <td colspan=\"2\" class=\"product-prices__td\">
                    <div class=\"product_view_request_quote_for_unit\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.btn.add_to_rfp"), "html", null, true);
            echo "</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tfoot>
";
    }

    // line 20
    public function block__request_a_quote_form_button_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["visible"] = false;
        // line 22
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["block"] ?? null), "vars", array()), "product", array()))) {
            // line 23
            echo "        ";
            $context["visible"] = $this->env->getExtension('Oro\Bundle\SaleBundle\Twig\QuoteExtension')->isQuoteVisible($this->getAttribute($this->getAttribute(($context["block"] ?? null), "vars", array()), "product", array()));
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((($context["visible"] ?? null) == true)) {
            // line 27
            echo "        ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig", 27);
            // line 28
            echo "        ";
            $context["btnOptions"] = array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.product.view.request_a_quote"), "aCss" => "direct-link btn_lg btn--info", "dataUrl" => "oro_rfp_frontend_request_create", "pageComponent" => array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosale/js/app/views/product-add-to-rfq-view")));
            // line 39
            echo "        ";
            // line 40
            echo "        <div class=\"pull-left btn-group icons-holder full\">
            ";
            // line 41
            echo $context["UI"]->getclientLink(twig_array_merge(($context["btnOptions"] ?? null), array("class" => "btn icons-holder-text")));
            echo "
        </div>
        ";
            // line 44
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  104 => 41,  101 => 40,  99 => 39,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  68 => 17,  58 => 13,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 20,  23 => 19,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig", "");
    }
}
