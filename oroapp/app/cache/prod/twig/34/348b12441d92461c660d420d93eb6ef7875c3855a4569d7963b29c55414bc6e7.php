<?php

/* OroReminderBundle:Reminder:subscribeScript.html.twig */
class __TwigTemplate_3f417a70597535ebbfd440f6ea4788c89e5705252cd89356f73f39553066883e extends Twig_Template
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_reminder_reminder_templates", $context)) ? (_twig_default_filter(($context["oro_reminder_reminder_templates"] ?? null), "oro_reminder_reminder_templates")) : ("oro_reminder_reminder_templates")), array());
            // line 3
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.init(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
            echo ", ";
            echo (($this->env->getExtension('Oro\Bundle\SyncBundle\Twig\OroSyncExtension')->checkWsConnected()) ? ("true") : ("false"));
            echo ");
        });
    </script>
";
        }
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:subscribeScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReminderBundle:Reminder:subscribeScript.html.twig", "");
    }
}
