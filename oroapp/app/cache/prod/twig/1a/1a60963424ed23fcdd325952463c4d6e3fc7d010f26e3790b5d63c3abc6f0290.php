<?php

/* OroCalendarBundle:Calendar/Menu:toggleCalendar.html.twig */
class __TwigTemplate_a68bd38ad5052c588707c60d103199b4e49a9523b0ee2f189e0c6ced86fe3b81 extends Twig_Template
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
        echo "<li";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oro_menu"] ?? null), "attributes", array(0 => ($context["itemAttributes"] ?? null)), "method"), "html", null, true);
        echo ">
    <a href=\"javascript:void(0);\" class=\"action\">
    <% if (visible) { %>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.context.hide"), "html", null, true);
        echo "
    <% } else { %>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.context.show"), "html", null, true);
        echo "
    <% } %>
    </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar/Menu:toggleCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar/Menu:toggleCalendar.html.twig", "");
    }
}
