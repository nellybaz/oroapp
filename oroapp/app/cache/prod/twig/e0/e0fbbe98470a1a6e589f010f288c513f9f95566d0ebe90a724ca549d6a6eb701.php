<?php

/* OroSalesBundle:Form:fields.html.twig */
class __TwigTemplate_0fe6edcea8cec9f8af1740d5aedfa9d221fab260b9e8a1657d26455d93e389fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_sales_opportunity_widget' => array($this, 'block_oro_sales_opportunity_widget'),
            'oro_sales_lead_widget' => array($this, 'block_oro_sales_lead_widget'),
            'oro_sales_opportunity_status_enum_value_widget' => array($this, 'block_oro_sales_opportunity_status_enum_value_widget'),
            'oro_sales_lead_address_widget' => array($this, 'block_oro_sales_lead_address_widget'),
            'oro_sales_lead_address_rows' => array($this, 'block_oro_sales_lead_address_rows'),
            '_oro_sales_lead_form_address_collection_widget' => array($this, 'block__oro_sales_lead_form_address_collection_widget'),
            'oro_sales_customer_widget' => array($this, 'block_oro_sales_customer_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_sales_opportunity_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_sales_lead_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('oro_sales_opportunity_status_enum_value_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('oro_sales_lead_address_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('oro_sales_lead_address_rows', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('_oro_sales_lead_form_address_collection_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('oro_sales_customer_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_sales_opportunity_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row-fluid\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 5
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
            echo "
                ";
        }
        // line 8
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAssociation", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "probability", array()), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "budgetAmount", array()), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerNeed", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proposedSolution", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeReason", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeRevenue", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closeDate", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row');
        echo "

                ";
        // line 20
        $context["additionalData"] = array();
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 22
                echo "                    ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 23
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 25
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["additionalData"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        }
        // line 33
        echo "            </div>
        </fieldset>
    </div>
";
    }

    // line 38
    public function block_oro_sales_lead_widget($context, array $blocks = array())
    {
        // line 39
        echo "    <div class=\"row-fluid row-fluid-divider\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.details.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 45
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 46
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
            echo "
                ";
        }
        // line 48
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "jobTitle", array()), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phones", array()), 'row');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emails", array()), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAssociation", array()), 'row');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "companyName", array()), 'row');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", array()), 'row');
        echo "
                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "numberOfEmployees", array()), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "industry", array()), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "source", array()), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row');
        echo "

                ";
        // line 66
        $context["additionalData"] = array();
        // line 67
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 68
                echo "                    ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 69
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 71
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["additionalData"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 76
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                ";
        }
        // line 79
        echo "            </div>
            <div class=\"responsive-cell\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.addresses.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addresses", array()), 'widget');
        echo "
            </div>
        </fieldset>
    </div>
