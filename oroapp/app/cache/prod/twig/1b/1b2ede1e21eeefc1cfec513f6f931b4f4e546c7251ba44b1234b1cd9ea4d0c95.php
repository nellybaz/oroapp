<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/page_template/short/logged.yml */
class __TwigTemplate_603b69a3e3345f7b1704060febf0a8a58e626ff6e385eaba65d09fba37f34561 extends Twig_Template
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
            themes: 'logged.html.twig'
    conditions: '!context[\"is_mobile\"] && context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/short/logged.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/short/logged.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/page_template/short/logged.yml");
    }
}