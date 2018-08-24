<?php

/* OroShippingBundle:ShippingMethodsConfigsRule:shippingMethodWithOptions.html.twig */
class __TwigTemplate_e4b47e56b14c6185580c0f2208f7fa03d31ae00a030e87ec647ab5c5af13a24a extends Twig_Template
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
        $context["ShipRuleMacro"] = $this->loadTemplate("OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "OroShippingBundle:ShippingMethodsConfigsRule:shippingMethodWithOptions.html.twig", 1);
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
            echo " ";
            echo $context["ShipRuleMacro"]->getrenderShippingMethodDisabledFlag($this->getAttribute(($context["methodData"] ?? null), "identifier", array()));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        if ((twig_length_filter($this->env, ($context["methodLabel"] ?? null)) > 0)) {
            // line 13
            echo "        </ul>
    </li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:ShippingMethodsConfigsRule:shippingMethodWithOptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  44 => 10,  39 => 9,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:ShippingMethodsConfigsRule:shippingMethodWithOptions.html.twig", "");
    }
}
