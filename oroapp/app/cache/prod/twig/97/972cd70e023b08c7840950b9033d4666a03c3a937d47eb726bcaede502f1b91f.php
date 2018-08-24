<?php

/* OroSalesBundle:Opportunity:update.html.twig */
class __TwigTemplate_92046515266fbbd2dda879af40d7cf244ffdba7583ee8160649a215cd6cdd62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSalesBundle:Opportunity:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["name"] = "N/A";
        // line 3
        if ($this->getAttribute(($context["entity"] ?? null), "name", array())) {
            // line 4
            $context["name"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "name")) ? ((($this->getAttribute(            // line 5
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.name.label")))));
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%opportunity.name%" =>         // line 9
($context["name"] ?? null))));
        // line 11
        $context["pageComponent"] = array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosales/js/app/views/update-page-view"), "layout" => "separate");
        // line 17
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_head_script($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 29
    public function block_navButtons($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_opportunity", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 32
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-oppotunity", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 36
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label"))), "method"), "html", null, true);
            // line 38
            echo "
        ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_index")), "method"), "html", null, true);
        echo "
    ";
        // line 42
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sales_opportunity_view", "params" => array("id" => "\$id"))), "method");
        // line 46
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_opportunity_create")) {
            // line 47
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_sales_opportunity_create")), "method"));
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_opportunity_update"))) {
            // line 52
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_sales_opportunity_update", "params" => array("id" => "\$id"))), "method"));
            // line 56
            echo "    ";
        }
        // line 57
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 60
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 62
            echo "        ";
            $context["name"] = "N/A";
            // line 63
            echo "        ";
            if ($this->getAttribute(($context["entity"] ?? null), "name", array())) {
                // line 64
                echo "            ";
                $context["name"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "name")) ? ((($this->getAttribute(                // line 65
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->getAttribute(                // line 66
($context["UI"] ?? null), "renderDisabledLabel", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.name.label")))), "method")));
                // line 68
                echo "        ";
            }
            // line 69
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 70
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_plural_label"), "entityTitle" =>             // line 73
($context["name"] ?? null));
            // line 75
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 77
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label")));
            // line 78
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSalesBundle:Opportunity:update.html.twig", 78)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 79
            echo "    ";
        }
    }

    // line 82
    public function block_stats($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "createdAt")) {
            // line 84
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
            echo "</li>
    ";
        }
        // line 86
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "updatedAt")) {
            // line 87
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
            echo "</li>
    ";
        }
    }

    // line 91
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 92
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    ";
        // line 93
        if ($this->getAttribute(($context["entity"] ?? null), "status", array())) {
            // line 94
            echo "        <div class=\"pull-left\">
            ";
            // line 95
            if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "id", array()) != "lost")) {
                // line 96
                echo "                <div class=\"badge badge-enabled status-enabled\">
                    <i class=\"icon-status-enabled fa-circle\"></i>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 99
                echo "                <div class=\"badge badge-disabled status-disabled\">
                    <i class=\"icon-status-disabled fa-circle\"></i>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 102
            echo "        </div>
    ";
        }
        // line 104
        echo "
";
    }

    // line 107
    public function block_content_data($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $context["id"] = "opportunity-profile";
        // line 109
        echo "
    ";
        // line 110
        $context["formFields"] = array();
        // line 111
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 112
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row', array("attr" => array("class" => "control-group-justified")))));
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("autofocus" => true))), 1 =>         // line 117
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAssociation", array()), 'row'), 2 =>         // line 118
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row'), 3 =>         // line 119
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 4 =>         // line 120
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "probability", array()), 'row'), 5 =>         // line 121
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "budgetAmount", array()), 'row'), 6 =>         // line 122
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeDate", array()), 'row'), 7 =>         // line 123
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeRevenue", array()), 'row'), 8 =>         // line 124
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeReason", array()), 'row')));
        // line 126
        echo "
    ";
        // line 127
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunity Information"), "data" =>         // line 133
($context["formFields"] ?? null)), 1 => array("data" => array(0 =>         // line 138
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerNeed", array()), 'row', array("attr" => array("class" => "expanded-text-field"))), 1 =>         // line 139
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proposedSolution", array()), 'row', array("attr" => array("class" => "expanded-text-field"))), 2 =>         // line 140
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row', array("attr" => array("class" => "expanded-text-field"))))))));
        // line 145
        echo "
    ";
        // line 146
        $context["additionalData"] = array();
        // line 147
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 148
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 149
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 151
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 156
($context["additionalData"] ?? null))))));
            // line 159
            echo "    ";
        }
        // line 160
        echo "
    ";
        // line 161
        $context["data"] = array("formErrors" => ((        // line 162
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 163
($context["dataBlocks"] ?? null));
        // line 165
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 165,  311 => 163,  310 => 162,  309 => 161,  306 => 160,  303 => 159,  301 => 156,  299 => 151,  296 => 150,  289 => 149,  286 => 148,  280 => 147,  278 => 146,  275 => 145,  273 => 140,  272 => 139,  271 => 138,  270 => 133,  269 => 127,  266 => 126,  264 => 124,  263 => 123,  262 => 122,  261 => 121,  260 => 120,  259 => 119,  258 => 118,  257 => 117,  256 => 116,  255 => 115,  252 => 114,  249 => 113,  246 => 112,  243 => 111,  241 => 110,  238 => 109,  235 => 108,  232 => 107,  227 => 104,  223 => 102,  218 => 100,  215 => 99,  210 => 97,  207 => 96,  205 => 95,  202 => 94,  200 => 93,  195 => 92,  192 => 91,  182 => 87,  179 => 86,  171 => 84,  168 => 83,  165 => 82,  160 => 79,  157 => 78,  154 => 77,  148 => 75,  146 => 73,  145 => 70,  143 => 69,  140 => 68,  138 => 66,  137 => 65,  135 => 64,  132 => 63,  129 => 62,  126 => 61,  123 => 60,  116 => 57,  113 => 56,  110 => 52,  107 => 51,  104 => 50,  101 => 47,  98 => 46,  96 => 42,  91 => 41,  86 => 39,  83 => 38,  81 => 36,  80 => 32,  78 => 31,  75 => 30,  72 => 29,  65 => 25,  59 => 24,  54 => 23,  51 => 22,  47 => 1,  45 => 18,  44 => 17,  42 => 11,  40 => 9,  36 => 5,  35 => 4,  33 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity:update.html.twig", "");
    }
}
