<?php

/* @OroFrontendLocalization/layouts/default/page/localization_switcher.yml */
class __TwigTemplate_4fb53c1ea71715ebf83376d0091675d13f4f8923dacf4fa11fce60d5e919dcf1 extends Twig_Template
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
        echo "layout:
    actions:
        - '@add':
            id: localization_switcher
            parentId: top_nav_menu_container
            siblingId: top_nav
            blockType: localization_switcher
            options:
                localizations: '=data[\"frontend_localization\"].getEnabledLocalizations()'
                selected_localization: '=data[\"frontend_localization\"].getCurrentLocalization()'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontendLocalization/layouts/default/page/localization_switcher.yml";
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
        return new Twig_Source("", "@OroFrontendLocalization/layouts/default/page/localization_switcher.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/page/localization_switcher.yml");
    }
}
