<?php

/* OroCurrencyBundle::currency_settings.html.twig */
class __TwigTemplate_13f48471a3abd6bbb3705d891f47792493b16e93ca5304b7f519650561706da6 extends Twig_Template
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
        return array (  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCurrencyBundle::currency_settings.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/CurrencyBundle/Resources/views/currency_settings.html.twig");
    }
}
