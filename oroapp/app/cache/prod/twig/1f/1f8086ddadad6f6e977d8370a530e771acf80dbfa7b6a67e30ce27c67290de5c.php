<?php

/* OroActivityListBundle:ActivityList/js:workflowTemplate.html.twig */
class __TwigTemplate_8159d691a2884466c1c55e16df1c187615bb0bede7fabfbe6ffb10904c9cbdfd extends Twig_Template
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
        echo "<% if (workflowsData && workflowsData.length > 0) { %>
    <% _.each(workflowsData, function(workflow) { %>
        <% if (workflow.transitionsData.length > 0) { %>
            <li role=\"separator\" class=\"divider\">&nbsp;</li>
            <% _.each(workflow.transitionsData, function(transition) { %>
                <li>
                    <a href=\"<%- transition.transitionUrl %>\" class=\"transition-item\"
                       id=\"transition-<%- workflow.name %>-<%- transition.name %>\"
                       data-transition-url=\"<%- transition.transitionUrl %>\"
                       data-transition-label=\"<%- transition.label %>\"
                       data-message=\"<%- transition.message %>\"
                       data-dialog-url=\"<%- transition.dialogUrl %>\"
                        <% if (transition.frontendOptions && transition.frontendOptions.dialog) { %>
                            data-dialog-options=\"<%- JSON.stringify(transition.frontendOptions.dialog) %>\"
                        <% } %>
                    >
                        <i class=\"<%- transition.frontendOptions && transition.frontendOptions.icon
                                ? transition.frontendOptions.icon
                                : 'icon-empty'
                            %> hide-text\"><%- transition.label %></i>
                        <%- transition.label %>
                    </a>
                </li>
            <% }) %>
        <% } %>
    <% }) %>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:ActivityList/js:workflowTemplate.html.twig";
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
        return new Twig_Source("", "OroActivityListBundle:ActivityList/js:workflowTemplate.html.twig", "");
    }
}
