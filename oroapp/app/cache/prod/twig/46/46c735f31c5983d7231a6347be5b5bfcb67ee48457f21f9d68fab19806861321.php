<?php

/* @OroCustomer/layouts/default/page/main_menu_logged.yml */
class __TwigTemplate_4da501729a1be890c86510b899a42d1e2c48613a3ebc715f3c4a7d81ed31f8ac extends Twig_Template
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
            root: header_row_customer_container
            namespace: head_customer_menu
    actions:
        - '@setBlockTheme':
            themes: 'main_menu_logged.html.twig'

        - '@addTree':
            items:
                header_row_customer:
                    blockType: container
                    siblingId: header_row_shopping
                    prepend: true
                header_row_customer_trigger:
                    blockType: container
                header_row_customer_container:
                    blockType: container
            tree:
                header_row:
                    header_row_customer:
                        header_row_customer_trigger:
                            header_row_customer_container: ~

    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/page/main_menu_logged.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/page/main_menu_logged.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_logged.yml");
    }
}
