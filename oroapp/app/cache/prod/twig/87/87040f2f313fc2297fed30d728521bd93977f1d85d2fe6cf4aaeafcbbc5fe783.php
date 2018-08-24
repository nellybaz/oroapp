<?php

/* OroMagentoBundle:Customer:view.html.twig */
class __TwigTemplate_da84030c89181d5c3de6a3d20b557cc37d372101b3444500f0e4f9f0f3121571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMagentoBundle:Customer:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Customer:view.html.twig", 2);
        // line 3
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroMagentoBundle:Customer:view.html.twig", 3);
        // line 5
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%customer.name%" =>         // line 6
($context["fullname"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "originId", array()) && (($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array(), "any", false, true), "transport", array(), "any", false, true), "adminUrl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array(), "any", false, true), "transport", array(), "any", false, true), "adminUrl", array()), false)) : (false)))) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 11
($context["UI"] ?? null), "clientButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_orderplace", array("id" => $this->getAttribute(            // line 12
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-money", "dataId" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.create_order"), "widget" => array("type" => "dialog", "options" => array("alias" => "transaction-dialog", "stateEnabled" => false, "incrementalPosition" => true, "loadingMaskEnabled" => false, "dialogOptions" => array("dialogClass" => "place-order-transaction-dialog", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.create_order"), "allowMaximize" => true, "allowMinimize" => false, "resizable" => true, "width" => 1000, "height" => 600, "modal" => true))))), "method"), "html", null, true);
            // line 37
            echo "
    ";
        }
        // line 39
        echo "    ";
        $this->loadTemplate("OroMagentoBundle:NewsletterSubscriber:buttons.html.twig", "OroMagentoBundle:Customer:view.html.twig", 39)->display(array_merge($context, array("customer" => ($context["entity"] ?? null))));
        // line 40
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 41
            echo "        ";
            if ($this->getAttribute(($context["entity"] ?? null), "guest", array())) {
                // line 42
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_register", array("id" => $this->getAttribute(                // line 43
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash customer-registration customer-register-action", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.register.label"))), "method"), "html", null, true);
                // line 46
                echo "
            <div class=\"pull-left\"
                 data-page-component-module=\"oromagento/js/app/components/customer-registration-manager\"
                 data-page-component-options=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_update", array("id" => $this->getAttribute(            // line 52
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_label"))), "method"), "html", null, true);
            // line 54
            echo "
    ";
        }
        // line 56
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
    }

    // line 59
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 61
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_plural_label"), "entityTitle" =>         // line 64
($context["fullname"] ?? null));
        // line 66
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 69
    public function block_content_data($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_info", array("id" => $this->getAttribute(        // line 73
($context["entity"] ?? null), "id", array())))));
        // line 74
        echo "
    ";
        $context["customerInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo "
    ";
        // line 77
        $context["generalSubBlocks"] = array(0 => array("data" => array(0 => ($context["customerInformationWidget"] ?? null))));
        // line 78
        echo "
    ";
        // line 79
        ob_start();
        // line 80
        echo "        <div class=\"responsive-cell customer-without-border-tabs\">
            ";
        // line 81
        $context["tabs"] = array(0 => array("alias" => "oro_magento_customer_orders", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_orders_widget", array("customerId" => $this->getAttribute(        // line 88
($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "id", array())))), 1 => array("alias" => "oro_magento_customer_recent_purchases", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.recent_purchases.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_recent_purchases_widget", array("customerId" => $this->getAttribute(        // line 97
($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "id", array())))));
        // line 101
        echo "
            ";
        // line 102
        if ($this->env->getExtension('Oro\Bundle\MagentoBundle\Twig\OrderNotesExtension')->isOrderNotesApplicable(($context["entity"] ?? null))) {
            // line 103
            echo "                ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => "oro_magento_customer_order_notes", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.order_notes.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_order_notes_widget", array("customerId" => $this->getAttribute(            // line 110
($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "id", array()))))));
            // line 114
            echo "            ";
        }
        // line 115
        echo "
            ";
        // line 116
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => "oro_magento_customer_carts", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_carts_widget", array("customerId" => $this->getAttribute(        // line 123
($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "id", array())))), 1 => array("alias" => "oro_magento_customer_credit_memos", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_plural_label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_credit_memo_widget", array("customerId" => $this->getAttribute(        // line 132
($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "id", array()))))));
        // line 136
        echo "            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null));
        echo "
        </div>
    ";
        $context["salesTabsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 139
        echo "
    ";
        // line 140
        ob_start();
        // line 141
        echo "        <div class=\"responsive-cell\">
            ";
        // line 142
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "contentClasses" => array(), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_address_book", array("id" => $this->getAttribute(        // line 145
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.address_book.title")));
        // line 147
        echo "
        </div>
    ";
        $context["customerAddressBookWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 150
        echo "    ";
        $context["generalSubBlocks"] = twig_array_merge(($context["generalSubBlocks"] ?? null), array(0 => array("data" => array(0 => ($context["customerAddressBookWidget"] ?? null)))));
        // line 151
        echo "
    ";
        // line 152
        ob_start();
        // line 153
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_website_activity", $context)) ? (_twig_default_filter(($context["oro_website_activity"] ?? null), "oro_website_activity")) : ("oro_website_activity")), array("customers" => array(0 => ($context["entity"] ?? null)), "byChannel" => false));
        // line 154
        echo "    ";
        $context["websiteActivityTabsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
    ";
        // line 156
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" =>         // line 160
($context["generalSubBlocks"] ?? null)), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.sales.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 165
($context["salesTabsWidget"] ?? null))))));
        // line 169
        echo "
    ";
        // line 170
        if ((twig_length_filter($this->env, twig_trim_filter(($context["websiteActivityTabsWidget"] ?? null))) > 0)) {
            // line 171
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.label"), "priority" => 1050, "subblocks" => array(0 => array("data" => array(0 =>             // line 176
($context["websiteActivityTabsWidget"] ?? null)))))));
            // line 180
            echo "    ";
        }
        // line 181
        echo "
    ";
        // line 182
        if ((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "newsletterSubscribers", array())) > 0)) {
            // line 183
            echo "        ";
            ob_start();
            // line 184
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "newsletterSubscribers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["newsletterSubscriber"]) {
                // line 185
                echo "                ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_info", array("id" => $this->getAttribute(                // line 187
$context["newsletterSubscriber"], "id", array())))));
                // line 188
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterSubscriber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "        ";
            $context["newsletterSubscriberBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 191
            echo "        ";
            if (($context["newsletterSubscriberBlock"] ?? null)) {
                // line 192
                echo "            ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.label"), "subblocks" => array(0 => array("data" => array(0 =>                 // line 196
($context["newsletterSubscriberBlock"] ?? null)))))));
                // line 200
                echo "        ";
            }
            // line 201
            echo "    ";
        }
        // line 202
        echo "
    ";
        // line 203
        $context["id"] = "magentoCustomerView";
        // line 204
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 205
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 205,  260 => 204,  258 => 203,  255 => 202,  252 => 201,  249 => 200,  247 => 196,  245 => 192,  242 => 191,  239 => 190,  232 => 188,  230 => 187,  228 => 185,  223 => 184,  220 => 183,  218 => 182,  215 => 181,  212 => 180,  210 => 176,  208 => 171,  206 => 170,  203 => 169,  201 => 165,  200 => 160,  199 => 156,  196 => 155,  193 => 154,  190 => 153,  188 => 152,  185 => 151,  182 => 150,  177 => 147,  175 => 145,  174 => 142,  171 => 141,  169 => 140,  166 => 139,  159 => 136,  157 => 132,  156 => 123,  155 => 116,  152 => 115,  149 => 114,  147 => 110,  145 => 103,  143 => 102,  140 => 101,  138 => 97,  137 => 88,  136 => 81,  133 => 80,  131 => 79,  128 => 78,  126 => 77,  123 => 76,  119 => 74,  117 => 73,  115 => 71,  112 => 70,  109 => 69,  102 => 66,  100 => 64,  99 => 61,  97 => 60,  94 => 59,  87 => 56,  83 => 54,  81 => 52,  79 => 51,  74 => 49,  69 => 46,  67 => 43,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  52 => 37,  50 => 15,  49 => 12,  48 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  31 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer:view.html.twig", "");
    }
}
