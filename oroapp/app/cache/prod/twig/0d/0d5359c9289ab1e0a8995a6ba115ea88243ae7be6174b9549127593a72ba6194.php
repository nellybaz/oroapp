<?php

/* OroMarketingListBundle:MarketingList:update.html.twig */
class __TwigTemplate_080018ed5ba20bdc22c9aacef16e260b68cc972b24f1137eb19964c38724032a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroMarketingListBundle:MarketingList:update.html.twig", 1);
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
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:update.html.twig", 2);
        // line 3
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:update.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:update.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array()))));
        // line 7
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_create")));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_marketinglist", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-marketing-list", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_label"))), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_index")), "method"), "html", null, true);
        echo "
    ";
        // line 31
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_marketing_list_view", "params" => array("id" => "\$id"))), "method");
        // line 35
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contactus_request_create")) {
            // line 36
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_marketing_list_create")), "method"));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_marketing_list_update"))) {
            // line 41
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_marketing_list_update", "params" => array("id" => "\$id"))), "method"));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 50
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 52
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 53
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 56
($context["entity"] ?? null), "name", array()));
            // line 58
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 60
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_label")));
            // line 61
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroMarketingListBundle:MarketingList:update.html.twig", 61)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 62
            echo "    ";
        }
    }

    // line 65
    public function block_content_data($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["id"] = "marketing-list-profile";
        // line 67
        echo "    ";
        $context["ownerDataBlock"] = array("dataBlocks" => array(0 => array("subblocks" => array(0 => array("data" => array())))));
        // line 74
        echo "
    ";
        // line 75
        $context["ownerDataBlock"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processForm($this->env, ($context["ownerDataBlock"] ?? null), ($context["form"] ?? null));
        // line 76
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("label" => "oro.marketinglist.name.label")), 1 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("label" => "oro.marketinglist.description.label", "attr" => array("class" => "segment-descr"))))), 1 => array("title" => "", "data" => twig_array_merge(array(0 =>         // line 95
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row', array("label" => "oro.marketinglist.entity.label")), 1 =>         // line 96
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("label" => "oro.marketinglist.type.label"))), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 97
($context["ownerDataBlock"] ?? null), "dataBlocks", array()), 0, array(), "array"), "subblocks", array()), 0, array(), "array"), "data", array()))))));
        // line 102
        echo "
    ";
        // line 104
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "manual", array())) {
            // line 105
            echo "    ";
            $context["hasEntity"] = (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "entity", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entity", array())));
            // line 106
            echo "    ";
            $context["columnsComponentOptions"] = array("formSelector" => ("#" . $this->getAttribute($this->getAttribute(            // line 107
($context["form"] ?? null), "vars", array()), "id", array())), "entityChoiceSelector" => "[data-ftid=oro_marketing_list_form_entity]", "fieldsChoiceSelector" => "#contact-information-fields-list", "contactInformationFields" => ((            // line 110
($context["hasEntity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\MarketingListBundle\Twig\ContactInformationFieldsExtension')->getContactInformationFieldsInfo($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entity", array()))) : (array())));
            // line 112
            echo "
    ";
            // line 113
            $context["type"] = "oro_marketing_list";
            // line 114
            echo "    ";
            ob_start();
            // line 115
            echo "    <div data-page-component-module=\"oromarketinglist/js/app/components/columns-component\"
         data-page-component-options=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["columnsComponentOptions"] ?? null)), "html", null, true);
            echo "\"
         class=\"marketing-list-qd-columns\"
    >
        <div id=\"column-information-notice\" class=\"alert alert-info\">
            <strong>";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.form.importance"), "html", null, true);
            echo "</strong>:
            ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.form.columns_notice"), "html", null, true);
            echo "
            <div class=\"column-information-fields-notice\">";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.form.available_fields_notice"), "html", null, true);
            echo ":</div>
            <div id=\"contact-information-fields-list\"></div>
        </div>

        ";
            // line 126
            echo $context["QD"]->getquery_designer_column_form($this->getAttribute(            // line 127
($context["form"] ?? null), "column", array()), array("id" => (            // line 128
($context["type"] ?? null) . "-column-form")), array(), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action"));
            // line 131
            echo "

        ";
            // line 133
            echo $context["QD"]->getquery_designer_column_list(array("id" => (            // line 134
($context["type"] ?? null) . "-column-list"), "rowId" => (($context["type"] ?? null) . "-column-row")), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action"));
            // line 136
            echo "
    </div>
    ";
            $context["columnsDesigner"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 139
            echo "
    ";
            // line 140
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.designer"), "content_attr" => array("id" => (            // line 142
($context["type"] ?? null) . "-designer")), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.columns"), "spanClass" => (            // line 146
($context["type"] ?? null) . "-columns responsive-cell"), "data" => array(0 =>             // line 148
($context["columnsDesigner"] ?? null))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.filters"), "spanClass" => (            // line 153
($context["type"] ?? null) . "-filters responsive-cell"), "data" => array(0 =>             // line 155
$context["segmentQD"]->getquery_designer_condition_builder(array("id" => (            // line 156
($context["type"] ?? null) . "-condition-builder"), "currentSegmentId" => (($this->getAttribute(            // line 157
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>             // line 159
($context["metadata"] ?? null)))))))));
            // line 165
            echo "    ";
        }
        // line 166
        echo "
    ";
        // line 167
        $context["data"] = array("formErrors" => ((        // line 168
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 169
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 170
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "definition", array()), 'widget'));
        // line 172
        echo "
    ";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "scrollData", array(0 => ($context["id"] ?? null), 1 => ($context["data"] ?? null), 2 => ($context["entity"] ?? null), 3 => ($context["form"] ?? null)), "method"), "html", null, true);
        echo "

    ";
        // line 176
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "manual", array())) {
            // line 177
            echo "        ";
            echo $context["QD"]->getquery_designer_column_chain_template("column-chain-template");
            echo "
        ";
            // line 178
            echo $context["segmentQD"]->getinitJsWidgets(($context["type"] ?? null), ($context["form"] ?? null), ($context["entities"] ?? null), ($context["metadata"] ?? null));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroMarketingListBundle:MarketingList:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 178,  268 => 177,  265 => 176,  260 => 173,  257 => 172,  255 => 170,  254 => 169,  253 => 168,  252 => 167,  249 => 166,  246 => 165,  244 => 159,  243 => 157,  242 => 156,  241 => 155,  240 => 153,  239 => 148,  238 => 146,  237 => 142,  236 => 140,  233 => 139,  228 => 136,  226 => 134,  225 => 133,  221 => 131,  219 => 128,  218 => 127,  217 => 126,  210 => 122,  206 => 121,  202 => 120,  195 => 116,  192 => 115,  189 => 114,  187 => 113,  184 => 112,  182 => 110,  181 => 107,  179 => 106,  176 => 105,  173 => 104,  170 => 102,  168 => 97,  167 => 96,  166 => 95,  165 => 84,  164 => 83,  162 => 76,  160 => 75,  157 => 74,  154 => 67,  151 => 66,  148 => 65,  143 => 62,  140 => 61,  137 => 60,  131 => 58,  129 => 56,  128 => 53,  126 => 52,  123 => 51,  120 => 50,  113 => 47,  111 => 46,  108 => 45,  105 => 41,  102 => 40,  99 => 39,  96 => 36,  93 => 35,  91 => 31,  86 => 30,  81 => 28,  77 => 26,  75 => 24,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  59 => 13,  53 => 12,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  36 => 6,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingListBundle:MarketingList:update.html.twig", "");
    }
}
