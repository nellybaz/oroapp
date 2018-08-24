<?php

/* OroPricingBundle:layouts/blank/imports:prices.html.twig */
class __TwigTemplate_a401ec9c35daa93eefb3250573e1826e24f5a191125c7d55439ac40febca6322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_price_container' => array($this, 'block_product_price_container'),
            'product_price' => array($this, 'block_product_price'),
            'product_price_value' => array($this, 'block_product_price_value'),
            'product_price_not_found' => array($this, 'block_product_price_not_found'),
            'product_price_hint' => array($this, 'block_product_price_hint'),
            'product_price_hint_content' => array($this, 'block_product_price_hint_content'),
            'product_price_listed' => array($this, 'block_product_price_listed'),
            'product_price_table' => array($this, 'block_product_price_table'),
            'product_price_table_body' => array($this, 'block_product_price_table_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('product_price_container', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_price', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('product_price_value', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('product_price_not_found', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('product_price_hint', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('product_price_hint_content', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('product_price_listed', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('product_price_table', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('product_price_table_body', $context, $blocks);
    }

    // line 1
    public function block_product_price_container($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["product"] ?? null), "prices", array(), "any", true, true)) {
            // line 3
            echo "        ";
            $context["productPrices"] = $this->getAttribute(($context["product"] ?? null), "prices", array());
            // line 4
            echo "    ";
        }
        // line 5
        echo "    ";
        if ( !(null === ($context["productPrices"] ?? null))) {
            // line 6
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("productPrices" =>             // line 7
($context["productPrices"] ?? null), "product" =>             // line 8
($context["product"] ?? null), "isPriceUnitsVisible" =>             // line 9
($context["isPriceUnitsVisible"] ?? null)));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oropricing/js/app/views/base-product-prices-view", "changeQuantity" => true, "modelAttr" => array("prices" =>         // line 19
($context["productPrices"] ?? null)))));
        // line 23
        echo "
    <div ";
        // line 24
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 25
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 29
    public function block_product_price($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["buttonsId"] = (twig_replace_filter(($context["id"] ?? null), array("_price" => "")) . "_line_item_form_buttons");
        // line 31
        echo "    ";
        if (($this->getAttribute(($context["blocks"] ?? null), ($context["buttonsId"] ?? null), array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), ($context["buttonsId"] ?? null), array(), "array"), "children", array())))) {
            // line 32
            echo "        ";
            if (($context["productPrices"] ?? null)) {
                // line 33
                echo "            ";
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-price__main"));
                // line 36
                echo "            <div ";
                $this->displayBlock("block_attributes", $context, $blocks);
                echo ">
                ";
                // line 37
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
                echo "
            </div>
        ";
            } else {
                // line 40
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product_prices.empty_prices"), "html", null, true);
                echo "
        ";
            }
            // line 42
            echo "    ";
        }
    }

    // line 45
    public function block_product_price_value($context, array $blocks = array())
    {
        // line 46
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
            data-name=\"price\">
        <span class=\"product-price__label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.pricelist.index.your_price"), "html", null, true);
        echo "</span>
        ";
        // line 49
        $context["firstPrice"] = twig_first($this->env, ($context["productPrices"] ?? null));
        // line 50
        echo "        <span class=\"product-price__main-box\">
            <span class=\"product-price__value\" data-name=\"price-value\" itemscope=\"itemscope\" itemtype=\"http://schema.org/Offer\" itemprop=\"offers\">
                ";
        // line 52
        ob_start();
        // line 53
        echo "                ";
        if (($context["firstPrice"] ?? null)) {
            // line 54
            echo "                    <span itemprop=\"priceCurrency\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["firstPrice"] ?? null), "currency", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencySymbolByCurrency($this->getAttribute(($context["firstPrice"] ?? null), "currency", array())), "html", null, true);
            echo "</span>
                    <span itemprop=\"price\" content=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["firstPrice"] ?? null), "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["firstPrice"] ?? null), "price", array()), 2, ".", ","), "html", null, true);
            echo "</span>
                ";
        }
        // line 57
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "            </span>
            <span> / </span>
            <span class=\"product-price__unit\" data-name=\"unit\">
                <span class=\"product-price__unit-full\">
                    ";
        // line 62
        echo twig_escape_filter($this->env, ((($context["firstPrice"] ?? null)) ? ($this->getAttribute(($context["firstPrice"] ?? null), "formatted_unit", array())) : ("")), "html", null, true);
        echo "
                </span>
                <span class=\"product-price__unit-short\">
                    ";
        // line 65
        echo twig_escape_filter($this->env, ((($context["firstPrice"] ?? null)) ? ($this->getAttribute(($context["firstPrice"] ?? null), "unit", array())) : ("")), "html", null, true);
        echo "
                </span>
            </span>
        </span>
    </div>
