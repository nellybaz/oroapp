<?php

/* OroWorkflowBundle:ProcessDefinition:view.html.twig */
class __TwigTemplate_d22aa14b7d02d0865d87d7375855a1d03377da8fa5822a7d4dd76da4efbe0ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroWorkflowBundle:ProcessDefinition:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%process_definition.label%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_process_definition_update")) {
            // line 7
            echo "        ";
            $context["idButton"] = ($this->getAttribute(($context["entity"] ?? null), "name", array()) . "-process-deactivate-btn");
            // line 8
            echo "        ";
            $context["options"] = array("data" => array("role" => "status-toggle"));
            // line 13
            echo "        <div ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("view" => "oroworkflow/js/app/views/process-status-toggle-btn-view")), "method"), "html", null, true);
            // line 15
            echo ">
            ";
            // line 16
            if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
                // line 17
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => twig_array_merge(($context["options"] ?? null), array("aCss" => "no-hash btn-danger", "iCss" => "fa-close", "id" =>                 // line 20
($context["idButton"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.action.process.deactivate"), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_process_deactivate", array("processDefinition" => $this->getAttribute(                // line 22
($context["entity"] ?? null), "name", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.action.process.deactivate")))), "method"), "html", null, true);
                // line 24
                echo "
            ";
            } else {
                // line 26
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => twig_array_merge(($context["options"] ?? null), array("iCss" => "fa-check", "aCss" => "no-hash btn-success", "id" =>                 // line 29
($context["idButton"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.action.process.activate"), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_process_activate", array("processDefinition" => $this->getAttribute(                // line 31
($context["entity"] ?? null), "name", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.action.process.activate")))), "method"), "html", null, true);
                // line 33
                echo "
            ";
            }
            // line 35
            echo "        </div>
    ";
        }
    }

    // line 39
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "

    <div class=\"pull-left\">
        ";
        // line 43
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 44
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 46
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 48
        echo "    </div>
";
    }

    // line 51
    public function block_stats($context, array $blocks = array())
    {
        // line 52
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 56
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 58
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_process_definition_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.processdefinition.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 61
($context["entity"] ?? null), "label", array()));
        // line 63
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        ob_start();
        // line 68
        $context["entityConfig"] = $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfig($this->getAttribute(($context["entity"] ?? null), "relatedEntity", array()));
        // line 69
        echo "        ";
        $context["relatedEntityLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["entityConfig"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entityConfig"] ?? null), "label", array()), "")) : ("")));
        // line 71
        ob_start();
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["triggers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trigger"]) {
            // line 73
            if ($this->getAttribute($context["trigger"], "event", array())) {
                // line 74
                echo "                    ";
                $context["event"] = ("oro.workflow.block.view.process.trigger.event." . $this->getAttribute($context["trigger"], "event", array()));
                // line 75
                echo "                    ";
                $context["when"] = (($this->getAttribute($context["trigger"], "queued", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDuration($this->getAttribute(                // line 76
$context["trigger"], "timeShift", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.process.trigger.when.immediately")));
                // line 79
                echo "
                    ";
                // line 80
                if ($this->getAttribute($context["trigger"], "field", array())) {
                    // line 81
                    echo "                        ";
                    $context["field"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["entityConfig"] ?? null), "trigger", array(), "any", false, true), "field", array(), "any", false, true), "lable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["entityConfig"] ?? null), "trigger", array(), "any", false, true), "field", array(), "any", false, true), "lable", array()), $this->getAttribute($context["trigger"], "field", array()))) : ($this->getAttribute($context["trigger"], "field", array())));
                    // line 82
                    echo "                        ";
                    $context["after"] = ((("<b>" . ($context["field"] ?? null)) . "</b> ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.process.trigger.after.property"));
                    // line 83
                    echo "                    ";
                } else {
                    // line 84
                    echo "                        ";
                    $context["after"] = ((("<b>" . ($context["relatedEntityLabel"] ?? null)) . "</b> ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.process.trigger.after.entity"));
                    // line 85
                    echo "                    ";
                }
                // line 86
                echo "
                    ";
                // line 87
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.process.trigger.description", array("%after%" =>                 // line 88
($context["after"] ?? null), "%event%" => (("<b>" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 89
($context["event"] ?? null))) . "</b>"), "%when%" => (("<b>" .                 // line 90
($context["when"] ?? null)) . "</b>")));
                // line 92
                echo "
                    <br />
                ";
            } elseif ($this->getAttribute(            // line 94
$context["trigger"], "cron", array())) {
                // line 95
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.process.trigger.cron.description", array("{{ cron }}" => (("<b>" . $this->getAttribute(                // line 96
$context["trigger"], "cron", array())) . "</b>")));
                // line 97
                echo "
                    <br />
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trigger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["triggerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 103
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.processdefinition.label.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "label", array())), "method"), "html", null, true);
        echo "
                ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.processdefinition.related_entity.label"), 1 => ($context["relatedEntityLabel"] ?? null)), "method"), "html", null, true);
        echo "
                ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.processdefinition.execution_order.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "executionOrder", array())), "method"), "html", null, true);
        echo "
                ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.processtrigger.entity_plural_label"), 1 => ($context["triggerData"] ?? null)), "method"), "html", null, true);
        echo "
            </div>
        </div>";
        $context["processDefinitionInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 113
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.title.process_info"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 118
($context["processDefinitionInfo"] ?? null))))));
        // line 122
        echo "
    ";
        // line 123
        $context["id"] = "processDefinitionView";
        // line 124
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 125
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:ProcessDefinition:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 125,  245 => 124,  243 => 123,  240 => 122,  238 => 118,  237 => 113,  231 => 108,  227 => 107,  223 => 106,  219 => 105,  215 => 103,  205 => 97,  203 => 96,  201 => 95,  199 => 94,  195 => 92,  193 => 90,  192 => 89,  191 => 88,  190 => 87,  187 => 86,  184 => 85,  181 => 84,  178 => 83,  175 => 82,  172 => 81,  170 => 80,  167 => 79,  165 => 76,  163 => 75,  160 => 74,  158 => 73,  154 => 72,  152 => 71,  149 => 69,  147 => 68,  145 => 67,  142 => 66,  135 => 63,  133 => 61,  132 => 58,  130 => 57,  127 => 56,  119 => 53,  112 => 52,  109 => 51,  104 => 48,  98 => 46,  92 => 44,  90 => 43,  83 => 40,  80 => 39,  74 => 35,  70 => 33,  68 => 31,  67 => 29,  65 => 26,  61 => 24,  59 => 22,  58 => 20,  56 => 17,  54 => 16,  51 => 15,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:ProcessDefinition:view.html.twig", "");
    }
}