";
    }

    // line 90
    public function block_oro_sales_opportunity_status_enum_value_widget($context, array $blocks = array())
    {
        // line 91
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "probability", array()), 'widget', array("disabled" => (        // line 95
($context["disabled"] ?? null) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "probability", array()), "vars", array()), "disabled", array())), "attr" => array("class" => "add-on-input", "title" => "oro.sales.system_configuration.fields.opportunity_status_probabilities.probability.tooltip")));
        // line 100
        echo "
            <span class=\"add-on ui-sortable-handle";
        // line 101
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.priority.tooltip"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v ";
        // line 104
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </span>
            <label class=\"add-on";
        // line 107
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </label>
        </div>
        ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 116
    public function block_oro_sales_lead_address_widget($context, array $blocks = array())
    {
        // line 117
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 118
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 119
            $this->displayBlock("oro_sales_lead_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 122
            echo "        ";
            $this->displayBlock("oro_sales_lead_address_rows", $context, $blocks);
            echo "
    ";
        }
    }

    // line 126
    public function block_oro_sales_lead_address_rows($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'row');
        echo "
    ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'row', array("label" => "oro.sales.leadaddress.primary.label"));
        echo "
    ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row', array("label" => "oro.sales.leadaddress.label.label"));
        echo "
    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row', array("label" => "oro.sales.leadaddress.name_prefix.label"));
        echo "
    ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row', array("label" => "oro.sales.leadaddress.first_name.label"));
        echo "
    ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row', array("label" => "oro.sales.leadaddress.middle_name.label"));
        echo "
    ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row', array("label" => "oro.sales.leadaddress.last_name.label"));
        echo "
    ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row', array("label" => "oro.sales.leadaddress.name_suffix.label"));
        echo "
    ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organization", array()), 'row', array("label" => "oro.sales.leadaddress.organization.label"));
        echo "
    ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row', array("label" => "oro.sales.leadaddress.country.label"));
        echo "
    ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street", array()), 'row', array("label" => "oro.sales.leadaddress.street.label"));
        echo "
    ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street2", array()), 'row', array("label" => "oro.sales.leadaddress.street2.label"));
        echo "
    ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'row', array("label" => "oro.sales.leadaddress.city.label"));
        echo "
    ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region_text", array()), 'row', array("label" => "oro.sales.leadaddress.region_text.label"));
        echo "
    ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row', array("label" => "oro.sales.leadaddress.region.label"));
        echo "
    ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCode", array()), 'row', array("label" => "oro.sales.leadaddress.postal_code.label"));
        echo "
    ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 146
    public function block__oro_sales_lead_form_address_collection_widget($context, array $blocks = array())
    {
        // line 147
        echo "    ";
        $this->displayBlock("oro_address_collection_widget", $context, $blocks);
        echo "
    ";
        // line 148
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 149
        echo "    ";
        echo $this->getAttribute($this, "oro_adddress_collection_prefill_names", array(0 => $context), "method");
        echo "
";
    }

    // line 178
    public function block_oro_sales_customer_widget($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        if (( !($context["hasGridData"] ?? null) &&  !($context["createCustomersData"] ?? null))) {
            // line 180
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        } else {
            // line 182
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-el\"
             ";
            // line 183
            if (twig_length_filter($this->env, ($context["createCustomersData"] ?? null))) {
                echo "class=\"entity-create-or-select-container entity-create-multi-enabled\"";
            }
            // line 184
            echo "             data-page-component-module=\"orosales/js/app/components/customer-component\"
             data-page-component-options=\"";
            // line 185
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("inputSelector" => ("#" .             // line 186
($context["id"] ?? null)), "customerSelector" => ".dropdown-menu li")), "html", null, true);
            // line 188
            echo "\">
            <div class=\"input-append\">
                ";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                ";
            // line 191
            if (($context["hasGridData"] ?? null)) {
                // line 192
                echo "                    ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:Form:fields.html.twig", 192);
                // line 193
                echo "                    ";
                echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_customer_grid_dialog", array("entityClass" =>                 // line 196
