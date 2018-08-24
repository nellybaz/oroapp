<?php

/* OroConfigBundle:Configuration:system.html.twig */
class __TwigTemplate_77d5af8d34ed04b3c1d2e2b8051fb17cbd8363d3d4b6cc152f7e2940b5e3d971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroConfigBundle:Configuration:system.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.menu.system_configuration.label");
        // line 4
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_config_configuration_system", array("activeGroup" =>         // line 6
($context["activeGroup"] ?? null), "activeSubGroup" => ($context["activeSubGroup"] ?? null)));
        // line 9
        $context["routeName"] = "oro_config_configuration_system";
        // line 10
        $context["routeParameters"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Configuration:system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  31 => 10,  29 => 9,  27 => 6,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroConfigBundle:Configuration:system.html.twig", "");
    }
}
