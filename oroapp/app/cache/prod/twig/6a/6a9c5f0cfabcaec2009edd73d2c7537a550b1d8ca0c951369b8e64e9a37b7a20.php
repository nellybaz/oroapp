<?php

/* OroWebCatalogBundle:ContentNode:update.html.twig */
class __TwigTemplate_5db99fb7392e7d93e618c9e3b2495fe8da240c02353310220a1976c307a8b1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroWebCatalogBundle:ContentNode:update.html.twig", 1);
        $this->blocks = array(
            'ownerLink' => array($this, 'block_ownerLink'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        // line 3
        $context["web_catalog"] = $this->getAttribute(($context["entity"] ?? null), "webCatalog", array());
        // line 5
        if (twig_test_empty($this->getAttribute(($context["entity"] ?? null), "parentNode", array()))) {
            // line 6
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_content_node_update_root", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "webCatalog", array()), "id", array())));
        } elseif (twig_test_empty($this->getAttribute(        // line 7
($context["entity"] ?? null), "id", array()))) {
            // line 8
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_content_node_create", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parentNode", array()), "id", array())));
        } else {
            // line 10
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_content_node_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%webCatalogName%" => $this->getAttribute(        // line 13
($context["web_catalog"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_ownerLink($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() &&  !(null === ($context["web_catalog"] ?? null)))) {
            // line 17
            echo "        ";
            $context["ownerLink"] = $this->getAttribute(($context["UI"] ?? null), "entityOwnerLink", array(0 => ($context["web_catalog"] ?? null)), "method");
            // line 18
            echo "        <li>";
            echo twig_escape_filter($this->env, ($context["ownerLink"] ?? null), "html", null, true);
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("additional_owner_info", $context)) ? (_twig_default_filter(($context["additional_owner_info"] ?? null), "additional_owner_info")) : ("additional_owner_info")), array("entity" => ($context["web_catalog"] ?? null)));
            echo "</li>
    ";
        }
    }

    // line 22
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if ($this->getAttribute(($context["web_catalog"] ?? null), "id", array())) {
            // line 24
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 25
($context["web_catalog"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_web_catalog_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_web_catalog_view", array("id" => $this->getAttribute(            // line 30
($context["web_catalog"] ?? null), "id", array()))), "indexLabel" => $this->getAttribute(            // line 31
($context["web_catalog"] ?? null), "name", array()))), "entityTitle" => (($this->getAttribute($this->getAttribute(            // line 34
($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 36
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        }
    }

    // line 40
    public function block_navButtons($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["entity"] ?? null), "parentNode", array()))) {
            // line 44
            echo "        ";
            $context["cancelPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_web_catalog_index", array("id" => $this->getAttribute(($context["web_catalog"] ?? null), "id", array())));
            // line 45
            echo "    ";
        } else {
            // line 46
            echo "        ";
            $context["cancelPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_content_node_update", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parentNode", array()), "id", array())));
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "id", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_web_catalog_update"))) {
            // line 50
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_content_node_create", array("id" => $this->getAttribute(            // line 51
($context["entity"] ?? null), "id", array()))), "iCss" => "fa-book", "aCss" => "btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.contentnode.entity_label"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.contentnode.entity_label"))))), "method"), "html", null, true);
            // line 56
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => ($context["cancelPath"] ?? null)), "method"), "html", null, true);
        echo "
    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["id"] = "web-catalog-tree-edit";
        // line 65
        echo "
    ";
        // line 66
        $context["formRows"] = array(0 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titles", array()), 'row'), 1 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rewriteVariantTitle", array()), 'row'));
        // line 70
        echo "
    ";
        // line 71
        if (twig_test_empty($this->getAttribute(($context["entity"] ?? null), "parentNode", array()))) {
            // line 72
            echo "        ";
            ob_start();
            // line 73
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'widget');
            echo "
        ";
            $context["scopes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo "    ";
        } else {
            // line 76
            echo "        ";
            ob_start();
            // line 77
            echo "        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroscope/js/app/views/scope-toggle-view", "selectors" => array("useParentScopeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 81
($context["form"] ?? null), "parentScopeUsed", array()), "vars", array()), "id", array())), "scopesSelector" => ".scope-elements"))), "html", null, true);
            // line 84
            echo "\"
             data-layout=\"separate\"
        >
            ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "parentScopeUsed", array()), 'row');
            echo "
            <div class=\"scope-elements\">
                ";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'widget');
            echo "
            </div>
        </div>
        ";
            $context["scopes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 93
            echo "    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if ($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array(), "any", true, true)) {
            // line 96
            echo "        ";
            $context["formRows"] = twig_array_merge(($context["formRows"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row')));
            // line 97
            echo "    ";
        }
        // line 98
        echo "
    ";
        // line 99
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 105
($context["formRows"] ?? null)))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.sections.use_for"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 112
($context["scopes"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.contentvariant.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 119
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contentVariants", array()), 'widget'))))));
        // line 123
        echo "
    ";
        // line 124
        $context["data"] = array("formErrors" =>         // line 125
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 126
($context["dataBlocks"] ?? null));
        // line 128
        echo "
    ";
        // line 129
        $context["twoColumnContent"] = $this->renderParentBlock("content_data", $context, $blocks);
        // line 130
        echo "
    ";
        // line 131
        $context["nodeId"] = null;
        // line 132
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 133
            echo "        ";
            $context["nodeId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
            // line 134
            echo "    ";
        } elseif ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "parentNode", array()))) {
            // line 135
            echo "        ";
            $context["nodeId"] = $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parentNode", array()), "id", array());
            // line 136
            echo "    ";
        }
        // line 137
        echo "
    ";
        // line 138
        $context["treeOptions"] = array("key" => "web-catalog", "data" => $this->env->getExtension('Oro\Bundle\WebCatalogBundle\Twig\WebCatalogExtension')->getNodesTree(        // line 140
($context["web_catalog"] ?? null)), "updateAllowed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_web_catalog_update"), "onRootSelectRoute" => "oro_content_node_update", "onSelectRoute" => "oro_content_node_update", "onMoveRoute" => "oro_content_node_move", "nodeId" =>         // line 145
($context["nodeId"] ?? null), "view" => "orowebcatalog/js/app/views/web-catalog-tree-view");
        // line 148
        echo "
    ";
        // line 149
        $this->loadTemplate("OroWebCatalogBundle:ContentNode:update.html.twig", "OroWebCatalogBundle:ContentNode:update.html.twig", 149, "1621196268")->display($context);
    }

    public function getTemplateName()
    {
        return "OroWebCatalogBundle:ContentNode:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 149,  254 => 148,  252 => 145,  251 => 140,  250 => 138,  247 => 137,  244 => 136,  241 => 135,  238 => 134,  235 => 133,  232 => 132,  230 => 131,  227 => 130,  225 => 129,  222 => 128,  220 => 126,  219 => 125,  218 => 124,  215 => 123,  213 => 119,  212 => 112,  211 => 105,  210 => 99,  207 => 98,  204 => 97,  201 => 96,  199 => 95,  196 => 94,  193 => 93,  186 => 89,  181 => 87,  176 => 84,  174 => 81,  173 => 78,  170 => 77,  167 => 76,  164 => 75,  158 => 73,  155 => 72,  153 => 71,  150 => 70,  148 => 68,  147 => 67,  146 => 66,  143 => 65,  140 => 64,  137 => 63,  131 => 60,  127 => 59,  124 => 58,  120 => 56,  118 => 51,  116 => 50,  114 => 49,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  99 => 44,  97 => 43,  91 => 41,  88 => 40,  80 => 36,  78 => 34,  77 => 31,  76 => 30,  75 => 25,  73 => 24,  70 => 23,  67 => 22,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 1,  43 => 13,  39 => 10,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWebCatalogBundle:ContentNode:update.html.twig", "");
    }
}


