<?php

/* OroDashboardBundle:Index:default.html.twig */
class __TwigTemplate_d567d7327e8bb02eca35906ce11d8cf6d137aea1c3932d11334b39f0eed18373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'titleNavButtons' => array($this, 'block_titleNavButtons'),
            'navButtons' => array($this, 'block_navButtons'),
            'widgets_content' => array($this, 'block_widgets_content'),
            'widgets' => array($this, 'block_widgets'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroDashboardBundle:Index:default.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Index:default.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 3
($context["dashboard"] ?? null), "getLabel", array(), "method"))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.menu.dashboards_tab.label")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 7
($context["dashboard"] ?? null), "getLabel", array(), "method"))));
        // line 9
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroDashboardBundle:Index:default.html.twig", 9)->display($context);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        $context["widgetIdPrefix"] = (("dashboard-widget-" . twig_random($this->env)) . "-");
        // line 13
        $context["allowEdit"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $this->getAttribute(($context["dashboard"] ?? null), "entity", array()));
        // line 14
        echo "
";
        // line 15
        $context["availableWidgets"] = array();
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
        foreach ($context['_seq'] as $context["widgetName"] => $context["widget"]) {
            // line 17
            echo "    ";
            if (( !$this->getAttribute($context["widget"], "acl", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["widget"], "acl", array())))) {
                // line 18
                echo "        ";
                $context["icon"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($context["widget"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "icon", array()), "bundles/orodashboard/img/no_icon.png")) : ("bundles/orodashboard/img/no_icon.png")));
                // line 19
                echo "        ";
                $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["widget"], "label", array()));
                // line 20
                echo "        ";
                $context["description"] = "";
                // line 21
                echo "        ";
                if ($this->getAttribute($context["widget"], "description", array(), "any", true, true)) {
                    // line 22
                    echo "            ";
                    $context["description"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["widget"], "description", array()));
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                $context["availableWidgets"] = twig_array_merge(($context["availableWidgets"] ?? null), array(0 => array("dialogIcon" =>                 // line 25
($context["icon"] ?? null), "title" =>                 // line 26
($context["title"] ?? null), "widgetName" =>                 // line 27
$context["widgetName"], "description" =>                 // line 28
($context["description"] ?? null), "isNew" => $this->getAttribute(                // line 29
$context["widget"], "isNew", array()), "configurationDialogOptions" => $this->getAttribute(                // line 30
$context["widget"], "configuration_dialog_options", array()))));
                // line 32
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetName'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
        // line 35
        $context["widgetIds"] = array();
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dashboard"] ?? null), "widgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 37
            echo "    ";
            if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                // line 38
                echo "        ";
                $context["widgetIds"] = twig_array_merge(($context["widgetIds"] ?? null), array(0 => (($context["widgetIdPrefix"] ?? null) . $this->getAttribute($context["widget"], "id", array()))));
                // line 39
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        $context["dashboardContainerOptions"] = array("widgetIds" =>         // line 43
($context["widgetIds"] ?? null), "dashboardId" => $this->getAttribute(        // line 44
($context["dashboard"] ?? null), "id", array()), "columnsSelector" => ".dashboard-column", "allowEdit" => ((        // line 46
($context["allowEdit"] ?? null)) ? ("true") : ("false")), "availableWidgets" =>         // line 47
($context["availableWidgets"] ?? null));
        // line 49
        echo "
";
        // line 50
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Index:default.html.twig", 50);
        // line 51
        echo "
<div class=\"layout-content dashboard-container-wrapper\" ";
        // line 52
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/app/views/dashboard-container-view", "options" =>         // line 54
($context["dashboardContainerOptions"] ?? null)));
        // line 55
        echo ">
    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                ";
        // line 59
        $this->displayBlock('title', $context, $blocks);
        // line 68
        echo "                ";
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 140
        echo "            </div>
        </div>
    </div>
    ";
        // line 143
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 172
        echo "</div>
