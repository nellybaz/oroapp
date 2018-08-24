<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book_group/components_config.yml */
class __TwigTemplate_aed31c1293f5d3432145001febdca148db7448d788cecb15f64900326c536e5d extends Twig_Template
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
            themes: 'components_config.html.twig'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro_frontend_style_book.groups.configs.title'

        - '@addTree':
            items:
                group_element_components_colors_view:
                    blockType: group_element
                    options:
                        anchor: colors
                        label: Colors
                group_element_components_colors:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.configs.description_colors
                        source: false
                style_book_components_color:
                    blockType: block

                group_element_components_typography_view:
                    blockType: group_element
                    options:
                        anchor: typography
                        label: Typography
                group_element_components_typography:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.configs.description_typography
                        source: false
                style_book_components_typography:
                    blockType: block

                group_element_components_sizes_view:
                    blockType: group_element
                    options:
                        anchor: sizes
                        label: Sizes
                group_element_components_sizes:
                    blockType: group_element_item
                    options:
                        preview: false
                        source_language: scss
                style_book_components_sizes:
                    blockType: block

                group_element_components_functions_view:
                    blockType: group_element
                    options:
                        anchor: functions
                        label: Functions
                group_element_components_functions:
                    blockType: group_element_item
                    options:
                      preview: false
                      source_language: scss
                style_book_components_functions:
                    blockType: block

                group_element_components_mixins_view:
                    blockType: group_element
                    options:
                        anchor: mixins
                        label: Mixins
                group_element_components_mixins:
                    blockType: group_element_item
                    options:
                        preview: false
                        source_language: scss
                style_book_components_mixins:
                    blockType: block

                group_element_components_mixins_components_view:
                    blockType: group_element
                    options:
                        anchor: mixins-components
                        label: Mixins for Components
                group_element_components_mixins_components:
                    blockType: group_element_item
                    options:
                        preview: false
                        source_language: scss
                style_book_components_mixins_components:
                    blockType: block

                group_element_components_animation_view:
                    blockType: group_element
                    options:
                        anchor: animation
                        label: Animation
                group_element_components_animation:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.configs.description_animation
                style_book_components_animation:
                    blockType: block

            tree:
                style_book_content:
                    group_element_components_colors_view:
                        group_element_components_colors:
                            style_book_components_color: ~
                    group_element_components_typography_view:
                        group_element_components_typography:
                            style_book_components_typography: ~
                    group_element_components_sizes_view:
                        group_element_components_sizes:
                            style_book_components_sizes: ~
                    group_element_components_functions_view:
                        group_element_components_functions:
                            style_book_components_functions: ~
                    group_element_components_mixins_view:
                        group_element_components_mixins:
                            style_book_components_mixins: ~
                    group_element_components_mixins_components_view:
                        group_element_components_mixins_components:
                            style_book_components_mixins_components: ~
                    group_element_components_animation_view:
                        group_element_components_animation:
                            style_book_components_animation: ~

    conditions: 'context[\"group\"]==\"configs\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book_group/components_config.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book_group/components_config.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book_group/components_config.yml");
    }
}