";
    }

    // line 72
    public function block_product_price_not_found($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " hidden"));
        // line 76
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 77
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "
                data-name=\"price-not-found\">
            ";
            // line 79
            if (($context["productPrices"] ?? null)) {
                // line 80
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product_prices.price_not_found"), "html", null, true);
                echo "
            ";
            } else {
                // line 82
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product_prices.empty_prices"), "html", null, true);
                echo "
            ";
            }
            // line 84
            echo "        </div>
    ";
        }
    }

    // line 88
    public function block_product_price_hint($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        if (($context["productPrices"] ?? null)) {
            // line 90
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-name" => "prices-hint", "data-placement" => "bottom", "data-close" => "false", "data-trigger" => "hover", "data-container" => "body", "data-class" => "prices-hint-content"));
            // line 98
            echo "    ";
        }
        // line 99
        echo "
    <div ";
        // line 100
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
            class=\"product-price__hint\">
        ";
        // line 102
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 106
    public function block_product_price_hint_content($context, array $blocks = array())
    {
        // line 107
        echo "    <div data-name=\"prices-hint-content\" class=\"hidden\">
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-uppercase\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.quantity.short_label"), "html", null, true);
        echo "</th>";
        // line 112
        echo "                <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.unit_price.long_label"), "html", null, true);
        echo "</th>";
        // line 113
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 116
        $context["shownUnit"] = "";
        // line 117
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productPrices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 118
            echo "                ";
            if ((($context["shownUnit"] ?? null) != $this->getAttribute($context["price"], "unit", array()))) {
                // line 119
                echo "                    ";
                $context["shownUnit"] = $this->getAttribute($context["price"], "unit", array());
                // line 120
                echo "                    <tr>
                        <td colspan=\"2\" class=\"text-center\">
                            ";
                // line 122
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo "<br/>";
                }
                // line 123
                echo "                            <strong>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["shownUnit"] ?? null))), "html", null, true);
                echo "</strong>
                        </td>
                    </tr>
                ";
            }
            // line 127
            echo "                <tr>
                    <td>
                        ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "quantity", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "formatted_price", array()), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 141
    public function block_product_price_listed($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-price__listed"));
        // line 145
        echo "    ";
        if (($context["productPrices"] ?? null)) {
            // line 146
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
                <span class=\"product-price__listed-label\">";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.pricelist.index.listed_price"), "html", null, true);
            echo "</span>
                ";
            // line 148
            $context["pricesPerUnits"] = array();
            // line 149
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productPrices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 150
                echo "                    ";
                $context["unit"] = $this->getAttribute($context["price"], "unit", array());
                // line 151
                echo "                    ";
                if (( !$this->getAttribute(($context["pricesPerUnits"] ?? null), ($context["unit"] ?? null), array(), "array", true, true) || ($this->getAttribute($context["price"], "quantity", array()) < $this->getAttribute($this->getAttribute(($context["pricesPerUnits"] ?? null), ($context["unit"] ?? null), array(), "array"), "quantity", array())))) {
                    // line 152
                    echo "                        ";
                    $context["pricesPerUnits"] = twig_array_merge(($context["pricesPerUnits"] ?? null), array(                    // line 153
($context["unit"] ?? null) => $context["price"]));
                    // line 155
                    echo "                    ";
                }
                // line 156
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pricesPerUnits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 158
                echo "                    <span class=\"product-price__listed-box\"
                          title=\"";
                // line 159
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.applicable_from", array("%amount%" => $this->getAttribute($context["price"], "quantity", array())));
                echo "\">
                        <span class=\"product-price__listed-value\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "formatted_price", array()), "html", null, true);
                echo "</span>
                        <span> / </span>
                        <span class=\"product-price__unit\">
                            <span class=\"product-price__unit-full\">
                                ";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "formatted_unit", array()), "html", null, true);
                echo "
                            </span>
                            <span class=\"product-price__unit-short\">
                                ";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "unit", array()), "html", null, true);
                echo "
                            </span>
                        </span>
                    </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "        </div>
    ";
        }
    }

    // line 176
    public function block_product_price_table($context, array $blocks = array())
    {
        // line 177
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-prices"));
        // line 180
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <table class=\"product-prices__table\">
            <thead class=\"product-prices__thead\">
                <tr class=\"product-prices__tr\">
                    <th style=\"width: 40%\" class=\"product-prices__th text-uppercase\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.quantity.short_label"), "html", null, true);
        echo "</th>";
        // line 185
        echo "                    <th style=\"width: 60%\" class=\"product-prices__th\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.unit_price.long_label"), "html", null, true);
        echo "</th>";
        // line 186
        echo "                </tr>
            </thead>
            ";
        // line 188
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </table>
    </div>
