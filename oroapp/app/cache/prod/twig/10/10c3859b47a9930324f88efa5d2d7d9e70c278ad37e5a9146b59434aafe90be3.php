<?php

/* @OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/sidebar.yml */
class __TwigTemplate_b99c1dace7efeecdf2504fcc505651a635d0915a64d218ec874c160ad694f6a4 extends Twig_Template
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
            id: checkout_sidebar
            optionName: attr.class
            optionValue: checkout-sidebar--inner-invader
        - '@move':
            id: checkout_sidebar
            parentId: page_content
            siblingId: checkout_container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/sidebar.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/sidebar.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/oro_checkout_frontend_checkout/page/sidebar.yml");
    }
}
