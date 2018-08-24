<?php

/* OroWorkflowBundle:WorkflowDefinition:clone.html.twig */
class __TwigTemplate_7c38268c2e00a6f9096be9219fd166de6dff4dacfbec3b62021a4d29a577f618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroWorkflowBundle:WorkflowDefinition:update.html.twig", "OroWorkflowBundle:WorkflowDefinition:clone.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroWorkflowBundle:WorkflowDefinition:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["entity"] = $this->getAttribute(($context["context"] ?? null), "clone", array());
        // line 3
        $context["availableDestinations"] = $this->getAttribute(($context["context"] ?? null), "availableDestinations", array());
        // line 4
        $context["delete_allowed"] = false;
        // line 5
        $context["form"] = $this->getAttribute(($context["context"] ?? null), "formView", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition:clone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition:clone.html.twig", "");
    }
}
