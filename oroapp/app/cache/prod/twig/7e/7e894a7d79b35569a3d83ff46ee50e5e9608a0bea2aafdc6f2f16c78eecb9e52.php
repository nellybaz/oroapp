<?php

/* OroCheckoutBundle:layouts/default/imports/oro_checkout_sidebar:sidebar.html.twig */
class __TwigTemplate_c42d9bcb973b6cfa87bb67ac93ea744b36a8e495b0abb2991a68766bd908a9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_checkout_sidebar__checkout_sidebar_widget' => array($this, 'block___oro_checkout_sidebar__checkout_sidebar_widget'),
            '__oro_checkout_sidebar__enter_billing_address_information_widget' => array($this, 'block___oro_checkout_sidebar__enter_billing_address_information_widget'),
            '__oro_checkout_sidebar__enter_shipping_address_information_widget' => array($this, 'block___oro_checkout_sidebar__enter_shipping_address_information_widget'),
            '__oro_checkout_sidebar__enter_shipping_method_information_widget' => array($this, 'block___oro_checkout_sidebar__enter_shipping_method_information_widget'),
            '__oro_checkout_sidebar__enter_payment_information_widget' => array($this, 'block___oro_checkout_sidebar__enter_payment_information_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_checkout_sidebar__checkout_sidebar_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('__oro_checkout_sidebar__enter_billing_address_information_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('__oro_checkout_sidebar__enter_shipping_address_information_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('__oro_checkout_sidebar__enter_shipping_method_information_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('__oro_checkout_sidebar__enter_payment_information_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_checkout_sidebar__checkout_sidebar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " checkout-sidebar")));
        // line 3
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
        data-layout=\"separate\"
        data-role=\"checkout-sidebar\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocheckout/js/app/views/checkout-content-view")), "html", null, true);
        // line 9
        echo "\">
        <ul class=\"checkout-navigation\">
            ";
        // line 11
        $context["isComplete"] = true;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["step"]) {
            if (($this->getAttribute($context["step"], "final", array()) == false)) {
                // line 13
                echo "                ";
                $context["pageNum"] = ($context["key"] + 1);
                // line 14
                echo "                ";
                $context["isCurrent"] = ($this->getAttribute(($context["currentStep"] ?? null), "name", array()) == $this->getAttribute($context["step"], "name", array()));
                // line 15
                echo "                ";
                if (($context["isCurrent"] ?? null)) {
                    // line 16
                    echo "                    ";
                    $context["isComplete"] = false;
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "                <li class=\"checkout-navigation__step ";
                echo ((($context["isComplete"] ?? null)) ? ("checkout-navigation__step--past") : (""));
                echo "\" data-role=\"transition-trigger-container\">
                    ";
                // line 19
                $context["badgeClass"] = "";
                // line 20
                echo "                    ";
                if (($context["isComplete"] ?? null)) {
                    // line 21
                    echo "                        ";
                    $context["badgeClass"] = "checkout-navigation__icon--complete";
                    // line 22
                    echo "                    ";
                } elseif (($context["isCurrent"] ?? null)) {
                    // line 23
                    echo "                        ";
                    $context["badgeClass"] = "checkout-navigation__icon--current";
                    // line 24
                    echo "                    ";
                }
                // line 25
                echo "                    <span class=\"checkout-navigation__icon ";
                echo twig_escape_filter($this->env, ($context["badgeClass"] ?? null), "html", null, true);
                echo "\" data-role=\"transition-trigger\">
                        ";
                // line 26
                if (($context["isComplete"] ?? null)) {
                    // line 27
                    echo "                            <i class=\"fa-check\"></i>
                        ";
                } else {
                    // line 29
                    echo "                            ";
                    echo twig_escape_filter($this->env, ($context["pageNum"] ?? null), "html", null, true);
                    echo "
                        ";
                }
                // line 31
                echo "                    </span>
                    <h3 class=\"checkout-navigation__title\">
                        <span data-role=\"transition-trigger\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["step"], "label", array()), array(), "workflows"), "html", null, true);
                echo "</span>
                        ";
                // line 34
                if (((($context["isComplete"] ?? null) && $this->getAttribute(($context["editTransitions"] ?? null), $this->getAttribute($context["step"], "name", array()), array(), "array", true, true)) && $this->getAttribute(($context["block"] ?? null), "step_edit_button", array(), "any", true, true))) {
                    // line 35
                    echo "                            ";
                    $context["editTransitionData"] = $this->getAttribute(($context["editTransitions"] ?? null), $this->getAttribute($context["step"], "name", array()), array(), "array");
                    // line 36
                    echo "                            ";
                    echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), "step_edit_button", array()), 'widget', array("transitionData" =>                     // line 38
($context["editTransitionData"] ?? null), "checkout" =>                     // line 39
($context["checkout"] ?? null)));
                    // line 41
                    echo "
                        ";
                }
                // line 43
                echo "                    </h3>
                    ";
                // line 44
                $context["informationBlockId"] = ($this->getAttribute($context["step"], "name", array()) . "_information");
                // line 45
                echo "                    ";
                if ((($context["isComplete"] ?? null) && $this->getAttribute(($context["block"] ?? null), ($context["informationBlockId"] ?? null), array(), "array", true, true))) {
                    // line 46
                    echo "                        <div class=\"checkout-navigation__content\">
                            ";
                    // line 47
                    echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), "offsetGet", array(0 => ($context["informationBlockId"] ?? null)), "method"), 'widget', array("checkout" => ($context["checkout"] ?? null)));
                    echo "
                        </div>
                    ";
                }
                // line 50
                echo "                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </ul>
    </div>
