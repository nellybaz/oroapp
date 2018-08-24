<?php

/* @OroFrontend/layouts/default/imports/datagrid_views/datagrid_views.yml */
class __TwigTemplate_58afcebbe1c180369a3b44323d2bdf397047f3f3c66fdfb800a8fd032611c34a extends Twig_Template
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
            themes: 'datagrid_views.html.twig'

        - '@addTree':
            items:
                __datagrid_views:
                    blockType: container
                __datagrid_views_toolbar:
                    blockType: container
                __datagrid_views_toolbar_header:
                    blockType: container
                __datagrid_views_container_label:
                    blockType: block
                __datagrid_views_container_edit_label:
                    blockType: container
                __datagrid_views_popup:
                    blockType: container
                __datagrid_views_popup_close:
                    blockType: block
                __datagrid_views_popup_container:
                    blockType: container
                __datagrid_views_popup_title:
                    blockType: block
                __datagrid_views_popup_list:
                    blockType: container
                __datagrid_views_popup_list_item:
                    blockType: container
                __datagrid_views_popup_footer:
                    blockType: container
            tree:
                __root:
                    __datagrid_views:
                        __datagrid_views_toolbar:
                            __datagrid_views_toolbar_header:
                                __datagrid_views_container_label: ~
                            __datagrid_views_container_edit_label: ~
                            __datagrid_views_popup:
                                __datagrid_views_popup_close: ~
                                __datagrid_views_popup_container:
                                    __datagrid_views_popup_title: ~
                                    __datagrid_views_popup_list:
                                        __datagrid_views_popup_list_item: ~
                                    __datagrid_views_popup_footer: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/imports/datagrid_views/datagrid_views.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/imports/datagrid_views/datagrid_views.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/datagrid_views/datagrid_views.yml");
    }
}
