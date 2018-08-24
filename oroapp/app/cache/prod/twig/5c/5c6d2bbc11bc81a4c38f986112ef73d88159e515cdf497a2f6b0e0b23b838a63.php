<?php

/* OroSalesBundle:Autocomplete/customer:selection.html.twig */
class __TwigTemplate_cbfa85115ef29288df2d8a6ea2816a3cb304b3baadd76be4fa3df6f3e67b9c74 extends Twig_Template
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
<%= _.escape(text) %>
<% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.sales.form.new_customer') %>)
    </span>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Autocomplete/customer:selection.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Autocomplete/customer:selection.html.twig", "");
    }
}
