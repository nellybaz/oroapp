<?php

/* OroEmailBundle:Email/widget:emails.html.twig */
class __TwigTemplate_bd6eeb6cf84f43741a05c7d2dc9f3b773564a11ca157a80ba55d5bcea7c8b430 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Email/widget:emails.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/widget:emails.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    ";
        // line 5
        echo $context["dataGrid"]->getrenderGrid("email-grid", ($context["datagridParameters"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/widget:emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/widget:emails.html.twig", "");
    }
}