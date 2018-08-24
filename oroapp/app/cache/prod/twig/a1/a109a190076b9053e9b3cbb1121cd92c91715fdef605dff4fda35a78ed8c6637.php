<?php

/* OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitySectionItemInfo.html.twig */
class __TwigTemplate_0b9a90cb794c976bb5f0876c9f6dfe6e7b4d0750d87db39c3ab4cfd38f011623 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitySectionItemInfo.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content form-horizontal box-content box-split-content row-fluid\">
    ";
        // line 4
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities_summary", $context)) ? (_twig_default_filter(($context["view_content_data_marketing_activities_summary"] ?? null), "view_content_data_marketing_activities_summary")) : ("view_content_data_marketing_activities_summary")), array("campaignId" => ($context["campaignId"] ?? null), "entityClass" => ($context["entityClass"] ?? null), "entityId" => ($context["entityId"] ?? null)));
        // line 5
        echo "</div>
<div class=\"marketing-activities-section-data-grid\">
    <h5>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.entity_plural_label"), "html", null, true);
        echo "</h5>
    ";
        // line 8
        $context["scope"] = twig_replace_filter("marketing-activity-campaign-%campaign%", array("%campaign%" => ($context["campaignId"] ?? null)));
        // line 9
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("marketing-activity-section-data-grid",         // line 10
($context["scope"] ?? null)), array("id" =>         // line 11
($context["campaignId"] ?? null), "entityClass" => ($context["entityClass"] ?? null), "entityId" => ($context["entityId"] ?? null)));
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitySectionItemInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  40 => 11,  39 => 10,  37 => 9,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitySectionItemInfo.html.twig", "");
    }
}
