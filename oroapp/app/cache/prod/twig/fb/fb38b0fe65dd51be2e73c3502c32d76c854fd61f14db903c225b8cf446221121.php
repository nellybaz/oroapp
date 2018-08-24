<?php

/* OroOrganizationBundle:BusinessUnit/Autocomplete:selection.html.twig */
class __TwigTemplate_2ccd7474fe15f6287e094f261b8582f08c3ad1695399b822b1f140ccb51b1fcf extends Twig_Template
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
        echo "<% if (id == 'current_business_unit') { %><i><% } %><%= _.escape(name) %><% if (id == 'current_business_unit') { %></i><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroOrganizationBundle:BusinessUnit/Autocomplete:selection.html.twig", "");
    }
}
