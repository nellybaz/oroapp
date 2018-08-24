<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book/content.yml */
class __TwigTemplate_eb8333b8300ec5438205df3aa5df0e1168c2f98b3e4b62689cfcaffffa1a1f4c extends Twig_Template
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
            themes: 'content.html.twig'

        - '@addTree':
            items:
                style_book_main_content:
                    blockType: block

            tree:
                style_book_content:
                    style_book_main_content: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book/content.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book/content.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book/content.yml");
    }
}
