<?php

/* OroProductBundle:Product:selectUpsellProductsButton.html.twig */
class __TwigTemplate_f30b2a29fa03640aed322bb418a9166b090b780ee56a9c6d96ad233d350d6007 extends Twig_Template
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
        $context["relatedItemsUI"] = $this->loadTemplate("OroProductBundle:Product/RelatedItems:macros.html.twig", "OroProductBundle:Product:selectUpsellProductsButton.html.twig", 1);
        // line 2
        echo "
<div class=\"related-items-widget\">
    ";
        // line 4
        echo $context["relatedItemsUI"]->getrenderRelatedItemButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_possible_products_for_upsell_products", array("id" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()))), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.widgets.select_upsell_products.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.widgets.select_upsell_products.title", array("{{ sku }}" => $this->getAttribute(        // line 7
($context["entity"] ?? null), "sku", array()), "{{ name }}" => $this->getAttribute(($context["entity"] ?? null), "name", array()))),         // line 8
($context["upsellProductsLimit"] ?? null), "#productAppendUpsell", "#productRemoveUpsell",         // line 11
($context["gridName"] ?? null));
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:selectUpsellProductsButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  29 => 11,  28 => 8,  27 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:selectUpsellProductsButton.html.twig", "");
    }
}
