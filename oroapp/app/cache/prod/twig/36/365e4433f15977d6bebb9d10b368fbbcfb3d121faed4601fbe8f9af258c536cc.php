<?php

/* OroPricingBundle:layouts/blank/imports/oro_product_price_table:oro_product_price_table.html.twig */
class __TwigTemplate_96015d78c9102d8544fdc4aaf3aa43839c550661b294c54e85f3bd8be4bfc256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroPricingBundle:layouts/blank/imports:prices.html.twig", "OroPricingBundle:layouts/blank/imports/oro_product_price_table:oro_product_price_table.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroPricingBundle:layouts/blank/imports:prices.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                '__oro_product_price_table__product_price_container_widget' => array($this, 'block___oro_product_price_table__product_price_container_widget'),
                '__oro_product_price_table__product_price_table_widget' => array($this, 'block___oro_product_price_table__product_price_table_widget'),
                '__oro_product_price_table__product_price_table_body_widget' => array($this, 'block___oro_product_price_table__product_price_table_body_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('__oro_product_price_table__product_price_container_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('__oro_product_price_table__product_price_table_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('__oro_product_price_table__product_price_table_body_widget', $context, $blocks);
    }

    // line 3
    public function block___oro_product_price_table__product_price_container_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("product_price_container", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block___oro_product_price_table__product_price_table_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock("product_price_table", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block___oro_product_price_table__product_price_table_body_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock("product_price_table_body", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/imports/oro_product_price_table:oro_product_price_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  71 => 11,  64 => 8,  61 => 7,  54 => 4,  51 => 3,  47 => 11,  44 => 10,  42 => 7,  39 => 6,  37 => 3,  34 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/imports/oro_product_price_table:oro_product_price_table.html.twig", "");
    }
}
