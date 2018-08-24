<?php

/* OroProductBundle:Product:view.html.twig */
class __TwigTemplate_21281e53079f9a6a457b30d7126d94cf65ff9074deb3b4a6cb123c94b51176cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroProductBundle:Product:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product:view.html.twig", 2);
        // line 3
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:Product:view.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroProductBundle:Product:view.html.twig", 4);
        // line 5
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product:view.html.twig", 5);
        // line 6
        $context["relatedProductsDataGrid"] = $this->loadTemplate("OroProductBundle:Product/RelatedItems:macros.html.twig", "OroProductBundle:Product:view.html.twig", 6);

        $this->env->getExtension("oro_title")->set(array("params" => array("%sku%" => (($this->getAttribute(        // line 8
($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%name%" => (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 12
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 15
($context["entity"] ?? null), "sku", array()) . " - ") . $this->getAttribute(($context["entity"] ?? null), "defaultName", array())));
        // line 17
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 23
        if ( !$this->getAttribute(($context["entity"] ?? null), "status", array())) {
            // line 24
            echo "            ";
            // line 25
            echo "        ";
        } elseif (($this->getAttribute(($context["entity"] ?? null), "status", array()) == twig_constant("STATUS_ENABLED", ($context["entity"] ?? null)))) {
            // line 26
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.status.enabled"), "html", null, true);
            echo "</div>
        ";
        } elseif (($this->getAttribute(        // line 27
($context["entity"] ?? null), "status", array()) == twig_constant("STATUS_DISABLED", ($context["entity"] ?? null)))) {
            // line 28
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.status.disabled"), "html", null, true);
            echo "</div>
        ";
        }
        // line 30
        echo "    </div>
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_info", array("id" => $this->getAttribute(        // line 37
($context["entity"] ?? null), "id", array())))));
        // line 38
        echo "
    ";
        $context["productInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        ";
        echo $context["UI"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.descriptions.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "defaultDescription", array())), ($context["entity"] ?? null), "defaultDescription", "More", "Less");
        echo "
    ";
        $context["productDescription"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        ob_start();
        // line 44
        echo "        ";
        echo $context["UI"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.short_descriptions.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "defaultShortDescription", array())), ($context["entity"] ?? null), "defaultShortDescription", "More", "Less");
        echo "
    ";
        $context["productShortDescription"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        ob_start();
        // line 48
        echo "        ";
        $this->loadTemplate("OroProductBundle:Product:view.html.twig", "OroProductBundle:Product:view.html.twig", 48, "1007201536")->display(array_merge($context, array("product" => ($context["entity"] ?? null))));
        // line 52
        echo "    ";
        $context["productInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
    ";
        // line 54
        $context["dataBlocks"] = array("general" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array("sku" =>         // line 61
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), $this->getAttribute(($context["entity"] ?? null), "sku", array())), "names" =>         // line 62
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.names.label"), $this->getAttribute(($context["entity"] ?? null), "defaultName", array())), "info" =>         // line 63
($context["productInfo"] ?? null), "featured" =>         // line 64
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.featured.label"), (($this->getAttribute(($context["entity"] ?? null), "featured", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.featured.yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.featured.no")))), "newArrival" =>         // line 65
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.new_arrival.label"), (($this->getAttribute(($context["entity"] ?? null), "newArrival", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.new_arrival.yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.new_arrival.no")))), "brand" =>         // line 66
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.label"), $this->getAttribute(($context["entity"] ?? null), "brand", array())))), 1 => array("data" => array("shortDescriptions" =>         // line 70
($context["productShortDescription"] ?? null), "descriptions" =>         // line 71
($context["productDescription"] ?? null))))));
        // line 76
        echo "
    ";
        // line 77
        if ($this->getAttribute(($context["entity"] ?? null), "isConfigurable", array())) {
            // line 78
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.productVariants"), "priority" => 100, "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 85
$context["dataGrid"]->getrenderGrid("product-product-variants-view", array("parentProduct" => $this->getAttribute(            // line 87
($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
            // line 93
            echo "    ";
        }
        // line 94
        echo "
    ";
        // line 95
        $context["imagesData"] = "";
        // line 96
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "images", array()), "count", array())) {
            // line 97
            echo "        ";
            $context["imagesData"] = $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.images.label"),             // line 99
$context["Image"]->getrenderProductImages($this->getAttribute(($context["entity"] ?? null), "images", array()), ($context["imageTypes"] ?? null)));
            // line 102
            echo "    ";
        } else {
            // line 103
            echo "        ";
            $context["imagesData"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.form.no_images");
            // line 104
            echo "    ";
        }
        // line 105
        echo "
    ";
        // line 106
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("images" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.images"), "priority" => 200, "subblocks" => array(0 => array("data" => array("images" =>         // line 111
($context["imagesData"] ?? null)))))));
        // line 115
        echo "
    ";
        // line 116
        $context["unitOfQuantityData"] = array();
        // line 117
        echo "
    ";
        // line 118
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitFieldsSettingsExtension')->isProductPrimaryUnitVisible(($context["entity"] ?? null))) {
            // line 119
            echo "        ";
            ob_start();
            // line 120
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.product.productunitprecision.representation", $this->getAttribute($this->getAttribute(            // line 121
($context["entity"] ?? null), "primaryUnitPrecision", array()), "precision", array()), array("{{ label }}" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.product_unit." . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 123
($context["entity"] ?? null), "primaryUnitPrecision", array()), "unit", array()), "code", array())) . ".label.full")))), "html", null, true);
            // line 125
            echo "
        ";
            $context["primaryUnitPrecisionElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 127
            echo "        ";
            $context["unitOfQuantityData"] = array("unitOfQuantity" => $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.unit.label"), ($context["primaryUnitPrecisionElement"] ?? null)));
            // line 128
            echo "    ";
        }
        // line 129
        echo "
    ";
        // line 130
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "additionalUnitPrecisions", array()), "count", array())) {
            // line 131
            echo "        ";
            $context["titles"] = array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.unit.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.precision.label"), 2 => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.of") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.product_unit." . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 134
