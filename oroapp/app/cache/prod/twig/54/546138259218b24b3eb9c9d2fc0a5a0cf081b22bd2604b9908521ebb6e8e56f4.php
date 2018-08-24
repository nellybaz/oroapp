<?php

/* OroEntityConfigBundle:layouts/blank/page:layout.html.twig */
class __TwigTemplate_ad379fb44a15399e4a16895950d3cbb61aa41c24c8c9119f8eb0a2fcc8cff823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'attribute_group_rest_widget' => array($this, 'block_attribute_group_rest_widget'),
            'attribute_group_rest_attribute_group_widget' => array($this, 'block_attribute_group_rest_attribute_group_widget'),
            'attribute_label_widget' => array($this, 'block_attribute_label_widget'),
            'attribute_text_widget' => array($this, 'block_attribute_text_widget'),
            'attribute_html_escaped_widget' => array($this, 'block_attribute_html_escaped_widget'),
            'attribute_boolean_widget' => array($this, 'block_attribute_boolean_widget'),
            'attribute_currency_widget' => array($this, 'block_attribute_currency_widget'),
            'attribute_percent_widget' => array($this, 'block_attribute_percent_widget'),
            'attribute_date_widget' => array($this, 'block_attribute_date_widget'),
            'attribute_datetime_widget' => array($this, 'block_attribute_datetime_widget'),
            'attribute_multiselect_widget' => array($this, 'block_attribute_multiselect_widget'),
            'attribute_image_widget' => array($this, 'block_attribute_image_widget'),
            'attribute_file_widget' => array($this, 'block_attribute_file_widget'),
            'attribute_localized_fallback_widget' => array($this, 'block_attribute_localized_fallback_widget'),
            'attribute_group_rest_attribute_widget' => array($this, 'block_attribute_group_rest_attribute_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('attribute_group_rest_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('attribute_label_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('attribute_text_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('attribute_html_escaped_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('attribute_boolean_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('attribute_currency_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('attribute_percent_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('attribute_date_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('attribute_datetime_widget', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('attribute_multiselect_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('attribute_image_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('attribute_file_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('attribute_localized_fallback_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('attribute_group_rest_attribute_widget', $context, $blocks);
    }

    // line 1
    public function block_attribute_group_rest_widget($context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:layouts/blank/page:layout.html.twig", 2);
        // line 4
        $context["content"] = "";
        // line 5
        echo "    ";
        $context["visibleTabsOptions"] = array();
        // line 6
        echo "
    ";
        // line 7
        $context["tabsOptionsById"] = array();
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabsOptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 9
            echo "        ";
            $context["tabsOptionsById"] = twig_array_merge(($context["tabsOptionsById"] ?? null), array($this->getAttribute(            // line 10
$context["tab"], "id", array()) => $context["tab"]));
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 15
                $context["childContent"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
                // line 16
                echo "        ";
                if ((twig_length_filter($this->env, twig_trim_filter(($context["childContent"] ?? null))) > 0)) {
                    // line 17
                    echo "            ";
                    $context["content"] = (($context["content"] ?? null) . ($context["childContent"] ?? null));
                    // line 18
                    echo "            ";
                    $context["visibleTabsOptions"] = twig_array_merge(($context["visibleTabsOptions"] ?? null), array(0 => $this->getAttribute(($context["tabsOptionsById"] ?? null), $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "group", array()), array(), "array")));
                    // line 19
                    echo "        ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if ( !twig_test_empty(($context["visibleTabsOptions"] ?? null))) {
            // line 23
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <div ";
            // line 24
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroentityconfig/js/attribute-group-tabs-component", "options" => array("data" =>             // line 26
($context["visibleTabsOptions"] ?? null))));
            // line 27
            echo "></div>

            ";
            // line 29
            echo ($context["content"] ?? null);
            echo "
        </div>
    ";
        }
    }

    // line 34
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 36
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter(($context["content"] ?? null))) > 0)) {
            // line 37
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroentityconfig/js/attribute-group-tab-content-component", "~data-page-component-options" => twig_jsonencode_filter(array("id" =>             // line 39
($context["group"] ?? null)))));
            // line 41
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " style=\"display: none;\" class=\"tab-content\">
        ";
            // line 42
            echo ($context["content"] ?? null);
            echo "
    </div>
    ";
        }
    }

    // line 47
    public function block_attribute_label_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        if ((twig_first($this->env, ($context["label"] ?? null)) != "_")) {
            // line 49
            echo "        <label>";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo ":</label>
    ";
        }
    }

    // line 53
    public function block_attribute_text_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        if ( !twig_test_iterable(($context["value"] ?? null))) {
            // line 55
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), "
"), "html", null, true));
            echo "
    ";
        }
    }

    // line 61
    public function block_attribute_html_escaped_widget($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlTagTrim(($context["value"] ?? null));
        echo "
";
    }

    // line 65
    public function block_attribute_boolean_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        echo twig_escape_filter($this->env, ((($context["value"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))), "html", null, true);
        echo "
";
    }

    // line 69
    public function block_attribute_currency_widget($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        echo ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["value"] ?? null))) : (null));
        echo "
