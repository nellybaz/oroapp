<?php

/* OroEmailBundle:Email/Thread:userEmails.html.twig */
class __TwigTemplate_595a48952c71749d3088db5e3de06aff99c1a53f1a9996ad18d39d05545037f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroEmailBundle:Email/Thread:view.html.twig", "OroEmailBundle:Email/Thread:userEmails.html.twig", 1);
        $this->blocks = array(
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroEmailBundle:Email/Thread:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_data($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"responsive-section\">
            ";
        // line 6
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "wid" => "thread-view", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_thread_widget", array("id" => $this->getAttribute(        // line 9
($context["entity"] ?? null), "id", array()), "renderContexts" => false, "showSingleEmail" =>  !$this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_email.threads_grouping"))), "alias" => "thread-view", "contextsRendered" => true));
        // line 13
        echo "
        </div>
        <div class=\"widget-content email-activity-widget\">
            <h4 class=\"scrollspy-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.sections.activities"), "html", null, true);
        echo "</h4>
            <div class=\"scrollspy-nav-target\"></div>
            <div class=\"responsive-section\">
                ";
        // line 19
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_activities", $context)) ? (_twig_default_filter(($context["view_content_data_activities"] ?? null), "view_content_data_activities")) : ("view_content_data_activities")), array("entity" => ($context["entity"] ?? null)));
        // line 20
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Thread:userEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  49 => 19,  43 => 16,  38 => 13,  36 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Thread:userEmails.html.twig", "");
    }
}
