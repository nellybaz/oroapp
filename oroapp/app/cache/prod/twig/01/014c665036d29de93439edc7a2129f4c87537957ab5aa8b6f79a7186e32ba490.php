<?php

/* OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid_toolbar.html.twig */
class __TwigTemplate_0f05d34a227e07314c21169ed8d493ab00cb4df99f62a094df91810ebae680d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_datagrid_server_render__datagrid_toolbar_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_toolbar_widget'),
            '__datagrid_toolbar__datagrid_toolbar_leftside_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_leftside_container_widget'),
            '__datagrid_toolbar__datagrid_toolbar_rightside_container_widget' => array($this, 'block___datagrid_toolbar__datagrid_toolbar_rightside_container_widget'),
            '__oro_datagrid_server_render__datagrid_items_counter_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_items_counter_widget'),
            '__oro_datagrid_server_render__datagrid_toolbar_pagination_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_toolbar_pagination_widget'),
            '__oro_datagrid_server_render__datagrid_toolbar_page_size_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_toolbar_page_size_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_datagrid_server_render__datagrid_toolbar_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_leftside_container_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_rightside_container_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('__oro_datagrid_server_render__datagrid_items_counter_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('__oro_datagrid_server_render__datagrid_toolbar_pagination_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('__oro_datagrid_server_render__datagrid_toolbar_page_size_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_datagrid_server_render__datagrid_toolbar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datagrid-toolbar")));
        // line 5
        echo "    ";
        $context["toolbarPosition"] = $this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array");
        // line 6
        echo "
    <div";
        // line 7
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 9
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("data-grid-toolbar" => ($context["toolbarPosition"] ?? null))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
    }

    // line 14
    public function block___datagrid_toolbar__datagrid_toolbar_leftside_container_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 16
        echo "
    ";
        // line 17
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 18
            echo "        <div class=\"datagrid-toolbar__side\" data-section=\"left-side\">
            ";
            // line 19
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 24
    public function block___datagrid_toolbar__datagrid_toolbar_rightside_container_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 26
        echo "
    ";
        // line 27
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 28
            echo "        <div class=\"datagrid-toolbar__rightside\" data-section=\"right-side\">
            ";
            // line 29
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 34
    public function block___oro_datagrid_server_render__datagrid_items_counter_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 36
        echo "
    ";
        // line 37
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 38
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "</div>
    ";
        }
    }

    // line 42
    public function block___oro_datagrid_server_render__datagrid_toolbar_pagination_widget($context, array $blocks = array())
    {
        // line 43
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 44
        $context["metadata"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridMetadata(($context["datagrid"] ?? null));
        // line 45
        echo "        ";
        $context["data"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridData(($context["datagrid"] ?? null));
        // line 46
        echo "
        ";
        // line 47
        $context["totalRecords"] = (($this->getAttribute($this->getAttribute(($context["data"] ?? null), "options", array(), "any", false, true), "totalRecords", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "options", array()), "totalRecords", array())) : (0));
        // line 48
        echo "        ";
        $context["pageSize"] = $this->getAttribute($this->getAttribute(($context["metadata"] ?? null), "state", array()), "pageSize", array());
        // line 49
        echo "        ";
        $context["currentPage"] = $this->getAttribute($this->getAttribute(($context["metadata"] ?? null), "state", array()), "currentPage", array());
        // line 50
        echo "        ";
        $context["totalPages"] = (((($context["pageSize"] ?? null) == 0)) ? (1) : (twig_round((($context["totalRecords"] ?? null) / ($context["pageSize"] ?? null)))));
        // line 51
        echo "
        <div class=\"oro-pagination__pager\">
            <a href=\"";
        // line 53
        if ((($context["currentPage"] ?? null) <= 1)) {
            echo "#";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getPageUrl(($context["datagrid"] ?? null), (($context["currentPage"] ?? null) - 1)), "html", null, true);
        }
        echo "\"
               class=\"btn btn--size-s btn--default oro-pagination__prev";
        // line 54
        if ((($context["currentPage"] ?? null) <= 1)) {
            echo " disabled";
        }
        echo "\"
               data-grid-pagination-trigger data-grid-pagination-direction=\"prev\">
                <i class=\"fa-angle-left\"></i>
                <span class=\"oro-pagination__label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.datagrid.pagination.prev"), "html", null, true);
        echo "</span>
            </a>

            <input type=\"text\" class=\"input input--size-s oro-pagination__input\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["currentPage"] ?? null), "html", null, true);
        echo "\"
                   data-grid-pagination-trigger-input/>

            <span class=\"oro-pagination__total\">
                ";
        // line 64
        $context["totalPages"] = (("<span data-grid-pagination-pages>" . ($context["totalPages"] ?? null)) . "</span>");
        // line 65
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.datagrid.pagination.totalPages", array("%totalPages%" => ($context["totalPages"] ?? null)));
        echo "
            </span>

            <a href=\"";
        // line 68
        if ((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) {
            echo "#";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getPageUrl(($context["datagrid"] ?? null), (($context["currentPage"] ?? null) + 1)), "html", null, true);
        }
        echo "\"
               class=\"btn btn--size-s btn--default oro-pagination__next";
        // line 69
        if ((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) {
            echo " disabled";
        }
        echo "\"
               data-grid-pagination-trigger data-grid-pagination-direction=\"next\">
                <span class=\"oro-pagination__label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.datagrid.pagination.next"), "html", null, true);
        echo "</span>
                <i class=\"fa-angle-right\"></i>
            </a>
        </div>
    </div>
