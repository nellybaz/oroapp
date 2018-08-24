<?php

/* OroFlatRateShippingBundle:method:flatRateMethodWithOptions.html.twig */
class __TwigTemplate_ecd3e703278f411db784e23ce9364c5d5bb03a62e93d20759e14355a29c6c7ba extends Twig_Template
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
        $context["ShipRuleMacro"] = $this->loadTemplate("OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "OroFlatRateShippingBundle:method:flatRateMethodWithOptions.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["methodLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_label')->getCallable(), array($this->getAttribute(($context["methodData"] ?? null), "identifier", array()))));
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, ($context["methodLabel"] ?? null)) > 0)) {
            // line 6
            echo "    <li>";
            echo twig_escape_filter($this->env, ($context["methodLabel"] ?? null), "html", null, true);
            echo "
        <ul>
    ";
        }
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["methodData"] ?? null), "types", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 10
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_type_label')->getCallable(), array($this->getAttribute(($context["methodData"] ?? null), "identifier", array()), $this->getAttribute($context["type"], "identifier", array())))), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.flat_rate.method.price.label"), "html", null, true);
            echo ": ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute($context["type"], "options", array()), "price", array(), "array"), array("currency" => ($context["currency"] ?? null)));
            // line 11
            if (($this->getAttribute($this->getAttribute($context["type"], "options", array(), "any", false, true), "handling_fee", array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["type"], "options", array()), "handling_fee", array(), "array")))) {
                // line 12
                echo ", ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.flat_rate.method.handling_fee.label"), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute($context["type"], "options", array()), "handling_fee", array(), "array"), array("currency" => ($context["currency"] ?? null)));
            }
            // line 14
            echo ") ";
            echo $context["ShipRuleMacro"]->getrenderShippingMethodDisabledFlag($this->getAttribute(($context["methodData"] ?? null), "identifier", array()));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        if ((twig_length_filter($this->env, ($context["methodLabel"] ?? null)) > 0)) {
            // line 17
            echo "        </ul>
    </li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroFlatRateShippingBundle:method:flatRateMethodWithOptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  68 => 16,  59 => 14,  53 => 12,  51 => 11,  44 => 10,  39 => 9,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFlatRateShippingBundle:method:flatRateMethodWithOptions.html.twig", "");
    }
}
