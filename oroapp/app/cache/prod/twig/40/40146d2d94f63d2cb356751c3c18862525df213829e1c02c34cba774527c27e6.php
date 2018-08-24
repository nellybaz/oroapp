<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_aac6247dc6aa2a4fc856347dccc1825bb2ffe4e849885d849ff39c33daeacdd4 extends Twig_Template
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
        - '@move':
            id: product_sticker_new
            parentId: product_view_media_container

        - '@setOption':
            id: product_sticker_new
            optionName: mode
            optionValue: icon

        - '@setOption':
            id: product_sticker_new
            optionName: attr.class
            optionValue: 'product-sticker--icon-static-size'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/layout.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/layout.yml");
    }
}
