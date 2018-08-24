<?php

/* OroHangoutsCallBundle:CalendarEvent:viewActions.html.twig */
class __TwigTemplate_deb0d580dbc82537c6d30a6a22eadfafe03463966189c2098ebb8fc70ea7bb34 extends Twig_Template
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
        $context["invites"] = array();
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "childAttendees", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 9
            echo "    ";
            if ((($this->getAttribute($context["attendee"], "statusCode", array()) != twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")) &&  !twig_test_empty($this->getAttribute($context["attendee"], "email", array())))) {
                // line 10
                echo "        ";
                $context["invites"] = twig_array_merge(($context["invites"] ?? null), array(0 => array("id" => $this->getAttribute(                // line 11
$context["attendee"], "email", array()), "invite_type" => "EMAIL")));
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<div class=\"pull-left btn-group\">
    ";
        // line 17
        $this->loadTemplate("OroHangoutsCallBundle::startHangoutButton.html.twig", "OroHangoutsCallBundle:CalendarEvent:viewActions.html.twig", 17)->display($context);
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle:CalendarEvent:viewActions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  42 => 17,  39 => 16,  32 => 14,  30 => 11,  28 => 10,  25 => 9,  21 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle:CalendarEvent:viewActions.html.twig", "");
    }
}
