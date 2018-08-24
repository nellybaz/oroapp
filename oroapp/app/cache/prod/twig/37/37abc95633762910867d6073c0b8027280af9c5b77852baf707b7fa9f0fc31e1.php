<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_page/oro_customer_page.yml */
class __TwigTemplate_924bc077384ec4e5bf3fa8c542afc2525889a34813a0fc5f410ab6025a0aa9c4 extends Twig_Template
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
            id: oro_customer_menu
            root: page_sidebar
            namespace: sidebar_customer_menu
    actions:
        - '@add':
            id: breadcrumbs
            parentId: page_main_header
            blockType: breadcrumbs
            options:
                menu_name: \"frontend_menu\"
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_page/oro_customer_page.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_page/oro_customer_page.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_page/oro_customer_page.yml");
    }
}
