<?php

/* @OroProduct/layouts/default/imports/oro_product_quick_add_form/layout.yml */
class __TwigTemplate_d54568e0f3fd686e7aa824f4f42115b4125113205514309dbeb1b4239f043d95 extends Twig_Template
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
        - '@addTree':
            items:
                __form:
                    blockType: container
                __form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddFormView()'
                __form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddFormView()'
                __form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddFormView()'
                __form_buttons_wrapper:
                    blockType: container
                __form_clear_button:
                    blockType: button
                    options:
                        type: button
                        text: oro.product.frontend.quick_add.clear
                        icon: times
                __form_buttons:
                    blockType: container
            tree:
                __root:
                    __form:
                        __form_start: ~
                        __form_fields: ~
                        __form_buttons_wrapper:
                            __form_clear_button: ~
                            __form_buttons: ~
                        __form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/imports/oro_product_quick_add_form/layout.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/imports/oro_product_quick_add_form/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_quick_add_form/layout.yml");
    }
}
