<?php

/* OroNavigationBundle:menuUpdate:update.html.twig */
class __TwigTemplate_f1742b42e6fae8cd4006af7501033921d9f8e3bc05ffbfae114104eb16a594a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroNavigationBundle:menuUpdate:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:update.html.twig", 2);
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 4
        $context["formAction"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array());
        // line 5
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 6
        ob_start();
        // line 7
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 9
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        if ($this->getAttribute(($context["entity"] ?? null), "key", array())) {
            // line 12
            $context["breadcrumbs"] = twig_array_merge(($context["breadcrumbs"] ?? null), array("entityTitle" => (($this->getAttribute(($context["entity"] ?? null), "isDivider", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.divider")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "title", array()))))));
        } else {
            // line 14
            $context["breadcrumbs"] = twig_array_merge(($context["breadcrumbs"] ?? null), array("entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label")))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "isDivider", array()) == false)) {
            // line 19
            echo "        ";
            $context["html"] = $context["UI"]->getsaveAndStayButton(array("route" => (            // line 20
($context["routePrefix"] ?? null) . "update"), "params" => array("menuName" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "menu", array()), "key" => "\$key", "context" => ($context["context"] ?? null))));
            // line 23
            echo "
        ";
            // line 24
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndNewButton(array("route" => (            // line 25
($context["routePrefix"] ?? null) . "create"), "params" => array("menuName" => $this->getAttribute(            // line 26
($context["entity"] ?? null), "menu", array()), "parentKey" => $this->getAttribute(($context["entity"] ?? null), "key", array()), "context" => ($context["context"] ?? null)))));
            // line 28
            echo "
        ";
            // line 29
            echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (( !$this->getAttribute(($context["entity"] ?? null), "isCustom", array()) ||  !(null === $this->getAttribute(($context["entity"] ?? null), "id", array())))) {
            // line 33
            echo "        ";
            if ($this->getAttribute(($context["entity"] ?? null), "key", array())) {
                // line 34
                echo "            ";
                if (($this->getAttribute(($context["entity"] ?? null), "isCustom", array()) &&  !(null === $this->getAttribute(($context["entity"] ?? null), "id", array())))) {
                    // line 35
                    echo "                ";
                    // line 36
                    echo "                ";
                    echo $context["UI"]->getdeleteButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.delete"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((                    // line 38
array_key_exists("deletedMessage", $context)) ? (_twig_default_filter(($context["deletedMessage"] ?? null), "oro.navigation.menuupdate.deleted_message")) : ("oro.navigation.menuupdate.deleted_message")), array("%reload_link%" => ($context["reloadLink"] ?? null))), "dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                    // line 39
($context["routePrefix"] ?? null) . "ajax_delete"), array("context" => ($context["context"] ?? null), "menuName" => ($context["menuName"] ?? null), "key" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "key"), "method"))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                    // line 40
($context["routePrefix"] ?? null) . "view"), array("menuName" => $this->getAttribute(($context["entity"] ?? null), "menu", array()), "context" => ($context["context"] ?? null))), "aCss" => "no-hash remove-button", "id" => "btn-remove-attribute", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label")));
                    // line 44
                    echo "
            ";
                } else {
                    // line 46
                    echo "                ";
                    if ($this->getAttribute(($context["entity"] ?? null), "active", array())) {
                        // line 47
                        echo "                    ";
                        // line 48
                        echo "                    <div class=\"pull-right btn-group icons-holder\">
                        ";
                        // line 49
                        echo $context["UI"]->getajaxButton(array("aCss" => "no-hash", "iCss" => "fa-eye-slash", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.hide"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.hide"), "dataId" => $this->getAttribute(                        // line 54
($context["entity"] ?? null), "id", array()), "dataMethod" => "PUT", "dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                        // line 56
($context["routePrefix"] ?? null) . "ajax_hide"), array("context" => ($context["context"] ?? null), "menuName" => ($context["menuName"] ?? null), "key" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "key"), "method"))), "dataRedirect" => $this->getAttribute($this->getAttribute(                        // line 57
($context["app"] ?? null), "request", array()), "uri", array()), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((                        // line 58
array_key_exists("hiddenMessage", $context)) ? (_twig_default_filter(($context["hiddenMessage"] ?? null), "oro.navigation.menuupdate.hide_success_message")) : ("oro.navigation.menuupdate.hide_success_message")), array("%reload_link%" => ($context["reloadLink"] ?? null)))));
                        // line 59
                        echo "
                    </div>
                ";
                    } else {
                        // line 62
                        echo "                    ";
                        // line 63
                        echo "                    <div class=\"pull-right btn-group icons-holder\">
                        ";
                        // line 64
                        echo $context["UI"]->getajaxButton(array("aCss" => "no-hash", "iCss" => "fa-eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.show"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.show"), "dataId" => $this->getAttribute(                        // line 69
($context["entity"] ?? null), "id", array()), "dataMethod" => "PUT", "dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                        // line 71
($context["routePrefix"] ?? null) . "ajax_show"), array("context" => ($context["context"] ?? null), "menuName" => ($context["menuName"] ?? null), "key" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "key"), "method"))), "dataRedirect" => $this->getAttribute($this->getAttribute(                        // line 72
($context["app"] ?? null), "request", array()), "uri", array()), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((                        // line 73
array_key_exists("showedMessage", $context)) ? (_twig_default_filter(($context["showedMessage"] ?? null), "oro.navigation.menuupdate.show_success_message")) : ("oro.navigation.menuupdate.show_success_message")), array("%reload_link%" => ($context["reloadLink"] ?? null)))));
                        // line 74
                        echo "
                    </div>
                ";
                    }
                    // line 77
                    echo "            ";
                }
                // line 78
                echo "        ";
            }
            // line 79
            echo "        ";
            if (($this->getAttribute(($context["entity"] ?? null), "isDivider", array()) == false)) {
                // line 80
                echo "            ";
                // line 81
                echo "            ";
                $context["html"] = $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                // line 82
($context["routePrefix"] ?? null) . "create"), array("menuName" => $this->getAttribute(($context["entity"] ?? null), "menu", array()), "parentKey" => $this->getAttribute(($context["entity"] ?? null), "key", array()), "context" => ($context["context"] ?? null))), "aCss" => "btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.entity_label")))));
                // line 87
                echo "            ";
                // line 88
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $context["UI"]->getajaxButton(array("aCss" => "btn-primary no-hash menu-divider-create-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.divider"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.divider"))), "dataMethod" => "POST", "dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((                // line 93
($context["routePrefix"] ?? null) . "ajax_create"), array("context" => ($context["context"] ?? null), "menuName" => ($context["menuName"] ?? null), "parentKey" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "key"), "method"), "isDivider" => true)), "dataRedirect" => $this->getAttribute($this->getAttribute(                // line 94
($context["app"] ?? null), "request", array()), "uri", array()), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((                // line 95
array_key_exists("dividerCreatedMessage", $context)) ? (_twig_default_filter(($context["dividerCreatedMessage"] ?? null), "oro.navigation.menuupdate.divider_created")) : ("oro.navigation.menuupdate.divider_created")), array("%reload_link%" => ($context["reloadLink"] ?? null))))));
                // line 97
                echo "
            ";
                // line 98
                $context["parameters"] = array("html" =>                 // line 99
($context["html"] ?? null), "groupKey" => "createButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-primary")));
                // line 107
                echo "
            ";
                // line 108
                echo $context["UI"]->getpinnedDropdownButton(($context["parameters"] ?? null));
                echo "

            ";
                // line 110
                echo $context["UI"]->getbuttonSeparator();
                echo "
        ";
            }
            // line 112
            echo "    ";
        }
    }

    // line 115
    public function block_content_data($context, array $blocks = array())
    {
        // line 116
        echo "    ";
        $context["id"] = "menu-update-edit";
        // line 117
        echo "
    ";
        // line 118
        $context["dataBlocks"] = array();
        // line 119
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "isDivider", array()) == false)) {
            // line 120
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 127
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titles", array()), 'row'), 1 => (($this->getAttribute(            // line 128
($context["form"] ?? null), "uri", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "uri", array()), 'row')) : (null)), 2 => (($this->getAttribute(            // line 129
($context["form"] ?? null), "aclResourceId", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "aclResourceId", array()), 'row')) : (null)), 3 =>             // line 130
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "icon", array()), 'row'), 4 =>             // line 131
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptions", array()), 'row')))))));
            // line 136
            echo "    ";
        }
        // line 137
        echo "
    ";
        // line 138
        $context["additionalData"] = array();
        // line 139
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 140
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 141
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 143
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 148
($context["additionalData"] ?? null))))));
            // line 151
            echo "    ";
        }
        // line 152
        echo "
    ";
        // line 153
        $context["data"] = array("formErrors" => ((        // line 154
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 155
($context["dataBlocks"] ?? null));
        // line 157
        echo "
    ";
        // line 158
        $context["twoColumnContent"] = $this->renderParentBlock("content_data", $context, $blocks);
        // line 159
        echo "
    ";
        // line 160
        $context["treeOptions"] = array("view" => "oronavigation/js/app/views/tree-manage-view", "data" =>         // line 162
($context["tree"] ?? null), "nodeId" => $this->getAttribute(        // line 163
($context["entity"] ?? null), "key", array()), "menu" => $this->getAttribute(        // line 164
($context["entity"] ?? null), "menu", array()), "context" =>         // line 165
($context["context"] ?? null), "updateAllowed" => true, "onRootSelectRoute" => (        // line 167
($context["routePrefix"] ?? null) . "view"), "onSelectRoute" => (        // line 168
($context["routePrefix"] ?? null) . "update"), "onMoveRoute" => (        // line 169
($context["routePrefix"] ?? null) . "ajax_move"), "successMessage" => ((        // line 170
array_key_exists("movedMessage", $context)) ? (_twig_default_filter(($context["movedMessage"] ?? null), "oro.navigation.menuupdate.moved_success_message")) : ("oro.navigation.menuupdate.moved_success_message")));
        // line 172
        echo "
    ";
        // line 173
        $this->loadTemplate("OroNavigationBundle:menuUpdate:update.html.twig", "OroNavigationBundle:menuUpdate:update.html.twig", 173, "1955227857")->display($context);
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 173,  267 => 172,  265 => 170,  264 => 169,  263 => 168,  262 => 167,  261 => 165,  260 => 164,  259 => 163,  258 => 162,  257 => 160,  254 => 159,  252 => 158,  249 => 157,  247 => 155,  246 => 154,  245 => 153,  242 => 152,  239 => 151,  237 => 148,  235 => 143,  232 => 142,  225 => 141,  222 => 140,  216 => 139,  214 => 138,  211 => 137,  208 => 136,  206 => 131,  205 => 130,  204 => 129,  203 => 128,  202 => 127,  200 => 120,  197 => 119,  195 => 118,  192 => 117,  189 => 116,  186 => 115,  181 => 112,  176 => 110,  171 => 108,  168 => 107,  166 => 99,  165 => 98,  162 => 97,  160 => 95,  159 => 94,  158 => 93,  156 => 88,  154 => 87,  152 => 82,  150 => 81,  148 => 80,  145 => 79,  142 => 78,  139 => 77,  134 => 74,  132 => 73,  131 => 72,  130 => 71,  129 => 69,  128 => 64,  125 => 63,  123 => 62,  118 => 59,  116 => 58,  115 => 57,  114 => 56,  113 => 54,  112 => 49,  109 => 48,  107 => 47,  104 => 46,  100 => 44,  98 => 40,  97 => 39,  96 => 38,  94 => 36,  92 => 35,  89 => 34,  86 => 33,  84 => 32,  81 => 31,  76 => 29,  73 => 28,  71 => 26,  70 => 25,  69 => 24,  66 => 23,  64 => 21,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  48 => 14,  45 => 12,  43 => 11,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:update.html.twig", "");
    }
}


