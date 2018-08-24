<?php

/* OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout_mobile.html.twig */
class __TwigTemplate_44935e13cac42e628ce6a72a9c0373416c35ed9c9affe285657791f95a37e009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__datagrid_toolbar__datagrid_toolbar_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_page_size_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_page_size_widget'),
            '__datagrid_toolbar__datagrid_toolbar_pagination_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_pagination_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_pagination_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_pagination_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_page_size_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_pagination_container_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_pagination_widget', $context, $blocks);
    }

    // line 1
    public function block___datagrid_toolbar__datagrid_toolbar_actions_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " actions-panel pull-right"), "data-grid-actions-panel" => ""));
        // line 6
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 9
    public function block___datagrid_toolbar__datagrid_toolbar_page_size_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 11
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " page-size pull-left"), "data-grid-pagesize" => ""));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 17
    public function block___datagrid_toolbar__datagrid_toolbar_pagination_container_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 19
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " pagination-container")));
        // line 21
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 24
    public function block___datagrid_toolbar__datagrid_toolbar_pagination_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 26
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " pagination pull-left"), "data-grid-pagination" => ""));
        // line 29
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout_mobile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  95 => 26,  93 => 25,  90 => 24,  81 => 21,  79 => 19,  77 => 18,  74 => 17,  65 => 14,  63 => 11,  61 => 10,  58 => 9,  49 => 6,  47 => 3,  45 => 2,  42 => 1,  38 => 24,  35 => 23,  33 => 17,  30 => 16,  28 => 9,  25 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout_mobile.html.twig", "");
    }
}
