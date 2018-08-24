<?php

/* OroCurrencyBundle:Datagrid/Column:baseCurrency.html.twig */
class __TwigTemplate_0d066d6cc1b54e404e346b413186e8b5c0aec1148bed6be8475317f43bf88d0d extends Twig_Template
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
        $context["data"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["base_currency_field"] ?? null)), "method");
        // line 2
        if (($context["data"] ?? null)) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, ($context["currency"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["data"] ?? null), 2), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCurrencyBundle:Datagrid/Column:baseCurrency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCurrencyBundle:Datagrid/Column:baseCurrency.html.twig", "");
    }
}
