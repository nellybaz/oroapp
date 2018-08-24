<?php

/* OroNoteBundle:Note/js:view.html.twig */
class __TwigTemplate_8ad43c6f45a9405b326c5cdcad652f6fcd4773ff8e8562443bf0e7956e7196ba extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html_attr");
        echo "\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading collapse<% if (!collapsed) { %> in<% } %>\">
            <div class=\"title-item\">
                <a href=\"#accordion-item<%= id %>\" class=\"no-hash accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
                <span class=\"visual\">
                    <img src=\"<% if (createdBy_avatar) { %><%- createdBy_avatar %><% } else { %>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" />
                    <% if (createdBy_url) { %>
                    <a class=\"user\" href=\"<%= createdBy_url %>\"><%- createdBy %></a>
                    <% } else if (createdBy) { %>
                    <span class=\"user\"><%- createdBy %></span>
                    <% } %>
                </span>
                <span class=\"details\">
                    <i class=\"date\"><%= createdAt %></i>
                </span>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%= brief_message %></div>
            </div>
            <div class=\"actions\">
                <button class=\"btn item-edit-button<% if (!editable) { %> disabled<% } %>\" <% if (!editable) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.edit"), "html_attr");
        echo "\"><i class=\"fa-pencil-square-o hide-text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.edit"), "html");
        echo "</i></button>
                <button class=\"btn item-remove-button<% if (!removable) { %> disabled<% } %>\" <% if (!removable) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.remove"), "html_attr");
        echo "\"><i class=\"fa-trash-o hide-text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.remove"), "html");
        echo "</i></button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%= id %>\">
            <div class=\"message\">
                <%= message %>
            </div>
            <% if (hasUpdate) { %>
            <div class=\"details\">
                <div>
                    <%= _.template(
                        ";
        // line 34
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.widget_updated_by"));
        echo ",
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                    )({
                        user: updatedBy_url
                            ? '<a class=\"user\" href=\"' + updatedBy_url + '\">' +  _.escape(updatedBy) + '</a>'
                            : '<i class=\"user\">' +  _.escape(updatedBy) + '</i>',
                        date: '<i class=\"date\">' + updatedAt + '</i>'
                    }) %>
                </div>
            </div>
            <% } %>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/js:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  53 => 23,  47 => 22,  29 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/js:view.html.twig", "");
    }
}
