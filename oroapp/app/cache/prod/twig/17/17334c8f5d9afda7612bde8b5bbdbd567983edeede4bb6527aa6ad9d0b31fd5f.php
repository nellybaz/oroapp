<?php

/* OroUserBundle:Role:update.html.twig */
class __TwigTemplate_8d20e91ebf401ef2dd62735f0ea407b63029ef4fb3d18240d86dde1cbee66f52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:Role:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUserBundle:Role:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%role%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["form"] ?? null), "vars", array()), "value", array()), "label", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_label"))));
        // line 6
        $context["gridName"] = "role-users-grid";
        // line 7
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
    ";
        // line 11
        if ((($context["entityId"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_role", array("id" =>             // line 13
($context["entityId"] ?? null))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 16
($context["entityId"] ?? null), "id" => "btn-remove-role", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_label"), "disabled" =>  !            // line 19
($context["allow_delete"] ?? null))), "method"), "html", null, true);
            // line 21
            echo "
        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 24
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_index")), "method"), "html", null, true);
        echo "
    ";
        // line 25
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("class" => "btn-success role-submit", "route" => "oro_user_role_view", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method");
        // line 30
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_role_create")) {
            // line 31
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_user_role_create")), "method"));
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_role_update"))) {
            // line 36
            echo "        ";
            // line 37
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("class" => "btn-success main-group role-submit", "route" => "oro_user_role_update", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 44
        $context["fields"] = array();
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["child"]) {
            // line 46
            echo "        ";
            if (!twig_in_filter($context["name"], array(0 => "appendUsers", 1 => "removeUsers", 2 => "privileges"))) {
                // line 47
                echo "            ";
                $context["fields"] = twig_array_merge(($context["fields"] ?? null), array($context["name"] => ("#" . $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()))));
                // line 48
                echo "        ";
            }
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        $context["options"] = array("elSelector" => ".btn-success.role-submit", "formName" => $this->getAttribute($this->getAttribute(        // line 52
($context["form"] ?? null), "vars", array()), "name", array()), "formSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 53
($context["form"] ?? null), "vars", array()), "id", array())), "privilegesSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 54
($context["form"] ?? null), "privileges", array()), "vars", array()), "id", array())), "appendUsersSelector" => "#roleAppendUsers", "removeUsersSelector" => "#roleRemoveUsers", "fields" =>         // line 57
($context["fields"] ?? null));
        // line 59
        echo "    <div data-page-component-module=\"orouser/js/views/role-view\"
         data-page-component-options=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    </div>
";
    }

    // line 64
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 66
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 67
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 70
($context["form"] ?? null), "vars", array()), "value", array()), "label", array()));
            // line 73
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 75
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_label")));
            // line 76
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:Role:update.html.twig", 76)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 77
            echo "    ";
        }
    }

    // line 80
    public function block_content_data($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $context["id"] = "role-profile";
        // line 82
        echo "
    ";
        // line 83
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers")), 1 =>         // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers")), 2 =>         // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row'))))));
        // line 97
        echo "
    ";
        // line 98
        $context["additionalData"] = array();
        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 100
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 101
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 103
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 108
($context["additionalData"] ?? null))))));
            // line 112
            echo "    ";
        }
        // line 113
        echo "
    ";
        // line 114
        ob_start();
        // line 115
        echo "        <div ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 117
($context["tabsOptions"] ?? null))), "method"), "html", null, true);
        // line 118
        echo "></div>
        ";
        // line 119
        echo $context["dataGrid"]->getrenderGrid("role-permission-grid", array("role" => ($context["entity"] ?? null)), array("cssClass" => "inner-permissions-grid", "themeOptions" => array("readonly" => false)));
        echo "
        <div ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 122
($context["capabilitySetOptions"] ?? null))), "method"), "html", null, true);
        // line 123
        echo "></div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 125
        echo "
    ";
        // line 126
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(        // line 127
($context["privilegesConfig"] ?? null), "entity", array(), "array"), "label", array())), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 133
($context["rolePermissionsGrid"] ?? null)))))));
        // line 138
        echo "
    ";
        // line 139
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 145
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("role_id" => ($context["entityId"] ?? null)), array("cssClass" => "inner-grid"))))))));
        // line 149
        echo "
    ";
        // line 150
        $context["data"] = array("formErrors" => ((        // line 151
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 152
($context["dataBlocks"] ?? null));
        // line 154
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 154,  251 => 152,  250 => 151,  249 => 150,  246 => 149,  244 => 145,  243 => 139,  240 => 138,  238 => 133,  237 => 127,  236 => 126,  233 => 125,  229 => 123,  227 => 122,  226 => 120,  222 => 119,  219 => 118,  217 => 117,  215 => 115,  213 => 114,  210 => 113,  207 => 112,  205 => 108,  203 => 103,  200 => 102,  193 => 101,  190 => 100,  184 => 99,  182 => 98,  179 => 97,  177 => 92,  176 => 91,  175 => 90,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  160 => 77,  157 => 76,  154 => 75,  148 => 73,  146 => 70,  145 => 67,  143 => 66,  140 => 65,  137 => 64,  130 => 60,  127 => 59,  125 => 57,  124 => 54,  123 => 53,  122 => 52,  120 => 50,  114 => 49,  111 => 48,  108 => 47,  105 => 46,  100 => 45,  98 => 44,  93 => 43,  90 => 42,  87 => 37,  85 => 36,  82 => 35,  79 => 34,  76 => 31,  73 => 30,  71 => 25,  66 => 24,  61 => 22,  58 => 21,  56 => 19,  55 => 16,  54 => 13,  52 => 12,  50 => 11,  45 => 10,  42 => 9,  38 => 1,  36 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Role:update.html.twig", "");
    }
}
