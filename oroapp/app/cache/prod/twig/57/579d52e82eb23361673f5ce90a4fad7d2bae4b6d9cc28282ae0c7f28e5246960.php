<?php

/* @OroCustomer/layouts/default/imports/oro_customer_address_form/oro_customer_address_form.yml */
class __TwigTemplate_2d2611955712d4704c56cbd060ae93faa90cecc6a6e5c8b7979490fe49fc30a1 extends Twig_Template
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
            themes: 'oro_customer_address_form.html.twig'
        - '@setFormTheme':
            themes: 'form_theme.html.twig'
        - '@addTree':
            items:
                __container:
                    blockType: container
                __form_errors:
                    blockType: form_errors
                    options:
                        form: '=data[\"oro_customer_frontend_customer_address_form\"].getAddressFormView(data[\"entity\"], data[\"customer\"])'
                __form:
                    blockType: form
                    options:
                        form: '=data[\"oro_customer_frontend_customer_address_form\"].getAddressFormView(data[\"entity\"], data[\"customer\"])'
                __form_actions:
                    blockType: container
                __form_actions_update:
                    blockType: button
                    options:
                        action: submit
                        text: oro.customer.frontend.address.buttons.save
                        style: auto
                        attr:
                            'class': 'role-submit '
                __form_actions_cancel:
                    blockType: link
                    options:
                        path: '=data[\"backToUrl\"]'
                        text: oro.customer.frontend.address.buttons.cancel
                        attr:
                            'class': 'btn '
                __form_required_label:
                    blockType: block
            tree:
                __root:
                    __container:
                        __form_errors: ~
                        __form: ~
                        __form_actions:
                            __form_actions_update: ~
                            __form_actions_cancel: ~
                        __form_required_label: ~
        - '@move':
            id: __form_actions
            parentId: __form
            siblingId: __form_fields
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_address_form/oro_customer_address_form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_address_form/oro_customer_address_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_address_form/oro_customer_address_form.yml");
    }
}
