<?php

/* @OroFrontend/layouts/blank/imports/style-book-menu/grid_group.yml */
class __TwigTemplate_9fd85e2a9004cf7eb430edd9a5f44b732abb0b22d5644aec6d45dccbe8b41db9 extends Twig_Template
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
        - '@add':
            id: grid_item
            parentId: style_book_groups_menu
            blockType: groups_menu_item
            options:
                label: oro_frontend_style_book.groups.grid.title
                group: grid
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/style-book-menu/grid_group.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/style-book-menu/grid_group.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/style-book-menu/grid_group.yml");
    }
}
