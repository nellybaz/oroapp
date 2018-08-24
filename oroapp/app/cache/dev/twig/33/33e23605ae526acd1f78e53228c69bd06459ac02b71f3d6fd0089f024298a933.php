<?php

/* OroCurrencyBundle::currency_settings.html.twig */
class __TwigTemplate_121b6bc12915c3d392bde8755d3c6731bf97d42ee1073aad65354881e05cc601 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCurrencyBundle::currency_settings.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
require(['oroconfig/js/configuration', 'orolocale/js/locale-settings'],
    function(configuration, localeSettings) {
        configuration.set('currency-view-type', '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->getViewType(), "html", null, true);
        echo "');
        configuration.set('is-currency-symbol-prepend', ";
        // line 5
        echo (($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->isCurrencySymbolPrepend()) ? ("true") : ("false"));
        echo ");
        localeSettings.extendSettings({'currency_data': ";
        // line 6
        echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->getSymbolCollection();
        echo " });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroCurrencyBundle::currency_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
require(['oroconfig/js/configuration', 'orolocale/js/locale-settings'],
    function(configuration, localeSettings) {
        configuration.set('currency-view-type', '{{ oro_currency_view_type() }}');
        configuration.set('is-currency-symbol-prepend', {{ oro_currency_symbol_prepend() ? 'true' : 'false' }});
        localeSettings.extendSettings({'currency_data': {{ oro_currency_symbol_collection() }} });
    });
</script>
", "OroCurrencyBundle::currency_settings.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/CurrencyBundle/Resources/views/currency_settings.html.twig");
    }
}
