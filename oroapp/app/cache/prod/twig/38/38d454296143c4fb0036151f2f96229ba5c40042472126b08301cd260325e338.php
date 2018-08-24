<?php

/* OroSalesBundle:B2bCustomer/widget:customerInfo.html.twig */
class __TwigTemplate_9bb0575239bc9b7663fc58ae75e9bda64e498bf4b501f36bcbdfa24a89769aa5 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:customerInfo.html.twig", 1);
        // line 2
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:customerInfo.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["activeTab"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "_activeTab"), "method"), null)) : (null));
        // line 5
        $context["uniqueSuffix"] = ((("_customer_" . $this->getAttribute(($context["customer"] ?? null), "id", array())) . "_channel_") . $this->getAttribute(($context["channel"] ?? null), "id", array()));
        // line 6
        ob_start();
        // line 7
        echo "    <div class=\"row-fluid\">
        <br>
        <div class=\"responsive-block\">
            ";
        // line 10
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.name.label"),         // line 12
$context["UI"]->getentityViewLink(($context["customer"] ?? null), $this->getAttribute(($context["customer"] ?? null), "name", array()), "oro_sales_b2bcustomer_view"));
        // line 13
        echo "
            ";
        // line 14
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.contact.label"),         // line 16
$context["UI"]->getentityViewLink($this->getAttribute(($context["customer"] ?? null), "contact", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["customer"] ?? null), "contact", array())), "oro_contact_view"));
        // line 17
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 20
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.shipping_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["customer"] ?? null), "shippingAddress", array())));
        echo "
            ";
        // line 21
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.billing_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["customer"] ?? null), "billingAddress", array())));
        echo "
        </div>
    </div>
";
        $context["customer_general_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        $context["tabs"] = array(0 => array("alias" => ("oro_sales_b2bcustomer_general_info" .         // line 27
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.sections.general"), "content" =>         // line 30
($context["customer_general_info"] ?? null), "url" => null));
        // line 34
        echo "
";
        // line 35
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_sales_b2bcustomer_leads" .         // line 37
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.leads.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_widget_leads", array("id" => $this->getAttribute(        // line 40
($context["customer"] ?? null), "id", array()))))));
        // line 43
        echo "
";
        // line 44
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_sales_b2bcustomer_opportunities" .         // line 46
($context["uniqueSuffix"] ?? null)), "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.opportunities.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_widget_opportunities", array("id" => $this->getAttribute(        // line 49
($context["customer"] ?? null), "id", array()))))));
        // line 52
        echo "
";
        // line 53
        $context["tabPanelOptions"] = array("useDropdown" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile());
        // line 56
        if (($context["activeTab"] ?? null)) {
            // line 57
            echo "    ";
            $context["tabPanelOptions"] = twig_array_merge(($context["tabPanelOptions"] ?? null), array("activeTabAlias" => (("oro_sales_b2bcustomer_" .             // line 58
($context["activeTab"] ?? null)) . ($context["uniqueSuffix"] ?? null))));
        }
        // line 61
        echo "
<div class=\"widget-content row-fluid\">
    <div class=\"account-customer-title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["customer"] ?? null)));
        echo "
        <div class=\"pull-right label label-info orocrm-channel-lifetime-value-label\">
            <b>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.lifetime.label"), "html", null, true);
        echo ":
                ";
        // line 66
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\LifetimeValueExtension')->getLifetimeValue($this->getAttribute(($context["customer"] ?? null), "account", array()), ($context["channel"] ?? null)));
        echo "</b>
        </div>
    </div>
    <div class=\"customer-without-border-tabs\">
        ";
        // line 70
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabPanelOptions"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer/widget:customerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 70,  105 => 66,  101 => 65,  96 => 63,  92 => 61,  89 => 58,  87 => 57,  85 => 56,  83 => 53,  80 => 52,  78 => 49,  77 => 46,  76 => 44,  73 => 43,  71 => 40,  70 => 37,  69 => 35,  66 => 34,  64 => 30,  63 => 27,  62 => 25,  55 => 21,  51 => 20,  46 => 17,  44 => 16,  43 => 14,  40 => 13,  38 => 12,  37 => 10,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer/widget:customerInfo.html.twig", "");
    }
}
