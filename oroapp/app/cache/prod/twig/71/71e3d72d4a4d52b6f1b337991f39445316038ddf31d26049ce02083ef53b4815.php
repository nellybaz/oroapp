<?php

/* OroNavigationBundle:menuUpdate:view.html.twig */
class __TwigTemplate_971b62f7be50ab6a73d977daf6420d973e5b9c3edb0064c6ae4944940a0d96ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroNavigationBundle:menuUpdate:view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["navigationMacro"] = $this->loadTemplate("OroSyncBundle:Include:contentTags.html.twig", "OroNavigationBundle:menuUpdate:view.html.twig", 3);
        // line 4
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:view.html.twig", 4);
        // line 5
        $context["__internal_e718a9718c8a587eb65826c1145cb29c965a6ad3471ae871c81acd51d31b4da8"] = $this;
        // line 6
        ob_start();
        // line 7
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 9
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"layout-content\"";
        // line 13
        if (array_key_exists("pageComponent", $context)) {
            echo $context["UI"]->getrenderPageComponentAttributes(($context["pageComponent"] ?? null));
        }
        echo ">
        <div class=\"container-fluid page-title\">
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    ";
        // line 17
        ob_start();
        // line 18
        echo "                        <div class=\"pull-right\">
                            ";
        // line 19
        echo $context["__internal_e718a9718c8a587eb65826c1145cb29c965a6ad3471ae871c81acd51d31b4da8"]->getresetButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((        // line 20
($context["routePrefix"] ?? null) . "ajax_reset"), array("menuName" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "root", array()), "name", array()), "context" => ($context["context"] ?? null))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((        // line 21
($context["routePrefix"] ?? null) . "view"), array("menuName" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "root", array()), "name", array()), "context" => ($context["context"] ?? null))), "menuKey" => $this->getAttribute($this->getAttribute(        // line 22
($context["entity"] ?? null), "root", array()), "name", array()), "data" => array("success-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((        // line 24
array_key_exists("resetedMessage", $context)) ? (_twig_default_filter(($context["resetedMessage"] ?? null), "oro.navigation.menuupdate.reset_message")) : ("oro.navigation.menuupdate.reset_message")), array("%menuKey%" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "root", array()), "name", array()), "%reload_link%" => ($context["reloadLink"] ?? null))))));
        // line 26
        echo "

                            ";
        // line 28
        echo $context["UI"]->getbuttonSeparator();
        echo "

                            ";
        // line 30
        $context["html"] = $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((        // line 31
($context["routePrefix"] ?? null) . "create"), array("menuName" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "root", array()), "name", array()), "context" => ($context["context"] ?? null))), "aCss" => "btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label")))));
        // line 36
        echo "
                            ";
        // line 38
        echo "                            ";
        $context["html"] = (($context["html"] ?? null) . $context["UI"]->getajaxButton(array("aCss" => "btn-primary no-hash menu-divider-create-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.divider"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.divider"))), "dataMethod" => "POST", "dataRedirect" => $this->getAttribute($this->getAttribute(        // line 43
($context["app"] ?? null), "request", array()), "uri", array()), "dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((        // line 44
($context["routePrefix"] ?? null) . "ajax_create"), array("context" => ($context["context"] ?? null), "menuName" => $this->getAttribute(($context["entity"] ?? null), "name", array()), "parentKey" => $this->getAttribute(($context["entity"] ?? null), "name", array()), "isDivider" => true)), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((        // line 45
array_key_exists("dividerCreatedMessage", $context)) ? (_twig_default_filter(($context["dividerCreatedMessage"] ?? null), "oro.navigation.menuupdate.divider_created")) : ("oro.navigation.menuupdate.divider_created")), array("%reload_link%" => ($context["reloadLink"] ?? null))))));
        // line 47
        echo "
                            ";
        // line 48
        $context["parameters"] = array("html" =>         // line 49
($context["html"] ?? null), "groupKey" => "createButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-primary")));
        // line 57
        echo "
                            ";
        // line 58
        echo $context["UI"]->getpinnedDropdownButton(($context["parameters"] ?? null));
        echo "
                        </div>
                    ";
        $context["actionButtons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                    ";
        if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 62
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["actionButtons"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 64
        echo "                    <div class=\"pull-left-extra\">
                        ";
        // line 65
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 68
        echo "                    </div>
                    ";
        // line 69
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 70
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["actionButtons"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 72
        echo "                </div>
            </div>
        </div>

        <div class=\"clearfix\">
            ";
        // line 77
        $this->displayBlock('content_data', $context, $blocks);
        // line 115
        echo "        </div>
    </div>
";
    }

    // line 65
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 66
        echo "                            ";
        echo twig_include($this->env, $context, "OroNavigationBundle:menuUpdate:pageHeader.html.twig");
        echo "
                        ";
    }

    // line 77
    public function block_content_data($context, array $blocks = array())
    {
        // line 78
        echo "                ";
        $context["treeOptions"] = array("data" =>         // line 79
($context["tree"] ?? null), "menu" => $this->getAttribute($this->getAttribute(        // line 80
($context["entity"] ?? null), "root", array()), "name", array()), "nodeId" => $this->getAttribute($this->getAttribute(        // line 81
($context["entity"] ?? null), "root", array()), "name", array()), "context" =>         // line 82
($context["context"] ?? null), "updateAllowed" => true, "view" => "oronavigation/js/app/views/tree-manage-view", "onRootSelectRoute" => (        // line 85
($context["routePrefix"] ?? null) . "view"), "onSelectRoute" => (        // line 86
($context["routePrefix"] ?? null) . "update"), "onMoveRoute" => (        // line 87
($context["routePrefix"] ?? null) . "ajax_move"), "successMessage" => ((        // line 88
array_key_exists("movedMessage", $context)) ? (_twig_default_filter(($context["movedMessage"] ?? null), "oro.navigation.menuupdate.moved_success_message")) : ("oro.navigation.menuupdate.moved_success_message")));
        // line 90
        echo "
                ";
        // line 91
        $this->loadTemplate("OroNavigationBundle:menuUpdate:view.html.twig", "OroNavigationBundle:menuUpdate:view.html.twig", 91, "602977590")->display($context);
        // line 114
        echo "            ";
    }

    // line 119
    public function getresetButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 120
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:view.html.twig", 120);
            // line 121
            echo "
    ";
            // line 122
            $context["url"] = (($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array())) : (""));
            // line 123
            echo "
    ";
            // line 124
            $context["parametersData"] = twig_array_merge($this->getAttribute(($context["parameters"] ?? null), "data", array()), array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reset_confirm", array("%menuKey%" => $this->getAttribute(            // line 125
($context["parameters"] ?? null), "menuKey", array()))), "ok-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reset_ok_text"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reset_title"), "url" =>             // line 128
($context["url"] ?? null)));
            // line 130
            echo "
    ";
            // line 131
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("data" =>             // line 132
($context["parametersData"] ?? null), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reset"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reset"), "aCss" => " btn icons-holder-text no-hash remove-button", "path" => "javascript:void(0);"));
            // line 138
            echo "
    ";
            // line 139
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 140
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute(($context["parameters"] ?? null), "data", array()), array("redirect" => $this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array())));
                // line 141
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("data" => ($context["data"] ?? null)));
                // line 142
                echo "    ";
            }
            // line 143
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 145
            echo $context["UI"]->getlink(($context["parameters"] ?? null));
            echo "
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
        return "OroNavigationBundle:menuUpdate:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 145,  227 => 143,  224 => 142,  221 => 141,  218 => 140,  216 => 139,  213 => 138,  211 => 132,  210 => 131,  207 => 130,  205 => 128,  204 => 125,  203 => 124,  200 => 123,  198 => 122,  195 => 121,  192 => 120,  180 => 119,  176 => 114,  174 => 91,  171 => 90,  169 => 88,  168 => 87,  167 => 86,  166 => 85,  165 => 82,  164 => 81,  163 => 80,  162 => 79,  160 => 78,  157 => 77,  150 => 66,  147 => 65,  141 => 115,  139 => 77,  132 => 72,  126 => 70,  124 => 69,  121 => 68,  119 => 65,  116 => 64,  110 => 62,  107 => 61,  101 => 58,  98 => 57,  96 => 49,  95 => 48,  92 => 47,  90 => 45,  89 => 44,  88 => 43,  86 => 38,  83 => 36,  81 => 31,  80 => 30,  75 => 28,  71 => 26,  69 => 24,  68 => 22,  67 => 21,  66 => 20,  65 => 19,  62 => 18,  60 => 17,  51 => 13,  48 => 12,  45 => 11,  41 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:view.html.twig", "");
    }
}


