<?php

/* @OroSale/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_966cc2eb4dfcf215a527d17e2221afc0735d99bebd76e8bf9fff46b821116b61 extends Twig_Template
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
        - '@add':
            id: customer_sidebar_quote
            parentId: customer_sidebar
            blockType: link
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_sale_quote_frontend_index\")'
                route_name: oro_sale_quote_frontend_index
                text: oro.frontend.sale.quote.entity_plural_label
            siblingId: customer_sidebar_sign_out
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}
