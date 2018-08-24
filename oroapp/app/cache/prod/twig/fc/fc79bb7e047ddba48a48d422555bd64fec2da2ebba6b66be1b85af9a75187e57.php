<?php

/* OroTaskBundle:Task/Datagrid/Property:subject.html.twig */
class __TwigTemplate_2f380bb0a12674523fd073d04f7db4338b3063dd7231b082a4fc245ce3e9a84b extends Twig_Template
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
        if (($context["value"] ?? null)) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaskBundle:Task/Datagrid/Property:subject.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            $context["taskId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "id"), "method");
            // line 5
            echo "    ";
            echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_widget_info", array("id" =>             // line 6
($context["taskId"] ?? null))), "aCss" => "no-hash", "label" =>             // line 8
($context["value"] ?? null), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => ("task_info_widget_" .             // line 13
($context["taskId"] ?? null)), "dialogOptions" => array("title" =>             // line 15
($context["value"] ?? null), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 600)))));
            // line 24
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/Datagrid/Property:subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 24,  34 => 15,  33 => 13,  32 => 8,  31 => 6,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/Datagrid/Property:subject.html.twig", "");
    }
}
