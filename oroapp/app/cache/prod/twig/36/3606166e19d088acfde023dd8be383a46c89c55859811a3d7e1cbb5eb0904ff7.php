<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view:related_products.html.twig */
class __TwigTemplate_09a7a690bba3ab16aa62076eeef8e18a5db6781cf194499727604fd8f7a8f68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_view_related_products_container_widget' => array($this, 'block__product_view_related_products_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_view_related_products_container_widget', $context, $blocks);
    }

    public function block__product_view_related_products_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__related-items product-view__related-products"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view:related_products.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view:related_products.html.twig", "");
    }
}