($context["entity"] ?? null), "primaryUnitPrecision", array()), "unit", array()), "code", array())) . ".label.full"))), 3 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.sell.label"));
            // line 137
            echo "        ";
            $context["rows"] = array();
            // line 138
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "additionalUnitPrecisions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unitPrecision"]) {
                // line 139
                echo "            ";
                $context["sell"] = (($this->getAttribute($context["unitPrecision"], "sell", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.sell_yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.sell_not.label")));
                // line 140
                echo "            ";
                $context["row"] = array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.product_unit." . $this->getAttribute($this->getAttribute(                // line 141
$context["unitPrecision"], "unit", array()), "code", array())) . ".label.full")), 1 => $this->getAttribute(                // line 142
$context["unitPrecision"], "precision", array()), 2 => $this->getAttribute(                // line 143
$context["unitPrecision"], "conversionRate", array()), 3 =>                 // line 144
($context["sell"] ?? null));
                // line 146
                echo "            ";
                $context["rows"] = twig_array_merge(($context["rows"] ?? null), array(0 => ($context["row"] ?? null)));
                // line 147
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unitPrecision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "
        ";
            // line 149
            $context["unitOfQuantityData"] = twig_array_merge(($context["unitOfQuantityData"] ?? null), array("additionalUnitPrecisions" =>             // line 150
$context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.additional_unit_precisions.label"), $context["UI"]->getrenderTable(($context["titles"] ?? null), ($context["rows"] ?? null), "grid table table-bordered unit-table"))));
            // line 152
            echo "
    ";
        }
        // line 154
        echo "
    ";
        // line 155
        if ( !twig_test_empty(($context["unitOfQuantityData"] ?? null))) {
            // line 156
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("unit_of_quantity" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.primary_unit_precision.label"), "priority" => 300, "subblocks" => array(0 => array("data" =>             // line 161
($context["unitOfQuantityData"] ?? null))))));
            // line 165
            echo "    ";
        }
        // line 166
        echo "
    ";
        // line 167
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("inventory" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.inventory"), "priority" => 400, "subblocks" => array(0 => array("title" => "", "data" => array("inventory_status" =>         // line 174
$context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.inventory_status.label"), (((("<span class=\"product-inventory-status-" . $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "inventoryStatus", array()), "id", array())) . "\">") . twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "inventoryStatus", array()))) . "</span>"))))))));
        // line 179
        echo "
    ";
        // line 180
        $context["relatedItemsTabsItems"] = array();
        // line 181
        echo "    ";
        $context["relatedItemsSubblocks"] = array();
        // line 182
        echo "
    ";
        // line 183
        if ((($context["relatedProductsEnabled"] ?? null) && $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_related_products_edit"))) {
            // line 184
            echo "        ";
            $context["relatedItemsTabsItems"] = twig_array_merge(($context["relatedItemsTabsItems"] ?? null), array(0 => array("id" => "products-related-products-view", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.tabs.relatedProducts"))));
            // line 188
            echo "        ";
            $context["relatedItemsSubblocks"] = twig_array_merge(($context["relatedItemsSubblocks"] ?? null), array(0 =>             // line 189
$context["relatedProductsDataGrid"]->getrenderGrid("products-related-products-view", array("relatedItemsIds" => $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->getRelatedProductsIds(($context["entity"] ?? null)))), 1 => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "oro_product_related_items_view", array("entity" =>             // line 190
($context["entity"] ?? null)))));
            // line 192
            echo "    ";
        }
        // line 193
        echo "
    ";
        // line 194
        if ((($context["upsellProductsEnabled"] ?? null) && $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_upsell_products_edit"))) {
            // line 195
            echo "        ";
            $context["relatedItemsTabsItems"] = twig_array_merge(($context["relatedItemsTabsItems"] ?? null), array(0 => array("id" => "products-upsell-products-view", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.tabs.upsellProducts"))));
            // line 199
            echo "        ";
            $context["relatedItemsSubblocks"] = twig_array_merge(($context["relatedItemsSubblocks"] ?? null), array(0 =>             // line 200
$context["relatedProductsDataGrid"]->getrenderGrid("products-upsell-products-view", array("relatedItemsIds" => $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->getUpsellProductsIds(($context["entity"] ?? null)))), 1 => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "oro_product_upsell_products_view", array("entity" =>             // line 201
($context["entity"] ?? null)))));
            // line 203
            echo "    ";
        }
        // line 204
        echo "
    ";
        // line 205
        if (twig_length_filter($this->env, ($context["relatedItemsSubblocks"] ?? null))) {
            // line 206
            echo "        ";
            $context["headerLinkContent"] = "";
            // line 207
            echo "        ";
            if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_product_update")) {
                // line 208
                echo "            ";
                $context["headerLinkContent"] = $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_related_items_update", array("id" => $this->getAttribute(                // line 209
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.quick_edit.label"), "iCss" => "fa-edit", "class" => "quick-editable pull-right"));
                // line 214
                echo "        ";
            }
            // line 215
            echo "
        ";
            // line 216
            if ((twig_length_filter($this->env, ($context["relatedItemsTabsItems"] ?? null)) == 1)) {
                // line 217
                echo "            ";
                $context["relatedItemsTabs"] = "";
                // line 218
                echo "        ";
            } else {
                // line 219
                echo "            ";
                ob_start();
                // line 220
                echo "                <div ";
                echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroproduct/js/app/components/related-items-tabs-component", "options" => array("data" =>                 // line 223
($context["relatedItemsTabsItems"] ?? null))));
                // line 225
                echo "></div>
            ";
                $context["relatedItemsTabs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 227
                echo "        ";
            }
            // line 228
            echo "
        ";
            // line 229
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("relatedItems" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\RelatedItemExtension')->getRelatedItemsTranslationKey()), "headerLinkContent" =>             // line 232
($context["headerLinkContent"] ?? null), "priority" => 450, "subblocks" => array(0 => array("data" => twig_array_merge(array(0 =>             // line 235
($context["relatedItemsTabs"] ?? null)), ($context["relatedItemsSubblocks"] ?? null)))))));
            // line 239
            echo "    ";
        }
        // line 240
        echo "
    ";
        // line 241
        if ((($context["pageTemplate"] ?? null) == null)) {
            // line 242
            echo "        ";
            $context["pageTemplatesData"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.form.no_page_template");
            // line 243
            echo "    ";
        } else {
            // line 244
            echo "        ";
            $context["pageTemplatesData"] = $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.page_template.label"), $this->getAttribute(            // line 246
($context["pageTemplate"] ?? null), "label", array()));
            // line 248
            echo "    ";
        }
        // line 249
        echo "
    ";
        // line 250
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("design" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.design"), "priority" => 700, "subblocks" => array(0 => array("data" => array("pageTemplate" =>         // line 255
($context["pageTemplatesData"] ?? null)))))));
        // line 259
        echo "
    ";
        // line 260
        $context["id"] = "product-view";
        // line 261
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 262
        echo "
    ";
        // line 263
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 263,  406 => 262,  403 => 261,  401 => 260,  398 => 259,  396 => 255,  395 => 250,  392 => 249,  389 => 248,  387 => 246,  385 => 244,  382 => 243,  379 => 242,  377 => 241,  374 => 240,  371 => 239,  369 => 235,  368 => 232,  367 => 229,  364 => 228,  361 => 227,  357 => 225,  355 => 223,  353 => 220,  350 => 219,  347 => 218,  344 => 217,  342 => 216,  339 => 215,  336 => 214,  334 => 209,  332 => 208,  329 => 207,  326 => 206,  324 => 205,  321 => 204,  318 => 203,  316 => 201,  315 => 200,  313 => 199,  310 => 195,  308 => 194,  305 => 193,  302 => 192,  300 => 190,  299 => 189,  297 => 188,  294 => 184,  292 => 183,  289 => 182,  286 => 181,  284 => 180,  281 => 179,  279 => 174,  278 => 167,  275 => 166,  272 => 165,  270 => 161,  268 => 156,  266 => 155,  263 => 154,  259 => 152,  257 => 150,  256 => 149,  253 => 148,  247 => 147,  244 => 146,  242 => 144,  241 => 143,  240 => 142,  239 => 141,  237 => 140,  234 => 139,  229 => 138,  226 => 137,  224 => 134,  222 => 131,  220 => 130,  217 => 129,  214 => 128,  211 => 127,  207 => 125,  205 => 123,  204 => 121,  202 => 120,  199 => 119,  197 => 118,  194 => 117,  192 => 116,  189 => 115,  187 => 111,  186 => 106,  183 => 105,  180 => 104,  177 => 103,  174 => 102,  172 => 99,  170 => 97,  167 => 96,  165 => 95,  162 => 94,  159 => 93,  157 => 87,  156 => 85,  154 => 78,  152 => 77,  149 => 76,  147 => 71,  146 => 70,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  139 => 54,  136 => 53,  133 => 52,  130 => 48,  128 => 47,  125 => 46,  119 => 44,  116 => 43,  110 => 41,  107 => 40,  103 => 38,  101 => 37,  99 => 35,  96 => 34,  93 => 33,  88 => 30,  82 => 28,  80 => 27,  75 => 26,  72 => 25,  70 => 24,  68 => 23,  62 => 21,  59 => 20,  52 => 17,  50 => 15,  49 => 12,  47 => 11,  44 => 10,  40 => 1,  38 => 8,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:view.html.twig", "");
    }
}


