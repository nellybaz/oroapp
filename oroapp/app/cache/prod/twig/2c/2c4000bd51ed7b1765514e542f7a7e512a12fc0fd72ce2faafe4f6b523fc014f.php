<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.html.twig */
class __TwigTemplate_c4498373e115772986b06356dc7ce08ca848ce7309e441c3aba49ca3c6d20042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_totals__totals_widget' => array($this, 'block___oro_product_totals__totals_widget'),
            '__oro_product_totals__totals_wrapper_widget' => array($this, 'block___oro_product_totals__totals_wrapper_widget'),
            '__oro_product_totals__quantity_widget' => array($this, 'block___oro_product_totals__quantity_widget'),
            '__oro_product_totals__quantity_text_widget' => array($this, 'block___oro_product_totals__quantity_text_widget'),
            '__oro_product_totals__quantity_value_widget' => array($this, 'block___oro_product_totals__quantity_value_widget'),
            '__oro_product_totals__separator_widget' => array($this, 'block___oro_product_totals__separator_widget'),
            '__oro_product_totals__total_widget' => array($this, 'block___oro_product_totals__total_widget'),
            '__oro_product_totals__total_text_widget' => array($this, 'block___oro_product_totals__total_text_widget'),
            '__oro_product_totals__total_value_widget' => array($this, 'block___oro_product_totals__total_value_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_totals__totals_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('__oro_product_totals__totals_wrapper_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('__oro_product_totals__quantity_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('__oro_product_totals__quantity_text_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('__oro_product_totals__quantity_value_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('__oro_product_totals__separator_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('__oro_product_totals__total_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('__oro_product_totals__total_text_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('__oro_product_totals__total_value_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_totals__totals_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class_prefix"] = "product-totals";
        // line 3
        echo "
    ";
        // line 4
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("class_prefix" =>         // line 5
($context["class_prefix"] ?? null), "totals" => ((        // line 6
array_key_exists("totals", $context)) ? (_twig_default_filter(($context["totals"] ?? null), array())) : (array()))));
        // line 8
        echo "
    ";
        // line 9
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}"));
        // line 12
        echo "
    <div ";
        // line 13
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 14
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 18
    public function block___oro_product_totals__totals_wrapper_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__wrapper"));
        // line 22
        echo "
    <div ";
        // line 23
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 28
    public function block___oro_product_totals__quantity_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__total-quantity"));
        // line 32
        echo "
    <div ";
        // line 33
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 38
    public function block___oro_product_totals__quantity_text_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__label"));
        // line 42
        echo "
    <div ";
        // line 43
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 44
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 48
    public function block___oro_product_totals__quantity_value_widget($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__total-quantity-value", "data-role" => "total-quantity"));
        // line 53
        echo "
    <div ";
        // line 54
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["totals"] ?? null), "quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["totals"] ?? null), "quantity", array()), "")) : ("")), "html", null, true);
        echo "
    </div>
";
    }

    // line 59
    public function block___oro_product_totals__separator_widget($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__separator"));
        // line 63
        echo "
    <div ";
        // line 64
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">|</div>
";
    }

    // line 67
    public function block___oro_product_totals__total_widget($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__total-price"));
        // line 71
        echo "
    <div ";
        // line 72
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 73
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 77
    public function block___oro_product_totals__total_text_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__label"));
        // line 81
        echo "
    <div ";
        // line 82
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 83
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 87
    public function block___oro_product_totals__total_value_widget($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__total-price-value", "data-role" => "total-price"));
        // line 92
        echo "
    <div ";
        // line 93
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 94
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["totals"] ?? null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["totals"] ?? null), "price", array()), "")) : ("")), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 94,  248 => 93,  245 => 92,  242 => 88,  239 => 87,  232 => 83,  228 => 82,  225 => 81,  222 => 78,  219 => 77,  212 => 73,  208 => 72,  205 => 71,  202 => 68,  199 => 67,  193 => 64,  190 => 63,  187 => 60,  184 => 59,  177 => 55,  173 => 54,  170 => 53,  167 => 49,  164 => 48,  157 => 44,  153 => 43,  150 => 42,  147 => 39,  144 => 38,  137 => 34,  133 => 33,  130 => 32,  127 => 29,  124 => 28,  117 => 24,  113 => 23,  110 => 22,  107 => 19,  104 => 18,  97 => 14,  93 => 13,  90 => 12,  88 => 9,  85 => 8,  83 => 6,  82 => 5,  81 => 4,  78 => 3,  75 => 2,  72 => 1,  68 => 87,  65 => 86,  63 => 77,  60 => 76,  58 => 67,  55 => 66,  53 => 59,  50 => 58,  48 => 48,  45 => 47,  43 => 38,  40 => 37,  38 => 28,  35 => 27,  33 => 18,  30 => 17,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.html.twig");
    }
}
