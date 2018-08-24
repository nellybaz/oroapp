<?php

/* @OroCustomTheme/layouts/custom/config/requirejs.yml */
class __TwigTemplate_f96107929296bbbe5764e2c06e2741bef5caf9baebcbdfe0109b49b3bd637fee extends Twig_Template
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
    map:
        '*':
            # Filters templates
            'orofilter/templates/filters-container.html': 'orocustomtheme/FilterBundle/templates/filters/filters-container.html'
            'orofilter/js/plugins/filters-toggle-plugin': 'orocustomtheme/FilterBundle/js/datagrid/plugins/frontend-filters-plugin'
        'orocustomtheme/FilterBundle/js/datagrid/plugins/frontend-filters-plugin':
            'orofilter/js/plugins/filters-toggle-plugin': 'orofilter/js/plugins/filters-toggle-plugin'

    paths:
        'orocustomtheme/FilterBundle/js/datagrid/plugins/frontend-filters-plugin': 'orocustomtheme/FilterBundle/js/datagrid/plugins/frontend-filters-plugin.js'
        'orocustomtheme/FilterBundle/js/datagrid/frontend-collection-filters-manager': 'orocustomtheme/FilterBundle/js/datagrid/frontend-collection-filters-manager.js'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/config/requirejs.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/config/requirejs.yml");
    }
}
