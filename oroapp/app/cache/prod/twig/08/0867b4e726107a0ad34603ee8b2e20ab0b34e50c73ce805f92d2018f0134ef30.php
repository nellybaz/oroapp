<?php

/* OroMagentoBundle:Order:view.html.twig */
class __TwigTemplate_d04dca2e606e00c58bba6ae98b328f1d840c921faa605d5cfd80a698b9b421c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMagentoBundle:Order:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Order:view.html.twig", 2);
        // line 3
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroMagentoBundle:Order:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%order.incrementId%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "incrementId", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 9
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.entity_number", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label"), "%entityNumber%" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "incrementId", array()))));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_actualize", array("id" => $this->getAttribute(        // line 19
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.refresh_label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.refresh_label"), "iCss" => "fa-refresh")), "method"), "html", null, true);
        // line 23
        echo "
";
    }

    // line 26
    public function block_content_data($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["generalSubblocks"] = array();
        // line 28
        echo "
    ";
        // line 29
        ob_start();
        // line 30
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_widget_info", array("id" => $this->getAttribute(        // line 32
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order_information")));
        // line 34
        echo "
    ";
        $context["orderInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "    ";
        $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["orderInformationWidget"] ?? null)))));
        // line 37
        echo "
    ";
        // line 38
        if (($this->getAttribute(($context["entity"] ?? null), "customer", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_customer_view"))) {
            // line 39
            echo "        ";
            ob_start();
            // line 40
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_info", array("id" => $this->getAttribute($this->getAttribute(            // line 42
($context["entity"] ?? null), "customer", array()), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer_information")));
            // line 44
            echo "
        ";
            $context["customerInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "        ";
            $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["customerInformationWidget"] ?? null)))));
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.general_information"), "class" => "active", "subblocks" =>         // line 53
($context["generalSubblocks"] ?? null)));
        // line 56
        echo "
    ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_cart_view")) {
            // line 58
            echo "        ";
            ob_start();
            // line 59
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_widget_items", array("id" => $this->getAttribute(            // line 61
($context["entity"] ?? null), "id", array())))));
            // line 62
            echo "
        ";
            $context["orderItemsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            echo "
        ";
            // line 65
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.items.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 69
($context["orderItemsWidget"] ?? null)))))));
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_credit_memo_view")) {
            // line 76
            echo "        ";
            ob_start();
            // line 77
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_credit_memo_widget", array("orderId" => $this->getAttribute(            // line 79
($context["entity"] ?? null), "id", array())))));
            // line 80
            echo "
        ";
            $context["orderCreditMemoWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 82
            echo "
        ";
            // line 83
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.credit_memos.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 87
($context["orderCreditMemoWidget"] ?? null)))))));
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if ($this->env->getExtension('Oro\Bundle\MagentoBundle\Twig\OrderNotesExtension')->isOrderNotesApplicable(($context["entity"] ?? null))) {
            // line 94
            echo "        ";
            ob_start();
            // line 95
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_notes_widget", array("orderId" => $this->getAttribute(            // line 97
($context["entity"] ?? null), "id", array())))));
            // line 98
            echo "
        ";
            $context["orderNotesWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 100
            echo "
        ";
            // line 101
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.order_notes.short_label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 105
($context["orderNotesWidget"] ?? null)))))));
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        $context["id"] = "magentoOrderView";
        // line 112
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 113
        echo "
    ";
        // line 114
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 114,  198 => 113,  195 => 112,  193 => 111,  190 => 110,  187 => 109,  185 => 105,  184 => 101,  181 => 100,  177 => 98,  175 => 97,  173 => 95,  170 => 94,  168 => 93,  165 => 92,  162 => 91,  160 => 87,  159 => 83,  156 => 82,  152 => 80,  150 => 79,  148 => 77,  145 => 76,  143 => 75,  140 => 74,  137 => 73,  135 => 69,  134 => 65,  131 => 64,  127 => 62,  125 => 61,  123 => 59,  120 => 58,  118 => 57,  115 => 56,  113 => 53,  112 => 49,  109 => 48,  106 => 47,  103 => 46,  99 => 44,  97 => 42,  95 => 40,  92 => 39,  90 => 38,  87 => 37,  84 => 36,  80 => 34,  78 => 32,  76 => 30,  74 => 29,  71 => 28,  68 => 27,  65 => 26,  60 => 23,  58 => 19,  56 => 18,  53 => 17,  46 => 14,  44 => 12,  43 => 9,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order:view.html.twig", "");
    }
}
