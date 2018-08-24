<?php

/* OroWorkflowBundle:WorkflowDefinition:view.html.twig */
class __TwigTemplate_f2f5eb2867fe63d9db4aae0f7a2b52c4c41b35125485f7973baa04d2b93ee252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroWorkflowBundle:WorkflowDefinition:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
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
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%workflow_definition.label%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "label", array()))));
        // line 6
        $context["isActive"] = $this->getAttribute(($context["entity"] ?? null), "isActive", array());
        // line 8
        $context["pageComponent"] = array("module" => "oroworkflow/js/app/components/workflow-viewer-component", "options" => array("entity" => array("configuration" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "configuration", array()), "name" => $this->getAttribute(        // line 13
($context["entity"] ?? null), "name", array()), "label" => $this->getAttribute(        // line 14
($context["entity"] ?? null), "label", array()), "entity" => $this->getAttribute(        // line 15
($context["entity"] ?? null), "relatedEntity", array()), "entity_attribute" => (($this->getAttribute(        // line 16
($context["entity"] ?? null), "entityAttributeName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "entityAttributeName", array()), "entity")) : ("entity")), "startStep" => (($this->getAttribute($this->getAttribute(        // line 17
($context["entity"] ?? null), "startStep", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "startStep", array(), "any", false, true), "name", array()), null)) : (null)), "stepsDisplayOrdered" => $this->getAttribute(        // line 18
($context["entity"] ?? null), "stepsDisplayOrdered", array())), "chartOptions" => array("Endpoint" => array(0 => "Blank", 1 => array())), "connectionOptions" => array("detachable" => false)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_navButtons($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 33
        if (($context["isActive"] ?? null)) {
            // line 34
            echo "        ";
            $context["idButton"] = ($this->getAttribute(($context["entity"] ?? null), "name", array()) . "-workflow-deactivate-btn");
            // line 35
            echo "
        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroworkflow/js/app/views/workflow-deactivate-btn-view", "selectors" => array("button" => ("#" .             // line 41
($context["idButton"] ?? null))))), "html", null, true);
            // line 43
            echo "\">

            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("aCss" => "no-hash btn-danger", "iCss" => "fa-close", "id" =>             // line 48
($context["idButton"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.datagrid.deactivate"), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_deactivate", array("workflowDefinition" => $this->getAttribute(            // line 50
($context["entity"] ?? null), "name", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.datagrid.deactivate"), "data" => array("name" => $this->getAttribute(            // line 53
($context["entity"] ?? null), "name", array()), "label" => $this->getAttribute(            // line 54
($context["entity"] ?? null), "label", array())))), "method"), "html", null, true);
            // line 56
            echo "
        </span>
    ";
        } else {
            // line 59
            echo "        ";
            $context["idButton"] = ($this->getAttribute(($context["entity"] ?? null), "name", array()) . "-workflow-activate-btn");
            // line 60
            echo "
        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroworkflow/js/app/views/workflow-activate-btn-view", "selectors" => array("button" => ("#" .             // line 66
($context["idButton"] ?? null))))), "html", null, true);
            // line 68
            echo "\">

            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("aCss" => "no-hash btn-success", "iCss" => "fa-check", "id" =>             // line 73
($context["idButton"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.datagrid.activate"), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_activate", array("workflowDefinition" => $this->getAttribute(            // line 75
($context["entity"] ?? null), "name", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.datagrid.activate"), "data" => array("name" => $this->getAttribute(            // line 78
($context["entity"] ?? null), "name", array()), "label" => $this->getAttribute(            // line 79
($context["entity"] ?? null), "label", array())))), "method"), "html", null, true);
            // line 81
            echo "
        </span>
    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if ( !$this->getAttribute(($context["entity"] ?? null), "system", array())) {
            // line 86
            echo "        ";
            if ((($context["edit_allowed"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
                // line 87
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_update", array("name" => $this->getAttribute(                // line 88
($context["entity"] ?? null), "name", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_label"))), "method"), "html", null, true);
                // line 90
                echo "
        ";
            }
            // line 92
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
                // line 93
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_definition_delete", array("workflowDefinition" => $this->getAttribute(                // line 94
($context["entity"] ?? null), "name", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-workflow-definition", "dataId" => $this->getAttribute(                // line 98
($context["entity"] ?? null), "name", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_label"))), "method"), "html", null, true);
                // line 100
                echo "
        ";
            }
            // line 102
            echo "    ";
        }
    }

    // line 105
    public function block_stats($context, array $blocks = array())
    {
        // line 106
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 110
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 112
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 115
($context["entity"] ?? null), "label", array()));
        // line 117
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 120
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 121
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "

    <div class=\"pull-left\">
        ";
        // line 124
        if ($this->getAttribute(($context["entity"] ?? null), "system", array())) {
            // line 125
            echo "            <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-tentatively fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.status.system.label"), "html", null, true);
            echo "</div>
        ";
        }
        // line 127
        echo "        ";
        if ( !($context["edit_allowed"] ?? null)) {
            // line 128
            echo "            <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-tentatively fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.status.readonly.label"), "html", null, true);
            echo "</div>
        ";
        }
        // line 130
        echo "        ";
        if (($context["isActive"] ?? null)) {
            // line 131
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 133
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 135
        echo "    </div>
";
    }

    // line 195
    public function block_content_data($context, array $blocks = array())
    {
        // line 196
        echo "    ";
        ob_start();
        // line 197
        echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.label.label"), 1 => (twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "label", array())) . $context["workflowMacros"]->getrenderGoToTranslationsIconByLink($this->getAttribute(($context["translateLinks"] ?? null), "label", array())))), "method"), "html", null, true);
        echo "

                ";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.related_entity.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute(        // line 204
($context["entity"] ?? null), "relatedEntity", array()), "label"))), "method"), "html", null, true);
        // line 205
        echo "
                ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.view.workflow.default_step"), 1 => (($this->getAttribute(        // line 208
