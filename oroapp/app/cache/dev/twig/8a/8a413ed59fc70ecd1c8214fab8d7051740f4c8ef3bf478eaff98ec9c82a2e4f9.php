<?php

/* OroFilterBundle:Js:embedded_templates.js.twig */
class __TwigTemplate_44c48eb69ca00313837b47992db15688cef6ace339b159e1581711c13bb88188 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroFilterBundle:Js:embedded_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"none-filter-template-embedded\">
</script>
<script type=\"text/template\" id=\"text-filter-template-embedded\">
    <input type=\"text\" name=\"value\" value=\"\"/>
</script>
<script type=\"text/template\" id=\"choice-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input type=\"text\" name=\"value\" value=\"<%- value %>\">
        <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"many-to-many-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"select-field-template-embedded\">
    <div class=\"dropdown\">
        <% if (choices.length > 1) { %>
            <a class=\"dropdown-toggle\"
               <% if (typeof selectedChoiceTooltip !== 'undefined') { %>
                   title=\"<%= selectedChoiceTooltip %>\"
               <% } %>
               data-toggle=\"dropdown\" href=\"#\">
               <%= selectedChoiceLabel %>
            </a>
        <% } else { %>
            <span><%= selectedChoiceLabel %></span>
        <% } %>
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
            <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                <a class=\"choice-value\"
                   <% if (option.tooltip) { %> title=\"<%= option.tooltip %>\"<% } %>
                   href=\"#\" data-value=\"<%= option.value %>\">
                   <%= option.label %>
                </a>
            </li>
            <% }); %>
        </ul>
        <select name=\"<%= name %>\" class=\"filter-select-oro name_input\" style=\"display:none\">
            <% _.each(choices, function (option) { %>
            <option value=\"<%= option.value %>\"<% if (option.value == selectedChoice) { %> selected=\"selected\"<% } %>><%- option.label %></option>
            <% }); %>
        </select>
    </div>
</script>

<script type=\"text/template\" id=\"date-filter-template-embedded\">
    <% if (obj.popoverContent) { %>
    <div class=\"field-condition-date-popover\">
        <i class=\"fa-info-circle\" data-content=\"<%= popoverContent %>\" data-placement=\"bottom\" data-toggle=\"popover\"></i>
    </div>
    <% } %>
    <span> <%= _.__('oro.filter.embedded.date.field_to_value') %> </span>
    <%= parts.join('') %>:
    <div />
    <div class=\"filter-start-date\">
        <input type=\"text\" class=\"<%= inputClass %>\"
               value=\"<%- value.value.start %>\" name=\"start\" placeholder=\"<%- _.__('from') %>\">
    </div>
    <span class=\"filter-separator\">-</span>
    <div class=\"filter-end-date\">
        <input type=\"text\" class=\"<%= inputClass %>\"
               value=\"<%- value.value.end %>\" name=\"end\" placeholder=\"<%- _.__('to') %>\">
    </div>
</script>

<script type=\"text/template\" id=\"select-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%= _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"multiselect-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%= _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select multiple>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (_.isArray(selected.value)) { %><% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                    <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"dictionary-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %></span><%= parts.join('') %>:
    <input type=\"hidden\" name=\"select-values-autocomplete\" class=\"select-values-autocomplete hide\" value=\"\" />
    <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%= selectedChoice %>\"/>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Js:embedded_templates.js.twig";
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
        return new Twig_Source("<script type=\"text/template\" id=\"none-filter-template-embedded\">
</script>
<script type=\"text/template\" id=\"text-filter-template-embedded\">
    <input type=\"text\" name=\"value\" value=\"\"/>
</script>
<script type=\"text/template\" id=\"choice-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input type=\"text\" name=\"value\" value=\"<%- value %>\">
        <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"many-to-many-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"select-field-template-embedded\">
    <div class=\"dropdown\">
        <% if (choices.length > 1) { %>
            <a class=\"dropdown-toggle\"
               <% if (typeof selectedChoiceTooltip !== 'undefined') { %>
                   title=\"<%= selectedChoiceTooltip %>\"
               <% } %>
               data-toggle=\"dropdown\" href=\"#\">
               <%= selectedChoiceLabel %>
            </a>
        <% } else { %>
            <span><%= selectedChoiceLabel %></span>
        <% } %>
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
            <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                <a class=\"choice-value\"
                   <% if (option.tooltip) { %> title=\"<%= option.tooltip %>\"<% } %>
                   href=\"#\" data-value=\"<%= option.value %>\">
                   <%= option.label %>
                </a>
            </li>
            <% }); %>
        </ul>
        <select name=\"<%= name %>\" class=\"filter-select-oro name_input\" style=\"display:none\">
            <% _.each(choices, function (option) { %>
            <option value=\"<%= option.value %>\"<% if (option.value == selectedChoice) { %> selected=\"selected\"<% } %>><%- option.label %></option>
            <% }); %>
        </select>
    </div>
</script>

<script type=\"text/template\" id=\"date-filter-template-embedded\">
    <% if (obj.popoverContent) { %>
    <div class=\"field-condition-date-popover\">
        <i class=\"fa-info-circle\" data-content=\"<%= popoverContent %>\" data-placement=\"bottom\" data-toggle=\"popover\"></i>
    </div>
    <% } %>
    <span> <%= _.__('oro.filter.embedded.date.field_to_value') %> </span>
    <%= parts.join('') %>:
    <div />
    <div class=\"filter-start-date\">
        <input type=\"text\" class=\"<%= inputClass %>\"
               value=\"<%- value.value.start %>\" name=\"start\" placeholder=\"<%- _.__('from') %>\">
    </div>
    <span class=\"filter-separator\">-</span>
    <div class=\"filter-end-date\">
        <input type=\"text\" class=\"<%= inputClass %>\"
               value=\"<%- value.value.end %>\" name=\"end\" placeholder=\"<%- _.__('to') %>\">
    </div>
</script>

<script type=\"text/template\" id=\"select-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%= _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"multiselect-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%= _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select multiple>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (_.isArray(selected.value)) { %><% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                    <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"dictionary-filter-template-embedded\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %></span><%= parts.join('') %>:
    <input type=\"hidden\" name=\"select-values-autocomplete\" class=\"select-values-autocomplete hide\" value=\"\" />
    <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%= selectedChoice %>\"/>
</script>
", "OroFilterBundle:Js:embedded_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FilterBundle/Resources/views/Js/embedded_templates.js.twig");
    }
}
