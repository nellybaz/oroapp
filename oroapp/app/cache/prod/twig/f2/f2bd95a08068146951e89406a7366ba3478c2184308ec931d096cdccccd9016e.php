<?php

/* OroTaskBundle:Task:reminderTemplate.html.twig */
class __TwigTemplate_06190de2450d765a263cbafb688b76bdc454057ff4f68326e8db68722c93979b extends Twig_Template
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
        return new Twig_Source("", "OroTaskBundle:Task:reminderTemplate.html.twig", "");
    }
}
