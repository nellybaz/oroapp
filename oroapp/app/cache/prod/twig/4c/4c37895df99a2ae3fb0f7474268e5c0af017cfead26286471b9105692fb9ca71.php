<?php

/* OroNavigationBundle:UserMenu:update.html.twig */
class __TwigTemplate_827bdf9320957ddb638c2982ebd8660a8e2248861e03fc5eb84e0e6579f9259a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:menuUpdate:update.html.twig", "OroNavigationBundle:UserMenu:update.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:menuUpdate:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["routePrefix"] = "oro_navigation_user_menu_";
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 6
($context["fullname"] ?? null), "%title%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "title", array())))));
        // line 7
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_profile_view"), "indexLabel" =>         // line 14
($context["fullname"] ?? null)), 1 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_navigation_user_menu_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.roots_plural_label")), 2 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_navigation_user_menu_view", array("menuName" =>         // line 21
($context["menuName"] ?? null))), "indexLabel" =>         // line 22
($context["menuName"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:UserMenu:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,  35 => 22,  34 => 21,  33 => 14,  32 => 8,  31 => 7,  29 => 6,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:UserMenu:update.html.twig", "");
    }
}
