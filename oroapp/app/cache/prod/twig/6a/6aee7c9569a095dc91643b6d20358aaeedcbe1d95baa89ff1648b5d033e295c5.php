<?php

/* @OroFilter/layouts/default/config/requirejs.yml */
class __TwigTemplate_ec020c6ed8d03327c816c16dc1f14f2afc719dea51ba8587a6bed7975953fa15 extends Twig_Template
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
            'orofilter/templates/filters-container.html': 'orofilter/default/templates/filters/filters-container.html'
            'orofilter/templates/filter/filter-hint.html': 'orofilter/default/templates/filters/filter-hint.html'
            # Filters templates END
";
    }

    public function getTemplateName()
    {
        return "@OroFilter/layouts/default/config/requirejs.yml";
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
        return new Twig_Source("", "@OroFilter/layouts/default/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FilterBundle/Resources/views/layouts/default/config/requirejs.yml");
    }
}
