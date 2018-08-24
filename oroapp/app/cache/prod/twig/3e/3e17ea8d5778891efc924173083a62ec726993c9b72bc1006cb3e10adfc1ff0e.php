<?php

/* @OroWorkflow/layouts/default/config/assets.yml */
class __TwigTemplate_178deba595b1ba53708122bdc88878cb8b173c128e4bfa27d48845675fb9c72f extends Twig_Template
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
        - 'bundles/oroworkflow/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroWorkflow/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
