<?php

/* @OroCustomer/layouts/default/oro_frontend_exception/exception.yml */
class __TwigTemplate_889b12f1d8f9c8537bc495e65d0059fcdd0b4b81fd04d4e9c566ea3aa6c4c4d5 extends Twig_Template
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
        - '@remove':
            id: head_customer_menu_list
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_frontend_exception/exception.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_frontend_exception/exception.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_frontend_exception/exception.yml");
    }
}
