<?php

/* OroPromotionBundle:Promotion:view.html.twig */
class __TwigTemplate_03609c58b81cd75c326fc756a8fa8550dc41c5dccd066e45b138d1ea5ac5656e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPromotionBundle:Promotion:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPromotionBundle:Promotion:view.html.twig", 2);
        // line 3
        $context["cronSchedulIntervals"] = $this->loadTemplate("OroCronBundle::macros.html.twig", "OroPromotionBundle:Promotion:view.html.twig", 3);
        // line 4
        $context["scopeMacros"] = $this->loadTemplate("OroScopeBundle::macros.html.twig", "OroPromotionBundle:Promotion:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute($this->getAttribute(        // line 6
($context["entity"] ?? null), "rule", array()), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 10
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute(        // line 13
($context["entity"] ?? null), "rule", array()), "name", array()));
        // line 15
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "enabled", array())) {
            // line 22
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.enabled.active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 24
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.enabled.inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 26
        echo "    </div>
";
    }

    // line 29
    public function block_content_data($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "schedules", array()), "isEmpty", array(), "method")) {
            // line 31
            echo "        ";
            $context["schedulesBlock"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A");
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "        ";
            $context["labels"] = array("wasActivatedLabel" => "oro.promotion.promotionschedule.was_activated", "activeNowLabel" => "oro.promotion.promotionschedule.active_now", "notActiveNowLabel" => "oro.promotion.promotionschedule.not_active_now", "willBeActivatedLabel" => "oro.promotion.promotionschedule.will_be_acitivated", "wasDeactivatedLabel" => "oro.promotion.promotionschedule.was_deactivated", "willBeDeactivatedLabel" => "oro.promotion.promotionschedule.will_be_deacitivated");
            // line 41
            echo "        ";
            $context["schedulesBlock"] = $context["cronSchedulIntervals"]->getscheduleIntervalsInfo($this->getAttribute(($context["entity"] ?? null), "schedules", array()), ($context["labels"] ?? null));
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        ob_start();
        // line 45
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("render_discount_information", $context)) ? (_twig_default_filter(($context["render_discount_information"] ?? null), "render_discount_information")) : ("render_discount_information")), array("entity" => ($context["entity"] ?? null)));
        // line 46
        echo "    ";
        $context["discountBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
    ";
        // line 48
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.label"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.subsection.general_info.label"), "useSpan" => false, "data" => array(0 => $this->getAttribute(        // line 57
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.name.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "name", array())), "method"), 1 => $this->getAttribute(        // line 58
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.sort_order.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "sortOrder", array())), "method"), 2 => $this->getAttribute(        // line 59
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.stop_processing.label"), 1 => (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "stopProcessing", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.stop_processing.yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.stop_processing.no")))), "method"), 3 => $this->getAttribute(        // line 60
($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.schedules.label"), 1 => ($context["schedulesBlock"] ?? null)), "method"), 4 => $this->getAttribute(        // line 61
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.use_coupons.label"), 1 => (($this->getAttribute(($context["entity"] ?? null), "useCoupons", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.use_coupons.yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.use_coupons.no")))), "method"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.subsection.discount_options.label"), "useSpan" => false, "data" => array(0 =>         // line 67
($context["discountBlock"] ?? null))))));
        // line 72
        echo "
    ";
        // line 73
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.conditions.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 => $this->getAttribute(        // line 81
($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.restrictions.label"), 1 => $context["scopeMacros"]->getrenderRestrictionsView(($context["scopeEntities"] ?? null), $this->getAttribute(($context["entity"] ?? null), "scopes", array()))), "method"), 1 => $this->getAttribute(        // line 82
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.advanced_conditions.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "expression", array())), "method")))))));
        // line 88
        echo "
    ";
        // line 89
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.matching_items.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 97
$context["dataGrid"]->getrenderGrid("promotion-products-collection-grid", array("_grid_view" => array("_disabled" => true), "params" => array("segmentDefinition" =>         // line 102
($context["segmentDefinition"] ?? null), "includedProducts" =>         // line 103
($context["includedProducts"] ?? null), "excludedProducts" =>         // line 104
($context["excludedProducts"] ?? null))))))))));
        // line 113
        echo "
    ";
        // line 114
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.assigned_coupons.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 122
$context["dataGrid"]->getrenderGrid("promotion-coupons-assigned-to-promotion-grid", array("_grid_view" => array("_disabled" => true), "promotion_id" => $this->getAttribute(        // line 126
($context["entity"] ?? null), "id", array())))))))));
        // line 134
        echo "
    ";
        // line 135
        $context["id"] = "promotions-view";
        // line 136
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 137
        echo "
    ";
        // line 138
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 138,  157 => 137,  154 => 136,  152 => 135,  149 => 134,  147 => 126,  146 => 122,  145 => 114,  142 => 113,  140 => 104,  139 => 103,  138 => 102,  137 => 97,  136 => 89,  133 => 88,  131 => 82,  130 => 81,  129 => 73,  126 => 72,  124 => 67,  123 => 61,  122 => 60,  121 => 59,  120 => 58,  119 => 57,  118 => 48,  115 => 47,  112 => 46,  109 => 45,  107 => 44,  104 => 43,  101 => 42,  98 => 41,  95 => 33,  92 => 32,  89 => 31,  86 => 30,  83 => 29,  78 => 26,  72 => 24,  66 => 22,  64 => 21,  58 => 19,  55 => 18,  48 => 15,  46 => 13,  45 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion:view.html.twig", "");
    }
}
