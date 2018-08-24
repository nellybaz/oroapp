<?php

/* OroChannelBundle:Form:fields.html.twig */
class __TwigTemplate_a67f7846229fa9d7bde6c36033ce8bada951bc104592bed7b960f5be96190e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_channel_datasource_form_row' => array($this, 'block_oro_channel_datasource_form_row'),
            'oro_channel_datasource_form_widget' => array($this, 'block_oro_channel_datasource_form_widget'),
            'oro_channel_entity_choice_form_row' => array($this, 'block_oro_channel_entity_choice_form_row'),
            '_oro_channel_form_channelType_widget' => array($this, 'block__oro_channel_form_channelType_widget'),
            'oro_multiple_entity_js_channel_aware' => array($this, 'block_oro_multiple_entity_js_channel_aware'),
            'oro_entity_create_or_select_inline_js_autocomplete_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware'),
            'oro_entity_create_or_select_inline_js_grid_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_grid_channel_aware'),
            'oro_entity_create_or_select_inline_js_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_channel_aware'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_channel_datasource_form_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_channel_datasource_form_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('oro_channel_entity_choice_form_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_oro_channel_form_channelType_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_multiple_entity_js_channel_aware', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_entity_create_or_select_inline_js_autocomplete_channel_aware', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('oro_entity_create_or_select_inline_js_grid_channel_aware', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('oro_entity_create_or_select_inline_js_channel_aware', $context, $blocks);
    }

    // line 1
    public function block_oro_channel_datasource_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_oro_channel_datasource_form_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "orocrm-channel-datasource-field")));
        // line 7
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "

    ";
        // line 9
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 10
($context["form"] ?? null), "vars", array()), "id", array())), "idEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
($context["form"] ?? null), "identifier", array()), "vars", array()), "id", array())), "dataEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
($context["form"] ?? null), "data", array()), "vars", array()), "id", array())), "typeEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
($context["form"] ?? null), "type", array()), "vars", array()), "id", array())), "nameEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "name", array()), "vars", array()), "id", array())), "channelNameEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
($context["form"] ?? null), "parent", array()), "name", array()), "vars", array()), "id", array())));
        // line 17
        echo "
    <div data-page-component-module=\"orochannel/js/app/components/integration-widget\"
         data-page-component-options=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>
";
    }

    // line 22
    public function block_oro_channel_entity_choice_form_row($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
";
    }

    // line 26
    public function block__oro_channel_form_channelType_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "disabled", array())) {
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 29
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    // line 30
                    echo "                <span class=\"inline-text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "html", null, true);
                    echo "\" data-disabled>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array())), "html", null, true);
                    echo "</span>
            ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
    }

    // line 38
    public function block_oro_multiple_entity_js_channel_aware($context, array $blocks = array())
    {
        // line 39
        echo "    var \$channelSelector = \$('select[name=\"' + ";
        echo twig_jsonencode_filter(($context["channel_field_name"] ?? null));
        echo " + '\"]'),
        presetChannelId = ";
        // line 40
        echo twig_jsonencode_filter(($context["channel_id"] ?? null));
        echo ",
        changeHandler = function(\$el) {
            var channelIds = [\$el.val()];

            if (presetChannelId) {
                channelIds.push(presetChannelId);
            }

            widget.options.selectionRouteParams.channelIds = channelIds.join(',');
        };

        \$channelSelector.change(function() {
            changeHandler(\$(this));
            widget.removeAll();
        });
        changeHandler(\$channelSelector);
";
    }

    // line 58
    public function block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
    }

    // line 62
    public function block_oro_entity_create_or_select_inline_js_grid_channel_aware($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
    }

    // line 66
    public function block_oro_entity_create_or_select_inline_js_channel_aware($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroChannelBundle:Form:fields.html.twig", 67);
        // line 68
        echo "    ";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array()), false)) : (false)) === true)) {
            // line 69
            echo "        ";
            $context["asyncNameSegment"] = "async-";
            // line 70
            echo "    ";
        }
        // line 71
        echo "    ";
        $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "vars", array()), "grid_name", array()), "params" => $this->getAttribute($this->getAttribute(        // line 76
($context["form"] ?? null), "vars", array()), "grid_parameters", array()), "renderParams" => $this->getAttribute($this->getAttribute(        // line 77
($context["form"] ?? null), "vars", array()), "grid_render_parameters", array()))));
        // line 81
        echo "
    ";
        // line 82
        if (((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
            // line 83
            echo "        ";
            $context["urlParts"] = twig_array_merge(($context["urlParts"] ?? null), array("create" => array("route" => $this->getAttribute($this->getAttribute(            // line 85
($context["form"] ?? null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(            // line 86
($context["form"] ?? null), "vars", array()), "create_form_route_parameters", array()))));
            // line 89
            echo "    ";
        }
        // line 90
        echo "    <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => (("orochannel/js/app/components/select-create-inline-type-" . ((        // line 91
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter(($context["asyncNameSegment"] ?? null), "")) : (""))) . "component"), "options" => array("_sourceElement" => (("#" .         // line 93
($context["id"] ?? null)) . "-el"), "inputSelector" => ("#" .         // line 94
($context["id"] ?? null)), "entityLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 95
($context["label"] ?? null)), "urlParts" =>         // line 96
($context["urlParts"] ?? null), "existingEntityGridId" => (($this->getAttribute($this->getAttribute(        // line 97
($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")), "createEnabled" => (($this->getAttribute($this->getAttribute(        // line 98
($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)), "channelFieldSelector" => (("select[name=\"" .         // line 99
($context["channel_field_name"] ?? null)) . "\"]"), "channelRequired" => (($this->getAttribute($this->getAttribute(        // line 100
($context["form"] ?? null), "vars", array(), "any", false, true), "channel_required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "channel_required", array()), false)) : (false)), "presetChannelId" =>         // line 101
($context["channel_id"] ?? null))));
        // line 103
        echo " style=\"display: none\"></div>
";
    }

    public function getTemplateName()
    {
        return "OroChannelBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 103,  251 => 101,  250 => 100,  249 => 99,  248 => 98,  247 => 97,  246 => 96,  245 => 95,  244 => 94,  243 => 93,  242 => 91,  240 => 90,  237 => 89,  235 => 86,  234 => 85,  232 => 83,  230 => 82,  227 => 81,  225 => 77,  224 => 76,  223 => 75,  221 => 71,  218 => 70,  215 => 69,  212 => 68,  209 => 67,  206 => 66,  199 => 63,  196 => 62,  189 => 59,  186 => 58,  165 => 40,  160 => 39,  157 => 38,  149 => 34,  146 => 33,  140 => 32,  130 => 30,  127 => 29,  122 => 28,  119 => 27,  116 => 26,  109 => 23,  106 => 22,  100 => 19,  96 => 17,  94 => 15,  93 => 14,  92 => 13,  91 => 12,  90 => 11,  89 => 10,  88 => 9,  82 => 7,  79 => 6,  76 => 5,  69 => 2,  66 => 1,  62 => 66,  59 => 65,  57 => 62,  54 => 61,  52 => 58,  49 => 57,  47 => 38,  44 => 37,  42 => 26,  39 => 25,  37 => 22,  34 => 21,  32 => 5,  29 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/Form/fields.html.twig");
    }
}
