<?php

/* OroPricingBundle:layouts:default/layout.html.twig */
class __TwigTemplate_3c29887e9665460d498f7224f0dcc42fe195da9bbb8a20156cee0c671206418d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroPricingBundle:layouts:default/layout.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_currency_switcher_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currency_switcher_widget"));

        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, ($context["currencies"] ?? $this->getContext($context, "currencies"))) > 1)) {
            // line 3
            echo "    <div class=\"oro-toolbar\"
         data-page-component-module=\"oropricing/js/app/components/currency-switcher-component\"
         data-page-component-options=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("selectedCurrency" =>             // line 6
($context["selected_currency"] ?? $this->getContext($context, "selected_currency")), "currencySwitcherRoute" => "oro_pricing_frontend_set_current_currency")), "html", null, true);
            // line 8
            echo "\">
        <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getCurrencySymbolByCurrency(($context["selected_currency"] ?? $this->getContext($context, "selected_currency"))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? $this->getContext($context, "currencies")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_price_totals_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "price_totals_widget"));

        // line 32
        echo "    ";
        $context["options"] = array("route" =>         // line 33
($context["route"] ?? $this->getContext($context, "route")), "events" => ((        // line 34
array_key_exists("events", $context)) ? (_twig_default_filter(($context["events"] ?? $this->getContext($context, "events")), array())) : (array())), "entityClassName" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getUrlClassName(        // line 35
($context["entityClassName"] ?? $this->getContext($context, "entityClassName"))), "entityId" =>         // line 36
($context["entityId"] ?? $this->getContext($context, "entityId")), "skipMaskView" =>         // line 37
($context["skipMaskView"] ?? $this->getContext($context, "skipMaskView")), "data" =>         // line 38
($context["totals"] ?? $this->getContext($context, "totals")));
        // line 40
        echo "    ";
        if (array_key_exists("selectors", $context)) {
            // line 41
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("selectors" => ($context["selectors"] ?? $this->getContext($context, "selectors"))));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_before", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_before"] ?? $this->getContext($context, "oro_pricing_totals_before")), "oro_pricing_totals_before")) : ("oro_pricing_totals_before")), array());
        // line 44
        echo "
    ";
        // line 45
        $context["pageComponent"] = ((array_key_exists("pageComponent", $context)) ? (_twig_default_filter(($context["pageComponent"] ?? $this->getContext($context, "pageComponent")), "oropricing/js/app/components/totals-component")) : ("oropricing/js/app/components/totals-component"));
        // line 46
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, ($context["pageComponent"] ?? $this->getContext($context, "pageComponent")), "html", null, true);
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? $this->getContext($context, "options")), array())) : (array()))), "html", null, true);
        echo "\">
        <div class=\"totals-container\">
            ";
        // line 48
        $this->displayBlock('data_totals_container', $context, $blocks);
        // line 57
        echo "        </div>
        ";
        // line 58
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals", $context)) ? (_twig_default_filter(($context["oro_pricing_totals"] ?? $this->getContext($context, "oro_pricing_totals")), "oro_pricing_totals")) : ("oro_pricing_totals")), array());
        // line 59
        echo "    </div>

    ";
        // line 61
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_after", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_after"] ?? $this->getContext($context, "oro_pricing_totals_after")), "oro_pricing_totals_after")) : ("oro_pricing_totals_after")), array());
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_data_totals_container($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_totals_container"));

        // line 49
        echo "                <div class=\"order-checkout-widget__container\">
                    <div class=\"totals-container\">
                        <table class=\"order-checkout-widget__table pull-right\">
                            <tbody data-totals-container></tbody>
                        </table>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_product_price_hint_content_js_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_price_hint_content_js_widget"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_product_price_hint_js_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_price_hint_js_widget"));

        // line 108
        echo "    <span class=\"product-tier-prices\"
          data-toggle=\"popover\"
          data-placement=\"bottom\"
          data-close=\"false\"
          data-class=\"prices-hint-content\">
        <i class=\"popover-trigger\"></i>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts:default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 108,  252 => 107,  210 => 70,  206 => 69,  203 => 68,  198 => 65,  192 => 64,  178 => 49,  172 => 48,  165 => 61,  161 => 59,  159 => 58,  156 => 57,  154 => 48,  146 => 46,  144 => 45,  141 => 44,  138 => 43,  135 => 42,  132 => 41,  129 => 40,  127 => 38,  126 => 37,  125 => 36,  124 => 35,  123 => 34,  122 => 33,  120 => 32,  114 => 31,  103 => 25,  91 => 21,  87 => 20,  84 => 19,  80 => 18,  69 => 10,  65 => 8,  63 => 6,  62 => 5,  58 => 3,  55 => 2,  49 => 1,  42 => 107,  39 => 106,  37 => 64,  34 => 63,  32 => 31,  29 => 30,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block currency_switcher_widget %}
    {% if currencies|length > 1 %}
    <div class=\"oro-toolbar\"
         data-page-component-module=\"oropricing/js/app/components/currency-switcher-component\"
         data-page-component-options=\"{{ {
             'selectedCurrency': selected_currency,
             'currencySwitcherRoute': 'oro_pricing_frontend_set_current_currency'
         }|json_encode }}\">
        <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
            {{ oro_currency_symbol(selected_currency) }}
            <span class=\"oro-toolbar__icon\">
                <i class=\"fa-angle-down\"></i>
            </span>
        </div>

        <div class=\"oro-toolbar__dropdown\">
            <ul class=\"oro-toolbar__list\">
                {% for currency in currencies %}
                <li class=\"oro-toolbar__list-item\">
                    <a class=\"oro-toolbar__link\" href=\"#\" data-currency=\"{{ currency }}\">
                        <b class=\"oro-toolbar__currency\">{{ oro_currency_symbol(currency) }}</b>{{ oro_currency_name(currency) }}
                    </a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    {% endif %}
{% endblock %}

