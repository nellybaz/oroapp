<?php

/* OroRequireJSBundle::require_config.js.twig */
class __TwigTemplate_5b00e85dc45caab2fe4b0230ce7e4a5c0b7f852e7d2846432326c31d6ac660ff extends Twig_Template
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
        echo "require(";
        echo twig_jsonencode_filter(($context["config"] ?? null));
        echo ");
";
    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::require_config.js.twig";
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
        return new Twig_Source("", "OroRequireJSBundle::require_config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/RequireJSBundle/Resources/views/require_config.js.twig");
    }
}
