<?php

/* @OroCatalog/layouts/blank/config/assets.yml */
class __TwigTemplate_4571d145f0033eb9bcd836a61a523784ff1e41d9a04472a5eb4d6a92fb68210b extends Twig_Template
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
        - 'bundles/orocatalog/blank/scss/variables/category-picture-config.scss'
        - 'bundles/orocatalog/blank/scss/variables/featured-categories-config.scss'
        - 'bundles/orocatalog/blank/scss/variables/featured-category-config.scss'
        - 'bundles/orocatalog/blank/scss/variables/promo-slider-config.scss'

        - 'bundles/orocatalog/blank/scss/components/promo-slider/promo-slider.scss'

        - 'bundles/orocatalog/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
