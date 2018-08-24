<?php

/* OroCustomerBundle:CustomerUser:update.html.twig */
class __TwigTemplate_5e5d18f52b48284d4cc61431551f0b322917ec10aaea628d07a260cf87fa55a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCustomerBundle:CustomerUser:update.html.twig", 1);
        $this->blocks = array(
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%email%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "email", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_label"))));
        // line 10
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_index")), "method"), "html", null, true);
        echo "
    ";
        // line 16
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_user_update"))) {
            // line 18
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 25
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 26
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 29
($context["entity"] ?? null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "email", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 31
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_label")));
            // line 34
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCustomerBundle:CustomerUser:update.html.twig", 34)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 35
            echo "    ";
        }
    }

    // line 38
    public function block_stats($context, array $blocks = array())
    {
        // line 39
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.last_login.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 45
    public function block_content_data($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["id"] = "customer-user-edit";
        // line 47
        echo "    ";
        $context["roleWidgetAlias"] = "oro_customer_customer_user_role";
        // line 48
        echo "
    ";
        // line 49
        $context["customerFormOptions"] = array("customerUserId" => (($this->getAttribute(        // line 50
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), null)) : (null)), "customerFormId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 51
($context["form"] ?? null), "customer", array()), "vars", array()), "id", array())), "widgetAlias" =>         // line 52
($context["roleWidgetAlias"] ?? null));
        // line 54
        echo "
    ";
        // line 55
        ob_start();
        // line 56
        echo "        <div data-page-component-module=\"orocustomer/js/app/components/customer-user-component\"
             data-page-component-options=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["customerFormOptions"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
        </div>
    ";
        $context["customerForm"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
    ";
        // line 62
        $context["formRows"] = array(0 =>         // line 63
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row'), 1 =>         // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row'), 2 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 3 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row'), 4 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 5 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row'), 6 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row'), 7 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row'), 8 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), 'widget', array("attr" => array("class" => "password"))), 9 =>         // line 72
($context["customerForm"] ?? null), 10 =>         // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "salesRepresentatives", array()), 'row'), 11 =>         // line 74
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "isGuest", array()), 'row'));
        // line 76
        echo "
    ";
        // line 77
        if ($this->getAttribute(($context["form"] ?? null), "passwordGenerate", array(), "any", true, true)) {
            // line 78
            echo "        ";
            $context["formRows"] = twig_array_merge(($context["formRows"] ?? null), array(0 =>             // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "passwordGenerate", array()), 'row', array("attr" => array("class" => "password-trigger")))));
            // line 81
            echo "        <span data-page-component-module=\"orouser/js/components/password-generate\"
              data-page-component-options=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("checkbox" => "[data-name=\"field__password-generate\"]", "passwordInput" => "[data-name=\"field__first\"]")), "html", null, true);
            echo "\"></span>
    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if ($this->getAttribute(($context["form"] ?? null), "sendEmail", array(), "any", true, true)) {
            // line 86
            echo "        ";
            $context["formRows"] = twig_array_merge(($context["formRows"] ?? null), array(0 =>             // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sendEmail", array()), 'row')));
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        $context["subblocks"] = array(0 => array("title" => "", "data" =>         // line 93
($context["formRows"] ?? null)));
        // line 95
        echo "
    ";
        // line 96
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_user_address_update")) {
            // line 97
            echo "        ";
            $context["subblocks"] = twig_array_merge(($context["subblocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.addresses"), "data" => array(0 =>             // line 100
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addresses", array()), 'widget')))));
            // line 103
            echo "    ";
        }
        // line 104
        echo "
    ";
        // line 105
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" =>         // line 108
($context["subblocks"] ?? null)));
        // line 111
        echo "
    ";
        // line 112
        $context["additionalData"] = array();
        // line 113
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 114
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 115
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 117
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 122
($context["additionalData"] ?? null))))));
            // line 125
            echo "    ";
        }
        // line 126
        echo "
    ";
        // line 128
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["form"] ?? null), "roles", array()), "setRendered", array());
        // line 129
        echo "
    ";
        // line 130
        $context["hasRoles"] = $this->getAttribute(($context["form"] ?? null), "roles", array(), "any", true, true);
        // line 131
        echo "    ";
        if (($context["hasRoles"] ?? null)) {
            // line 132
            echo "        ";
            ob_start();
            // line 133
            echo "            ";
            $context["widgetOptions"] = array();
            // line 134
            echo "            ";
            $context["widgetUrl"] = "oro_customer_customer_user_roles";
            // line 135
            echo "            ";
            if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
                // line 136
                echo "                ";
                $context["widgetOptions"] = twig_array_merge(($context["widgetOptions"] ?? null), array("customerUserId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
                // line 137
                echo "            ";
            }
            // line 138
            echo "            ";
            if (($this->getAttribute(($context["entity"] ?? null), "customer", array()) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array()))) {
                // line 139
                echo "                ";
                $context["widgetOptions"] = twig_array_merge(($context["widgetOptions"] ?? null), array("customerId" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array())));
                // line 140
                echo "            ";
            }
            // line 141
            echo "
            ";
            // line 142
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "roles", array()), "vars", array()), "errors", array()))) {
                // line 143
                echo "                ";
                $context["widgetOptions"] = twig_array_merge(($context["widgetOptions"] ?? null), array("error" => $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "roles", array()), "vars", array()), "errors", array())), "message", array())));
                // line 144
                echo "            ";
            }
            // line 145
            echo "
            ";
            // line 146
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(            // line 148
($context["widgetUrl"] ?? null), ($context["widgetOptions"] ?? null)), "alias" =>             // line 149
($context["roleWidgetAlias"] ?? null)));
            // line 150
            echo "
        ";
            $context["userRoles"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 152
            echo "
        ";
            // line 153
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.roles.label");
            // line 154
            echo "
        ";
            // line 155
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" =>             // line 156
($context["title"] ?? null), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 160
($context["userRoles"] ?? null)))))));
            // line 164
            echo "    ";
        }
        // line 165
        echo "
    ";
        // line 166
        $context["data"] = array("formErrors" =>         // line 167
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 168
($context["dataBlocks"] ?? null));
        // line 170
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 172
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 172,  347 => 170,  345 => 168,  344 => 167,  343 => 166,  340 => 165,  337 => 164,  335 => 160,  334 => 156,  333 => 155,  330 => 154,  328 => 153,  325 => 152,  321 => 150,  319 => 149,  318 => 148,  317 => 146,  314 => 145,  311 => 144,  308 => 143,  306 => 142,  303 => 141,  300 => 140,  297 => 139,  294 => 138,  291 => 137,  288 => 136,  285 => 135,  282 => 134,  279 => 133,  276 => 132,  273 => 131,  271 => 130,  268 => 129,  265 => 128,  262 => 126,  259 => 125,  257 => 122,  255 => 117,  252 => 116,  245 => 115,  242 => 114,  236 => 113,  234 => 112,  231 => 111,  229 => 108,  228 => 105,  225 => 104,  222 => 103,  220 => 100,  218 => 97,  216 => 96,  213 => 95,  211 => 93,  210 => 91,  207 => 90,  204 => 89,  202 => 87,  200 => 86,  198 => 85,  195 => 84,  190 => 82,  187 => 81,  185 => 79,  183 => 78,  181 => 77,  178 => 76,  176 => 74,  175 => 73,  174 => 72,  173 => 71,  172 => 70,  171 => 69,  170 => 68,  169 => 67,  168 => 66,  167 => 65,  166 => 64,  165 => 63,  164 => 62,  161 => 61,  155 => 58,  151 => 57,  148 => 56,  146 => 55,  143 => 54,  141 => 52,  140 => 51,  139 => 50,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  126 => 45,  118 => 42,  112 => 41,  106 => 40,  99 => 39,  96 => 38,  91 => 35,  88 => 34,  85 => 33,  79 => 31,  77 => 29,  76 => 26,  74 => 25,  71 => 24,  68 => 23,  61 => 20,  58 => 19,  55 => 18,  52 => 17,  50 => 16,  46 => 15,  40 => 13,  37 => 12,  33 => 1,  31 => 10,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser:update.html.twig", "");
    }
}
