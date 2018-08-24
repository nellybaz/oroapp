<?php

/* OroProductBundle:Product/dialog:selectUpsellProducts.html.twig */
class __TwigTemplate_3c916abb7c3db89e0a3b84a5b299793706fc7d8d9e336cffc9b770f6816945d3 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product/dialog:selectUpsellProducts.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content\">
    <input
        type=\"hidden\"
        data-role=\"related-items-appended-ids\"
        name=\"productAppendUpsellSelect\"
        id=\"productAppendUpsellSelect\"
        value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "addedProductRelatedItems"), "method"), ","), "html", null, true);
        echo "\"
    />
    <input
        type=\"hidden\"
        data-role=\"related-items-removed-ids\"
        name=\"productRemoveUpsellSelect\"
        id=\"productRemoveUpsellSelect\"
        value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removedProductRelatedItems"), "method"), ","), "html", null, true);
        echo "\"
    />

    ";
        // line 18
        echo $context["dataGrid"]->getrenderGrid("products-upsell-products-select", array("productId" => $this->getAttribute(($context["product"] ?? null), "id", array()), "relatedItemsIds" => $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->getUpsellProductsIds(($context["product"] ?? null))));
        echo "

    <div class=\"widget-actions form-actions\">
        <button class=\"btn\" type=\"reset\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-primary\" data-role=\"related-items-submit-button\" type=\"button\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.widgets.select_products"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/dialog:selectUpsellProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  51 => 21,  45 => 18,  39 => 15,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/dialog:selectUpsellProducts.html.twig", "");
    }
}
