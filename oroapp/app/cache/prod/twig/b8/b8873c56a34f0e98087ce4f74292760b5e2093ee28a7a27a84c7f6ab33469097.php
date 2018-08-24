<?php

/* OroUIBundle:actions:view.html.twig */
class __TwigTemplate_1c59ebd939fb838eea3a0d0b013c5e8ec38a2082305e746c371d09c5eb87723d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'before_content_addition' => array($this, 'block_before_content_addition'),
            'content' => array($this, 'block_content'),
            'workflowStepListContainer' => array($this, 'block_workflowStepListContainer'),
            'navButtonContainer' => array($this, 'block_navButtonContainer'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageActions' => array($this, 'block_pageActions'),
            'ownerLink' => array($this, 'block_ownerLink'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'after_breadcrumbs' => array($this, 'block_after_breadcrumbs'),
            'breadcrumbMessage' => array($this, 'block_breadcrumbMessage'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
            'sync_content_tags' => array($this, 'block_sync_content_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroUIBundle:actions:view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["syncMacro"] = $this->loadTemplate("OroSyncBundle:Include:contentTags.html.twig", "OroUIBundle:actions:view.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:view.html.twig", 3);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content_addition($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_before_content_addition", $context)) ? (_twig_default_filter(($context["view_before_content_addition"] ?? null), "view_before_content_addition")) : ("view_before_content_addition")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"layout-content\"
        ";
        // line 11
        if (array_key_exists("pageComponent", $context)) {
            echo $context["UI"]->getrenderPageComponentAttributes(($context["pageComponent"] ?? null));
        }
        // line 12
        echo "        >
    <div class=\"container-fluid page-title\">
        ";
        // line 14
        $this->displayBlock('workflowStepListContainer', $context, $blocks);
        // line 17
        echo "        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                ";
        // line 19
        ob_start();
        // line 20
        echo "                <div class=\"pull-right\">
                    <div class=\"pull-right title-buttons-container\">
                        ";
        // line 22
        $this->displayBlock('navButtonContainer', $context, $blocks);
        // line 27
        echo "                    </div>
                    <div class=\"pull-right user-info-state\">
                        <div class=\"inline-decorate-container\">
                            <ul class=\"inline-decorate\">
                                ";
        // line 31
        $this->displayBlock('pageActions', $context, $blocks);
        // line 55
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                ";
        $context["actionButtons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                ";
        if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 61
            echo "                   ";
            echo twig_escape_filter($this->env, ($context["actionButtons"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 63
        echo "                <div class=\"pull-left-extra\">
                ";
        // line 64
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 131
        echo "                </div>
                ";
        // line 132
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 133
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["actionButtons"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 135
        echo "            </div>
        </div>
        ";
        // line 137
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("page_title_after", $context)) ? (_twig_default_filter(($context["page_title_after"] ?? null), "page_title_after")) : ("page_title_after")), array("entity" => ($context["entity"] ?? null)));
        // line 138
        echo "    </div>

    <div class=\"layout-content scrollable-container\">
        ";
        // line 141
        $this->displayBlock('content_data', $context, $blocks);
        // line 235
        echo "    </div>

    ";
        // line 237
        $this->displayBlock('sync_content_tags', $context, $blocks);
        // line 242
        echo "</div>
";
    }

    // line 14
    public function block_workflowStepListContainer($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("page_title_before", $context)) ? (_twig_default_filter(($context["page_title_before"] ?? null), "page_title_before")) : ("page_title_before")), array("entity" => ($context["entity"] ?? null)));
        // line 16
        echo "        ";
    }

    // line 22
    public function block_navButtonContainer($context, array $blocks = array())
    {
        // line 23
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons_before", $context)) ? (_twig_default_filter(($context["view_navButtons_before"] ?? null), "view_navButtons_before")) : ("view_navButtons_before")), array("entity" => ($context["entity"] ?? null)));
        // line 24
        echo "                            ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 25
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons_after", $context)) ? (_twig_default_filter(($context["view_navButtons_after"] ?? null), "view_navButtons_after")) : ("view_navButtons_after")), array("entity" => ($context["entity"] ?? null)));
        // line 26
        echo "                        ";
    }

    // line 24
    public function block_navButtons($context, array $blocks = array())
    {
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter(($context["view_navButtons"] ?? null), "view_navButtons")) : ("view_navButtons")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 31
    public function block_pageActions($context, array $blocks = array())
    {
        // line 32
        echo "                                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_pageActions_before", $context)) ? (_twig_default_filter(($context["view_pageActions_before"] ?? null), "view_pageActions_before")) : ("view_pageActions_before")), array("entity" => ($context["entity"] ?? null)));
        // line 33
        echo "
                                    ";
        // line 34
        $this->displayBlock('ownerLink', $context, $blocks);
        // line 40
        echo "
                                    ";
        // line 41
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? (($context["audit_entity_id"] ?? null)) : ((($this->getAttribute(($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()))) : (""))));
        // line 42
        echo "                                    ";
        if (($context["audit_entity_id"] ?? null)) {
            // line 43
            echo "                                        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("change_history_block", $context)) ? (_twig_default_filter(($context["change_history_block"] ?? null), "change_history_block")) : ("change_history_block")), array("entity" =>             // line 44
($context["entity"] ?? null), "entity_class" => ((            // line 45
array_key_exists("audit_entity_class", $context)) ? (_twig_default_filter(($context["audit_entity_class"] ?? null), null)) : (null)), "id" =>             // line 46
($context["audit_entity_id"] ?? null), "title" => ((            // line 47
array_key_exists("audit_title", $context)) ? (_twig_default_filter(($context["audit_title"] ?? null), (($this->getAttribute(($context["entity"] ?? null), "__toString", array(), "any", true, true)) ? ($this->getAttribute(($context["entity"] ?? null), "__toString", array())) : (null)))) : ((($this->getAttribute(($context["entity"] ?? null), "__toString", array(), "any", true, true)) ? ($this->getAttribute(($context["entity"] ?? null), "__toString", array())) : (null)))), "audit_path" => ((            // line 48
array_key_exists("audit_path", $context)) ? (_twig_default_filter(($context["audit_path"] ?? null), "oro_dataaudit_history")) : ("oro_dataaudit_history")), "audit_show_change_history" => ((            // line 49
array_key_exists("audit_show_change_history", $context)) ? (_twig_default_filter(($context["audit_show_change_history"] ?? null), false)) : (false))));
            // line 51
            echo "                                    ";
        }
        // line 52
        echo "
                                    ";
        // line 53
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_pageActions_after", $context)) ? (_twig_default_filter(($context["view_pageActions_after"] ?? null), "view_pageActions_after")) : ("view_pageActions_after")), array("entity" => ($context["entity"] ?? null)));
        // line 54
        echo "                                ";
    }

    // line 34
    public function block_ownerLink($context, array $blocks = array())
    {
        // line 35
        echo "                                        ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() &&  !(null === ($context["entity"] ?? null)))) {
            // line 36
            echo "                                            ";
            $context["ownerLink"] = $context["UI"]->getentityOwnerLink(($context["entity"] ?? null));
            // line 37
            echo "                                            <li>";
            echo twig_escape_filter($this->env, ($context["ownerLink"] ?? null), "html", null, true);
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("additional_owner_info", $context)) ? (_twig_default_filter(($context["additional_owner_info"] ?? null), "additional_owner_info")) : ("additional_owner_info")), array("entity" => ($context["entity"] ?? null)));
            echo "</li>
                                        ";
        }
        // line 39
        echo "                                    ";
    }

    // line 64
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 65
        echo "                    <div class=\"customer-info well-small";
        if ( !array_key_exists("avatar", $context)) {
            echo " customer-simple";
        }
        echo "\">
                        ";
        // line 66
        if (array_key_exists("avatar", $context)) {
            // line 67
            echo "                            <div class=\"visual\">
                                <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, ((($context["avatar"] ?? null)) ? (($context["avatar"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array()), "html", null, true);
            echo "\"/>
                            </div>
                        ";
        }
        // line 71
        echo "                        <div class=\"customer-content\">
                            <div class=\"top-row\">
                                ";
        // line 73
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 108
        echo "                            </div>
                            <div>
                                <ul class=\"inline\">
                                    ";
        // line 111
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("page_header_stats_before", $context)) ? (_twig_default_filter(($context["page_header_stats_before"] ?? null), "page_header_stats_before")) : ("page_header_stats_before")), array("entity" => ($context["entity"] ?? null)));
        // line 112
        echo "                                    ";
        $this->displayBlock('stats', $context, $blocks);
        // line 120
        echo "                                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("page_header_stats_after", $context)) ? (_twig_default_filter(($context["page_header_stats_after"] ?? null), "page_header_stats_after")) : ("page_header_stats_after")), array("entity" => ($context["entity"] ?? null)));
        // line 121
        echo "
                                    ";
        // line 122
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile() &&  !(null === ($context["entity"] ?? null)))) {
            // line 123
            echo "                                        ";
            $context["ownerLink"] = $context["UI"]->getentityOwnerLink(($context["entity"] ?? null));
            // line 124
            echo "                                        <li>";
            echo twig_escape_filter($this->env, ($context["ownerLink"] ?? null), "html", null, true);
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("additional_owner_info", $context)) ? (_twig_default_filter(($context["additional_owner_info"] ?? null), "additional_owner_info")) : ("additional_owner_info")), array("entity" => ($context["entity"] ?? null)));
            echo "</li>
                                    ";
        }
        // line 126
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 73
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 74
        echo "                                    ";
        if (array_key_exists("breadcrumbs", $context)) {
            // line 75
            echo "                                        <div class=\"pull-left\">
                                            ";
            // line 76
            if ($this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array(), "any", true, true)) {
                // line 77
                echo "                                            <div class=\"sub-title\">";
                // line 78
                if ($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array(), "any", true, true)) {
                    // line 79
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
                }
                // line 83
                echo "</div>
                                            <span class=\"separator\">/</span>
                                            ";
            }
            // line 86
            echo "                                            ";
            if ($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array(), "any", true, true)) {
                // line 87
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 88
                    echo "                                                    <div class=\"sub-title\">";
                    // line 89
                    if ($this->getAttribute($context["breadcrumb"], "indexPath", array(), "any", true, true)) {
                        // line 90
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexPath", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                    }
                    // line 94
                    echo "</div>
                                                    <span class=\"separator\">/</span>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                                            ";
            }
            // line 98
            echo "                                            ";
            if (($this->getAttribute(($context["breadcrumbs"] ?? null), "rawEntityTitle", array(), "any", true, true) && $this->getAttribute(($context["breadcrumbs"] ?? null), "rawEntityTitle", array()))) {
                // line 99
                echo "                                                <h1 class=\"user-name\">";
                echo $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array());
                echo "</h1>
                                            ";
            } else {
                // line 101
                echo "                                                <h1 class=\"user-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array()), "html", null, true);
                echo "</h1>
                                            ";
            }
            // line 103
            echo "                                        </div>
                                        ";
            // line 104
            $this->displayBlock('after_breadcrumbs', $context, $blocks);
            // line 105
            echo "                                    ";
        }
        // line 106
        echo "                                    ";
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 107
        echo "                                ";
    }

    // line 104
    public function block_after_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 106
    public function block_breadcrumbMessage($context, array $blocks = array())
    {
    }

    // line 112
    public function block_stats($context, array $blocks = array())
    {
        // line 113
        echo "                                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "createdAt")) {
            // line 114
            echo "                                            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
            echo ": ";
            echo ((($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array(), "any", false, true), "createdAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array()))) : ("N/A"));
            echo "</li>
                                        ";
        }
        // line 116
        echo "                                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "updatedAt")) {
            // line 117
            echo "                                            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
            echo ": ";
            echo ((($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array(), "any", false, true), "updatedAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "updatedAt", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "updatedAt", array()))) : ("N/A"));
            echo "</li>
                                        ";
        }
        // line 119
        echo "                                    ";
    }

    // line 141
    public function block_content_data($context, array $blocks = array())
    {
        // line 142
        echo "            ";
        if ((array_key_exists("data", $context) && $this->getAttribute(($context["data"] ?? null), "dataBlocks", array(), "any", true, true))) {
            // line 143
            echo "                ";
            $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processView($this->env, ($context["data"] ?? null), ($context["entity"] ?? null));
            // line 144
            echo "                ";
            $context["dataBlocks"] = $this->getAttribute(($context["data"] ?? null), "dataBlocks", array());
            // line 146
            ob_start();
            // line 147
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_activities", $context)) ? (_twig_default_filter(($context["view_content_data_activities"] ?? null), "view_content_data_activities")) : ("view_content_data_activities")), array("entity" => ($context["entity"] ?? null)));
            $context["activitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 150
            if ( !twig_test_empty(($context["activitiesData"] ?? null))) {
                // line 151
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.sections.activities"), "priority" => 1000, "subblocks" => array(0 => array("spanClass" => "empty activities-container", "data" => array(0 =>                 // line 157
($context["activitiesData"] ?? null)))))));
                // line 161
                echo "                ";
            }
            // line 163
            ob_start();
            // line 164
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities", $context)) ? (_twig_default_filter(($context["view_content_data_marketing_activities"] ?? null), "view_content_data_marketing_activities")) : ("view_content_data_marketing_activities")), array("entity" => ($context["entity"] ?? null)));
            $context["marketingActivitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 167
            if ( !twig_test_empty(($context["marketingActivitiesData"] ?? null))) {
                // line 168
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.sections.marketingactivities"), "priority" => 1050, "subblocks" => array(0 => array("spanClass" => "empty marketing-activities-container", "data" => array(0 =>                 // line 174
($context["marketingActivitiesData"] ?? null)))))));
                // line 178
                echo "                ";
            }
            // line 180
            ob_start();
            // line 181
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_communications", $context)) ? (_twig_default_filter(($context["view_content_data_communications"] ?? null), "view_content_data_communications")) : ("view_content_data_communications")), array("entity" => ($context["entity"] ?? null)));
            $context["communicationsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 184
            if ( !twig_test_empty(($context["communicationsData"] ?? null))) {
                // line 185
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Communications"), "priority" => 1100, "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 191
($context["communicationsData"] ?? null)))))));
                // line 195
                echo "                ";
            }
            // line 197
            ob_start();
            // line 198
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_additional_information", $context)) ? (_twig_default_filter(($context["view_content_data_additional_information"] ?? null), "view_content_data_additional_information")) : ("view_content_data_additional_information")), array("entity" => ($context["entity"] ?? null)));
            $context["additionalInformationData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 201
            if ( !twig_test_empty(($context["additionalInformationData"] ?? null))) {
                // line 202
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional Information"), "priority" => 1200, "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 208
($context["additionalInformationData"] ?? null)))))));
                // line 212
                echo "                ";
            }
            // line 214
            ob_start();
            // line 215
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_comments", $context)) ? (_twig_default_filter(($context["view_content_data_comments"] ?? null), "view_content_data_comments")) : ("view_content_data_comments")), array("entity" => ($context["entity"] ?? null)));
            $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 218
            if ( !twig_test_empty(($context["commentsData"] ?? null))) {
                // line 219
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.comment.entity_plural_label"), "priority" => 1300, "subblocks" => array(0 => array("spanClass" => "responsive-cell activity-list-widget", "data" => array(0 =>                 // line 225
($context["commentsData"] ?? null)))))));
                // line 229
                echo "                ";
            }
            // line 230
            echo "
                ";
            // line 231
            $context["data"] = twig_array_merge(($context["data"] ?? null), array("dataBlocks" => ($context["dataBlocks"] ?? null)));
            // line 232
            echo "            ";
        }
        // line 233
        echo "            ";
        echo $context["UI"]->getscrollData(($context["id"] ?? null), ($context["data"] ?? null), ($context["entity"] ?? null));
        echo "
        ";
    }

    // line 237
    public function block_sync_content_tags($context, array $blocks = array())
    {
        // line 238
        echo "        ";
        // line 239
        echo "        ";
        echo $context["syncMacro"]->getsyncContentTags(($context["entity"] ?? null));
        echo "
        ";
        // line 240
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_entity_sync_content_tags", $context)) ? (_twig_default_filter(($context["view_entity_sync_content_tags"] ?? null), "view_entity_sync_content_tags")) : ("view_entity_sync_content_tags")), array("entity" => ($context["entity"] ?? null)));
        // line 241
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 241,  541 => 240,  536 => 239,  534 => 238,  531 => 237,  524 => 233,  521 => 232,  519 => 231,  516 => 230,  513 => 229,  511 => 225,  509 => 219,  507 => 218,  504 => 215,  502 => 214,  499 => 212,  497 => 208,  495 => 202,  493 => 201,  490 => 198,  488 => 197,  485 => 195,  483 => 191,  481 => 185,  479 => 184,  476 => 181,  474 => 180,  471 => 178,  469 => 174,  467 => 168,  465 => 167,  462 => 164,  460 => 163,  457 => 161,  455 => 157,  453 => 151,  451 => 150,  448 => 147,  446 => 146,  443 => 144,  440 => 143,  437 => 142,  434 => 141,  430 => 119,  422 => 117,  419 => 116,  411 => 114,  408 => 113,  405 => 112,  400 => 106,  395 => 104,  391 => 107,  388 => 106,  385 => 105,  383 => 104,  380 => 103,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  354 => 94,  351 => 92,  344 => 90,  342 => 89,  340 => 88,  335 => 87,  332 => 86,  327 => 83,  324 => 81,  317 => 79,  315 => 78,  313 => 77,  311 => 76,  308 => 75,  305 => 74,  302 => 73,  294 => 126,  287 => 124,  284 => 123,  282 => 122,  279 => 121,  276 => 120,  273 => 112,  271 => 111,  266 => 108,  264 => 73,  260 => 71,  252 => 68,  249 => 67,  247 => 66,  240 => 65,  237 => 64,  233 => 39,  226 => 37,  223 => 36,  220 => 35,  217 => 34,  213 => 54,  211 => 53,  208 => 52,  205 => 51,  203 => 49,  202 => 48,  201 => 47,  200 => 46,  199 => 45,  198 => 44,  196 => 43,  193 => 42,  191 => 41,  188 => 40,  186 => 34,  183 => 33,  180 => 32,  177 => 31,  171 => 24,  167 => 26,  164 => 25,  161 => 24,  158 => 23,  155 => 22,  151 => 16,  148 => 15,  145 => 14,  140 => 242,  138 => 237,  134 => 235,  132 => 141,  127 => 138,  125 => 137,  121 => 135,  115 => 133,  113 => 132,  110 => 131,  108 => 64,  105 => 63,  99 => 61,  96 => 60,  89 => 55,  87 => 31,  81 => 27,  79 => 22,  75 => 20,  73 => 19,  69 => 17,  67 => 14,  63 => 12,  59 => 11,  56 => 10,  53 => 9,  48 => 6,  45 => 5,  41 => 1,  39 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:actions:view.html.twig", "");
    }
}