/* OroProductBundle:Product:view.html.twig */
class __TwigTemplate_21281e53079f9a6a457b30d7126d94cf65ff9074deb3b4a6cb123c94b51176cd_1007201536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 48
        $this->parent = $this->loadTemplate("@OroProduct/Product/widget/info.html.twig", "OroProductBundle:Product:view.html.twig", 48);
        $this->blocks = array(
            'sku_and_name' => array($this, 'block_sku_and_name'),
            'images' => array($this, 'block_images'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@OroProduct/Product/widget/info.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 49
    public function block_sku_and_name($context, array $blocks = array())
    {
    }

    // line 50
    public function block_images($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 50,  470 => 49,  452 => 48,  409 => 263,  406 => 262,  403 => 261,  401 => 260,  398 => 259,  396 => 255,  395 => 250,  392 => 249,  389 => 248,  387 => 246,  385 => 244,  382 => 243,  379 => 242,  377 => 241,  374 => 240,  371 => 239,  369 => 235,  368 => 232,  367 => 229,  364 => 228,  361 => 227,  357 => 225,  355 => 223,  353 => 220,  350 => 219,  347 => 218,  344 => 217,  342 => 216,  339 => 215,  336 => 214,  334 => 209,  332 => 208,  329 => 207,  326 => 206,  324 => 205,  321 => 204,  318 => 203,  316 => 201,  315 => 200,  313 => 199,  310 => 195,  308 => 194,  305 => 193,  302 => 192,  300 => 190,  299 => 189,  297 => 188,  294 => 184,  292 => 183,  289 => 182,  286 => 181,  284 => 180,  281 => 179,  279 => 174,  278 => 167,  275 => 166,  272 => 165,  270 => 161,  268 => 156,  266 => 155,  263 => 154,  259 => 152,  257 => 150,  256 => 149,  253 => 148,  247 => 147,  244 => 146,  242 => 144,  241 => 143,  240 => 142,  239 => 141,  237 => 140,  234 => 139,  229 => 138,  226 => 137,  224 => 134,  222 => 131,  220 => 130,  217 => 129,  214 => 128,  211 => 127,  207 => 125,  205 => 123,  204 => 121,  202 => 120,  199 => 119,  197 => 118,  194 => 117,  192 => 116,  189 => 115,  187 => 111,  186 => 106,  183 => 105,  180 => 104,  177 => 103,  174 => 102,  172 => 99,  170 => 97,  167 => 96,  165 => 95,  162 => 94,  159 => 93,  157 => 87,  156 => 85,  154 => 78,  152 => 77,  149 => 76,  147 => 71,  146 => 70,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  139 => 54,  136 => 53,  133 => 52,  130 => 48,  128 => 47,  125 => 46,  119 => 44,  116 => 43,  110 => 41,  107 => 40,  103 => 38,  101 => 37,  99 => 35,  96 => 34,  93 => 33,  88 => 30,  82 => 28,  80 => 27,  75 => 26,  72 => 25,  70 => 24,  68 => 23,  62 => 21,  59 => 20,  52 => 17,  50 => 15,  49 => 12,  47 => 11,  44 => 10,  40 => 1,  38 => 8,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:view.html.twig", "");
    }
}
