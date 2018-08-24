<?php

/* OroCaseBundle:Case/Datagrid/Property:assignedTo.html.twig */
class __TwigTemplate_07a5a18c87daeec33dbaacc84d5822929127d16f962788e600ff053dd1e8f144 extends Twig_Template
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
        $context["assignedToId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "assignedToId"), "method");
        // line 2
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_view") && ($context["assignedToId"] ?? null))) {
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => ($context["assignedToId"] ?? null))), "html", null, true);
            echo "\">
        ";
            // line 4
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case/Datagrid/Property:assignedTo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Case/Datagrid/Property:assignedTo.html.twig", "");
    }
}
