<?php

/* OroTaskBundle:Task:reminderTemplate.html.twig */
class __TwigTemplate_9334c5c1d515741e36ab23cdaa5b6dcd350a3b93d7ad0d71a29cb4f9273aad7d extends Twig_Template
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
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"task_template\">
<% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> is due on <%= expireAt %></span>
<% } else { %>
    <span><%= subject %> is due on <%= expireAt %></span>
<% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:reminderTemplate.html.twig";
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
        return new Twig_Source("", "OroTaskBundle:Task:reminderTemplate.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm-task-bundle/Resources/views/Task/reminderTemplate.html.twig");
    }
}
