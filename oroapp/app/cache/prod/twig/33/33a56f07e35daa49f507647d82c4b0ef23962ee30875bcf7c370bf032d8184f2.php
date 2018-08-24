<?php

/* OroPromotionBundle:Coupon/Autocomplete:result.html.twig */
class __TwigTemplate_ab6f96845c52334105500f9fb111497ae6d49d64cc49af052ea3afe3d5c4322f extends Twig_Template
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
        echo "<%= highlight(_.escape(obj['code'])) %> <span class=\"additional-select2__result-entry-info\">(<%= highlight(_.escape(obj['promotion.rule.name'])) %>)</span>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon/Autocomplete:result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon/Autocomplete:result.html.twig", "");
    }
}
