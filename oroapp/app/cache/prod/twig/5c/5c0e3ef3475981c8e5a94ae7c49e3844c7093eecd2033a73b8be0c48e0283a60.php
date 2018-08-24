<?php

/* OroHangoutsCallBundle::requirejs.config.js.twig */
class __TwigTemplate_6d1d25b4bd597e8993769a5101728a43e5268852c0c18bf06337d920f4e2f288 extends Twig_Template
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
        echo "require({
    config: {
        'orohangoutscall/js/app/views/start-button-view': {
            initialApps: ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\HangoutsCallBundle\Twig\OroHangoutsCallExtension')->getInitialApps());
        echo ",
            appHost: ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array()));
        echo "
        }
    }
});
";
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
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm-hangouts-call-bundle/Resources/views/requirejs.config.js.twig");
    }
}
