<?php

/* OroHangoutsCallBundle::requirejs.config.js.twig */
class __TwigTemplate_12f58f7cec43e9dbf0e5ebdc2a5b6b46ee699b73ec9c807c9801d8f05bbceb59 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroHangoutsCallBundle::requirejs.config.js.twig"));

        // line 1
        echo "require({
    config: {
        'orohangoutscall/js/app/views/start-button-view': {
            initialApps: ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\HangoutsCallBundle\Twig\OroHangoutsCallExtension')->getInitialApps());
        echo ",
            appHost: ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "host", array()));
        echo "
        }
    }
});
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("require({
    config: {
        'orohangoutscall/js/app/views/start-button-view': {
            initialApps: {{ get_hangoutscall_initail_apps()|json_encode|raw }},
            appHost: {{ app.request.host|json_encode|raw }}
        }
    }
});
", "OroHangoutsCallBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm-hangouts-call-bundle/Resources/views/requirejs.config.js.twig");
    }
}
