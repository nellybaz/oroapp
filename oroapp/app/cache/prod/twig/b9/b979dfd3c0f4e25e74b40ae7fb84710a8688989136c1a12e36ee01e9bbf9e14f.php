<?php

/* OroCommerceMenuBundle:CustomerGroupMenu:update.html.twig */
class __TwigTemplate_274c79f80a65c048290dd2ff295fe103ac1260f10fca874f7ad6d41f547de6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate:update.html.twig", "OroCommerceMenuBundle:CustomerGroupMenu:update.html.twig", 1);
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
        $context["routePrefix"] = "oro_commerce_menu_customer_group_menu_";

        $this->env->getExtension("oro_title")->set(array("params" => array("%customerGroup%" => $this->getAttribute(        // line 5
($context["customerGroup"] ?? null), "name", array()), "%title%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "title", array())))));
        // line 6
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_view", array("id" => $this->getAttribute(        // line 12
($context["customerGroup"] ?? null), "id", array()))), "indexLabel" => $this->getAttribute(        // line 13
($context["customerGroup"] ?? null), "name", array())), 1 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_customer_group_menu_index", array("id" => $this->getAttribute(        // line 16
($context["customerGroup"] ?? null), "id", array()))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label")), 2 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_customer_group_menu_view", array("menuName" =>         // line 20
($context["menuName"] ?? null), "context" => ($context["context"] ?? null))), "indexLabel" =>         // line 21
($context["menuName"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:CustomerGroupMenu:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,  35 => 21,  34 => 20,  33 => 16,  32 => 13,  31 => 12,  30 => 7,  29 => 6,  27 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:CustomerGroupMenu:update.html.twig", "");
    }
}
