<?php

/* OroLocaleBundle::requirejs.config.js.twig */
class __TwigTemplate_7f9a50f8feb7256dc4194fa5e8a5b834089a66adba7220d4c1963f28fe164a21 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroLocaleBundle::requirejs.config.js.twig"));

        // line 1
        $context["dateTimeFormats"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateFormatExtension')->getDateTimeFormatterList());
        foreach ($context['_seq'] as $context["_key"] => $context["formatterName"]) {
            // line 3
            echo "    ";
            $context["dateTimeFormats"] = twig_array_merge(($context["dateTimeFormats"] ?? $this->getContext($context, "dateTimeFormats")), array(            // line 4
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
            $context["numberFormatSettings"] = twig_array_merge(($context["numberFormatSettings"] ?? $this->getContext($context, "numberFormatSettings")), array(            // line 16
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
($context["localeConfigurationClass"] ?? $this->getContext($context, "localeConfigurationClass")) . "DEFAULT_LOCALE")), "language" => twig_constant((        // line 43
($context["localeConfigurationClass"] ?? $this->getContext($context, "localeConfigurationClass")) . "DEFAULT_LANGUAGE")), "country" => twig_constant((        // line 44
($context["localeConfigurationClass"] ?? $this->getContext($context, "localeConfigurationClass")) . "DEFAULT_COUNTRY")), "currency" => twig_constant((        // line 45
($context["currencyConfigurationClass"] ?? $this->getContext($context, "currencyConfigurationClass")) . "DEFAULT_CURRENCY")));
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
($context["dateTimeFormats"] ?? $this->getContext($context, "dateTimeFormats")), "number" =>         // line 74
($context["numberFormatSettings"] ?? $this->getContext($context, "numberFormatSettings"))), "calendar" => array("dow" => array("wide" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("wide"), "abbreviated" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("abbreviated"), "short" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("short"), "narrow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getDayOfWeekNames("narrow"), "mnemonic" =>         // line 82
($context["mnemonicWeekDayNames"] ?? $this->getContext($context, "mnemonicWeekDayNames"))), "months" => array("wide" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("wide"), "abbreviated" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("abbreviated"), "narrow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getMonthNames("narrow")), "first_dow" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\CalendarExtension')->getFirstDayOfWeek()));
        // line 92
        echo "
require({
    config: {
        'orolocale/js/locale-settings': {
            defaults: ";
        // line 96
        echo twig_jsonencode_filter(($context["defaults"] ?? $this->getContext($context, "defaults")));
        echo ",
            settings: ";
        // line 97
        echo twig_jsonencode_filter(($context["settings"] ?? $this->getContext($context, "settings")));
        echo "
        }
    }
});
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  109 => 97,  105 => 96,  99 => 92,  97 => 82,  96 => 74,  95 => 73,  94 => 59,  91 => 58,  89 => 49,  86 => 47,  84 => 45,  83 => 44,  82 => 43,  81 => 42,  80 => 41,  78 => 40,  76 => 39,  73 => 38,  67 => 34,  66 => 33,  65 => 32,  64 => 31,  63 => 30,  62 => 29,  61 => 27,  60 => 26,  59 => 25,  58 => 24,  57 => 23,  56 => 22,  55 => 20,  54 => 19,  53 => 18,  52 => 17,  51 => 16,  49 => 15,  45 => 14,  43 => 13,  40 => 12,  34 => 8,  33 => 7,  32 => 6,  31 => 5,  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set dateTimeFormats = {} %}
{% for formatterName in oro_datetime_formatter_list() %}
    {% set dateTimeFormats = dateTimeFormats|merge({
        (formatterName) : {
            'day': oro_day_format(formatterName),
            'date': oro_date_format(formatterName),
            'time': oro_time_format(formatterName),
            'datetime': oro_datetime_format(formatterName),
        }
    }) %}
{% endfor %}

{% set numberFormatSettings = {} %}
{% for style in ['decimal', 'percent', 'currency'] %}
    {% set numberFormatSettings = numberFormatSettings|merge({
        (style): {
            'grouping_size':       oro_locale_number_attribute('grouping_size', style),
            'grouping_used':       oro_locale_number_attribute('grouping_used', style),
            'max_fraction_digits': oro_locale_number_attribute('max_fraction_digits', style),
            'min_fraction_digits': oro_locale_number_attribute('min_fraction_digits', style),

            'negative_prefix':   oro_locale_number_text_attribute('negative_prefix', style),
            'negative_suffix':   oro_locale_number_text_attribute('negative_suffix', style),
            'positive_prefix':   oro_locale_number_text_attribute('positive_prefix', style),
            'positive_suffix':   oro_locale_number_text_attribute('positive_suffix', style),
            'currency_code':     oro_locale_number_text_attribute('currency_code', style),
            'padding_character': oro_locale_number_text_attribute('padding_character', style),

            'decimal_separator_symbol':           oro_locale_number_symbol('decimal_separator_symbol', style),
            'grouping_separator_symbol':          oro_locale_number_symbol('grouping_separator_symbol', style),
            'monetary_separator_symbol':          oro_locale_number_symbol('monetary_separator_symbol', style),
            'monetary_grouping_separator_symbol': oro_locale_number_symbol('monetary_grouping_separator_symbol', style),
            'currency_symbol':                    oro_locale_number_symbol('currency_symbol', style),
            'zero_digit_symbol':                  oro_locale_number_symbol('zero_digit_symbol', style),
        }
    }) %}
{% endfor %}

{% set localeConfigurationClass = '\\\\Oro\\\\Bundle\\\\LocaleBundle\\\\DependencyInjection\\\\Configuration::' %}
{% set currencyConfigurationClass = '\\\\Oro\\\\Bundle\\\\CurrencyBundle\\\\DependencyInjection\\\\Configuration::' %}
{% set defaults = {
    'locale':   constant(localeConfigurationClass ~ 'DEFAULT_LOCALE'),
    'language': constant(localeConfigurationClass ~ 'DEFAULT_LANGUAGE'),
    'country':  constant(localeConfigurationClass ~ 'DEFAULT_COUNTRY'),
    'currency': constant(currencyConfigurationClass ~ 'DEFAULT_CURRENCY')
} %}

{# Mnemonic day names used in system to determination a week day independently of translations and number indexes #}
{% set mnemonicWeekDayNames = {
    '1': 'sunday',
    '2': 'monday',
    '3': 'tuesday',
    '4': 'wednesday',
    '5': 'thursday',
    '6': 'friday',
    '7': 'saturday'
} %}

{% set settings = {
    'locale':   oro_locale(),
    'language': oro_language(),
    'country':  oro_country(),
    'currency': oro_currency(),
    'timezone': oro_timezone(),
    'timezone_offset': oro_timezone_offset(),
    'format_address_by_address_country': oro_format_address_by_address_country(),
    'apiKey': oro_config_value('oro_google_integration.google_api_key'),
    'unit': {
        'temperature': oro_config_value('oro_locale.temperature_unit'),
        'wind_speed':  oro_config_value('oro_locale.wind_speed_unit')
    },
    'format': {
        'datetime': dateTimeFormats,
        'number': numberFormatSettings
    },
    'calendar': {
        'dow': {
            'wide':        oro_calendar_day_of_week_names('wide'),
            'abbreviated': oro_calendar_day_of_week_names('abbreviated'),
            'short':       oro_calendar_day_of_week_names('short'),
            'narrow':      oro_calendar_day_of_week_names('narrow'),
            'mnemonic':    mnemonicWeekDayNames
        },
        'months': {
            'wide':        oro_calendar_month_names('wide'),
            'abbreviated': oro_calendar_month_names('abbreviated'),
            'narrow':      oro_calendar_month_names('narrow'),
        },
        'first_dow': oro_calendar_first_day_of_week()
    }
} %}

require({
    config: {
        'orolocale/js/locale-settings': {
            defaults: {{ defaults|json_encode|raw }},
            settings: {{ settings|json_encode|raw }}
        }
    }
});
", "OroLocaleBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LocaleBundle/Resources/views/requirejs.config.js.twig");
    }
}
