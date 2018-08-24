<?php

/* OroMagentoBundle:Cart:view.html.twig */
class __TwigTemplate_c8554fe39f1e866bb126321228651f461855d256453e0dfb8a2e6cb8e424037f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMagentoBundle:Cart:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbMessage' => array($this, 'block_breadcrumbMessage'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Cart:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%cart.id%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "originId", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_cart_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.entity_number", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_label"), "%entityNumber%" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "originId", array()))));
        // line 13
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_breadcrumbMessage($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "statusMessage", array())) {
            // line 18
            echo "        <div class=\"bg-danger mess-pos pull-left\">
            <div class=\"badge badge-warning\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "statusMessage", array())), "html", null, true);
            echo "</div>
        </div>
    ";
        }
    }

    // line 24
    public function block_navButtons($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_cart_actualize", array("id" => $this->getAttribute(        // line 26
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.refresh_label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.refresh_label"), "iCss" => "fa-refresh")), "method"), "html", null, true);
        // line 30
        echo "
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["generalSubblocks"] = array();
        // line 35
        echo "
    ";
        // line 36
        ob_start();
        // line 37
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_cart_widget_info", array("id" => $this->getAttribute(        // line 39
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart_information")));
        // line 41
        echo "
    ";
        $context["cartInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["cartInformationWidget"] ?? null)))));
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute(($context["entity"] ?? null), "customer", array())) {
            // line 46
            echo "        ";
            ob_start();
            // line 47
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_info", array("id" => $this->getAttribute($this->getAttribute(            // line 49
($context["entity"] ?? null), "customer", array()), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer_information")));
            // line 51
            echo "
        ";
            $context["customerInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 53
            echo "        ";
            $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["customerInformationWidget"] ?? null)))));
            // line 54
            echo "    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ($this->getAttribute(($context["entity"] ?? null), "opportunity", array())) {
            // line 57
            echo "        ";
            ob_start();
            // line 58
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_info", array("id" => $this->getAttribute($this->getAttribute(            // line 60
($context["entity"] ?? null), "opportunity", array()), "id", array()))), "title" => "Opportunity Information"));
            // line 62
            echo "
        ";
            $context["opportunityInfoWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            echo "        ";
            $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["opportunityInfoWidget"] ?? null)))));
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    ";
        // line 67
        ob_start();
        // line 68
        echo "        <div class=\"responsive-cell customer-without-border-tabs\">
            ";
        // line 69
        $context["tabs"] = array(0 => array("alias" => "oro_magento_cart_items_active", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.active_cart_items.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_cart_widget_items", array("id" => $this->getAttribute(        // line 76
($context["entity"] ?? null), "id", array()), "isRemoved" => 0))), 1 => array("alias" => "oro_magento_cart_items_deleted", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.deleted_cart_items.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_cart_widget_items", array("id" => $this->getAttribute(        // line 85
($context["entity"] ?? null), "id", array()), "isRemoved" => 1))));
        // line 89
        echo "            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null));
        echo "
        </div>
    ";
        $context["itemsTabsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 92
        echo "
    ";
        // line 93
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.general_information"), "class" => "active", "subblocks" =>         // line 97
($context["generalSubblocks"] ?? null)), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.cart_items.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 102
($context["itemsTabsWidget"] ?? null))))));
        // line 106
        echo "
    ";
        // line 107
        $context["id"] = "magentoCartView";
        // line 108
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 109
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Cart:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 109,  178 => 108,  176 => 107,  173 => 106,  171 => 102,  170 => 97,  169 => 93,  166 => 92,  159 => 89,  157 => 85,  156 => 76,  155 => 69,  152 => 68,  150 => 67,  147 => 66,  144 => 65,  141 => 64,  137 => 62,  135 => 60,  133 => 58,  130 => 57,  128 => 56,  125 => 55,  122 => 54,  119 => 53,  115 => 51,  113 => 49,  111 => 47,  108 => 46,  106 => 45,  103 => 44,  100 => 43,  96 => 41,  94 => 39,  92 => 37,  90 => 36,  87 => 35,  84 => 34,  81 => 33,  76 => 30,  74 => 26,  72 => 25,  69 => 24,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  45 => 13,  43 => 11,  42 => 8,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Cart:view.html.twig", "");
    }
}
