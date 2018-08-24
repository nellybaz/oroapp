<?php

/* OroOrderBundle:Order:update.html.twig */
class __TwigTemplate_e857d95a19e6e610add6397e6be29077ac84c2ee732d4cfd7dfbfd3452fd22ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroOrderBundle:Order:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrderBundle:Order:update.html.twig", 2);
        // line 3
        $context["SM"] = $this->loadTemplate("OroOrderBundle:Order:macros.html.twig", "OroOrderBundle:Order:update.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%identifier%" => (($this->getAttribute(        // line 6
($context["entity"] ?? null), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "identifier", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_label"))));
        // line 10
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_create")));
        // line 12
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroOrderBundle:Form:fields.html.twig"));
        // line 41
        $context["pageComponent"] = array("module" => "oroorder/js/app/components/entry-point-component", "options" => array("route" => "oro_order_entry_point", "routeParams" => array("id" => (($this->getAttribute(        // line 43
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), 0)) : (0)))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 17
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_index"));
        echo "
    ";
        // line 18
        $context["html"] = $context["UI"]->getsaveAndCloseButton();
        // line 19
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_order_update"))) {
            // line 20
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton());
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context["html"] = (($context["html"] ?? null) . $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "order_update_additional_nav_buttons", array("entity" => ($context["entity"] ?? null))));
        // line 23
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "
";
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 28
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 32
($context["entity"] ?? null), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "identifier", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 34
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_label")));
            // line 37
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroOrderBundle:Order:update.html.twig", 37)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 38
            echo "    ";
        }
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["id"] = "order-edit";
        // line 48
        echo "
    ";
        // line 49
        ob_start();
        // line 50
        echo "        <div class=\"subtotal-error\"></div>
        ";
        // line 51
        $this->loadTemplate("OroPricingBundle:Totals:totals.html.twig", "OroOrderBundle:Order:update.html.twig", 51)->display(array("pageComponent" => "oroorder/js/app/components/totals-component", "options" => array("totals" => $this->getAttribute(        // line 53
($context["orderData"] ?? null), "totals", array()))));
        // line 55
        echo "    ";
        $context["subtotals"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
    ";
        // line 57
        ob_start();
        // line 58
        echo "
        <div data-page-component-module=\"oroorder/js/app/components/related-data-component\"
             data-page-component-options=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("selectors" => array("customer" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 62
($context["form"] ?? null), "customer", array()), "vars", array()), "id", array())), "customerUser" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["form"] ?? null), "customerUser", array()), "vars", array()), "id", array()))))), "html", null, true);
        // line 65
        echo "\">
            <div data-page-component-module=\"orocustomer/js/app/components/customer-selection-component\">
                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerUser", array()), 'row');
        echo "
            </div>
        </div>
    ";
        $context["ownerSelectors"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 72
        echo "
    ";
        // line 73
        ob_start();
        // line 74
        echo "        ";
        $context["subtotalType"] = twig_constant("Oro\\Bundle\\PricingBundle\\SubtotalProcessor\\Provider\\LineItemSubtotalProvider::TYPE");
        // line 75
        echo "        <div class=\"order-line-items\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroorder/js/app/views/line-items-view", "tierPrices" => (($this->getAttribute(        // line 79
($context["orderData"] ?? null), "tierPrices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["orderData"] ?? null), "tierPrices", array()), array())) : (array())), "currency" => $this->getAttribute(        // line 80
($context["entity"] ?? null), "currency", array()), "customer" => (((null === $this->getAttribute(        // line 81
($context["entity"] ?? null), "customer", array()))) ? (null) : ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array()))), "subtotalType" =>         // line 82
($context["subtotalType"] ?? null))), "html", null, true);
        // line 83
        echo "\"
             data-layout=\"separate\">
            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lineItems", array()), 'widget');
        echo "
            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lineItems", array()), 'errors');
        echo "
        </div>

        ";
        // line 89
        $context["entityDataOptions"] = array("entityData" => ($context["orderData"] ?? null));
        // line 90
        echo "        <div
                data-page-component-module=\"oroorder/js/app/components/data-load-component\"
                data-page-component-options=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["entityDataOptions"] ?? null)), "html", null, true);
        echo "\"></div>
    ";
        $context["lineItems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 94
        echo "
    ";
        // line 95
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 101
($context["ownerSelectors"] ?? null), 1 =>         // line 102
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'row'), 2 =>         // line 103
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.currency.label"), $this->getAttribute(($context["entity"] ?? null), "currency", array())))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.order_line_items"), "content_attr" => array("class" => "order-line-items-content"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 112
($context["lineItems"] ?? null))))));
        // line 116
        echo "
    ";
        // line 117
        if (($context["isBillingAddressGranted"] ?? null)) {
            // line 118
            echo "        ";
            ob_start();
            // line 119
            echo "            <div
                data-layout=\"separate\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroorder/js/app/views/address-view", "type" => "billing", "selectors" => array("address" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 126
($context["form"] ?? null), "billingAddress", array()), "customerAddress", array()), "vars", array()), "id", array())), "subtotalsFields" => array(0 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 128
($context["form"] ?? null), "billingAddress", array()), "country", array()), "vars", array()), "id", array())), 1 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 129
($context["form"] ?? null), "billingAddress", array()), "street", array()), "vars", array()), "id", array())), 2 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 130
($context["form"] ?? null), "billingAddress", array()), "street2", array()), "vars", array()), "id", array())), 3 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 131
($context["form"] ?? null), "billingAddress", array()), "city", array()), "vars", array()), "id", array())), 4 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 132
($context["form"] ?? null), "billingAddress", array()), "region", array()), "vars", array()), "id", array())), 5 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 133
($context["form"] ?? null), "billingAddress", array()), "postalCode", array()), "vars", array()), "id", array())))))), "html", null, true);
            // line 136
            echo "\">
                ";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "billingAddress", array()), 'widget');
            echo "
            </div>
        ";
            $context["billingAddress"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 140
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.billing_address.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 143
($context["billingAddress"] ?? null)))))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (($context["isShippingAddressGranted"] ?? null)) {
            // line 149
            echo "        ";
            ob_start();
            // line 150
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shippingAddress", array(), "any", false, true), "customerAddress", array(), "any", true, true)) {
                // line 151
                echo "                ";
                $context["idAddressBlock"] = ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shippingAddress", array()), "customerAddress", array()), "vars", array()), "id", array()));
                // line 152
                echo "            ";
            } else {
                // line 153
                echo "                ";
                $context["idAddressBlock"] = null;
                // line 154
                echo "            ";
            }
            // line 155
            echo "            <div
                data-layout=\"separate\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroorder/js/app/views/address-view", "type" => "shipping", "selectors" => array("address" =>             // line 162
($context["idAddressBlock"] ?? null), "subtotalsFields" => array(0 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 164
($context["form"] ?? null), "shippingAddress", array()), "country", array()), "vars", array()), "id", array())), 1 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 165
($context["form"] ?? null), "shippingAddress", array()), "street", array()), "vars", array()), "id", array())), 2 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 166
($context["form"] ?? null), "shippingAddress", array()), "street2", array()), "vars", array()), "id", array())), 3 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 167
($context["form"] ?? null), "shippingAddress", array()), "city", array()), "vars", array()), "id", array())), 4 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 168
($context["form"] ?? null), "shippingAddress", array()), "region", array()), "vars", array()), "id", array())), 5 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 169
($context["form"] ?? null), "shippingAddress", array()), "postalCode", array()), "vars", array()), "id", array())))))), "html", null, true);
            // line 172
            echo "\">
                ";
            // line 173
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingAddress", array()), 'widget');
            echo "
            </div>
        ";
            $context["shippingAddress"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 176
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_address.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 179
($context["shippingAddress"] ?? null)))))));
            // line 182
            echo "    ";
        }
        // line 183
        echo "
    ";
        // line 184
        ob_start();
        // line 185
        echo "        <div class=\"possible-shipping-methods-info\">
            ";
        // line 186
        echo $context["UI"]->getrenderAttribute($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.form.shipping_options.label"), (("<div class=\"possible_shipping_methods_container\">" .         // line 187
$context["SM"]->getrenderPossibleShippingMethods(($context["form"] ?? null), ($context["entity"] ?? null))) . "</div>"));
        // line 188
        echo "

            ";
        // line 190
        $context["options"] = array("view" => "oroorder/js/app/views/shipping-cost-view");
        // line 193
        echo "
            <div
                data-layout=\"separate\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
                ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "overriddenShippingCostAmount", array()), 'row');
        echo "
            </div>
        </div>
    ";
        $context["shippingInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 202
        echo "
    ";
        // line 203
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.shipping_information"), "subblocks" => array(0 => array("data" => array(0 =>         // line 206
($context["shippingInformation"] ?? null)))))));
        // line 209
        echo "
    ";
        // line 210
        $context["additionalData"] = array(0 =>         // line 211
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "poNumber", array()), 'row'), 1 =>         // line 212
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipUntil", array()), 'row'), 2 =>         // line 213
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerNotes", array()), 'row'));
        // line 215
        echo "
    ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 217
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 218
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 220
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 225
($context["additionalData"] ?? null))))));
            // line 228
            echo "    ";
        }
        // line 229
        echo "
    ";
        // line 230
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 231
            echo "        ";
            ob_start();
            // line 232
            echo "            <div class=\"oro-discount-collection-container\">
                ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discounts", array()), 'widget');
            echo "
                <div class=\"discounts-sum-error\">";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discounts", array()), 'errors');
            echo "</div>
                <div class=\"discounts-sum-error\">";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discountsSum", array()), 'row');
            echo "</div>
            </div>
        ";
            $context["discounts"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 238
            echo "
        ";
            // line 239
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("discounts" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.discounts"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>             // line 244
($context["discounts"] ?? null)))))));
            // line 248
            echo "    ";
        }
        // line 249
        echo "
    ";
        // line 250
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.subtotals"), "class" => "active", "priority" => 900, "subblocks" => array(0 => array("data" => array(0 =>         // line 255
($context["subtotals"] ?? null)))))));
        // line 258
        echo "
    ";
        // line 259
        $context["data"] = array("formErrors" =>         // line 260
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 261
($context["dataBlocks"] ?? null));
        // line 263
        echo "
    ";
        // line 264
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 264,  421 => 263,  419 => 261,  418 => 260,  417 => 259,  414 => 258,  412 => 255,  411 => 250,  408 => 249,  405 => 248,  403 => 244,  402 => 239,  399 => 238,  393 => 235,  389 => 234,  385 => 233,  382 => 232,  379 => 231,  377 => 230,  374 => 229,  371 => 228,  369 => 225,  367 => 220,  364 => 219,  357 => 218,  354 => 217,  349 => 216,  346 => 215,  344 => 213,  343 => 212,  342 => 211,  341 => 210,  338 => 209,  336 => 206,  335 => 203,  332 => 202,  325 => 198,  321 => 197,  315 => 193,  313 => 190,  309 => 188,  307 => 187,  306 => 186,  303 => 185,  301 => 184,  298 => 183,  295 => 182,  293 => 179,  291 => 176,  285 => 173,  282 => 172,  280 => 169,  279 => 168,  278 => 167,  277 => 166,  276 => 165,  275 => 164,  274 => 162,  273 => 158,  268 => 155,  265 => 154,  262 => 153,  259 => 152,  256 => 151,  253 => 150,  250 => 149,  248 => 148,  245 => 147,  242 => 146,  240 => 143,  238 => 140,  232 => 137,  229 => 136,  227 => 133,  226 => 132,  225 => 131,  224 => 130,  223 => 129,  222 => 128,  221 => 126,  220 => 122,  215 => 119,  212 => 118,  210 => 117,  207 => 116,  205 => 112,  204 => 103,  203 => 102,  202 => 101,  201 => 95,  198 => 94,  193 => 92,  189 => 90,  187 => 89,  181 => 86,  177 => 85,  173 => 83,  171 => 82,  170 => 81,  169 => 80,  168 => 79,  167 => 77,  163 => 75,  160 => 74,  158 => 73,  155 => 72,  148 => 68,  144 => 67,  140 => 65,  138 => 63,  137 => 62,  136 => 60,  132 => 58,  130 => 57,  127 => 56,  124 => 55,  122 => 53,  121 => 51,  118 => 50,  116 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 38,  99 => 37,  96 => 36,  90 => 34,  88 => 32,  87 => 29,  85 => 28,  82 => 27,  79 => 26,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  58 => 18,  54 => 17,  48 => 15,  45 => 14,  41 => 1,  39 => 43,  38 => 41,  36 => 12,  34 => 10,  32 => 6,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order:update.html.twig", "");
    }
}
