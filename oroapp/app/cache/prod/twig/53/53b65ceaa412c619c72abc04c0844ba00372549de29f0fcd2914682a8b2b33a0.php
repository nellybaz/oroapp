<?php

/* OroPayPalBundle:Form:fields.html.twig */
class __TwigTemplate_5a49f41b4ce78e91ad0abb52f02fe0d6d59aff6b4b569279c8de9367acfcc54e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_paypal_credit_card_expiration_date_widget' => array($this, 'block_oro_paypal_credit_card_expiration_date_widget'),
            '_oro_paypal_credit_card_save_for_later_row' => array($this, 'block__oro_paypal_credit_card_save_for_later_row'),
            'oro_paypal_settings_widget' => array($this, 'block_oro_paypal_settings_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_paypal_credit_card_expiration_date_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_oro_paypal_credit_card_save_for_later_row', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('oro_paypal_settings_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_paypal_credit_card_expiration_date_widget($context, array $blocks = array())
    {
        // line 2
        $context["validation"] = array("credit-card-expiration-date-not-blank" => array("message" => "oro.payment.validation.expiration_date", "payload" => null), "credit-card-expiration-date" => array("message" => "oro.payment.validation.month", "payload" => null));
        // line 7
        echo "    <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " data-validation=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["validation"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__select-container\">
            <div class=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__select ";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__select--exp-month\">
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget', array("attr" => array("data-expiration-date-month" => true)));
        echo "
            </div>
            <div class=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__select ";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__select--exp-year\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget', array("attr" => array("data-expiration-date-year" => true)));
        echo "
            </div>
        </div>
    </div>";
    }

    // line 19
    public function block__oro_paypal_credit_card_save_for_later_row($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 23
    public function block_oro_paypal_settings_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPayPalBundle:Form:fields.html.twig", 24);
        // line 25
        echo "    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.display_options.title"), "html", null, true);
        echo "</span>
        </h5>
        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
        // line 31
        echo $context["UI"]->gettooltip("oro.paypal.settings.label.tooltip", array(), "right");
        echo "
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "creditCardLabels", array()), 'label');
        echo "
            </div>
            <div class=\"controls\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "creditCardLabels", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
        // line 40
        echo $context["UI"]->gettooltip("oro.paypal.settings.short_label.tooltip", array(), "right");
        echo "
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "creditCardShortLabels", array()), 'label');
        echo "
            </div>
            <div class=\"controls\">
                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "creditCardShortLabels", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowedCreditCardTypes", array()), 'row');
        echo "
    </fieldset>
    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.integration.title"), "html", null, true);
        echo "</span>
        </h5>
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partner", array()), 'row');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vendor", array()), 'row');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "user", array()), 'row');
        echo "
        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'row');
        echo "
        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "testMode", array()), 'row');
        echo "
    </fieldset>
    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.advanced_settings.title"), "html", null, true);
        echo "</span>
        </h5>
        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "creditCardPaymentAction", array()), 'row');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "debugMode", array()), 'row');
        echo "
        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requireCVVEntry", array()), 'row');
        echo "
        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
        // line 68
        echo $context["UI"]->gettooltip("oro.paypal.settings.zero_amount_authorization.tooltip", array(), "right");
        echo "
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zeroAmountAuthorization", array()), 'label');
        echo "
            </div>
            <div class=\"controls\">
                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zeroAmountAuthorization", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authorizationForRequiredAmount", array()), 'row');
        echo "
    </fieldset>
    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.connection.title"), "html", null, true);
        echo "</span>
        </h5>
        ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useProxy", array()), 'row');
        echo "
        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proxyHost", array()), 'row');
        echo "
        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proxyPort", array()), 'row');
        echo "
        ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enableSSLVerification", array()), 'row');
        echo "
    </fieldset>
    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.express_checkout.title"), "html", null, true);
        echo "</span>
        </h5>
        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutName", array()), 'row');
        echo "
        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
        // line 93
        echo $context["UI"]->gettooltip("oro.paypal.settings.label.tooltip", array(), "right");
        echo "
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutLabels", array()), 'label');
        echo "
            </div>
            <div class=\"controls\">
                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutLabels", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
        // line 102
        echo $context["UI"]->gettooltip("oro.paypal.settings.short_label.tooltip", array(), "right");
        echo "
                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutShortLabels", array()), 'label');
        echo "
            </div>
            <div class=\"controls\">
                ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutShortLabels", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "expressCheckoutPaymentAction", array()), 'row');
        echo "
    </fieldset>
    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fieldset\">
            <span>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paypal.settings.form.groups.other.title"), "html", null, true);
        echo "</span>
        </h5>
        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </fieldset>
";
    }

    public function getTemplateName()
    {
        return "OroPayPalBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  296 => 115,  291 => 113,  284 => 109,  278 => 106,  272 => 103,  268 => 102,  260 => 97,  254 => 94,  250 => 93,  244 => 90,  239 => 88,  232 => 84,  228 => 83,  224 => 82,  220 => 81,  215 => 79,  208 => 75,  202 => 72,  196 => 69,  192 => 68,  186 => 65,  182 => 64,  178 => 63,  173 => 61,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  145 => 51,  138 => 47,  132 => 44,  126 => 41,  122 => 40,  114 => 35,  108 => 32,  104 => 31,  97 => 27,  93 => 25,  90 => 24,  87 => 23,  80 => 20,  77 => 19,  69 => 13,  63 => 12,  58 => 10,  52 => 9,  48 => 8,  41 => 7,  39 => 2,  36 => 1,  32 => 23,  29 => 22,  27 => 19,  24 => 18,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPayPalBundle:Form:fields.html.twig", "");
    }
}
