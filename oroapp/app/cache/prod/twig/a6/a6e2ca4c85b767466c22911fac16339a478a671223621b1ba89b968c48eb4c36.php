<?php

/* OroUIBundle:actions:update.html.twig */
class __TwigTemplate_193a8a80ec6cb764ef0c95e299e417550835034ed1b21adf9f680e1a341293a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'before_content_addition' => array($this, 'block_before_content_addition'),
            'content' => array($this, 'block_content'),
            'widget_context' => array($this, 'block_widget_context'),
            'page_widget_actions' => array($this, 'block_page_widget_actions'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumbMessage' => array($this, 'block_breadcrumbMessage'),
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageActions' => array($this, 'block_pageActions'),
            'content_data' => array($this, 'block_content_data'),
            'sync_content_tags' => array($this, 'block_sync_content_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(((($context["isWidgetContext"] ?? null)) ? ("OroFormBundle:Layout:widgetForm.html.twig") : ($this->getAttribute(($context["bap"] ?? null), "layout", array()))), "OroUIBundle:actions:update.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["isWidgetContext"] = ((array_key_exists("isWidgetContext", $context)) ? (($context["isWidgetContext"] ?? null)) : (false));
        // line 4
        $context["syncMacro"] = $this->loadTemplate("OroSyncBundle:Include:contentTags.html.twig", "OroUIBundle:actions:update.html.twig", 4);
        // line 5
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:update.html.twig", 5);
        // line 7
        $context["entity"] = ((array_key_exists("entity", $context)) ? (($context["entity"] ?? null)) : (null));
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_before_content_addition($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_before_content_addition", $context)) ? (_twig_default_filter(($context["update_before_content_addition"] ?? null), "update_before_content_addition")) : ("update_before_content_addition")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (((($context["isWidgetContext"] ?? null) && array_key_exists("savedId", $context)) && ($context["savedId"] ?? null))) {
            // line 15
            echo "        ";
            $this->displayBlock('widget_context', $context, $blocks);
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["formAction"] = ((array_key_exists("formAction", $context)) ? (_twig_default_filter(($context["formAction"] ?? null))) : (""));
            // line 26
            echo "    ";
            if (( !array_key_exists("addQueryParameters", $context) || (($context["addQueryParameters"] ?? null) == true))) {
                // line 27
                echo "        ";
                $context["formAction"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery(($context["formAction"] ?? null));
                // line 28
                echo "    ";
            }
            // line 29
            echo "    ";
            $context["formAttr"] = twig_array_merge(((array_key_exists("formAttr", $context)) ? (_twig_default_filter(($context["formAttr"] ?? null), array())) : (array())), array("id" => $this->getAttribute($this->getAttribute(            // line 30
($context["form"] ?? null), "vars", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute(            // line 31
($context["form"] ?? null), "vars", array()), "name", array()), "action" =>             // line 32
($context["formAction"] ?? null), "method" => $this->getAttribute($this->getAttribute(            // line 33
($context["form"] ?? null), "vars", array()), "method", array()), "data-collect" => "true"));
            // line 36
            echo "    <form ";
            echo $context["UI"]->getattributes(($context["formAttr"] ?? null));
            echo "
          ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
            echo "
          ";
            // line 38
            if (array_key_exists("pageComponent", $context)) {
                echo $context["UI"]->getrenderPageComponentAttributes(($context["pageComponent"] ?? null));
            }
            echo ">
        ";
            // line 39
            if (($context["isWidgetContext"] ?? null)) {
                // line 40
                echo "            ";
                $this->displayBlock('page_widget_actions', $context, $blocks);
                // line 46
                echo "        ";
            } else {
                // line 47
                echo "        <div class=\"container-fluid page-title\">
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-left pull-left-extra\">
                        ";
                // line 51
                $this->displayBlock('pageHeader', $context, $blocks);
                // line 110
                echo "                    </div>
                    <div class=\"pull-right\">
                        <div class=\"pull-right title-buttons-container\">
                            ";
                // line 113
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons_before", $context)) ? (_twig_default_filter(($context["update_navButtons_before"] ?? null), "update_navButtons_before")) : ("update_navButtons_before")), array("entity" => ($context["entity"] ?? null)));
                // line 114
                echo "                            ";
                $this->displayBlock('navButtons', $context, $blocks);
                // line 115
                echo "                            ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons_after", $context)) ? (_twig_default_filter(($context["update_navButtons_after"] ?? null), "update_navButtons_after")) : ("update_navButtons_after")), array("entity" => ($context["entity"] ?? null)));
                // line 116
                echo "
                            ";
                // line 117
                if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()) != "GET")) {
                    // line 118
                    echo "                                ";
                    $context["inputAction"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "default_input_action", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(                    // line 119
($context["form"] ?? null), "vars", array()), "default_input_action", array())) : (twig_constant("Oro\\Bundle\\UIBundle\\Route\\Router::ACTION_SAVE_CLOSE")));
                    // line 122
                    echo "                                <input
                                        type=\"hidden\"
                                        name=\"input_action\"
                                        value=\"";
                    // line 125
                    echo twig_escape_filter($this->env, ($context["inputAction"] ?? null), "html", null, true);
                    echo "\"
                                        data-form-id=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
                    echo "\"
                                />
                            ";
                }
                // line 129
                echo "                        </div>
                        <div class=\"pull-right user-info-state\">
                            <div class=\"inline-decorate-container\">
                                <ul class=\"inline-decorate\">
                                    ";
                // line 133
                $this->displayBlock('pageActions', $context, $blocks);
                // line 150
                echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            // line 158
            echo "        <div class=\"layout-content\">
            ";
            // line 159
            $this->displayBlock('content_data', $context, $blocks);
            // line 233
            echo "        </div>
        ";
            // line 234
            $this->displayBlock('sync_content_tags', $context, $blocks);
            // line 238
            echo "    </form>
    ";
            // line 239
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
    ";
        }
    }

    // line 15
    public function block_widget_context($context, array $blocks = array())
    {
        // line 16
        echo "            <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/widget-form-component", "options" => array("_wid" => $this->getAttribute($this->getAttribute(        // line 19
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "data" => ((        // line 20
array_key_exists("savedId", $context)) ? (_twig_default_filter(($context["savedId"] ?? null), null)) : (null)))));
        // line 22
        echo "></div>
        ";
    }

    // line 40
    public function block_page_widget_actions($context, array $blocks = array())
    {
        // line 41
        echo "            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            </div>
            ";
    }

    // line 51
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 52
        echo "                            <div class=\"clearfix customer-info well-small";
        if ( !array_key_exists("avatar", $context)) {
            echo " customer-simple";
        }
        echo "\">
                                ";
        // line 53
        if (array_key_exists("avatar", $context)) {
            // line 54
            echo "                                    <div class=\"visual\">
                                        <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, ((($context["avatar"] ?? null)) ? (($context["avatar"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array()), "html", null, true);
            echo "\"/>
                                    </div>
                                ";
        }
        // line 58
        echo "                                <div class=\"customer-content pull-left\">
                                    <div class=\"clearfix\">
                                        ";
        // line 60
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 92
        echo "                                    </div>
                                    <div class=\"clearfix\">
                                        <ul class=\"inline\">
                                            ";
        // line 95
        $this->displayBlock('stats', $context, $blocks);
        // line 105
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
    }

    // line 60
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 61
        echo "                                            ";
        if (array_key_exists("breadcrumbs", $context)) {
            // line 62
            echo "                                                <div class=\"pull-left\">
                                                    <div class=\"sub-title\">";
            // line 64
            if ($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array(), "any", true, true)) {
                // line 65
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
                echo "</a>";
            } else {
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
            }
            // line 69
            echo "</div>
                                                    <span class=\"separator\">/</span>
                                                    ";
            // line 71
            if ($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array(), "any", true, true)) {
                // line 72
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 73
                    echo "                                                            <div class=\"sub-title\">";
                    // line 74
                    if ($this->getAttribute($context["breadcrumb"], "indexPath", array(), "any", true, true)) {
                        // line 75
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexPath", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                    }
                    // line 79
                    echo "</div>
                                                            <span class=\"separator\">/</span>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                                                    ";
            }
            // line 83
            echo "                                                    ";
            if (($this->getAttribute(($context["breadcrumbs"] ?? null), "rawEntityTitle", array(), "any", true, true) && $this->getAttribute(($context["breadcrumbs"] ?? null), "rawEntityTitle", array()))) {
                // line 84
                echo "                                                        <h1 class=\"user-name\">";
                echo $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array());
                echo "</h1>
                                                    ";
            } else {
                // line 86
                echo "                                                        <h1 class=\"user-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array()), "html", null, true);
                echo "</h1>
                                                    ";
            }
            // line 88
            echo "                                                </div>
                                            ";
        }
        // line 90
        echo "                                            ";
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 91
        echo "                                        ";
    }

    // line 90
    public function block_breadcrumbMessage($context, array $blocks = array())
    {
    }

    // line 95
    public function block_stats($context, array $blocks = array())
    {
        // line 96
        echo "                                                ";
        if (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array(), "any", false, true), "createdAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array(), "any", false, true), "updatedAt", array(), "any", true, true))) {
            // line 97
            echo "                                                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt")) {
                // line 98
                echo "                                                        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))), "html", null, true);
                echo "</li>
                                                    ";
            }
            // line 100
            echo "                                                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "updatedAt")) {
                // line 101
                echo "                                                        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "updatedAt", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))), "html", null, true);
                echo "</li>
                                                    ";
            }
            // line 103
            echo "                                                ";
        }
        // line 104
        echo "                                            ";
    }

    // line 114
    public function block_navButtons($context, array $blocks = array())
    {
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 133
    public function block_pageActions($context, array $blocks = array())
    {
        // line 134
        echo "                                        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_pageActions_before", $context)) ? (_twig_default_filter(($context["update_pageActions_before"] ?? null), "update_pageActions_before")) : ("update_pageActions_before")), array("entity" => ($context["entity"] ?? null)));
        // line 135
        echo "
                                        ";
        // line 136
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? (($context["audit_entity_id"] ?? null)) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array()))) : (""))));
        // line 137
        echo "                                        ";
        if (($context["audit_entity_id"] ?? null)) {
            // line 138
            echo "                                            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("change_history_block", $context)) ? (_twig_default_filter(($context["change_history_block"] ?? null), "change_history_block")) : ("change_history_block")), array("entity" => ((            // line 139
array_key_exists("entity", $context)) ? (_twig_default_filter(($context["entity"] ?? null), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))), "entity_class" => ((            // line 140
array_key_exists("audit_entity_class", $context)) ? (_twig_default_filter(($context["audit_entity_class"] ?? null), null)) : (null)), "id" =>             // line 141
($context["audit_entity_id"] ?? null), "title" => ((            // line 142
array_key_exists("audit_title", $context)) ? (_twig_default_filter(($context["audit_title"] ?? null), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "__toString", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "__toString", array())) : (null)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "__toString", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "__toString", array())) : (null)))), "audit_path" => ((            // line 143
array_key_exists("audit_path", $context)) ? (_twig_default_filter(($context["audit_path"] ?? null), "oro_dataaudit_history")) : ("oro_dataaudit_history")), "audit_show_change_history" => ((            // line 144
array_key_exists("audit_show_change_history", $context)) ? (_twig_default_filter(($context["audit_show_change_history"] ?? null), false)) : (false))));
            // line 146
            echo "                                        ";
        }
        // line 147
        echo "
                                        ";
        // line 148
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_pageActions_after", $context)) ? (_twig_default_filter(($context["update_pageActions_after"] ?? null), "update_pageActions_after")) : ("update_pageActions_after")), array("entity" => ($context["entity"] ?? null)));
        // line 149
        echo "                                    ";
    }

    // line 159
    public function block_content_data($context, array $blocks = array())
    {
        // line 160
        echo "                ";
        $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processForm($this->env, ($context["data"] ?? null), ($context["form"] ?? null), ($context["entity"] ?? null));
        // line 161
        echo "
                ";
        // line 162
        if (((($context["entity"] ?? null) && array_key_exists("data", $context)) && $this->getAttribute(($context["data"] ?? null), "dataBlocks", array(), "any", true, true))) {
            // line 163
            echo "                    ";
            $context["dataBlocks"] = $this->getAttribute(($context["data"] ?? null), "dataBlocks", array());
            // line 165
            ob_start();
            // line 166
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_content_data_activities", $context)) ? (_twig_default_filter(($context["update_content_data_activities"] ?? null), "update_content_data_activities")) : ("update_content_data_activities")), array("entity" => ($context["entity"] ?? null)));
            $context["activitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 169
            if ( !twig_test_empty(($context["activitiesData"] ?? null))) {
                // line 170
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.sections.activities"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 175
($context["activitiesData"] ?? null)))))));
                // line 179
                echo "                    ";
            }
            // line 181
            ob_start();
            // line 182
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_content_data_communications", $context)) ? (_twig_default_filter(($context["update_content_data_communications"] ?? null), "update_content_data_communications")) : ("update_content_data_communications")), array("entity" => ($context["entity"] ?? null)));
            $context["communicationsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 185
            if ( !twig_test_empty(($context["communicationsData"] ?? null))) {
                // line 186
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Communications"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 191
($context["communicationsData"] ?? null)))))));
                // line 195
                echo "                    ";
            }
            // line 197
            ob_start();
            // line 198
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_content_data_additional_information", $context)) ? (_twig_default_filter(($context["update_content_data_additional_information"] ?? null), "update_content_data_additional_information")) : ("update_content_data_additional_information")), array("entity" => ($context["entity"] ?? null)));
            $context["additionalInformationData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 201
            if ( !twig_test_empty(($context["additionalInformationData"] ?? null))) {
                // line 202
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional Information"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 207
($context["additionalInformationData"] ?? null)))))));
                // line 211
                echo "                    ";
            }
            // line 213
            ob_start();
            // line 214
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_content_data_comments", $context)) ? (_twig_default_filter(($context["update_content_data_comments"] ?? null), "update_content_data_comments")) : ("update_content_data_comments")), array("entity" => ($context["entity"] ?? null)));
            $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 217
            if ( !twig_test_empty(($context["commentsData"] ?? null))) {
                // line 218
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.comment.entity_plural_label"), "subblocks" => array(0 => array("spanClass" => "responsive-cell activity-list-widget", "data" => array(0 =>                 // line 223
($context["commentsData"] ?? null)))))));
                // line 227
                echo "                    ";
            }
            // line 228
            echo "
                    ";
            // line 229
            $context["data"] = twig_array_merge(($context["data"] ?? null), array("dataBlocks" => ($context["dataBlocks"] ?? null)));
            // line 230
            echo "                ";
        }
        // line 231
        echo "                ";
        echo $context["UI"]->getscrollData(($context["id"] ?? null), ($context["data"] ?? null), ($context["entity"] ?? null), ($context["form"] ?? null));
        echo "
            ";
    }

    // line 234
    public function block_sync_content_tags($context, array $blocks = array())
    {
        // line 235
        echo "            ";
        // line 236
        echo "            ";
        echo $context["syncMacro"]->getsyncContentTags($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 236,  518 => 235,  515 => 234,  508 => 231,  505 => 230,  503 => 229,  500 => 228,  497 => 227,  495 => 223,  493 => 218,  491 => 217,  488 => 214,  486 => 213,  483 => 211,  481 => 207,  479 => 202,  477 => 201,  474 => 198,  472 => 197,  469 => 195,  467 => 191,  465 => 186,  463 => 185,  460 => 182,  458 => 181,  455 => 179,  453 => 175,  451 => 170,  449 => 169,  446 => 166,  444 => 165,  441 => 163,  439 => 162,  436 => 161,  433 => 160,  430 => 159,  426 => 149,  424 => 148,  421 => 147,  418 => 146,  416 => 144,  415 => 143,  414 => 142,  413 => 141,  412 => 140,  411 => 139,  409 => 138,  406 => 137,  404 => 136,  401 => 135,  398 => 134,  395 => 133,  389 => 114,  385 => 104,  382 => 103,  374 => 101,  371 => 100,  363 => 98,  360 => 97,  357 => 96,  354 => 95,  349 => 90,  345 => 91,  342 => 90,  338 => 88,  332 => 86,  326 => 84,  323 => 83,  320 => 82,  312 => 79,  309 => 77,  302 => 75,  300 => 74,  298 => 73,  293 => 72,  291 => 71,  287 => 69,  284 => 67,  277 => 65,  275 => 64,  272 => 62,  269 => 61,  266 => 60,  258 => 105,  256 => 95,  251 => 92,  249 => 60,  245 => 58,  237 => 55,  234 => 54,  232 => 53,  225 => 52,  222 => 51,  215 => 43,  211 => 42,  208 => 41,  205 => 40,  200 => 22,  198 => 20,  197 => 19,  195 => 16,  192 => 15,  185 => 239,  182 => 238,  180 => 234,  177 => 233,  175 => 159,  172 => 158,  162 => 150,  160 => 133,  154 => 129,  148 => 126,  144 => 125,  139 => 122,  137 => 119,  135 => 118,  133 => 117,  130 => 116,  127 => 115,  124 => 114,  122 => 113,  117 => 110,  115 => 51,  109 => 47,  106 => 46,  103 => 40,  101 => 39,  95 => 38,  91 => 37,  86 => 36,  84 => 33,  83 => 32,  82 => 31,  81 => 30,  79 => 29,  76 => 28,  73 => 27,  70 => 26,  67 => 25,  64 => 24,  61 => 15,  58 => 14,  55 => 13,  50 => 10,  47 => 9,  43 => 2,  41 => 7,  39 => 5,  37 => 4,  35 => 1,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:actions:update.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/actions/update.html.twig");
    }
}
