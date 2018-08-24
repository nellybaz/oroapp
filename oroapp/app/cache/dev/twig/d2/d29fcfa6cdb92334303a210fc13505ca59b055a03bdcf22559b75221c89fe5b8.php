<?php

/* OroReminderBundle:Reminder:showScript.html.twig */
class __TwigTemplate_4876b814a8413b84672a9beefa3ff440c2894224c07b55aa6de1f9c22a46a844 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Reminder:showScript.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroReminderBundle:Reminder:showScript.html.twig", 2);
            // line 3
            echo "
    <div ";
            // line 4
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "ororeminder/js/app/components/reminder-show-component", "options" => array("reminderData" => $this->env->getExtension('Oro\Bundle\ReminderBundle\Twig\ReminderExtension')->getRequestedRemindersData())));
            // line 9
            echo "></div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:showScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
    {% import 'OroUIBundle::macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        module: 'ororeminder/js/app/components/reminder-show-component',
        options: {
            reminderData: oro_reminder_get_requested_reminders_data()
        }
    }) }}></div>
{% endif %}
", "OroReminderBundle:Reminder:showScript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ReminderBundle/Resources/views/Reminder/showScript.html.twig");
    }
}