";
    }

    // line 73
    public function block_attribute_percent_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        echo ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent(($context["value"] ?? null))) : (null));
        echo "
";
    }

    // line 77
    public function block_attribute_date_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        echo ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["value"] ?? null))) : (null));
        echo "
";
    }

    // line 81
    public function block_attribute_datetime_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        echo ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["value"] ?? null))) : (null));
        echo "
";
    }

    // line 85
    public function block_attribute_multiselect_widget($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
        ";
            // line 88
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 89
                echo "            ,&nbsp;
        ";
            }
            // line 91
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 96
    public function block_attribute_image_widget($context, array $blocks = array())
    {
        // line 97
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getResizedImageUrl(($context["value"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "\">
";
    }

    // line 100
    public function block_attribute_file_widget($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["entity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null));
        echo "
";
    }

    // line 104
    public function block_attribute_localized_fallback_widget($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["translated_value"] ?? null));
        echo "
";
    }

    // line 108
    public function block_attribute_group_rest_attribute_widget($context, array $blocks = array())
    {
        // line 109
        echo "    <div class=\"tab-content__wrapper\">";
        $this->displayBlock("attribute_label_widget", $context, $blocks);
        echo " ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:layouts/blank/page:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 109,  404 => 108,  397 => 105,  394 => 104,  387 => 101,  384 => 100,  371 => 97,  368 => 96,  357 => 92,  344 => 91,  340 => 89,  338 => 88,  333 => 87,  314 => 86,  311 => 85,  304 => 82,  301 => 81,  294 => 78,  291 => 77,  284 => 74,  281 => 73,  274 => 70,  271 => 69,  264 => 66,  261 => 65,  254 => 62,  251 => 61,  242 => 57,  236 => 55,  233 => 54,  230 => 53,  222 => 49,  219 => 48,  216 => 47,  208 => 42,  203 => 41,  201 => 39,  199 => 37,  196 => 36,  193 => 35,  190 => 34,  182 => 29,  178 => 27,  176 => 26,  175 => 24,  170 => 23,  168 => 22,  165 => 21,  157 => 19,  154 => 18,  151 => 17,  148 => 16,  146 => 15,  141 => 14,  138 => 13,  132 => 12,  130 => 10,  128 => 9,  123 => 8,  121 => 7,  118 => 6,  115 => 5,  113 => 4,  111 => 2,  108 => 1,  104 => 108,  101 => 107,  99 => 104,  96 => 103,  94 => 100,  91 => 99,  89 => 96,  86 => 95,  84 => 85,  81 => 84,  79 => 81,  76 => 80,  74 => 77,  71 => 76,  69 => 73,  66 => 72,  64 => 69,  61 => 68,  59 => 65,  56 => 64,  54 => 61,  51 => 60,  49 => 53,  46 => 52,  44 => 47,  41 => 46,  39 => 34,  36 => 33,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:layouts/blank/page:layout.html.twig", "");
    }
}
