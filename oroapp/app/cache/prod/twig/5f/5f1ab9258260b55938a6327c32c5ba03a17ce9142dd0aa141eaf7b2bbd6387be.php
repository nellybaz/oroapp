<?php

/* OroWorkflowBundle:WorkflowDefinition:update.html.twig */
class __TwigTemplate_7e93783ae04cc61bd499a43284220bfbf23c3b21feedcbdd052840e8fb04f962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", 2);
        // line 3
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", 3);
        // line 5
        $context["pageComponent"] = array("module" => "oroworkflow/js/app/components/workflow-editor-component", "options" => array("entity" => array("configuration" => $this->getAttribute(        // line 9
($context["entity"] ?? null), "configuration", array()), "translateLinks" => ((        // line 10
array_key_exists("translateLinks", $context)) ? (_twig_default_filter(($context["translateLinks"] ?? null), array())) : (array())), "name" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array()), "label" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "label", array()), "entity" => $this->getAttribute(        // line 13
($context["entity"] ?? null), "relatedEntity", array()), "entity_attribute" => (($this->getAttribute(        // line 14
($context["entity"] ?? null), "entityAttributeName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "entityAttributeName", array()), "entity")) : ("entity")), "startStep" => (($this->getAttribute($this->getAttribute(        // line 15
($context["entity"] ?? null), "startStep", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "startStep", array(), "any", false, true), "name", array()), null)) : (null)), "stepsDisplayOrdered" => $this->getAttribute(        // line 16
($context["entity"] ?? null), "stepsDisplayOrdered", array()), "priority" => $this->getAttribute(        // line 17
($context["entity"] ?? null), "priority", array()), "exclusive_active_groups" => $this->getAttribute(        // line 18
($context["entity"] ?? null), "exclusiveActiveGroups", array()), "exclusive_record_groups" => $this->getAttribute(        // line 19
($context["entity"] ?? null), "exclusiveRecordGroups", array()), "applications" => $this->getAttribute(        // line 20
($context["entity"] ?? null), "applications", array())), "availableDestinations" =>         // line 22
($context["availableDestinations"] ?? null), "chartOptions" => array(), "connectionOptions" => array("detachable" => true)));

        $this->env->getExtension("oro_title")->set(array("params" => array("%workflow_definition.label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 42
($context["entity"] ?? null), "label", array()), array(), "workflows"))));
        // line 44
        if ($this->getAttribute(($context["entity"] ?? null), "name", array())) {
            // line 45
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_definition_post", array("workflowDefinition" => $this->getAttribute(($context["entity"] ?? null), "name", array())));
        } else {
            // line 47
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_definition_post");
        }
        // line 58
        $context["gridUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_index");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 50
    public function block_head_script($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 53
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 54
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 60
    public function block_navButtons($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        if ((($this->getAttribute(($context["entity"] ?? null), "name", array()) && ($context["delete_allowed"] ?? null)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 62
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_definition_delete", array("workflowDefinition" => $this->getAttribute(            // line 63
($context["entity"] ?? null), "name", array()))), "dataRedirect" =>             // line 64
($context["gridUrl"] ?? null), "aCss" => "no-hash remove-button", "id" => "btn-remove-workflow", "dataId" => $this->getAttribute(            // line 67
($context["entity"] ?? null), "name", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_label"))), "method"), "html", null, true);
            // line 69
            echo "
        ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 72
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => ($context["gridUrl"] ?? null)), "method"), "html", null, true);
        echo "

    ";
        // line 74
        $context["html"] = ($this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method") . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
        // line 75
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 78
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "name", array())) {
            // line 80
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 81
($context["entity"] ?? null), "indexPath" =>             // line 82
($context["gridUrl"] ?? null), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 84
($context["entity"] ?? null), "label", array()));
            // line 86
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_label")));
            // line 89
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", 89)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 90
            echo "    ";
        }
    }

    // line 93
    public function block_stats($context, array $blocks = array())
    {
        // line 94
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 98
    public function block_content_data($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        echo $context["QD"]->getquery_designer_column_chain_template("entity-column-chain-template");
        echo "

    ";
        // line 101
        $context["requiredConstraint"] = array("NotBlank" => null);
        // line 104
        echo "    <style type=\"text/css\">
        .tab-data {
            padding: 20px;
        }

        .transition-list .action-column {
            width: 90px;
        }

        .steps-list .action-column {
            width: 110px;
        }

        .transitions-list-short {
            margin-left: 0;
        }

        .transitions-list-short li {
            list-style: none;
        }
    </style>

    <script type=\"text/template\" id=\"workflow-translate-link-template\">
        <% if (translateLink) { %>";
        // line 127
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLink %>", true);
        echo "<% } %>
    </script>

    <script type=\"text/template\" id=\"transition-form-template\">
        <div class=\"oro-tabs\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#transition-form\" data-toggle=\"tab\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Info"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#transition-attributes\" data-toggle=\"tab\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attributes"), "html", null, true);
        echo "</a></li>
            </ul>

            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"transition-form\">
                    <div class=\"tab-data\">
                        <div class=\"form-container\">
                            <form action=\"#\" class=\"form-horizontal\">
                                <div class=\"control-group\">
                                    ";
        // line 143
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.name.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.transition.name.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\">
                                        <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                            ";
        // line 147
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.label %>", true);
        echo "
                                        <% } %>
                                    </div>
                                </div>

                                <% if(!stepFrom || stepFrom.get('name')) {
                                var stepFromName = stepFrom ? stepFrom.get('name') : '';
                                %>
                                <div class=\"control-group\">
                                    ";
        // line 156
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.from_step.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.transition.step_from.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <select name=\"step_from\" data-validation=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\"
                                        <% if (name && !_is_clone) { %>disabled=\"disabled\"<% } %>
                                        >
                                        <option value=\"\"></option>
                                        <% _.each(allowedStepsFrom, function (step) { %>
                                        <option
                                            value=\"<%- step.get('name') %>\"
                                            <% if (step.get('name') == stepFromName) { %>selected=\"selected\"<% } %>
                                        >
                                            <%- step.get('label') %>
                                        </option>
                                        <% }); %>
                                        </select>
                                    </div>
                                </div>
                                <% } %>
                                <div class=\"control-group\">
                                    ";
        // line 175
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.to_step.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.transition.step_to.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <select name=\"step_to\" data-validation=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\">
                                            <option value=\"\"></option>
                                                <% _.each(allowedStepsTo, function (step) { %>
                                            <option
                                                value=\"<%- step.get('name') %>\"
                                                <% if (step.get('name') == step_to) { %>selected=\"selected\"<% } %>
                                            >
                                                <%- step.get('label') %>
                                            </option>
                                            <% }); %>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    ";
        // line 192
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.view_form.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.transition.display_type.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <select name=\"display_type\" data-validation=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\">
                                            <option value=\"dialog\" <% if (display_type == 'dialog') { %>selected=\"selected\"<% } %>>";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popup window"), "html", null, true);
        echo "</value>
                                            <option value=\"page\" <% if (display_type == 'page') { %>selected=\"selected\"<% } %>>";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Separate page"), "html", null, true);
        echo "</value>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"control-group destination-page-controls\">
                                    ";
        // line 202
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.destination_page.label"), 1 => false), "method");
        echo "
                                    <div class=\"controls\">
                                        <select name=\"destination_page\">
                                            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableDestinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 206
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["destination"], "html", null, true);
            echo "\" <% if (destination_page == '";
            echo twig_escape_filter($this->env, $context["destination"], "html", null, true);
            echo "') { %>selected=\"selected\"<% } %>>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.workflow.workflowdefinition.transition.destination_page." . ((array_key_exists("destination", $context)) ? (_twig_default_filter($context["destination"], "default")) : ("default"))) . ".label")), "html", null, true);
            echo "</value>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                                        </select>
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    ";
        // line 213
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.warning_message.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.transition.message.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <textarea name=\"message\"><%= message %></textarea>
                                        <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.message) { %>
                                            ";
        // line 217
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.message %>", true);
        echo "
                                        <% } %>
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    ";
        // line 223
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.button_label.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.transition.button_label.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"button_label\" value=\"<%- button_label %>\">
                                        <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_label) { %>
                                            ";
        // line 227
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.button_label %>", true);
        echo "
                                        <% } %>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    ";
        // line 232
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.button_title.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.transition.button_title.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"button_title\" value=\"<%- button_title %>\">
                                        <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_title) { %>
                                            ";
        // line 236
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.button_title %>", true);
        echo "
                                        <% } %>
                                    </div>
                                </div>

                                ";
        // line 241
        echo $this->getAttribute(($context["UI"] ?? null), "getApplicableForUnderscore", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transition_prototype_icon", array()), 'row')), "method");
        echo "

                                <% print('<sc' + 'ript>'); %>
                                require(['jquery'], function(\$) {
                                \$('#";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "transition_prototype_icon", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').inputWidget('val', '<%- buttonIcon %>');
                                });
                                <% print('</sc' + 'ript>'); %>

                                <div class=\"control-group\">
                                    ";
        // line 250
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.button_style.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.transition.button_color.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <select name=\"button_color\">
                                            <% _.each(allowedButtonStyles, function (style) { %>
                                            <option value=\"<%- style.name %>\"
                                            <% if (buttonStyle == style.name) { %>selected=\"selected\"<% } %>
                                            ><%- style.label %></option>
                                            <% }); %>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"control-group transition-example-container\">
                                    ";
        // line 263
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.button_preview.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.transition.button_preview.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <div class=\"transition-btn-example\"></div>
                                    </div>
                                </div>

                                <div class=\"widget-actions\">
                                    <button type=\"reset\" class=\"btn\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                                    <button type=\"submit\" class=\"btn btn-success\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane\" id=\"transition-attributes\">
                    <div class=\"tab-data\">
                        <div class=\"transition-attributes-form-container form-container\"></div>
                        <div class=\"transition-attributes-list-container\" style=\"margin-top: 10px\"></div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-form-template\">
        ";
        // line 289
        $context["orderConstraints"] = twig_array_merge(($context["requiredConstraint"] ?? null), array("Range" => array("minMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This value should be {{ limit }} or more."), "maxMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This value should be {{ limit }} or less."), "invalidMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This value should be a valid number."), "min" => 0, "max" => null)));
        // line 298
        echo "        <div class=\"form-container\">
            <div class=\"oro-tabs\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#step-form\" data-toggle=\"tab\">";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Info"), "html", null, true);
        echo "</a></li>
                    <% if (transitionsAllowed) { %>
                    <li><a href=\"#step-transitions\" data-toggle=\"tab\">";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transitions"), "html", null, true);
        echo "</a></li>
                    <% } %>
                </ul>

                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"step-form\">
                        <div class=\"tab-data\">
                            <form action=\"#\" class=\"form-horizontal\">
                                <div class=\"control-group\">
                                    ";
        // line 312
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.name.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.step.name.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"";
        // line 314
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\">
                                        <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                            ";
        // line 316
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.label %>", true);
        echo "
                                        <% } %>
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    ";
        // line 322
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.position.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.step.order.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"order\" value=\"<%- order %>\" data-validation=\"";
        // line 324
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["orderConstraints"] ?? null)), "html", null, true);
        echo "\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    ";
        // line 329
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.final.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.step.is_final.tooltip"), "method");
        echo "
                                    <div class=\"controls\">
                                        <input type=\"checkbox\" name=\"is_final\" <% if (is_final) { %>checked=\"checked\"<% } %>>
                                    </div>
                                </div>

                                <div class=\"widget-actions\">
                                    <button type=\"reset\" class=\"btn\">";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                                    <button type=\"submit\" class=\"btn btn-success\">";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <% if (transitionsAllowed) { %>
                    <div class=\"tab-pane\" id=\"step-transitions\">
                        <div class=\"tab-data\">
                            <div class=\"transitions-list-container\"></div>
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-list-template\">
        <div class=\"grid-container steps-list\">
            <input name=\"oro_workflow_definition_form[steps]\" type=\"hidden\" value=''>
            <input name=\"oro_workflow_definition_form[transitions]\" type=\"hidden\" value=''>
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th class=\"label-column\"><span>";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Step"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transitions"), "html", null, true);
        echo "</span></th>
                        <th><span title=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.order.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-row-template\">
        <td class=\"step-name workflow-translatable-label\">
            <% if (_is_start) { %>
            <%- label %>
            <% } else { %>
            <a href=\"#\" class=\"edit-step\" title=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update this step"), "html", null, true);
        echo "\"><%- label %></a>
            <% if (is_final) { %>&nbsp;<strong title=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.is_final.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final"), "html", null, true);
        echo ")</strong><% } %>
                <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                    ";
        // line 381
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.label %>");
        echo "
                <% } %>
            <% } %>
        </td>
        <td class=\"step-transitions\"></td>
        <td><span title=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.step.order.tooltip", array(), "tooltips"), "html", null, true);
        echo "\"><%- order %></span></td>
        <td class=\"step-actions\">
            <div class=\"pull-right\">
                <a href=\"#\" class=\"add-step-transition\" title=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add transition to this step"), "html", null, true);
        echo "\" class=\"action\"><i class=\"fa-plus-circle hide-text\"/></a>
                <% if (!_is_start) { %>
                    <a href=\"#\" class=\"edit-step action\" title=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update this step"), "html", null, true);
        echo "\"><i class=\"fa-pencil-square-o hide-text\"/></a>
                    <a href=\"#\" class=\"clone-step action\" title=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clone this step"), "html", null, true);
        echo "\"><i class=\"fa-files-o hide-text\"/></a>
                    <a href=\"#\" class=\"delete-step action\" title=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this step"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"/></a>
                <% } %>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-row-short-template\">
        <a href=\"#\" class=\"edit-transition\" title=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update this transition"), "html", null, true);
        echo "\"><%- label %></a>
            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                ";
        // line 402
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.label %>");
        echo "
            <% } %>
        <a href=\"#\" class=\"clone-transition action\" title=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clone this transition"), "html", null, true);
        echo "\"><i class=\"fa-files-o hide-text\"></i></a>
        <a href=\"#\" class=\"delete-transition action\" title=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this transition"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"></i></a>
        <i class=\"fa-long-arrow-right\"/>
        <span title=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\"><%- stepToLabel %></span>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-edit-template\">
        <form action=\"#\">
            <div class=\"form-horizontal\" style=\"width: 436px;\">
                <input type=\"hidden\" name=\"itemId\" value=\"\">
                <div class=\"control-group\">
                    ";
        // line 415
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.entity_field.label"), 1 => true, 2 => "oro.workflow.workflowdefinition.attribute.property_path.tooltip"), "method");
        echo "
                    <div class=\"controls\">
                        <input type=\"hidden\" name=\"property_path\" data-validation=\"";
        // line 417
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredConstraint"] ?? null)), "html", null, true);
        echo "\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    ";
        // line 422
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.label.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.attribute.label.tooltip"), "method");
        echo "
                    <div class=\"controls\">
                        <input type=\"text\" name=\"label\" value=\"<%- label %>\" placeholder=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty for system value"), "html", null, true);
        echo "\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    ";
        // line 429
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.form.required.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.attribute.required.tooltip"), "method");
        echo "
                    <div class=\"controls\">
                        <input type=\"checkbox\" name=\"required\" <% if (required) { %>checked=\"checked\"<% } %>/>
                    </div>
                </div>

                <div class=\"clearfix\">
                    <div class=\"pull-right\" style=\"margin-top: -35px;\">
                        <button type=\"reset\" class=\"btn hide\"><i class=\"fa-undo\"></i> ";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa-plus\"></i> ";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-list-template\">
        <div class=\"grid-container form-options-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span>";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entity field"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-row-template\">
        <td>
            <%= entityField %>
            <% if (!is_entity_attribute) { %>
            <span class=\"muted\">(";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("System"), "html", null, true);
        echo ")</span>
            <% } %>
        </td>
        <td>
            <%- label %>
            <% if (isSystemLabel) { %><span class=\"muted\">(";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("System"), "html", null, true);
        echo ")</span><% } %>
            <% if (typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                ";
        // line 472
        echo $context["workflowMacros"]->getrenderGoToTranslationsIconByLink("<%- translateLinks.label %>");
        echo "
            <% } %>
        </td>
        <td>
            <% if (required) { %>
                ";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes"), "html", null, true);
        echo "
            <% } else { %>
                ";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"), "html", null, true);
        echo "
            <% } %>
        </td>
        <td class=\"step-actions\">
            <div class=\"pull-right\">
                <% if (is_entity_attribute) { %>
                <a href=\"#\" class=\"edit-form-option action\" title=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update field"), "html", null, true);
        echo "\"><i class=\"fa-pencil-square-o hide-text\"/></a>
                <% } %>
                <a href=\"#\" class=\"delete-form-option action\" title=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete field"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"/></a>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-list-template\">
        <div class=\"grid-container transition-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span title=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.name.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transition name"), "html", null, true);
        echo "</span></th>
                        <th><span title=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To step"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\">
                <tr class=\"no-rows-message\">
                    <td colspan=\"3\">
                        <div style=\"padding: 10px 0;text-align: center\">
                            ";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There are no transitions yet."), "html", null, true);
        echo "
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"transition-row-template\">
        <td class=\"transition-name\">
            <span title=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.name.tooltip", array(), "tooltips"), "html", null, true);
        echo "\"><%- label %></span>
        </td>
        <td><span title=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\"><%- stepToLabel %></span></td>
        <td class=\"transition-actions\">
            <div class=\"pull-right\">
                <a href=\"#\" class=\"delete-transition action\" title=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this transition"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"/></a>
            </div>
        </td>
    </script>

    ";
        // line 527
        ob_start();
        // line 528
        echo "        ";
        $context["startStep"] = (($this->getAttribute(($context["entity"] ?? null), "startStep", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "startStep", array()), "name", array())) : (""));
        // line 529
        echo "        <div class=\"control-group\">
            ";
        // line 530
        echo $this->getAttribute($this, "render_label", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.start_step.label"), 1 => false, 2 => "oro.workflow.workflowdefinition.start_step.tooltip"), "method");
        echo "
            <div class=\"controls\">
                <input type=\"hidden\" name=\"start_step\" value=\"";
        // line 532
        echo twig_escape_filter($this->env, ($context["startStep"] ?? null), "html", null, true);
        echo "\"/>
            </div>
        </div>
    ";
        $context["startStepSelector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 536
        echo "
    ";
        // line 537
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 543
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row'), 1 =>         // line 544
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "related_entity", array()), 'row'), 2 =>         // line 545
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "exclusive_active_groups", array()), 'row'), 3 =>         // line 546
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "exclusive_record_groups", array()), 'row'), 4 =>         // line 547
($context["startStepSelector"] ?? null), 5 =>         // line 548
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "steps_display_ordered", array()), 'row'))))));
        // line 553
        echo "
    ";
        // line 554
        ob_start();
        // line 555
        echo "
    <div class=\"workflow-definition-buttons clearfix\">
        <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-primary add-transition-btn\"><i class=\"fa-plus\"></i> ";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add transition"), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-primary add-step-btn\"><i class=\"fa-plus\"></i> ";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add step"), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-primary refresh-btn\"><i class=\"fa-refresh\"></i> ";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Auto sort"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"pull-right workflow-history-container\"></div>
    </div>

    <div class=\"workflow-step-editor row-fluid clearfix\">
        <div class=\"";
        // line 566
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            echo "span12";
        } else {
            echo "span5";
        }
        echo "\">
            <div class=\"workflow-table-container\">
                <div class=\"workflow-definition-steps-list-container clearfix\"></div>
            </div>
        </div>
        ";
        // line 571
        if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 572
            echo "        <div class=\"span7\">
            <div class=\"workflow-flowchart-container\">
                <div class=\"workflow-flowchart-controls clearfix\"></div>
                <div class=\"workflow-flowchart-wrapper\" ";
            // line 575
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroui/js/app/views/zoomable-area-view", "autozoom" => true, "minZoom" => 0.05, "maxZoom" => 5))), "method"), "html", null, true);
            // line 583
            echo "><div class=\"workflow-flowchart clearfix\"></div></div>
            </div>
        </div>
        ";
        }
        // line 587
        echo "    </div>
    ";
        $context["stepsListWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 589
        echo "
    ";
        // line 590
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Designer"), "subblocks" => array(0 => array("data" => array(0 =>         // line 594
($context["stepsListWidget"] ?? null)))))));
        // line 598
        echo "
    ";
        // line 599
        $context["id"] = "workflow-designer";
        // line 600
        echo "    ";
        $context["data"] = array("dataBlocks" =>         // line 601
($context["dataBlocks"] ?? null));
        // line 603
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 31
    public function getrender_label($__label__ = null, $__required__ = null, $__tooltip__ = null, $__tooltip_placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "required" => $__required__,
            "tooltip" => $__tooltip__,
            "tooltip_placement" => $__tooltip_placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    <label class=\"control-label ";
            if (($context["required"] ?? null)) {
                echo "required";
            }
            echo "\">
        ";
            // line 33
            if ((array_key_exists("tooltip", $context) && ($context["tooltip"] ?? null))) {
                // line 34
                echo "            ";
                $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", 34);
                // line 35
                echo "            ";
                echo $context["ui"]->gettooltip(($context["tooltip"] ?? null), array(), ($context["tooltip_placement"] ?? null));
                echo "
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo " ";
            if (($context["required"] ?? null)) {
                echo "<em>*</em>";
            }
            // line 39
            echo "    </label>
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

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 39,  1009 => 38,  1006 => 37,  1000 => 35,  997 => 34,  995 => 33,  988 => 32,  973 => 31,  966 => 603,  964 => 601,  962 => 600,  960 => 599,  957 => 598,  955 => 594,  954 => 590,  951 => 589,  947 => 587,  941 => 583,  939 => 575,  934 => 572,  932 => 571,  920 => 566,  911 => 560,  907 => 559,  903 => 558,  898 => 555,  896 => 554,  893 => 553,  891 => 548,  890 => 547,  889 => 546,  888 => 545,  887 => 544,  886 => 543,  885 => 537,  882 => 536,  875 => 532,  870 => 530,  867 => 529,  864 => 528,  862 => 527,  854 => 522,  848 => 519,  843 => 517,  829 => 506,  819 => 499,  813 => 498,  807 => 497,  794 => 487,  789 => 485,  780 => 479,  775 => 477,  767 => 472,  762 => 470,  754 => 465,  739 => 453,  735 => 452,  731 => 451,  727 => 450,  712 => 438,  708 => 437,  697 => 429,  689 => 424,  684 => 422,  676 => 417,  671 => 415,  660 => 407,  655 => 405,  651 => 404,  646 => 402,  641 => 400,  631 => 393,  627 => 392,  623 => 391,  618 => 389,  612 => 386,  604 => 381,  597 => 379,  593 => 378,  577 => 365,  571 => 364,  567 => 363,  563 => 362,  535 => 337,  531 => 336,  521 => 329,  513 => 324,  508 => 322,  499 => 316,  494 => 314,  489 => 312,  477 => 303,  472 => 301,  467 => 298,  465 => 289,  444 => 271,  440 => 270,  430 => 263,  414 => 250,  406 => 245,  399 => 241,  391 => 236,  384 => 232,  376 => 227,  369 => 223,  360 => 217,  353 => 213,  346 => 208,  333 => 206,  329 => 205,  323 => 202,  314 => 196,  310 => 195,  306 => 194,  301 => 192,  283 => 177,  278 => 175,  258 => 158,  253 => 156,  241 => 147,  236 => 145,  231 => 143,  219 => 134,  215 => 133,  206 => 127,  181 => 104,  179 => 101,  173 => 99,  170 => 98,  162 => 95,  155 => 94,  152 => 93,  147 => 90,  144 => 89,  141 => 88,  135 => 86,  133 => 84,  132 => 82,  131 => 81,  129 => 80,  126 => 79,  123 => 78,  116 => 75,  114 => 74,  108 => 72,  103 => 70,  100 => 69,  98 => 67,  97 => 64,  96 => 63,  94 => 62,  91 => 61,  88 => 60,  81 => 54,  75 => 53,  69 => 51,  66 => 50,  62 => 1,  60 => 58,  57 => 47,  54 => 45,  52 => 44,  50 => 42,  47 => 22,  46 => 20,  45 => 19,  44 => 18,  43 => 17,  42 => 16,  41 => 15,  40 => 14,  39 => 13,  38 => 12,  37 => 11,  36 => 10,  35 => 9,  34 => 5,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition:update.html.twig", "");
    }
}
