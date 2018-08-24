<?php

/* OroPlatformBundle::have_request.html.twig */
class __TwigTemplate_6eb679ff19c5a2ddfb3dd4117ff2fc2c5314c215b524391f25595217fbc168fd extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroPlatformBundle::have_request.html.twig"));

        // line 1
        echo "<script>
    require(['jquery', 'oroui/js/error'], function (\$, error) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       '";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), (twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))) : ((twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))), "html", null, true);
        echo "',
                timeout:   2000,
                errorHandlerMessage: false
            };

            \$.ajax(options).then(function() {
                new ORO.EmbedRequestForm(options);
            }, function() {
                error.showErrorInConsole('Unable to load external script.');
            });
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroPlatformBundle::have_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    require(['jquery', 'oroui/js/error'], function (\$, error) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       '{{ data|default(constant('Oro\\\\Bundle\\\\PlatformBundle\\\\Form\\\\UrlGenerator::URL') ~ constant('Oro\\\\Bundle\\\\PlatformBundle\\\\Form\\\\UrlGenerator::FORM_JS')) }}',
                timeout:   2000,
                errorHandlerMessage: false
            };

            \$.ajax(options).then(function() {
                new ORO.EmbedRequestForm(options);
            }, function() {
                error.showErrorInConsole('Unable to load external script.');
            });
        });
    });
</script>
", "OroPlatformBundle::have_request.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/PlatformBundle/Resources/views/have_request.html.twig");
    }
}
