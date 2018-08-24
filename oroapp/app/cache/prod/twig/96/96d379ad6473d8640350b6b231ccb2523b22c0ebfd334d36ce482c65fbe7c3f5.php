<?php

/* @OroFilter/layouts/blank/config/requirejs.yml */
class __TwigTemplate_2ac72ee982bcb51555419efe331c8a2d1213d00019d4ef075186bfc2e2102927 extends Twig_Template
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
            'orofilter/templates/filters-container.html': 'orofilter/blank/templates/filters/filters-container.html'
            'orofilter/templates/filter/filter-hint.html': 'orofilter/blank/templates/filters/filter-hint.html'
            'orofilter/templates/filter/filter-wrapper.html': 'orofilter/blank/templates/filters/filter-wrapper.html'
            'orofilter/templates/filter/choice-filter.html': 'orofilter/blank/templates/filters/choice-filter.html'
            'orofilter/templates/filter/number-range-filter.html': 'orofilter/blank/templates/filters/number-range-filter.html'
            'orofilter/templates/filter/many-to-many-filter.html': 'orofilter/blank/templates/filters/many-to-many-filter.html'
            'orofilter/templates/filter/dictionary-filter.html': 'orofilter/blank/templates/filters/dictionary-filter.html'
            'orofilter/templates/filter/select-filter.html': 'orofilter/blank/templates/filters/select-filter.html'
            'orofilter/templates/filter/embedded/simple-choice-filter.html': 'orofilter/blank/templates/filters/embedded/simple-choice-filter.html'
            'orofilter/templates/filter/choice-tree.html': 'orofilter/blank/templates/filters/choice-tree.html'
            'orofilter/templates/filter/date-filter.html': 'orofilter/blank/templates/filters/date-filter.html'
            'orofilter/templates/filter/date-filter-dropdown.html': 'orofilter/blank/templates/filters/date-filter-dropdown.html'
            'orofilter/templates/filter/date-picker.html': 'orofilter/blank/templates/filters/date-picker.html'
            'orofilter/templates/filter/multiselect-filter.html': 'orofilter/blank/templates/filters/multiselect-filter.html'
            'orofilter/templates/filter/none-filter.html': 'orofilter/blank/templates/filters/none-filter.html'
            'orofilter/templates/filter/select-field.html': 'orofilter/blank/templates/filters/select-field.html'
            'orofilter/templates/filter/text-filter.html': 'orofilter/blank/templates/filters/text-filter.html'
            # Filters templates END

    paths:
        'oro/filter/abstract-filter': 'bundles/orofilter/js/filter/abstract-filter.js'
        'oro/filter/choice-filter': 'bundles/orofilter/js/filter/choice-filter.js'
        'oro/filter/choice-tree-filter': 'bundles/orofilter/js/filter/choice-tree-filter.js'
        'oro/filter/date-filter': 'bundles/orofilter/js/filter/date-filter.js'
        'oro/filter/datetime-filter': 'bundles/orofilter/js/filter/datetime-filter.js'
        'oro/filter/empty-filter': 'bundles/orofilter/js/filter/empty-filter.js'
        'oro/filter/multiselect-filter': 'bundles/orofilter/js/filter/multiselect-filter.js'
        'oro/filter/none-filter': 'bundles/orofilter/js/filter/none-filter.js'
        'oro/filter/number-filter': 'bundles/orofilter/js/filter/number-filter.js'
        'oro/filter/number-range-filter': 'bundles/orofilter/js/filter/number-range-filter.js'
        'oro/filter/select-filter': 'bundles/orofilter/js/filter/select-filter.js'
        'oro/filter/select-row-filter': 'bundles/orofilter/js/filter/select-row-filter.js'
        'oro/filter/text-filter': 'bundles/orofilter/js/filter/text-filter.js'
        'oro/filter/many-to-many-filter': 'bundles/orofilter/js/filter/many-to-many-filter.js'
        'oro/filter/dictionary-filter': 'bundles/orofilter/js/filter/dictionary-filter.js'
        'orofilter/js/formatter/abstract-formatter': 'bundles/orofilter/js/formatter/abstract-formatter.js'
        'orofilter/js/formatter/number-formatter': 'bundles/orofilter/js/formatter/number-formatter.js'
        'orofilter/js/filters-manager': 'bundles/orofilter/js/filters-manager.js'
        'orofilter/js/collection-filters-manager': 'bundles/orofilter/js/collection-filters-manager.js'
        'orofilter/js/datafilter-builder': 'bundles/orofilter/js/datafilter-builder.js'
        'orofilter/js/datafilter-wrapper': 'bundles/orofilter/js/datafilter-wrapper.js'
        'orofilter/js/multiselect-decorator': 'bundles/orofilter/js/multiselect-decorator.js'
        'orofilter/js/filter-hint': 'bundles/orofilter/js/filter-hint.js'
";
    }

    public function getTemplateName()
    {
        return "@OroFilter/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroFilter/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FilterBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
