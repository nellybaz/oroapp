<?php

/* OroNoteBundle:Note/js:activityItemTemplate.html.twig */
class __TwigTemplate_28709455091d87c8c23bd336031716ba9438996af0d338878314d99951279c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroNoteBundle:Note/js:activityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityDetails' => array($this, 'block_activityDetails'),
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
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroNoteBundle:Note/js:activityItemTemplate.html.twig", 2);
        // line 3
        $context["entityClass"] = "Oro\\Bundle\\NoteBundle\\Entity\\Note";
        // line 4
        $context["entityName"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "label"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
        echo "
    <% var template = (verb == 'create')
        ? ";
        // line 9
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_added_by"));
        echo "
        : ";
        // line 10
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_updated_by"));
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

    // line 20
    public function block_activityActions($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "        ";
        // line 23
        echo "        <% if (editable) { %>
            ";
        // line 24
        echo $context["AC"]->getactivity_context_link();
        echo "
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 28
        echo "
    ";
        // line 29
        ob_start();
        // line 30
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"action item-edit-button\"
           title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_update", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("dialogOptions" => array("width" => 1000))), "html", null, true);
        echo "\">
            <i class=\"fa-pencil-square-o hide-text\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_update", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_update", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 40
        echo "
    ";
        // line 41
        ob_start();
        // line 42
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"action item-remove-button\"
           title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_delete", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\">
            <i class=\"fa-trash-o hide-text\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_delete", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_delete", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 51
        echo "
    ";
        // line 52
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 52,  140 => 51,  137 => 50,  130 => 46,  126 => 45,  122 => 44,  118 => 42,  116 => 41,  113 => 40,  110 => 39,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 30,  85 => 29,  82 => 28,  79 => 27,  73 => 24,  70 => 23,  68 => 22,  65 => 21,  62 => 20,  49 => 10,  45 => 9,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/js:activityItemTemplate.html.twig", "");
    }
}
