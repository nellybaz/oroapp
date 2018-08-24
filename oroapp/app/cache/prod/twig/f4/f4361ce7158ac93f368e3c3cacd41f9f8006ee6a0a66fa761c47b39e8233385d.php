<?php

/* OroCallBundle:Call/js:activityItemTemplate.html.twig */
class __TwigTemplate_aac42ef4a99e50ba64447b54d5e6e952773cb7024d894b41dc54748a669cf4ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroCallBundle:Call/js:activityItemTemplate.html.twig", 1);
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
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCallBundle:Call/js:activityItemTemplate.html.twig", 2);
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\CallBundle\\Entity\\Call";
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
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.created_by"));
        echo "
        : ";
        // line 11
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.changed_by"));
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
    public function block_activityActions($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
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
        echo "        <a href=\"<%= routing.generate('oro_call_view', {'id': relatedActivityId}) %>\"
           title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.view_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"><i
                class=\"fa-eye hide-text\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.view_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.view_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 37
        echo "
    ";
        // line 38
        ob_start();
        // line 39
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"action item-edit-button\"
           title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.update_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("dialogOptions" => array("width" => 1000))), "html", null, true);
        echo "\">
            <i class=\"fa-pencil-square-o hide-text\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.update_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.update_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 49
        echo "
    ";
        // line 50
        ob_start();
        // line 51
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"action item-remove-button\"
           title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.delete_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\">
            <i class=\"fa-trash-o hide-text\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.delete_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.delete_call", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 60
        echo "
    ";
        // line 61
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  163 => 60,  160 => 59,  153 => 55,  149 => 54,  145 => 53,  141 => 51,  139 => 50,  136 => 49,  133 => 48,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 39,  108 => 38,  105 => 37,  102 => 36,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  83 => 29,  80 => 28,  77 => 27,  71 => 24,  68 => 23,  65 => 22,  62 => 21,  49 => 11,  45 => 10,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call/js:activityItemTemplate.html.twig", "");
    }
}
