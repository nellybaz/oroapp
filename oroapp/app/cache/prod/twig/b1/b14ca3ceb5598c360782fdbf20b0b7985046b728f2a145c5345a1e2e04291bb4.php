<?php

/* OroCallBundle:Datagrid:Column/direction.html.twig */
class __TwigTemplate_a83cf82ad486011d478a9f952a9fe9bb5949896c1dd59e4d35689d3cea76ed1e extends Twig_Template
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
        if ((($context["value"] ?? null) == "outgoing")) {
            // line 2
            echo "    <i class=\"fa-sign-out out-call\"></i>
";
        } else {
            // line 4
            echo "    <i class=\"fa-sign-in in-call\"></i>
";
        }
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Datagrid:Column/direction.html.twig";
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
        return new Twig_Source("", "OroCallBundle:Datagrid:Column/direction.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm-call-bundle/Resources/views/Datagrid/Column/direction.html.twig");
    }
}
