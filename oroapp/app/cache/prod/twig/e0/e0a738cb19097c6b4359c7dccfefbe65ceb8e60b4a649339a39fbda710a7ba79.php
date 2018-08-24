<?php

/* @OroRFP/layouts/default/config/assets.yml */
class __TwigTemplate_1c3335e142e17146c507b72bfd0b11ee98b3ee769dc8b8a7d6a0e174fa2733cf extends Twig_Template
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
        - 'bundles/ororfp/default/scss/variables/entity-select-btn-config.scss'
        - 'bundles/ororfp/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
