<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_536233fb6b96bfc4aa64fe41a328889437cc8f5ea71d31a2771d1ed4862e7a14 extends Twig_Template
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
        - '@addTree':
            items:
                __container:
                    blockType: container
                    prepend: true
                __list:
                    blockType: container
                __oro_customer_menu:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"oro_customer_menu\")'
            tree:
                __root:
                    __container:
                        __list:
                            __oro_customer_menu: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}
