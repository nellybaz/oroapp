<?php

/* @OroFrontend/layouts/default/oro_frontend_workflow_start_transition_form/layout.yml */
class __TwigTemplate_becfb9fb2e44e9fa4c516daa0adeed71de3082ea4f9be89d28e390bd4ce0f0ce extends Twig_Template
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
        - '@setOption':
            id: title
            optionName: value
            optionValue: '=data[\"transition\"].getButtonLabel()~\" / \"~data[\"translator\"].getTrans(context[\"workflowName\"],[],\"workflows\")'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: '=data[\"translator\"].getTrans(context[\"workflowName\"],[],\"workflows\")~\" / \"~data[\"transition\"].getButtonLabel()'
        - '@add':
            id: transition_form_holder
            parentId: page_content
            blockType: container
        - '@add':
            id: form_actions_back
            parentId: form_actions
            blockType: link
            options:
                path: '=data[\"originalUrl\"]'
                text: oro.workflow.transition.form.cancel.label
                attr:
                    class: '=\" button\"'
        - '@move':
            id: form_actions_submit
            siblingId: form_actions_back
            prepend: false
    imports:
        -
            id: oro_workflow_start_transition_form
            root: transition_form_holder
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_workflow_start_transition_form/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_workflow_start_transition_form/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_workflow_start_transition_form/layout.yml");
    }
}
