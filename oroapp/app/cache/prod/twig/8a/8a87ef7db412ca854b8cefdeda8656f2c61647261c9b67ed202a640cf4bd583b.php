<?php

/* OroActivityListBundle:Segment:activityCondition.html.twig */
class __TwigTemplate_201b15e18062ef4a885f54ea2a5aa4191ac254009c174136e4616bca35b6100e extends Twig_Template
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
        $context["activityConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("filters" => (($this->getAttribute($this->getAttribute(        // line 2
($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array()), array())) : (array())), "fieldChoice" => array("select2" => array("formatSelectionTemplateSelector" => (($this->getAttribute(        // line 5
($context["params"] ?? null), "column_chain_template_selector", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "column_chain_template_selector", array()), null)) : (null))))), ((        // line 8
array_key_exists("activityConditionOptions", $context)) ? (_twig_default_filter(($context["activityConditionOptions"] ?? null), array())) : (array())));
        // line 9
        echo "
<li class=\"option\" data-criteria=\"condition-activity\"
    data-module=\"oroactivitylist/js/app/views/activity-condition-view\"
    data-options=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["activityConditionOptions"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activitylist.condition_builder.criteria.activity"), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:Segment:activityCondition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  29 => 12,  24 => 9,  22 => 8,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityListBundle:Segment:activityCondition.html.twig", "");
    }
}
