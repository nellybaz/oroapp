<?php

/* OroUserBundle:User/Autocomplete/Widget:result.html.twig */
class __TwigTemplate_4f4756d6edc6212ab45b0cc45ec918c1d3ffb86cc22f116626b89633ddc778d5 extends Twig_Template
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
        echo "<img src=\"<% if (typeof avatar != 'undefined' && avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<% if (id == 'current_user') { %><i><% } %><%= highlight(_.escape(fullName)) %><% if (id == 'current_user') { %></i><% } %><% if (typeof email != 'undefined' && typeof username != 'undefined') { %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Autocomplete/Widget:result.html.twig";
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
        return new Twig_Source("", "OroUserBundle:User/Autocomplete/Widget:result.html.twig", "");
    }
}
