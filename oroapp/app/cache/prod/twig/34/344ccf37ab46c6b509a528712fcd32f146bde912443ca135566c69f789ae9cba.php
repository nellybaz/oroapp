<?php

/* OroPlatformBundle::have_request.html.twig */
class __TwigTemplate_8638fa1cf7cd5f8835ec568a92addf9bea5b715c2a64665a6b0f1ae33320bc85 extends Twig_Template
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
        echo "<script>
    require(['jquery', 'oroui/js/error'], function (\$, error) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       '";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), (twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))) : ((twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))), "html", null, true);
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
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPlatformBundle::have_request.html.twig", "");
    }
}