";
    }

    // line 78
    public function block___oro_datagrid_server_render__datagrid_toolbar_page_size_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["metadata"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridMetadata(($context["datagrid"] ?? null));
        // line 80
        echo "    ";
        $context["perPage"] = $this->getAttribute($this->getAttribute(($context["metadata"] ?? null), "state", array()), "pageSize", array());
        // line 81
        echo "    ";
        $context["pageSize"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["metadata"] ?? null), "options", array()), "toolbarOptions", array()), "pageSize", array());
        // line 82
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 83
        echo "
    ";
        // line 84
        if (((($this->getAttribute(($context["pageSize"] ?? null), "hide", array()) == false) && (twig_length_filter($this->env, $this->getAttribute(($context["pageSize"] ?? null), "items", array())) > 0)) && (($context["toolbarPosition"] ?? null) != "bottom"))) {
            // line 85
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <div class=\"page-size pull-right form-horizontal\">
                <span class=\"datagrid-tool__label\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.datagrid.pagesize.labelShort"), "html", null, true);
            echo ": &nbsp;</span>
                <div class=\"action-selectbox-custom-in-pager\">
                    <select class=\"select select--size-s oro-select2--size-s\" name=\"action\" data-grid-pagesize-selector>
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pageSize"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 91
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
                                    data-grid-pagesize-trigger";
                // line 92
                if (($context["value"] == ($context["perPage"] ?? null))) {
                    echo " selected";
                }
                echo ">
                                ";
                // line 93
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                    </select>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid_toolbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 96,  294 => 93,  288 => 92,  283 => 91,  279 => 90,  273 => 87,  267 => 85,  265 => 84,  262 => 83,  259 => 82,  256 => 81,  253 => 80,  250 => 79,  247 => 78,  237 => 71,  230 => 69,  222 => 68,  215 => 65,  213 => 64,  206 => 60,  200 => 57,  192 => 54,  184 => 53,  180 => 51,  177 => 50,  174 => 49,  171 => 48,  169 => 47,  166 => 46,  163 => 45,  161 => 44,  156 => 43,  153 => 42,  143 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  124 => 29,  121 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  102 => 19,  99 => 18,  97 => 17,  94 => 16,  91 => 15,  88 => 14,  83 => 11,  76 => 9,  71 => 8,  67 => 7,  64 => 6,  61 => 5,  59 => 3,  57 => 2,  54 => 1,  50 => 78,  47 => 77,  45 => 42,  42 => 41,  40 => 34,  37 => 33,  35 => 24,  32 => 23,  30 => 14,  27 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid_toolbar.html.twig", "");
    }
}
