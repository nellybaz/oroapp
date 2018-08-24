<?php

/* OroMagentoBundle:Customer/widget:customerInfo.html.twig */
class __TwigTemplate_425ca48d686a57d97c908e26b189c8ec7e280cb5c9f613ac43b93891b1b020bf extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Customer/widget:customerInfo.html.twig", 1);
        // line 2
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroMagentoBundle:Customer/widget:customerInfo.html.twig", 2);
        // line 3
        $context["activeTab"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method"), null)) : (null));
        // line 4
        $context["uniqueSuffix"] = ((("_customer_" . $this->getAttribute(($context["customer"] ?? null), "id", array())) . "_channel_") . $this->getAttribute(($context["channel"] ?? null), "id", array()));
        // line 5
        ob_start();
        // line 6
        echo "    <div class=\"row-fluid\">
        ";
        // line 7
        $this->loadTemplate("OroAnalyticsBundle::label.html.twig", "OroMagentoBundle:Customer/widget:customerInfo.html.twig", 7)->display(array_merge($context, array("entity" => ($context["customer"] ?? null), "vertical" => true)));
        // line 8
        echo "        <div class=\"responsive-block\">
            ";
        // line 9
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.name.label"),         // line 11
$context["UI"]->getentityViewLink(($context["customer"] ?? null), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["customer"] ?? null)), "oro_magento_customer_view"));
        // line 12
        echo "

            ";
        // line 14
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.email.label"), $context["EmailActions"]->getsendEmailLink($this->getAttribute(($context["customer"] ?? null), "email", array()), ($context["customer"] ?? null)));
        echo "
            ";
        // line 15
        if ($this->getAttribute(($context["customer"] ?? null), "group", array())) {
            // line 16
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.group.label"), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "group", array()), "name", array()));
            echo "
            ";
        }
        // line 18
        echo "            ";
        if ($this->getAttribute(($context["customer"] ?? null), "website", array())) {
            // line 19
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.website.label"), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "website", array()), "name", array()));
            echo "
            ";
        }
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["customer"] ?? null), "store", array())) {
            // line 22
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.store.label"), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "store", array()), "name", array()));
            echo "
            ";
        }
        // line 24
        ob_start();
        // line 25
        echo (( !twig_test_empty($this->getAttribute(($context["customer"] ?? null), "birthday", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["customer"] ?? null), "birthday", array()))) : (null));
        echo "
                ";
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["customer"] ?? null), "birthday", array()))) {
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["customer"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")";
        }
        $context["birthdayData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "</div>
        <div class=\"responsive-block\">
            ";
        // line 30
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.birthday.label"), (($this->getAttribute(($context["customer"] ?? null), "birthday", array())) ? (($context["birthdayData"] ?? null)) : (null)));
        echo "
            ";
        // line 31
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.gender.label"), $this->env->getExtension('Oro\Bundle\UserBundle\Twig\OroUserExtension')->getGenderLabel($this->getAttribute(($context["customer"] ?? null), "gender", array())));
        echo "
            ";
        // line 32
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.vat.label"), $this->getAttribute(($context["customer"] ?? null), "vat", array()));
        echo "

            ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute(($context["customer"] ?? null), "newsletterSubscribers", array())) > 0)) {
            // line 35
            echo "                ";
            ob_start();
            // line 36
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customer"] ?? null), "newsletterSubscribers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["newsletterSubscriber"]) {
                // line 37
                echo "                        ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_info", array("id" => $this->getAttribute(                // line 39
$context["newsletterSubscriber"], "id", array())))));
                // line 40
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterSubscriber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                ";
            $context["newsletterSubscriberBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "                ";
            if (($context["newsletterSubscriberBlock"] ?? null)) {
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, ($context["newsletterSubscriberBlock"] ?? null), "html", null, true);
                echo "
                ";
            }
            // line 46
            echo "            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        $context["customer_general_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        $context["tabs"] = array(0 => array("alias" => ("oro_magento_customer_general_info" .         // line 52
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.general_info"), "content" =>         // line 55
($context["customer_general_info"] ?? null), "url" => null));
        // line 59
        if (twig_in_filter(($context["orderClassName"] ?? null), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "dataChannel", array()), "entities", array()))) {
            // line 60
            echo "    ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_magento_customer_orders" .             // line 62
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_orders", array("customerId" => $this->getAttribute(            // line 65
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "channel", array()), "id", array())))), 1 => array("alias" => ("oro_magento_customer_recent_purchases" .             // line 68
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.recent_purchases.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_recent_purchases", array("customerId" => $this->getAttribute(            // line 71
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "channel", array()), "id", array()))))));
        }
        // line 75
        echo "
