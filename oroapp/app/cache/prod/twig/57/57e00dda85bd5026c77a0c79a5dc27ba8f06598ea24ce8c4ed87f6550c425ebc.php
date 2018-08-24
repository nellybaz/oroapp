<?php

/* OroUIBundle:layouts/blank/dialog:dialog.html.twig */
class __TwigTemplate_229766f6e46ddd7e227a69863ae11d29a5ebed5d3a81a0fb6bcbefa95f2849cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_root_widget' => array($this, 'block__root_widget'),
            '_widget_content_widget' => array($this, 'block__widget_content_widget'),
            '_widget_actions_widget' => array($this, 'block__widget_actions_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_root_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_widget_content_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_widget_actions_widget', $context, $blocks);
    }

    // line 1
    public function block__root_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block__widget_content_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["pageComponentOptions"] = array("_wid" => $this->getAttribute($this->getAttribute(        // line 7
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((($this->getAttribute(        // line 10
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "widget-content ") . ((($context["class_prefix"] ?? null)) ? (($context["class_prefix"] ?? null)) : (""))), "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(        // line 11
($context["pageComponentOptions"] ?? null), (($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array"), array())) : (array()))))));
        // line 13
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 14
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 18
    public function block__widget_actions_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 20
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "widget-actions")));
        // line 22
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:layouts/blank/dialog:dialog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  77 => 22,  75 => 20,  73 => 19,  70 => 18,  63 => 14,  58 => 13,  56 => 11,  55 => 10,  53 => 9,  51 => 7,  49 => 6,  46 => 5,  39 => 2,  36 => 1,  32 => 18,  29 => 17,  27 => 5,  24 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:layouts/blank/dialog:dialog.html.twig", "");
    }
}
