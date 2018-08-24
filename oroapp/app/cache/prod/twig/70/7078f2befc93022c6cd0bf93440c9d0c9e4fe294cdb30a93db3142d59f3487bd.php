<?php

/* OroFrontendBundle:layouts/blank:form_theme.html.twig */
class __TwigTemplate_e30904a27db43c760c41c119388b1dc067500984413981597e7b19771601e099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroFormBundle:layouts/blank:form_theme.html.twig", "OroFrontendBundle:layouts/blank:form_theme.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_row' => array($this, 'block_form_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_frontend_region_widget' => array($this, 'block_oro_frontend_region_widget'),
            'oro_frontend_country_widget' => array($this, 'block_oro_frontend_country_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroFormBundle:layouts/blank:form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        // line 4
        $context["label_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["label_attr"] ?? null), array("~class" => " label label--full"));
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " input input--full"));
        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " textarea textarea--full"));
        // line 23
        echo "
    ";
        // line 24
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        // line 28
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" form-field-" . $this->getAttribute($this->getAttribute(        // line 29
($context["form"] ?? null), "vars", array()), "name", array())), "placeholder" => ((        // line 30
array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), "")) : (""))));
        // line 32
        echo "
    ";
        // line 33
        $context["parentClass"] = ((array_key_exists("parentClass", $context)) ? (_twig_default_filter(($context["parentClass"] ?? null), "")) : (""));
        // line 34
        echo "    ";
        $context["class_prefix"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "class_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "class_prefix", array()), ((array_key_exists("class_prefix", $context)) ? (_twig_default_filter(($context["class_prefix"] ?? null), "")) : ("")))) : (((array_key_exists("class_prefix", $context)) ? (_twig_default_filter(($context["class_prefix"] ?? null), "")) : (""))));
        // line 35
        echo "    ";
        $context["row_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), array())) : (array())), array("~class" => twig_join_filter(array(0 => " form-row", 1 =>         // line 36
($context["parentClass"] ?? null), 2 => ($context["class_prefix"] ?? null)), " ")));
        // line 38
        echo "    
    ";
        // line 39
        $context["widget_attr"] = ($context["attr"] ?? null);
        // line 40
        echo "    ";
        $context["attr"] = ($context["row_attr"] ?? null);
        // line 41
        echo "
    <div ";
        // line 42
        $this->displayBlock("attributes", $context, $blocks);
        echo ">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["widget_attr"] ?? null)));
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 46
        echo "</div>";
    }

    // line 49
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 51
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " error"));
            // line 54
            echo "    ";
        }
        // line 55
        echo "
    ";
        // line 56
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 59
    public function block_form_errors($context, array $blocks = array())
    {
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 62
            echo "        <span class=\"validation-failed\">
            <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
            echo "</span>
        </span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 68
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 69
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " input-widget-select"));
        // line 72
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</div>";
    }

    // line 79
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " select select--full"));
        // line 83
        echo "
    ";
        // line 84
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 92
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 93
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " custom-checkbox__input"));
        // line 96
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 97
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["id"] ?? null));
        }
        // line 100
        echo "<label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"custom-checkbox\">";
        // line 101
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        // line 102
        echo "<span class=\"custom-checkbox__icon\"></span>
        <span class=\"custom-checkbox__text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["label"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</span>
    </label>";
    }

    // line 107
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 108
        $context["class_prefix"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "class_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "class_prefix", array()), ((array_key_exists("class_prefix", $context)) ? (_twig_default_filter(($context["class_prefix"] ?? null), "radio")) : ("radio")))) : (((array_key_exists("class_prefix", $context)) ? (_twig_default_filter(($context["class_prefix"] ?? null), "radio")) : ("radio"))));
        // line 109
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " custom-radio__control"));
        // line 112
        echo "
    ";
        // line 113
        $context["label_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["label_attr"] ?? null), array("~class" => " custom-radio", "data-radio" => true, "tabindex" => 0, "for" =>         // line 117
($context["id"] ?? null)));
        // line 119
        echo "
    ";
        // line 120
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "checked", array())) {
            // line 121
            echo "        ";
            $context["label_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["label_attr"] ?? null), array("~class" => " checked"));
            // line 124
            echo "    ";
        }
        // line 126
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 127
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["id"] ?? null));
        }
        // line 130
        $context["widget_attr"] = ($context["attr"] ?? null);
        // line 131
        echo "    ";
        $context["attr"] = ($context["label_attr"] ?? null);
        // line 132
        echo "    <label ";
        $this->displayBlock("attributes", $context, $blocks);
        echo ">
        ";
        // line 133
        $context["attr"] = ($context["widget_attr"] ?? null);
        // line 134
        $this->displayParentBlock("radio_widget", $context, $blocks);
        // line 135
        echo "<span class=\"custom-radio__text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["label"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</span>
    </label>";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors', array("class_prefix" => ($context["class_prefix"] ?? null)));
    }

    // line 140
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 141
        if ($this->getAttribute(($context["attr"] ?? null), "data-validation", array(), "any", true, true)) {
            // line 142
            echo "            ";
            $context["dateValidation"] = $this->getAttribute(($context["attr"] ?? null), "data-validation", array(), "array");
            // line 143
            echo "        ";
        } else {
            // line 144
            echo "            ";
            $context["dateValidation"] = array("Date" => array());
            // line 145
            echo "
            ";
            // line 146
            if (($context["required"] ?? null)) {
                // line 147
                echo "                ";
                $context["dateValidation"] = twig_array_merge(($context["dateValidation"] ?? null), array("NotBlank" => array("message" => "This value should not be blank.")));
                // line 148
                echo "            ";
            }
            // line 149
            echo "
            ";
            // line 150
            $context["dateValidation"] = twig_jsonencode_filter(($context["dateValidation"] ?? null));
            // line 151
            echo "        ";
        }
        // line 152
        echo "
        ";
        // line 153
        $context["options"] = array("component" => "oroui/js/app/components/view-component", "view" => "oroui/js/app/views/datepicker/datepicker-view", "viewport" => array("isMobile" => false), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 161
($context["id"] ?? null)), "name" => ("date_selector_" .         // line 162
($context["id"] ?? null)), "data-validation" =>         // line 163
($context["dateValidation"] ?? null), "class" => ("datepicker-input " . (($this->getAttribute(        // line 164
($context["attr"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "class", array(), "array")) : ("")))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => false, "changeYear" => false, "yearRange" => ((        // line 170
array_key_exists("years", $context)) ? (_twig_default_filter(($context["years"] ?? null), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true, "maxDate" => (($this->getAttribute(        // line 172
($context["datePickerOptions"] ?? null), "maxDate", array(), "any", true, true)) ? ($this->getAttribute(($context["datePickerOptions"] ?? null), "maxDate", array(), "array")) : (($context["maxDate"] ?? null))), "minDate" => (($this->getAttribute(        // line 173
($context["datePickerOptions"] ?? null), "minDate", array(), "any", true, true)) ? ($this->getAttribute(($context["datePickerOptions"] ?? null), "minDate", array(), "array")) : (($context["minDate"] ?? null)))));
        // line 176
        echo "
        ";
        // line 177
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/viewport-component", "data-page-component-options" => twig_jsonencode_filter(        // line 179
($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"))));
        // line 181
        echo "
        ";
        // line 182
        $this->displayBlock("date_widget", $context, $blocks);
    }

    // line 185
    public function block_oro_frontend_region_widget($context, array $blocks = array())
    {
        // line 186
        echo "    ";
        $this->displayBlock("oro_region_widget", $context, $blocks);
        echo "
";
    }

    // line 189
    public function block_oro_frontend_country_widget($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("class_prefix" => "checkout"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank:form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 190,  360 => 189,  353 => 186,  350 => 185,  346 => 182,  343 => 181,  341 => 179,  340 => 177,  337 => 176,  335 => 173,  334 => 172,  333 => 170,  332 => 164,  331 => 163,  330 => 162,  329 => 161,  328 => 153,  325 => 152,  322 => 151,  320 => 150,  317 => 149,  314 => 148,  311 => 147,  309 => 146,  306 => 145,  303 => 144,  300 => 143,  297 => 142,  295 => 141,  292 => 140,  288 => 137,  283 => 135,  281 => 134,  279 => 133,  274 => 132,  271 => 131,  269 => 130,  266 => 127,  264 => 126,  261 => 124,  258 => 121,  256 => 120,  253 => 119,  251 => 117,  250 => 113,  247 => 112,  244 => 109,  242 => 108,  239 => 107,  233 => 103,  230 => 102,  228 => 101,  224 => 100,  221 => 97,  219 => 96,  217 => 93,  214 => 92,  210 => 89,  208 => 88,  205 => 87,  199 => 84,  196 => 83,  193 => 80,  190 => 79,  186 => 76,  180 => 74,  176 => 73,  172 => 72,  170 => 69,  167 => 68,  157 => 63,  154 => 62,  150 => 60,  147 => 59,  141 => 56,  138 => 55,  135 => 54,  132 => 51,  129 => 50,  126 => 49,  122 => 46,  120 => 45,  118 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  105 => 39,  102 => 38,  100 => 36,  98 => 35,  95 => 34,  93 => 33,  90 => 32,  88 => 30,  87 => 29,  86 => 28,  83 => 27,  77 => 24,  74 => 23,  71 => 20,  68 => 19,  62 => 16,  59 => 15,  56 => 12,  53 => 11,  49 => 8,  46 => 7,  44 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank:form_theme.html.twig", "");
    }
}