";
    }

    // line 59
    public function block_title($context, array $blocks = array())
    {
        // line 60
        echo "                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">
                            ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["dashboard"] ?? null), "getLabel", array(), "method")), "html", null, true);
        echo "
                        </h1>
                    </div>
                </div>
                ";
    }

    // line 68
    public function block_titleNavButtons($context, array $blocks = array())
    {
        // line 69
        echo "
                    ";
        // line 70
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter(($context["dashboard_navButtons_before"] ?? null), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 71
        echo "
                    <div class=\"pull-right title-buttons-container\">
                        ";
        // line 73
        if (($context["allowEdit"] ?? null)) {
            // line 74
            echo "                            <a href=\"javascript:void(0);\" class=\"dashboard-widgets-add btn main-group pull-left\">
                                <i class=\"fa-plus\"></i>
                                ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.add_dashboard_widgets.add_widget"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 79
        echo "
                        ";
        // line 80
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute(($context["dashboard"] ?? null), "entity", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dashboard_create")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $this->getAttribute(($context["dashboard"] ?? null), "entity", array())))) {
            // line 81
            echo "                            ";
            ob_start();
            // line 82
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $this->getAttribute(($context["dashboard"] ?? null), "entity", array()))) {
                // line 83
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_update", array("id" => $this->getAttribute(                // line 84
($context["dashboard"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.edit_dashboard_link.title"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.edit_dashboard_link.text"), "iCss" => "fa-pencil-square-o"));
                // line 88
                echo "
                                ";
            }
            // line 90
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dashboard_create")) {
                // line 91
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.create_dashboard_link.title"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.create_dashboard_link.text"), "iCss" => "fa-plus"));
                // line 96
                echo "
                                ";
            }
            // line 98
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute(($context["dashboard"] ?? null), "entity", array()))) {
                // line 99
                echo "                                    <li>
                                        ";
                // line 100
                echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_dashboard", array("id" => $this->getAttribute(                // line 101
($context["dashboard"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(                // line 105
($context["dashboard"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_label")));
                // line 107
                echo "
                                    </li>
                                ";
            }
            // line 110
            echo "                            ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 111
            echo "
                            ";
            // line 112
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.tools_dropdown.label"), "iCss" => "fa-cog", "aCss" => "pull-right", "html" =>             // line 116
($context["html"] ?? null)));
            // line 117
            echo "
                        ";
        }
        // line 119
        echo "                    </div>
                    ";
        // line 120
        $this->displayBlock('navButtons', $context, $blocks);
        // line 136
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter(($context["dashboard_navButtons_after"] ?? null), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 138
        echo "
                ";
    }

    // line 120
    public function block_navButtons($context, array $blocks = array())
    {
        // line 121
        echo "                        ";
        if ((twig_length_filter($this->env, ($context["dashboards"] ?? null)) > 1)) {
            // line 122
            echo "                            <div class=\"dashboard-selector-container pull-right title-buttons-container\">
                                <label for=\"dashboard_selector\">";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                                <select id=\"dashboard_selector\" ";
            // line 124
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/app/views/dashboard-change-view"));
            // line 126
            echo ">
                                    ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dashboards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 128
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dashboardModel"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["dashboardModel"], "id", array()) == $this->getAttribute(($context["dashboard"] ?? null), "id", array()))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                            ";
                // line 129
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["dashboardModel"], "getLabel", array(), "method")), 50), "html", null, true);
                echo "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                                </select>
                            </div>
                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 143
    public function block_widgets_content($context, array $blocks = array())
    {
        // line 144
        echo "        ";
        $context["contentClass"] = ((array_key_exists("contentClass", $context)) ? (_twig_default_filter(($context["contentClass"] ?? null), "dashboard-container")) : ("dashboard-container"));
        // line 145
        echo "        <div class=\"scrollable-container\">
            <div class=\"responsive-section ";
        // line 146
        echo twig_escape_filter($this->env, ($context["contentClass"] ?? null), "html", null, true);
        echo "\">
                <div class=\"clearfix\">
                ";
        // line 148
        $this->displayBlock('widgets', $context, $blocks);
        // line 168
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 148
    public function block_widgets($context, array $blocks = array())
    {
        // line 149
        echo "                    ";
        echo $this->getAttribute(        // line 150
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 151
($context["dashboard"] ?? null), "getOrderedColumnWidgets", array(0 => 0, 1 => false, 2 => true), "method"), "columnElementId" => "dashboard-column-0", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 154
($context["widgetIdPrefix"] ?? null), "allowEdit" =>         // line 155
($context["allowEdit"] ?? null))), "method");
        // line 157
        echo "
                    ";
        // line 158
        echo $this->getAttribute(        // line 159
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 160
($context["dashboard"] ?? null), "getOrderedColumnWidgets", array(0 => 1, 1 => true, 2 => false), "method"), "columnElementId" => "dashboard-column-1", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 163
($context["widgetIdPrefix"] ?? null), "allowEdit" =>         // line 164
($context["allowEdit"] ?? null))), "method");
        // line 166
        echo "
                ";
    }

    // line 175
    public function getrenderWidgetsColumn($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "columnElementId", array()), "html", null, true);
            echo "\" class=\"responsive-cell dashboard-column\">
        ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "widgets", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 178
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                    // line 179
                    echo "                ";
                    echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "dashboard-item", "wid" => ($this->getAttribute(                    // line 182
($context["options"] ?? null), "widgetIdPrefix", array()) . $this->getAttribute($context["widget"], "id", array())), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(                    // line 183
$context["widget"], "config", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "route_parameters", array()), array("_widgetId" => $this->getAttribute($context["widget"], "id", array())))), "state" => array("id" => $this->getAttribute(                    // line 185
$context["widget"], "id", array()), "expanded" => $this->getAttribute(                    // line 186
$context["widget"], "expanded", array()), "layoutPosition" => $this->getAttribute(                    // line 187
$context["widget"], "layoutPosition", array())), "allowEdit" => $this->getAttribute(                    // line 189
($context["options"] ?? null), "allowEdit", array()), "showConfig" => ($this->getAttribute(                    // line 190
($context["options"] ?? null), "allowEdit", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["widget"], "config", array()), "configuration", array())) > 0)), "widgetName" => $this->getAttribute($this->getAttribute(                    // line 191
$context["widget"], "entity", array()), "name", array()), "configurationDialogOptions" => $this->getAttribute($this->getAttribute(                    // line 192
$context["widget"], "config", array()), "configuration_dialog_options", array())));
                    // line 194
                    echo "
            ";
                }
                // line 196
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "        <div class=\"empty-text";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["options"] ?? null), "widgets", array())) > 0)) {
                echo " hidden-empty-text";
            }
            echo "\">
            <div class=\"widget-placeholder\">
                ";
            // line 199
            if ($this->getAttribute(($context["options"] ?? null), "allowEdit", array())) {
                // line 200
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.empty_column_message.allowed");
                echo "
                ";
            } else {
                // line 202
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.empty_column_message.denied"), "html", null, true);
                echo "
                ";
            }
            // line 204
            echo "            </div>
        </div>
    </div>
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
        return "OroDashboardBundle:Index:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 204,  440 => 202,  434 => 200,  432 => 199,  424 => 197,  418 => 196,  414 => 194,  412 => 192,  411 => 191,  410 => 190,  409 => 189,  408 => 187,  407 => 186,  406 => 185,  405 => 183,  404 => 182,  402 => 179,  399 => 178,  395 => 177,  390 => 176,  378 => 175,  373 => 166,  371 => 164,  370 => 163,  369 => 160,  368 => 159,  367 => 158,  364 => 157,  362 => 155,  361 => 154,  360 => 151,  359 => 150,  357 => 149,  354 => 148,  347 => 168,  345 => 148,  340 => 146,  337 => 145,  334 => 144,  331 => 143,  327 => 135,  322 => 132,  313 => 129,  304 => 128,  300 => 127,  297 => 126,  295 => 124,  291 => 123,  288 => 122,  285 => 121,  282 => 120,  277 => 138,  275 => 137,  272 => 136,  270 => 120,  267 => 119,  263 => 117,  261 => 116,  260 => 112,  257 => 111,  254 => 110,  249 => 107,  247 => 105,  246 => 101,  245 => 100,  242 => 99,  239 => 98,  235 => 96,  232 => 91,  229 => 90,  225 => 88,  223 => 84,  221 => 83,  218 => 82,  215 => 81,  213 => 80,  210 => 79,  204 => 76,  200 => 74,  198 => 73,  194 => 71,  192 => 70,  189 => 69,  186 => 68,  177 => 63,  172 => 60,  169 => 59,  164 => 172,  162 => 143,  157 => 140,  154 => 68,  152 => 59,  146 => 55,  144 => 54,  143 => 52,  140 => 51,  138 => 50,  135 => 49,  133 => 47,  132 => 46,  131 => 44,  130 => 43,  129 => 42,  126 => 41,  119 => 39,  116 => 38,  113 => 37,  109 => 36,  107 => 35,  104 => 34,  97 => 32,  95 => 30,  94 => 29,  93 => 28,  92 => 27,  91 => 26,  90 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  54 => 12,  51 => 11,  46 => 9,  44 => 7,  42 => 5,  39 => 4,  35 => 1,  33 => 3,  30 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Index:default.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Index/default.html.twig");
    }
}