/* OroNavigationBundle:menuUpdate:view.html.twig */
class __TwigTemplate_971b62f7be50ab6a73d977daf6420d973e5b9c3edb0064c6ae4944940a0d96ef_602977590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 91
        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroNavigationBundle:menuUpdate:view.html.twig", 91);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        // line 93
        echo "                        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menu.menu_list_default.label"), "treeOptions" =>         // line 96
($context["treeOptions"] ?? null)), 1 => array("move" => array("view" => "oroui/js/app/views/jstree/move-action-view", "routeName" => (        // line 101
($context["routePrefix"] ?? null) . "move"), "routeParams" => array("menuName" => $this->getAttribute($this->getAttribute(        // line 102
($context["entity"] ?? null), "root", array()), "name", array()), "context" => ($context["context"] ?? null))))), "method"), "html", null, true);
        // line 105
        echo "
                    ";
    }

    // line 108
    public function block_content($context, array $blocks = array())
    {
        // line 109
        echo "                        <div class=\"tree-empty-content scrollable-container\">
                            ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.select_existing_or_create_new"), "html", null, true);
        echo "
                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 110,  321 => 109,  318 => 108,  313 => 105,  311 => 102,  310 => 101,  309 => 96,  307 => 93,  304 => 92,  286 => 91,  231 => 145,  227 => 143,  224 => 142,  221 => 141,  218 => 140,  216 => 139,  213 => 138,  211 => 132,  210 => 131,  207 => 130,  205 => 128,  204 => 125,  203 => 124,  200 => 123,  198 => 122,  195 => 121,  192 => 120,  180 => 119,  176 => 114,  174 => 91,  171 => 90,  169 => 88,  168 => 87,  167 => 86,  166 => 85,  165 => 82,  164 => 81,  163 => 80,  162 => 79,  160 => 78,  157 => 77,  150 => 66,  147 => 65,  141 => 115,  139 => 77,  132 => 72,  126 => 70,  124 => 69,  121 => 68,  119 => 65,  116 => 64,  110 => 62,  107 => 61,  101 => 58,  98 => 57,  96 => 49,  95 => 48,  92 => 47,  90 => 45,  89 => 44,  88 => 43,  86 => 38,  83 => 36,  81 => 31,  80 => 30,  75 => 28,  71 => 26,  69 => 24,  68 => 22,  67 => 21,  66 => 20,  65 => 19,  62 => 18,  60 => 17,  51 => 13,  48 => 12,  45 => 11,  41 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:view.html.twig", "");
    }
}
