<?php

/* OroPricingBundle:Datagrid/Column:productUnitPrice.html.twig */
class __TwigTemplate_eaf4e83e98261aae446d3fb7e653b8d3cda936502fdf598439428d96d997a711 extends Twig_Template
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
        $context["showTierPrices"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "showTierPrices"), "method");
        // line 2
        if ((($context["value"] ?? null) && (twig_length_filter($this->env, ($context["value"] ?? null)) > 0))) {
            // line 3
            echo "    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["price"]) {
                // line 5
                echo "            <tr>
                ";
                // line 6
                if (($context["showTierPrices"] ?? null)) {
                    // line 7
                    echo "                    <td class=\"renderable\">
                        <div class=\"text-right\">";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "quantity", array()), "html", null, true);
                    echo ":&nbsp;</div>
                    </td>
                ";
                }
                // line 11
                echo "                <td class=\"renderable\">
                    <div class=\"text-left\">";
                // line 12
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["price"], "price", array()));
                echo "</div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Datagrid/Column:productUnitPrice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  47 => 12,  44 => 11,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Datagrid/Column:productUnitPrice.html.twig", "");
    }
}
