<?php

/* OroCaseBundle:Case/widget:accountCases.html.twig */
class __TwigTemplate_213281bc6b2c946e07f6ebad56481f3ffc2dc81dbfb7155c490a20630783417d extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCaseBundle:Case/widget:accountCases.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("account-cases-grid", array("id" => $this->getAttribute(($context["account"] ?? null), "id", array())));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case/widget:accountCases.html.twig";
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
        return new Twig_Source("", "OroCaseBundle:Case/widget:accountCases.html.twig", "");
    }
}