/* OroWebCatalogBundle:ContentNode:update.html.twig */
class __TwigTemplate_5db99fb7392e7d93e618c9e3b2495fe8da240c02353310220a1976c307a8b1cc_1621196268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroWebCatalogBundle:ContentNode:update.html.twig", 149);
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

    // line 150
    public function block_sidebar($context, array $blocks = array())
    {
        // line 151
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.contentnode.entity_plural_label"), "treeOptions" =>         // line 154
($context["treeOptions"] ?? null)), 1 => array("move" => array("routeName" => "oro_web_catalog_move", "routeParams" => array("id" => $this->getAttribute(        // line 159
($context["web_catalog"] ?? null), "id", array()))))), "method"), "html", null, true);
        // line 162
        echo "
        ";
    }

    // line 165
    public function block_content($context, array $blocks = array())
    {
        // line 166
        echo "            ";
        // line 167
        echo "                ";
        echo ($context["twoColumnContent"] ?? null);
        echo "
            ";
        // line 169
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroWebCatalogBundle:ContentNode:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 169,  333 => 167,  331 => 166,  328 => 165,  323 => 162,  321 => 159,  320 => 154,  318 => 151,  315 => 150,  257 => 149,  254 => 148,  252 => 145,  251 => 140,  250 => 138,  247 => 137,  244 => 136,  241 => 135,  238 => 134,  235 => 133,  232 => 132,  230 => 131,  227 => 130,  225 => 129,  222 => 128,  220 => 126,  219 => 125,  218 => 124,  215 => 123,  213 => 119,  212 => 112,  211 => 105,  210 => 99,  207 => 98,  204 => 97,  201 => 96,  199 => 95,  196 => 94,  193 => 93,  186 => 89,  181 => 87,  176 => 84,  174 => 81,  173 => 78,  170 => 77,  167 => 76,  164 => 75,  158 => 73,  155 => 72,  153 => 71,  150 => 70,  148 => 68,  147 => 67,  146 => 66,  143 => 65,  140 => 64,  137 => 63,  131 => 60,  127 => 59,  124 => 58,  120 => 56,  118 => 51,  116 => 50,  114 => 49,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  99 => 44,  97 => 43,  91 => 41,  88 => 40,  80 => 36,  78 => 34,  77 => 31,  76 => 30,  75 => 25,  73 => 24,  70 => 23,  67 => 22,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 1,  43 => 13,  39 => 10,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWebCatalogBundle:ContentNode:update.html.twig", "");
    }
}