";
    }

    // line 56
    public function block___oro_checkout_sidebar__enter_billing_address_information_widget($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["__internal_7a31e225b1624df5a219b54387bb9e43095dae984854dab236778cd1b4c0ebc7"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroCheckoutBundle:layouts/default/imports/oro_checkout_sidebar:sidebar.html.twig", 57);
        // line 58
        echo "    ";
        if ($this->getAttribute(($context["checkout"] ?? null), "billingAddress", array())) {
            // line 59
            echo "        <div>";
            echo $context["__internal_7a31e225b1624df5a219b54387bb9e43095dae984854dab236778cd1b4c0ebc7"]->getrenderAddress($this->getAttribute(($context["checkout"] ?? null), "billingAddress", array()));
            echo "</div>
    ";
        }
    }

    // line 63
    public function block___oro_checkout_sidebar__enter_shipping_address_information_widget($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["__internal_b6d9ec03ab13f3ddd5c54ffee9a03111a5abd16e69038d68c79cc1214d71a05c"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroCheckoutBundle:layouts/default/imports/oro_checkout_sidebar:sidebar.html.twig", 64);
        // line 65
        echo "    ";
        if ($this->getAttribute(($context["checkout"] ?? null), "shippingAddress", array())) {
            // line 66
            echo "        <div>";
            echo $context["__internal_b6d9ec03ab13f3ddd5c54ffee9a03111a5abd16e69038d68c79cc1214d71a05c"]->getrenderAddress($this->getAttribute(($context["checkout"] ?? null), "shippingAddress", array()));
            echo "</div>
    ";
        }
    }

    // line 70
    public function block___oro_checkout_sidebar__enter_shipping_method_information_widget($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        if ($this->getAttribute(($context["checkout"] ?? null), "shippingCost", array())) {
            // line 72
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.method_type.sidebar.label", array("%translatedMethodType%" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_type_label')->getCallable(), array($this->getAttribute(            // line 73
($context["checkout"] ?? null), "shippingMethod", array()), $this->getAttribute(($context["checkout"] ?? null), "shippingMethodType", array()))))), "%translatedMethod%" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_label')->getCallable(), array($this->getAttribute(            // line 74
($context["checkout"] ?? null), "shippingMethod", array()))))), "%price%" => $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(            // line 75
($context["checkout"] ?? null), "shippingCost", array()))));
            // line 76
            echo "
    ";
        }
    }

    // line 80
    public function block___oro_checkout_sidebar__enter_payment_information_widget($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        if ($this->getAttribute(($context["checkout"] ?? null), "paymentMethod", array())) {
            // line 82
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodLabel($this->getAttribute(($context["checkout"] ?? null), "paymentMethod", array())), "html", null, true);
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/imports/oro_checkout_sidebar:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 82,  238 => 81,  235 => 80,  229 => 76,  227 => 75,  226 => 74,  225 => 73,  223 => 72,  220 => 71,  217 => 70,  209 => 66,  206 => 65,  203 => 64,  200 => 63,  192 => 59,  189 => 58,  186 => 57,  183 => 56,  177 => 52,  169 => 50,  163 => 47,  160 => 46,  157 => 45,  155 => 44,  152 => 43,  148 => 41,  146 => 39,  145 => 38,  143 => 36,  140 => 35,  138 => 34,  134 => 33,  130 => 31,  124 => 29,  120 => 27,  118 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  96 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  70 => 12,  68 => 11,  64 => 9,  62 => 7,  54 => 3,  51 => 2,  48 => 1,  44 => 80,  41 => 79,  39 => 70,  36 => 69,  34 => 63,  31 => 62,  29 => 56,  26 => 55,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/imports/oro_checkout_sidebar:sidebar.html.twig", "");
    }
}
