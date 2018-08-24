<?php

/* OroFrontendBundle:layouts/blank/imports/datagrid_toolbar:datagrid.html.twig */
class __TwigTemplate_fc2106d12d1f2c9128df37e1be492c3faf719f1d8f3c94161c871464de3218b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__datagrid_toolbar__datagrid_toolbar_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_widget'),
            '__datagrid_toolbar__datagrid_toolbar_filter_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_filter_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_sorting_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_sorting_widget'),
            '__datagrid_toolbar__datagrid_toolbar_leftside_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_leftside_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_base_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_base_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_rightside_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_rightside_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_mass_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_extra_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_pagination_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_pagination_widget'),
            '__datagrid_toolbar__datagrid_toolbar_page_size_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_page_size_widget'),
            '__datagrid_toolbar__datagrid_toolbar_actions_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_actions_widget'),
            '__datagrid_toolbar__datagrid_toolbar_button_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_button_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_filter_container_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_sorting_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_leftside_container_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_base_container_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_rightside_container_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_mass_actions_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_extra_actions_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_pagination_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_page_size_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_button_container_widget', $context, $blocks);
    }

    // line 1
    public function block___datagrid_toolbar__datagrid_toolbar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " datagrid-toolbar grid__toolbar--offset-s extended"));
        // line 5
        echo "    <script type=\"text/html\" id=\"template-datagrid-toolbar\">
        <div";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </script>
";
    }

    // line 10
    public function block___datagrid_toolbar__datagrid_toolbar_filter_container_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " frontend-datagrid__filter", "data-datafilter-container" => ""));
        // line 15
        echo "
    ";
        // line 16
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 17
        echo "    ";
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 18
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "</div>
    ";
        }
        // line 20
        echo "
";
    }

    // line 23
    public function block___datagrid_toolbar__datagrid_toolbar_sorting_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 25
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datagrid-tool form-horizontal"), "data-grid-sorting" => ""));
        // line 28
        echo "
    <div";
        // line 29
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 32
    public function block___datagrid_toolbar__datagrid_toolbar_leftside_container_widget($context, array $blocks = array())
    {
        // line 33
        echo "    <% if (toolbarPosition !== 'bottom') { %>
        <div class=\"datagrid-toolbar__side\" data-section=\"left-side\">
            ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    <% } %>
";
    }

    // line 40
    public function block___datagrid_toolbar__datagrid_toolbar_base_container_widget($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"datagrid-toolbar__base\" data-section=\"base-side\">
        ";
        // line 42
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 46
    public function block___datagrid_toolbar__datagrid_toolbar_rightside_container_widget($context, array $blocks = array())
    {
        // line 47
        echo "    <% if (toolbarPosition !== 'bottom') { %>
        <div class=\"datagrid-toolbar__rightside\" data-section=\"right-side\">
            ";
        // line 49
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    <% } %>
";
    }

    // line 54
    public function block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 56
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " mass-actions-panel btn-group icons-holder")));
        // line 58
        echo "    <div class=\"datagrid-tool\">
        <div";
        // line 59
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 63
    public function block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 65
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " extra-actions-panel"), "data-grid-extra-actions-panel" => ""));
        // line 68
        echo "    <div class=\"datagrid-tool\">
        <div";
        // line 69
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 73
    public function block___datagrid_toolbar__datagrid_toolbar_pagination_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(        // line 75
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), "data-grid-pagination" => ""));
        // line 78
        echo "    <div class=\"datagrid-tool oro-pagination\">
        <div";
        // line 79
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 83
    public function block___datagrid_toolbar__datagrid_toolbar_page_size_widget($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 85
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " page-size pull-right form-horizontal"), "data-grid-pagesize" => ""));
        // line 88
        echo "    <div class=\"datagrid-tool\">
        <div";
        // line 89
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 93
    public function block___datagrid_toolbar__datagrid_toolbar_actions_widget($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 95
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " actions-panel pull-right form-horizontal"), "data-grid-actions-panel" => ""));
        // line 98
        echo "    <div class=\"datagrid-tool\">
        <div";
        // line 99
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 103
    public function block___datagrid_toolbar__datagrid_toolbar_button_container_widget($context, array $blocks = array())
    {
        // line 104
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 105
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "datagrid-tool datagrid-tool--specific-action")));
            // line 106
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 107
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/imports/datagrid_toolbar:datagrid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 107,  298 => 106,  295 => 105,  292 => 104,  289 => 103,  280 => 99,  277 => 98,  275 => 95,  273 => 94,  270 => 93,  261 => 89,  258 => 88,  256 => 85,  254 => 84,  251 => 83,  242 => 79,  239 => 78,  237 => 75,  235 => 74,  232 => 73,  223 => 69,  220 => 68,  218 => 65,  216 => 64,  213 => 63,  204 => 59,  201 => 58,  199 => 56,  197 => 55,  194 => 54,  186 => 49,  182 => 47,  179 => 46,  172 => 42,  169 => 41,  166 => 40,  158 => 35,  154 => 33,  151 => 32,  145 => 29,  142 => 28,  140 => 25,  138 => 24,  135 => 23,  130 => 20,  122 => 18,  119 => 17,  117 => 16,  114 => 15,  111 => 11,  108 => 10,  99 => 6,  96 => 5,  93 => 2,  90 => 1,  86 => 103,  83 => 102,  81 => 93,  78 => 92,  76 => 83,  73 => 82,  71 => 73,  68 => 72,  66 => 63,  63 => 62,  61 => 54,  58 => 53,  56 => 46,  53 => 45,  51 => 40,  48 => 39,  46 => 32,  43 => 31,  41 => 23,  38 => 22,  36 => 10,  33 => 9,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/imports/datagrid_toolbar:datagrid.html.twig", "");
    }
}
