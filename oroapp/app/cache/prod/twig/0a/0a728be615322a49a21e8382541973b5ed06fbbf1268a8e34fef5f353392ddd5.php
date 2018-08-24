<?php

/* @OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_result.yml */
class __TwigTemplate_93ed543edcc33c9f8892903742d2ea0b80c15face6ede55ff01ee828fab8d4b6 extends Twig_Template
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
            id: oro_product_quick_add_validation
            root: widget_content
        -
            id: oro_product_quick_add_form
            root: quick_add_validation
            namespace: quick_add_import

    actions:
        - '@setBlockTheme':
            themes: 'quick_add_import_result.html.twig'
        - '@setOption':
            id: widget_content
            optionName: 'attr.data-page-component-module'
            optionValue: 'orofrontend/js/app/components/widget-form-component'
        - '@setOption':
            id: widget_content
            optionName: class_prefix
            optionValue: 'quick-order-import-validation'
        # modify oro_product_quick_add_form import
        - '@add':
            id: quick_add_form_cancel
            parentId: quick_add_form_buttons
            blockType: button
            options:
                type: button
                action: button
                text: 'oro.product.frontend.quick_add.import_validation.back'
                style: ''
                attr:
                    'data-url': '=data[\"backToUrl\"]'
        - '@setOption':
            id: quick_add_form_start
            optionName: form_route_name
            optionValue: 'oro_product_frontend_quick_add_validation_result'
        - '@move':
            id: widget_actions
            parentId: quick_add_form
            siblingId: quick_add_form_buttons
    conditions: 'context[\"import_step\"]==\"result\"'

";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_result.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_result.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_result.yml");
    }
}
