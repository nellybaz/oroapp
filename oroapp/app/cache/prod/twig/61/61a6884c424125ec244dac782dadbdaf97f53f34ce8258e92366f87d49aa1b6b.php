<?php

/* OroPricingBundle:layouts/blank/imports/oro_product_price:oro_product_price.html.twig */
class __TwigTemplate_461d9669712632b1789f3a9a0e29de166a266a43910f9096307f6c402fdb0bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroPricingBundle:layouts/blank/imports:prices.html.twig", "OroPricingBundle:layouts/blank/imports/oro_product_price:oro_product_price.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroPricingBundle:layouts/blank/imports:prices.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                '__oro_product_price__product_price_container_widget' => array($this, 'block___oro_product_price__product_price_container_widget'),
                '__oro_product_price__product_price_widget' => array($this, 'block___oro_product_price__product_price_widget'),
                '__oro_product_price__product_price_value_widget' => array($this, 'block___oro_product_price__product_price_value_widget'),
                '__oro_product_price__product_price_not_found_widget' => array($this, 'block___oro_product_price__product_price_not_found_widget'),
                '__oro_product_price__product_price_hint_widget' => array($this, 'block___oro_product_price__product_price_hint_widget'),
                '__oro_product_price__product_price_hint_content_widget' => array($this, 'block___oro_product_price__product_price_hint_content_widget'),
                '__oro_product_price__product_price_listed_widget' => array($this, 'block___oro_product_price__product_price_listed_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('__oro_product_price__product_price_container_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_product_price__product_price_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('__oro_product_price__product_price_value_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('__oro_product_price__product_price_not_found_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('__oro_product_price__product_price_hint_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('__oro_product_price__product_price_hint_content_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__oro_product_price__product_price_listed_widget', $context, $blocks);
    }

    // line 3
    public function block___oro_product_price__product_price_container_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-price"));
        // line 7
        echo "    ";
        $this->displayBlock("product_price_container", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block___oro_product_price__product_price_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayBlock("product_price", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block___oro_product_price__product_price_value_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayBlock("product_price_value", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block___oro_product_price__product_price_not_found_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock("product_price_not_found", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block___oro_product_price__product_price_hint_widget($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayBlock("product_price_hint", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block___oro_product_price__product_price_hint_content_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayBlock("product_price_hint_content", $context, $blocks);
        echo "
";
    }

    // line 30
    public function block___oro_product_price__product_price_listed_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayBlock("product_price_listed", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/imports/oro_product_price:oro_product_price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 31,  138 => 30,  131 => 27,  128 => 26,  121 => 23,  118 => 22,  111 => 19,  108 => 18,  101 => 15,  98 => 14,  91 => 11,  88 => 10,  81 => 7,  78 => 4,  75 => 3,  71 => 30,  68 => 29,  66 => 26,  63 => 25,  61 => 22,  58 => 21,  56 => 18,  53 => 17,  51 => 14,  48 => 13,  46 => 10,  43 => 9,  41 => 3,  38 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/imports/oro_product_price:oro_product_price.html.twig", "");
    }
}
