<?php

/* OroTaxBundle:Js:item_items.html.twig */
class __TwigTemplate_62d98e6ad93192a803a65694a5adc1696c9b1049755824ec473c86433fa17de5 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"tax-item-row-excludingTax\">
    <span><%= value %></span>
</script>
<script type=\"text/html\" id=\"tax-item-row-includingTax\">
    <span><%= value %></span>
</script>
<script type=\"text/html\" id=\"tax-item-row-taxAmount\">
    <span><%= value %></span>
</script>
<script type=\"text/html\" id=\"tax-item-unit-excludingTax\">
    <span><%= value %></span>
</script>
<script type=\"text/html\" id=\"tax-item-unit-includingTax\">
    <span><%= value %></span>
</script>
<script type=\"text/html\" id=\"tax-item-unit-taxAmount\">
    <span><%= value %></span>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Js:item_items.html.twig";
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
        return new Twig_Source("", "OroTaxBundle:Js:item_items.html.twig", "");
    }
}
