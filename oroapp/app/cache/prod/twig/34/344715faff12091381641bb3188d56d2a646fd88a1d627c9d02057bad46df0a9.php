<?php

/* OroEmailBundle:Email/Thread:view.html.twig */
class __TwigTemplate_fb7fa01bab751aa6435b00904187f675a0c1ff0c5ade7e4d6854b7b68cae2478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEmailBundle:Email/Thread:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'pageActions' => array($this, 'block_pageActions'),
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroEmailBundle:Email/Thread:view.html.twig", 2);
        // line 3
        $context["Actions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroEmailBundle:Email/Thread:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%subject%" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(        // line 5
($context["entity"] ?? null), "subject", array())))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 9
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_emails"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.entity_plural_label"), "entityTitle" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(        // line 12
($context["entity"] ?? null), "subject", array())));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_pageActions($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"pull-right email-thread-action-panel\"></div>
";
    }

    // line 21
    public function block_navButtons($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        echo $context["AC"]->getaddContextButton(($context["entity"] ?? null));
        echo "
        ";
        // line 25
        echo $context["Actions"]->getaddMarkUnreadButton(($context["entity"] ?? null));
        echo "
    ";
        $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "pinnedDropdownButton", array(0 => array("html" =>         // line 28
($context["buttonsHtml"] ?? null))), "method"), "html", null, true);
        // line 29
        echo "
";
    }

    // line 32
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.menu.user_emails")));
        // line 36
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroEmailBundle:Email/Thread:view.html.twig", 36)->display($context);
    }

    // line 39
    public function block_stats($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        // line 41
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 42
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
        echo "
    </li>
";
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    <div class=\"container-fluid\">
        <div class=\"responsive-section\">
            ";
        // line 49
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "wid" => "thread-view", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_thread_widget", array("id" => $this->getAttribute(        // line 52
($context["entity"] ?? null), "id", array()), "renderContexts" => false, "showSingleEmail" =>  !$this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_email.threads_grouping"))), "alias" => "thread-view", "contextsRendered" => true));
        // line 56
        echo "
        </div>
        <div class=\"widget-content email-activity-widget\">
            <h4 class=\"scrollspy-title\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.sections.activities"), "html", null, true);
        echo "</h4>
            <div class=\"scrollspy-nav-target\"></div>
            <div class=\"responsive-section\">
                ";
        // line 62
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_activities", $context)) ? (_twig_default_filter(($context["view_content_data_activities"] ?? null), "view_content_data_activities")) : ("view_content_data_activities")), array("entity" => ($context["entity"] ?? null)));
        // line 63
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Thread:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 63,  138 => 62,  132 => 59,  127 => 56,  125 => 52,  124 => 49,  120 => 47,  117 => 46,  110 => 42,  107 => 41,  105 => 40,  102 => 39,  97 => 36,  94 => 33,  91 => 32,  86 => 29,  84 => 28,  82 => 27,  77 => 25,  72 => 24,  70 => 23,  67 => 22,  64 => 21,  59 => 18,  56 => 17,  49 => 14,  47 => 12,  46 => 9,  44 => 8,  41 => 7,  37 => 1,  35 => 5,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Thread:view.html.twig", "");
    }
}
