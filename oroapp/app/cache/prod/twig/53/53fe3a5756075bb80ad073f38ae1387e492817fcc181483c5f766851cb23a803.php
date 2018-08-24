<?php

/* @OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid_mobile.yml */
class __TwigTemplate_6aa8da65e859b30b0d6802378adc0260114ff9e0f1c2fbba60e652646e3b0e49 extends Twig_Template
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
            id: __datagrid_toolbar_pagination_container
            optionName: visible
            optionValue: false

";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid_mobile.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid_mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/datagrid_mobile.yml");
    }
}
