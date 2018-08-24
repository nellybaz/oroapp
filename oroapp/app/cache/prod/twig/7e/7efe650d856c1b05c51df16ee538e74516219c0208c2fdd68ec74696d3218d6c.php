<?php

/* OroLocaleBundle::requirejs.config.js.twig */
class __TwigTemplate_ff2e14fb0513c998ca1ea474622fffe4ee11fb6a67264b4f1cf677d7b9aea3d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dateTimeFormats"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getDateTimeFormatterList());
        foreach ($context['_seq'] as $context["_key"] => $context["formatterName"]) {
            // line 3
            echo "    ";
            $context["dateTimeFormats"] = twig_array_merge(($context["dateTimeFormats"] ?? null), array(            // line 4
$context["formatterName"] => array("day" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getDayFormat(            // line 5
$context["formatterName"]), "date" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getDateFormat(            // line 6
$context["formatterName"]), "time" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getTimeFormat(            // line 7
$context["formatterName"]), "datetime" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getDateTimeFormat(            // line 8
$context["formatterName"]))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatterName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context["numberFormatSettings"] = array();
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "decimal", 1 => "percent", 2 => "currency"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 15
            echo "    ";
            $context["numberFormatSettings"] = twig_array_merge(($context["numberFormatSettings"] ?? null), array(            // line 16
$context["style"] => array("grouping_size" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getAttribute("grouping_size",             // line 17
$context["style"]), "grouping_used" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getAttribute("grouping_used",             // line 18
$context["style"]), "max_fraction_digits" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getAttribute("max_fraction_digits",             // line 19
$context["style"]), "min_fraction_digits" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getAttribute("min_fraction_digits",             // line 20
$context["style"]), "negative_prefix" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("negative_prefix",             // line 22
$context["style"]), "negative_suffix" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("negative_suffix",             // line 23
$context["style"]), "positive_prefix" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("positive_prefix",             // line 24
$context["style"]), "positive_suffix" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("positive_suffix",             // line 25
$context["style"]), "currency_code" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("currency_code",             // line 26
$context["style"]), "padding_character" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getTextAttribute("padding_character",             // line 27
$context["style"]), "decimal_separator_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("decimal_separator_symbol",             // line 29
$context["style"]), "grouping_separator_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("grouping_separator_symbol",             // line 30
$context["style"]), "monetary_separator_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("monetary_separator_symbol",             // line 31
$context["style"]), "monetary_grouping_separator_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("monetary_grouping_separator_symbol",             // line 32
$context["style"]), "currency_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("currency_symbol",             // line 33
$context["style"]), "zero_digit_symbol" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getSymbol("zero_digit_symbol",             // line 34
$context["style"]))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        $context["localeConfigurationClass"] = "\\Oro\\Bundle\\LocaleBundle\\DependencyInjection\\Configuration::";
        // line 40
        $context["currencyConfigurationClass"] = "\\Oro\\Bundle\\CurrencyBundle\\DependencyInjection\\Configuration::";
        // line 41
        $context["defaults"] = array("locale" => twig_constant((        // line 42
($context["localeConfigurationClass"] ?? null) . "DEFAULT_LOCALE")), "language" => twig_constant((        // line 43
($context["localeConfigurationClass"] ?? null) . "DEFAULT_LANGUAGE")), "country" => twig_constant((        // line 44
($context["localeConfigurationClass"] ?? null) . "DEFAULT_COUNTRY")), "currency" => twig_constant((        // line 45
($context["currencyConfigurationClass"] ?? null) . "DEFAULT_CURRENCY")));
        // line 47
        echo "
";
        // line 49
        $context["mnemonicWeekDayNames"] = array("1" => "sunday", "2" => "monday", "3" => "tuesday", "4" => "wednesday", "5" => "thursday", "6" => "friday", "7" => "saturday");
        // line 58
        echo "
";
        // line 59
        $context["settings"] = array("locale" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getLocale(), "language" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getLanguage(), "country" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCountry(), "currency" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrency(), "timezone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone(), "timezone_offset" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZoneOffset(), "format_address_by_address_country" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->isFormatAddressByAddressCountry(), "apiKey" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_google_integration.google_api_key"), "unit" => array("temperature" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_locale.temperature_unit"), "wind_speed" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_locale.wind_speed_unit")), "format" => array("datetime" =>         // line 73
($context["dateTimeFormats"] ?? null), "number" =>         // line 74
($context["numberFormatSettings"] ?? null)), "calendar" => array("dow" => array("wide" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("wide"), "abbreviated" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("abbreviated"), "short" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("short"), "narrow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("narrow"), "mnemonic" =>         // line 82
($context["mnemonicWeekDayNames"] ?? null)), "months" => array("wide" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("wide"), "abbreviated" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("abbreviated"), "narrow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("narrow")), "first_dow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getFirstDayOfWeek()));
        // line 92
        echo "
require({
    config: {
        'orolocale/js/locale-settings': {
            defaults: ";
        // line 96
        echo twig_jsonencode_filter(($context["defaults"] ?? null));
        echo ",
            settings: ";
        // line 97
        echo twig_jsonencode_filter(($context["settings"] ?? null));
        echo "
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 97,  102 => 96,  96 => 92,  94 => 82,  93 => 74,  92 => 73,  91 => 59,  88 => 58,  86 => 49,  83 => 47,  81 => 45,  80 => 44,  79 => 43,  78 => 42,  77 => 41,  75 => 40,  73 => 39,  70 => 38,  64 => 34,  63 => 33,  62 => 32,  61 => 31,  60 => 30,  59 => 29,  58 => 27,  57 => 26,  56 => 25,  55 => 24,  54 => 23,  53 => 22,  52 => 20,  51 => 19,  50 => 18,  49 => 17,  48 => 16,  46 => 15,  42 => 14,  40 => 13,  37 => 12,  31 => 8,  30 => 7,  29 => 6,  28 => 5,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroLocaleBundle::requirejs.config.js.twig", "");
    }
}
