<?php

/* OroCommerceMenuBundle:GlobalMenu:update.html.twig */
class __TwigTemplate_f1bc9ea9c5f550c2228eb1a0201637619b8ce3343b6b57af7f9005c064ec9f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate:update.html.twig", "OroCommerceMenuBundle:GlobalMenu:update.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCommerceMenuBundle:menuUpdate:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["routePrefix"] = "oro_commerce_menu_global_menu_";

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["entity"] ?? null), "title", array())))));
        // line 6
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_global_menu_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_global_menu_view", array("menuName" =>         // line 12
($context["menuName"] ?? null))), "indexLabel" =>         // line 13
($context["menuName"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:GlobalMenu:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 13,  31 => 12,  30 => 7,  29 => 6,  27 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:GlobalMenu:update.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/GlobalMenu/update.html.twig");
    }
}
