<?php

/* OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig */
class __TwigTemplate_4eef4ec577ecbff393cb7e9f42557b0d3e6bcc82de9120d7e29de089325552ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityIcon' => array($this, 'block_activityIcon'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig", 2);
        // line 3
        $context["EA"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig", 3);
        // line 5
        $context["entityClass"] = "Oro\\Bundle\\EmailBundle\\Entity\\Email";
        // line 6
        $context["entityName"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "label"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_activityIcon($context, array $blocks = array())
    {
        // line 9
        echo "    <% if(is_head && !ignoreHead) { %>
        <i class=\"icon-email-thread\"></i>
    <% } else { %>
        <i class=\"";
        // line 12
        echo $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "icon");
        echo "\"></i>
    <% } %>
";
    }

    // line 16
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
        echo "
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
        var updatedAt = updatedAt;
        var subject = subject;
        if(is_head && !ignoreHead) {
            ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.headOwnerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.headOwnerName) + '</span>';
            updatedAt = dateFormatter.formatSmartDateTime(data.headSentAt);
            subject = data.headSubject;
        }
    %>
    <%= _.template(
        ";
        // line 34
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.sent_by.label"));
        echo ",
        { interpolate: /\\{\\{(.+?)\\}\\}/g }
    )({
        user: ownerLink,
        date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
    }

    // line 42
    public function block_activityActions($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        ob_start();
        // line 44
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_user_edit")) {
            // line 45
            echo "            <a href=\"#\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder");
            echo "\"
               data-url=\"<%= routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': '";
            // line 46
            echo twig_escape_filter($this->env, twig_replace_filter(($context["entityClass"] ?? null), array("\\" => "_")), "html", null, true);
            echo "' }) %>\"
                    ";
            // line 47
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "activity-context-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600))));
            // line 64
            echo "><i class=\"fa-link hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder");
            echo "</i>
                ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder");
            echo "
            </a>
        ";
        }
        // line 68
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "    ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 70
        echo "
    ";
        // line 71
        ob_start();
        // line 72
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 73
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "html", null, true);
            echo "\"
               data-url=\"<%= routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 75
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "email-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
            // line 90
            echo "><i class=\"fa-reply hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply");
            echo "</i>
                ";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply");
            echo "
            </a>
        ";
        }
        // line 94
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 96
        echo "
    ";
        // line 97
        ob_start();
        // line 98
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 99
            echo "        <a href=\"#\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all");
            echo "\"
           data-url=\"<%= routing.generate('oro_email_email_reply_all', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
                ";
            // line 101
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "email-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
            // line 116
            echo "><i class=\"fa-reply-all hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all");
            echo "</i>
            ";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all");
            echo "
        </a>
    ";
        }
        // line 120
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 121
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 122
        echo "
    ";
        // line 123
        ob_start();
        // line 124
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 125
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "html", null, true);
            echo "\"
               data-url=\"<%= routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 127
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "forward-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
            // line 142
            echo "><i class=\"fa-mail-forward hide-text\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward");
            echo "</i>
                ";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward");
            echo "
            </a>
        ";
        }
        // line 146
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 147
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 148
        echo "
    ";
        // line 149
        ob_start();
        // line 150
        echo "        <a href=\"<%= routing.generate('oro_email_thread_view', {'id': relatedActivityId}) %>\"
           title=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.view");
        echo "\"><i
                class=\"fa-eye hide-text\">";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.view");
        echo "</i>
            ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.view");
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 156
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 157
        echo "
    ";
        // line 158
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    // line 161
    public function block_activityContent($context, array $blocks = array())
    {
        // line 162
        echo "    ";
        // line 163
        echo "    <div class=\"info <% if (is_head && !ignoreHead) { %>thread<% } %>\" id=\"grouped-entity-<%= data.entityId %>\"></div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 163,  263 => 162,  260 => 161,  254 => 158,  251 => 157,  248 => 156,  242 => 153,  238 => 152,  234 => 151,  231 => 150,  229 => 149,  226 => 148,  223 => 147,  220 => 146,  214 => 143,  209 => 142,  207 => 127,  201 => 125,  198 => 124,  196 => 123,  193 => 122,  190 => 121,  187 => 120,  181 => 117,  176 => 116,  174 => 101,  168 => 99,  165 => 98,  163 => 97,  160 => 96,  157 => 95,  154 => 94,  148 => 91,  143 => 90,  141 => 75,  135 => 73,  132 => 72,  130 => 71,  127 => 70,  124 => 69,  121 => 68,  115 => 65,  110 => 64,  108 => 47,  104 => 46,  99 => 45,  96 => 44,  93 => 43,  90 => 42,  79 => 34,  58 => 17,  55 => 16,  48 => 12,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/js:groupedActivityItemTemplate.html.twig", "");
    }
}
