<?php

/* @OroWorkflow/layouts/default/imports/oro_workflow_transition_form/layout.yml */
class __TwigTemplate_dd123132794c9044a62c03b48c187b8eb41e3cc7d2bfd128d38822bb311d6c98 extends Twig_Template
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
                transition_form_wrapper:
                    blockType: container
                form_warning_message:
                    blockType: text
                    options:
                        text: '=data[\"translator\"].getTrans(data[\"transition\"].getMessage(),[],\"workflows\")'
                        visible: '=((data[\"transition\"].getMessage()!=\"\")&&(data[\"translator\"].getTrans(data[\"transition\"].getMessage(),[],\"workflows\")!=data[\"transition\"].getMessage()))'
                form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"transitionFormView\"]'
                        form_route_name: '=data[\"formRouteName\"]'
                        form_route_parameters:
                            workflowItemId: '=data[\"workflowItem\"].getId()'
                            transitionName: '=data[\"transition\"].getName()'
                            originalUrl: '=data[\"originalUrl\"]'
                form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"transitionFormView\"]'
                form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"transitionFormView\"]'
                form_actions:
                    blockType: container
                form_actions_submit:
                    blockType: button
                    options:
                        action: submit
                        text: oro.workflow.transition.form.submit.label
                        style: auto
            tree:
                transition_form_holder:
                    transition_form_wrapper:
                        form_warning_message: ~
                        form_start: ~
                        form_fields: ~
                        form_actions:
                            form_actions_submit: ~
                        form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/layouts/default/imports/oro_workflow_transition_form/layout.yml";
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
        return new Twig_Source("", "@OroWorkflow/layouts/default/imports/oro_workflow_transition_form/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/layouts/default/imports/oro_workflow_transition_form/layout.yml");
    }
}
