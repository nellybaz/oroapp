<?php

/* OroProductBundle:Product/dialog:selectRelatedProducts.html.twig */
class __TwigTemplate_60ceb2aa80161edf140ae6a5d49d36c31514150eb4763199ad7d333307df0a0d extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product/dialog:selectRelatedProducts.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content\">
    <input
        type=\"hidden\"
        data-role=\"related-items-appended-ids\"
        name=\"productAppendRelatedSelect\"
        id=\"productAppendRelatedSelect\"
        value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "addedProductRelatedItems"), "method"), ","), "html", null, true);
        echo "\"
    />
    <input
        type=\"hidden\"
        data-role=\"related-items-removed-ids\"
        name=\"productRemoveRelatedSelect\"
        id=\"productRemoveRelatedSelect\"
        value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removedProductRelatedItems"), "method"), ","), "html", null, true);
        echo "\"
    />

    ";
        // line 18
        echo $context["dataGrid"]->getrenderGrid("products-related-products-select", array("productId" => $this->getAttribute(($context["product"] ?? null), "id", array()), "relatedItemsIds" => $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->getRelatedProductsIds(($context["product"] ?? null))));
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
        return "OroProductBundle:Product/dialog:selectRelatedProducts.html.twig";
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
        return new Twig_Source("", "OroProductBundle:Product/dialog:selectRelatedProducts.html.twig", "");
    }
}
