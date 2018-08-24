<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_registration_instructions/layout.yml */
class __TwigTemplate_64bbad849eb472da75585dffd3f6a4137c3359b9ea4636f6ccb199a8c3c1e3a9 extends Twig_Template
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
                __text:
                    blockType: text
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_customer.registration_instructions_enabled\")'
                        text: '=data[\"system_config_provider\"].getValue(\"oro_customer.registration_instructions_text\")'
            tree:
                __root:
                    __text: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_registration_instructions/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_registration_instructions/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_registration_instructions/layout.yml");
    }
}
