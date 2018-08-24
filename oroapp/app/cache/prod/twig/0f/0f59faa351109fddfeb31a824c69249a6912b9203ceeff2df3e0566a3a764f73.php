<?php

/* OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig */
class __TwigTemplate_6189dc56adbb50d27a26c7a0aa9a12f8b3994752e9b2636757de49d29a0af391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_datagrid_row_product_sticker_new_widget' => array($this, 'block__product_datagrid_row_product_sticker_new_widget'),
            '_product_datagrid_row_product_sticker_new_text_widget' => array($this, 'block__product_datagrid_row_product_sticker_new_text_widget'),
            '__oro_product_grid__product_widget' => array($this, 'block___oro_product_grid__product_widget'),
            '__oro_product_grid__product_image_holder_widget' => array($this, 'block___oro_product_grid__product_image_holder_widget'),
            '__oro_product_grid__product_view_widget' => array($this, 'block___oro_product_grid__product_view_widget'),
            '__oro_product_grid__product_popup_gallery_widget' => array($this, 'block___oro_product_grid__product_popup_gallery_widget'),
            '__oro_product_grid__product_view_image_widget' => array($this, 'block___oro_product_grid__product_view_image_widget'),
            '__oro_product_grid__product_title_widget' => array($this, 'block___oro_product_grid__product_title_widget'),
            '__oro_product_grid__product_details_widget' => array($this, 'block___oro_product_grid__product_details_widget'),
            '__oro_product_grid__product_price_container_widget' => array($this, 'block___oro_product_grid__product_price_container_widget'),
            '_product_datagrid_cell_matrixForm_widget' => array($this, 'block__product_datagrid_cell_matrixForm_widget'),
            '_product_datagrid_cell_matrix_form_fields_widget' => array($this, 'block__product_datagrid_cell_matrix_form_fields_widget'),
            '_product_item_select_row_widget' => array($this, 'block__product_item_select_row_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_datagrid_row_product_sticker_new_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_product_datagrid_row_product_sticker_new_text_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__oro_product_grid__product_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('__oro_product_grid__product_image_holder_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('__oro_product_grid__product_view_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('__oro_product_grid__product_popup_gallery_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('__oro_product_grid__product_view_image_widget', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('__oro_product_grid__product_title_widget', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('__oro_product_grid__product_details_widget', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('__oro_product_grid__product_price_container_widget', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('_product_datagrid_cell_matrixForm_widget', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('_product_datagrid_cell_matrix_form_fields_widget', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('_product_item_select_row_widget', $context, $blocks);
    }

    // line 1
    public function block__product_datagrid_row_product_sticker_new_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (((        // line 3
array_key_exists("product", $context) && $this->getAttribute(        // line 4
($context["product"] ?? null), "stickers", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute(        // line 5
($context["product"] ?? null), "stickers", array())))) {
            // line 7
            echo "        ";
            $context["stickers"] = $this->getAttribute(($context["product"] ?? null), "stickers", array());
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("stickers" => ((array_key_exists("stickers", $context)) ? (_twig_default_filter(($context["stickers"] ?? null), array())) : (array()))));
        echo "
";
    }

    // line 12
    public function block__product_datagrid_row_product_sticker_new_text_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (((        // line 14
array_key_exists("product", $context) && $this->getAttribute(        // line 15
($context["product"] ?? null), "stickers", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute(        // line 16
($context["product"] ?? null), "stickers", array())))) {
            // line 18
            echo "        ";
            $context["stickers"] = $this->getAttribute(($context["product"] ?? null), "stickers", array());
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("stickers" => ((array_key_exists("stickers", $context)) ? (_twig_default_filter(($context["stickers"] ?? null), array())) : (array()))));
        echo "
";
    }

    // line 23
    public function block___oro_product_grid__product_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["product"] = twig_array_merge(($context["datagrid_row"] ?? null), array("getDefaultName" => $this->getAttribute(        // line 25
($context["datagrid_row"] ?? null), "name", array())));
        // line 27
        echo "
    ";
        // line 28
        $context["matrixForm"] = $this->getAttribute(($context["product"] ?? null), "matrixForm", array());
        // line 29
        echo "    ";
        if ((($this->getAttribute(($context["matrixForm"] ?? null), "type", array()) == "inline") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), "product_datagrid_cell_matrix_wrapper", array()), "vars", array()), "visible", array()))) {
            // line 30
            echo "        ";
            // line 31
            echo "        ";
            $context["matrixForm"] = twig_array_merge(($context["matrixForm"] ?? null), array("type" => "none"));
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        $context["matrixFormType"] = $this->getAttribute(($context["matrixForm"] ?? null), "type", array());
        // line 36
        echo "
    ";
        // line 37
        $context["class_prefix"] = $this->getAttribute(($context["themeOptions"] ?? null), "currentRowView", array());
        // line 38
        echo "
    ";
        // line 39
        $context["modelAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(((array_key_exists("product", $context)) ? (_twig_default_filter(($context["product"] ?? null), array())) : (array())), array("imageUrl" => $this->getAttribute(        // line 40
($context["product"] ?? null), "image", array())));
        // line 42
        echo "
    ";
        // line 43
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("class_prefix" =>         // line 44
($context["class_prefix"] ?? null), "matrixForm" =>         // line 45
($context["matrixForm"] ?? null), "matrixFormType" => $this->getAttribute(        // line 46
($context["matrixForm"] ?? null), "type", array()), "totals" => (($this->getAttribute(        // line 47
($context["matrixForm"] ?? null), "totals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["matrixForm"] ?? null), "totals", array()), array())) : (array())), "product" =>         // line 48
($context["product"] ?? null)));
        // line 50
        echo "
    ";
        // line 51
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (((        // line 52
($context["matrixFormType"] ?? null) == "inline")) ? ("product-item__wrapper--{{ class_prefix }}") : ("")), "data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroproduct/js/app/views/base-product-view", "modelAttr" =>         // line 56
($context["modelAttr"] ?? null)), "data-layout" => "separate"));
        // line 60
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 61
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 65
    public function block___oro_product_grid__product_image_holder_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__image-holder product-item__image-holder--{{ class_prefix }}"));
        // line 69
        echo "
    <div ";
        // line 70
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 71
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 75
    public function block___oro_product_grid__product_view_widget($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig", 76);
        // line 77
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__preview"));
        // line 80
        echo "
    ";
        // line 81
        $context["isNoImage"] = true;
        // line 82
        echo "    ";
        if ($this->getAttribute(($context["product"] ?? null), "image", array(), "any", true, true)) {
            // line 83
            echo "        ";
            $context["isNoImage"] = (twig_trim_filter($this->getAttribute(($context["product"] ?? null), "image", array())) == twig_trim_filter(twig_escape_filter($this->env, $context["Image"]->geturl(null, "product_large"))));
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if ((($context["popup_gallery"] ?? null) &&  !($context["isNoImage"] ?? null))) {
            // line 87
            echo "        ";
            $context["options"] = array("ajaxMode" => true, "ajaxRoute" => "oro_product_frontend_ajax_images_by_id", "id" => $this->getAttribute(            // line 90
($context["product"] ?? null), "id", array()), "galleryFilter" => "product_gallery_popup", "alt" => $this->getAttribute(            // line 92
($context["product"] ?? null), "name", array()));
            // line 94
            echo "
        ";
            // line 95
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "orofrontend/js/app/components/popup-gallery-widget", "data-page-component-options" => twig_jsonencode_filter(            // line 97
($context["options"] ?? null))));
            // line 99
            echo "    ";
        }
        // line 100
        echo "
    <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "view_link", array()), "html", null, true);
        echo "\" ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 102
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </a>
";
    }

    // line 106
    public function block___oro_product_grid__product_popup_gallery_widget($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig", 107);
        // line 108
        echo "
    ";
        // line 109
        $context["isNoImage"] = true;
        // line 110
        echo "    ";
        if ($this->getAttribute(($context["product"] ?? null), "image", array(), "any", true, true)) {
            // line 111
            echo "        ";
            $context["isNoImage"] = (twig_last($this->env, twig_split_filter($this->env, twig_trim_filter($this->getAttribute(($context["product"] ?? null), "image", array())), "/")) == twig_last($this->env, twig_split_filter($this->env, twig_trim_filter(twig_escape_filter($this->env, $context["Image"]->geturl(null, "product_large"))), "/")));
            // line 112
            echo "    ";
        }
        // line 113
        echo "
    ";
        // line 114
        if ( !($context["isNoImage"] ?? null)) {
            // line 115
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " view-product-gallery", "data-trigger-gallery-open" => true));
            // line 119
            echo "
        <div ";
            // line 120
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "></div>
    ";
        }
    }

    // line 124
    public function block___oro_product_grid__product_view_image_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig", 125);
        // line 126
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig", 126);
        // line 127
        echo "
    ";
        // line 128
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__preview-picture", "data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/js/app/views/object-fit-polyfill-view")));
        // line 135
        echo "
    ";
        // line 136
        $context["attrImage"] = array("class" => " product-item__preview-image", "itemprop" => "image");
        // line 140
        echo "
    ";
        // line 141
        $context["image"] = (($this->getAttribute(($context["product"] ?? null), "image", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_trim_filter($this->getAttribute(($context["product"] ?? null), "image", array()), "/"))) : ($context["Image"]->geturl(null, "product_large")));
        // line 142
        echo "
    <picture ";
        // line 143
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo "\" ";
        echo $context["UI"]->getattributes(($context["attrImage"] ?? null));
        echo " alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
        echo "\">
    </picture>
