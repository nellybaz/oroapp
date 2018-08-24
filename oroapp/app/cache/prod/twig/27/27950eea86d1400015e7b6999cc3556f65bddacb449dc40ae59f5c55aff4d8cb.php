<?php

/* @OroCMS/layouts/blank/oro_cms_frontend_page_view/layout.yml */
class __TwigTemplate_1ad9c0542ff4d63339385179f0d8d36b6ce3588fd2d764b7d0979bb9225cff80 extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%title%': '=data[\"locale\"].getLocalizedValue(data[\"page\"].getTitles())'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: '=data[\"locale\"].getLocalizedValue(data[\"page\"].getTitles())'
        - '@addTree':
            items:
                cms_page_content:
                    blockType: text_with_placeholders
                    options:
                        text: '=data[\"page\"].getContent()'
            tree:
                page_content:
                    cms_page_content: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCMS/layouts/blank/oro_cms_frontend_page_view/layout.yml";
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
        return new Twig_Source("", "@OroCMS/layouts/blank/oro_cms_frontend_page_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.yml");
    }
}
