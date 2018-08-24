<?php

/* OroWorkflowBundle:Widget:buttons.html.twig */
class __TwigTemplate_47f7e64140632b164bd113f10723c1dee710818d352de1b699d81a91dcfcdaa7 extends Twig_Template
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
        echo "
";
        // line 5
        if ((array_key_exists("entity_class", $context) && $this->env->getExtension('Oro\Bundle\WorkflowBundle\Twig\WorkflowExtension')->hasApplicableWorkflows(($context["entity_class"] ?? null)))) {
            // line 6
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "buttons", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_widget_buttons", array("entityClass" =>             // line 10
($context["entity_class"] ?? null), "entityId" => ((            // line 11
array_key_exists("entity", $context)) ? ($this->getAttribute(($context["entity"] ?? null), "id", array())) : (0)))), "alias" => "workflow_buttons"));
            // line 15
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  33 => 11,  32 => 10,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget:buttons.html.twig", "");
    }
}
