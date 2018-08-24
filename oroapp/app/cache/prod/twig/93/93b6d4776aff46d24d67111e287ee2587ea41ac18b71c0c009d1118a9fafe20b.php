<?php

/* OroTaskBundle:Task/js:activityItemTemplate.html.twig */
class __TwigTemplate_bf8cc33016bbd44ad5a31d9f4f4d7beea3211a426246fba59737040ff221446d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroTaskBundle:Task/js:activityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityDetails' => array($this, 'block_activityDetails'),
            'activityShortMessage' => array($this, 'block_activityShortMessage'),
            'activityActions' => array($this, 'block_activityActions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroTaskBundle:Task/js:activityItemTemplate.html.twig", 2);
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\TaskBundle\\Entity\\Task";
        // line 5
        $context["entityName"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "label"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
        echo "
    <% var template = (verb == 'create')
        ? ";
        // line 10
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.activity_item.created_by"));
        echo "
        : ";
        // line 11
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.activity_item.changed_by"));
        echo ";
    %>
    <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
        date: '<i class=\"date\">' + createdAt + '</i>',
        editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
        editor_date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
    }

    // line 21
    public function block_activityShortMessage($context, array $blocks = array())
    {
        // line 22
        echo "    <% if (!_.isUndefined(data.statusId) && data.statusId) { %>
        <div class=\"pull-right\">
            <% if (data.statusId === 'closed') { %>
                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>
                    <%- data.statusName %></div>
            <% } else if (data.statusId === 'in_progress') { %>
                <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-enabled fa-circle\"></i>
                    <%- data.statusName %></div>
            <% } else { %>
                <div class=\"badge badge-disabled status-unknown\"><i class=\"icon-status-disabled fa-circle\"></i>
                    <%- data.statusName %></div>
            <% } %>
        </div>
    <% } %>
    ";
        // line 36
        $this->displayParentBlock("activityShortMessage", $context, $blocks);
        echo "
";
    }

    // line 39
    public function block_activityActions($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        ";
        // line 42
        echo "        <% if (editable) { %>
            ";
        // line 43
        echo $context["AC"]->getactivity_context_link();
        echo "
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "    ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 47
        echo "
    ";
        // line 48
        ob_start();
        // line 49
        echo "        <a href=\"<%= routing.generate('oro_task_view', {'id': relatedActivityId}) %>\"
           title=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.view_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"><i
                class=\"fa-eye hide-text\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.view_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.view_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 56
        echo "
    ";
        // line 57
        ob_start();
        // line 58
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"action item-edit-button\"
           title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.update_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("dialogOptions" => array("width" => 1000))), "html", null, true);
        echo "\">
            <i class=\"fa-pencil-square-o hide-text\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.update_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.update_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 67
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 68
        echo "
    ";
        // line 69
        ob_start();
        // line 70
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"action item-remove-button\"
           title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.delete_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\">
            <i class=\"fa-trash-o hide-text\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.delete_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.delete_task", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 79
        echo "
    ";
        // line 80
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 80,  191 => 79,  188 => 78,  181 => 74,  177 => 73,  173 => 72,  169 => 70,  167 => 69,  164 => 68,  161 => 67,  154 => 63,  150 => 62,  146 => 61,  142 => 60,  138 => 58,  136 => 57,  133 => 56,  130 => 55,  124 => 52,  120 => 51,  116 => 50,  113 => 49,  111 => 48,  108 => 47,  105 => 46,  99 => 43,  96 => 42,  94 => 41,  91 => 40,  88 => 39,  82 => 36,  66 => 22,  63 => 21,  50 => 11,  46 => 10,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/js:activityItemTemplate.html.twig", "");
    }
}
