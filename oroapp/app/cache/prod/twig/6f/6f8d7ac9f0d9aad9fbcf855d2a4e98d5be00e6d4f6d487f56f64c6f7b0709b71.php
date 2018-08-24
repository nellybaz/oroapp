<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book_group/forms_button.yml */
class __TwigTemplate_078c89ed359b37401e6a36357b866bb236634a70f40c7b568a5b21cd53b4db40 extends Twig_Template
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
            themes: 'forms_button.html.twig'

        - '@addTree':
            items:
                style_book_forms_description:
                    blockType: block

                group_element_buttons:
                    blockType: group_element
                    options:
                        anchor: buttons
                        label: Buttons
                group_element_button_view:
                    blockType: group_element_item
                    options:
                      anchor: button_default
                      label: Default Button
                      subTreeLvl: 1
                style_book_button_element:
                    blockType: block

                group_element_button_action_view:
                    blockType: group_element_item
                    options:
                      anchor: button_acction
                      label: Action Button
                      subTreeLvl: 1
                style_book_button_element_action:
                    blockType: block

                group_element_button_info_view:
                    blockType: group_element_item
                    options:
                      anchor: button_info
                      label: Info Button
                      subTreeLvl: 1
                style_book_button_element_info:
                    blockType: block

                group_element_button_primary_view:
                    blockType: group_element_item
                    options:
                      anchor: button_primary
                      label: Primary Button
                      subTreeLvl: 1
                style_book_button_element_primary:
                    blockType: block

                group_element_button_link_view:
                    blockType: group_element_item
                    options:
                      anchor: button_link
                      label: Link Button
                      subTreeLvl: 1
                style_book_button_element_link:
                    blockType: block

                group_element_button_large_size_view:
                    blockType: group_element_item
                    options:
                      anchor: button_large_size
                      label: Large Button (type 1, --large)
                      subTreeLvl: 1
                style_book_button_element_large_size:
                    blockType: block

                group_element_button_size_l_view:
                    blockType: group_element_item
                    options:
                      anchor: button_size_l
                      label: Large Button (type 2, --size-l)
                      subTreeLvl: 1
                style_book_button_element_size_l:
                    blockType: block

                group_element_button_size_m_view:
                    blockType: group_element_item
                    options:
                      anchor: button_size_m
                      label: Medium Button (--size-m)
                      subTreeLvl: 1
                style_book_button_element_size_m:
                    blockType: block

                group_element_button_size_s_view:
                    blockType: group_element_item
                    options:
                      anchor: button_size_s
                      label: Small Button (--size-s)
                      subTreeLvl: 1
                style_book_button_element_size_s:
                    blockType: block

                group_element_buttons_group:
                    blockType: group_element
                    options:
                        anchor: buttons group
                        label: Buttons Group

                group_element_button_element_group_view:
                    blockType: group_element_item
                    options:
                      anchor: button_group
                      label: Drop-Down Button Group
                      subTreeLvl: 1
                style_book_button_element_group:
                    blockType: block

                group_element_button_element_inline_group_view:
                    blockType: group_element_item
                    options:
                      anchor: button_inline_group
                      label: Inline Icon Button Group
                      subTreeLvl: 1
                style_book_button_element_inline_group:
                    blockType: block

                group_element_button_element_btn_group_view:
                    blockType: group_element_item
                    options:
                      anchor: button_inline_btn_group
                      label: Horizontal Text Button Group
                      subTreeLvl: 1
                style_book_button_element_btn_group:
                    blockType: block

                group_element_button_element_btn_group_vertical_view:
                    blockType: group_element_item
                    options:
                      anchor: button_inline_group_vertical
                      label: Vertical Text Button Group
                      subTreeLvl: 1
                style_book_button_element_btn_group_vertical:
                    blockType: block

            tree:
                style_book_content:
                    style_book_forms_description: ~

                    group_element_buttons:
                        group_element_button_view:
                            style_book_button_element: ~

                    group_element_buttons_group:
                        group_element_button_element_group_view:
                            style_book_button_element_group: ~
                        group_element_button_element_inline_group_view:
                            style_book_button_element_inline_group: ~
                        group_element_button_element_btn_group_view:
                            style_book_button_element_btn_group: ~
                        group_element_button_element_btn_group_vertical_view:
                            style_book_button_element_btn_group_vertical: ~

    conditions: 'context[\"group\"]==\"forms\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book_group/forms_button.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book_group/forms_button.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book_group/forms_button.yml");
    }
}
