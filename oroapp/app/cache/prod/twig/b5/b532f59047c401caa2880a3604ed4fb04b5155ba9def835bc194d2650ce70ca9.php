<?php

/* @OroWebCatalog/layouts/default/oro_product_frontend_product_index/product_index.yml */
class __TwigTemplate_d8e812e4dbe9cd8850ffbdaa4b184be8e6c84099b402177e65aa3777d0fb68e8 extends Twig_Template
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
            id: category_title
            optionName: text
            optionValue: '=data[\"web_catalog_title\"].getNodeTitle(data[\"locale\"].getLocalizedValue(data[\"category\"].getCurrentCategory().getTitles()))'
";
    }

    public function getTemplateName()
    {
        return "@OroWebCatalog/layouts/default/oro_product_frontend_product_index/product_index.yml";
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
        return new Twig_Source("", "@OroWebCatalog/layouts/default/oro_product_frontend_product_index/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/default/oro_product_frontend_product_index/product_index.yml");
    }
}
