<?php

/* OroCampaignBundle:Campaign/widget:view.html.twig */
class __TwigTemplate_2b045f131e9018e84ff297b6c23dda7f3a2ba5cdae407d5651d0443d3606b8e2 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCampaignBundle:Campaign/widget:view.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroCampaignBundle:Campaign/widget:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCampaignBundle:Campaign/widget:view.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        // line 9
        ob_start();
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "code", array()), "html", null, true);
        echo "
                ";
        // line 11
        if ( !twig_test_empty(($context["codes_history"] ?? null))) {
            echo " (";
            echo twig_escape_filter($this->env, twig_join_filter(($context["codes_history"] ?? null), ", "), "html", null, true);
            echo ") ";
            echo $context["ui"]->gettooltip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.code.tooltip"));
        }
        $context["codesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.code.label"), ($context["codesData"] ?? null));
        echo "
            ";
        // line 14
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.description.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "description", array())));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 18
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.budget.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "budget", array())));
        echo "
            ";
        // line 19
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.start_date.label"), ((twig_test_empty($this->getAttribute(($context["entity"] ?? null), "startDate", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")) : ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "startDate", array())))));
        echo "
            ";
        // line 20
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.end_date.label"), ((twig_test_empty($this->getAttribute(($context["entity"] ?? null), "endDate", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")) : ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "endDate", array())))));
        echo "
            ";
        // line 21
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.report_period.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.campaign.report_period." . $this->getAttribute(($context["entity"] ?? null), "reportPeriod", array()))));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 25
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:Campaign/widget:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  51 => 14,  47 => 13,  39 => 11,  35 => 10,  33 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:Campaign/widget:view.html.twig", "");
    }
}
