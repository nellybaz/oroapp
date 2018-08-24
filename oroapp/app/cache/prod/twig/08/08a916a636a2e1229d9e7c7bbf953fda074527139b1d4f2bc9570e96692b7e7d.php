<?php

/* OroEmailBundle:Dashboard:recentEmails.html.twig */
class __TwigTemplate_7b8fa042ff17646dd71cecc8826c2928b1f42d91842ece79925e0c368470a026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:tabbedWidget.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 2);
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"email-mail-count-circle\" ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroemail/js/app/views/unread-emails-counter-view", "count" =>         // line 9
($context["unreadMailCount"] ?? null), "autoRender" => true)));
        // line 12
        echo "></div>
";
        $context["unreadMailCount"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["tabs"] = array(0 => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 19
($context["widgetName"] ?? null), "activeTab" => "inbox", "contentType" => "tab")), "name" => "inbox", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.recent_emails.inbox")), 1 => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 27
($context["widgetName"] ?? null), "activeTab" => "sent", "contentType" => "tab")), "name" => "sent", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.recent_emails.sent")), 2 => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 35
($context["widgetName"] ?? null), "activeTab" => "new", "contentType" => "tab")), "name" => "unread", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.recent_emails.unread"), "afterHtml" =>         // line 39
($context["unreadMailCount"] ?? null)));
        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_actions($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_emails", array("id" =>         // line 47
($context["loggedUserId"] ?? null))), "type" => "link", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.recent_emails.view_all")));
        // line 51
        echo "
    ";
        // line 52
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 52,  68 => 51,  66 => 47,  64 => 46,  61 => 45,  55 => 42,  52 => 41,  50 => 39,  49 => 35,  48 => 27,  47 => 19,  45 => 16,  42 => 15,  38 => 1,  34 => 12,  32 => 9,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Dashboard:recentEmails.html.twig", "");
    }
}
