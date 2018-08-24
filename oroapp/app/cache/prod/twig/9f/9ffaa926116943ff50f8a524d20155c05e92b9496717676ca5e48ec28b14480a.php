<?php

/* OroAbandonedCartBundle:AbandonedCart:list.html.twig */
class __TwigTemplate_a00bc6783cdbeca7ca2361a1656eaffc1beab3ac03d82ad9f5de3d3d1045d814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroAbandonedCartBundle:AbandonedCart:list.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:list.html.twig", 2);
        // line 4
        $context["gridName"] = "oro-abandonedcart-list-grid";
        // line 5
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_abandoned_cart_list_create"))) {
            // line 9
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_label")));
            // line 12
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroAbandonedCartBundle:AbandonedCart:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAbandonedCartBundle:AbandonedCart:list.html.twig", "");
    }
}
