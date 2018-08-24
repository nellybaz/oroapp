<?php

/* @OroCommerceMenu/layouts/blank/config/assets.yml */
class __TwigTemplate_80b761b7629497a2294b823441d2d1f5aff9423d3664aaef3958d43466b6e5c0 extends Twig_Template
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
        - 'bundles/orocommercemenu/blank/scss/variables/main-menu/main-menu-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/main-menu/main-menu-column-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/main-menu/main-menu-columns-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/top-bar-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/information-nav-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/quick-access-container-config.scss'
        - 'bundles/orocommercemenu/blank/scss/variables/featured-menu-config.scss'

        - 'bundles/orocommercemenu/blank/scss/components/header-row.scss'
        - 'bundles/orocommercemenu/blank/scss/components/top-bar.scss'
        - 'bundles/orocommercemenu/blank/scss/components/main-menu/main-menu.scss'
        - 'bundles/orocommercemenu/blank/scss/components/main-menu/main-menu-column.scss'
        - 'bundles/orocommercemenu/blank/scss/components/main-menu/main-menu-columns.scss'
        - 'bundles/orocommercemenu/blank/scss/components/main-menu/main-menu-outer.scss'

        - 'bundles/orocommercemenu/blank/scss/styles.scss'

";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
