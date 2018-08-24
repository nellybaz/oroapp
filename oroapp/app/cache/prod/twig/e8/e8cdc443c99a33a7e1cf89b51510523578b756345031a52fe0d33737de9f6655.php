<?php

/* @OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add.yml */
class __TwigTemplate_613c150f0819731e82c75d74ec5ad056642faec08f157864f312a7d9089f9e93 extends Twig_Template
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
    imports:
        -
            id: oro_product_quick_add_form
            root: quick_add_container
            namespace: quick_add

    actions:
        - '@setBlockTheme':
            themes: 'quick_add.html.twig'
        - '@setFormTheme':
            themes: 'form.html.twig'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.product.frontend.quick_add.title'
        - '@add':
            id: quick_add_container
            parentId: page_content
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_quick_add/quick_add.yml");
    }
}
