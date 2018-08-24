<?php

/* @OroCustomer/layouts/default/oro_customer_frontend_customer_user_address_index/customer_address_book_page.yml */
class __TwigTemplate_6e889330d92253a9b0f70d63e68a7b9f19999f76506f2c148359f6d3ee36ff96 extends Twig_Template
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
            id: oro_customer_address_grid
            root: customer_address_book_addresses
            namespace: customer_address_book
        -
            id: oro_customer_user_address_grid
            root: customer_address_book_user_addresses
            namespace: customer_address_book

    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.customer.frontend.customer_user.address.label'

        - '@addTree':
            items:
                customer_address_book_page:
                    blockType: container
                customer_address_book_addresses:
                    blockType: container
                customer_address_book_user_addresses:
                    blockType: container
            tree:
                page_content:
                    customer_address_book_page:
                        customer_address_book_addresses: ~
                        customer_address_book_user_addresses: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_address_index/customer_address_book_page.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_address_index/customer_address_book_page.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_customer_frontend_customer_user_address_index/customer_address_book_page.yml");
    }
}
