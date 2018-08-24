<?php

/* OroWorkflowBundle:Datagrid:aclGrid.html.twig */
class __TwigTemplate_a53f55a988d7030499bccfcfffb1b379cdf84252bdd4f0184acd522e620c7f57 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroWorkflowBundle:Datagrid:aclGrid.html.twig", 1);
        // line 2
        echo $context["dataGrid"]->getrenderGrid("workflow-permission-grid", array("role" =>         // line 4
($context["entity"] ?? null)), array("cssClass" => "workflow-permission-grid inner-permissions-grid", "themeOptions" => array("readonly" =>         // line 5
($context["isReadonly"] ?? null))));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Datagrid:aclGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  23 => 5,  22 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Datagrid:aclGrid.html.twig", "");
    }
}
