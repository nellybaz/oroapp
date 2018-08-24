<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_method.yml */
class __TwigTemplate_61ada40c6348072753aff5652760909195087875631e5dcf730c8d0217b163c0 extends Twig_Template
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
            themes: '../templates/shipping_method.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 3

        - '@add':
            id: shipping_methods
            parentId: checkout_information_body
            blockType: shipping_methods
            prepend: true
            options:
                attr:
                    class: 'grid__column grid__column--offset-y grid__column--6'
                class_prefix: 'checkout'
                methods: '=data[\"checkout_shipping_methods\"].getApplicableMethodsViews(data[\"checkout\"]).toArray()'
                currentShippingMethod: '=data[\"checkout\"].getShippingMethod()'
                currentShippingMethodType: '=data[\"checkout\"].getShippingMethodType()'
        - '@add':
            id: shipping_methods_template
            parentId: shipping_methods
            blockType: container
        - '@add':
            id: shipping_methods_template_methods
            parentId: shipping_methods_template
            blockType: container

        - '@move':
            id: checkout_form_buttons
            parentId: checkout_form
            siblingId: checkout_form_fields

    conditions: 'context[\"workflowStepName\"]==\"enter_shipping_method\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_method.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_method.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_method.yml");
    }
}
