<?php

/* OroFrontendBundle:layouts/default/oro_frontend_workflow_widget_start_transition_form:layout.html.twig */
class __TwigTemplate_1468a243c2fcc8e65eb8a7e4dbfaf6d4cb0924ac3f891de2a4e0f37d74c39595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:layouts:blank/dialog/dialog.html.twig", "OroFrontendBundle:layouts/default/oro_frontend_workflow_widget_start_transition_form:layout.html.twig", 1);
        $this->blocks = array(
            '_widget_content_widget' => array($this, 'block__widget_content_widget'),
            '_form_actions_widget' => array($this, 'block__form_actions_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:layouts:blank/dialog/dialog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__widget_content_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["pageComponentOptions"] = array("savedId" => ((        // line 5
array_key_exists("savedId", $context)) ? (_twig_default_filter(($context["savedId"] ?? null), null)) : (null)), "message" => "oro.workflow.flash.success");
        // line 8
        echo "    ";
        $context["attr"] = twig_array_merge(twig_array_merge(array("data-page-component-module" => "orofrontend/js/app/components/widget-form-component"),         // line 10
($context["attr"] ?? null)), array("data-page-component-options" => twig_array_merge(        // line 11
($context["pageComponentOptions"] ?? null), (($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array"), array())) : (array())))));
        // line 13
        echo "    ";
        $this->displayParentBlock("_widget_content_widget", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block__form_actions_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 18
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " widget-actions")));
        // line 20
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/oro_frontend_workflow_widget_start_transition_form:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  55 => 20,  53 => 18,  51 => 17,  48 => 16,  41 => 13,  39 => 11,  38 => 10,  36 => 8,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/oro_frontend_workflow_widget_start_transition_form:layout.html.twig", "");
    }
}
