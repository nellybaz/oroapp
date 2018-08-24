<?php

/* OroCustomerBundle:Sidebar:sidebar.html.twig */
class __TwigTemplate_39c00a1f9e61509dd11eb1085219f24c0813cc85e356406a4037a5c9ffc07078 extends Twig_Template
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
        $this->loadTemplate("OroSidebarBundle::sidebar.html.twig", "OroCustomerBundle:Sidebar:sidebar.html.twig", 1)->display(array_merge($context, array("sidebarsGetURL" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_frontend_get_sidebars", array("position" => ("SIDEBAR_" . twig_upper_filter($this->env,         // line 2
($context["placement"] ?? null))))), "sidebarPostURL" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_frontend_post_sidebars"), "widgetsGetURL" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_frontend_get_sidebarwidgets", array("placement" =>         // line 4
($context["placement"] ?? null))), "widgetPostURL" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_frontend_post_sidebarwidgets"))));
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Sidebar:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 4,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Sidebar:sidebar.html.twig", "");
    }
}
