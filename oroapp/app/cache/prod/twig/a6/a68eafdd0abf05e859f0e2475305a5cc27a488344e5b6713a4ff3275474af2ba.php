<?php

/* OroCustomerAccountBridgeBundle:Customer/widget:customerInfo.html.twig */
class __TwigTemplate_af7db228e25882d6813022595ebb5a87e2baf20897b4a122f8f29cb823019e60 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerAccountBridgeBundle:Customer/widget:customerInfo.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["activeTab"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method"), null)) : (null));
        // line 4
        $context["uniqueSuffix"] = ("_customer_" . $this->getAttribute(($context["customer"] ?? null), "id", array()));
        // line 5
        ob_start();
        // line 6
        echo "    <div class=\"row-fluid\">
        <br>
        <div class=\"responsive-block\">
            ";
        // line 9
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.name.label"),         // line 11
$context["UI"]->getentityViewLink(($context["customer"] ?? null), $this->getAttribute(($context["customer"] ?? null), "name", array()), "oro_customer_customer_view"));
        // line 12
        echo "

            ";
        // line 14
        if ($this->getAttribute(($context["customer"] ?? null), "group", array())) {
            // line 15
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.group.label"),             // line 17
$context["UI"]->getentityViewLink($this->getAttribute(($context["customer"] ?? null), "group", array()), (($this->getAttribute(($context["customer"] ?? null), "group", array())) ? ($this->getAttribute($this->getAttribute(($context["customer"] ?? null), "group", array()), "name", array())) : (null)), "oro_customer_customer_group_view"));
            // line 18
            echo "
            ";
        }
        // line 20
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 22
        if ($this->getAttribute(($context["customer"] ?? null), "parent", array())) {
            // line 23
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.parent.label"),             // line 25
$context["UI"]->getentityViewLink($this->getAttribute(($context["customer"] ?? null), "parent", array()), (($this->getAttribute(($context["customer"] ?? null), "parent", array())) ? ($this->getAttribute($this->getAttribute(($context["customer"] ?? null), "parent", array()), "name", array())) : (null)), "oro_customer_customer_view"));
            // line 26
            echo "
            ";
        }
        // line 28
        echo "        </div>
    </div>
";
        $context["customer_general_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        $context["tabs"] = array(0 => array("alias" => ("oro_account_customer_general_info" .         // line 33
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.sections.general"), "content" =>         // line 36
($context["customer_general_info"] ?? null), "url" => null));
        // line 40
        echo "
";
        // line 41
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_users" .         // line 43
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_customer_user_info", array("id" => $this->getAttribute(        // line 46
($context["customer"] ?? null), "id", array()))))));
        // line 49
        echo "
";
        // line 50
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_shopping_carts" .         // line 52
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_shopping_lists_info", array("id" => $this->getAttribute(        // line 55
($context["customer"] ?? null), "id", array()))))));
        // line 58
        echo "
";
        // line 59
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_rfqs" .         // line 61
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_rfq_info", array("id" => $this->getAttribute(        // line 64
($context["customer"] ?? null), "id", array()))))));
        // line 67
        echo "
";
        // line 68
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_quotes" .         // line 70
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_quotes_info", array("id" => $this->getAttribute(        // line 73
($context["customer"] ?? null), "id", array()))))));
        // line 76
        echo "
";
        // line 77
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_orders" .         // line 79
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_orders_info", array("id" => $this->getAttribute(        // line 82
($context["customer"] ?? null), "id", array()))))));
        // line 85
        echo "
";
        // line 86
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_account_customer_opportunity" .         // line 88
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_opportunities_info", array("id" => $this->getAttribute(        // line 91
($context["customer"] ?? null), "id", array()))))));
        // line 94
        echo "
";
        // line 95
        $context["tabPanelOptions"] = array("useDropdown" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile());
        // line 98
        if (($context["activeTab"] ?? null)) {
            // line 99
            echo "    ";
            $context["tabPanelOptions"] = twig_array_merge(($context["tabPanelOptions"] ?? null), array("activeTabAlias" => (("oro_account_customer_" .             // line 100
($context["activeTab"] ?? null)) . ($context["uniqueSuffix"] ?? null))));
        }
        // line 103
        echo "
<div class=\"widget-content row-fluid\">
    <div class=\"account-customer-title\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["customer"] ?? null)));
        echo "
        <div class=\"pull-right label label-info orocrm-channel-lifetime-value-label\">
            <b>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.lifetime.label"), "html", null, true);
        echo ":
                ";
        // line 108
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\LifetimeValueExtension')->getLifetimeValue(($context["account"] ?? null), ($context["channel"] ?? null)));
        echo "</b>
        </div>
    </div>
    <div class=\"customer-without-border-tabs\">
        ";
        // line 112
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabPanelOptions"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerAccountBridgeBundle:Customer/widget:customerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 112,  142 => 108,  138 => 107,  133 => 105,  129 => 103,  126 => 100,  124 => 99,  122 => 98,  120 => 95,  117 => 94,  115 => 91,  114 => 88,  113 => 86,  110 => 85,  108 => 82,  107 => 79,  106 => 77,  103 => 76,  101 => 73,  100 => 70,  99 => 68,  96 => 67,  94 => 64,  93 => 61,  92 => 59,  89 => 58,  87 => 55,  86 => 52,  85 => 50,  82 => 49,  80 => 46,  79 => 43,  78 => 41,  75 => 40,  73 => 36,  72 => 33,  71 => 31,  66 => 28,  62 => 26,  60 => 25,  58 => 23,  56 => 22,  52 => 20,  48 => 18,  46 => 17,  44 => 15,  42 => 14,  38 => 12,  36 => 11,  35 => 9,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerAccountBridgeBundle:Customer/widget:customerInfo.html.twig", "");
    }
}