";
    }

    // line 193
    public function block_product_price_table_body($context, array $blocks = array())
    {
        // line 194
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oropricing/js/app/views/base-product-prices-view", "changeQuantity" => true, "modelAttr" => array("prices" =>         // line 200
($context["productPrices"] ?? null))), "~class" => " product-prices__tbody"));
        // line 205
        echo "
    ";
        // line 206
        if (twig_length_filter($this->env, ($context["productPrices"] ?? null))) {
            // line 207
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("itemprop" => "offers", "itemscope" => "", "itemtype" => "http://schema.org/Offer"));
            // line 212
            echo "    ";
        }
        // line 213
        echo "
    <tbody ";
        // line 214
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 215
        $context["currentUnit"] = "";
        // line 216
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productPrices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 217
            echo "            ";
            if ($this->getAttribute($context["price"], "formatted_unit", array(), "any", true, true)) {
                // line 218
                echo "                ";
                if ((($context["currentUnit"] ?? null) != $this->getAttribute($context["price"], "formatted_unit", array()))) {
                    // line 219
                    echo "                    ";
                    $context["currentUnit"] = $this->getAttribute($context["price"], "formatted_unit", array());
                    // line 220
                    echo "                    <tr class=\"product-prices__tr\">
                        <td colspan=\"2\" class=\"product-prices__td\">
                            ";
                    // line 222
                    if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                        echo "<br/>";
                    }
                    // line 223
                    echo "                            ";
                    if (($context["isPriceUnitsVisible"] ?? null)) {
                        // line 224
                        echo "                                <strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["currentUnit"] ?? null)), "html", null, true);
                        echo "</strong>
                            ";
                    }
                    // line 226
                    echo "                        </td>
                    </tr>
                ";
                }
                // line 229
                echo "                <tr class=\"product-prices__tr\" itemprop=\"priceSpecification\" itemscope itemtype=\"http://schema.org/UnitPriceSpecification\">
                    <td class=\"product-prices__td\" itemprop=\"referenceQuantity\" itemscope itemtype=\"http://schema.org/QuantitativeValue\">
                        <span itemprop=\"value\" content=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "quantity", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "quantity", array()), "html", null, true);
                echo "</span>
                        <meta itemprop=\"unitCode\" content=\"";
                // line 232
                echo twig_escape_filter($this->env, ($context["currentUnit"] ?? null), "html", null, true);
                echo "\"/>
                    </td>
                    <td class=\"product-prices__td\">
                        <span itemprop=\"priceCurrency\" content=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "currency", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencySymbolByCurrency($this->getAttribute($context["price"], "currency", array())), "html", null, true);
                echo "</span>
                        <span itemprop=\"price\">";
                // line 236
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["price"], "price", array()), 2, ".", ","), "html", null, true);
                echo "</span>
                    </td>
                </tr>
            ";
            }
            // line 240
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "    </tbody>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/imports:prices.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  614 => 241,  600 => 240,  593 => 236,  587 => 235,  581 => 232,  575 => 231,  571 => 229,  566 => 226,  560 => 224,  557 => 223,  553 => 222,  549 => 220,  546 => 219,  543 => 218,  540 => 217,  522 => 216,  520 => 215,  516 => 214,  513 => 213,  510 => 212,  507 => 207,  505 => 206,  502 => 205,  500 => 200,  498 => 194,  495 => 193,  487 => 188,  483 => 186,  479 => 185,  476 => 184,  468 => 180,  465 => 177,  462 => 176,  456 => 172,  445 => 167,  439 => 164,  432 => 160,  428 => 159,  425 => 158,  420 => 157,  414 => 156,  411 => 155,  409 => 153,  407 => 152,  404 => 151,  401 => 150,  396 => 149,  394 => 148,  390 => 147,  385 => 146,  382 => 145,  379 => 142,  376 => 141,  369 => 136,  351 => 132,  345 => 129,  341 => 127,  333 => 123,  329 => 122,  325 => 120,  322 => 119,  319 => 118,  301 => 117,  299 => 116,  294 => 113,  290 => 112,  287 => 111,  281 => 107,  278 => 106,  271 => 102,  266 => 100,  263 => 99,  260 => 98,  257 => 90,  254 => 89,  251 => 88,  245 => 84,  239 => 82,  233 => 80,  231 => 79,  225 => 77,  222 => 76,  219 => 73,  216 => 72,  206 => 65,  200 => 62,  194 => 58,  191 => 57,  184 => 55,  177 => 54,  174 => 53,  172 => 52,  168 => 50,  166 => 49,  162 => 48,  156 => 46,  153 => 45,  148 => 42,  142 => 40,  136 => 37,  131 => 36,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  109 => 25,  105 => 24,  102 => 23,  100 => 19,  99 => 13,  96 => 12,  93 => 11,  91 => 9,  90 => 8,  89 => 7,  87 => 6,  84 => 5,  81 => 4,  78 => 3,  75 => 2,  72 => 1,  68 => 193,  65 => 192,  63 => 176,  60 => 175,  58 => 141,  55 => 140,  53 => 106,  50 => 105,  48 => 88,  45 => 87,  43 => 72,  40 => 71,  38 => 45,  35 => 44,  33 => 29,  30 => 28,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/imports:prices.html.twig", "");
    }
}
