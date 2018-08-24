<?php

/* @OroLocale/layouts/blank/config/requirejs.yml */
class __TwigTemplate_5226bb9670493cc9729cbdea97d29597efc141689c5bcf91f29d8111dd3b9bc3 extends Twig_Template
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
        echo "config:
    shim:
        'moment':
            exports:
                - 'moment'
        'numeral':
            exports:
                - 'numeral'
        'orolocale/js/formatter/number':
            deps:
                - 'numeral'
                - 'orolocale/js/locale-settings'
    map:
        '*':
            'numeral': 'orolocale/js/numeral-l10n'
            'moment': 'orolocale/js/moment-l10n'
            'moment-timezone': 'orolocale/js/extend/moment-timezone'
        'orolocale/js/numeral-l10n':
            'numeral': 'numeral'
        'orolocale/js/moment-l10n':
            'moment': 'moment'
        'moment-timezone':
            'moment': 'moment'
        'orolocale/js/extend/moment-timezone':
            'moment-timezone': 'moment-timezone'
    paths:
        'moment': 'bundles/bowerassets/moment/min/moment-with-locales.js'
        'moment-timezone': 'bundles/bowerassets/moment-timezone/builds/moment-timezone-with-data.js'
        'numeral': 'bundles/bowerassets/numeral/numeral.js'
        'orolocale/js/locale-settings': 'bundles/orolocale/js/locale-settings.js'
        'orolocale/js/locale-settings/data': '../js/oro.locale_data.js'
        'orolocale/js/formatter/name': 'bundles/orolocale/js/formatter/name.js'
        'orolocale/js/formatter/address': 'bundles/orolocale/js/formatter/address.js'
        'orolocale/js/formatter/number': 'bundles/orolocale/js/formatter/number.js'
        'orolocale/js/formatter/datetime': 'bundles/orolocale/js/formatter/datetime.js'
        'orolocale/js/moment-l10n': 'bundles/orolocale/js/moment-l10n.js'
        'orolocale/js/numeral-l10n': 'bundles/orolocale/js/numeral-l10n.js'
        'orolocale/js/app/modules/locale-module': 'bundles/orolocale/js/app/modules/locale-module.js'
    appmodules:
        - orolocale/js/app/modules/locale-module
";
    }

    public function getTemplateName()
    {
        return "@OroLocale/layouts/blank/config/requirejs.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroLocale/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LocaleBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
