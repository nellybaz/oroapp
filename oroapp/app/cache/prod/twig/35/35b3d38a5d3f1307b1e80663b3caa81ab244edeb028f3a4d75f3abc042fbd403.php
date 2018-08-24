<?php

/* OroIntegrationBundle:Integration:syncButton.html.twig */
class __TwigTemplate_db64a68bbea98e2d05e9910c7dc63794b707716eed0e0d60253a3e18585a8ac9 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroIntegrationBundle:Integration:syncButton.html.twig", 1);
        // line 2
        echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_schedule", array("id" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash schedule-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.button.sync")));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Integration:syncButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Integration:syncButton.html.twig", "");
    }
}
