<?php

/* OroSalesBundle:Opportunity/Autocomplete:result.html.twig */
class __TwigTemplate_054f43a647eda0149b050077903db59e816d1d6f8d9c185f523ccd1e44b04112 extends Twig_Template
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
        echo "<%= highlight(name) %><% if (typeof contactName != 'undefined') { %> - <%= highlight(contactName) %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity/Autocomplete:result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity/Autocomplete:result.html.twig", "");
    }
}
