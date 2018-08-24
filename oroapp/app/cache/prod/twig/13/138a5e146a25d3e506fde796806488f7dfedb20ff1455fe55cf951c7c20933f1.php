<?php

/* OroSalesBundle:Autocomplete/customer:result.html.twig */
class __TwigTemplate_f381068f59c790cc4c76d84623e601c387b699c09b047e2937db1be2318654ac extends Twig_Template
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
        echo "<% if (!_.isEmpty(obj.icon)) { %>
    <% if (icon.type === 'file-path') { %>
        <img src=\"<%= icon.data.path %>\" class=\"separated-img\">
    <% } else if (icon.type === 'icon') { %>
        <i class=\"<%= icon.data.class %> hide-text separated-img\"></i>
    <% } %>
<% } %>

<%= highlight(_.escape(text)) %>
<% if (typeof(label) !== \"undefined\") { %>
<span class=\"type\">(<%= _.escape(label) %>)</span>
<% } %>

<% if (typeof(matchValue) !== \"undefined\") { %>
    <div class=\"match-value\"><%= highlight(_.escape(matchValue)) %></div>
<% } %>

<% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.sales.form.add_new_customer', {'account': context.account}) %>)
    </span>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Autocomplete/customer:result.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Autocomplete/customer:result.html.twig", "");
    }
}
