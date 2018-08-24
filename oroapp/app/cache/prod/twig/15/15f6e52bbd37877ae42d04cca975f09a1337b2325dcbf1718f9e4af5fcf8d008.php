<?php

/* @OroDataGrid/layouts/blank/imports/datagrid/layout.yml */
class __TwigTemplate_428cf27eac82f437e8aa10b3c21afa8b93a689230ad608e2871c8a57fa9c1f54 extends Twig_Template
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
            id: datagrid_toolbar
            root: __root

    actions:
        - '@addTree':
            items:
                __datagrid:
                    blockType: datagrid
            tree:
                __root:
                    __datagrid: ~
";
    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/imports/datagrid/layout.yml";
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
        return new Twig_Source("", "@OroDataGrid/layouts/blank/imports/datagrid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid/layout.yml");
    }
}
