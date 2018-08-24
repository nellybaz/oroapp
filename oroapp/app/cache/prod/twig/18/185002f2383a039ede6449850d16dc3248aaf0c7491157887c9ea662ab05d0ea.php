<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book_group/forms.yml */
class __TwigTemplate_c32e8255bd5fe91fa01671d3ea777a8e5528a38edf7c3cc89770bce21567a36b extends Twig_Template
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
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro_frontend_style_book.groups.forms.title'

        - '@addTree':
            items:
                group_element_form_text:
                    blockType: group_element
                    options:
                        anchor: form_text
                        label: Text Input
                group_element_item_form_text:
                    blockType: group_element_item
                    options:
                        anchor: form_text
                        label: One-Line
                form_text:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"text\"]'

                group_element_form_textarea:
                    blockType: group_element_item
                    options:
                        anchor: form_textarea
                        label: Multi-line
                form_textarea:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"textarea\"]'

                group_element_form_password:
                    blockType: group_element_item
                    options:
                        anchor: form_password
                        label: Password
                form_password:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"password\"]'

                group_element_form_datetime:
                    blockType: group_element
                    options:
                        anchor: form_datetime
                        label: Date and Time Picker
                group_element_item_form_datetime:
                    blockType: group_element_item
                form_datetime:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"datetime\"]'

                group_element_form_select:
                    blockType: group_element
                    options:
                        anchor: form_select
                        label: Single Option Select
                group_element_item_form_select:
                    blockType: group_element_item
                    options:
                        anchor: form_drop_down
                        label: Via Drop-Down
                form_select:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"select\"]'

                group_element_form_checkbox:
                    blockType: group_element_item
                    options:
                        anchor: form_checkbox
                        label: Via Checkbox
                form_checkbox: 
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"checkbox\"]'

                group_element_form_radio:
                    blockType: group_element_item
                    options:
                        anchor: form_radio
                        label: Via a Radio
                form_radio:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"radio\"]'

                group_element_form_checkboxes:
                    blockType: group_element
                    options:
                        anchor: form_checkboxes
                        label: Multiple Option Select
                group_element_item_form_checkboxes:
                    blockType: group_element_item
                    options:
                        anchor: form_checkbox_element
                        label: Via Checkbox
                form_checkboxes:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"checkboxes\"]'

                group_element_form_radios:
                    blockType: group_element_item
                    options:
                        anchor: form_radios
                        label: Via Radio List
                form_radios:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"radios\"]'

                group_element_form_multiselect:
                    blockType: group_element_item
                    options:
                        anchor: form_multiselect
                        label: Via Drop-Down
                form_multiselect:
                    blockType: form_field
                    options:
                        form: '=data[\"style_book_form\"].getStyleBookFormView()[\"multiselect\"]'

            tree:
                style_book_content:
                    group_element_form_text:
                        group_element_item_form_text:
                            form_text: ~
                        group_element_form_textarea:
                            form_textarea: ~
                        group_element_form_password:
                            form_password: ~
                    group_element_form_datetime:
                        group_element_item_form_datetime:
                            form_datetime: ~

                    group_element_form_select:
                        group_element_item_form_select:
                            form_select: ~
                        group_element_form_checkbox:
                            form_checkbox:  ~
                        group_element_form_radio:
                            form_radio: ~
                        group_element_form_radios:
                            form_radios: ~

                    group_element_form_checkboxes:
                        group_element_item_form_checkboxes:
                            form_checkboxes: ~
                        group_element_form_multiselect:
                            form_multiselect: ~

    conditions: 'context[\"group\"]==\"forms\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book_group/forms.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book_group/forms.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book_group/forms.yml");
    }
}
