<?php

/* OroUserBundle:Configuration:userConfig.html.twig */
class __TwigTemplate_0fc5a567616db90aba6af290d4e66a5e06b85cb2a66fa77af90775b1801e0cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroUserBundle:Configuration:userConfig.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:Configuration:userConfig.html.twig", 2);
        // line 3
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 4
($context["fullname"] ?? null))));
        // line 6
        $context["pageTitle"] = array(0 =>         // line 7
$context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"))), 1 =>         // line 11
$context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "id", array()))), "label" =>         // line 13
($context["fullname"] ?? null))), 2 => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.user_configuration.label") . ((        // line 15
($context["scopeInfo"] ?? null)) ? ($context["UI"]->gettooltip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["scopeInfo"] ?? null)))) : (""))));
        // line 19
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 20
($context["routeName"] ?? null), twig_array_merge(        // line 21
($context["routeParameters"] ?? null), array("activeGroup" => ($context["activeGroup"] ?? null), "activeSubGroup" => ($context["activeSubGroup"] ?? null))));
        // line 24
        $context["routeName"] = ($context["routeName"] ?? null);
        // line 25
        $context["routeParameters"] = ($context["routeParameters"] ?? null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Configuration:userConfig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,  44 => 25,  42 => 24,  40 => 21,  39 => 20,  38 => 19,  36 => 15,  35 => 13,  34 => 12,  33 => 11,  32 => 7,  31 => 6,  29 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Configuration:userConfig.html.twig", "");
    }
}
