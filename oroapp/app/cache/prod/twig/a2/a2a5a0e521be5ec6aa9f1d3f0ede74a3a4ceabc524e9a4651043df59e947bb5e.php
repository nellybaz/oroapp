<?php

/* OroSegmentBundle:Segment:update.html.twig */
class __TwigTemplate_161fdec967ddfd1909597d12e3de0687efe8f71745ff7596fce7d42c15430627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSegmentBundle:Segment:update.html.twig", 1);
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 3
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroSegmentBundle:Segment:update.html.twig", 3);
        // line 4
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroSegmentBundle:Segment:update.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%segment.name%" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array()))));
        // line 7
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_head_script($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_segment", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-segment", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label"))), "method"), "html", null, true);
            // line 26
            echo "

        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_index")), "method"), "html", null, true);
        echo "
    ";
        // line 31
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_segment_view", "params" => array("id" => "\$id"))), "method");
        // line 35
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_segment_create")) {
            // line 36
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_segment_create")), "method"));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) && ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "type", array()), "name", array()) == twig_constant("Oro\\Bundle\\SegmentBundle\\Entity\\SegmentType::TYPE_STATIC")))) {
            // line 41
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveActionButton", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and refresh"), "route" => "oro_segment_refresh", "params" => array("id" => $this->getAttribute(            // line 44
($context["entity"] ?? null), "id", array())))), "method"));
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_segment_update"))) {
            // line 48
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_segment_update", "params" => array("id" => "\$id"))), "method"));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 56
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 58
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 59
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 62
($context["entity"] ?? null), "name", array()));
            // line 64
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 66
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label")));
            // line 67
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSegmentBundle:Segment:update.html.twig", 67)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 68
            echo "    ";
        }
    }

    // line 71
    public function block_content_data($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $context["id"] = "segment-profile";
        // line 73
        echo "    ";
        $context["ownerDataBlock"] = array("dataBlocks" => array(0 => array("subblocks" => array(0 => array("data" => array())))));
        // line 80
        echo "
    ";
        // line 81
        $context["ownerDataBlock"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processForm($this->env, ($context["ownerDataBlock"] ?? null), ($context["form"] ?? null));
        // line 82
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 89
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("label" => "oro.segment.name.label")), 1 =>         // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("label" => "oro.segment.description.label", "attr" => array("class" => "segment-descr"))))), 1 => array("title" => "", "data" => twig_array_merge(array(0 =>         // line 101
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row', array("label" => "oro.segment.entity.label")), 1 =>         // line 102
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("label" => "oro.segment.type.label")), 2 =>         // line 103
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recordsLimit", array()), 'row', array("label" => "oro.segment.records_limit.label"))), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 104
($context["ownerDataBlock"] ?? null), "dataBlocks", array()), 0, array(), "array"), "subblocks", array()), 0, array(), "array"), "data", array()))))));
        // line 109
        echo "
    ";
        // line 110
        $context["type"] = "oro_segment";
        // line 111
        echo "    ";
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.designer"), "content_attr" => array("id" => (        // line 113
($context["type"] ?? null) . "-designer")), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.columns"), "spanClass" => (        // line 117
($context["type"] ?? null) . "-columns responsive-cell"), "data" => array(0 =>         // line 119
$context["QD"]->getquery_designer_column_form($this->getAttribute(        // line 120
($context["form"] ?? null), "column", array()), array("id" => (        // line 121
($context["type"] ?? null) . "-column-form")), array(), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action")), 1 =>         // line 125
$context["QD"]->getquery_designer_column_list(array("id" => (        // line 126
($context["type"] ?? null) . "-column-list"), "rowId" => (($context["type"] ?? null) . "-column-row")), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action")))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.filters"), "spanClass" => (        // line 133
($context["type"] ?? null) . "-filters responsive-cell"), "data" => array(0 =>         // line 135
$context["segmentQD"]->getquery_designer_condition_builder(array("id" => (        // line 136
($context["type"] ?? null) . "-condition-builder"), "currentSegmentId" => (($this->getAttribute(        // line 137
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>         // line 139
($context["metadata"] ?? null)))))))));
        // line 145
        echo "
    ";
        // line 146
        $context["additionalData"] = array();
        // line 147
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 148
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 149
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 151
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 156
($context["additionalData"] ?? null))))));
            // line 159
            echo "    ";
        }
        // line 160
        echo "
    ";
        // line 161
        $context["data"] = array("formErrors" => ((        // line 162
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 163
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 164
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "definition", array()), 'widget'));
        // line 166
        echo "
    ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "scrollData", array(0 => ($context["id"] ?? null), 1 => ($context["data"] ?? null), 2 => ($context["entity"] ?? null), 3 => ($context["form"] ?? null)), "method"), "html", null, true);
        echo "

    ";
        // line 169
        echo $context["QD"]->getquery_designer_column_chain_template("column-chain-template");
        echo "
    ";
        // line 170
        echo $context["segmentQD"]->getinitJsWidgets(($context["type"] ?? null), ($context["form"] ?? null), ($context["entities"] ?? null), ($context["metadata"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSegmentBundle:Segment:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 170,  246 => 169,  241 => 167,  238 => 166,  236 => 164,  235 => 163,  234 => 162,  233 => 161,  230 => 160,  227 => 159,  225 => 156,  223 => 151,  220 => 150,  213 => 149,  210 => 148,  204 => 147,  202 => 146,  199 => 145,  197 => 139,  196 => 137,  195 => 136,  194 => 135,  193 => 133,  192 => 126,  191 => 125,  190 => 121,  189 => 120,  188 => 119,  187 => 117,  186 => 113,  184 => 111,  182 => 110,  179 => 109,  177 => 104,  176 => 103,  175 => 102,  174 => 101,  173 => 90,  172 => 89,  170 => 82,  168 => 81,  165 => 80,  162 => 73,  159 => 72,  156 => 71,  151 => 68,  148 => 67,  145 => 66,  139 => 64,  137 => 62,  136 => 59,  134 => 58,  131 => 57,  128 => 56,  121 => 53,  118 => 52,  115 => 48,  112 => 47,  109 => 46,  107 => 44,  105 => 41,  102 => 40,  99 => 39,  96 => 36,  93 => 35,  91 => 31,  86 => 30,  81 => 28,  77 => 26,  75 => 24,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  59 => 13,  53 => 12,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  36 => 6,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSegmentBundle:Segment:update.html.twig", "");
    }
}
