<?php

/* OroReportBundle:Segment:aggregated_field_condition.html.twig */
class __TwigTemplate_50ef6ab13ad65832023480e699022d02092b1d503ec7a973db3c956560d73d3a extends Twig_Template
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
        $context["aggregatedFieldConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("filters" => (($this->getAttribute($this->getAttribute(        // line 2
($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array()), array())) : (array())), "hierarchy" => (($this->getAttribute($this->getAttribute(        // line 3
($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array()), array())) : (array())), "fieldChoice" => array("filterPreset" => $this->getAttribute(        // line 5
($context["params"] ?? null), "field_choice_filter_preset", array()), "select2" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => (($this->getAttribute(        // line 8
($context["params"] ?? null), "column_chain_template_selector", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "column_chain_template_selector", array()), null)) : (null))))), (($this->getAttribute(        // line 11
($context["params"] ?? null), "aggregatedFieldConditionOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "aggregatedFieldConditionOptions", array()), array())) : (array())));
        // line 12
        echo "
<li class=\"option\" data-criteria=\"aggregated-condition-item\"
    data-module=\"oroquerydesigner/js/app/views/aggregated-field-condition-view\"
    data-options=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["aggregatedFieldConditionOptions"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.aggregated_field_condition"), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "OroReportBundle:Segment:aggregated_field_condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 16,  31 => 15,  26 => 12,  24 => 11,  23 => 8,  22 => 5,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportBundle:Segment:aggregated_field_condition.html.twig", "");
    }
}
