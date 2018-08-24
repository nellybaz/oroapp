<?php

/* OroCalendarBundle:Calendar:Autocomplete/result.html.twig */
class __TwigTemplate_deff6e3d895f716822bbca7cebb9caf253117b8930e9b6c23a8c679077437e00 extends Twig_Template
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
        echo "<img src=\"<% if (avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= highlight(_.escape(fullName)) %>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar:Autocomplete/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar:Autocomplete/result.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/calendar-bundle/Resources/views/Calendar/Autocomplete/result.html.twig");
    }
}
