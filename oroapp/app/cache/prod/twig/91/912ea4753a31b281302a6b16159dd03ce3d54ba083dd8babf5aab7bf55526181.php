<?php

/* OroDashboardBundle:Js:items.html.twig */
class __TwigTemplate_2e4121d71779d4012f3999a42265b7e3d58e5b922aec35a24dd6efc44fdfdb2a extends Twig_Template
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
        return array (  67 => 35,  60 => 31,  52 => 26,  46 => 23,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Js:items.html.twig", "");
    }
}
