<?php

/* @OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_import.yml */
class __TwigTemplate_881d842d9949e9aef45b97e5eb222c07e249a15bf632ea8eefefd8914f9e8ec9 extends Twig_Template
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
            themes: 'quick_add_import.html.twig'
        - '@setFormTheme':
            themes: 'form.html.twig'
        - '@addTree':
            items:
                quick_add_import_form:
                    blockType: container
                quick_add_import_form_container:
                    blockType: container
                quick_add_import_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddImportFormView()'
                quick_add_import_form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddImportFormView()'
                quick_add_import_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_product_form\"].getQuickAddImportFormView()'
                quick_add_import_title:
                    blockType: text
                    options:
                        text: 'oro.product.frontend.quick_add.import_from_file.title'
                quick_add_import_description:
                    blockType: text
                    options:
                        text: 'oro.product.frontend.quick_add.import_from_file.description'
                quick_add_import_link:
                    blockType: link
                    options:
                        route_name: 'oro_product_frontend_quick_add_import'
                        text: 'oro.product.frontend.quick_add.import_from_file.label_directions'
                quick_add_import_form_submit:
                    blockType: button
                    options:
                        type: input
                        action: submit
                        text: 'oro.product.frontend.quick_add.import_from_file.continue.label'
                        style: ''
            tree:
                quick_add_container:
                    quick_add_import_form:
                        quick_add_import_title: ~
                        quick_add_import_form_container:
                            quick_add_import_form_start: ~
                            quick_add_import_description: ~
                            quick_add_import_link: ~
                            quick_add_import_form_fields: ~
                            quick_add_import_form_submit: ~
                            quick_add_import_form_end: ~
        - '@move':
            id: quick_add_import_form
            parentId: quick_add_container
            siblingId: quick_add_copy_paste_form
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_import.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_quick_add/quick_add_import.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_quick_add/quick_add_import.yml");
    }
}
