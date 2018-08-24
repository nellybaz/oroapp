<?php

/* OroWorkflowBundle:Widget:entityWorkflows.html.twig */
class __TwigTemplate_e5eb3c12c9fec6f6f61d00b74b0de4c2c4ac35a13f2452ae37116a6b24502492 extends Twig_Template
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
        if ((array_key_exists("entity", $context) &&  !twig_test_empty(($context["entity"] ?? null)))) {
            // line 2
            echo "    ";
            $context["entity_class"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null));
        }
        // line 4
        if ((array_key_exists("entity_class", $context) && $this->env->getExtension('Oro\Bundle\WorkflowBundle\Twig\WorkflowExtension')->hasApplicableWorkflows(($context["entity"] ?? null)))) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_widget_entity_workflows", array("entityClass" =>             // line 9
($context["entity_class"] ?? null), "entityId" => ((            // line 10
array_key_exists("entity", $context)) ? ($this->getAttribute(($context["entity"] ?? null), "id", array())) : (0)))), "alias" => "workflows"));
            // line 14
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget:entityWorkflows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  30 => 10,  29 => 9,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget:entityWorkflows.html.twig", "");
    }
}
