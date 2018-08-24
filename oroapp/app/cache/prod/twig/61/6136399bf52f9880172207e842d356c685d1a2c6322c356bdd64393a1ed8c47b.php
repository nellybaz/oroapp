<?php

/* @OroForm/layouts/default/config/assets.yml */
class __TwigTemplate_e22ef5bff977c3b6b3575744447b70d52297c036f0511af35a02a5dcf43e7264 extends Twig_Template
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
        - 'bundles/oroform/default/scss/settings/global-settings.scss'
        - 'bundles/oroform/default/scss/variables/button-config.scss'
        - 'bundles/oroform/default/scss/variables/catalog-switcher-config.scss'
        - 'bundles/oroform/default/scss/variables/custom-checkbox-config.scss'
        - 'bundles/oroform/default/scss/variables/custom-radio-config.scss'
        - 'bundles/oroform/default/scss/variables/input-config.scss'
        - 'bundles/oroform/default/scss/variables/select-config.scss'
        - 'bundles/oroform/default/scss/variables/oro-toolbar-config.scss'
        - 'bundles/oroform/default/scss/variables/textarea-config.scss'
        - 'bundles/oroform/default/scss/variables/label-config.scss'
        - 'bundles/oroform/default/scss/variables/select2-container-config.scss'

        - 'bundles/oroform/default/scss/components/button.scss'
        - 'bundles/oroform/default/scss/components/datepicker.scss'
        - 'bundles/oroform/default/scss/components/oro-toolbar.scss'
        - 'bundles/oroform/default/scss/components/utilities.scss'
        - 'bundles/oroform/default/scss/components/required-label.scss'
        - 'bundles/oroform/default/scss/components/validation.scss'

        - 'bundles/oroform/default/scss/styles.scss'

stylebook_styles:
    inputs:
        - 'bundles/oroform/default/scss/settings/global-settings.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroForm/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
