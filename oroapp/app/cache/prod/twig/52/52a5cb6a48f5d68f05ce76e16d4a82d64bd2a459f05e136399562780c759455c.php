<?php

/* @OroFrontend/layouts/default/oro_frontend_style_book_group/forms_button.yml */
class __TwigTemplate_8b1377da160c698103f6df43963bc678b717cd7323b8573079f1cc92c52d3c42 extends Twig_Template
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

            tree:
                group_element_buttons:
                        group_element_button_action_view:
                            style_book_button_element_action: ~
                        group_element_button_info_view:
                            style_book_button_element_info: ~
                        group_element_button_primary_view:
                            style_book_button_element_primary: ~
                        group_element_button_link_view:
                            style_book_button_element_link: ~
                        group_element_button_large_size_view:
                            style_book_button_element_large_size: ~
                        group_element_button_size_l_view:
                            style_book_button_element_size_l: ~
                        group_element_button_size_m_view:
                            style_book_button_element_size_m: ~
                        group_element_button_size_s_view:
                            style_book_button_element_size_s: ~

    conditions: 'context[\"group\"]==\"forms\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_style_book_group/forms_button.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_style_book_group/forms_button.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_style_book_group/forms_button.yml");
    }
}
