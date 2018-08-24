<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_toolbar_actions/layout.yml */
class __TwigTemplate_4ffe3c20628f8c3d08f8187e56e7af30b8ed2f51640d3c10331e43ac481a4056 extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                __wrapper:
                    blockType: container
                __actions_container:
                    blockType: container
                __actions-list:
                    blockType: list
                    options:
                        attr:
                            'class': 'controls-list'
                __print_item:
                    blockType: list_item
                __print_button:
                    blockType: button
                    options:
                        type: button
                        action: button
                        icon: print
                        attr:
                            'data-page-component-print-page': ''
                            'class': 'btn btn--link'

            tree:
                __root:
                    __wrapper:
                        __actions_container:
                            __actions-list:
                                __print_item:
                                    __print_button: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_toolbar_actions/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_toolbar_actions/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_toolbar_actions/layout.yml");
    }
}
