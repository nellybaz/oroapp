<?php

/* @OroUser/layouts/blank/config/requirejs.yml */
class __TwigTemplate_232d8e31a100214aeb6a51c15b205f08e1877379af8d4aee999638059c325a02 extends Twig_Template
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
        echo "config:
    paths:
        'orouser/js/views/role-view': 'bundles/orouser/js/views/role-view.js'
        'orouser/js/datagrid/roles-datagrid-builder': 'orouser/js/datagrid/roles-datagrid-builder.js'
        'orouser/js/components/role/entity-category-tabs-component': 'orouser/js/components/role/entity-category-tabs-component.js'
        'orouser/js/components/role/capability-set-component': 'orouser/js/components/role/capability-set-component.js'
        'orouser/js/validator/password-complexity': 'orouser/js/validator/password-complexity.js'
        'orouser/js/tools/unicode-matcher': 'orouser/js/tools/unicode-matcher.js'
        'oro/datagrid/cell/action-permissions-cell': 'orouser/js/datagrid/cell/action-permissions-cell.js'
        'orouser/js/app/modules/validator-constraints-module': 'orouser/js/app/modules/validator-constraints-module.js'
        'orouser/js/components/password-generate': 'bundles/orouser/js/components/password-generate.js'
    appmodules:
        - orouser/js/app/modules/validator-constraints-module
";
    }

    public function getTemplateName()
    {
        return "@OroUser/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroUser/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