{% block price_totals_widget %}
    {% set options = {
        route: route,
        events: events|default({}),
        entityClassName: oro_url_class_name(entityClassName),
        entityId: entityId,
        skipMaskView: skipMaskView,
        data: totals
    }%}
    {% if selectors is defined %}
        {% set options = options|merge({selectors: selectors}) %}
    {% endif %}
    {% placeholder oro_pricing_totals_before %}

    {% set pageComponent = pageComponent|default('oropricing/js/app/components/totals-component') %}
    <div data-page-component-module=\"{{ pageComponent }}\" data-page-component-options=\"{{ options|default({})|json_encode }}\">
        <div class=\"totals-container\">
            {% block data_totals_container %}
                <div class=\"order-checkout-widget__container\">
                    <div class=\"totals-container\">
                        <table class=\"order-checkout-widget__table pull-right\">
                            <tbody data-totals-container></tbody>
                        </table>
                    </div>
                </div>
            {% endblock data_totals_container %}
        </div>
        {% placeholder oro_pricing_totals %}
    </div>

    {% placeholder oro_pricing_totals_after %}
{% endblock %}

{% block product_price_hint_content_js_widget %}
    <table class=\"table\">
        <thead>
        <tr>
            <th class=\"text-uppercase\">{{ 'oro.pricing.frontend.product.quantity.short_label'|trans }}</th>{# qty#}
            <th>{{ 'oro.pricing.frontend.product.unit_price.long_label'|trans }}</th>{# Unit Price #}
        </tr>
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
{% endblock %}

{% block product_price_hint_js_widget %}
    <span class=\"product-tier-prices\"
          data-toggle=\"popover\"
          data-placement=\"bottom\"
          data-close=\"false\"
          data-class=\"prices-hint-content\">
        <i class=\"popover-trigger\"></i>
    </span>
{% endblock %}
", "OroPricingBundle:layouts:default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
