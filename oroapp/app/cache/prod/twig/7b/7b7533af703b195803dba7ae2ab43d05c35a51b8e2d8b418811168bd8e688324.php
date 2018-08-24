<?php

/* OroTaxBundle:Order/Form:taxes.html.twig */
class __TwigTemplate_0d4ea81b7958c6c265a08565bf30be920fbc1390786b61bfa3af09f09c2dc56f extends Twig_Template
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
        $context["result"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "result", array()), array())) : (array()));
        // line 2
        echo "<div data-page-component-module=\"orotax/js/app/components/order-line-item-taxes-component\"
     data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("result" => ((array_key_exists("result", $context)) ? (_twig_default_filter(($context["result"] ?? null), array())) : (array())))), "html", null, true);
        echo "\">
    <div data-table-container></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Order/Form:taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Order/Form:taxes.html.twig", "");
    }
}
