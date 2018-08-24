<?php

/* @OroFilter/layouts/blank/config/assets.yml */
class __TwigTemplate_8c184309396e05fca27d919b4292becf81e8f4cc8a37d725d99fbb42785948eb extends Twig_Template
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
        - 'bundles/orofilter/blank/scss/variables/filters-config.scss'
        - 'bundles/orofilter/blank/scss/variables/filters-dropdown-mode-config.scss'
        - 'bundles/orofilter/blank/scss/variables/filters-toggle-mode-config.scss'

        - 'bundles/orofilter/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroFilter/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroFilter/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FilterBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
