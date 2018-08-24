<?php

/* OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:layout.html.twig */
class __TwigTemplate_c3e047631d988142071574a128e4ddc234eec25ce4c8cae2d5d40083358e4eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quote_choice_page_widget' => array($this, 'block__quote_choice_page_widget'),
            '_quote_choice_form_widget' => array($this, 'block__quote_choice_form_widget'),
            '_quote_choice_submit_button_widget' => array($this, 'block__quote_choice_submit_button_widget'),
            '_quote_choice_subtotals_widget' => array($this, 'block__quote_choice_subtotals_widget'),
            '_quote_view_information_widget' => array($this, 'block__quote_view_information_widget'),
            '_quote_view_page_widget' => array($this, 'block__quote_view_page_widget'),
            'address_widget' => array($this, 'block_address_widget'),
            'quote_body_column_element_widget' => array($this, 'block_quote_body_column_element_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quote_choice_page_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_quote_choice_form_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_quote_choice_submit_button_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('_quote_choice_subtotals_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('_quote_view_information_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('_quote_view_page_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('address_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('quote_body_column_element_widget', $context, $blocks);
    }

    // line 1
    public function block__quote_choice_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block__quote_choice_form_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["componentOptions"] = array("subtotalsRoute" => "oro_sale_quote_frontend_subtotals", "quoteDemandId" => $this->getAttribute(        // line 10
($context["quoteDemand"] ?? null), "id", array()), "subtotalSelector" => "#quote-choice-subtotal", "lineItemsSelector" => ".quote-line-items");
        // line 14
        echo "
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

    <form method=\"POST\"
          data-nohash=\"true\"
          data-disable-autofocus=\"true\"
          id=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
          name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
          data-page-component-module=\"orosale/js/app/components/quote-demand-component\"
          data-page-component-options=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
        echo "\"
          class=\"quote-choice-form\"
    >
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "demandProducts", array()), 'widget');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        <div class=\"order-checkout-widget text-right\">
            ";
        // line 29
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </form>
";
    }

    // line 34
    public function block__quote_choice_submit_button_widget($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\" order-checkout-widget text-right\">
        <div class=\" text-right\">
            <button class=\"btn theme-btn\" type=\"submit\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.submit_to_order.submit"), "html", null, true);
        echo "</button>
        </div>
    </div>
";
    }

    // line 42
    public function block__quote_choice_subtotals_widget($context, array $blocks = array())
    {
        // line 43
        echo "    <div id=\"quote-choice-subtotal\" class=\"order-checkout-widget__container-wrapper\">
        <div class=\"order-checkout-widget__container order-checkout-widget__container--lg\">
            <table class=\"order-checkout-widget__table pull-right\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtotals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subtotal"]) {
            // line 47
            echo "                    ";
            if ($this->getAttribute($context["subtotal"], "visible", array())) {
                // line 48
                echo "                        <tr>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["subtotal"], "label", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["subtotal"], "amount", array()), array("currency" => $this->getAttribute($context["subtotal"], "currency", array())));
                echo "</td>
                        </tr>
                    ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtotal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                <tr>
                    <td class=\"order-checkout-widget__total\"><span class=\"text-uppercase\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "label", array()), "html", null, true);
        echo "</span></td>
                    <td class=\"order-checkout-widget__total\"><span class=\"order-checkout-widget__total-price\">";
        // line 56
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["total"] ?? null), "amount", array()), array("currency" => $this->getAttribute(($context["total"] ?? null), "currency", array())));
        echo "</span></td>
                </tr>
            </table>
        </div>
    </div>
";
    }

    // line 63
    public function block__quote_view_information_widget($context, array $blocks = array())
    {
        // line 64
        echo "    <div class=\"customer-info-grid\">
        <h2 class=\"customer-info-grid__title\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.general"), "html", null, true);
        echo "
        </h2>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-l\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                        ";
        // line 72
        if (twig_length_filter($this->env, $this->getAttribute(($context["quote"] ?? null), "assignedUsers", array()))) {
            // line 73
            echo "                            <tr>
                                <td class=\"customer-info-grid__element-label\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.assigned_customer_users.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">
                                    ";
            // line 76
            $context["assigned_users"] = array();
            // line 77
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quote"] ?? null), "assignedUsers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 78
                echo "                                        ";
                $context["assigned_users"] = twig_array_merge(($context["assigned_users"] ?? null), array(0 => $this->getAttribute($context["entity"], "fullName", array())));
                // line 79
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_join_filter(($context["assigned_users"] ?? null), ", "), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        // line 84
        echo "                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.valid_until.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["quote"] ?? null), "validUntil", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["quote"] ?? null), "validUntil", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.po_number.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 90
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["quote"] ?? null), "poNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["quote"] ?? null), "poNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-r\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.ship_until.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 100
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["quote"] ?? null), "shipUntil", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 102
        if ((array_key_exists("paymentTerm", $context) &&  !twig_test_empty(($context["paymentTerm"] ?? null)))) {
            // line 103
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["paymentTerm"] ?? null), "label", array()));
            echo "</td>
                            </tr>
                        ";
        }
        // line 108
        echo "                        ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 116
    public function block__quote_view_page_widget($context, array $blocks = array())
    {
        // line 117
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quote")));
        // line 118
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 119
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 123
    public function block_address_widget($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        $context["__internal_abd6c80c60d4fd51119f8d2e00bfec6facf7d4f8576f4726b61764c61dc2bdfc"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:layout.html.twig", 124);
        // line 125
        echo "    ";
        echo $context["__internal_abd6c80c60d4fd51119f8d2e00bfec6facf7d4f8576f4726b61764c61dc2bdfc"]->getrenderAddress(($context["address"] ?? null));
        echo "
";
    }

    // line 128
    public function block_quote_body_column_element_widget($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        if ( !(null === ($context["address"] ?? null))) {
            // line 130
            echo "        <tr class=\"customer-info-grid__row\">
            <td class=\"customer-info-grid__element-label\">";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
            echo "</td>
            <td class=\"customer-info-grid__element-content\">";
            // line 132
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "</td>
        </tr>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  356 => 132,  352 => 131,  349 => 130,  346 => 129,  343 => 128,  336 => 125,  333 => 124,  330 => 123,  323 => 119,  318 => 118,  315 => 117,  312 => 116,  300 => 108,  294 => 105,  290 => 104,  287 => 103,  285 => 102,  280 => 100,  276 => 99,  264 => 90,  260 => 89,  254 => 86,  250 => 85,  247 => 84,  239 => 80,  233 => 79,  230 => 78,  225 => 77,  223 => 76,  218 => 74,  215 => 73,  213 => 72,  204 => 66,  200 => 64,  197 => 63,  187 => 56,  183 => 55,  180 => 54,  174 => 53,  168 => 50,  164 => 49,  161 => 48,  158 => 47,  154 => 46,  149 => 43,  146 => 42,  138 => 37,  134 => 35,  131 => 34,  123 => 29,  118 => 27,  114 => 26,  108 => 23,  103 => 21,  99 => 20,  91 => 15,  88 => 14,  86 => 10,  84 => 8,  81 => 7,  74 => 3,  69 => 2,  66 => 1,  62 => 128,  59 => 127,  57 => 123,  54 => 122,  52 => 116,  49 => 115,  47 => 63,  44 => 62,  42 => 42,  39 => 41,  37 => 34,  34 => 33,  32 => 7,  29 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:layout.html.twig", "");
    }
}
