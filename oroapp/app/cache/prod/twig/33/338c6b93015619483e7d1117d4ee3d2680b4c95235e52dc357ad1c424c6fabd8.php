<?php

/* OroUserBundle:User/Autocomplete:result.html.twig */
class __TwigTemplate_15b798b6f1767cea02260eb9db5a73487b68f03342edd7dbaa56cd62a25cb90b extends Twig_Template
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
        echo "<% if (id !== null) { %>
    <img src=\"<% if (avatar) { %><%= avatar %><% } else { %>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)
<% } else { %>
    <%= highlight(_.escape(email)) %>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Autocomplete:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User/Autocomplete:result.html.twig", "");
    }
}
