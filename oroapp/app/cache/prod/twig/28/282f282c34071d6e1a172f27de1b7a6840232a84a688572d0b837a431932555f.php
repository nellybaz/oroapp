<?php

/* OroPricingBundle:layouts:default/layout.html.twig */
class __TwigTemplate_5b67963790d7dd8bb3534cee293e83e06db4e33162a511e2f8211163728256d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'currency_switcher_widget' => array($this, 'block_currency_switcher_widget'),
            'price_totals_widget' => array($this, 'block_price_totals_widget'),
            'data_totals_container' => array($this, 'block_data_totals_container'),
            'product_price_hint_content_js_widget' => array($this, 'block_product_price_hint_content_js_widget'),
            'product_price_hint_js_widget' => array($this, 'block_product_price_hint_js_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('currency_switcher_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('price_totals_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('product_price_hint_content_js_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('product_price_hint_js_widget', $context, $blocks);
    }

    // line 1
    public function block_currency_switcher_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 3
            echo "    <div class=\"oro-toolbar\"
         data-page-component-module=\"oropricing/js/app/components/currency-switcher-component\"
         data-page-component-options=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("selectedCurrency" =>             // line 6
($context["selected_currency"] ?? null), "currencySwitcherRoute" => "oro_pricing_frontend_set_current_currency")), "html", null, true);
            // line 8
            echo "\">
        <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencySymbolByCurrency(($context["selected_currency"] ?? null)), "html", null, true);
            echo "
            <span class=\"oro-toolbar__icon\">
                <i class=\"fa-angle-down\"></i>
            </span>
        </div>

        <div class=\"oro-toolbar__dropdown\">
            <ul class=\"oro-toolbar__list\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 19
                echo "                <li class=\"oro-toolbar__list-item\">
                    <a class=\"oro-toolbar__link\" href=\"#\" data-currency=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["currency"], "html", null, true);
                echo "\">
                        <b class=\"oro-toolbar__currency\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencySymbolByCurrency($context["currency"]), "html", null, true);
                echo "</b>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencyName($context["currency"]), "html", null, true);
                echo "
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </ul>
        </div>
    </div>
    ";
        }
    }

    // line 31
    public function block_price_totals_widget($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context["options"] = array("route" =>         // line 33
($context["route"] ?? null), "events" => ((        // line 34
array_key_exists("events", $context)) ? (_twig_default_filter(($context["events"] ?? null), array())) : (array())), "entityClassName" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getUrlClassName(        // line 35
($context["entityClassName"] ?? null)), "entityId" =>         // line 36
($context["entityId"] ?? null), "skipMaskView" =>         // line 37
($context["skipMaskView"] ?? null), "data" =>         // line 38
($context["totals"] ?? null));
        // line 40
        echo "    ";
        if (array_key_exists("selectors", $context)) {
            // line 41
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("selectors" => ($context["selectors"] ?? null)));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_before", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_before"] ?? null), "oro_pricing_totals_before")) : ("oro_pricing_totals_before")), array());
        // line 44
        echo "
    ";
        // line 45
        $context["pageComponent"] = ((array_key_exists("pageComponent", $context)) ? (_twig_default_filter(($context["pageComponent"] ?? null), "oropricing/js/app/components/totals-component")) : ("oropricing/js/app/components/totals-component"));
        // line 46
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, ($context["pageComponent"] ?? null), "html", null, true);
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array()))), "html", null, true);
        echo "\">
        <div class=\"totals-container\">
            ";
        // line 48
        $this->displayBlock('data_totals_container', $context, $blocks);
        // line 57
        echo "        </div>
        ";
        // line 58
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals", $context)) ? (_twig_default_filter(($context["oro_pricing_totals"] ?? null), "oro_pricing_totals")) : ("oro_pricing_totals")), array());
        // line 59
        echo "    </div>

    ";
        // line 61
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_after", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_after"] ?? null), "oro_pricing_totals_after")) : ("oro_pricing_totals_after")), array());
    }

    // line 48
    public function block_data_totals_container($context, array $blocks = array())
    {
        // line 49
        echo "                <div class=\"order-checkout-widget__container\">
                    <div class=\"totals-container\">
                        <table class=\"order-checkout-widget__table pull-right\">
                            <tbody data-totals-container></tbody>
                        </table>
                    </div>
                </div>
            ";
    }

    // line 64
    public function block_product_price_hint_content_js_widget($context, array $blocks = array())
    {
        // line 65
        echo "    <table class=\"table\">
        <thead>
        <tr>
            <th class=\"text-uppercase\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.quantity.short_label"), "html", null, true);
        echo "</th>";
        // line 69
        echo "            <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.product.unit_price.long_label"), "html", null, true);
        echo "</th>";
        // line 70
        echo "        </tr>
        </thead>
        <tbody>
        <% var addNewLine = false %>
        <% var modelPrices = _.sortBy(model.prices, 'quantity'); %>
        <% _.each(model.product_units, function(key) { %>
        <% var prices = _.filter(modelPrices, function(price){return price.unit === key}); %>
        <% if (prices.length) { %>
        <tr>
            <td colspan=\"2\" class=\"text-capitalize\">
                <%= addNewLine ? '<br/>' : '' %>
                <b><%= _.__('oro.product.product_unit.' + key + '.label.full') %></b>
            </td>
        </tr>
        <% addNewLine = true %>
        <% _.each(prices, function(price) { %>
        <tr class=\"<% if (!_.isEmpty(matchedPrice) && price.unit === matchedPrice.unit && parseFloat(price.price) === parseFloat(matchedPrice.price)) { %>matched-tier-price<% } %>\">
            <td><%= price.quantity %></td>
            <td>
                <% if (clickable) { %>
                <a
                        href=\"javascript: void(0);\"
                        data-price=\"<%= parseFloat(price.price) %>\"
                        data-unit=\"<%= price.unit %>\"
                ><%= formatter.formatCurrency(price.price, price.currency) %></a>
                <% } else { %>
                <%= formatter.formatCurrency(price.price, price.currency) %>
                <% } %>
            </td>
        </tr>
        <% }) %>
        <% } %>
        <% }) %>
        </tbody>
    </table>
";
    }

    // line 107
    public function block_product_price_hint_js_widget($context, array $blocks = array())
    {
        // line 108
        echo "    <span class=\"product-tier-prices\"
          data-toggle=\"popover\"
          data-placement=\"bottom\"
          data-close=\"false\"
          data-class=\"prices-hint-content\">
        <i class=\"popover-trigger\"></i>
    </span>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts:default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 108,  222 => 107,  183 => 70,  179 => 69,  176 => 68,  171 => 65,  168 => 64,  157 => 49,  154 => 48,  150 => 61,  146 => 59,  144 => 58,  141 => 57,  139 => 48,  131 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  114 => 40,  112 => 38,  111 => 37,  110 => 36,  109 => 35,  108 => 34,  107 => 33,  105 => 32,  102 => 31,  94 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  60 => 10,  56 => 8,  54 => 6,  53 => 5,  49 => 3,  46 => 2,  43 => 1,  39 => 107,  36 => 106,  34 => 64,  31 => 63,  29 => 31,  26 => 30,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts:default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
