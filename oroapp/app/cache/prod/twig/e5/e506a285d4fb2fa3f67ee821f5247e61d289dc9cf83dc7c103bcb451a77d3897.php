<?php

/* OroShippingBundle:layouts/default:layout.html.twig */
class __TwigTemplate_e5a8f83a594e5a6bfe22eb0a7ea8a95cefd36b58e07eb95dccb51ed3cb7e35a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_shipping_methods_widget' => array($this, 'block__shipping_methods_widget'),
            '_shipping_methods_template_widget' => array($this, 'block__shipping_methods_template_widget'),
            '_shipping_methods_template_methods_widget' => array($this, 'block__shipping_methods_template_methods_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_shipping_methods_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_shipping_methods_template_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_shipping_methods_template_methods_widget', $context, $blocks);
    }

    // line 1
    public function block__shipping_methods_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "OroShippingBundle:layouts/default:layout.html.twig", 2);
        // line 3
        echo "    ";
        $context["currentShippingMethod"] = ((array_key_exists("currentShippingMethod", $context)) ? (_twig_default_filter(($context["currentShippingMethod"] ?? null), null)) : (null));
        // line 4
        echo "    ";
        $context["currentShippingMethodType"] = ((array_key_exists("currentShippingMethodType", $context)) ? (_twig_default_filter(($context["currentShippingMethodType"] ?? null), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        ob_start();
        // line 8
        echo "            ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    ";
        $context["shippingMethodsTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "
    ";
        // line 12
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroshipping/js/app/views/shipping-methods-view", "data" => array("methods" =>         // line 17
($context["methods"] ?? null), "currentShippingMethod" =>         // line 18
($context["currentShippingMethod"] ?? null), "currentShippingMethodType" =>         // line 19
($context["currentShippingMethodType"] ?? null)), "template" =>         // line 21
$context["utils"]->getunderscoreRaw((("<%#" . ($context["shippingMethodsTemplate"] ?? null)) . "#%>"))), "data-shipping-method-forms" => ""));
        // line 25
        echo "
    <div class=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form\" data-content=\"shipping_method_form\">
        <div class=\"grid__row\">
            <div ";
        // line 28
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
        </div>
    </div>
";
    }

    // line 33
    public function block__shipping_methods_template_widget($context, array $blocks = array())
    {
        // line 34
        echo "    <% if (!_.isEmpty(methods)) { %>
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    <% } else { %>
        <div class=\"notification notification--alert\">
            <span class=\"notification__text\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.methods.no_method"), "html", null, true);
        echo "</span>
        </div>
    <% } %>
";
    }

    // line 43
    public function block__shipping_methods_template_methods_widget($context, array $blocks = array())
    {
        // line 44
        echo "    <span class=\"label label--full text-uppercase\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.methods.select_method"), "html", null, true);
        echo "<sup class=\"checkout-form__asterix\">*</sup></span>
    <% _.each(methods, function(method, key) { %>
        <% if (method.types) { %>
            <% _.each(method.types, function(type, key) { %>
                <% if (type.price) { %>
                    <% var selected = currentShippingMethodType === type.identifier && currentShippingMethod === method.identifier %>
                    <div class=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__radio\" data-item-container>
                        <label class=\"custom-radio custom-radio--large <%= selected ? 'checked' : '' %>\" data-radio tabindex=\"0\">
                            <input class=\"custom-radio__control\"
                                   type=\"radio\" name=\"shippingMethodType\" value=\"<%= type.identifier %>-<%= method.identifier %>\"
                                   data-shipping-type=\"<%= type.identifier %>\"
                                   data-shipping-method=\"<%= method.identifier %>\"
                                   data-shipping-price=\"<%= type.price.value %>\"
                                   data-choice=\"<%= type.identifier %>\"
                                   <% if (selected) { %>checked=\"checked\"<% } %>
                            />
                            <span class=\"custom-radio__text\">
                                <%= _.__('oro.shipping.method_type.backend.method_type_and_price.label', {
                                    'translatedMethodType': _.escape(type.label),
                                    'price': formatter.formatCurrency(type.price.value, type.price.currency)
                                }) %>
                            </span>
                        </label>
                    </div>
                <% } %>
            <% }); %>
        <% } %>
    <% }); %>
";
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:layouts/default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  113 => 44,  110 => 43,  102 => 38,  96 => 35,  93 => 34,  90 => 33,  82 => 28,  77 => 26,  74 => 25,  72 => 21,  71 => 19,  70 => 18,  69 => 17,  68 => 12,  65 => 11,  62 => 10,  56 => 8,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 43,  29 => 42,  27 => 33,  24 => 32,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:layouts/default:layout.html.twig", "");
    }
}
