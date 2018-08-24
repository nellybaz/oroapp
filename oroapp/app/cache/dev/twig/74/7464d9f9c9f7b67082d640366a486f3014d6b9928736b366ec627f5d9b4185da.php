<?php

/* OroReminderBundle:Reminder:subscribeScript.html.twig */
class __TwigTemplate_0d8fda86cb9ee2e191f46a0e1e266ced2059db08f645be995e3c640a37387d6b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Reminder:subscribeScript.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_reminder_reminder_templates", $context)) ? (_twig_default_filter(($context["oro_reminder_reminder_templates"] ?? $this->getContext($context, "oro_reminder_reminder_templates")), "oro_reminder_reminder_templates")) : ("oro_reminder_reminder_templates")), array());
            // line 3
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.init(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  40 => 9,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
    {% placeholder oro_reminder_reminder_templates %}
    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.init({{ app.user.id }}, {{ check_ws() ? 'true' : 'false' }});
        });
    </script>
{% endif %}

", "OroReminderBundle:Reminder:subscribeScript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ReminderBundle/Resources/views/Reminder/subscribeScript.html.twig");
    }
}
