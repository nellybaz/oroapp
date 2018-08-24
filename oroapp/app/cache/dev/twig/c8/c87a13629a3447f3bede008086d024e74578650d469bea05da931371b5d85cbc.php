<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/default/layout.html.twig */
class __TwigTemplate_f1122dfc9f4c4f8ee64cc350907883f1f1f2349e131360a8fd0a06fe7254078d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'payment_additional_data_widget' => array($this, 'block_payment_additional_data_widget'),
            '_payment_methods_widget' => array($this, 'block__payment_methods_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/default/layout.html.twig"));

        // line 1
        $this->displayBlock('payment_additional_data_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_payment_methods_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_payment_additional_data_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payment_additional_data_widget"));

        // line 2
        echo "    ";
        $this->displayBlock(($context["block_name"] ?? $this->getContext($context, "block_name")), $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block__payment_methods_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_payment_methods_widget"));

        // line 6
        echo "    ";
        $context["currentPaymentMethod"] = ((array_key_exists("currentPaymentMethod", $context)) ? (_twig_default_filter(($context["currentPaymentMethod"] ?? $this->getContext($context, "currentPaymentMethod")), twig_first($this->env, twig_get_array_keys_filter(($context["views"] ?? $this->getContext($context, "views")))))) : (twig_first($this->env, twig_get_array_keys_filter(($context["views"] ?? $this->getContext($context, "views"))))));
        // line 7
        echo "
    ";
        // line 8
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-payment-method-forms" => ""));
        // line 9
        echo "
    <div class=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? $this->getContext($context, "class_prefix")), "html", null, true);
        echo "-form\" data-content=\"payment_method_form\" data-page-component-module=\"oropayment/js/app/components/payment-method-selector-component\">
        <div class=\"grid__row grid__row--offset-none\">
            <div ";
        // line 12
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
                ";
        // line 13
        if ((twig_length_filter($this->env, ($context["views"] ?? $this->getContext($context, "views"))) > 0)) {
            // line 14
            echo "                    <span class=\"label label--full text-uppercase\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.methods.select_method"), "html", null, true);
            echo "<sup class=\"checkout-form__asterix\">*</sup></span>
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["views"] ?? $this->getContext($context, "views")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["name"] => $context["view"]) {
                if ((array_key_exists("views", $context) && twig_test_iterable($context["view"]))) {
                    // line 16
                    echo "                        ";
                    $context["selected"] = (($context["currentPaymentMethod"] ?? $this->getContext($context, "currentPaymentMethod")) == $context["name"]);
                    // line 17
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, ($context["class_prefix"] ?? $this->getContext($context, "class_prefix")), "html", null, true);
                    echo "-form__radio\" data-item-container>
                            <label class=\"custom-radio custom-radio--large ";
                    // line 18
                    if (($context["selected"] ?? $this->getContext($context, "selected"))) {
                        echo "checked";
                    }
                    echo "\" data-radio tabindex=\"0\">
                                <input class=\"custom-radio__control\" type=\"radio\" name=\"paymentMethod\" data-choice=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? $this->getContext($context, "selected"))) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                                <span class=\"custom-radio__text\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "label", array()), "html", null, true);
                    echo "</span>
                            </label>
                            <div class=\"";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["class_prefix"] ?? $this->getContext($context, "class_prefix")), "html", null, true);
                    echo "-form__payment-container\" data-form-container ";
                    if ( !($context["selected"] ?? $this->getContext($context, "selected"))) {
                        echo " style=\"display: none;\" ";
                    }
                    echo ">
                                ";
                    // line 23
                    $this->displayBlock($this->getAttribute($context["view"], "block", array()), $context, $blocks);
                    echo "
                            </div>
                        </div>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                ";
        } else {
            // line 28
            echo "                    <div class=\"notification notification--alert\">
                        <span class=\"notification__text\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.methods.no_method"), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 32,  153 => 29,  150 => 28,  147 => 27,  133 => 23,  125 => 22,  120 => 20,  110 => 19,  104 => 18,  99 => 17,  96 => 16,  85 => 15,  80 => 14,  78 => 13,  74 => 12,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  52 => 5,  42 => 2,  36 => 1,  29 => 5,  26 => 4,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block payment_additional_data_widget %}
    {{ block(block_name) }}
{% endblock %}

{% block _payment_methods_widget %}
    {% set currentPaymentMethod = currentPaymentMethod|default(views|keys|first) %}

    {% set attr = layout_attr_defaults(attr, {'data-payment-method-forms': ''}) %}

    <div class=\"{{ class_prefix }}-form\" data-content=\"payment_method_form\" data-page-component-module=\"oropayment/js/app/components/payment-method-selector-component\">
        <div class=\"grid__row grid__row--offset-none\">
            <div {{ block('block_attributes') }}>
                {% if views|length > 0 %}
                    <span class=\"label label--full text-uppercase\">{{ 'oro.payment.methods.select_method'|trans }}<sup class=\"checkout-form__asterix\">*</sup></span>
                    {% for name, view in views if views is defined and view is iterable %}
                        {% set selected = currentPaymentMethod == name %}
                        <div class=\"{{ class_prefix }}-form__radio\" data-item-container>
                            <label class=\"custom-radio custom-radio--large {% if selected %}checked{% endif %}\" data-radio tabindex=\"0\">
                                <input class=\"custom-radio__control\" type=\"radio\" name=\"paymentMethod\" data-choice=\"{{ name }}\" value=\"{{ name }}\" {% if selected%}checked=\"checked\"{% endif %} />
                                <span class=\"custom-radio__text\">{{ view.label }}</span>
                            </label>
                            <div class=\"{{ class_prefix }}-form__payment-container\" data-form-container {% if not selected %} style=\"display: none;\" {% endif %}>
                                {{ block(view.block) }}
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"notification notification--alert\">
                        <span class=\"notification__text\">{{ 'oro.payment.methods.no_method'|trans }}</span>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
