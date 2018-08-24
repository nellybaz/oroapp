<?php

/* OroMarketingListBundle:MarketingList:view.html.twig */
class __TwigTemplate_d83c5769b2bec50190fc53023c66af805023c8ca42c0483808e3864a1a03e7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMarketingListBundle:MarketingList:view.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:view.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:view.html.twig", 4);
        // line 5
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroMarketingListBundle:MarketingList:view.html.twig", 5);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 7
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("marketing_list_nav_buttons", $context)) ? (_twig_default_filter(($context["marketing_list_nav_buttons"] ?? null), "marketing_list_nav_buttons")) : ("marketing_list_nav_buttons")), array("entity" => ($context["entity"] ?? null)));
        // line 11
        echo "    ";
        if ((($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "type", array()), "name", array()) == twig_constant("Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListType::TYPE_STATIC")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 12
            echo "        ";
            echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_post_marketinglist_segment_run", array("id" => $this->getAttribute($this->getAttribute(            // line 13
($context["entity"] ?? null), "segment", array()), "id", array()))), "aCss" => "no-hash run-button btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.refresh_list"), "iCss" => "fa-refresh", "dataAttributes" => array("page-component-module" => "orosegment/js/app/components/refresh-button", "page-component-options" => twig_jsonencode_filter(array("successMessage" => "oro.marketinglist.refresh_dialog.success", "content" => "oro.marketinglist.refresh_dialog.content", "reloadRequired" => true)))));
            // line 25
            echo "
    ";
        }
        // line 27
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 28
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_update", array("id" => $this->getAttribute(            // line 29
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_label")));
            // line 31
            echo "
    ";
        }
        // line 33
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 34
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_marketinglist", array("id" => $this->getAttribute(            // line 35
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 39
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_label")));
            // line 41
            echo "
    ";
        }
    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 47
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 50
($context["entity"] ?? null), "name", array()));
        // line 52
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block_content_data($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 57
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 59
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
                ";
        // line 60
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.type.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "type", array()), "label", array())));
        echo "
                ";
        // line 61
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.description.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "description", array())));
        // line 63
        ob_start();
        // line 64
        echo "<i class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "icon", array()), "html", null, true);
        echo " hide-text\"></i>&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "label", array()), "html", null, true);
        $context["entityData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 67
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.entity.label"), ($context["entityData"] ?? null));
        echo "

                ";
        // line 69
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "segment", array()))) {
            // line 70
            ob_start();
            // line 71
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_segment_view")) {
                // line 72
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "name", array()), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 76
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "segment", array()), "name", array()), "html", null, true);
                echo "
                        ";
            }
            $context["segmentData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 80
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label"), ($context["segmentData"] ?? null));
            echo "
                ";
        }
        // line 83
        ob_start();
        // line 84
        if ($this->getAttribute(($context["entity"] ?? null), "owner", array())) {
            // line 85
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_view")) {
                // line 86
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "owner", array())));
                echo "
                            </a>
                        ";
            } else {
                // line 90
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "owner", array())));
                echo "
                        ";
            }
        }
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 94
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.owner.label"), ($context["ownerData"] ?? null));
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 97
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["listInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        ob_start();
        // line 103
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("marketing_list_sync_info", $context)) ? (_twig_default_filter(($context["marketing_list_sync_info"] ?? null), "marketing_list_sync_info")) : ("marketing_list_sync_info")), array("marketingList" => ($context["entity"] ?? null)));
        $context["syncStatusData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 106
        $context["itemsGridName"] = (($context["gridName"] ?? null) . "_items");
        // line 107
        echo "    ";
        $context["removedItemsGridName"] = (($context["gridName"] ?? null) . "_removed_items");
        // line 108
        echo "    ";
        $context["itemsMixin"] = "oro-marketing-list-items-mixin";
        // line 109
        echo "    ";
        $context["removedItemsMixin"] = "oro-marketing-list-removed-items-mixin";
        // line 110
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "manual", array())) {
            // line 111
            echo "        ";
            $context["itemsMixin"] = "oro-marketing-list-manual-items-mixin";
            // line 112
            echo "        ";
            $context["removedItemsMixin"] = "oro-marketing-list-manual-removed-items-mixin";
            // line 113
            echo "    ";
        }
        // line 114
        ob_start();
        // line 115
        echo $context["dataGrid"]->getrenderGrid(($context["itemsGridName"] ?? null), array("grid-mixin" => ($context["itemsMixin"] ?? null)));
        $context["listData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 117
        ob_start();
        // line 118
        echo $context["dataGrid"]->getrenderGrid(($context["removedItemsGridName"] ?? null), array("grid-mixin" => ($context["removedItemsMixin"] ?? null)));
        $context["removedItemsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 121
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["listInformation"] ?? null))));
        // line 122
        echo "    ";
        if ( !twig_test_empty(($context["syncStatusData"] ?? null))) {
            // line 123
            echo "        ";
            $context["generalSectionBlocks"] = twig_array_merge(($context["generalSectionBlocks"] ?? null), array(0 => array("data" => array(0 =>             // line 124
($context["syncStatusData"] ?? null)))));
            // line 126
            echo "    ";
        }
        // line 127
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.block.general"), "class" => "active", "subblocks" =>         // line 131
($context["generalSectionBlocks"] ?? null)), 1 => array("title" => $this->getAttribute(        // line 134
($context["config"] ?? null), "plural_label", array()), "subblocks" => array(0 => array("data" => array(0 =>         // line 136
($context["listData"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.block.removed"), "subblocks" => array(0 => array("data" => array(0 =>         // line 142
($context["removedItemsGrid"] ?? null))))));
        // line 146
        echo "
    <div data-page-component-module=\"oromarketinglist/js/app/components/grid-linker\"
         data-page-component-options=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("main" =>         // line 149
($context["itemsGridName"] ?? null), "secondary" => ($context["removedItemsGridName"] ?? null)), 1 => array("main" =>         // line 150
($context["removedItemsGridName"] ?? null), "secondary" => ($context["itemsGridName"] ?? null)))), "html", null, true);
        // line 151
        echo "\"></div>

    ";
        // line 153
        $context["id"] = "marketingListView";
        // line 154
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 155
        echo "
    ";
        // line 156
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMarketingListBundle:MarketingList:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 156,  271 => 155,  268 => 154,  266 => 153,  262 => 151,  260 => 150,  259 => 149,  258 => 148,  254 => 146,  252 => 142,  251 => 136,  250 => 134,  249 => 131,  247 => 127,  244 => 126,  242 => 124,  240 => 123,  237 => 122,  235 => 121,  232 => 118,  230 => 117,  227 => 115,  225 => 114,  222 => 113,  219 => 112,  216 => 111,  213 => 110,  210 => 109,  207 => 108,  204 => 107,  202 => 106,  199 => 103,  197 => 102,  191 => 97,  185 => 94,  177 => 90,  171 => 87,  166 => 86,  164 => 85,  162 => 84,  160 => 83,  155 => 80,  148 => 76,  142 => 73,  137 => 72,  135 => 71,  133 => 70,  131 => 69,  126 => 67,  120 => 64,  118 => 63,  116 => 61,  112 => 60,  108 => 59,  104 => 57,  102 => 56,  99 => 55,  92 => 52,  90 => 50,  89 => 47,  87 => 46,  84 => 45,  78 => 41,  76 => 39,  75 => 35,  73 => 34,  70 => 33,  66 => 31,  64 => 29,  62 => 28,  59 => 27,  55 => 25,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  38 => 1,  36 => 7,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingListBundle:MarketingList:view.html.twig", "");
    }
}
