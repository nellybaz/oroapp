<?php

/* @OroFrontendLocalization/layouts/default/layout.yml */
class __TwigTemplate_a970084ea88b9d7eda0bdc1dce0fc2427d12d6c45189ee7f0c162c54b1f4c9b6 extends Twig_Template
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
        - '@setBlockTheme':
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                localization_switcher_trigger:
                    prepend: false
                    siblingId: header_row_customer
                    blockType: localization_switcher
                    options:
                        localizations: '=data[\"frontend_localization\"].getEnabledLocalizations()'
                        selected_localization: '=data[\"frontend_localization\"].getCurrentLocalization()'

            tree:
                header_row:
                    localization_switcher_trigger: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontendLocalization/layouts/default/layout.yml";
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
        return new Twig_Source("", "@OroFrontendLocalization/layouts/default/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.yml");
    }
}
