<?php

/* OroWorkflowBundle:layouts/default/imports/oro_workflow_start_transition_form:layout.html.twig */
class __TwigTemplate_a0874b9cac9c3bdbcd12f220cc7cf6db13d367fbea3252035ccef9725998fe42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_transition_form_wrapper_widget' => array($this, 'block__transition_form_wrapper_widget'),
            '_form_warning_message_widget' => array($this, 'block__form_warning_message_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_transition_form_wrapper_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_form_warning_message_widget', $context, $blocks);
    }

    // line 1
    public function block__transition_form_wrapper_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " start-transition-form-widget")));
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__form_warning_message_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 12
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " transition-message alert")));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:layouts/default/imports/oro_workflow_start_transition_form:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  56 => 14,  54 => 12,  52 => 11,  49 => 10,  42 => 6,  37 => 5,  35 => 3,  33 => 2,  30 => 1,  26 => 10,  23 => 9,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:layouts/default/imports/oro_workflow_start_transition_form:layout.html.twig", "");
    }
}
