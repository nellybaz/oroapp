<?php

/* OroMagentoBundle:CreditMemo/widget:info.html.twig */
class __TwigTemplate_433a676cc901420e3c6e1907ba115e1b1420c92526f4e4b2e201d05a712b541d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:CreditMemo/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:CreditMemo/widget:info.html.twig", 2);
        // line 3
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroMagentoBundle:CreditMemo/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.magento.creditmemo.data_channel.label");
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.store.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array()))));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.increment_id.label"), $this->getAttribute(($context["entity"] ?? null), "incrementId", array()));
        echo "
            ";
        // line 11
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.imported_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "importedAt", array())));
        echo "
            ";
        // line 12
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.synced_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "syncedAt", array())));
        echo "
            ";
        // line 13
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.transaction_id.label"), $this->getAttribute(($context["entity"] ?? null), "transactionId", array()));
        echo "
            ";
        // line 14
        ob_start();
        // line 15
        echo "                ";
        if (($this->getAttribute(($context["entity"] ?? null), "order", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_order_view"))) {
            // line 16
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 17
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label") . " ") . $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "incrementId", array())), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 20
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("N/A", array(), "messages");
            // line 21
            echo "                ";
        }
        // line 22
        echo "            ";
        $context["orderData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "            ";
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.order.label"), ($context["orderData"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 27
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.grand_total.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "grandTotal", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "currency", array()))));
        echo "
            ";
        // line 28
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.subtotal.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "subtotal", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "currency", array()))));
        echo "
            ";
        // line 29
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.adjustment_negative.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "adjustmentNegative", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "currency", array()))));
        echo "
            ";
        // line 30
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.adjustment_positive.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "adjustmentPositive", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "currency", array()))));
        echo "
            ";
        // line 31
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.shipping_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "shippingAmount", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "order", array()), "currency", array()))));
        echo "
            ";
        // line 32
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.customer_bal_total_refunded.label"), $this->getAttribute(($context["entity"] ?? null), "customerBalTotalRefunded", array()));
        echo "
            ";
        // line 33
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.reward_points_balance_refund.label"), $this->getAttribute(($context["entity"] ?? null), "rewardPointsBalanceRefund", array()));
        echo "
            ";
        // line 34
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:CreditMemo/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  65 => 17,  60 => 16,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:CreditMemo/widget:info.html.twig", "");
    }
}
