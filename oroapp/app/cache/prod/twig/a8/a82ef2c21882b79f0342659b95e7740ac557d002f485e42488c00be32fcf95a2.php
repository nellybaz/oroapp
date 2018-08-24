<?php

/* OroPayPalBundle:layouts/default/imports/oro_payment_method_options:form.html.twig */
class __TwigTemplate_567c8d570c1993ebe9ec6ec78c75e6726f8b7fae62c9f9b084c7ce4950e7c6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_paypal_credit_card_payment_credit_card_cvv_widget' => array($this, 'block__oro_paypal_credit_card_payment_credit_card_cvv_widget'),
            '_oro_paypal_credit_card_widget' => array($this, 'block__oro_paypal_credit_card_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_paypal_credit_card_payment_credit_card_cvv_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_oro_paypal_credit_card_widget', $context, $blocks);
    }

    // line 1
    public function block__oro_paypal_credit_card_payment_credit_card_cvv_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " input input--short", "autocomplete" => "off"));
        // line 7
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 8
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    <a href=\"javascript: void(0);\"
       data-toggle=\"tooltip\"
       data-title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.credit_card.tooltip"), "html", null, true);
        echo "\"
       data-html=\"true\"
       data-container=\"body\"
    >
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.credit_card.whats_this"), "html", null, true);
        echo "
    </a>
";
    }

    // line 19
    public function block__oro_paypal_credit_card_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["creditCardComponent"] = (($this->getAttribute(($context["options"] ?? null), "creditCardComponent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "creditCardComponent", array()), "oropaypal/js/app/components/credit-card-component")) : ("oropaypal/js/app/components/credit-card-component"));
        // line 21
        echo "    ";
        $context["creditCardComponentOptions"] = twig_array_merge((($this->getAttribute(($context["options"] ?? null), "creditCardComponentOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "creditCardComponentOptions", array()), array())) : (array())), array("paymentMethod" => ($context["paymentMethod"] ?? null)));
        // line 22
        echo "    ";
        $context["isAuthorizedCard"] = $this->getAttribute(($context["creditCardComponentOptions"] ?? null), "acct", array(), "any", true, true);
        // line 23
        echo "
    <div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods\"
        data-page-component-module=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["creditCardComponent"] ?? null), "html", null, true);
        echo "\"
        data-page-component-options=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["creditCardComponentOptions"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 27
        if (($context["isAuthorizedCard"] ?? null)) {
            // line 28
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "-form__payment-methods-authorized-card\" data-authorized-card>
                <p>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.payflow.authorized_card", array("{{ last4 }}" => $this->getAttribute(($context["creditCardComponentOptions"] ?? null), "acct", array()))), "html", null, true);
            echo "
                </p>
                <a href=\"javascript: void(0);\" class=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "-form__payment-methods-different-card-handle\" data-different-card-handle>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.payflow.use_different_card"), "html", null, true);
            echo "
                </a>
            </div>
        ";
        }
        // line 37
        echo "        <div ";
        if (($context["isAuthorizedCard"] ?? null)) {
            echo " style=\"display: none;\" data-different-card";
        }
        echo ">
            ";
        // line 38
        if (($context["isAuthorizedCard"] ?? null)) {
            // line 39
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "-form__payment-methods-different-card\">
                    <a href=\"javascript: void(0);\" class=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "-form__payment-methods-authorized-card-handle\" data-authorized-card-handle>
                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.payflow.use_authorized_card"), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 45
        echo "            <ul class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods-list\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["options"] ?? null), "creditCardComponentOptions", array()), "allowedCreditCards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cc_name"]) {
            // line 47
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "-form__payment-methods-item\"><i class=\"credit-card-icon credit-card-icon_";
            echo twig_escape_filter($this->env, $context["cc_name"], "html", null, true);
            echo "\"></i></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </ul>
            <div class=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods-form\" data-credit-card-form=\"data-credit-card-form\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("class_prefix" => ($context["class_prefix"] ?? null)));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPayPalBundle:layouts/default/imports/oro_payment_method_options:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  174 => 52,  170 => 51,  166 => 50,  163 => 49,  152 => 47,  148 => 46,  143 => 45,  136 => 41,  132 => 40,  127 => 39,  125 => 38,  118 => 37,  111 => 33,  107 => 32,  102 => 30,  96 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  60 => 15,  53 => 11,  38 => 8,  36 => 7,  33 => 2,  30 => 1,  26 => 19,  23 => 18,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPayPalBundle:layouts/default/imports/oro_payment_method_options:form.html.twig", "");
    }
}
