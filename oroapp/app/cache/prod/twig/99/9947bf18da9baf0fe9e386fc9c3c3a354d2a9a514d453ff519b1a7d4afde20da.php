<?php

/* OroSalesBundle:Lead:convertToOpportunity.html.twig */
class __TwigTemplate_dd99c47e43ea5a1971e529e1e26185f58b921b6e5d6de0424e13dc93984820d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSalesBundle:Lead:convertToOpportunity.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $context["name"] = (($this->getAttribute(($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%lead.name%" =>         // line 3
($context["name"] ?? null))));
        // line 5
        $context["pageComponent"] = array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosales/js/app/views/opportunity-status-select-view"), "layout" => "separate");
        // line 11
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_convert_to_opportunity", array("id" => $this->getAttribute($this->getAttribute(        // line 12
($context["entity"] ?? null), "lead", array()), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_head_script($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 22
    public function block_navButtons($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "id", array())))), "method"), "html", null, true);
        echo "
    ";
        // line 24
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sales_lead_view", "params" => array("id" => $this->getAttribute($this->getAttribute(        // line 26
($context["entity"] ?? null), "lead", array()), "id", array())))), "method");
        // line 28
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_lead_convert_to_opportunity")) {
            // line 29
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sales_opportunity_view", "params" => array("id" => "\$id"))), "method");
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 37
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.convert_entity", array("%name%" =>         // line 39
($context["name"] ?? null), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label")));
        // line 42
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSalesBundle:Lead:convertToOpportunity.html.twig", 42)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
    }

    // line 45
    public function block_content_data($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["id"] = "opportunity-profile";
        // line 47
        echo "
    ";
        // line 48
        $context["formFields"] = array();
        // line 49
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 50
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')));
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    ";
        // line 53
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("autofocus" => true))), 1 =>         // line 55
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAssociation", array()), 'row')));
        // line 57
        echo "
    ";
        // line 58
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "use_full_contact_form", array())) {
            // line 59
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row')));
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 63
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 1 =>         // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "probability", array()), 'row'), 2 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "budgetAmount", array()), 'row'), 3 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeDate", array()), 'row'), 4 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeRevenue", array()), 'row'), 5 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeReason", array()), 'row')));
        // line 70
        echo "
    ";
        // line 71
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunity Information"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "data" =>         // line 77
($context["formFields"] ?? null)), 1 => array("data" => array(0 =>         // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerNeed", array()), 'row', array("attr" => array("class" => "expanded-text-field"))), 1 =>         // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proposedSolution", array()), 'row', array("attr" => array("class" => "expanded-text-field"))), 2 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row', array("attr" => array("class" => "expanded-text-field"))))))));
        // line 89
        echo "
    ";
        // line 90
        $context["additionalData"] = array();
        // line 91
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 92
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 93
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 95
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 100
($context["additionalData"] ?? null))))));
            // line 103
            echo "    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "use_full_contact_form", array())) {
            // line 106
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Contact Information"), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "data" => array(0 =>             // line 111
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "owner", array()), 'row'), 1 =>             // line 112
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "namePrefix", array()), 'row'), 2 =>             // line 113
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "firstName", array()), 'row'), 3 =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "middleName", array()), 'row'), 4 =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "lastName", array()), 'row'), 5 =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "nameSuffix", array()), 'row'), 6 =>             // line 117
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "jobTitle", array()), 'row'), 7 =>             // line 118
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "description", array()), 'row'), 8 =>             // line 119
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "birthday", array()), 'row'), 9 =>             // line 120
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "gender", array()), 'row'), 10 =>             // line 121
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "picture", array()), 'row'), 11 =>             // line 122
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "assignedTo", array()), 'row'), 12 =>             // line 123
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "reportsTo", array()), 'row'), 13 =>             // line 124
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "source", array()), 'row'), 14 =>             // line 125
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "method", array()), 'row'))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Details"), "data" => array(0 =>             // line 131
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "emails", array()), 'row'), 1 =>             // line 132
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "phones", array()), 'row'), 2 =>             // line 133
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "fax", array()), 'row'), 3 =>             // line 134
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "skype", array()), 'row'), 4 =>             // line 135
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "twitter", array()), 'row'), 5 =>             // line 136
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "facebook", array()), 'row'), 6 =>             // line 137
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "googlePlus", array()), 'row'), 7 =>             // line 138
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "linkedIn", array()), 'row'))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.addresses.label"), "data" => array(0 =>             // line 143
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "contact", array()), "addresses", array()), 'widget')))))));
            // line 147
            echo "    ";
        }
        // line 148
        echo "
    ";
        // line 149
        $context["data"] = array("formErrors" => ((        // line 150
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 151
($context["dataBlocks"] ?? null));
        // line 153
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Lead:convertToOpportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 153,  232 => 151,  231 => 150,  230 => 149,  227 => 148,  224 => 147,  222 => 143,  221 => 138,  220 => 137,  219 => 136,  218 => 135,  217 => 134,  216 => 133,  215 => 132,  214 => 131,  213 => 125,  212 => 124,  211 => 123,  210 => 122,  209 => 121,  208 => 120,  207 => 119,  206 => 118,  205 => 117,  204 => 116,  203 => 115,  202 => 114,  201 => 113,  200 => 112,  199 => 111,  197 => 106,  195 => 105,  192 => 104,  189 => 103,  187 => 100,  185 => 95,  182 => 94,  175 => 93,  172 => 92,  166 => 91,  164 => 90,  161 => 89,  159 => 84,  158 => 83,  157 => 82,  156 => 77,  155 => 71,  152 => 70,  150 => 68,  149 => 67,  148 => 66,  147 => 65,  146 => 64,  145 => 63,  144 => 62,  141 => 61,  138 => 60,  135 => 59,  133 => 58,  130 => 57,  128 => 55,  127 => 54,  126 => 53,  123 => 52,  120 => 51,  117 => 50,  114 => 49,  112 => 48,  109 => 47,  106 => 46,  103 => 45,  98 => 42,  96 => 39,  94 => 38,  91 => 37,  84 => 34,  81 => 33,  78 => 29,  75 => 28,  73 => 26,  72 => 24,  67 => 23,  64 => 22,  57 => 18,  51 => 17,  46 => 16,  43 => 15,  39 => 1,  37 => 12,  36 => 11,  34 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Lead:convertToOpportunity.html.twig", "");
    }
}
