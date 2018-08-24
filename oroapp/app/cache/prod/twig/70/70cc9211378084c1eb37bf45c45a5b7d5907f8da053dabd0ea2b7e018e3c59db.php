<?php

/* @OroRFP/layouts/default/imports/oro_rfp_request_grid/layout.yml */
class __TwigTemplate_c2073e33c5c85e7f553c612c4ed398ce83b1c8a8eca4f8ac48b3bb79cc155c40 extends Twig_Template
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
    imports:
        -
            id: datagrid
            root: __root

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@setOption':
            id: __datagrid
            optionName: grid_name
            optionValue: frontend-requests-grid

        - '@add':
            id: __additional_views_container
            parentId: __datagrid_views_toolbar
            blockType: container

        - '@add':
            id: __button_container_create_new_quote
            parentId: __additional_views_container
            blockType: combined_buttons
            options:
                buttons: '=data[\"buttons\"].getAll()'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.rfp.request.label'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.hideTitle
            optionValue: '.page-title-wrapper'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/imports/oro_rfp_request_grid/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/imports/oro_rfp_request_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/imports/oro_rfp_request_grid/layout.yml");
    }
}
