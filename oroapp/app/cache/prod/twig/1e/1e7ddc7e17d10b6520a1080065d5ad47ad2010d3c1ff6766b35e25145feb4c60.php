<?php

/* @OroAddress/layouts/blank/config/requirejs.yml */
class __TwigTemplate_875cf7dd005e1fb401a94020764bf10552d5ff29a2cec9e8a2e611692b2781de extends Twig_Template
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
    paths:
        'oroaddress/js/address-book': 'bundles/oroaddress/js/address-book.js'
        'oroaddress/js/address/collection': 'bundles/oroaddress/js/address/collection.js'
        'oroaddress/js/address/model': 'bundles/oroaddress/js/address/model.js'
        'oroaddress/js/address/view': 'bundles/oroaddress/js/address/view.js'
        'oroaddress/js/mapservice/googlemaps': 'bundles/oroaddress/js/mapservice/googlemaps.js'
        'oroaddress/js/region/collection': 'bundles/oroaddress/js/region/collection.js'
        'oroaddress/js/region/model': 'bundles/oroaddress/js/region/model.js'
        'oroaddress/js/region/view': 'bundles/oroaddress/js/region/view.js'
        'oro/datagrid/action/map-action': 'bundles/oroaddress/js/datagrid/action/map-action.js'
        'oroaddress/js/validator/name-or-organization': 'bundles/oroaddress/js/validator/name-or-organization.js'
        'oroaddress/js/app/modules/validator-constraints-module': 'bundles/oroaddress/js/app/modules/validator-constraints-module.js'
    appmodules:
        - oroaddress/js/app/modules/validator-constraints-module
";
    }

    public function getTemplateName()
    {
        return "@OroAddress/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroAddress/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/AddressBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
