<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book_group/grid.yml */
class __TwigTemplate_0ad2d5ad0e40e2f0f6eb151858a5938ad525dba31d408f73df11920788a2ad54 extends Twig_Template
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
            themes: 'grid.html.twig'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro_frontend_style_book.groups.grid.title'

        - '@addTree':
            items:
                group_element_grid_view:
                    blockType: group_element
                    options:
                        anchor: grid
                        label: Column Size
                group_element_item_grid:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.grid.description_grids
                style_book_grid_element_grid:
                    blockType: block

                group_element_grid_view_row:
                    blockType: group_element
                    options:
                        anchor: row_offset
                        label: Row Spacing
                group_element_item_grid_offset_row:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.grid.description_offset_row
                style_book_grid_element_offset_row:
                    blockType: block

                group_element_grid_view_columns:
                    blockType: group_element
                    options:
                        anchor: columns_offset
                        label: Column Spacing
                group_element_item_offset_holder:
                    blockType: group_element_item
                    options:
                        anchor: columns_offset_right
                        label: Right
                        subTreeLvl: 1
                        description: oro_frontend_style_book.groups.grid.description_offset_columns
                style_book_grid_element_offset:
                    blockType: block
                group_element_item_offset_bottom_holder:
                    blockType: group_element_item
                    options:
                        anchor: columns_offset_bottom
                        label: Bottom
                        subTreeLvl: 1
                        description: oro_frontend_style_book.groups.grid.description_offset_columns_bottom
                style_book_grid_element_offset_bottom:
                    blockType: block

                group_element_grid_view_columns_equal:
                    blockType: group_element
                    options:
                        anchor: columns_equal
                        label: Two Symmetric Columns
                group_element_item_half_holder:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.grid.description_half
                style_book_grid_element_half:
                    blockType: block

                group_element_grid_view_clear:
                    blockType: group_element
                    options:
                        anchor: clear
                        label: Multi-Line Row
                group_element_item_clear_holder:
                    blockType: group_element_item
                    options:
                        description: oro_frontend_style_book.groups.grid.description_clear
                style_book_grid_element_clear:
                    blockType: block
            tree:
                style_book_content:
                    group_element_grid_view:
                        group_element_item_grid:
                            style_book_grid_element_grid: ~
                    group_element_grid_view_row:
                        group_element_item_grid_offset_row:
                            style_book_grid_element_offset_row: ~
                    group_element_grid_view_columns:
                        group_element_item_offset_holder:
                            style_book_grid_element_offset: ~
                        group_element_item_offset_bottom_holder:
                            style_book_grid_element_offset_bottom: ~
                    group_element_grid_view_columns_equal:
                        group_element_item_half_holder:
                            style_book_grid_element_half: ~
                    group_element_grid_view_clear:
                        group_element_item_clear_holder:
                            style_book_grid_element_clear: ~

    conditions: 'context[\"group\"]==\"grid\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book_group/grid.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book_group/grid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book_group/grid.yml");
    }
}
