<?php

/* @OroProduct/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.yml */
class __TwigTemplate_272f91b0fe9fe756f08d69fd97dd61d4ba6b3fadcb89d543d4eb46de5ca9b922 extends Twig_Template
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
            themes: 'oro_product_line_item_form.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.yml");
    }
}
