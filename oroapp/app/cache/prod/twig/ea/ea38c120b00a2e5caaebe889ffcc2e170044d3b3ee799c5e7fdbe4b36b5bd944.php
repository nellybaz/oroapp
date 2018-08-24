<?php

/* @OroWorkflow/layouts/blank/config/assets.yml */
class __TwigTemplate_e332d291a7f39484d89b6b2d0e10514b7f6a5cdb4e40ae377af96821c3fdef0e extends Twig_Template
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
        - 'bundles/oroworkflow/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroWorkflow/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
