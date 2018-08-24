<?php

/* OroProductBundle:Product/RelatedItems:upsellProducts.html.twig */
class __TwigTemplate_ca6c3ebb55dc03065475da4a292886d380e4587004707fca5a01564e65faf876 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product/RelatedItems:upsellProducts.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["gridName"] = "products-upsell-products-edit";
        // line 4
        echo "
";
        // line 5
        $context["relatedGridParams"] = array("relatedItemsIds" => $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->getUpsellProductsIds(        // line 6
($context["entity"] ?? null)), "_parameters" => array("data_in" => array(), "data_not_in" => array()));
        // line 12
        echo "
";
        // line 13
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "appendUpsell", array()), "vars", array()), "value", array()))) {
            // line 14
            echo "    ";
            $context["relatedGridParams"] = twig_array_merge(($context["relatedGridParams"] ?? null), array("_parameters" => twig_array_merge($this->getAttribute(            // line 15
($context["relatedGridParams"] ?? null), "_parameters", array()), array("data_in" => twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 16
($context["form"] ?? null), "appendUpsell", array()), "vars", array()), "value", array()), ",")))));
        }
        // line 20
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "removeUpsell", array()), "vars", array()), "value", array()))) {
            // line 21
            echo "    ";
            $context["relatedGridParams"] = twig_array_merge(($context["relatedGridParams"] ?? null), array("_parameters" => twig_array_merge($this->getAttribute(            // line 22
($context["relatedGridParams"] ?? null), "_parameters", array()), array("data_not_in" => twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
($context["form"] ?? null), "removeUpsell", array()), "vars", array()), "value", array()), ",")))));
        }
        // line 27
        echo "
<div id=\"upsell-products-block\">
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUpsell", array()), 'widget', array("id" => "productAppendUpsell"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUpsell", array()), 'widget', array("id" => "productRemoveUpsell"));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "oro_product_upsell_products_buttons", array("entity" =>         // line 32
($context["entity"] ?? null), "upsellProductsLimit" =>         // line 33
($context["upsellProductsLimit"] ?? null), "gridName" =>         // line 34
($context["gridName"] ?? null)));
        // line 35
        echo "
    ";
        // line 36
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["relatedGridParams"] ?? null));
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "oro_product_upsell_products_edit", array("entity" => ($context["entity"] ?? null)));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/RelatedItems:upsellProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  71 => 36,  68 => 35,  66 => 34,  65 => 33,  64 => 32,  63 => 31,  59 => 30,  55 => 29,  51 => 27,  48 => 23,  47 => 22,  45 => 21,  43 => 20,  40 => 16,  39 => 15,  37 => 14,  35 => 13,  32 => 12,  30 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/RelatedItems:upsellProducts.html.twig", "");
    }
}
