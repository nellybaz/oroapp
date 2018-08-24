<?php

/* OroProductBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig */
class __TwigTemplate_5888d1929a75058d6b134298763fc04dfcf5064ff3af87475ec52efbd64cf9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_view_container_widget' => array($this, 'block__product_view_container_widget'),
            '_product_view_primary_wrapper_widget' => array($this, 'block__product_view_primary_wrapper_widget'),
            '_product_view_primary_container_widget' => array($this, 'block__product_view_primary_container_widget'),
            '_product_view_aside_container_widget' => array($this, 'block__product_view_aside_container_widget'),
            '_product_view_main_container_widget' => array($this, 'block__product_view_main_container_widget'),
            '_product_view_content_container_widget' => array($this, 'block__product_view_content_container_widget'),
            '_product_view_specification_container_widget' => array($this, 'block__product_view_specification_container_widget'),
            '_product_view_description_container_widget' => array($this, 'block__product_view_description_container_widget'),
            '_product_view_attribute_group_general_attribute_localized_fallback_descriptions_widget' => array($this, 'block__product_view_attribute_group_general_attribute_localized_fallback_descriptions_widget'),
            '_product_view_brand_container_widget' => array($this, 'block__product_view_brand_container_widget'),
            '_product_view_additional_container_widget' => array($this, 'block__product_view_additional_container_widget'),
            '_product_view_attribute_group_general_attribute_localized_fallback_names_widget' => array($this, 'block__product_view_attribute_group_general_attribute_localized_fallback_names_widget'),
            '_product_view_attribute_group_general_attribute_text_sku_widget' => array($this, 'block__product_view_attribute_group_general_attribute_text_sku_widget'),
            '_product_view_attribute_group_general_attribute_text_brand_widget' => array($this, 'block__product_view_attribute_group_general_attribute_text_brand_widget'),
            '_product_require_js_config_widget' => array($this, 'block__product_require_js_config_widget'),
            '_product_view_line_item_container_widget' => array($this, 'block__product_view_line_item_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('_product_view_container_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_product_view_primary_wrapper_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('_product_view_primary_container_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('_product_view_aside_container_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('_product_view_main_container_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('_product_view_content_container_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('_product_view_specification_container_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('_product_view_description_container_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('_product_view_attribute_group_general_attribute_localized_fallback_descriptions_widget', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('_product_view_brand_container_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('_product_view_additional_container_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('_product_view_attribute_group_general_attribute_localized_fallback_names_widget', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('_product_view_attribute_group_general_attribute_text_sku_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('_product_view_attribute_group_general_attribute_text_brand_widget', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('_product_require_js_config_widget', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('_product_view_line_item_container_widget', $context, $blocks);
    }

    // line 2
    public function block__product_view_container_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig", 3);
        // line 4
        echo "
    ";
        // line 5
        $context["productImage"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "imagesByType", array(0 => "listing"), "method", false, true), "first", array(), "any", false, true), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "imagesByType", array(0 => "listing"), "method", false, true), "first", array(), "any", false, true), "image", array()), null)) : (null));
        // line 6
        echo "    ";
        $context["productImageUrl"] = $context["Image"]->geturl(($context["productImage"] ?? null), "product_small");
        // line 7
        echo "
    ";
        // line 8
        $context["modelAttr"] = $this->getAttribute(($context["product"] ?? null), "jsonSerialize", array(), "method");
        // line 9
        echo "    ";
        $context["modelAttr"] = twig_array_merge(($context["modelAttr"] ?? null), array("imageUrl" =>         // line 10
($context["productImageUrl"] ?? null)));
        // line 12
        echo "
    ";
        // line 13
        if ( !(null === ($context["parentProduct"] ?? null))) {
            // line 14
            echo "        ";
            $context["modelAttr"] = twig_array_merge(($context["modelAttr"] ?? null), array("parentProduct" => $this->getAttribute(($context["parentProduct"] ?? null), "id", array())));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroproduct/js/app/views/base-product-view", "modelAttr" =>         // line 20
($context["modelAttr"] ?? null)), "itemscope" => "", "itemtype" => "http://schema.org/Product", "data-layout" => "separate", "data-role" => "product-item", "~class" => ((" product-view " . ((        // line 26
array_key_exists("productTheme", $context)) ? (_twig_default_filter(($context["productTheme"] ?? null), "default")) : ("default"))) . "-theme")));
        // line 28
        echo "
    <div ";
        // line 29
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 30
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 34
    public function block__product_view_primary_wrapper_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__primary-wrapper"));
        // line 38
        echo "
    <div ";
        // line 39
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 40
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 44
    public function block__product_view_primary_container_widget($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__primary"));
        // line 48
        echo "
    <div ";
        // line 49
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 50
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 54
    public function block__product_view_aside_container_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__aside"));
        // line 58
        echo "
    <div ";
        // line 59
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 60
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 64
    public function block__product_view_main_container_widget($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__main"));
        // line 68
        echo "
    <div ";
        // line 69
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 70
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    // line 74
    public function block__product_view_content_container_widget($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__content"));
        // line 78
        echo "
    <div ";
        // line 79
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 80
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 84
    public function block__product_view_specification_container_widget($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__specification", "data-role" => "layout-subtree-loading-container"));
        // line 89
        echo "
    <div ";
        // line 90
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 91
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 95
    public function block__product_view_description_container_widget($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__description", "itemprop" => "description"));
        // line 100
        echo "
    <div ";
        // line 101
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 102
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 106
    public function block__product_view_attribute_group_general_attribute_localized_fallback_descriptions_widget($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $context["description"] = twig_trim_filter($this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["translated_value"] ?? null)));
        // line 108
        echo "    ";
        if (($context["description"] ?? null)) {
            // line 109
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " collapse-view collapse-view--overflow", "~data-page-component-viewport" => array("viewport" => array("maxScreenType" => "tablet"), "widgetModule" => "oroui/js/widget/collapse-widget", "animationSpeed" => 0, "checkOverflow" => true, "open" => false)));
            // line 121
            echo "
    <div ";
            // line 122
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
        <div class=\"collapse-view__container tiny-container\" data-collapse-container>
            ";
            // line 124
            echo ($context["description"] ?? null);
            echo "
        </div>
        <a href=\"javascript:void(0)\" class=\"collapse-view__trigger\" data-collapse-trigger>
            <i class=\"collapse-view__trigger-icon fa-chevron-down\"></i>
        </a>
    </div>
    ";
        }
    }

    // line 133
    public function block__product_view_brand_container_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__brand"));
        // line 137
        echo "
    <div ";
        // line 138
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 139
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 143
    public function block__product_view_additional_container_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__additional"));
        // line 147
        echo "
    <div ";
        // line 148
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 149
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 154
    public function block__product_view_attribute_group_general_attribute_localized_fallback_names_widget($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-title", "itemprop" => "name"));
        // line 159
        echo "
    <h1 ";
        // line 160
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["translated_value"] ?? null));
        echo "</h1>
