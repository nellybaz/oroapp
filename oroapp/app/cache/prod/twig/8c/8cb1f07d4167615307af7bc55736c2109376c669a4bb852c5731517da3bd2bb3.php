<?php

/* OroSegmentBundle:Segment:field_condition.html.twig */
class __TwigTemplate_1bd1b90acd8964e3c582831f22562094a1a6cd3e71bff98ed2237c79f1e4a0d3 extends Twig_Template
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
        $context["fieldConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("filters" => (($this->getAttribute($this->getAttribute(        // line 2
($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array()), array())) : (array())), "hierarchy" => (($this->getAttribute($this->getAttribute(        // line 3
($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array()), array())) : (array())), "fieldChoice" => array("filterPreset" => $this->getAttribute(        // line 5
($context["params"] ?? null), "field_choice_filter_preset", array()), "select2" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => (($this->getAttribute(        // line 8
($context["params"] ?? null), "column_chain_template_selector", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "column_chain_template_selector", array()), null)) : (null))))), (($this->getAttribute(        // line 11
($context["params"] ?? null), "fieldConditionOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "fieldConditionOptions", array()), array())) : (array())));
        // line 12
        echo "
<li class=\"option\" data-criteria=\"condition-item\"
    data-module=\"oroquerydesigner/js/app/views/field-condition-view\"
    data-options=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["fieldConditionOptions"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.field_condition"), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "OroSegmentBundle:Segment:field_condition.html.twig";
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
        return new Twig_Source("", "OroSegmentBundle:Segment:field_condition.html.twig", "");
    }
}
