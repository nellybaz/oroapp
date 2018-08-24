<?php

/* OroMagentoBundle:Order/widget:info.html.twig */
class __TwigTemplate_f1d047c9558ee94b495ca33b1129048e80a440a08a445b2d250259d735bcdb21 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Order/widget:info.html.twig", 1);
        // line 2
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroMagentoBundle:Order/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:Order/widget:info.html.twig", 3);
        // line 4
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroMagentoBundle:Order/widget:info.html.twig", 4);
        // line 5
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 9
        echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.magento.order.data_channel.label");
        echo "

            ";
        // line 11
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.status.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "status", array())));
        echo "
            ";
        // line 12
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.currency.label"), $this->getAttribute(($context["entity"] ?? null), "currency", array()));
        echo "
            ";
        // line 13
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.subtotal_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "subtotalAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 14
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.total_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 15
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.discount_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "discountAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 16
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.coupon_code.label"), $this->getAttribute(($context["entity"] ?? null), "couponCode", array()));
        echo "
            ";
        // line 17
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.tax_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "taxAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 18
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.shipping_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "shippingAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 19
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.total_paid_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalPaidAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 20
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.total_invoiced_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalInvoicedAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 21
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.total_refunded_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalRefundedAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 22
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.total_canceled_amount.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalCanceledAmount", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
            ";
        // line 23
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.payment_method.label"), twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "paymentMethod", array()))));
        echo "
            ";
        // line 24
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.payment_details.label"), $this->getAttribute(($context["entity"] ?? null), "paymentDetails", array()));
        echo "
            ";
        // line 25
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.imported_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "importedAt", array())));
        echo "
            ";
        // line 26
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.synced_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "syncedAt", array())));
        // line 27
        if ($this->getAttribute(($context["entity"] ?? null), "isGuest", array())) {
            // line 28
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.is_guest.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.is_guest.yes"));
        }
        // line 30
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 34
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.shipping_method.label"), twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()))));
        echo "
            ";
        // line 35
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.remote_ip.label"), $this->getAttribute(($context["entity"] ?? null), "remoteIp", array()));
        echo "
            ";
        // line 36
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.gift_message.label"), $this->getAttribute(($context["entity"] ?? null), "giftMessage", array()));
        echo "
            ";
        // line 37
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.store_name.label"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "website", array()), "name", array()));
        echo "
            ";
        // line 38
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.store.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array()))));
        echo "
            ";
        // line 39
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.customer_email.label"), $this->getAttribute(($context["entity"] ?? null), "customerEmail", array()));
        echo "

            ";
        // line 41
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.customer.label"),         // line 43
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customer", array())), "oro_magento_customer_view"));
        // line 44
        echo "

            ";
        // line 46
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.cart.label"),         // line 48
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "cart", array()), (($this->getAttribute(($context["entity"] ?? null), "cart", array())) ? ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_label") . " ") . $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cart", array()), "originId", array()))) : (null)), "oro_magento_cart_view"));
        // line 49
        echo "

            ";
        // line 51
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "addresses", array()))) {
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["orderAddress"]) {
                // line 53
                echo "                    ";
                if ((( !twig_test_empty($this->getAttribute($context["orderAddress"], "types", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["orderAddress"], "types", array()), "first", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["orderAddress"], "types", array()), "first", array()), "name", array()) == "billing"))) {
                    // line 54
                    echo "                        ";
                    $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.billing_address.label");
                    // line 55
                    echo "                    ";
                } else {
                    // line 56
                    echo "                        ";
                    $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.shipping_address.label");
                    // line 57
                    echo "                    ";
                }
                // line 58
                echo "                    ";
                echo $context["ui"]->getrenderHtmlProperty(($context["title"] ?? null), $context["address"]->getrenderAddress($context["orderAddress"]));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "
            ";
        // line 62
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "feedback", array()))) {
            // line 63
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.feedback.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "feedback", array()))));
            echo "
            ";
        }
        // line 65
        echo "
            ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "notes", array()))) {
            // line 67
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.notes.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "notes", array())));
            echo "
            ";
        }
        // line 69
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  201 => 67,  199 => 66,  196 => 65,  190 => 63,  188 => 62,  185 => 61,  182 => 60,  173 => 58,  170 => 57,  167 => 56,  164 => 55,  161 => 54,  158 => 53,  153 => 52,  151 => 51,  147 => 49,  145 => 48,  144 => 46,  140 => 44,  138 => 43,  137 => 41,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  105 => 30,  102 => 28,  100 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 9,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/widget:info.html.twig", "");
    }
}
