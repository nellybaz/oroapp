<?php

/* @OroFrontend/layouts/default/config/assets.yml */
class __TwigTemplate_2c83c3b3e09d99f192169a340b85c9d7c0b0e62117cf08c4f08d482eb26af143 extends Twig_Template
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
        - 'bundles/orofrontend/default/vendors/slick/slick.css'
        - 'bundles/orofrontend/default/scss/settings/global-settings.scss'
        - 'bundles/orofrontend/default/scss/variables/base-config.scss'
        - 'bundles/orofrontend/default/scss/variables/custom-icons-config.scss'
        - 'bundles/orofrontend/default/scss/variables/breadcrumbs-config.scss'
        - 'bundles/orofrontend/default/scss/variables/collapse-view-config.scss'
        - 'bundles/orofrontend/default/scss/variables/link-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-title-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-subtitle-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-main-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-container-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-content-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-header-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-footer-config.scss'
        - 'bundles/orofrontend/default/scss/variables/page-sidebar-config.scss'
        - 'bundles/orofrontend/default/scss/variables/copyright-config.scss'
        - 'bundles/orofrontend/default/scss/variables/section-title-config.scss'
        - 'bundles/orofrontend/default/scss/variables/notifications-config.scss'
        - 'bundles/orofrontend/default/scss/variables/primary-menu-config.scss'
        - 'bundles/orofrontend/default/scss/variables/notification-config.scss'
        - 'bundles/orofrontend/default/scss/variables/notification-flash-config.scss'
        - 'bundles/orofrontend/default/scss/variables/loader-mask-config.scss'
        - 'bundles/orofrontend/default/scss/variables/embedded-list/embedded-list-config.scss'
        - 'bundles/orofrontend/default/scss/variables/datagrid-manager-config.scss'
        - 'bundles/orofrontend/default/scss/variables/ui/dialog-config.scss'
        - 'bundles/orofrontend/default/scss/variables/badge-config.scss'
        - 'bundles/orofrontend/default/scss/variables/search-container-config.scss'

        - 'bundles/orofrontend/default/scss/components/custom-icons.scss'
        - 'bundles/orofrontend/default/scss/styles.scss'
    output: 'css/layout/default/styles.css'

stylebook_styles:
    inputs:
        - 'bundles/orofrontend/default/scss/settings/global-settings.scss'
        - 'bundles/orofrontend/default/scss/variables/page-main-config.scss'
        - 'bundles/orofrontend/default/scss/variables/style-book/style-book-sticky-elements-nav-config.scss'
        - 'bundles/orofrontend/default/scss/style-book.scss'
    output: 'css/layout/default/stylebook.css'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
