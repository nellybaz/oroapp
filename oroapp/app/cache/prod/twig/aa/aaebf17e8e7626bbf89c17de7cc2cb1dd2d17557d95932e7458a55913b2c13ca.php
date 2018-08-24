<?php

/* @OroCustomer/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_0386f47c5f49a65cba5128cb03cb40b12964ea52efd70ccf2f19f11e1cafb065 extends Twig_Template
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
            themes: 'oro_customer_menu.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}
