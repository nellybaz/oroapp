<?php

/* OroWindowsBundle:Include:javascript.html.twig */
class __TwigTemplate_8ea8b48e6284cc39bcc5d1d37bd47efc0c1267ecf0c0eadc92844272040364c0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroWindowsBundle:Include:javascript.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    require(['orowindows/js/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((array_key_exists("urlRootRoute", $context)) ? (_twig_default_filter(($context["urlRootRoute"] ?? $this->getContext($context, "urlRootRoute")), "oro_api_get_windows")) : ("oro_api_get_windows"))));
        echo ";
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroWindowsBundle:Include:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    require(['orowindows/js/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = {{ path(urlRootRoute|default('oro_api_get_windows'))|json_encode|raw }};
    });
</script>
", "OroWindowsBundle:Include:javascript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/Include/javascript.html.twig");
    }
}
