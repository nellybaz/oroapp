<?php

/* OroEmailBundle:Notification:button.html.twig */
class __TwigTemplate_1f61d66ec5d700eadc551497e5750cf68d5f5ace0543709505091e0b66f29197 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Notification:button.html.twig", 1);
        // line 2
        if ($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("email")) {
            // line 3
            echo "<script type=\"text/template\" id=\"email-notification-item-template\">
    <div class=\"info\" data-id=\"<%- id %>\">
        <div class=\"body\">
            <% if (subject) { %>
                <div class=\"title nowrap-ellipsis\"><%- subject %></div>
            <% } else { %>
                <div class=\"empty-subject nowrap-ellipsis\">(";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.recent_emails_widget.no_subject"), "html", null, true);
            echo ")</div>
            <% } %>
            <div class=\"description nowrap-ellipsis\"><%= bodyContent %></div>
        </div>
        <% if (seen) {  %>
        <i class=\"fa-envelope\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.datagrid.emails.action.mark_as_unread"), "html", null, true);
            echo "\" data-role=\"toggle-read-status\"></i>
        <% } else { %>
        <i class=\"fa-envelope highlight\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.datagrid.emails.action.mark_as_read"), "html", null, true);
            echo "\" data-role=\"toggle-read-status\"></i>
        <% } %>
    </div>
    <div class=\"footer row-fluid\">
        <span class=\"pull-left from-name\">
            <% if (linkFromName) { %>
                <a href=\"<%- linkFromName %>\"><%- fromName %></a>
            <% } else { %>
                <%- fromName %>
            <% } %>
        </span>
        <span class=\"pull-right\">
            <span class=\"forward-action\">";
            // line 29
            echo $context["UI"]->getclientLink(array("dataUrlRaw" => "<%= forwardRoute %>", "aCss" => (($this->getAttribute(            // line 31
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
            // line 49
            echo "</span>
            <span class=\"reply-action\">";
            // line 51
            echo $context["UI"]->getclientLink(array("dataUrlRaw" => "<%= replyRoute %>", "aCss" => (($this->getAttribute(            // line 53
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
            // line 71
            echo "</span>
            <span class=\"reply-all-action\">";
            // line 73
            echo $context["UI"]->getclientLink(array("dataUrlRaw" => "<%= replyAllRoute %>", "aCss" => (($this->getAttribute(            // line 75
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
            // line 93
            echo "</span>
        </span>
    </div>
</script>
";
        }
        // line 98
        if (($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("email") && $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_email.show_recent_emails_in_user_bar"))) {
            // line 99
            echo "<li class=\"email-notification-menu dropdown\"
    title=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.notification.menu_item.hint"), "html", null, true);
            echo "\"
    data-page-component-options=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("emails" =>             // line 102
($context["emails"] ?? null), "count" =>             // line 103
($context["count"] ?? null), "hasMarkAllButton" => true, "clankEvent" => $this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailClankEvent())), "html", null, true);
            // line 106
            echo "\"
    data-layout=\"separate\">
    ";
            // line 108
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
                // line 109
                echo "    <a href=\"#\" class=\"oro-dropdown-toggle email-notification-icon\"></a>
    ";
            }
            // line 111
            echo "    <div class=\"dropdown-menu pull-right\" tabindex=\"0\"></div>
    <div class=\"new-email-notification\"> ";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.notification.new_email"), "html", null, true);
            echo "</div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Notification:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 112,  104 => 111,  100 => 109,  98 => 108,  94 => 106,  92 => 103,  91 => 102,  90 => 101,  86 => 100,  83 => 99,  81 => 98,  74 => 93,  72 => 75,  71 => 73,  68 => 71,  66 => 53,  65 => 51,  62 => 49,  60 => 31,  59 => 29,  44 => 16,  39 => 14,  31 => 9,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Notification:button.html.twig", "");
    }
}
