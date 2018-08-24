<?php

/* @OroWebCatalog/layouts/blank/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_8c94e1f909c891fbef39a431555d12ba91f8d9b5d0489e34c1dc79673ac6b4c7 extends Twig_Template
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
            id: product_view_attribute_group_general_attribute_localized_fallback_names
            optionName: translated_value
            optionValue: '=data[\"web_catalog_title\"].getNodeTitle(data[\"locale\"].getLocalizedValue(value))'
";
    }

    public function getTemplateName()
    {
        return "@OroWebCatalog/layouts/blank/oro_product_frontend_product_view/layout.yml";
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
        return new Twig_Source("", "@OroWebCatalog/layouts/blank/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/layout.yml");
    }
}
