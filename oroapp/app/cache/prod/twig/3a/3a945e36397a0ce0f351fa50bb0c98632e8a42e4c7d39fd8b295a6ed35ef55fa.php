<?php

/* @OroUI/layouts/blank/config/assets.yml */
class __TwigTemplate_9185c81d51cdd5932a8ab78979a6fc0a94f0350b5770a62babb45f2a224951e5 extends Twig_Template
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
        - 'bundles/bowerassets/font-awesome/css/font-awesome.css'
        - 'bundles/bowerassets/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css'
        - 'bundles/oroui/blank/scss/settings/global-settings.scss'
        - 'bundles/oroui/blank/scss/variables/base-config.scss'
        - 'bundles/oroui/blank/scss/variables/mCustomScrollbar-config.scss'
        - 'bundles/oroui/blank/scss/variables/scrollbar-config.scss'
        - 'bundles/oroui/blank/scss/variables/animation-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-container-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-area-container-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-header-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-main-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-content-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-footer-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-footer-container-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-sidebar-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-title-wrapper-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-title-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-subtitle-config.scss'
        - 'bundles/oroui/blank/scss/variables/responsive-video-config.scss'
        - 'bundles/oroui/blank/scss/variables/title-config.scss'
        - 'bundles/oroui/blank/scss/variables/grid-config.scss'
        - 'bundles/oroui/blank/scss/variables/link-config.scss'
        - 'bundles/oroui/blank/scss/variables/notifications-config.scss'
        - 'bundles/oroui/blank/scss/variables/section-title-config.scss'
        - 'bundles/oroui/blank/scss/variables/copyright-config.scss'
        - 'bundles/oroui/blank/scss/variables/logo-config.scss'
        - 'bundles/oroui/blank/scss/variables/primary-menu-config.scss'
        - 'bundles/oroui/blank/scss/variables/loader-mask-config.scss'
        - 'bundles/oroui/blank/scss/reset.scss'
        - 'bundles/oroui/blank/vendors/font-awesome/font-awesome.scss'
        - 'bundles/oroui/blank/scss/styles.scss'
    filters: ['cssrewrite', 'cssmin']
    output: 'css/layout/blank/styles.css'

stylebook_styles:
    inputs:
        - 'bundles/oroui/blank/scss/settings/global-settings.scss'
        - 'bundles/oroui/blank/scss/variables/page-main-config.scss'
        - 'bundles/oroui/blank/scss/variables/page-container-config.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
