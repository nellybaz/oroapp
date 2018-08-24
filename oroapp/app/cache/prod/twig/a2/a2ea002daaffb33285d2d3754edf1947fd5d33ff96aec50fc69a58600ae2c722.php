<?php

/* OroShippingBundle::macros.html.twig */
class __TwigTemplate_bcf6a70132497e102aa9b9e0c8d7500859b35b54c150f87f9f2dadd11003de61 extends Twig_Template
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
        // line 9
        echo "
";
        // line 20
        echo "
";
    }

    // line 1
    public function get_renderItemRow($__shippingOption__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "shippingOption" => $__shippingOption__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <tr>
        <td class=\"renderable\"><div class=\"text-center\">";
            // line 3
            echo $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format($this->getAttribute(($context["shippingOption"] ?? null), "productUnit", array()));
            echo "</div></td>
        <td class=\"renderable\"><div class=\"text-center\">";
            // line 4
            echo $this->env->getExtension('Oro\Bundle\ShippingBundle\Twig\WeightUnitValueExtension')->formatShort($this->getAttribute($this->getAttribute(($context["shippingOption"] ?? null), "weight", array()), "value", array()), $this->getAttribute($this->getAttribute(($context["shippingOption"] ?? null), "weight", array()), "unit", array()));
            echo "</div></td>
        <td class=\"renderable\"><div class=\"text-center\">";
            // line 5
            echo $this->env->getExtension('Oro\Bundle\ShippingBundle\Twig\DimensionsUnitValueExtension')->formatShort($this->getAttribute($this->getAttribute(($context["shippingOption"] ?? null), "dimensions", array()), "value", array()), $this->getAttribute($this->getAttribute(($context["shippingOption"] ?? null), "dimensions", array()), "unit", array()));
            echo "</div></td>
        <td class=\"renderable\"><div class=\"text-center\">";
            // line 6
            echo $this->env->getExtension('Oro\Bundle\ShippingBundle\Twig\ShippingOptionLabelExtension')->formatFreightClass($this->getAttribute(($context["shippingOption"] ?? null), "freightClass", array()));
            echo "</div></td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function get_renderItemsHead(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <thead>
    <tr>
        <th class=\"renderable\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.product_unit.label"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.weight.label"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.dimensions.label"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.freight_class.label"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrenderProductShippingOptions($__shippingOptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "shippingOptions" => $__shippingOptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            if ((($context["shippingOptions"] ?? null) && (twig_length_filter($this->env, ($context["shippingOptions"] ?? null)) > 0))) {
                // line 23
                echo "        <table class=\"grid table table-condensed table-bordered shipping-options-result-grid\">
            ";
                // line 24
                echo $this->getAttribute($this, "_renderItemsHead", array(), "method");
                echo "
            <tbody>
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shippingOptions"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["options"]) {
                    // line 27
                    echo "                    ";
                    echo $this->getAttribute($this, "_renderItemRow", array(0 => $context["options"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </tbody>
        </table>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroShippingBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 29,  145 => 27,  141 => 26,  136 => 24,  133 => 23,  130 => 22,  118 => 21,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 11,  72 => 10,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  27 => 1,  22 => 20,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/macros.html.twig");
    }
}
