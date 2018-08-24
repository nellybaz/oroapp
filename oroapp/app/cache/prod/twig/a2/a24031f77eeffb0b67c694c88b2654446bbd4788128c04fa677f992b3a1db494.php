<?php

/* OroFormBundle:layouts/blank:form_theme.html.twig */
class __TwigTemplate_76ee2306d92d943b302f4355036f250aaa6f6581c2ce898abf3aa50e9ee500ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroFormBundle:layouts/blank:form_theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
            'attributes' => array($this, 'block_attributes'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'number_widget' => array($this, 'block_number_widget'),
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
        echo "<div class=\"form-row\">
        <div class=\"form-row__label\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => array("class" => "label")));
        // line 7
        echo "</div>
        <div class=\"form-row__content\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "input input--full")));
        // line 14
        echo "</div>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 16
        echo "</div>";
    }

    // line 19
    public function block_form_label($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "        ";
        if ( !(($context["label"] ?? null) === false)) {
            // line 22
            echo "            ";
            if ( !($context["compound"] ?? null)) {
                // line 23
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 24
                echo "            ";
            }
            // line 25
            echo "            ";
            if (($context["required"] ?? null)) {
                // line 26
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 27
                echo "            ";
            }
            // line 28
            echo "            ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 29
                echo "                ";
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 30
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" => ($context["name"] ?? null), "%id%" => ($context["id"] ?? null)));
                    // line 31
                    echo "                ";
                } else {
                    // line 32
                    echo "                    ";
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "            ";
            }
            // line 35
            echo "            ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 36
            echo "
            <label";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 38
            if ((array_key_exists("translatable_label", $context) &&  !($context["translatable_label"] ?? null))) {
                // line 39
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ((            // line 40
array_key_exists("raw_label", $context) && ($context["raw_label"] ?? null))) {
                // line 41
                echo ($context["label"] ?? null);
            } else {
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 45
            echo "<em>";
            if ((($context["required"] ?? null) &&  !($context["isRadioLabel"] ?? null))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            echo "</em>
            </label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_form_errors($context, array $blocks = array())
    {
        // line 52
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 53
            echo "<ul class=\"notifications notifications--error\">";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                echo "<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</ul>";
        }
    }

    // line 61
    public function block_attributes($context, array $blocks = array())
    {
        // line 62
        $context["attributesThatContainsUri"] = array(0 => "src", 1 => "href", 2 => "action", 3 => "cite", 4 => "data", 5 => "poster");
        // line 63
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 64
            if (twig_test_iterable($context["attrvalue"])) {
                // line 65
                $context["attrvalue"] = twig_jsonencode_filter($context["attrvalue"]);
                // line 66
                echo "        ";
            } elseif (twig_in_filter($context["attrname"], ($context["attributesThatContainsUri"] ?? null))) {
                // line 67
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_replace_filter(twig_escape_filter($this->env, $context["attrvalue"], "html"), array("&amp;" => "&"));
                echo "\"
        ";
            } else {
                // line 69
                echo "            ";
                $context["attrvalue"] = twig_trim_filter($context["attrvalue"]);
            }
            // line 71
            echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 75
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(array("class" => "select select--full"),         // line 78
($context["attr"] ?? null));
        // line 79
        echo "
    ";
        // line 80
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 83
    public function block_number_widget($context, array $blocks = array())
    {
        // line 84
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("step" => "any", "min" => "0"));
        // line 85
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 86
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "OroFormBundle:layouts/blank:form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 86,  230 => 85,  228 => 84,  225 => 83,  219 => 80,  216 => 79,  214 => 78,  212 => 76,  209 => 75,  197 => 71,  193 => 69,  186 => 67,  183 => 66,  181 => 65,  179 => 64,  174 => 63,  172 => 62,  169 => 61,  164 => 57,  156 => 55,  152 => 54,  150 => 53,  148 => 52,  145 => 51,  132 => 45,  129 => 43,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  88 => 31,  86 => 30,  83 => 29,  80 => 28,  77 => 27,  74 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 22,  59 => 21,  57 => 20,  54 => 19,  50 => 16,  48 => 15,  46 => 14,  44 => 9,  41 => 7,  39 => 6,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFormBundle:layouts/blank:form_theme.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/form_theme.html.twig");
    }
}
