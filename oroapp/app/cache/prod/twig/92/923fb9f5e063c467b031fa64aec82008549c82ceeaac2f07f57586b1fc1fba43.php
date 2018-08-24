<?php

/* OroHangoutsCallBundle:CalendarEvent/widget:additionalProperties.html.twig */
class __TwigTemplate_0b2311ce64b994987ccf85c2caaa32525f71a0062306b0b4f4d5d5e91fe2f8e7 extends Twig_Template
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
        echo "<% if (attendees && attendees.length && connection && connection.userId === ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
        echo " && obj.use_hangout) { %>
    ";
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroHangoutsCallBundle:CalendarEvent/widget:additionalProperties.html.twig", 2);
        // line 3
        echo "    <% var hangoutCallOptions = {
        calendarEvent: obj,
        ownerUserId: ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()));
        echo ",
        declinedStatus: ";
        // line 6
        echo twig_jsonencode_filter(twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"));
        echo ",
        hangoutOptions: {
            widget_size: 70
        }
    }; %>
    ";
        // line 11
        $context["hangoutButton"] = ('' === $tmp = "        <div data-action-name=\"hangout-call\"
             data-page-component-module=\"orohangoutscall/js/app/components/calendar-event-start-hangout-component\"
             data-page-component-options=\"<%- JSON.stringify(hangoutCallOptions) %>\" class=\"action\"></div>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        echo $context["UI"]->getrenderAttribute($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.hangoutscall.label"), ($context["hangoutButton"] ?? null));
        echo "
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle:CalendarEvent/widget:additionalProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  42 => 11,  34 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle:CalendarEvent/widget:additionalProperties.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm-hangouts-call-bundle/Resources/views/CalendarEvent/widget/additionalProperties.html.twig");
    }
}
