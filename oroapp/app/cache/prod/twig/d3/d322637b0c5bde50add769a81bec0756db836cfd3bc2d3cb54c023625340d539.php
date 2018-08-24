<?php

/* OroReminderBundle:Reminder:showScript.html.twig */
class __TwigTemplate_7b9dc2172490706aab0858b85364dfd53d5918c5585c47ce78c5283f9a71dedf extends Twig_Template
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
        return array (  29 => 9,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReminderBundle:Reminder:showScript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ReminderBundle/Resources/views/Reminder/showScript.html.twig");
    }
}
