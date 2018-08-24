<?php

/* OroPricingBundle:Product:price_attribute_prices_view.html.twig */
class __TwigTemplate_7a0beb2dbbd02c181f171e1a26eb565dfc37c0f24f5d4daec1e176ede08de3fc extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPricingBundle:Product:price_attribute_prices_view.html.twig", 1);
        // line 2
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priceList"] ?? null), "name", array()), "html", null, true);
        echo "</h5>
";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute(($context["priceList"] ?? null), "currencies", array())) > 2)) {
            // line 4
            echo "    ";
            echo $context["dataGrid"]->getrenderGrid(("product-price-attributes-grid:" . $this->getAttribute(($context["priceList"] ?? null), "id", array())), array("product_id" => $this->getAttribute(($context["product"] ?? null), "id", array()), "price_list_id" => $this->getAttribute(($context["priceList"] ?? null), "id", array())));
            echo "
";
        } else {
            // line 6
            echo "    <div class=\"controls\">
        <div class=\"control-label\">
            <table class=\"grid product-price-attributes\">
                <tbody>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["priceAttributePrices"] ?? null));
            foreach ($context['_seq'] as $context["unitCode"] => $context["prices"]) {
                // line 11
                echo "                    <tr>
                        <td>";
                // line 12
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["unitCode"]), "html", null, true);
                echo "</td>
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["priceList"] ?? null), "currencies", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 14
                    echo "                            ";
                    if ($this->getAttribute($context["prices"], $context["currency"], array(), "array", true, true)) {
                        // line 15
                        echo "                                <td>";
                        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute($this->getAttribute($context["prices"], $context["currency"], array(), "array"), "price", array()), "value", array()), array("currency" => $context["currency"]));
                        echo "</td>
                            ";
                    } else {
                        // line 17
                        echo "                                <td>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceAttribute.withoutPrice"), "html", null, true);
                        echo "</td>
                            ";
                    }
                    // line 19
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['unitCode'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </tbody>
            </table>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Product:price_attribute_prices_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  76 => 20,  70 => 19,  64 => 17,  58 => 15,  55 => 14,  51 => 13,  47 => 12,  44 => 11,  40 => 10,  34 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Product:price_attribute_prices_view.html.twig", "");
    }
}
