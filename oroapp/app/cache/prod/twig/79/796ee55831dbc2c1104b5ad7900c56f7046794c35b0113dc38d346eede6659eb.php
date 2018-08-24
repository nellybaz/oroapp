<?php

/* OroUserBundle:User/Autocomplete/Widget:selection.html.twig */
class __TwigTemplate_1741eba95c61c265613f24841c0cba6995a6bf71111882237fd6f4373f3fce8c extends Twig_Template
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
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<% if (id == 'current_user') { %><i><% } %><%= _.escape(fullName) %><% if (id == 'current_user') { %></i><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Autocomplete/Widget:selection.html.twig";
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
        return new Twig_Source("", "OroUserBundle:User/Autocomplete/Widget:selection.html.twig", "");
    }
}
