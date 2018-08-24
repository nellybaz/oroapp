<?php

/* @OroRFP/layouts/default/oro_rfp_frontend_request_index/layout.yml */
class __TwigTemplate_c779ac8ac0b1d94eec2c6a596453235e099765533028d8cf39f6fb1e49b47e64 extends Twig_Template
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
            id: oro_rfp_request_grid
            root: page_content
            namespace: requests

    actions:
        - '@setBlockTheme':
            themes: 'OroRFPBundle:layouts:default/oro_rfp_frontend_request_index/layout.html.twig'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.frontend.rfp.request.entity_plural_label'

        - '@appendOption':
            id: requests_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.rfq'

        - '@setOption':
            id: datagrid_toolbar_button_container
            optionName: visible
            optionValue: true
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/oro_rfp_frontend_request_index/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/oro_rfp_frontend_request_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/oro_rfp_frontend_request_index/layout.yml");
    }
}