($context["parentClass"] ?? null))), "aCss" => "add-on btn entity-select-btn", "iCss" => "fa-bars", "dataAttributes" => array("purpose" => "open-dialog-widget"), "widget" => array("type" => "dialog", "multiple" => true, "options" => array("alias" => "customer-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 207
($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600)))));
                // line 218
                echo "
                ";
            }
            // line 220
            echo "                ";
            if (twig_length_filter($this->env, ($context["createCustomersData"] ?? null))) {
                // line 221
                echo "                    <div class=\"dropdown btn-group entity-create-dropdown\">
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle btn entity-create-btn\">
                            <i class=\"fa-plus\"></i>
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            ";
                // line 227
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["createCustomersData"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                    // line 228
                    echo "                                <li>
                                    <button type=\"button\" data-customer=\"";
                    // line 229
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($context["customer"]), "html", null, true);
                    echo "\">
                                        <i class=\"";
                    // line 230
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                        ";
                    // line 231
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["customer"], "label", array())), "html", null, true);
                    echo "
                                    </button>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                echo "                        </ul>
                    </div>
                ";
            }
            // line 238
            echo "            </div>
        </div>
    ";
        }
    }

    // line 152
    public function getoro_adddress_collection_prefill_names($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 153
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array(), "any", false, true), "parent", array(), "any", true, true)) {
                // line 154
                echo "        ";
                $context["parentId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "parent", array()), "vars", array()), "id", array());
                // line 155
                echo "        ";
                $context["parentName"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "parent", array()), "vars", array()), "full_name", array());
                // line 156
                echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "id", array()), "html", null, true);
                echo "');
                    var parentContainer = \$('#";
                // line 161
                echo twig_escape_filter($this->env, ($context["parentId"] ?? null), "html", null, true);
                echo "');
                    var nameFields = ['firstName', 'lastName', 'namePrefix', 'middleName', 'nameSuffix'];
                    container.on('content:changed', function() {
                        nameFields.forEach(function (field, index) {
                            container.find('[name\$=\"[' + field +']\"]').each(function (idx, el) {
                                if (!\$(el).val()) {
                                    \$(el).val(parentContainer.find('[name\$=\"";
                // line 167
                echo twig_escape_filter($this->env, ($context["parentName"] ?? null), "html", null, true);
                echo "[' + field +']\"]').val());
                                }
                            });
                        })
                    })
                });
            });
        </script>
    ";
            }
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
        return "OroSalesBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 167,  647 => 161,  643 => 160,  637 => 156,  634 => 155,  631 => 154,  628 => 153,  616 => 152,  609 => 238,  604 => 235,  594 => 231,  590 => 230,  586 => 229,  583 => 228,  579 => 227,  571 => 221,  568 => 220,  564 => 218,  562 => 207,  561 => 196,  559 => 193,  556 => 192,  554 => 191,  550 => 190,  546 => 188,  544 => 186,  543 => 185,  540 => 184,  536 => 183,  531 => 182,  525 => 180,  522 => 179,  519 => 178,  512 => 149,  510 => 148,  505 => 147,  502 => 146,  496 => 143,  492 => 142,  488 => 141,  484 => 140,  480 => 139,  476 => 138,  472 => 137,  468 => 136,  464 => 135,  460 => 134,  456 => 133,  452 => 132,  448 => 131,  444 => 130,  440 => 129,  436 => 128,  431 => 127,  428 => 126,  420 => 122,  414 => 119,  409 => 118,  406 => 117,  403 => 116,  397 => 113,  392 => 111,  386 => 108,  378 => 107,  373 => 105,  367 => 104,  363 => 103,  356 => 101,  353 => 100,  351 => 95,  350 => 94,  346 => 93,  338 => 91,  335 => 90,  326 => 84,  321 => 82,  316 => 79,  313 => 78,  304 => 76,  300 => 75,  294 => 72,  291 => 71,  288 => 70,  281 => 69,  278 => 68,  272 => 67,  270 => 66,  265 => 64,  261 => 63,  257 => 62,  253 => 61,  249 => 60,  245 => 59,  241 => 58,  237 => 57,  233 => 56,  229 => 55,  225 => 54,  221 => 53,  217 => 52,  213 => 51,  209 => 50,  205 => 49,  200 => 48,  194 => 46,  192 => 45,  187 => 43,  181 => 39,  178 => 38,  171 => 33,  168 => 32,  159 => 30,  155 => 29,  149 => 26,  146 => 25,  143 => 24,  136 => 23,  133 => 22,  127 => 21,  125 => 20,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  79 => 8,  73 => 6,  71 => 5,  66 => 2,  63 => 1,  59 => 178,  56 => 177,  53 => 151,  51 => 146,  48 => 145,  46 => 126,  43 => 125,  41 => 116,  38 => 115,  36 => 90,  33 => 89,  31 => 38,  28 => 37,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Form:fields.html.twig", "");
    }
}
