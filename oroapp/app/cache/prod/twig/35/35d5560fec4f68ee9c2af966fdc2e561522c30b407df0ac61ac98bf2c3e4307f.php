<?php

/* OroPromotionBundle:Coupon/Autocomplete:selection.html.twig */
class __TwigTemplate_21b4e5e8dfe4ab067c146e06cab9c638b51749181d3974ad4f647d799ee1b8ac extends Twig_Template
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
        echo "<%= highlight(_.escape(obj['code'])) %> <span class=\"select2__result-entry-info\">(<%= highlight(_.escape(obj['promotion.rule.name'])) %>)</span>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroPromotionBundle:Coupon/Autocomplete:selection.html.twig", "");
    }
}
