<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_3cf8a28bcc32b30e817bee9871e07eb54d1062c0750eb911b4986bdb9fb24082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroUIBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'hint_attributes' => array($this, 'block_hint_attributes'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'collection_render' => array($this, 'block_collection_render'),
            '_oro_entity_config_config_field_type_widget' => array($this, 'block__oro_entity_config_config_field_type_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        if (array_key_exists("block_prefixes", $context)) {
            echo " control-group-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["block_prefixes"] ?? null), 1, array(), "array"), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter(($context["hint"] ?? null))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter(($context["hint_position"] ?? null))) : ("")) == "above"))) {
            // line 7
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo ($context["hint"] ?? null);
            echo "</div>
            ";
        }
        // line 9
        echo "            ";
        if ( !(($context["label"] ?? null) === false)) {
            // line 10
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 14
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 16
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter(($context["hint"] ?? null))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter(($context["hint_position"] ?? null))) : ("")) == "after_input"))) {
            // line 17
            echo "                    <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo ($context["hint"] ?? null);
            echo "</div>
                ";
        }
        // line 19
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
            ";
        // line 21
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter(($context["hint"] ?? null))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter(($context["hint_position"] ?? null))) : ("")) == "below"))) {
            // line 22
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo ($context["hint"] ?? null);
            echo "</div>
            ";
        }
        // line 24
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_hint_attributes($context, array $blocks = array())
    {
        // line 29
        echo " ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hint_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 31
            if (($context["attrvalue"] === true)) {
                // line 32
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 33
$context["attrvalue"] === false)) {
                // line 34
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 39
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 41
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " error")) : ("error"))));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 46
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 48
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " error")) : ("error"))));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_form_errors($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 56
            echo "            ";
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                // line 57
                echo "                ";
                $context["combinedError"] = "";
                // line 58
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 59
                    echo "                    ";
                    $context["combinedError"] = (((($context["combinedError"] ?? null) != "")) ? (((($context["combinedError"] ?? null) . "; ") . $this->getAttribute($context["error"], "message", array()))) : ($this->getAttribute($context["error"], "message", array())));
                    // line 60
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                <span class=\"validation-failed\"><span><span>";
                echo twig_escape_filter($this->env, ($context["combinedError"] ?? null), "html", null, true);
                echo "</span></span></span>
            ";
            } else {
                // line 63
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 65
            echo "        ";
        }
        // line 66
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_date_widget($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        $context["type"] = "text";
        // line 72
        echo "        ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 73
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 75
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 76
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 80
            echo "
            </div>
        ";
        }
        // line 83
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        ob_start();
        // line 88
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 89
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($this->getAttribute(($context["attr"] ?? null), "class", array()) . " validate-group")));
        // line 90
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 92
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => ((array_key_exists("raw_label", $context)) ? (($context["raw_label"] ?? null)) : (false)), "translatable_label" => ((array_key_exists("translatable_options", $context)) ? (($context["translatable_options"] ?? null)) : (true))));
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        ob_start();
        // line 103
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 104
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 105
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, (((array_key_exists("translatable_groups", $context) &&  !($context["translatable_groups"] ?? null))) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                    ";
                // line 106
                $context["options"] = $context["choice"];
                // line 107
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 110
                echo "                ";
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !($context["translatable_options"] ?? null))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? null))));
                // line 111
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute(($context["configs"] ?? null), "is_safe", array(), "any", true, true) && $this->getAttribute(($context["configs"] ?? null), "is_safe", array()))) {
                    echo ($context["label"] ?? null);
                } else {
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 113
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 117
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 118
        ob_start();
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array()), "attr", array())) > 0))) {
            // line 121
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        if (($this->getAttribute(($context["choice"] ?? null), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["choice"] ?? null), "attr", array())) > 0))) {
            // line 125
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["choice"] ?? null), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_collection_render($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        ob_start();
        // line 132
        echo "        ";
        $context["__internal_1327344e4df5243a84f27858144de8463c5fd3b9e67a38d08129f77fc096dd14"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Form:fields.html.twig", 132);
        // line 133
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 134
        echo twig_escape_filter($this->env, $context["__internal_1327344e4df5243a84f27858144de8463c5fd3b9e67a38d08129f77fc096dd14"]->getcollection_prototype(($context["subform"] ?? null)));
        echo "\">
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["subform"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 136
            echo "                    ";
            echo $context["__internal_1327344e4df5243a84f27858144de8463c5fd3b9e67a38d08129f77fc096dd14"]->getcollection_prototype($context["field"]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 144
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = array())
    {
        // line 145
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 146
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 146,  491 => 145,  488 => 144,  480 => 139,  477 => 138,  468 => 136,  464 => 135,  460 => 134,  457 => 133,  454 => 132,  451 => 131,  448 => 130,  442 => 126,  429 => 125,  427 => 124,  424 => 123,  421 => 122,  408 => 121,  405 => 120,  403 => 119,  401 => 118,  398 => 117,  393 => 114,  379 => 113,  361 => 111,  358 => 110,  351 => 107,  349 => 106,  344 => 105,  341 => 104,  323 => 103,  320 => 102,  317 => 101,  311 => 97,  302 => 94,  298 => 93,  295 => 92,  291 => 91,  286 => 90,  283 => 89,  280 => 88,  277 => 87,  274 => 86,  269 => 83,  264 => 80,  262 => 79,  261 => 78,  260 => 77,  259 => 76,  254 => 75,  248 => 73,  245 => 72,  242 => 71,  239 => 70,  236 => 69,  231 => 66,  228 => 65,  222 => 63,  216 => 61,  210 => 60,  207 => 59,  202 => 58,  199 => 57,  196 => 56,  194 => 55,  192 => 54,  189 => 53,  182 => 50,  179 => 49,  176 => 48,  173 => 47,  170 => 46,  163 => 43,  160 => 42,  157 => 41,  154 => 40,  151 => 39,  139 => 34,  137 => 33,  132 => 32,  130 => 31,  126 => 30,  124 => 29,  121 => 28,  115 => 24,  107 => 22,  105 => 21,  99 => 19,  91 => 17,  89 => 16,  85 => 15,  78 => 14,  72 => 11,  69 => 10,  66 => 9,  58 => 7,  56 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Form:fields.html.twig", "");
    }
}
