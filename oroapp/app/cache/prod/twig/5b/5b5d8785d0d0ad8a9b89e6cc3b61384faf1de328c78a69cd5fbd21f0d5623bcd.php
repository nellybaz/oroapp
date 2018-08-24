<?php

/* @OroWebCatalog/layouts/blank/oro_cms_frontend_page_view/layout.yml */
class __TwigTemplate_0a8513b53db5a78530df20bd017720f0bed21983a9c7a2e6c37a9e5492bc18d5 extends Twig_Template
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
        - '@setOption':
            id: title
            optionName: value
            optionValue: '=data[\"web_catalog_title\"].getTitle(defaultValue)'
        - '@setOption':
            id: page_title
            optionName: value
            optionValue: '=data[\"web_catalog_title\"].getNodeTitle(defaultValue)'
";
    }

    public function getTemplateName()
    {
        return "@OroWebCatalog/layouts/blank/oro_cms_frontend_page_view/layout.yml";
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
        return new Twig_Source("", "@OroWebCatalog/layouts/blank/oro_cms_frontend_page_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.yml");
    }
}
