<?php

/* OroDashboardBundle:Js:items.html.twig */
class __TwigTemplate_68c5c2970a477c9406c178985e228bed13fbccd2dee67686192fa2d0ffcf0f55 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Js:items.html.twig"));

        // line 1
        echo "<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%= item.get('id') %>\"><%= item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr data-cid=\"<%= cid %>\">
        <td><%= label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%= namePrefix %>[id]\" value=\"<%= id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%= namePrefix %>[order]\" value=\"<%= order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%= namePrefix %>[show]\" <%= show ? 'checked' : '' %>>
            <% if (_.isMobile()) { %>
            <span class=\"btn delete-button\" data-collection-action=\"delete\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.move_column_up.label"), "html", null, true);
        echo "\">
                <i class=\"fa-trash-o hide-text\"></i>
            </span>
            <span class=\"btn move-up<% if (isFirst) { %> disabled<% } %>\" data-collection-action=\"moveUp\" title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.move_column_up.label"), "html", null, true);
        echo "\">
                <i class=\"fa-chevron-up\"></i>
            </span>
            <span class=\"btn move-down<% if (isLast) { %> disabled<% } %>\" data-collection-action=\"moveDown\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.move_column_down.label"), "html", null, true);
        echo "\">
                <i class=\"fa-chevron-down\"></i>
            </span>
            <% } else { %>
            <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
               title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.delete.label"), "html", null, true);
        echo "\"
               data-collection-action=\"delete\">
                <i class=\"fa-trash-o hide-text\"></i>
            </a>
            <span title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.move_column.label"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v handle\"></i>
            </span>
            <% } %>
        </td>
    </tr>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  63 => 31,  55 => 26,  49 => 23,  43 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%= item.get('id') %>\"><%= item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr data-cid=\"<%= cid %>\">
        <td><%= label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%= namePrefix %>[id]\" value=\"<%= id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%= namePrefix %>[order]\" value=\"<%= order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%= namePrefix %>[show]\" <%= show ? 'checked' : '' %>>
            <% if (_.isMobile()) { %>
            <span class=\"btn delete-button\" data-collection-action=\"delete\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_up.label'|trans }}\">
                <i class=\"fa-trash-o hide-text\"></i>
            </span>
            <span class=\"btn move-up<% if (isFirst) { %> disabled<% } %>\" data-collection-action=\"moveUp\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_up.label'|trans }}\">
                <i class=\"fa-chevron-up\"></i>
            </span>
            <span class=\"btn move-down<% if (isLast) { %> disabled<% } %>\" data-collection-action=\"moveDown\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_down.label'|trans }}\">
                <i class=\"fa-chevron-down\"></i>
            </span>
            <% } else { %>
            <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
               title=\"{{ 'oro.dashboard.datagrid.actions.delete.label'|trans }}\"
               data-collection-action=\"delete\">
                <i class=\"fa-trash-o hide-text\"></i>
            </a>
            <span title=\"{{ 'oro.dashboard.datagrid.actions.move_column.label'|trans }}\">
                <i class=\"fa-arrows-v handle\"></i>
            </span>
            <% } %>
        </td>
    </tr>
</script>
", "OroDashboardBundle:Js:items.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Js/items.html.twig");
    }
}
