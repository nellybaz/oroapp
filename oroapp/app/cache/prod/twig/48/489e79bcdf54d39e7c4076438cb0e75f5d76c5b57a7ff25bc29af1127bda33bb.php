<?php

/* OroCaseBundle:Comment/js:view.html.twig */
class __TwigTemplate_66747c1b2a0720871f24c392332481e84c6efd8f7c34a9ed6f7eb2f1110cb8f2 extends Twig_Template
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
                <% if (createdBy) { %>
                <span class=\"visual\">
                        <img src=\"<% if (createdBy.avatar) { %><%- createdBy.avatar %><% } else { %>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" />
                        <% if (createdBy.url) { %>
                            <a class=\"user\" href=\"<%= createdBy.url %>\"><%- createdBy.fullName %></a>
                        <% } else { %>
                            <span class=\"user\"><%- createdBy %></span>
                        <% } %>
                    </span>
                <% } %>
                <span class=\"details\">
                    <i class=\"date\"><%= createdAt %></i>
                </span>
                <% if (!public) { %>
                <span class=\"label\"><%= _.__(\"oro.case.private\") %></span>
                <% } %>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%= briefMessage %></div>
            </div>
            <div class=\"actions\">
                <button class=\"btn item-edit-button<% if (!permissions.edit) { %> disabled<% } %>\" <% if (!permissions.edit) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.action.edit"), "html_attr");
        echo "\"><i class=\"fa-pencil-square-o hide-text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.action.edit"), "html");
        echo "</i></button>
                <button class=\"btn item-remove-button<% if (!permissions.delete) { %> disabled<% } %>\" <% if (!permissions.delete) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.action.delete"), "html_attr");
        echo "\"><i class=\"fa-trash-o hide-text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.action.delete"), "html");
        echo "</i></button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%= id %>\">
            <div class=\"message\">
                <%= message %>
                <% if (updatedBy) { %>
                <div class=\"details\">
                    <div>
                        <%= _.template(
                        ";
        // line 38
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.message.updated_by"));
        echo ",
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                        )({
                        user: updatedBy.url
                        ? '<a class=\"user\" href=\"' + updatedBy.url + '\">' + _.escape(updatedBy.fullName) + '</a>'
                        : (updatedBy ? '<i class=\"user\">' + _.escape(updatedBy) + '</i>' : ''),
                        date: '<i class=\"date\">' + updatedAt + '</i>'
                        }) %>
                    </div>
                </div>
                <% } %>
            </div>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Comment/js:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 38,  58 => 28,  52 => 27,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Comment/js:view.html.twig", "");
    }
}
