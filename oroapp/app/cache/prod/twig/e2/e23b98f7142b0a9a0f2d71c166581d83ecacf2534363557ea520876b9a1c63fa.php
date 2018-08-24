<?php

/* OroCommerceMenuBundle:CustomerGroupMenu:view.html.twig */
class __TwigTemplate_7a43d24edb8e896c99c62b22cbfedff11b706c8c3a75c9e8667b658a9fe8c433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate:view.html.twig", "OroCommerceMenuBundle:CustomerGroupMenu:view.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCommerceMenuBundle:menuUpdate:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["routePrefix"] = "oro_commerce_menu_customer_group_menu_";

        $this->env->getExtension("oro_title")->set(array("params" => array("%customerGroup%" => $this->getAttribute(        // line 5
($context["customerGroup"] ?? null), "name", array()), "%title%" => $this->getAttribute(($context["entity"] ?? null), "name", array()))));
        // line 7
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_view", array("id" => $this->getAttribute(        // line 13
($context["customerGroup"] ?? null), "id", array()))), "indexLabel" => $this->getAttribute(        // line 14
($context["customerGroup"] ?? null), "name", array())), 1 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_customer_group_menu_index", array("id" => $this->getAttribute(        // line 17
($context["customerGroup"] ?? null), "id", array()))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label"))), "entityTitle" => $this->getAttribute(        // line 21
($context["entity"] ?? null), "name", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:CustomerGroupMenu:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,  34 => 21,  33 => 17,  32 => 14,  31 => 13,  30 => 8,  29 => 7,  27 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:CustomerGroupMenu:view.html.twig", "");
    }
}
