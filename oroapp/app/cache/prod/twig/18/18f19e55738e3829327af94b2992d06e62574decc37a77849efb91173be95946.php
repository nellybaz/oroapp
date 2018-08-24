<?php

/* OroReportBundle:Report:update.html.twig */
class __TwigTemplate_91f7e5c31209ad2dc1cf80a31a8adeaf0e6e7c83f2dd013e65db79df8ed0024d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroReportBundle:Report:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroReportBundle:Form:fields.html.twig"));
        // line 6
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroReportBundle:Report:update.html.twig", 6);
        // line 7
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroReportBundle:Report:update.html.twig", 7);

        $this->env->getExtension("oro_title")->set(array("params" => array("%report.name%" => $this->getAttribute(        // line 9
($context["entity"] ?? null), "name", array()))));
        // line 10
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_head_script($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 20
    public function block_navButtons($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_report", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-report", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_label"))), "method"), "html", null, true);
            // line 29
            echo "

        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 33
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_index")), "method"), "html", null, true);
        echo "
    ";
        // line 34
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_report_view", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method");
        // line 38
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_report_create")) {
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_report_create")), "method"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_report_update"))) {
            // line 44
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_report_update", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method"));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 52
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 54
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 55
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 58
($context["entity"] ?? null), "name", array()));
            // line 60
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 62
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_label")));
            // line 63
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroReportBundle:Report:update.html.twig", 63)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 64
            echo "    ";
        }
    }

    // line 67
    public function block_content_data($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $context["id"] = "report-profile";
        // line 69
        echo "    ";
        $context["ownerDataBlock"] = array("dataBlocks" => array(0 => array("subblocks" => array(0 => array("data" => array())))));
        // line 76
        echo "
    ";
        // line 77
        $context["ownerDataBlock"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processForm($this->env, ($context["ownerDataBlock"] ?? null), ($context["form"] ?? null));
        // line 78
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("label" => "oro.report.name.label")), 1 =>         // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("label" => "oro.report.description.label", "attr" => array("class" => "report-descr"))))), 1 => array("title" => "", "data" => twig_array_merge(array(0 =>         // line 97
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row', array("label" => "oro.report.entity.label")), 1 =>         // line 98
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("label" => "oro.report.type.label"))), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 99
($context["ownerDataBlock"] ?? null), "dataBlocks", array()), 0, array(), "array"), "subblocks", array()), 0, array(), "array"), "data", array()))))));
        // line 104
        echo "
    ";
        // line 105
        $context["type"] = "oro_report";
        // line 106
        echo "    ";
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.designer"), "content_attr" => array("id" => (        // line 108
($context["type"] ?? null) . "-designer")), "subblocks" => array(0 => array("data" => array(0 => $this->getAttribute(        // line 112
($context["UI"] ?? null), "scrollSubblock", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.columns"), 1 => array(0 =>         // line 115
$context["QD"]->getquery_designer_column_form($this->getAttribute(        // line 116
($context["form"] ?? null), "column", array()), array("id" => (        // line 117
($context["type"] ?? null) . "-column-form"))), 1 =>         // line 119
$context["QD"]->getquery_designer_column_list(array("id" => (        // line 121
($context["type"] ?? null) . "-column-list"), "rowId" => (        // line 122
($context["type"] ?? null) . "-column-row")))), 2 => "", 3 => "", 4 => (        // line 128
($context["type"] ?? null) . "-columns")), "method"), 1 => $this->getAttribute(        // line 130
($context["UI"] ?? null), "scrollSubblock", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.grouping"), 1 => array(0 =>         // line 133
$context["QD"]->getquery_designer_grouping_form($this->getAttribute(        // line 134
($context["form"] ?? null), "grouping", array()), array("id" => (        // line 135
($context["type"] ?? null) . "-grouping-form"))), 1 =>         // line 137
$context["QD"]->getquery_designer_grouping_list(array("id" => (($context["type"] ?? null) . "-grouping-list"))), 2 =>         // line 138
$context["QD"]->getquery_designer_grouping_item_template((($context["type"] ?? null) . "-grouping-item-row"))), 2 => "", 3 => "", 4 => (        // line 142
($context["type"] ?? null) . "-columns")), "method"), 2 => $this->getAttribute(        // line 144
($context["UI"] ?? null), "scrollSubblock", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.date_group_section.label"), 1 => array(0 =>         // line 147
$context["QD"]->getquery_designer_date_grouping_form($this->getAttribute(        // line 148
($context["form"] ?? null), "dateGrouping", array()))), 2 => "", 3 => "", 4 => (        // line 153
($context["type"] ?? null) . "-columns")), "method"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.filters"), "spanClass" => (        // line 159
($context["type"] ?? null) . "-filters responsive-cell"), "data" => array(0 =>         // line 161
$context["segmentQD"]->getquery_designer_condition_builder(array("id" => (        // line 162
($context["type"] ?? null) . "-condition-builder"), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>         // line 164
($context["metadata"] ?? null)))))))));
        // line 170
        echo "
    ";
        // line 171
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.form.chart_designer"), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.reporttype.chart.label"), "data" => array(0 =>         // line 177
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "chartOptions", array()), 'widget', array("label" => "oro.report.reporttype.chart.label"))))))));
        // line 184
        echo "
    ";
        // line 185
        $context["additionalData"] = array();
        // line 186
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 187
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 188
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 190
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 195
($context["additionalData"] ?? null))))));
            // line 198
            echo "    ";
        }
        // line 199
        echo "
    ";
        // line 200
        $context["data"] = array("formErrors" => ((        // line 201
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 202
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 203
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "definition", array()), 'widget'));
        // line 205
        echo "
    ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "scrollData", array(0 => ($context["id"] ?? null), 1 => ($context["data"] ?? null), 2 => ($context["entity"] ?? null), 3 => ($context["form"] ?? null)), "method"), "html", null, true);
        echo "

    ";
        // line 208
        echo $context["QD"]->getquery_designer_column_chain_template("column-chain-template");
        echo "
    ";
        // line 209
        echo $context["segmentQD"]->getinitJsWidgets(($context["type"] ?? null), ($context["form"] ?? null), ($context["entities"] ?? null), ($context["metadata"] ?? null));
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroReportBundle:Report:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 209,  253 => 208,  248 => 206,  245 => 205,  243 => 203,  242 => 202,  241 => 201,  240 => 200,  237 => 199,  234 => 198,  232 => 195,  230 => 190,  227 => 189,  220 => 188,  217 => 187,  211 => 186,  209 => 185,  206 => 184,  204 => 177,  203 => 171,  200 => 170,  198 => 164,  197 => 162,  196 => 161,  195 => 159,  194 => 153,  193 => 148,  192 => 147,  191 => 144,  190 => 142,  189 => 138,  188 => 137,  187 => 135,  186 => 134,  185 => 133,  184 => 130,  183 => 128,  182 => 122,  181 => 121,  180 => 119,  179 => 117,  178 => 116,  177 => 115,  176 => 112,  175 => 108,  173 => 106,  171 => 105,  168 => 104,  166 => 99,  165 => 98,  164 => 97,  163 => 86,  162 => 85,  160 => 78,  158 => 77,  155 => 76,  152 => 69,  149 => 68,  146 => 67,  141 => 64,  138 => 63,  135 => 62,  129 => 60,  127 => 58,  126 => 55,  124 => 54,  121 => 53,  118 => 52,  111 => 49,  108 => 48,  105 => 44,  102 => 43,  99 => 42,  96 => 39,  93 => 38,  91 => 34,  86 => 33,  81 => 31,  77 => 29,  75 => 27,  74 => 23,  72 => 22,  69 => 21,  66 => 20,  59 => 16,  53 => 15,  47 => 13,  44 => 12,  40 => 1,  38 => 10,  36 => 9,  33 => 7,  31 => 6,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportBundle:Report:update.html.twig", "");
    }
}
