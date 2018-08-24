<?php

/* OroOrganizationBundle:BusinessUnit/widget:users.html.twig */
class __TwigTemplate_da557c2ebf894d4447c50524e38a2f0138903e911ccded2cf9317c2f7e22937f extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit/widget:users.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("bu-view-users-grid", array("business_unit_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit/widget:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:BusinessUnit/widget:users.html.twig", "");
    }
}
