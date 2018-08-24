<?php

/* OroEmailBundle:Js:default_templates.js.twig */
class __TwigTemplate_20be414c4b94fb2db2e6af1b5b0ee8529c5b1701301dcf390558bc94f5c09f8b extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %><% } %><span class=\"filter-item-hint\"></span>
            <select multiple>
                <% _.each(options, function (item, key) { %>
                    <optgroup label=\"<%- key %>\">
                        <% _.each(item['choices']['folder']['choices'], function (option) { %>
                            <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                            <% if (_.isArray(selected.value)) { %>
                            <% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                            <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                            <%- option.label %>
                            </option>
                        <% }); %>
                    </optgroup>
                <% }); %>
            </select>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Js:default_templates.js.twig";
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
        return new Twig_Source("", "OroEmailBundle:Js:default_templates.js.twig", "");
    }
}
