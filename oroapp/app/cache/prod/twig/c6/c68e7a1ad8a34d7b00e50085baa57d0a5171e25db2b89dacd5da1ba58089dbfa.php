<?php

/* OroPricingBundle:Datagrid:Column/productPrice.html.twig */
class __TwigTemplate_03cf1b12fafd20f46ddc1bef9072c30879973791ff9c57b0c18725790d2f1d93 extends Twig_Template
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
            echo "    ";
            $context["shownUnit"] = "";
            // line 4
            echo "
    <table>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["price"]) {
                // line 7
                echo "            ";
                if ((($context["shownUnit"] ?? null) != $this->getAttribute($this->getAttribute($context["price"], "unit", array()), "code", array()))) {
                    // line 8
                    echo "                ";
                    $context["shownUnit"] = $this->getAttribute($this->getAttribute($context["price"], "unit", array()), "code", array());
                    // line 9
                    echo "                <tr>
                    <td";
                    // line 10
                    if (($context["showTierPrices"] ?? null)) {
                        echo " colspan=\"2\"";
                    }
                    echo " class=\"renderable\">
                        <div class=\"product-price-unit";
                    // line 11
                    if (($context["key"] != 0)) {
                        echo "-with-margin";
                    }
                    echo "\">
                            <strong>";
                    // line 12
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["shownUnit"] ?? null))), "html", null, true);
                    echo "</strong>
                        </div>
                    </td>
                </tr>
            ";
                }
                // line 17
                echo "
            <tr>
                ";
                // line 19
                if (($context["showTierPrices"] ?? null)) {
                    // line 20
                    echo "                    <td class=\"renderable\">
                        <div class=\"text-right\">";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "quantity", array()), "html", null, true);
                    echo ":&nbsp;</div>
                    </td>
                ";
                }
                // line 24
                echo "                <td class=\"renderable\">
                    <div class=\"text-left\">";
                // line 25
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["price"], "price", array()));
                echo "</div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Datagrid:Column/productPrice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  81 => 25,  78 => 24,  72 => 21,  69 => 20,  67 => 19,  63 => 17,  55 => 12,  49 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  30 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Datagrid:Column/productPrice.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/Datagrid/Column/productPrice.html.twig");
    }
}
