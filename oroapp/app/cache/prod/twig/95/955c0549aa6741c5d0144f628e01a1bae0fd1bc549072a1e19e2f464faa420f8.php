<?php

/* @OroContactUs/layouts/blank/config/requirejs.yml */
class __TwigTemplate_3705f9b4b786b805130c24a0b377e189a2a48ee3b1596df2085bdb8dde6ef5b9 extends Twig_Template
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
        'orocontactus/js/app/modules/validator-constraints-module': 'bundles/orocontactus/js/app/modules/validator-constraints-module.js'
        'orocontactus/js/validator/contact-request-callback': 'bundles/orocontactus/js/validator/contact-request-callback.js'
    appmodules:
        - orocontactus/js/app/modules/validator-constraints-module
";
    }

    public function getTemplateName()
    {
        return "@OroContactUs/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroContactUs/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/ContactUsBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
