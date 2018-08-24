<?php

/* OroCommerceMenuBundle:CustomerMenu:index.html.twig */
class __TwigTemplate_ec5971b7ee25f46ce1cc163aa43b1b941ec262b68d96a8db673064976d205365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", "OroCommerceMenuBundle:CustomerMenu:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%customer%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "name", array()))));
        // line 5
        $context["breadcrumbs"] = array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_view", array("id" => $this->getAttribute(        // line 10
($context["entity"] ?? null), "id", array()))), "indexLabel" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array()))), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label"));
        // line 17
        $context["gridTemplate"] = "OroCommerceMenuBundle:CustomerMenu:widget/contextIndex.html.twig";
        // line 18
        $context["tabRoute"] = "oro_commerce_menu_customer_menu_context_index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:CustomerMenu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,  33 => 18,  31 => 17,  29 => 11,  28 => 10,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:CustomerMenu:index.html.twig", "");
    }
}
