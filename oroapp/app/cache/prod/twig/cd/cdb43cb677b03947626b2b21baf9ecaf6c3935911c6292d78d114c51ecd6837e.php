<?php

/* OroAbandonedCartBundle:AbandonedCart:view.html.twig */
class __TwigTemplate_0d77fa6238478343ab6f43cd8b9cd3c37e25d23b82e799e925ccfa7356730bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 4);
        // line 5
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 5);
        // line 6
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 6);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 8
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("abandoned_cart_mailchimp_menu", $context)) ? (_twig_default_filter(($context["abandoned_cart_mailchimp_menu"] ?? null), "abandoned_cart_mailchimp_menu")) : ("abandoned_cart_mailchimp_menu")), array("entity" => ($context["entity"] ?? null)));
        // line 12
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 13
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_update", array("id" => $this->getAttribute(            // line 14
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_label")));
            // line 16
            echo "
    ";
        }
        // line 18
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 19
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_delete", array("id" => $this->getAttribute(            // line 20
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_label")));
            // line 26
            echo "
    ";
        }
    }

    // line 30
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 32
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.abandonedcartcampaign.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 35
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 37
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_content_data($context, array $blocks = array())
    {
        // line 41
        ob_start();
        // line 42
        echo "<div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 44
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 45
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "

            ";
        // line 47
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "segment", array()))) {
            // line 48
            ob_start();
            // line 49
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_segment_view")) {
                // line 50
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "name", array()), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 54
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "name", array()), "html", null, true);
                echo "
                ";
            }
            $context["segmentData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 58
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label"), ($context["segmentData"] ?? null));
            echo "
            ";
        }
        // line 61
        if (($context["campaign"] ?? null)) {
            // line 62
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_campaign_view")) {
                // line 63
                $context["campaignView"] = (((("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_campaign_view", array("id" => $this->getAttribute(($context["campaign"] ?? null), "id", array())))) . "\">") . twig_escape_filter($this->env, $this->getAttribute(($context["campaign"] ?? null), "name", array()))) . "</a>");
            } else {
                // line 65
                $context["campaignView"] = twig_escape_filter($this->env, $this->getAttribute(($context["campaign"] ?? null), "name", array()));
            }
            // line 67
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.campaign.label"), ($context["campaignView"] ?? null));
        }
        // line 70
        ob_start();
        // line 71
        if ($this->getAttribute(($context["entity"] ?? null), "owner", array())) {
            // line 72
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
            echo "
                    ";
            // line 73
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
        }
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.owner.label"), ($context["ownerData"] ?? null));
        echo "

        </div>
        <div class=\"responsive-block\">
            ";
        // line 80
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>";
        $context["listInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 85
        ob_start();
        // line 86
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("marketing_list_sync_info", $context)) ? (_twig_default_filter(($context["marketing_list_sync_info"] ?? null), "marketing_list_sync_info")) : ("marketing_list_sync_info")), array("marketingList" => ($context["entity"] ?? null)));
        $context["syncStatusData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 89
        $context["itemsGridName"] = (($context["gridName"] ?? null) . "_items");
        // line 90
        echo "    ";
        $context["removedItemsGridName"] = (($context["gridName"] ?? null) . "_removed_items");
        // line 91
        echo "    ";
        $context["itemsMixin"] = "oro-marketing-list-items-mixin";
        // line 92
        echo "    ";
        $context["removedItemsMixin"] = "oro-marketing-list-removed-items-mixin";
        // line 93
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "manual", array())) {
            // line 94
            echo "        ";
            $context["itemsMixin"] = "oro-marketing-list-manual-items-mixin";
            // line 95
            echo "        ";
            $context["removedItemsMixin"] = "oro-marketing-list-manual-removed-items-mixin";
            // line 96
            echo "    ";
        }
        // line 97
        ob_start();
        // line 98
        echo $context["dataGrid"]->getrenderGrid(($context["itemsGridName"] ?? null), array("grid-mixin" => ($context["itemsMixin"] ?? null)));
        $context["listData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        ob_start();
        // line 101
        echo $context["dataGrid"]->getrenderGrid(($context["removedItemsGridName"] ?? null), array("grid-mixin" => ($context["removedItemsMixin"] ?? null)));
        $context["removedItemsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 104
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["listInformation"] ?? null))));
        // line 105
        echo "    ";
        if ( !twig_test_empty(($context["syncStatusData"] ?? null))) {
            // line 106
            echo "        ";
            $context["generalSectionBlocks"] = twig_array_merge(($context["generalSectionBlocks"] ?? null), array(0 => array("data" => array(0 =>             // line 107
($context["syncStatusData"] ?? null)))));
            // line 109
            echo "    ";
        }
        // line 111
        ob_start();
        // line 112
        $this->loadTemplate("OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", 112)->display($context);
        $context["abandonedCartCampaignStatisticsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 115
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.block.general"), "class" => "active", "subblocks" =>         // line 119
($context["generalSectionBlocks"] ?? null)), 1 => array("title" => $this->getAttribute(        // line 122
($context["config"] ?? null), "plural_label", array()), "subblocks" => array(0 => array("data" => array(0 =>         // line 124
($context["listData"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.block.removed"), "subblocks" => array(0 => array("data" => array(0 =>         // line 130
($context["removedItemsGrid"] ?? null))))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.block.conversion"), "subblocks" => array(0 => array("data" => array(0 =>         // line 136
($context["abandonedCartCampaignStatisticsData"] ?? null))))));
        // line 140
        echo "
    <div data-page-component-module=\"oromarketinglist/js/app/components/grid-linker\"
         data-page-component-options=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("main" =>         // line 143
($context["itemsGridName"] ?? null), "secondary" => ($context["removedItemsGridName"] ?? null)), 1 => array("main" =>         // line 144
($context["removedItemsGridName"] ?? null), "secondary" => ($context["itemsGridName"] ?? null)))), "html", null, true);
        // line 145
        echo "\"></div>

    ";
        // line 147
        $context["id"] = "abandonedcartListView";
        // line 148
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 149
        echo "
    ";
        // line 150
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAbandonedCartBundle:AbandonedCart:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 150,  254 => 149,  251 => 148,  249 => 147,  245 => 145,  243 => 144,  242 => 143,  241 => 142,  237 => 140,  235 => 136,  234 => 130,  233 => 124,  232 => 122,  231 => 119,  230 => 115,  227 => 112,  225 => 111,  222 => 109,  220 => 107,  218 => 106,  215 => 105,  213 => 104,  210 => 101,  208 => 100,  205 => 98,  203 => 97,  200 => 96,  197 => 95,  194 => 94,  191 => 93,  188 => 92,  185 => 91,  182 => 90,  180 => 89,  177 => 86,  175 => 85,  169 => 80,  162 => 76,  158 => 73,  154 => 72,  152 => 71,  150 => 70,  147 => 67,  144 => 65,  141 => 63,  139 => 62,  137 => 61,  132 => 58,  125 => 54,  119 => 51,  114 => 50,  112 => 49,  110 => 48,  108 => 47,  103 => 45,  99 => 44,  95 => 42,  93 => 41,  90 => 40,  83 => 37,  81 => 35,  80 => 32,  78 => 31,  75 => 30,  69 => 26,  67 => 24,  66 => 20,  64 => 19,  61 => 18,  57 => 16,  55 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  40 => 1,  38 => 8,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAbandonedCartBundle:AbandonedCart:view.html.twig", "");
    }
}
