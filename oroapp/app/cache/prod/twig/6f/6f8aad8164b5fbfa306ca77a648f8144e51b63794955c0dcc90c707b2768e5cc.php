<?php

/* @OroFrontend/layouts/default/oro_frontend_style_book_group/components_config.yml */
class __TwigTemplate_15f363349c2efe3cfe7eb81824bbeb1eb8fc0a2404f7db150be9ad409607ffaf extends Twig_Template
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
        - '@setBlockTheme':
            themes: 'components_config.html.twig'

    conditions: 'context[\"group\"]==\"configs\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_style_book_group/components_config.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_style_book_group/components_config.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_style_book_group/components_config.yml");
    }
}
