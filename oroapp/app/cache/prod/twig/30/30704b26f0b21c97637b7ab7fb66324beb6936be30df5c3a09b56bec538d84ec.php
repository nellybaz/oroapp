<?php

/* @OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_copy_paste.yml */
class __TwigTemplate_4f1c7ef15d339f4dde2708ce261b3c2c7199a600a4aacc1089399bac8efc4ba1 extends Twig_Template
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
            themes: 'quick_add_copy_paste.html.twig'
        - '@setFormTheme':
            themes: 'form.html.twig'
        - '@addTree':
            items:
                quick_add_copy_paste_form:
                    blockType: container
                quick_add_copy_paste_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddCopyPasteFormView()'
                quick_add_copy_paste_form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddCopyPasteFormView()'
                quick_add_copy_paste_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddCopyPasteFormView()'
                quick_add_copy_paste_form_buttons:
                    blockType: container
                quick_add_copy_paste_form_submit:
                    blockType: button
                    options:
                        type: button
                        action: submit
                        text: oro.product.frontend.quick_add.continue.label
                        style: 'btn--primary btn--disabled'
                quick_add_copy_paste_title:
                    blockType: text
                    options:
                        text: 'oro.product.frontend.quick_add.copy_paste.title'
                quick_add_copy_paste_description:
                    blockType: text
                    options:
                        text: 'oro.product.frontend.quick_add.copy_paste.description'
            tree:
                quick_add_container:
                    quick_add_copy_paste_form:
                        quick_add_copy_paste_title: ~
                        quick_add_copy_paste_form_start: ~
                        quick_add_copy_paste_description: ~
                        quick_add_copy_paste_form_fields: ~
                        quick_add_copy_paste_form_buttons:
                            quick_add_copy_paste_form_submit: ~
                        quick_add_copy_paste_form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_copy_paste.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_copy_paste.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_quick_add/quick_add_copy_paste.yml");
    }
}
