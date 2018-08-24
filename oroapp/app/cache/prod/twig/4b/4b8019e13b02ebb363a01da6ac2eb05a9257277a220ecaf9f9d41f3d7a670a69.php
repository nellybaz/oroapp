<?php

/* OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout.html.twig */
class __TwigTemplate_b4a0939f4d833a97702a009f4de65fddf272bfb295f195f02436a9d257f012e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__datagrid_toolbar__datagrid_toolbar_actions_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_actions_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_mass_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_extra_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_tools_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_tools_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_page_size_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_page_size_widget'),
            '__datagrid_toolbar__datagrid_items_counter_widget' => array($this, 'block___datagrid_toolbar__datagrid_items_counter_widget'),
            '__datagrid_toolbar__datagrid_toolbar_pagination_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_pagination_widget'),
            '__datagrid_toolbar__datagrid_toolbar_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_widget'),
            '__datagrid_toolbar__datagrid_toolbar_sorting_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_sorting_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_container_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_mass_actions_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_extra_actions_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_tools_container_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_page_size_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__datagrid_toolbar__datagrid_items_counter_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_pagination_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_sorting_widget', $context, $blocks);
    }

    // line 1
    public function block___datagrid_toolbar__datagrid_toolbar_actions_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-toolbar-mass-actions pull-left")));
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 8
    public function block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 10
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " mass-actions-panel btn-group icons-holder")));
        // line 12
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 15
    public function block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 17
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " extra-actions-panel"), "data-grid-extra-actions-panel" => ""));
        // line 20
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 23
    public function block___datagrid_toolbar__datagrid_toolbar_tools_container_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 25
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-toolbar-tools pull-right")));
        // line 27
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 30
    public function block___datagrid_toolbar__datagrid_toolbar_actions_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 32
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " actions-panel pull-right form-horizontal"), "data-grid-actions-panel" => ""));
        // line 35
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 38
    public function block___datagrid_toolbar__datagrid_toolbar_page_size_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 40
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " page-size pull-right form-horizontal"), "data-grid-pagesize" => ""));
        // line 43
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 46
    public function block___datagrid_toolbar__datagrid_items_counter_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 48
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " pull-left form-horizontal"), "data-grid-items-counter" => ""));
        // line 51
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 52
        echo "
    ";
        // line 53
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 54
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "</div>
    ";
        }
    }

    // line 58
    public function block___datagrid_toolbar__datagrid_toolbar_pagination_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 60
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " pagination pagination-centered"), "data-grid-pagination" => ""));
        // line 63
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 66
    public function block___datagrid_toolbar__datagrid_toolbar_widget($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 68
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-toolbar")));
        // line 70
        echo "    <script type=\"text/html\" id=\"template-datagrid-toolbar\">
        <div";
        // line 71
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </script>
";
    }

    // line 75
    public function block___datagrid_toolbar__datagrid_toolbar_sorting_widget($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 77
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " sorting pull-left form-horizontal"), "data-grid-sorting" => ""));
        // line 80
        echo "
    ";
        // line 81
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 82
        echo "
    ";
        // line 83
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 84
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "></div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 84,  249 => 83,  246 => 82,  244 => 81,  241 => 80,  239 => 77,  237 => 76,  234 => 75,  225 => 71,  222 => 70,  220 => 68,  218 => 67,  215 => 66,  206 => 63,  204 => 60,  202 => 59,  199 => 58,  189 => 54,  187 => 53,  184 => 52,  181 => 51,  179 => 48,  177 => 47,  174 => 46,  165 => 43,  163 => 40,  161 => 39,  158 => 38,  149 => 35,  147 => 32,  145 => 31,  142 => 30,  133 => 27,  131 => 25,  129 => 24,  126 => 23,  117 => 20,  115 => 17,  113 => 16,  110 => 15,  101 => 12,  99 => 10,  97 => 9,  94 => 8,  85 => 5,  83 => 3,  81 => 2,  78 => 1,  74 => 75,  71 => 74,  69 => 66,  66 => 65,  64 => 58,  61 => 57,  59 => 46,  56 => 45,  54 => 38,  51 => 37,  49 => 30,  46 => 29,  44 => 23,  41 => 22,  39 => 15,  36 => 14,  34 => 8,  31 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:layouts/blank/imports/datagrid_toolbar:layout.html.twig", "");
    }
}
