<?php

/* @OroFrontend/layouts/blank/config/screens.yml */
class __TwigTemplate_db515a86cc90ec4128a1f8d251f1067749f2ed8e126357e023ed4b44d3d923a2 extends Twig_Template
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
        echo "screens:
    desktop:
        label: 'Laptops and desktops with 13 in. + screens'
        hidingCssClass: 'hide-on-desktop'
    tablet:
        label: 'Tablet devices with up to 1600x1024 screen resolution.'
        hidingCssClass: 'hide-on-tablet'
    mobile:
        label: 'Mobile optimized view.'
        hidingCssClass: 'hide-on-mobile'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/config/screens.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/config/screens.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/config/screens.yml");
    }
}
