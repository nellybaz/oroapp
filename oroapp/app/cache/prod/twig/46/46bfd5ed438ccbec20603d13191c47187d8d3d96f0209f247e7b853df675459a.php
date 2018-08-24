<?php

/* OroOrganizationBundle:Form:fields.html.twig */
class __TwigTemplate_8f2ad368b8185fd90f7f02600dc4bb3e4963593b65b47bc6b390cd6754909377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_business_unit_tree_widget' => array($this, 'block_oro_business_unit_tree_widget'),
            'oro_organizations_select_widget' => array($this, 'block_oro_organizations_select_widget'),
            'oro_type_choice_ownership_type_widget' => array($this, 'block_oro_type_choice_ownership_type_widget'),
            'oro_business_unit_tree_select_widget' => array($this, 'block_oro_business_unit_tree_select_widget'),
            'choice_bu_widget_collapsed' => array($this, 'block_choice_bu_widget_collapsed'),
            'choice_bu_widget_options' => array($this, 'block_choice_bu_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_business_unit_tree_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_organizations_select_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('oro_type_choice_ownership_type_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_business_unit_tree_select_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('choice_bu_widget_collapsed', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('choice_bu_widget_options', $context, $blocks);
    }

    // line 1
    public function block_oro_business_unit_tree_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " horizontal")) : ("horizontal"))));
            // line 4
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($this->getAttribute(($context["attr"] ?? null), "class", array()) . " validate-group")));
            // line 5
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["child"]) {
                // line 7
                echo "                <div class=\"oro-clearfix\">
                    ";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => true));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </div>
    ";
        } else {
            // line 14
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 18
    public function block_oro_organizations_select_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "organizations", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("organizations" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "selected_organizations", array()))), "html", null, true);
        echo "\">
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "businessUnits", array()), 'widget');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 26
    public function block_oro_type_choice_ownership_type_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((($context["value"] ?? null) || ($context["disabled"] ?? null))) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 30
                echo "                ";
                if (($this->getAttribute($context["choice"], "value", array()) == ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? null), "NONE")) : ("NONE")))) {
                    // line 31
                    echo "                    <div class=\"control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "label", array()), "html", null, true);
                    echo "</div>
                ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 36
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 38
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_oro_business_unit_tree_select_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["entityId"] = false;
        // line 43
        echo "    ";
        if (("oro_business_unit_form" == $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "name", array()))) {
            // line 44
            echo "        ";
            $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "id", array());
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 47
            echo "        ";
            // line 48
            echo "        ";
            $context["raw_label"] = true;
            // line 49
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("choice_bu_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_choice_bu_widget_collapsed($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        ob_start();
        // line 57
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 58
        if ( !(null === ($context["empty_value"] ?? null))) {
            // line 59
            echo "                <option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 61
        echo "            ";
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 62
            echo "                ";
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 63
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 64
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 65
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>
                ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "            ";
        $context["options"] = ($context["choices"] ?? null);
        // line 69
        echo "            ";
        $this->displayBlock("choice_bu_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_choice_bu_widget_options($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        ob_start();
        // line 76
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
            // line 77
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 78
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "\">
                    ";
                // line 79
                $context["options"] = $context["choice"];
                // line 80
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 83
                echo "                ";
                $context["disable"] = "";
                // line 84
                echo "                ";
                if ((array_key_exists("forbidden_business_unit_ids", $context) && twig_length_filter($this->env, ($context["forbidden_business_unit_ids"] ?? null)))) {
                    // line 85
                    echo "                    ";
                    if (twig_in_filter($this->getAttribute($context["choice"], "value", array()), ($context["forbidden_business_unit_ids"] ?? null))) {
                        // line 86
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 87
                        echo "                    ";
                    }
                    // line 88
                    echo "                ";
                } else {
                    // line 89
                    echo "                    ";
                    if (( !$this->getAttribute(($context["business_unit_ids"] ?? null), $this->getAttribute($context["choice"], "value", array()), array(), "array", true, true) || (($context["entityId"] ?? null) && (($context["entityId"] ?? null) == $this->getAttribute($context["choice"], "value", array()))))) {
                        // line 90
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 91
                        echo "                    ";
                    }
                    // line 92
                    echo "                ";
                }
                // line 93
                echo "                <option ";
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"
                ";
                // line 94
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 95
                ob_start();
                // line 96
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !($context["translatable_options"] ?? null))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? null))));
                // line 97
                echo "                        ";
                // line 98
                echo "                        ";
                echo ($context["label"] ?? null);
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 100
                echo "</option>
            ";
            }
            // line 102
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
        // line 103
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  379 => 103,  365 => 102,  361 => 100,  357 => 98,  355 => 97,  353 => 96,  351 => 95,  346 => 94,  339 => 93,  336 => 92,  333 => 91,  330 => 90,  327 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  312 => 84,  309 => 83,  302 => 80,  300 => 79,  295 => 78,  292 => 77,  274 => 76,  271 => 75,  268 => 74,  259 => 69,  256 => 68,  253 => 67,  247 => 65,  245 => 64,  240 => 63,  237 => 62,  234 => 61,  224 => 59,  222 => 58,  214 => 57,  211 => 56,  208 => 55,  200 => 51,  194 => 49,  191 => 48,  189 => 47,  186 => 46,  183 => 45,  180 => 44,  177 => 43,  174 => 42,  171 => 41,  166 => 38,  160 => 36,  154 => 34,  148 => 33,  142 => 31,  139 => 30,  134 => 29,  131 => 28,  128 => 27,  125 => 26,  118 => 22,  114 => 21,  109 => 20,  106 => 19,  103 => 18,  95 => 14,  91 => 12,  82 => 9,  78 => 8,  75 => 7,  71 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  54 => 1,  50 => 74,  47 => 73,  45 => 55,  42 => 54,  40 => 41,  37 => 40,  35 => 26,  32 => 25,  30 => 18,  27 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:Form:fields.html.twig", "");
    }
}
