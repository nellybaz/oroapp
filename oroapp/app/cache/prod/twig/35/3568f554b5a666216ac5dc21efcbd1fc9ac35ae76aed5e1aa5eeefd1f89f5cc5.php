<?php

/* OroLocaleBundle:Form:fields.html.twig */
class __TwigTemplate_f75dee132fba2b0eda85826eab7ffb517699e1d200de882c9eda8739c7414ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_quarter_widget' => array($this, 'block_oro_quarter_widget'),
            'oro_locale_fallback_value_widget' => array($this, 'block_oro_locale_fallback_value_widget'),
            'oro_locale_localized_property_widget' => array($this, 'block_oro_locale_localized_property_widget'),
            'oro_locale_localized_fallback_value_collection_widget' => array($this, 'block_oro_locale_localized_fallback_value_collection_widget'),
            '_language_settings_oro_locale___language_value_widget' => array($this, 'block__language_settings_oro_locale___language_value_widget'),
            '_language_settings_oro_locale___languages_value_widget' => array($this, 'block__language_settings_oro_locale___languages_value_widget'),
            '_localization_oro_locale___default_localization_value_widget' => array($this, 'block__localization_oro_locale___default_localization_value_widget'),
            '_localization_oro_locale___enabled_localizations_value_widget' => array($this, 'block__localization_oro_locale___enabled_localizations_value_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_quarter_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('oro_locale_fallback_value_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_locale_localized_property_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('oro_locale_localized_fallback_value_collection_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('_language_settings_oro_locale___language_value_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('_language_settings_oro_locale___languages_value_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('_localization_oro_locale___default_localization_value_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('_localization_oro_locale___enabled_localizations_value_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_quarter_widget($context, array $blocks = array())
    {
        // line 2
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-quarter")));
        // line 3
        echo "    ";
        $context["options"] = array("disabled" => ($context["disabled"] ?? null));
        // line 4
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 5
        echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => "", "{{ month }}" =>         // line 7
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget', ($context["options"] ?? null)), "{{ day }}" =>         // line 8
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget', ($context["options"] ?? null))));
        // line 9
        echo "
    </div>";
    }

    // line 13
    public function block_oro_locale_fallback_value_widget($context, array $blocks = array())
    {
        // line 14
        echo "    <table>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "group_fallback_fields", array())) {
            // line 16
            echo "            <tr>
                <td nowrap=\"true\" class=\"fallback-item-use-fallback\">
                    ";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "use_fallback", array()), 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "use_fallback", array()), "vars", array()), "label", array())), "html", null, true);
            echo "
                </td>
                <td class=\"fallback-item-fallback\">
                    ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fallback", array()), 'widget', array("attr" => array("class" => "fallback")));
            echo "
                </td>
            </tr>
        ";
        }
        // line 25
        echo "        <tr>
            <td
                    class=\"fallback-item-value ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "group_fallback_fields", array())) {
            echo "fallback-item-value-top";
        }
        echo "\"
                    ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "group_fallback_fields", array())) {
            echo "colspan=\"2\"";
        }
        // line 29
        echo "                    >
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "
            </td>
            ";
        // line 32
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "group_fallback_fields", array())) {
            // line 33
            echo "                <td nowrap=\"true\" class=\"fallback-item-use-fallback\">
                    ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "use_fallback", array()), 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "use_fallback", array()), "vars", array()), "label", array())), "html", null, true);
            echo "
                </td>
                <td class=\"fallback-item-fallback\">
                    ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fallback", array()), 'widget', array("attr" => array("class" => "fallback")));
            echo "
                </td>
            ";
        }
        // line 40
        echo "        </tr>
    </table>

    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fallback", array()), 'errors');
        echo "
";
    }

    // line 47
    public function block_oro_locale_localized_property_widget($context, array $blocks = array())
    {
        // line 48
        echo "    <table class=\"fallback-container\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/fallback-view")), "html", null, true);
        echo "\"
            data-layout=\"separate\"
            >
        <tr class=\"fallback-item\">
            <td class=\"fallback-item-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "default", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</td>
            <td class=\"fallback-item-value fallback-item-value--first\">
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'widget');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'errors');
        echo "
                <span class=\"fallback-status\"></span>
            </td>
        </tr>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "localizations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
            // line 62
            echo "            <tr class=\"fallback-item\" style=\"display: none;\">
                <td class=\"fallback-item-label ";
            // line 63
            if ($this->getAttribute($this->getAttribute($context["localization"], "vars", array()), "group_fallback_fields", array())) {
                echo "fallback-item-top";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["localization"], "vars", array()), "label", array())), "html", null, true);
            echo "</td>
                <td ";
            // line 64
            if ($this->getAttribute($this->getAttribute($context["localization"], "vars", array()), "group_fallback_fields", array())) {
                echo "class=\"fallback-item-top\"";
            }
            echo " colspan=\"2\">
                    ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["localization"], 'widget');
            echo "
                    ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["localization"], 'errors');
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </table>
";
    }

    // line 73
    public function block_oro_locale_localized_fallback_value_collection_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "values", array()), 'widget');
        echo "
    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "values", array()), 'errors');
        echo "
    ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ids", array()), 'widget');
        echo "
    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ids", array()), 'errors');
        echo "
";
    }

    // line 80
    public function block__language_settings_oro_locale___language_value_widget($context, array $blocks = array())
    {
        // line 81
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
       data-page-component-options=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/language-select-view")), "html", null, true);
        echo "\"
    >
        ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </span>
";
    }

    // line 88
    public function block__language_settings_oro_locale___languages_value_widget($context, array $blocks = array())
    {
        // line 89
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/languages-select-view")), "html", null, true);
        echo "\"
    >
        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </span>
";
    }

    // line 96
    public function block__localization_oro_locale___default_localization_value_widget($context, array $blocks = array())
    {
        // line 97
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/localization-select-view")), "html", null, true);
        echo "\"
    >
        ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </span>
";
    }

    // line 104
    public function block__localization_oro_locale___enabled_localizations_value_widget($context, array $blocks = array())
    {
        // line 105
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/localizations-select-view")), "html", null, true);
        echo "\"
    >
        ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 108,  323 => 106,  320 => 105,  317 => 104,  310 => 100,  305 => 98,  302 => 97,  299 => 96,  292 => 92,  287 => 90,  284 => 89,  281 => 88,  274 => 84,  269 => 82,  266 => 81,  263 => 80,  257 => 77,  253 => 76,  249 => 75,  244 => 74,  241 => 73,  236 => 70,  226 => 66,  222 => 65,  216 => 64,  208 => 63,  205 => 62,  201 => 61,  194 => 57,  190 => 56,  185 => 54,  178 => 50,  174 => 48,  171 => 47,  165 => 44,  161 => 43,  156 => 40,  150 => 37,  142 => 34,  139 => 33,  137 => 32,  132 => 30,  129 => 29,  125 => 28,  119 => 27,  115 => 25,  108 => 21,  100 => 18,  96 => 16,  94 => 15,  91 => 14,  88 => 13,  83 => 9,  81 => 8,  80 => 7,  79 => 5,  74 => 4,  71 => 3,  69 => 2,  66 => 1,  62 => 104,  59 => 103,  57 => 96,  54 => 95,  52 => 88,  49 => 87,  47 => 80,  44 => 79,  42 => 73,  39 => 72,  37 => 47,  34 => 46,  32 => 13,  29 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroLocaleBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LocaleBundle/Resources/views/Form/fields.html.twig");
    }
}