/* OroNavigationBundle:menuUpdate:update.html.twig */
class __TwigTemplate_f1742b42e6fae8cd4006af7501033921d9f8e3bc05ffbfae114104eb16a594a3_1955227857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroNavigationBundle:menuUpdate:update.html.twig", 173);
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

    // line 174
    public function block_sidebar($context, array $blocks = array())
    {
        // line 175
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menu.menu_list_default.label"), "treeOptions" =>         // line 178
($context["treeOptions"] ?? null)), 1 => array("move" => array("view" => "oroui/js/app/views/jstree/move-action-view", "routeName" => (        // line 183
($context["routePrefix"] ?? null) . "move"), "routeParams" => array("menuName" =>         // line 184
($context["menuName"] ?? null), "context" => ($context["context"] ?? null))))), "method"), "html", null, true);
        // line 187
        echo "
        ";
    }

    // line 190
    public function block_content($context, array $blocks = array())
    {
        // line 191
        echo "            ";
        // line 192
        echo "                ";
        echo ($context["twoColumnContent"] ?? null);
        echo "
            ";
        // line 194
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 194,  347 => 192,  345 => 191,  342 => 190,  337 => 187,  335 => 184,  334 => 183,  333 => 178,  331 => 175,  328 => 174,  270 => 173,  267 => 172,  265 => 170,  264 => 169,  263 => 168,  262 => 167,  261 => 165,  260 => 164,  259 => 163,  258 => 162,  257 => 160,  254 => 159,  252 => 158,  249 => 157,  247 => 155,  246 => 154,  245 => 153,  242 => 152,  239 => 151,  237 => 148,  235 => 143,  232 => 142,  225 => 141,  222 => 140,  216 => 139,  214 => 138,  211 => 137,  208 => 136,  206 => 131,  205 => 130,  204 => 129,  203 => 128,  202 => 127,  200 => 120,  197 => 119,  195 => 118,  192 => 117,  189 => 116,  186 => 115,  181 => 112,  176 => 110,  171 => 108,  168 => 107,  166 => 99,  165 => 98,  162 => 97,  160 => 95,  159 => 94,  158 => 93,  156 => 88,  154 => 87,  152 => 82,  150 => 81,  148 => 80,  145 => 79,  142 => 78,  139 => 77,  134 => 74,  132 => 73,  131 => 72,  130 => 71,  129 => 69,  128 => 64,  125 => 63,  123 => 62,  118 => 59,  116 => 58,  115 => 57,  114 => 56,  113 => 54,  112 => 49,  109 => 48,  107 => 47,  104 => 46,  100 => 44,  98 => 40,  97 => 39,  96 => 38,  94 => 36,  92 => 35,  89 => 34,  86 => 33,  84 => 32,  81 => 31,  76 => 29,  73 => 28,  71 => 26,  70 => 25,  69 => 24,  66 => 23,  64 => 21,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  48 => 14,  45 => 12,  43 => 11,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:update.html.twig", "");
    }
}
