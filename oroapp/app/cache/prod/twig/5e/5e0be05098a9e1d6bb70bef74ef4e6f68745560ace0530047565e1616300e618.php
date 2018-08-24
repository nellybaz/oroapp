<?php

/* OroEmailBundle:Email/js:activityItemTemplate.html.twig */
class __TwigTemplate_479f84ff382392a0595780be358081b68affa338509a486f0d2fe9d82f498952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroEmailBundle:Email/js:activityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityDetails' => array($this, 'block_activityDetails'),
            'activityActions' => array($this, 'block_activityActions'),
            'activityContent' => array($this, 'block_activityContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/js:activityItemTemplate.html.twig", 2);
        // line 3
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroEmailBundle:Email/js:activityItemTemplate.html.twig", 3);
        // line 5
        $context["entityClass"] = "Oro\\Bundle\\EmailBundle\\Entity\\Email";
        // line 6
        $context["entityName"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "label"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
        echo "
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
            ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
            : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
    %>
    <%= _.template(";
        // line 16
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.sent_by.label"));
        echo ", { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: ownerLink,
        date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
    }

    // line 22
    public function block_activityActions($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_user_edit")) {
            // line 25
            echo "            ";
            echo $context["AC"]->getactivity_context_link();
            echo "
        ";
        }
        // line 27
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 29
        echo "
    ";
        // line 30
        ob_start();
        // line 31
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 32
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "html", null, true);
            echo "\"
               data-url=\"<%= routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 34
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
            // line 49
            echo "><i class=\"fa-reply hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply");
            echo "</i>
                ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply");
            echo "
            </a>
        ";
        }
        // line 53
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 55
        echo "
    ";
        // line 56
        ob_start();
        // line 57
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 58
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "html", null, true);
            echo "\"
               data-url=\"<%= routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 60
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "forward-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
            // line 75
            echo "><i class=\"fa-mail-forward hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward");
            echo "</i>
                ";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward");
            echo "
            </a>
        ";
        }
        // line 79
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 80
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 81
        echo "
    ";
        // line 82
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    // line 85
    public function block_activityContent($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        // line 87
        echo "    <div class=\"info\"></div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 87,  161 => 86,  158 => 85,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  137 => 76,  132 => 75,  130 => 60,  124 => 58,  121 => 57,  119 => 56,  116 => 55,  113 => 54,  110 => 53,  104 => 50,  99 => 49,  97 => 34,  91 => 32,  88 => 31,  86 => 30,  83 => 29,  80 => 28,  77 => 27,  71 => 25,  68 => 24,  65 => 23,  62 => 22,  53 => 16,  42 => 9,  39 => 8,  35 => 1,  33 => 6,  31 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/js:activityItemTemplate.html.twig", "");
    }
}
