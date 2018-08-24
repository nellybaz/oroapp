<?php

/* @OroWorkflow/layouts/blank/config/requirejs.yml */
class __TwigTemplate_7dabe3f1b8fefce73d711b58be42873fb1126d83df358c47ae9d4792920f477d extends Twig_Template
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
        echo "config:
    paths:
        'oroworkflow/js/transition-handler':                        'bundles/oroworkflow/js/transition-handler.js'
        'oroworkflow/js/transition-event-handlers':                 'bundles/oroworkflow/js/transition-event-handlers.js'
        'oroworkflow/js/transition-executor':                       'bundles/oroworkflow/js/transition-executor.js'

        'oroworkflow/js/app/components/button-component': 'bundles/oroworkflow/js/app/components/button-component.js'
        'oroworkflow/transition-dialog-widget': 'bundles/oroworkflow/js/app/widget/transition-dialog-widget.js'
";
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroWorkflow/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
