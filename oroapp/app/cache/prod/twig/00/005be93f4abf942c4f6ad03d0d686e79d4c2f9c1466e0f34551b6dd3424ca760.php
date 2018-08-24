<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:related_products.html.twig */
class __TwigTemplate_bf667fae1ed0b0c0c798abc6cfc5982ec6294097ddc476a8522efcab35e8b008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_view_related_products_container_widget' => array($this, 'block__product_view_related_products_container_widget'),
            '_two_column_related_products_widget' => array($this, 'block__two_column_related_products_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_view_related_products_container_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_two_column_related_products_widget', $context, $blocks);
    }

    // line 1
    public function block__product_view_related_products_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), "offsetGet", array(0 => "product_view_attributes_rest"), "method"), "count", array(), "method") == 0)) {
            // line 3
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__related-items product-view__related-products"));
            // line 6
            echo "
        <div ";
            // line 7
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 8
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 13
    public function block__two_column_related_products_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), "offsetGet", array(0 => "product_view_attributes_rest"), "method"), "count", array(), "method") > 0)) {
            // line 15
            echo "        <section ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " class=\"product-view__attribute-box\">
            <div class=\"tab-content__wrapper\">
                ";
            // line 17
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
            </div>
        </section>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:related_products.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 15,  57 => 14,  54 => 13,  46 => 8,  42 => 7,  39 => 6,  36 => 3,  33 => 2,  30 => 1,  26 => 13,  23 => 12,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:related_products.html.twig", "");
    }
}
