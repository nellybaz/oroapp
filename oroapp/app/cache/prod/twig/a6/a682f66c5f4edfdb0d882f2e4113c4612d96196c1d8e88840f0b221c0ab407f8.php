<?php

/* OroCommerceMenuBundle:CustomerGroupMenu:index.html.twig */
class __TwigTemplate_0304d684bfac8b51dcd73ae344430276f7930112562bfad97ee89f22879b17f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", "OroCommerceMenuBundle:CustomerGroupMenu:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%customerGroup%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "name", array()))));
        // line 5
        $context["breadcrumbs"] = array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_view", array("id" => $this->getAttribute(        // line 10
($context["entity"] ?? null), "id", array()))), "indexLabel" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array()))), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label"));
        // line 16
        $context["gridTemplate"] = "OroCommerceMenuBundle:CustomerGroupMenu:widget/contextIndex.html.twig";
        // line 17
        $context["tabRoute"] = "oro_commerce_menu_customer_group_menu_context_index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:CustomerGroupMenu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,  33 => 17,  31 => 16,  29 => 11,  28 => 10,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:CustomerGroupMenu:index.html.twig", "");
    }
}
