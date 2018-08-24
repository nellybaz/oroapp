<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/mobile.yml */
class __TwigTemplate_79c0cf33a92e5a77588ca25f30b13033f2450311621e745f26244d1dec9841b6 extends Twig_Template
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
            id: product_view_line_item_container
            parentId: product_view_content_container
            siblingId: product_view_description_container
            prepend: false
    conditions: 'context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/mobile.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/mobile.yml");
    }
}
