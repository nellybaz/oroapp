<?php

/* @OroContactUsBridge/layouts/blank/contact_us_form.yml */
class __TwigTemplate_eac1468f7ff2a0b03b171bbc1f4bea01b531e9adc5e2ffb16c3235083dc6b11d extends Twig_Template
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
        echo "layout:
    actions:
        - '@setFormTheme':
            themes: 'contact_us_form.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroContactUsBridge/layouts/blank/contact_us_form.yml";
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
        return new Twig_Source("", "@OroContactUsBridge/layouts/blank/contact_us_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/contact_us_form.yml");
    }
}