";
        // line 76
        if ($this->env->getExtension('Oro\Bundle\MagentoBundle\Twig\OrderNotesExtension')->isOrderNotesApplicable(($context["customer"] ?? null))) {
            // line 77
            echo "    ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_magento_customer_order_notes" .             // line 79
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.order_notes.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_order_notes", array("customerId" => $this->getAttribute(            // line 82
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "channel", array()), "id", array()))))));
        }
        // line 86
        echo "
";
        // line 87
        if (twig_in_filter(($context["cartClassName"] ?? null), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "dataChannel", array()), "entities", array()))) {
            // line 88
            echo "    ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_magento_customer_carts" .             // line 90
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_carts", array("customerId" => $this->getAttribute(            // line 93
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "channel", array()), "id", array()))))));
        }
        // line 97
        if (twig_in_filter(($context["creditMemoClassName"] ?? null), $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "dataChannel", array()), "entities", array()))) {
            // line 98
            echo "    ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_magento_customer_credit_memos" .             // line 100
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_credit_memo", array("customerId" => $this->getAttribute(            // line 103
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["customer"] ?? null), "channel", array()), "id", array()))))));
        }
        // line 107
        $context["tabPanelOptions"] = array("useDropdown" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile());
        // line 110
        if (($context["activeTab"] ?? null)) {
            // line 111
            echo "    ";
            $context["tabPanelOptions"] = twig_array_merge(($context["tabPanelOptions"] ?? null), array("activeTabAlias" => (("oro_magento_customer_" .             // line 112
($context["activeTab"] ?? null)) . ($context["uniqueSuffix"] ?? null))));
        }
        // line 115
        echo "
<div class=\"widget-content row-fluid\">
    <div class=\"account-customer-title\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["customer"] ?? null)));
        echo "
        <div class=\"pull-right label label-info orocrm-channel-lifetime-value-label\">
            <b>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.lifetime.label"), "html", null, true);
        echo ":
                ";
        // line 120
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\LifetimeValueExtension')->getLifetimeValue($this->getAttribute(($context["customer"] ?? null), "account", array()), ($context["channel"] ?? null)));
        echo "</b>
        </div>
    </div>
    <div class=\"customer-without-border-tabs\">
        ";
        // line 124
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabPanelOptions"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer/widget:customerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 124,  211 => 120,  207 => 119,  202 => 117,  198 => 115,  195 => 112,  193 => 111,  191 => 110,  189 => 107,  186 => 103,  185 => 100,  183 => 98,  181 => 97,  178 => 93,  177 => 90,  175 => 88,  173 => 87,  170 => 86,  167 => 82,  166 => 79,  164 => 77,  162 => 76,  159 => 75,  156 => 71,  155 => 68,  154 => 65,  153 => 62,  151 => 60,  149 => 59,  147 => 55,  146 => 52,  145 => 50,  140 => 47,  137 => 46,  131 => 44,  128 => 43,  125 => 42,  118 => 40,  116 => 39,  114 => 37,  109 => 36,  106 => 35,  104 => 34,  99 => 32,  95 => 31,  91 => 30,  87 => 28,  80 => 26,  76 => 25,  74 => 24,  68 => 22,  65 => 21,  59 => 19,  56 => 18,  50 => 16,  48 => 15,  44 => 14,  40 => 12,  38 => 11,  37 => 9,  34 => 8,  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer/widget:customerInfo.html.twig", "");
    }
}
