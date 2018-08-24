<?php

/* OroSaleBundle:Quote:update.html.twig */
class __TwigTemplate_90a23939ce02a57a37f8a41371a661d813906a02e50d5becd95163e0d6527cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSaleBundle:Quote:update.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 3
        $context["SM"] = $this->loadTemplate("OroOrderBundle:Order:macros.html.twig", "OroSaleBundle:Quote:update.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.entity_label"), "%id%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "qid", array()))));
        // line 7
        $context["formAction"] = ((array_key_exists("formAction", $context)) ? (_twig_default_filter(($context["formAction"] ?? null), (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_create"))))) : ((($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_create")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 11
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 12
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 15
($context["entity"] ?? null), "qid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "qid", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 17
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.entity_label")));
            // line 20
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSaleBundle:Quote:update.html.twig", 20)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 21
            echo "    ";
        }
    }

    // line 24
    public function block_navButtons($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_index")), "method"), "html", null, true);
        echo "
    ";
        // line 28
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sale_quote_view", "params" => array("id" => "\$id"))), "method");
        // line 32
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sale_quote_create"))) {
            // line 33
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_sale_quote_update", "params" => array("id" => "\$id"))), "method"));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["id"] = "quote-edit";
        // line 43
        echo "
    ";
        // line 44
        $context["quoteEntryPointEvents"] = array("before" => "entry-point:quote:load:before", "load" => "entry-point:quote:load", "after" => "entry-point:quote:load:after", "trigger" => "entry-point:quote:trigger", "init" => "entry-point:quote:init", "listenersOff" => "entry-point:listeners:off", "listenersOn" => "entry-point:listeners:on");
        // line 53
        echo "
    <div ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "oroorder/js/app/components/entry-point-component", "options" => array("_sourceElement" => ("#" . $this->getAttribute($this->getAttribute(        // line 57
($context["form"] ?? null), "vars", array()), "id", array())), "route" => "oro_quote_entry_point", "routeParams" => array("id" => (($this->getAttribute(        // line 59
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), 0)) : (0))), "events" =>         // line 60
($context["quoteEntryPointEvents"] ?? null)))), "method"), "html", null, true);
        // line 62
        echo "></div>

    ";
        // line 64
        ob_start();
        // line 65
        echo "        <div data-page-component-module=\"orosale/js/app/components/related-data-component\"
             data-page-component-options=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("formName" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()))), "html", null, true);
        echo "\">
            <div data-page-component-module=\"orocustomer/js/app/components/customer-selection-component\">
                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerUser", array()), 'row');
        echo "
            </div>
        </div>
    ";
        $context["ownerSelectors"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
    ";
        // line 74
        ob_start();
        // line 75
        echo "        <div class=\"quote-lineitems\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orosale/js/app/views/line-items-view", "tierPrices" => ((        // line 79
array_key_exists("tierPrices", $context)) ? (_twig_default_filter(($context["tierPrices"] ?? null), array())) : (array())), "tierPricesRoute" => "oro_pricing_price_by_customer", "customer" => (((null === $this->getAttribute(        // line 81
($context["entity"] ?? null), "customer", array()))) ? (null) : ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array()))), "currency" => $this->getAttribute(        // line 82
($context["entity"] ?? null), "currency", array()))), "html", null, true);
        // line 83
        echo "\"
             data-layout=\"separate\">
            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProducts", array()), 'widget');
        echo "
            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProducts", array()), 'errors');
        echo "
        </div>

        ";
        // line 89
        $context["entityDataOptions"] = array("entityData" => ($context["quoteData"] ?? null), "events" => ($context["quoteEntryPointEvents"] ?? null));
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
        ob_start();
        // line 96
        echo "        <div
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orofrontend/js/app/views/form-view", "selectors" => array("customer" => "input[name\$=\"[customer]\"]"))), "html", null, true);
        // line 103
        echo "\"
        >
            ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
        echo "
            ";
        // line 106
        echo twig_escape_filter($this->env, ($context["ownerSelectors"] ?? null), "html", null, true);
        echo "
            ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "validUntil", array()), 'row');
        echo "
            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "poNumber", array()), 'row');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipUntil", array()), 'row');
        echo "
            ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "assignedUsers", array()), 'row');
        echo "
            ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "assignedCustomerUsers", array()), 'row');
        echo "
        </div>
    ";
        $context["generalFields"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data-page-component-module" => "sadfas", "data" => array(0 =>         // line 121
($context["generalFields"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.quote_products"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 129
($context["lineItems"] ?? null))))));
        // line 135
        echo "
    ";
        // line 136
        if (($context["isShippingAddressGranted"] ?? null)) {
            // line 137
            echo "        ";
            ob_start();
            // line 138
            echo "            <div
                data-layout=\"separate\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orosale/js/app/views/address-view", "type" => "shipping", "selectors" => array("address" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 145
($context["form"] ?? null), "shippingAddress", array()), "customerAddress", array()), "vars", array()), "id", array())), "subtotalsFields" => array(0 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 147
($context["form"] ?? null), "shippingAddress", array()), "country", array()), "vars", array()), "id", array())), 1 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 148
($context["form"] ?? null), "shippingAddress", array()), "street", array()), "vars", array()), "id", array())), 2 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 149
($context["form"] ?? null), "shippingAddress", array()), "street2", array()), "vars", array()), "id", array())), 3 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 150
($context["form"] ?? null), "shippingAddress", array()), "city", array()), "vars", array()), "id", array())), 4 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 151
($context["form"] ?? null), "shippingAddress", array()), "region", array()), "vars", array()), "id", array())), 5 => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 152
($context["form"] ?? null), "shippingAddress", array()), "postalCode", array()), "vars", array()), "id", array())))))), "html", null, true);
            // line 155
            echo "\">
                ";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingAddress", array()), 'widget');
            echo "
            </div>
        ";
            $context["shippingAddress"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_address.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 162
($context["shippingAddress"] ?? null)))))));
            // line 165
            echo "    ";
        }
        // line 166
        echo "
    ";
        // line 167
        ob_start();
        // line 168
        echo "        <div class=\"possible-shipping-methods-info\">
            ";
        // line 169
        $context["possibleShippingMethodsView"] = "orosale/js/app/views/quote-possible-shipping-methods-view";
        // line 170
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderAttribute", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.shipping_method.label"), 1 => (("<div class=\"possible_shipping_methods_container\">" .         // line 172
$context["SM"]->getrenderPossibleShippingMethods(($context["form"] ?? null), ($context["entity"] ?? null), ($context["quoteEntryPointEvents"] ?? null), ($context["possibleShippingMethodsView"] ?? null))) . "</div>")), "method"), "html", null, true);
        // line 173
        echo "

            ";
        // line 175
        $context["options"] = array("view" => "oroorder/js/app/views/shipping-cost-view");
        // line 178
        echo "
            <div
                data-layout=\"separate\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "overriddenShippingCostAmount", array()), 'row');
        echo "
            </div>

            ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingMethodLocked", array()), 'row');
        echo "
            ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowUnlistedShippingMethod", array()), 'row');
        echo "
        </div>
    ";
        $context["shippingInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 190
        echo "
    ";
        // line 191
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.shipping_information"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 195
($context["shippingInformation"] ?? null)))))));
        // line 198
        echo "
    ";
        // line 199
        $context["additionalData"] = array();
        // line 200
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 201
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 202
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 204
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 209
($context["additionalData"] ?? null))))));
            // line 212
            echo "    ";
        }
        // line 213
        echo "
    ";
        // line 214
        $context["data"] = array("formErrors" =>         // line 215
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 216
($context["dataBlocks"] ?? null));
        // line 218
        echo "
    ";
        // line 219
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Quote:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 219,  360 => 218,  358 => 216,  357 => 215,  356 => 214,  353 => 213,  350 => 212,  348 => 209,  346 => 204,  343 => 203,  336 => 202,  333 => 201,  327 => 200,  325 => 199,  322 => 198,  320 => 195,  319 => 191,  316 => 190,  310 => 187,  306 => 186,  300 => 183,  296 => 182,  290 => 178,  288 => 175,  284 => 173,  282 => 172,  280 => 170,  278 => 169,  275 => 168,  273 => 167,  270 => 166,  267 => 165,  265 => 162,  263 => 159,  257 => 156,  254 => 155,  252 => 152,  251 => 151,  250 => 150,  249 => 149,  248 => 148,  247 => 147,  246 => 145,  245 => 141,  240 => 138,  237 => 137,  235 => 136,  232 => 135,  230 => 129,  229 => 121,  227 => 114,  221 => 111,  217 => 110,  213 => 109,  209 => 108,  205 => 107,  201 => 106,  197 => 105,  193 => 103,  191 => 98,  187 => 96,  185 => 95,  182 => 94,  177 => 92,  173 => 90,  171 => 89,  165 => 86,  161 => 85,  157 => 83,  155 => 82,  154 => 81,  153 => 79,  152 => 77,  148 => 75,  146 => 74,  143 => 73,  136 => 69,  132 => 68,  127 => 66,  124 => 65,  122 => 64,  118 => 62,  116 => 60,  115 => 59,  114 => 57,  113 => 54,  110 => 53,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  92 => 38,  89 => 37,  86 => 33,  83 => 32,  81 => 28,  77 => 27,  71 => 25,  68 => 24,  63 => 21,  60 => 20,  57 => 19,  51 => 17,  49 => 15,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  36 => 1,  34 => 7,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Quote:update.html.twig", "");
    }
}
