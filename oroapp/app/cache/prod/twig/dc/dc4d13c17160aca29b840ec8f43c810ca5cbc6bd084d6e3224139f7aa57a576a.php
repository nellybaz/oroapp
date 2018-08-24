<?php

/* OroDotmailerBundle:DataFieldMapping:update.html.twig */
class __TwigTemplate_7f2d5f49bc2fe35ff3c9a67c016eaaa8649949dd31f5168ce36f44450cd15dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroDotmailerBundle:DataFieldMapping:update.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
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
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroDotmailerBundle:DataFieldMapping:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "entity", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmapping.entity_label"))));
        // line 8
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 10
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_mapping_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_mapping_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "dotmailer-page";
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_dotmailer_datafield_mapping", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 15
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_mapping_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 18
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmapping.entity_label"))), "method"), "html", null, true);
            // line 20
            echo "

        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 24
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_mapping_index")), "method"), "html", null, true);
        echo "
    ";
        // line 25
        $context["html"] = "";
        // line 26
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dotmailer_datafield_mapping_create")) {
            // line 27
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_dotmailer_datafield_mapping_create")), "method"));
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dotmailer_datafield_mapping_update"))) {
            // line 32
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_dotmailer_datafield_mapping_update", "params" => array("id" => "\$id"))), "method"));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 40
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 42
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 43
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_mapping_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmapping.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmapping.entity_label"));
            // line 48
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 50
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmapping.entity_label")));
            // line 51
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroDotmailerBundle:DataFieldMapping:update.html.twig", 51)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 52
            echo "    ";
        }
    }

    // line 55
    public function block_content_data($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["id"] = "dotmailer-datafield-mapping-form";
        // line 57
        echo "    ";
        $context["type"] = "oro_dotmailer_datafield_mapping";
        // line 58
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "channel", array()), 'row'), 1 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row'), 2 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "syncPriority", array()), 'row'))))));
        // line 70
        echo "    ";
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.block.mapping"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "config_source", array()), 'row'), 1 => $this->getAttribute(        // line 76
($context["UI"] ?? null), "scrollSubblock", array(0 => "", 1 => array(0 => $this->getAttribute(        // line 79
$this, "mapping_form", array(0 => $this->getAttribute(        // line 80
($context["form"] ?? null), "config", array()), 1 => array("id" => (        // line 81
($context["type"] ?? null) . "-mapping-form"))), "method"), 1 => $this->getAttribute(        // line 83
$this, "mapping_list", array(0 => array("id" => (        // line 85
($context["type"] ?? null) . "-mapping-list"), "rowId" => (        // line 86
($context["type"] ?? null) . "-mapping-row"))), "method")), 2 => "", 3 => "", 4 => (        // line 92
($context["type"] ?? null) . "-mappings")), "method")))))));
        // line 97
        echo "
    ";
        // line 98
        $context["additionalData"] = array();
        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 100
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 101
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 103
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 105
($context["additionalData"] ?? null))))));
            // line 107
            echo "    ";
        }
        // line 108
        echo "
    ";
        // line 109
        $context["data"] = array("formErrors" => ((        // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 111
($context["dataBlocks"] ?? null));
        // line 113
        echo "
    ";
        // line 114
        echo $context["QD"]->getquery_designer_column_chain_template("column-chain-template");
        echo "
    ";
        // line 115
        echo $this->getAttribute($this, "initJsWidgets", array(0 => ($context["type"] ?? null), 1 => ($context["form"] ?? null), 2 => ($context["entities"] ?? null)), "method");
        echo "

    ";
        // line 117
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 119
    public function getmapping_form($__form__ = null, $__attr__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 120
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:DataFieldMapping:update.html.twig", 120);
            // line 121
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(            // line 122
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " query-designer-form clearfix"))));
            // line 124
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        ";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entityFields", array()), 'row', array("label" => "oro.dotmailer.datafieldmappingconfig.entity_fields.label", "attr" => array("data-purpose" => "multiple-entityfield-selector", "data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
            // line 131
            echo "
        ";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dataField", array()), 'row', array("label" => "oro.dotmailer.datafieldmappingconfig.data_field.label", "attr" => array("data-purpose" => "datafield-selector", "data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
            // line 138
            echo "
        ";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "isTwoWaySync", array()), 'row', array("label" => "oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label", "attr" => array("class" => "two-way-sync-selector", "data-purpose" => "two-way-sync-selector")));
            // line 145
            echo "
        <div class=\"pull-right\">
            ";
            // line 147
            echo $context["UI"]->getclientButton(array("aCss" => "no-hash cancel-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.cancel")));
            // line 150
            echo "
            ";
            // line 151
            echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-success save-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.save")));
            // line 155
            echo "
            ";
            // line 156
            echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-primary add-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.add")));
            // line 160
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 164
    public function getmapping_list($__attr__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 165
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:DataFieldMapping:update.html.twig", 165);
            // line 166
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-container query-designer-grid-container query-designer-columns-grid-container"))));
            // line 167
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
            <thead>
            <tr>
                <th class=\"entityfield-column\"><span>";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.entity_fields.label"), "html", null, true);
            echo "</span></th>
                <th class=\"datafield-column\"><span>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.data_field.label"), "html", null, true);
            echo "</span></th>
                <th class=\"twowaysync-column\"><span>";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label"), "html", null, true);
            echo "</span></th>
                <th class=\"action-column\"><span>";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
            echo "</span></th>
            </tr>
            </thead>
            <tbody class=\"mapping-container\">
            </tbody>
        </table>
    </div>
    ";
            // line 181
            echo $this->getAttribute($this, "mapping_template", array(0 => $this->getAttribute(($context["attr"] ?? null), "rowId", array())), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function getmapping_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 184
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
        <tr data-cid=\"<%= cid %>\">
            <td class=\"field-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= entityFields %></td>
            <td class=\"datafield-cell\"><%- dataField %></td>
            <td class=\"twowaysync-cell\"><%= isTwoWaySync %></td>
            <td class=\"action-cell\">
                <a href=\"javascript: void(0);\" class=\"action no-hash edit-button\"
                        title=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.update_mapping"), "html", null, true);
            echo "\"
                        data-collection-action=\"edit\">
                    <i class=\"icon-edit hide-text\"></i></a>
                <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
                        title=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.delete_mapping"), "html", null, true);
            echo "\"
                        data-collection-action=\"delete\"
                        data-message=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.delete_mapping_confirmation"), "html", null, true);
            echo "\">
                    <i class=\"icon-trash hide-text\"></i></a>
            </td>
        </tr>
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 203
    public function getinitJsWidgets($__type__ = null, $__form__ = null, $__entities__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "form" => $__form__,
            "entities" => $__entities__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 204
            echo "    ";
            $context["widgetOptions"] = array("dataProviderFilterPreset" => "dotmailer", "valueSource" => (("[data-ftid=" .             // line 206
($context["type"] ?? null)) . "_form_config_source]"), "entityChoice" => (("[data-ftid=" .             // line 207
($context["type"] ?? null)) . "_form_entity]"), "entityChangeConfirmMessage" => "oro.dotmailer.datafieldmapping.change_entity_confirmation", "mapping" => array("editor" => array("namePattern" => (("^" .             // line 210
($context["type"] ?? null)) . "_form\\[config\\]\\[([\\w\\W]*)\\]\$")), "form" => (("#" .             // line 211
($context["type"] ?? null)) . "-mapping-form"), "itemContainer" => (("#" .             // line 212
($context["type"] ?? null)) . "-mapping-list .mapping-container"), "itemTemplate" => (("#" .             // line 213
($context["type"] ?? null)) . "-mapping-row")), "channel" => array("channelChoice" => (("[data-ftid=" .             // line 216
($context["type"] ?? null)) . "_form_channel]"), "changeChannelConfirmMessage" => "oro.dotmailer.datafieldmapping.change_channel_confirmation"), "select2FieldChoiceTemplate" => "#column-chain-template", "select2FieldChoicePlaceholoder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafieldmappingconfig.entityField.placeholder"));
            // line 222
            echo "
    <div data-page-component-module=\"orodotmailer/js/app/components/mapping-component\"
         data-page-component-options=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["widgetOptions"] ?? null)), "html", null, true);
            echo "\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:DataFieldMapping:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 224,  426 => 222,  424 => 216,  423 => 213,  422 => 212,  421 => 211,  420 => 210,  419 => 207,  418 => 206,  416 => 204,  402 => 203,  381 => 197,  376 => 195,  369 => 191,  358 => 184,  346 => 183,  329 => 181,  319 => 174,  315 => 173,  311 => 172,  307 => 171,  299 => 167,  296 => 166,  293 => 165,  281 => 164,  263 => 160,  261 => 156,  258 => 155,  256 => 151,  253 => 150,  251 => 147,  247 => 145,  245 => 139,  242 => 138,  240 => 132,  237 => 131,  235 => 125,  230 => 124,  228 => 122,  226 => 121,  223 => 120,  209 => 119,  203 => 117,  198 => 115,  194 => 114,  191 => 113,  189 => 111,  188 => 110,  187 => 109,  184 => 108,  181 => 107,  179 => 105,  177 => 103,  174 => 102,  167 => 101,  164 => 100,  158 => 99,  156 => 98,  153 => 97,  151 => 92,  150 => 86,  149 => 85,  148 => 83,  147 => 81,  146 => 80,  145 => 79,  144 => 76,  143 => 75,  141 => 70,  139 => 66,  138 => 65,  137 => 64,  135 => 58,  132 => 57,  129 => 56,  126 => 55,  121 => 52,  118 => 51,  115 => 50,  109 => 48,  107 => 43,  105 => 42,  102 => 41,  99 => 40,  92 => 37,  89 => 36,  86 => 32,  83 => 31,  80 => 30,  77 => 27,  74 => 26,  72 => 25,  67 => 24,  62 => 22,  58 => 20,  56 => 18,  55 => 15,  53 => 14,  50 => 13,  47 => 12,  41 => 11,  37 => 1,  35 => 10,  33 => 8,  31 => 5,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:DataFieldMapping:update.html.twig", "");
    }
}
