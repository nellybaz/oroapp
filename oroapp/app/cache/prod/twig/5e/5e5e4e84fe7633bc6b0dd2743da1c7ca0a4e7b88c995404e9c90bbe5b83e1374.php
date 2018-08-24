<?php

/* OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig */
class __TwigTemplate_948d0fa5f0cf68750043bba41a889192b3c3834ac8a79e2cf790c2f92bc30d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
            'widget_actions' => array($this, 'block_widget_actions'),
            'items_container' => array($this, 'block_items_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig", 1);
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? (($context["containerExtraClass"] ?? null)) : (""));
        // line 3
        echo "<div class=\"widget-content activity-list marketing-activities ";
        echo twig_escape_filter($this->env, ($context["containerExtraClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["pager"] = array("current" => 1, "pagesize" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.per_page"), "total" => 1, "count" => 1, "sortingField" => "eventDate");
        // line 11
        echo "    ";
        $context["configuration"] = array(        // line 12
($context["configurationKey"] ?? null) => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.entity_label"), "template" => "OroMarketingActivityBundle:MarketingActivity:js/marketingActivitySectionItem.html.twig", "has_comments" => false, "routes" => array("itemView" => "oro_marketing_activity_widget_marketing_activities_info")));
        // line 21
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
        // line 100
        echo "</div>
";
    }

    // line 21
    public function block_widget_content($context, array $blocks = array())
    {
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 56
        echo "        ";
        $this->displayBlock('items_container', $context, $blocks);
        // line 98
        echo "
    ";
    }

    // line 23
    public function block_widget_actions($context, array $blocks = array())
    {
        // line 24
        echo "        <div class=\"grid-toolbar\">
            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pull-right\">
                <div class=\"actions-panel pull-right\">
                    ";
        // line 30
        echo $context["UI"]->getclientLink(array("aCss" => "action btn", "iCss" => "fa-refresh", "label" => (" " . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refresh")), "dataAttributes" => array("action-name" => "refresh", "section" => "top")));
        // line 35
        echo "
                </div>
            </div>
            <div class=\"pagination\">
                <ul class=\"icons-holder\">
                    <li class=\"pagination-previous ";
        // line 40
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == 1)) {
            echo " disabled ";
        }
        echo "\">
                        <a href=\"#\" data-section=\"top\" data-action-name=\"goto_previous\">
                            <i class=\"fa-chevron-left hide-text\"></i>
                            ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.newer"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"pagination-next\">
                        <a href=\"#\" data-section=\"top\" data-action-name=\"goto_next\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.older"), "html", null, true);
        echo "
                            <i class=\"fa-chevron-right hide-text\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        ";
    }

    // line 56
    public function block_items_container($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        $context["options"] = array("widgetId" => $this->getAttribute($this->getAttribute(        // line 58
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "activityListData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_activity_widget_marketing_activities_list", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 62
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 63
($context["entity"] ?? null), "id", array())))), "activityListOptions" => array("configuration" =>         // line 67
($context["configuration"] ?? null), "template" => "#template-marketing-activities", "itemTemplate" => "#template-marketing-activities-item", "listWidgetSelector" => ".marketing-activities-container .marketing-activities-list-widget", "activityListSelector" => ".marketing-activities", "reloadOnAdd" => false, "reloadOnUpdate" => false, "triggerRefreshEvent" => false, "urls" => array("route" => "oro_marketing_activity_widget_marketing_activities_list", "parameters" => array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 78
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 79
($context["entity"] ?? null), "id", array()))), "loadingContainerSelector" => ".marketing-activities", "pager" =>         // line 83
($context["pager"] ?? null), "campaignFilterValues" =>         // line 84
($context["campaignFilterValues"] ?? null), "routes" => array()));
        // line 88
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oromarketingactivity/js/app/components/marketing-activities-section-component\"
                data-page-component-options=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>
            ";
        // line 92
        $this->loadTemplate("OroMarketingActivityBundle:MarketingActivity:js/list.html.twig", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig", 92)->display(array_merge($context, array("id" => "template-marketing-activities")));
        // line 93
        echo "            ";
        $this->loadTemplate("OroMarketingActivityBundle:MarketingActivity:js/marketingActivitySectionItem.html.twig", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig", 93)->display(array_merge($context, array("id" => "template-marketing-activities-item")));
        // line 94
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["configuration"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["activityClass"] => $context["activityOptions"]) {
            // line 95
            echo "                ";
            $this->loadTemplate($this->getAttribute($context["activityOptions"], "template", array()), "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig", 95)->display(array_merge($context, array("id" => ("template-activity-item-" . $context["activityClass"]))));
            // line 96
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['activityClass'], $context['activityOptions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 97,  158 => 96,  155 => 95,  137 => 94,  134 => 93,  132 => 92,  128 => 91,  123 => 88,  121 => 84,  120 => 83,  119 => 79,  118 => 78,  117 => 67,  116 => 63,  115 => 62,  114 => 58,  112 => 57,  109 => 56,  97 => 48,  89 => 43,  81 => 40,  74 => 35,  72 => 30,  64 => 24,  61 => 23,  56 => 98,  53 => 56,  51 => 23,  48 => 22,  45 => 21,  40 => 100,  37 => 21,  35 => 12,  33 => 11,  31 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitiesSection.html.twig", "");
    }
}
