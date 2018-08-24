<?php

/* OroEmailBundle:Js:default_templates.js.twig */
class __TwigTemplate_f59c056366c86c4865b1069974fc55a0b7e093e612c367a0cb5e73c6f0f93863 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Js:default_templates.js.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
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
", "OroEmailBundle:Js:default_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Js/default_templates.js.twig");
    }
}
