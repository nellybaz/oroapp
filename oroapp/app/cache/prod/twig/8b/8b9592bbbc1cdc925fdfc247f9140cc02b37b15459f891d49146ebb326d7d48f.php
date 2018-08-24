<?php

/* @OroContactUsBridge/layouts/default/config/assets.yml */
class __TwigTemplate_24516bac07f09a9c5f22a610aa559935ba4e6ad7817e86ca14b5e2bcf8b5a5c3 extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/orocontactusbridge/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroContactUsBridge/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroContactUsBridge/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/default/config/assets.yml");
    }
}
