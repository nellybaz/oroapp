<?php

/* OroWorkflowBundle:WorkflowDefinition/widget:activateForm.html.twig */
class __TwigTemplate_7285a2df5bef7838ec09db877b528d891479f0ad64470d07707c4339cdb3ac9b extends Twig_Template
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
        echo "<div class=\"widget-content\"
     data-page-component-module=\"oroworkflow/js/app/components/activate-form-widget-component\"
     data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("_wid" => $this->getAttribute($this->getAttribute(        // line 4
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "success" =>         // line 5
array_key_exists("savedId", $context), "deactivated" => ((        // line 6
array_key_exists("deactivated", $context)) ? (twig_join_filter(($context["deactivated"] ?? null), ", ")) : (null)), "selectors" => array("form" => ("#" . $this->getAttribute($this->getAttribute(        // line 7
($context["form"] ?? null), "vars", array()), "id", array()))), "error" => ((        // line 8
array_key_exists("error", $context)) ? (($context["error"] ?? null)) : (null)))), "html", null, true);
        // line 9
        echo "\">

     ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition/widget:activateForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 9,  28 => 8,  27 => 7,  26 => 6,  25 => 5,  24 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition/widget:activateForm.html.twig", "");
    }
}
