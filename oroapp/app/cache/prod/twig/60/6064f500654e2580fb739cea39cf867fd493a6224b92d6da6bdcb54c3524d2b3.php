<?php

/* OroSalesBundle:Opportunity/Autocomplete:selection.html.twig */
class __TwigTemplate_b05a7f40346f007db8af7727df44999c869888779c06c5ac06518efcbe31def8 extends Twig_Template
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
        echo "<%= name %><% if (typeof contactName != 'undefined') { %> - <%= contactName %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Opportunity/Autocomplete:selection.html.twig", "");
    }
}
