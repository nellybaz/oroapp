<?php

/* OroCatalogBundle:layouts/blank/oro_catalog_frontend_product_allproducts:product_index.html.twig */
class __TwigTemplate_f314d05b622fd252067cf27831c42a78a7d9441d8a27f83564cd2695e67fefb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_category_title_widget' => array($this, 'block__category_title_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_category_title_widget', $context, $blocks);
    }

    public function block__category_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " category-title"));
        // line 5
        echo "
    <h1 ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h1>
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:layouts/blank/oro_catalog_frontend_product_allproducts:product_index.html.twig";
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
        return new Twig_Source("", "OroCatalogBundle:layouts/blank/oro_catalog_frontend_product_allproducts:product_index.html.twig", "");
    }
}
