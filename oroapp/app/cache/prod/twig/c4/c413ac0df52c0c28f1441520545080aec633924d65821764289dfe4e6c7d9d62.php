<?php

/* OroOrderBundle:Order:view.html.twig */
class __TwigTemplate_346d55b7585f23fa705f088a2e6aea434a2adad5edbbc5876020a28e53128086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroOrderBundle:Order:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrderBundle:Order:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%identifier%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "identifier", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.navigation.view", array("%identifier%" => (($this->getAttribute(        // line 12
($context["entity"] ?? null), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "identifier", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 15
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.widgets.order_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_info", array("id" => $this->getAttribute(        // line 23
($context["entity"] ?? null), "id", array())))));
        // line 24
        echo "
    ";
        $context["orderInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "view_general_section_before", array("entity" =>         // line 29
($context["entity"] ?? null))), 1 =>         // line 30
($context["orderInformationWidget"] ?? null), 2 => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, "view_general_section_after", array("entity" =>         // line 31
($context["entity"] ?? null))))));
        // line 34
        echo "
    ";
        // line 35
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.general"), "class" => "active", "priority" =>  -200, "subblocks" =>         // line 40
($context["generalSectionBlocks"] ?? null)));
        // line 43
        echo "
    ";
        // line 44
        ob_start();
        // line 45
        echo "        ";
        $this->loadTemplate("OroPricingBundle:Totals:totals.html.twig", "OroOrderBundle:Order:view.html.twig", 45)->display(array("pageComponent" => "oroorder/js/app/components/totals-component", "options" => array("totals" =>         // line 47
($context["totals"] ?? null))));
        // line 49
        echo "    ";
        $context["orderTotals"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
    ";
        // line 51
        ob_start();
        // line 52
        if (($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()) && $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array()))) {
            // line 53
            $context["shippingMethodLabel"] = $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderShippingExtension')->getShippingMethodLabel($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()), $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array()));
            // line 54
            echo "
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_method.label"), 1 => ($context["shippingMethodLabel"] ?? null)), "method"), "html", null, true);
        }
        // line 58
        if ( !(null === $this->getAttribute(($context["entity"] ?? null), "shippingCost", array()))) {
            // line 59
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_cost.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(            // line 60
($context["entity"] ?? null), "shippingCost", array()), "value", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingCost", array()), "currency", array())))), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 62
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_cost.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "method"), "html", null, true);
            echo "
        ";
        }
        // line 64
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "shippingTrackings", array(), "any", true, true)) {
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.entity_label"), 1 => $context["dataGrid"]->getrenderGrid("order-shipping-trackings-grid", array("order_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid order-shipping-trackings-grid"))), "method"), "html", null, true);
            echo "
        ";
        }
        // line 67
        echo "    ";
        $context["shippingInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
    ";
        // line 69
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.order_line_items"), "priority" =>  -150, "subblocks" => array(0 => array("data" => array(0 =>         // line 72
$context["dataGrid"]->getrenderGrid("order-line-items-grid", array("order_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))), "spanClass" => "order-line-items")))));
        // line 74
        echo "
    ";
        // line 75
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.shipping_information"), "priority" =>  -100, "subblocks" => array(0 => array("data" => array(0 =>         // line 78
($context["shippingInformation"] ?? null)))))));
        // line 80
        echo "
    ";
        // line 81
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("discounts" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.discounts"), "priority" =>  -75, "subblocks" => array(0 => array("data" => array(0 => $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->getTemplateContent($this->env, "OroOrderBundle:Discount:order_discount_view_collection.html.twig", array("entity" =>         // line 86
($context["entity"] ?? null)))))))));
        // line 90
        echo "
    ";
        // line 91
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.order_totals"), "priority" =>  -50, "subblocks" => array(0 => array("data" => array(0 =>         // line 94
($context["orderTotals"] ?? null)))))));
        // line 96
        echo "
    ";
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW_PAYMENT_HISTORY", ($context["entity"] ?? null))) {
            // line 98
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.payment_history"), "priority" =>  -20, "subblocks" => array(0 => array("data" => array(0 =>             // line 101
$context["dataGrid"]->getrenderGrid("order-payment-transactions-grid", array("order_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))))))));
            // line 103
            echo "    ";
        }
        // line 104
        echo "
    ";
        // line 105
        $context["id"] = "order-view";
        // line 106
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 107
        echo "
    ";
        // line 108
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 108,  176 => 107,  173 => 106,  171 => 105,  168 => 104,  165 => 103,  163 => 101,  161 => 98,  159 => 97,  156 => 96,  154 => 94,  153 => 91,  150 => 90,  148 => 86,  147 => 81,  144 => 80,  142 => 78,  141 => 75,  138 => 74,  136 => 72,  135 => 69,  132 => 68,  129 => 67,  123 => 65,  120 => 64,  114 => 62,  109 => 60,  107 => 59,  105 => 58,  102 => 55,  99 => 54,  97 => 53,  95 => 52,  93 => 51,  90 => 50,  87 => 49,  85 => 47,  83 => 45,  81 => 44,  78 => 43,  76 => 40,  75 => 35,  72 => 34,  70 => 31,  69 => 30,  68 => 29,  67 => 27,  64 => 26,  60 => 24,  58 => 23,  56 => 20,  53 => 19,  50 => 18,  43 => 15,  41 => 12,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order:view.html.twig", "");
    }
}
