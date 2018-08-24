<?php

/* OroActivityListBundle:ActivityList/widget:activities.html.twig */
class __TwigTemplate_d3edbd0c55759cdeedd28654149c565fa99f483a8b98197056e83cfb9e52d7fb extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActivityListBundle:ActivityList/widget:activities.html.twig", 1);
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? (($context["containerExtraClass"] ?? null)) : (""));
        // line 3
        echo "<div class=\"widget-content activity-list ";
        echo twig_escape_filter($this->env, ($context["containerExtraClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["pager"] = array("current" => 1, "pagesize" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.per_page"), "total" => 1, "count" => 1, "sortingField" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.sorting_field"));
        // line 11
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
        // line 103
        echo "</div>
";
    }

    // line 11
    public function block_widget_content($context, array $blocks = array())
    {
        // line 12
        echo "
        ";
        // line 13
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_activity_list_before", $context)) ? (_twig_default_filter(($context["oro_activity_list_before"] ?? null), "oro_activity_list_before")) : ("oro_activity_list_before")), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 56
        echo "        ";
        $this->displayBlock('items_container', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_activity_list_after", $context)) ? (_twig_default_filter(($context["oro_activity_list_after"] ?? null), "oro_activity_list_after")) : ("oro_activity_list_after")), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 101
        echo "
    ";
    }

    // line 15
    public function block_widget_actions($context, array $blocks = array())
    {
        // line 16
        echo "        <div class=\"grid-toolbar\">
            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pull-right\">
                <div class=\"actions-panel pull-right\">
                    ";
        // line 22
        echo $context["UI"]->getclientLink(array("aCss" => "action btn", "iCss" => "fa-refresh", "label" => (" " . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refresh")), "dataAttributes" => array("action-name" => "refresh", "section" => "top")));
        // line 27
        echo "
                </div>
            </div>
            <div class=\"pagination\">
                <ul class=\"icons-holder\">
                    <li class=\"pagination-previous ";
        // line 32
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == 1)) {
            echo " disabled ";
        }
        echo "\">
                        <a href=\"#\" data-section=\"top\" data-action-name=\"goto_previous\">
                            <i class=\"fa-chevron-left hide-text\"></i>
                            ";
        // line 35
        if (($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.sorting_direction") == "DESC")) {
            // line 36
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.newer"), "html", null, true);
            echo "
                            ";
        } else {
            // line 38
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.older"), "html", null, true);
            echo "
                            ";
        }
        // line 40
        echo "                        </a>
                    </li>
                    <li class=\"pagination-next\">
                        <a href=\"#\" data-section=\"top\" data-action-name=\"goto_next\">
                            ";
        // line 44
        if (($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.sorting_direction") == "DESC")) {
            // line 45
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.older"), "html", null, true);
            echo "
                            ";
        } else {
            // line 47
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.pagination.newer"), "html", null, true);
            echo "
                            ";
        }
        // line 49
        echo "                            <i class=\"fa-chevron-right hide-text\"></i>
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
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "ignoreHead" => ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.grouping") == false), "activityListData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_activity_list_api_get_list", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 63
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 64
($context["entity"] ?? null), "id", array())))), "activityListOptions" => array("configuration" =>         // line 68
($context["configuration"] ?? null), "template" => "#template-activity-list", "itemTemplate" => "#template-activity-item", "urls" => array("route" => "oro_activity_list_api_get_list", "parameters" => array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 74
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 75
($context["entity"] ?? null), "id", array()))), "loadingContainerSelector" => ".activity-list", "pager" =>         // line 79
($context["pager"] ?? null), "dateRangeFilterMetadata" =>         // line 80
($context["dateRangeFilterMetadata"] ?? null), "routes" => array()), "commentOptions" => array("listTemplate" => "#template-activity-item-comment", "canCreate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_comment_create")));
        // line 88
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oroactivitylist/js/app/components/activity-list-component\"
                data-page-component-options=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>
            ";
        // line 92
        $this->loadTemplate("OroActivityListBundle:ActivityList:js/list.html.twig", "OroActivityListBundle:ActivityList/widget:activities.html.twig", 92)->display(array_merge($context, array("id" => "template-activity-list")));
        // line 93
        echo "            ";
        $this->loadTemplate("OroActivityListBundle:ActivityList:js/view.html.twig", "OroActivityListBundle:ActivityList/widget:activities.html.twig", 93)->display(array_merge($context, array("id" => "template-activity-item")));
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
            $this->loadTemplate($this->getAttribute($context["activityOptions"], "template", array()), "OroActivityListBundle:ActivityList/widget:activities.html.twig", 95)->display(array_merge($context, array("id" => ("template-activity-item-" . $context["activityClass"]))));
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
        echo "            ";
        $this->loadTemplate("OroCommentBundle:Comment/js:list.html.twig", "OroActivityListBundle:ActivityList/widget:activities.html.twig", 97)->display(array_merge($context, array("id" => "template-activity-item-comment")));
        // line 98
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:ActivityList/widget:activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 98,  202 => 97,  188 => 96,  185 => 95,  167 => 94,  164 => 93,  162 => 92,  158 => 91,  153 => 88,  151 => 80,  150 => 79,  149 => 75,  148 => 74,  147 => 68,  146 => 64,  145 => 63,  144 => 58,  142 => 57,  139 => 56,  129 => 49,  123 => 47,  117 => 45,  115 => 44,  109 => 40,  103 => 38,  97 => 36,  95 => 35,  87 => 32,  80 => 27,  78 => 22,  70 => 16,  67 => 15,  62 => 101,  60 => 100,  57 => 99,  54 => 56,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  41 => 11,  36 => 103,  33 => 11,  31 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityListBundle:ActivityList/widget:activities.html.twig", "");
    }
}
