<?php

/* @OroCustomer/layouts/default/page/main_menu_anonymous.yml */
class __TwigTemplate_bd6c79f63bf93d3aabc1d9c09045fbfda05bb9ac6d33fab02bc0d31547cc4fb0 extends Twig_Template
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
            themes: 'main_menu_anonymous.html.twig'
        - '@addTree':
            items:
                header_row_customer:
                    blockType: link
                    options:
                        route_name: oro_customer_customer_user_security_login
            tree:
                header_row:
                    header_row_customer: ~

    conditions: '!context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/page/main_menu_anonymous.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/page/main_menu_anonymous.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_anonymous.yml");
    }
}
