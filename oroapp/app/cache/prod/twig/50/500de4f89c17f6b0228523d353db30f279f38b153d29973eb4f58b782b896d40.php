<?php

/* @OroCustomTheme/layouts/custom/config/assets.yml */
class __TwigTemplate_c93bb0451bb9949fb5667aae69d0acc6fb8361b865f3bd6587b07206675341f5 extends Twig_Template
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
        - 'bundles/orocustomtheme/FrontendBundle/scss/settings/main/global-settings.scss'

        - 'bundles/orocatalog/default/scss/styles.scss'

        - 'bundles/orocommercemenu/blank/scss/styles.scss': 'bundles/orocommercemenu/blank/scss/styles_custom.scss'

        - 'bundles/orocustomtheme/CheckoutBundle/scss/styles.scss'

        - 'bundles/orocustomtheme/ShoppingListBundle/scss/styles.scss'

        - 'bundles/orocustomtheme/CommerceMenuBundle/scss/variables/main-menu-column-config.scss'
        - 'bundles/orocustomtheme/CommerceMenuBundle/scss/variables/quick-access-container-config.scss'
        - 'bundles/orocustomtheme/CommerceMenuBundle/scss/styles.scss'

        - 'bundles/orocustomtheme/CustomerBundle/scss/variables/primary-collapse-container-config.scss'
        - 'bundles/orocustomtheme/CustomerBundle/scss/styles.scss'

        - 'bundles/orocustomtheme/FrontendBundle/scss/variables/page-main-config.scss'
        - 'bundles/orocustomtheme/FrontendBundle/scss/variables/breadcrumbs-config.scss'
        - 'bundles/orocustomtheme/FrontendBundle/scss/variables/search-container-config.scss'
        - 'bundles/orocustomtheme/FrontendBundle/scss/styles.scss'

        - 'bundles/orocustomtheme/FilterBundle/scss/variables/filters-config.scss'
        - 'bundles/orocustomtheme/FilterBundle/scss/variables/filters-collapse-mode-config.scss'
        - 'bundles/orocustomtheme/FilterBundle/scss/variables/filters-box-collapse-config.scss'
        - 'bundles/orocustomtheme/FilterBundle/scss/styles.scss'

    output: 'css/layout/custom/styles.css'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/config/assets.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/config/assets.yml");
    }
}
