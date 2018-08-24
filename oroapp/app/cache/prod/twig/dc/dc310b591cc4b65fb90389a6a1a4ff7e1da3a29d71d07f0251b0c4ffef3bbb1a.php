<?php

/* OroAbandonedCartBundle:AbandonedCart:update.html.twig */
class __TwigTemplate_cbdfffb94e51c0fdfd7dc17cba8bad7256a801b3e31b421ff5c8c0877f2787d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", 1);
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
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", 2);
        // line 3
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array()))));
        // line 7
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_create")));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_delete", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-marketing-list", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_label"))), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list")), "method"), "html", null, true);
        echo "
    ";
        // line 31
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_abandoned_cart_list_view", "params" => array("id" => "\$id"))), "method");
        // line 35
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_abandoned_cart_list_create")) {
            // line 36
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_abandoned_cart_list_create")), "method"));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_abandoned_cart_list_update"))) {
            // line 41
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_abandoned_cart_list_update", "params" => array("id" => "\$id"))), "method"));
            // line 45
            echo "    ";
        }
        // line 46
        echo "
    ";
        // line 47
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
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 56
($context["entity"] ?? null), "name", array()));
            // line 58
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 60
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_label")));
            // line 61
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", 61)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 62
            echo "    ";
        }
    }

    // line 65
    public function block_content_data($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["id"] = "abandonedcart-list-profile";
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
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("label" => "oro.abandonedcart.name.label")), 1 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("label" => "oro.abandonedcart.description.label", "attr" => array("class" => "segment-descr"))))), 1 => array("title" => "", "data" => twig_array_merge(array(0 =>         // line 95
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row', array("label" => "oro.marketinglist.entity.label"))), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 96
($context["ownerDataBlock"] ?? null), "dataBlocks", array()), 0, array(), "array"), "subblocks", array()), 0, array(), "array"), "data", array()))))));
        // line 101
        echo "
    ";
        // line 102
        $context["hasEntity"] = ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entity", array())));
        // line 103
        echo "    ";
        $context["columnsComponentOptions"] = array("formSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 104
($context["form"] ?? null), "vars", array()), "id", array())), "entityChoiceSelector" => "#oro_abandonedcart_list_form_entity", "fieldsChoiceSelector" => "#contact-information-fields-list", "contactInformationFields" => ((        // line 107
($context["hasEntity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\MarketingListBundle\Twig\ContactInformationFieldsExtension')->getContactInformationFieldsInfo($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entity", array()))) : (array())));
        // line 109
        echo "
    ";
        // line 110
        $context["type"] = "oro_abandonedcart_list";
        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "    <div data-page-component-module=\"oromarketinglist/js/app/components/columns-component\"
         data-page-component-options=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["columnsComponentOptions"] ?? null)), "html", null, true);
        echo "\"
         class=\"abandonedcart-list-qd-columns\"
            >
        <div id=\"column-information-notice\" class=\"alert alert-info\">
            <strong>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.form.importance"), "html", null, true);
        echo "</strong>:
            ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.form.columns_notice"), "html", null, true);
        echo ":
            <div id=\"contact-information-fields-list\"></div>
        </div>

        ";
        // line 122
        echo $context["QD"]->getquery_designer_column_form($this->getAttribute(        // line 123
($context["form"] ?? null), "column", array()), array("id" => (        // line 124
($context["type"] ?? null) . "-column-form")), array(), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action"));
        // line 127
        echo "

        ";
        // line 129
        echo $context["QD"]->getquery_designer_column_list(array("id" => (        // line 130
($context["type"] ?? null) . "-column-list"), "rowId" => (($context["type"] ?? null) . "-column-row")), array(0 => "column", 1 => "label", 2 => "sorting", 3 => "action"));
        // line 132
        echo "
    </div>
    ";
        $context["columnsDesigner"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 135
        echo "    ";
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.designer"), "content_attr" => array("id" => (        // line 137
($context["type"] ?? null) . "-designer")), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.columns"), "spanClass" => (        // line 141
($context["type"] ?? null) . "-columns responsive-cell"), "data" => array(0 =>         // line 143
($context["columnsDesigner"] ?? null))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.form.filters"), "spanClass" => (        // line 148
($context["type"] ?? null) . "-filters responsive-cell"), "data" => array(0 =>         // line 150
$context["segmentQD"]->getquery_designer_condition_builder(array("id" => (        // line 151
($context["type"] ?? null) . "-condition-builder"), "currentSegmentId" => (($this->getAttribute(        // line 152
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>         // line 154
($context["metadata"] ?? null)))))))));
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
        return "OroAbandonedCartBundle:AbandonedCart:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 170,  251 => 169,  246 => 167,  243 => 166,  241 => 164,  240 => 163,  239 => 162,  238 => 161,  235 => 160,  233 => 154,  232 => 152,  231 => 151,  230 => 150,  229 => 148,  228 => 143,  227 => 141,  226 => 137,  224 => 135,  219 => 132,  217 => 130,  216 => 129,  212 => 127,  210 => 124,  209 => 123,  208 => 122,  201 => 118,  197 => 117,  190 => 113,  187 => 112,  184 => 111,  182 => 110,  179 => 109,  177 => 107,  176 => 104,  174 => 103,  172 => 102,  169 => 101,  167 => 96,  166 => 95,  165 => 84,  164 => 83,  162 => 76,  160 => 75,  157 => 74,  154 => 67,  151 => 66,  148 => 65,  143 => 62,  140 => 61,  137 => 60,  131 => 58,  129 => 56,  128 => 53,  126 => 52,  123 => 51,  120 => 50,  114 => 47,  111 => 46,  108 => 45,  105 => 41,  102 => 40,  99 => 39,  96 => 36,  93 => 35,  91 => 31,  86 => 30,  81 => 28,  77 => 26,  75 => 24,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  59 => 13,  53 => 12,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  36 => 6,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAbandonedCartBundle:AbandonedCart:update.html.twig", "");
    }
}
