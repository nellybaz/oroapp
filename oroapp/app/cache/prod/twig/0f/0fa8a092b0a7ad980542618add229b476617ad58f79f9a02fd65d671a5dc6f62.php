<?php

/* OroPayPalBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig */
class __TwigTemplate_1add45ec70b7c69d87d056244e0f53971efa05154a4b2c37dd957c32a07087de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_payment_methods_paypal_express_checkout_widget' => array($this, 'block__payment_methods_paypal_express_checkout_widget'),
            '_payment_methods_paypal_credit_card_widget' => array($this, 'block__payment_methods_paypal_credit_card_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_payment_methods_paypal_express_checkout_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_payment_methods_paypal_credit_card_widget', $context, $blocks);
    }

    // line 1
    public function block__payment_methods_paypal_express_checkout_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods\">
        <img class=\"checkout-form__img\" src=\"";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36cb536_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36cb536_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/36cb536_pp-express-checkout-method_1.png");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        } else {
            // asset "36cb536"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36cb536") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/36cb536.png");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        }
        unset($context["asset_url"]);
        echo "\">
        <div>";
        // line 4
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.payflow_express_checkout.redirect_to_paypal"), "html", null, true));
        echo "</div>
    </div>
";
    }

    // line 8
    public function block__payment_methods_paypal_credit_card_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(        // line 10
($context["view"] ?? null), "options", array()), "formView", array()), 'widget', array("class_prefix" =>         // line 11
($context["class_prefix"] ?? null), "paymentMethod" => ($context["name"] ?? null), "options" => $this->getAttribute(($context["view"] ?? null), "options", array())));
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPayPalBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 11,  63 => 10,  61 => 9,  58 => 8,  51 => 4,  38 => 3,  33 => 2,  30 => 1,  26 => 8,  23 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPayPalBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig", "");
    }
}
