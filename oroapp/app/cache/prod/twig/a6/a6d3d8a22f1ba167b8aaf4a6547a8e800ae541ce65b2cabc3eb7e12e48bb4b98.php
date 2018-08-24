<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_view/attributes.yml */
class __TwigTemplate_8f5861ef218c5dc4e04da660ece1f7da25c53ac426f8b4c585754aaf81c7bd47 extends Twig_Template
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
            themes: 'attributes.html.twig'
        - '@addTree':
            items:
                product_view_attributes_rest:
                    blockType: attribute_group_rest
                    options:
                        entity: '=data[\"product\"]'
                        attribute_family: '=context[\"attribute_family\"]'
                        attr:
                            class: \"product-view__attributes-container\"

            tree:
                product_view_additional_container:
                    product_view_attributes_rest: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_view/attributes.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_view/attributes.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/attributes.yml");
    }
}
