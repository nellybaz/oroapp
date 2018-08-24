<?php

/* @OroCommerceMenu/layouts/default/config/assets.yml */
class __TwigTemplate_d0609d50f7c32c2c50007e572220860651a8d6e37f1754c6f21cd6ed91fd547f extends Twig_Template
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
        - 'bundles/orocommercemenu/default/scss/variables/main-menu-config.scss'
        - 'bundles/orocommercemenu/default/scss/variables/top-bar-config.scss'
        - 'bundles/orocommercemenu/default/scss/variables/information-nav-config.scss'
        - 'bundles/orocommercemenu/default/scss/variables/header-row-config.scss'

        - 'bundles/orocommercemenu/default/scss/components/header-row.scss'
        - 'bundles/orocommercemenu/default/scss/components/quick-access.scss'
        - 'bundles/orocommercemenu/default/scss/components/top-bar.scss'
        - 'bundles/orocommercemenu/default/scss/components/main-menu/main-menu.scss'
        - 'bundles/orocommercemenu/default/scss/components/main-menu/main-menu-outer.scss'

        - 'bundles/orocommercemenu/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