";
    }

    // line 148
    public function block___oro_product_grid__product_title_widget($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__title product-item__title--{{ class_prefix }}"));
        // line 152
        echo "
    <h3 ";
        // line 153
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "view_link", array()), "html", null, true);
        echo "\"
           class=\"view-product\"";
        // line 155
        if (twig_in_filter("gallery-view", ($context["class_prefix"] ?? null))) {
            echo " data-page-component-line-clamp";
        }
        // line 156
        echo "           itemprop=\"url\"
        >
            <span itemprop=\"name\">";
        // line 158
        $this->displayBlock("container_widget", $context, $blocks);
        echo "</span>
        </a>
    </h3>
";
    }

    // line 163
    public function block___oro_product_grid__product_details_widget($context, array $blocks = array())
    {
        // line 164
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product__view-details-link product__view-details-link--{{ class_prefix }}"));
        // line 167
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "view_link", array()), "html", null, true);
        echo "\" class=\"link view-product\">
            ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.index.view_details"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    // line 174
    public function block___oro_product_grid__product_price_container_widget($context, array $blocks = array())
    {
        // line 175
        echo "    ";
        $this->displayBlock("product_price_container", $context, $blocks);
        echo "
";
    }

    // line 178
    public function block__product_datagrid_cell_matrixForm_widget($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        if ((($context["matrixFormType"] ?? null) == "inline")) {
            // line 180
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("prices" => $this->getAttribute(            // line 181
($context["product"] ?? null), "prices", array()), "matrixForm" => $this->getAttribute(            // line 182
($context["matrixForm"] ?? null), "form", array()), "rows" => $this->getAttribute(            // line 183
($context["matrixForm"] ?? null), "rows", array())));
            // line 185
            $this->displayBlock("container_widget", $context, $blocks);
        }
    }

    // line 189
    public function block__product_datagrid_cell_matrix_form_fields_widget($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        echo ($context["matrixForm"] ?? null);
        echo "
";
    }

    // line 193
    public function block__product_item_select_row_widget($context, array $blocks = array())
    {
        // line 194
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__select-row product-item__select-row--{{ class_prefix }}"));
        // line 197
        echo "
    ";
        // line 198
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 199
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <div data-page-component-module=\"oroproduct/js/app/datagrid/cell/backend-select-row-cell\"></div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  468 => 199,  466 => 198,  463 => 197,  460 => 194,  457 => 193,  450 => 190,  447 => 189,  442 => 185,  440 => 183,  439 => 182,  438 => 181,  436 => 180,  433 => 179,  430 => 178,  423 => 175,  420 => 174,  412 => 169,  408 => 168,  403 => 167,  400 => 164,  397 => 163,  389 => 158,  385 => 156,  381 => 155,  377 => 154,  373 => 153,  370 => 152,  367 => 149,  364 => 148,  353 => 144,  349 => 143,  346 => 142,  344 => 141,  341 => 140,  339 => 136,  336 => 135,  334 => 128,  331 => 127,  328 => 126,  325 => 125,  322 => 124,  315 => 120,  312 => 119,  309 => 115,  307 => 114,  304 => 113,  301 => 112,  298 => 111,  295 => 110,  293 => 109,  290 => 108,  287 => 107,  284 => 106,  277 => 102,  271 => 101,  268 => 100,  265 => 99,  263 => 97,  262 => 95,  259 => 94,  257 => 92,  256 => 90,  254 => 87,  252 => 86,  249 => 85,  246 => 84,  243 => 83,  240 => 82,  238 => 81,  235 => 80,  232 => 77,  229 => 76,  226 => 75,  219 => 71,  215 => 70,  212 => 69,  209 => 66,  206 => 65,  199 => 61,  194 => 60,  192 => 56,  191 => 52,  190 => 51,  187 => 50,  185 => 48,  184 => 47,  183 => 46,  182 => 45,  181 => 44,  180 => 43,  177 => 42,  175 => 40,  174 => 39,  171 => 38,  169 => 37,  166 => 36,  163 => 35,  160 => 34,  157 => 31,  155 => 30,  152 => 29,  150 => 28,  147 => 27,  145 => 25,  143 => 24,  140 => 23,  133 => 20,  130 => 19,  127 => 18,  125 => 16,  124 => 15,  123 => 14,  121 => 13,  118 => 12,  111 => 9,  108 => 8,  105 => 7,  103 => 5,  102 => 4,  101 => 3,  99 => 2,  96 => 1,  92 => 193,  89 => 192,  87 => 189,  84 => 188,  82 => 178,  79 => 177,  77 => 174,  74 => 173,  72 => 163,  69 => 162,  67 => 148,  64 => 147,  62 => 124,  59 => 123,  57 => 106,  54 => 105,  52 => 75,  49 => 74,  47 => 65,  44 => 64,  42 => 23,  39 => 22,  37 => 12,  34 => 11,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid_row.html.twig", "");
    }
}
