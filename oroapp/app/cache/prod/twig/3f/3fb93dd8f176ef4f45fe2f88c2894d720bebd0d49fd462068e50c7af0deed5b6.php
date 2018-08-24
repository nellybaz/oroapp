<?php

/* @OroDataGrid/layouts/blank/config/assets.yml */
class __TwigTemplate_118ece6758e2d0aca101441adcf0563f27d720912a67ca41709e80840985678b extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/orodatagrid/blank/scss/variables/no-data-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/datagrid-table-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/datagrid-header-cell-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/datagrid-body-cell-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/datagrid-row-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/datagrid-massaction-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/launcher-item-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/more-bar-holder-config.scss'
        - 'bundles/orodatagrid/blank/scss/variables/grid-views-config.scss'

        - 'bundles/orodatagrid/blank/scss/components/datagrid-toolbar.scss'

        - 'bundles/orodatagrid/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroDataGrid/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
