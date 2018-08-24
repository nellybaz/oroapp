<?php

/* @OroFrontend/layouts/blank/config/assets.yml */
class __TwigTemplate_020ef4f461b376c5976e3d4dd20d2fc5479084b317a866bcdfc796a6bc70d5e8 extends Twig_Template
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

        - 'bundles/orofrontend/blank/scss/variables/bootstrap4-variables-config.scss' # Must be first from *.scss
        - 'bundles/orofrontend/blank/scss/variables/btn-group-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/bootstrap4-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/breadcrumbs-config.scss'
        - 'bundles/orofrontend/blank/scss/settings/global-settings.scss'
        - 'bundles/orofrontend/blank/scss/variables/notification-flash-container-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/table-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/fullscreen-popup-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/sorting-popup-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/ui/dialog-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/ui/datepicker-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/ui/extend/ui-multiselect-menu-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/popup-gallery-widget-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/scroll-top-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/pagination-widget-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/embedded-list/embedded-list-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/datagrid-manager-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/warning-list-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/tiny-container-config.scss'

        - 'bundles/orofrontend/blank/scss/components/ui/jquery-ui.scss'
        - 'bundles/orofrontend/blank/scss/components/ui/datepicker.scss'
        - 'bundles/orofrontend/blank/scss/components/embedded-list/embedded-list.scss'
        - 'bundles/orofrontend/blank/scss/components/datagrid-manager.scss'
        - 'bundles/orofrontend/blank/scss/components/datagrid-manager-search.scss'
        - 'bundles/orofrontend/blank/scss/components/datagrid-manager-table.scss'

        - 'bundles/orofrontend/blank/scss/styles.scss'

stylebook_styles:
    inputs:
        - 'bundles/bowerassets/prism/themes/prism-coy.css'
        - 'bundles/orofrontend/blank/scss/variables/style-book/style-book-sticky-elements-nav-config.scss'
        - 'bundles/orofrontend/blank/scss/variables/style-book/style-book-title-config.scss'
        - 'bundles/orofrontend/blank/scss/style-book.scss'
    filters: ['cssrewrite', 'cssmin']
    output: 'css/layout/blank/stylebook.css'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