";
    }

    // line 163
    public function block__product_view_attribute_group_general_attribute_text_sku_widget($context, array $blocks = array())
    {
        // line 164
        echo "    <p class=\"sku\">
        ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.index.item"), "html", null, true);
        echo " <span class=\"sku__code\" itemprop=\"sku\">";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(($context["entity"] ?? null), "sku", array()));
        echo "</span>
    </p>
";
    }

    // line 169
    public function block__product_view_attribute_group_general_attribute_text_brand_widget($context, array $blocks = array())
    {
        // line 170
        echo "    <div class=\"brand\">
        <span class=\"product-view-brand\">";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.label"), "html", null, true);
        echo ":</span>
        <span class=\"product-view-brand-title\" itemprop=\"brand\">";
        // line 172
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</span>
    </div>
";
    }

    // line 176
    public function block__product_require_js_config_widget($context, array $blocks = array())
    {
        // line 177
        echo "    <script>
        require({
            config: {
                'oroui/js/app/views/tab-collection-view': {templateClassName: 'product-attributes-tabs'},
                'oroui/js/app/views/tab-item-view': {
                    className: 'product-attributes-tabs__item',
                    templateClassName: 'product-attributes-tabs__link'
                }
            }
        });
    </script>
";
    }

    // line 190
    public function block__product_view_line_item_container_widget($context, array $blocks = array())
    {
        // line 191
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " line-item-form"));
        // line 194
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
    ";
        // line 195
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  457 => 195,  452 => 194,  449 => 191,  446 => 190,  431 => 177,  428 => 176,  421 => 172,  417 => 171,  414 => 170,  411 => 169,  402 => 165,  399 => 164,  396 => 163,  388 => 160,  385 => 159,  382 => 155,  379 => 154,  372 => 149,  368 => 148,  365 => 147,  362 => 144,  359 => 143,  352 => 139,  348 => 138,  345 => 137,  342 => 134,  339 => 133,  327 => 124,  322 => 122,  319 => 121,  316 => 109,  313 => 108,  310 => 107,  307 => 106,  300 => 102,  296 => 101,  293 => 100,  290 => 96,  287 => 95,  280 => 91,  276 => 90,  273 => 89,  270 => 85,  267 => 84,  260 => 80,  256 => 79,  253 => 78,  250 => 75,  247 => 74,  240 => 70,  236 => 69,  233 => 68,  230 => 65,  227 => 64,  220 => 60,  216 => 59,  213 => 58,  210 => 55,  207 => 54,  200 => 50,  196 => 49,  193 => 48,  190 => 45,  187 => 44,  180 => 40,  176 => 39,  173 => 38,  170 => 35,  167 => 34,  160 => 30,  156 => 29,  153 => 28,  151 => 26,  150 => 20,  148 => 16,  145 => 15,  142 => 14,  140 => 13,  137 => 12,  135 => 10,  133 => 9,  131 => 8,  128 => 7,  125 => 6,  123 => 5,  120 => 4,  117 => 3,  114 => 2,  110 => 190,  107 => 189,  105 => 176,  102 => 175,  100 => 169,  97 => 168,  95 => 163,  92 => 162,  90 => 154,  87 => 153,  85 => 143,  82 => 142,  80 => 133,  77 => 132,  75 => 106,  72 => 105,  70 => 95,  67 => 94,  65 => 84,  62 => 83,  60 => 74,  57 => 73,  55 => 64,  52 => 63,  50 => 54,  47 => 53,  45 => 44,  42 => 43,  40 => 34,  37 => 33,  35 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:layout.html.twig", "");
    }
}
