<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig */
class __TwigTemplate_4a38a805f24507695a8bdf3d03e1849205622509414525d39d9525b95f421d06 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__shipping_methods_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_shipping_methods_widget"));

        // line 2
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig", 2);
        // line 3
        echo "    ";
        $context["currentShippingMethod"] = ((array_key_exists("currentShippingMethod", $context)) ? (_twig_default_filter(($context["currentShippingMethod"] ?? $this->getContext($context, "currentShippingMethod")), null)) : (null));
        // line 4
        echo "    ";
        $context["currentShippingMethodType"] = ((array_key_exists("currentShippingMethodType", $context)) ? (_twig_default_filter(($context["currentShippingMethodType"] ?? $this->getContext($context, "currentShippingMethodType")), null)) : (null));
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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
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
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroshipping/js/app/views/shipping-methods-view", "data" => array("methods" =>         // line 17
($context["methods"] ?? $this->getContext($context, "methods")), "currentShippingMethod" =>         // line 18
($context["currentShippingMethod"] ?? $this->getContext($context, "currentShippingMethod")), "currentShippingMethodType" =>         // line 19
($context["currentShippingMethodType"] ?? $this->getContext($context, "currentShippingMethodType"))), "template" =>         // line 21
$context["utils"]->getunderscoreRaw((("<%#" . ($context["shippingMethodsTemplate"] ?? $this->getContext($context, "shippingMethodsTemplate"))) . "#%>"))), "data-shipping-method-forms" => ""));
        // line 25
        echo "
    <div class=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? $this->getContext($context, "class_prefix")), "html", null, true);
        echo "-form\" data-content=\"shipping_method_form\">
        <div class=\"grid__row\">
            <div ";
        // line 28
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block__shipping_methods_template_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_shipping_methods_template_widget"));

        // line 34
        echo "    <% if (!_.isEmpty(methods)) { %>
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block__shipping_methods_template_methods_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_shipping_methods_template_methods_widget"));

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
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? $this->getContext($context, "class_prefix")), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  134 => 44,  128 => 43,  117 => 38,  111 => 35,  108 => 34,  102 => 33,  91 => 28,  86 => 26,  83 => 25,  81 => 21,  80 => 19,  79 => 18,  78 => 17,  77 => 12,  74 => 11,  71 => 10,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  42 => 1,  35 => 43,  32 => 42,  30 => 33,  27 => 32,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _shipping_methods_widget %}
    {% import 'OroFrontendBundle:layouts/blank:utils.html.twig' as utils %}
    {% set currentShippingMethod = currentShippingMethod|default(null) %}
    {% set currentShippingMethodType = currentShippingMethodType|default(null) %}

    {% set shippingMethodsTemplate %}
        {% spaceless %}
            {{ block_widget(block) }}
        {% endspaceless %}
    {% endset %}

    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        '~data-page-component-options': {
            view: 'oroshipping/js/app/views/shipping-methods-view',
            data: {
                methods: methods,
                currentShippingMethod: currentShippingMethod,
                currentShippingMethodType: currentShippingMethodType
            },
            template: utils.underscoreRaw('<%#' ~ shippingMethodsTemplate ~ '#%>')
        },
        'data-shipping-method-forms': '',
    }) %}

    <div class=\"{{ class_prefix }}-form\" data-content=\"shipping_method_form\">
        <div class=\"grid__row\">
            <div {{ block('block_attributes') }}></div>
        </div>
    </div>
{% endblock %}

{% block _shipping_methods_template_widget %}
    <% if (!_.isEmpty(methods)) { %>
        {{ block_widget(block) }}
    <% } else { %>
        <div class=\"notification notification--alert\">
            <span class=\"notification__text\">{{ 'oro.shipping.methods.no_method'|trans }}</span>
        </div>
    <% } %>
{% endblock %}

{% block _shipping_methods_template_methods_widget %}
    <span class=\"label label--full text-uppercase\">{{ 'oro.shipping.methods.select_method'|trans }}<sup class=\"checkout-form__asterix\">*</sup></span>
    <% _.each(methods, function(method, key) { %>
        <% if (method.types) { %>
            <% _.each(method.types, function(type, key) { %>
                <% if (type.price) { %>
                    <% var selected = currentShippingMethodType === type.identifier && currentShippingMethod === method.identifier %>
                    <div class=\"{{ class_prefix }}-form__radio\" data-item-container>
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
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
