<?php

/* OroCalendarBundle:Calendar/Menu:changeCalendarColor.html.twig */
class __TwigTemplate_ec4732dd33ca189babfad461054b282af85ef3f0168f5fa189381a15821d4741 extends Twig_Template
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
        echo "<li ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oro_menu"] ?? null), "attributes", array(0 => ($context["itemAttributes"] ?? null)), "method"), "html", null, true);
        echo ">
    <div class=\"color-picker\"></div>
    <a class=\"custom-color-link\" href=\"javascript: void(0)\" class=\"custom-color-picker\"><span class=\"custom-color\"></span>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.context.edit_color"), "html", null, true);
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar/Menu:changeCalendarColor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar/Menu:changeCalendarColor.html.twig", "");
    }
}
