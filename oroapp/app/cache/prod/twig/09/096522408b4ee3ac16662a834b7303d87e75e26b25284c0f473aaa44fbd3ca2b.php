<?php

/* @OroFrontend/layouts/default/oro_frontend_exception/exception.yml */
class __TwigTemplate_72bb427ad468fa7a6b768893793606fcc1cbc4b7dfe6913eb791ebe3ae2a4378 extends Twig_Template
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
              themes: 'OroFrontendBundle:layouts:default/oro_frontend_exception/exception.html.twig'
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%status%': '=data[\"status_text\"]'
        - '@add':
            id: exception
            parentId: page_content
            blockType: exception
            options:
                status_code: '=data[\"status_code\"]'
                status_text: '=data[\"status_text\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_exception/exception.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_exception/exception.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_exception/exception.yml");
    }
}
