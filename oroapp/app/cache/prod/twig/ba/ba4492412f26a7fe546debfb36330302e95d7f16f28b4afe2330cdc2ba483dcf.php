<?php

/* @OroFrontend/layouts/default/oro_frontend_workflow_widget_transition_form/layout.yml */
class __TwigTemplate_bb0251df952a3aa093b7908a84c66ea154652bd5d432904ab071c14e488bac5c extends Twig_Template
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
        - '@add':
            id: transition_form_holder
            parentId: widget_content
            blockType: container
    imports:
        -
            id: oro_workflow_transition_form
            root: transition_form_holder
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_workflow_widget_transition_form/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_workflow_widget_transition_form/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_workflow_widget_transition_form/layout.yml");
    }
}
