<?php

/* OroRequireJSBundle::requirejs_build_logger.html.twig */
class __TwigTemplate_cc534f86e988f93b9d1aabd47b7afb93b4e73b1af4cf9e30a7d044ca1636b1b8 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require({
        config: {
            'requirejs-build-logger-exclude-list': {
                excludeList: ";
        // line 5
        echo twig_jsonencode_filter(($context["excludeList"] ?? null));
        echo "
            }
        }
    });
    require(['ororequirejs/js/requirejs-build-logger']);
</script>
";
    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::requirejs_build_logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRequireJSBundle::requirejs_build_logger.html.twig", "");
    }
}
