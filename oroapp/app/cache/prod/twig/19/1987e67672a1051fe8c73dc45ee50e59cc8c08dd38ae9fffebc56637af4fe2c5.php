<?php

/* OroCustomerBundle:CustomerUserRole:update.html.twig */
class __TwigTemplate_1672639131b30d6d3c73b826964f35fa61734094dbe3bc0721979fb3dd33162b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCustomerBundle:CustomerUserRole:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerBundle:CustomerUserRole:update.html.twig", 2);
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");
        // line 6
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_role_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_role_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => (($this->getAttribute(        // line 8
($context["entity"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["fields"] = array();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["child"]) {
            // line 13
            echo "        ";
            if (!twig_in_filter($context["name"], array(0 => "appendUsers", 1 => "removeUsers", 2 => "entity", 3 => "privileges", 4 => "action"))) {
                // line 14
                echo "            ";
                $context["fields"] = twig_array_merge(($context["fields"] ?? null), array($context["name"] => ("#" . $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()))));
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        $context["options"] = array("elSelector" => ".btn-success.role-submit", "formName" => $this->getAttribute($this->getAttribute(        // line 20
($context["form"] ?? null), "vars", array()), "name", array()), "formSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 21
($context["form"] ?? null), "vars", array()), "id", array())), "customerSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 22
($context["form"] ?? null), "customer", array()), "vars", array()), "id", array())), "privilegesSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 23
($context["form"] ?? null), "privileges", array()), "vars", array()), "id", array())), "appendUsersSelector" => "#roleAppendUsers", "removeUsersSelector" => "#roleRemoveUsers", "fields" =>         // line 26
($context["fields"] ?? null));
        // line 28
        echo "    <div data-page-component-module=\"orocustomer/js/app/views/customer-role-view\"
         data-page-component-options=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    </div>

    ";
        // line 32
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_role_index")), "method"), "html", null, true);
        echo "
    ";
        // line 35
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("class" => "btn-success role-submit", "route" => "oro_customer_customer_user_role_view", "params" => array("id" => "\$id"))), "method");
        // line 40
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_user_role_update"))) {
            // line 41
            echo "        ";
            // line 42
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("class" => "btn-success main-group role-submit", "route" => "oro_customer_customer_user_role_update", "params" => array("id" => "\$id"))), "method"));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 51
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 53
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 54
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_role_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 57
($context["entity"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 59
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 61
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.entity_label")));
            // line 62
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCustomerBundle:CustomerUserRole:update.html.twig", 62)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 63
            echo "    ";
        }
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["id"] = "customer-user-role-edit";
        // line 68
        echo "
    ";
        // line 69
        $context["customerSelectorComponentOptions"] = array("customerFieldId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 70
($context["form"] ?? null), "customer", array()), "vars", array()), "id", array())), "datagridName" => "customer-customer-users-grid-update", "enableConfirmation" => $this->getAttribute(        // line 72
($context["entity"] ?? null), "id", array()), "originalValue" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 73
($context["form"] ?? null), "customer", array()), "vars", array()), "value", array()));
        // line 75
        echo "
    ";
        // line 76
        ob_start();
        // line 77
        echo "        <div data-page-component-module=\"orocustomer/js/app/components/customer-user-role-component\"
             data-page-component-options=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["customerSelectorComponentOptions"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
        </div>
    ";
        $context["customerSelector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "
    ";
        // line 83
        $context["fields"] = array(0 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row'), 1 =>         // line 85
($context["customerSelector"] ?? null));
        // line 88
        echo "
    ";
        // line 89
        if ($this->getAttribute(($context["entity"] ?? null), "public", array())) {
            // line 90
            echo "        ";
            $context["fields"] = twig_array_merge(($context["fields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "selfManaged", array()), 'row')));
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" =>         // line 99
($context["fields"] ?? null)))));
        // line 104
        echo "
    ";
        // line 105
        ob_start();
        // line 106
        echo "        <div ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 108
($context["tabsOptions"] ?? null))), "method"), "html", null, true);
        // line 109
        echo "></div>
        ";
        // line 110
        echo $context["dataGrid"]->getrenderGrid("customer-user-role-permission-grid", array("role" => ($context["entity"] ?? null)), array("cssClass" => "inner-permissions-grid"));
        echo "
        <div ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 113
($context["capabilitySetOptions"] ?? null))), "method"), "html", null, true);
        // line 114
        echo "></div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 116
        echo "
    ";
        // line 117
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 118
($context["form"] ?? null), "vars", array()), "privilegeConfig", array()), "entity", array(), "array"), "label", array())), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 124
($context["rolePermissionsGrid"] ?? null)))))));
        // line 129
        echo "
    ";
        // line 130
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 136
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers")), 1 =>         // line 137
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers")), 2 =>         // line 138
$context["dataGrid"]->getrenderGrid("customer-customer-users-grid-update", array("role" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "customer" => (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array(), "any", false, true), "id", array()), null)) : (null))), array("cssClass" => "inner-grid"))))))));
        // line 142
        echo "
    ";
        // line 143
        $context["additionalData"] = array();
        // line 144
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 145
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 146
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 148
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 153
($context["additionalData"] ?? null))))));
            // line 156
            echo "    ";
        }
        // line 157
        echo "
    ";
        // line 158
        $context["data"] = array("formErrors" =>         // line 159
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 160
($context["dataBlocks"] ?? null));
        // line 162
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 164
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUserRole:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 164,  274 => 162,  272 => 160,  271 => 159,  270 => 158,  267 => 157,  264 => 156,  262 => 153,  260 => 148,  257 => 147,  250 => 146,  247 => 145,  241 => 144,  239 => 143,  236 => 142,  234 => 138,  233 => 137,  232 => 136,  231 => 130,  228 => 129,  226 => 124,  225 => 118,  224 => 117,  221 => 116,  217 => 114,  215 => 113,  214 => 111,  210 => 110,  207 => 109,  205 => 108,  203 => 106,  201 => 105,  198 => 104,  196 => 99,  195 => 93,  192 => 92,  189 => 91,  186 => 90,  184 => 89,  181 => 88,  179 => 85,  178 => 84,  177 => 83,  174 => 82,  168 => 79,  164 => 78,  161 => 77,  159 => 76,  156 => 75,  154 => 73,  153 => 72,  152 => 70,  151 => 69,  148 => 68,  145 => 67,  142 => 66,  137 => 63,  134 => 62,  131 => 61,  125 => 59,  123 => 57,  122 => 54,  120 => 53,  117 => 52,  114 => 51,  107 => 48,  104 => 47,  101 => 42,  99 => 41,  96 => 40,  94 => 35,  90 => 34,  85 => 32,  79 => 29,  76 => 28,  74 => 26,  73 => 23,  72 => 22,  71 => 21,  70 => 20,  69 => 18,  66 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  46 => 12,  43 => 11,  40 => 10,  36 => 1,  34 => 8,  31 => 6,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUserRole:update.html.twig", "");
    }
}
