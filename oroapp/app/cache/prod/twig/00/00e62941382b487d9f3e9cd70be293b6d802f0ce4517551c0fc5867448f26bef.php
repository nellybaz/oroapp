<?php

/* OroSalesBundle:Opportunity/widget:info.html.twig */
class __TwigTemplate_dfa8dfc2607db9734549bcf82b01033d5fefb018be85c9dbce5e8ddef3f5a6aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 2);
        // line 3
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 3);
        // line 4
        $context["currency"] = $this->loadTemplate("OroCurrencyBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 4);
        // line 5
        $context["sales"] = $this->loadTemplate("OroSalesBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 5);
        // line 6
        $context["Tag"] = $this->loadTemplate("OroTagBundle::macros.html.twig", "OroSalesBundle:Opportunity/widget:info.html.twig", 6);
        // line 7
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block border-right\">
            <div class=\"row-fluid\">
                <div class=\"responsive-block\">
                    ";
        // line 13
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()), ($context["entity"] ?? null), "name");
        echo "
                    ";
        // line 14
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.status.label"), $this->getAttribute(($context["entity"] ?? null), "status", array()), ($context["entity"] ?? null), "status");
        echo "

                    ";
        // line 16
        if ($this->getAttribute(($context["entity"] ?? null), "dataChannel", array(), "array", true, true)) {
            // line 17
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "channel")) {
                // line 18
                echo "                            ";
                echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.sales.lead.data_channel.label");
                echo "
                        ";
            }
            // line 20
            echo "                    ";
        }
        // line 21
        echo "
                    ";
        // line 22
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.probability.label"), ((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "probability", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(($context["entity"] ?? null), "probability", array()))) : ("")), ($context["entity"] ?? null), "probability");
        echo "
                    ";
        // line 23
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.budget_amount.label"), ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "budgetAmount", array()), "value", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "budgetAmount", array()), "value", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "budgetAmount", array()), "currency", array())))) : ("")), ($context["entity"] ?? null), "budgetAmount");
        echo "
                    ";
        // line 24
        echo $context["currency"]->getconvert_to_base_currency($this->getAttribute(($context["entity"] ?? null), "budgetAmount", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.budget_base_currency.label"), ($context["entity"] ?? null), "budgetAmount");
        echo "

                    ";
        // line 26
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
                    ";
        // line 27
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.close_date.label"), (($this->getAttribute(($context["entity"] ?? null), "closeDate", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "closeDate", array()))) : ("")), ($context["entity"] ?? null), "closeDate");
        echo "
                    ";
        // line 28
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.close_revenue.label"), ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "closeRevenue", array()), "value", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "closeRevenue", array()), "value", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "closeRevenue", array()), "currency", array())))) : ("")), ($context["entity"] ?? null), "closeRevenue");
        echo "
                    ";
        // line 29
        echo $context["currency"]->getconvert_to_base_currency($this->getAttribute(($context["entity"] ?? null), "closeRevenue", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.budget_base_currency.label"), ($context["entity"] ?? null), "closeRevenue");
        echo "
                    ";
        // line 30
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.close_reason.label"), $this->getAttribute(($context["entity"] ?? null), "closeReason", array()), ($context["entity"] ?? null), "closeReason");
        echo "
                    ";
        // line 31
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.entity_plural_label"), $context["Tag"]->getrenderView(($context["entity"] ?? null)));
        echo "
                </div>

                <div class=\"responsive-block\">
                    ";
        // line 35
        echo $context["sales"]->getrender_customer_info(($context["entity"] ?? null));
        echo "
                    ";
        // line 36
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.contact.label"),         // line 38
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "contact", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "contact", array())), "oro_contact_view"));
        // line 39
        echo "

                    ";
        // line 41
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.lead.label"),         // line 43
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "lead", array()), (($this->getAttribute(($context["entity"] ?? null), "lead", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "name", array())) : (null)), "oro_sales_lead_view"));
        // line 44
        echo "
                </div>
            </div>
        </div>
        <div class=\"responsive-block\">
            ";
        // line 49
        echo $context["ui"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.customer_need.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "customerNeed", array())), ($context["entity"] ?? null), "customerNeed");
        echo "
            ";
        // line 50
        echo $context["ui"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.proposed_solution.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "proposedSolution", array())), ($context["entity"] ?? null), "proposedSolution");
        echo "
            ";
        // line 51
        echo $context["ui"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.notes.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "notes", array())), ($context["entity"] ?? null), "notes");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  130 => 50,  126 => 49,  119 => 44,  117 => 43,  116 => 41,  112 => 39,  110 => 38,  109 => 36,  105 => 35,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  59 => 20,  53 => 18,  50 => 17,  48 => 16,  43 => 14,  39 => 13,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity/widget:info.html.twig", "");
    }
}
