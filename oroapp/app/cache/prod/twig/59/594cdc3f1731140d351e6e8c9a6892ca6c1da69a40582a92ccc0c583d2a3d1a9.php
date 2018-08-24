<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_role_index/layout.yml */
class __TwigTemplate_f89fed31f4420ede0d0d15cdc8315e1234358dfda552ba059edb164d674a6870 extends Twig_Template
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
            id: oro_customer_page
    actions: []
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_role_index/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_role_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_role_index/layout.yml");
    }
}
