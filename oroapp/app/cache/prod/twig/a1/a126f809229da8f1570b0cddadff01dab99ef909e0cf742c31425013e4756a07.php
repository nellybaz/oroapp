<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:destinations.html.twig */
class __TwigTemplate_0fb56a01b4f983eb0d36113a14dfeeaf9faacdc2be3af5b41001d085c07dc7c7 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    ";
        $context["destinations"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "destinations"), "method"), "toArray", array(), "method");
        // line 3
        echo "
    ";
        // line 4
        $context["escapedDestinations"] = array();
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinations"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["destination"]) {
            // line 6
            echo "        ";
            $context["escapedDestinations"] = twig_array_merge(($context["escapedDestinations"] ?? null), array($context["key"] => twig_escape_filter($this->env, $context["destination"])));
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        echo twig_join_filter(($context["escapedDestinations"] ?? null), "</br>");
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:destinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:destinations.html.twig", "");
    }
}
