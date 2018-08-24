<?php

/* @OroForm/layouts/blank/config/assets.yml */
class __TwigTemplate_3fbf4f4d9d20a99c6296fdba7c6a7237cc9742a58dedbb63d198253fe81bf6d3 extends Twig_Template
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
        - 'bundles/oroform/blank/scss/settings/global-settings.scss'
        - 'bundles/oroform/blank/scss/variables/button-config.scss'
        - 'bundles/oroform/blank/scss/variables/custom-checkbox-config.scss'
        - 'bundles/oroform/blank/scss/variables/input-config.scss'
        - 'bundles/oroform/blank/scss/variables/select-config.scss'
        - 'bundles/oroform/blank/scss/variables/select2-container-config.scss'
        - 'bundles/oroform/blank/scss/variables/textarea-config.scss'
        - 'bundles/oroform/blank/scss/variables/label-config.scss'
        - 'bundles/oroform/blank/scss/variables/form-row-config.scss'

        - 'bundles/oroform/blank/scss/styles.scss'
        - 'bundles/oroform/blank/scss/components/select2-container.scss'
        - 'bundles/oroform/blank/scss/components/select2-container-multi.scss'
    filters: ['cssrewrite', 'cssmin']
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroForm/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
