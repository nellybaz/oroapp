<?php

/* OroNavigationBundle:HashNav:redirect.html.twig */
class __TwigTemplate_1968985e6076831d5155b7adf2f4412750fb61362179bb157f5016eea56658d0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:HashNav:redirect.html.twig"));

        // line 1
        $context["data"] = array("redirect" => true, "fullRedirect" =>         // line 3
($context["full_redirect"] ?? $this->getContext($context, "full_redirect")), "location" =>         // line 4
($context["location"] ?? $this->getContext($context, "location")));
        // line 6
        echo twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  24 => 4,  23 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set data = {
    'redirect': true,
    'fullRedirect': full_redirect,
    'location': location
} %}
{{ data|json_encode|raw }}", "OroNavigationBundle:HashNav:redirect.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/HashNav/redirect.html.twig");
    }
}
