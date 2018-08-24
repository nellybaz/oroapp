<?php

/* OroWorkflowBundle:WorkflowDefinition/widget:info.html.twig */
class __TwigTemplate_42422e22e45dc2dcf3af0083ec7d5bf404302fb559a2c5aa3f565a2141081357 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition/widget:info.html.twig", 1);
        // line 2
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.label.label"), (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "label", array()), array(), "workflows")) . $context["workflowMacros"]->getrenderGoToTranslationsIconByLink($this->getAttribute(($context["translateLinks"] ?? null), "label", array()))));
        echo "

            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.related_entity.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute(        // line 11
($context["entity"] ?? null), "relatedEntity", array()), "label")));
        // line 12
        echo "
            ";
        // line 13
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.workflow.default_step"), (($this->getAttribute(        // line 15
($context["entity"] ?? null), "startStep", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "startStep", array()), "label", array()), array(), "workflows")) : ("")));
        // line 16
        echo "
            ";
        // line 17
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.steps_display_ordered.label"), (($this->getAttribute(        // line 19
($context["entity"] ?? null), "stepsDisplayOrdered", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))));
        // line 20
        echo "
            ";
        // line 21
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.priority.label"), $this->getAttribute(        // line 23
($context["entity"] ?? null), "priority", array()));
        // line 24
        echo "

            ";
        // line 26
        ob_start();
        // line 27
        echo "                ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "exclusiveActiveGroups", array()))) {
            // line 28
            echo "                    ";
            echo $context["UI"]->getrenderList($this->getAttribute(($context["entity"] ?? null), "exclusiveActiveGroups", array()));
            echo "
                ";
        } else {
            // line 30
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
                ";
        }
        // line 32
        echo "            ";
        $context["activeGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
            ";
        // line 34
        ob_start();
        // line 35
        echo "                ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "exclusiveRecordGroups", array()))) {
            // line 36
            echo "                    ";
            echo $context["UI"]->getrenderList($this->getAttribute(($context["entity"] ?? null), "exclusiveRecordGroups", array()));
            echo "
                ";
        } else {
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
                ";
        }
        // line 40
        echo "            ";
        $context["recordGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
            ";
        // line 42
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.exclusive_active_groups.label"), ($context["activeGroups"] ?? null));
        echo "
            ";
        // line 43
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.exclusive_record_groups.label"), ($context["recordGroups"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  105 => 42,  102 => 41,  99 => 40,  93 => 38,  87 => 36,  84 => 35,  82 => 34,  79 => 33,  76 => 32,  70 => 30,  64 => 28,  61 => 27,  59 => 26,  55 => 24,  53 => 23,  52 => 21,  49 => 20,  47 => 19,  46 => 17,  43 => 16,  41 => 15,  40 => 13,  37 => 12,  35 => 11,  34 => 9,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition/widget:info.html.twig", "");
    }
}