($context["entity"] ?? null), "startStep", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "startStep", array()), "label", array()), array(), "workflows")) : (""))), "method"), "html", null, true);
        // line 209
        echo "
                ";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.steps_display_ordered.label"), 1 => (($this->getAttribute(        // line 212
($context["entity"] ?? null), "stepsDisplayOrdered", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No")))), "method"), "html", null, true);
        // line 213
        echo "
                ";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.priority.label"), 1 => $this->getAttribute(        // line 216
($context["entity"] ?? null), "priority", array())), "method"), "html", null, true);
        // line 217
        echo "

                ";
        // line 219
        ob_start();
        // line 220
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "applications", array()))) {
            // line 221
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderList", array(0 => $this->getAttribute(($context["entity"] ?? null), "applications", array())), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 223
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 225
        echo "                ";
        $context["applications"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
                ";
        // line 227
        ob_start();
        // line 228
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "exclusiveActiveGroups", array()))) {
            // line 229
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderList", array(0 => $this->getAttribute(($context["entity"] ?? null), "exclusiveActiveGroups", array())), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 231
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 233
        echo "                ";
        $context["activeGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 234
        echo "
                ";
        // line 235
        ob_start();
        // line 236
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "exclusiveRecordGroups", array()))) {
            // line 237
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderList", array(0 => $this->getAttribute(($context["entity"] ?? null), "exclusiveRecordGroups", array())), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 239
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 241
        echo "                ";
        $context["recordGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 242
        echo "
                ";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.applications.label"), 1 => ($context["applications"] ?? null)), "method"), "html", null, true);
        echo "
                ";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.exclusive_active_groups.label"), 1 => ($context["activeGroups"] ?? null)), "method"), "html", null, true);
        echo "
                ";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.exclusive_record_groups.label"), 1 => ($context["recordGroups"] ?? null)), "method"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    ";
        $context["workflowDefinitionInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 250
        echo "
    ";
        // line 251
        ob_start();
        // line 252
        echo "        <style type=\"text/css\">
            .transitions-list-short {
                margin-left: 0;
            }

            .transitions-list-short li {
                list-style: none;
            }
        </style>
        <div class=\"workflow-step-viewer row-fluid clearfix\">
            <div class=\"";
        // line 262
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            echo "span12";
        } else {
            echo "span5";
        }
        echo "\">
                <div class=\"workflow-table-container\">
                    <div class=\"workflow-definition-steps-list-container clearfix\">
                        <div class=\"grid-container steps-list\">
                            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                                <thead>
                                    <tr>
                                        <th class=\"label-column\"><span>";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Step"), "html", null, true);
        echo "</span></th>
                                        <th><span>";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transitions"), "html", null, true);
        echo "</span></th>
                                        <th>
                                            <span title=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.order.tooltip"), "html", null, true);
        echo "\">
                                                ";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position"), "html", null, true);
        echo "
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=\"item-container\">";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "configuration", array()), "steps", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["stepName"] => $context["stepData"]) {
            // line 284
            echo "                                    ";
            $context["stepData"] = twig_array_merge($context["stepData"], array("name" => $context["stepName"]));
            // line 285
            echo "                                    ";
            if (($this->getAttribute($context["loop"], "first", array()) && $this->getAttribute(($context["entity"] ?? null), "isSystem", array()))) {
                // line 286
                echo "                                        ";
                echo $this->getAttribute($this, "view_start_step_row", array(0 => ($context["entity"] ?? null)), "method");
                echo "
                                    ";
            }
            // line 288
            echo "
                                    ";
            // line 289
            echo $this->getAttribute($this, "view_step_row", array(0 => $context["stepData"], 1 => ($context["entity"] ?? null), 2 => ($context["translateLinks"] ?? null)), "method");
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 291
            echo $this->getAttribute($this, "view_start_step_row", array(0 => ($context["entity"] ?? null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepName'], $context['stepData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 299
        if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 300
            echo "            <div class=\"span7\">
                <div class=\"workflow-flowchart-container\">
                    <div class=\"workflow-flowchart-controls clearfix\"></div>
                    <div class=\"workflow-flowchart-wrapper\" ";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroui/js/app/views/zoomable-area-view", "autozoom" => true, "minZoom" => 0.05, "maxZoom" => 5))), "method"), "html", null, true);
            // line 311
            echo "
                    >
                        <div class=\"workflow-flowchart clearfix\"></div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 318
        echo "        </div>
    ";
        $context["workflowStepsAndTransitions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 320
        echo "
    ";
        // line 321
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.title.general_information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 326
($context["workflowDefinitionInfo"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.block.title.steps_and_transitions"), "subblocks" => array(0 => array("data" => array(0 =>         // line 333
($context["workflowStepsAndTransitions"] ?? null))))));
        // line 338
        echo "
    ";
        // line 339
        if ((array_key_exists("variables", $context) && twig_length_filter($this->env, ($context["variables"] ?? null)))) {
            // line 340
            echo "        ";
            ob_start();
            // line 341
            echo "            <div class=\"widget-content\">
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">
                        ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["variables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 345
                echo "                            <div class=\"control-group\">
                                <label class=\"control-label\">
                                    ";
                // line 347
                if (($this->getAttribute($this->getAttribute($context["variable"], "options", array(), "any", false, true), "form_options", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["variable"], "options", array(), "any", false, true), "form_options", array(), "any", false, true), "tooltip", array(), "any", true, true))) {
                    // line 348
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "tooltip", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["variable"], "options", array()), "form_options", array()), "tooltip", array())), "method"), "html", null, true);
                    echo "
                                    ";
                }
                // line 350
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["variable"], "label", array()), "html", null, true);
                echo "
                                </label>
                                <div class=\"controls\">
                                    <div class=\"control-label\">
                                        ";
                // line 354
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Oro\Bundle\WorkflowBundle\Twig\WorkflowExtension')->formatWorkflowVariableValue($context["variable"]), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "html", null, true);
                echo "
                                        ";
                // line 355
                echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink($this->getAttribute($this->getAttribute($this->getAttribute(($context["translateLinks"] ?? null), "variable_definitions", array()), "variables", array()), $this->getAttribute($context["variable"], "name", array()), array(), "array"));
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                    </div>
                </div>
            </div>
        ";
            $context["variablesInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 364
            echo "
        ";
            // line 365
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.configuration.label"), "subblocks" => array(0 => array("data" => array(0 =>             // line 368
($context["variablesInfo"] ?? null)))))));
            // line 371
            echo "
    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $context["id"] = "workflowDefinitionView";
        // line 375
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 376
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 138
    public function getview_step_row($__stepData__ = null, $__entity__ = null, $__translateLinks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "stepData" => $__stepData__,
            "entity" => $__entity__,
            "translateLinks" => $__translateLinks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            echo "    ";
            $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition:view.html.twig", 139);
            // line 140
            echo "    <tr>
        <td class=\"step-name workflow-translatable-label\">
            ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stepData"] ?? null), "label", array()), "html", null, true);
            echo "
            ";
            // line 143
            if ($this->getAttribute(($context["stepData"] ?? null), "is_final", array())) {
                // line 144
                echo "                <strong title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.is_final.tooltip"), "html", null, true);
                echo "\">
                    (";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final"), "html", null, true);
                echo ")
                </strong>
            ";
            }
            // line 148
            echo "            ";
            if ((($this->getAttribute(($context["stepData"] ?? null), "order", array()) >= 0) && ($context["translateLinks"] ?? null))) {
                // line 149
                echo "                ";
                echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink($this->getAttribute($this->getAttribute($this->getAttribute(($context["translateLinks"] ?? null), "steps", array()), $this->getAttribute(($context["stepData"] ?? null), "name", array()), array(), "array"), "label", array()));
                echo "
            ";
            }
            // line 151
            echo "        </td>
        <td class=\"step-transitions\">
            ";
            // line 153
            if ( !twig_test_empty($this->getAttribute(($context["stepData"] ?? null), "allowed_transitions", array()))) {
                // line 154
                echo "                <ul class=\"transitions-list-short\">
                    ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stepData"] ?? null), "allowed_transitions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["transitionName"]) {
                    // line 156
                    echo "                        ";
                    $context["currentTransition"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "configuration", array()), "transitions", array()), $context["transitionName"], array(), "array");
                    // line 157
                    echo "                        ";
                    $context["toStep"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "configuration", array()), "steps", array()), $this->getAttribute(($context["currentTransition"] ?? null), "step_to", array()), array(), "array");
                    // line 158
                    echo "                        <li>
                            <span>";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentTransition"] ?? null), "label", array()), array(), "workflows"), "html", null, true);
                    echo "</span>
                            ";
                    // line 160
                    if (($context["translateLinks"] ?? null)) {
                        // line 161
                        echo "                                ";
                        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink($this->getAttribute($this->getAttribute($this->getAttribute(($context["translateLinks"] ?? null), "transitions", array()), $context["transitionName"], array(), "array"), "label", array()));
                        echo "
                            ";
                    }
                    // line 163
                    echo "                            <i class=\"fa-long-arrow-right\"></i>
                            <span title=\"";
                    // line 164
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["toStep"] ?? null), "label", array()), array(), "workflows"), "html", null, true);
                    echo "</span>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transitionName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                </ul>
            ";
            }
            // line 169
            echo "        </td>
        <td>
            <span title=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.order.tooltip"), "html", null, true);
            echo "\">
                ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stepData"] ?? null), "order", array()), "html", null, true);
            echo "
            </span>
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 178
    public function getview_start_step_row($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 179
            echo "    ";
            $context["startTransitionNames"] = array();
            // line 180
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "configuration", array()), "transitions", array()));
            foreach ($context['_seq'] as $context["transitionName"] => $context["transitionConfig"]) {
                // line 181
                echo "        ";
                if ($this->getAttribute($context["transitionConfig"], "is_start", array())) {
                    // line 182
                    echo "            ";
                    $context["startTransitionNames"] = twig_array_merge(($context["startTransitionNames"] ?? null), array(0 => $context["transitionName"]));
                    // line 183
                    echo "        ";
                }
                // line 184
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['transitionName'], $context['transitionConfig'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo $this->getAttribute(            // line 186
$this, "view_step_row", array(0 => array("label" => (("(" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start")) . ")"), "order" =>  -1, "is_final" => false, "allowed_transitions" =>             // line 190
($context["startTransitionNames"] ?? null)), 1 =>             // line 191
($context["entity"] ?? null)), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 191,  739 => 190,  738 => 186,  737 => 185,  731 => 184,  728 => 183,  725 => 182,  722 => 181,  717 => 180,  714 => 179,  702 => 178,  682 => 172,  678 => 171,  674 => 169,  670 => 167,  659 => 164,  656 => 163,  650 => 161,  648 => 160,  644 => 159,  641 => 158,  638 => 157,  635 => 156,  631 => 155,  628 => 154,  626 => 153,  622 => 151,  616 => 149,  613 => 148,  607 => 145,  602 => 144,  600 => 143,  596 => 142,  592 => 140,  589 => 139,  575 => 138,  568 => 376,  565 => 375,  563 => 374,  560 => 373,  556 => 371,  554 => 368,  553 => 365,  550 => 364,  544 => 360,  533 => 355,  529 => 354,  521 => 350,  515 => 348,  513 => 347,  509 => 345,  505 => 344,  500 => 341,  497 => 340,  495 => 339,  492 => 338,  490 => 333,  489 => 326,  488 => 321,  485 => 320,  481 => 318,  472 => 311,  470 => 303,  465 => 300,  463 => 299,  455 => 293,  449 => 291,  436 => 289,  433 => 288,  427 => 286,  424 => 285,  421 => 284,  403 => 279,  395 => 273,  391 => 272,  386 => 270,  382 => 269,  368 => 262,  356 => 252,  354 => 251,  351 => 250,  343 => 245,  339 => 244,  335 => 243,  332 => 242,  329 => 241,  323 => 239,  317 => 237,  314 => 236,  312 => 235,  309 => 234,  306 => 233,  300 => 231,  294 => 229,  291 => 228,  289 => 227,  286 => 226,  283 => 225,  277 => 223,  271 => 221,  268 => 220,  266 => 219,  262 => 217,  260 => 216,  259 => 214,  256 => 213,  254 => 212,  253 => 210,  250 => 209,  248 => 208,  247 => 206,  244 => 205,  242 => 204,  241 => 202,  236 => 200,  231 => 197,  228 => 196,  225 => 195,  220 => 135,  214 => 133,  208 => 131,  205 => 130,  199 => 128,  196 => 127,  190 => 125,  188 => 124,  181 => 121,  178 => 120,  171 => 117,  169 => 115,  168 => 112,  166 => 111,  163 => 110,  155 => 107,  148 => 106,  145 => 105,  140 => 102,  136 => 100,  134 => 98,  133 => 94,  131 => 93,  128 => 92,  124 => 90,  122 => 88,  120 => 87,  117 => 86,  115 => 85,  112 => 84,  107 => 81,  105 => 79,  104 => 78,  103 => 75,  102 => 73,  101 => 70,  97 => 68,  95 => 66,  94 => 63,  89 => 60,  86 => 59,  81 => 56,  79 => 54,  78 => 53,  77 => 50,  76 => 48,  75 => 45,  71 => 43,  69 => 41,  68 => 38,  63 => 35,  60 => 34,  58 => 33,  52 => 31,  49 => 30,  45 => 1,  43 => 18,  42 => 17,  41 => 16,  40 => 15,  39 => 14,  38 => 13,  37 => 12,  36 => 8,  34 => 6,  32 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition:view.html.twig", "");
    }
}
