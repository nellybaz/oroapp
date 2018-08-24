<?php

/* OroWorkflowBundle:Datagrid/Column:workflowStep.html.twig */
class __TwigTemplate_287735f5f97f0908f57debfcf23bfc65a67e0bb17296783893cf4659b3b1c7d1 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "workflowStepLabel"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 2
            echo "    <div class=\"grid-workflow-step-column\">
        ";
            // line 3
            if ($this->getAttribute($context["line"], "workflowName", array(), "any", true, true)) {
                // line 4
                echo "            <div class=\"grid-workflow-step-column-row\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["line"], "workflowName", array()), array(), "workflows"), "html", null, true);
                echo ":</div>
        ";
            }
            // line 6
            echo "        <div class=\"grid-workflow-step-column-row\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["line"], "stepName", array()), array(), "workflows"), "html", null, true);
            echo "</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Datagrid/Column:workflowStep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Datagrid/Column:workflowStep.html.twig", "");
    }
}
