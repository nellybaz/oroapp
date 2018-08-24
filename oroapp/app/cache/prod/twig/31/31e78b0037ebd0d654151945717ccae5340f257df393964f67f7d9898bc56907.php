<?php

/* OroOrderBundle:Discount:order_discount_view_collection.html.twig */
class __TwigTemplate_4cbad51697fcb5eddbb7b187569c8d3cae2d4df6f315b802d98dab3ded9f16e7 extends Twig_Template
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
        echo "<div class=\"oro-discount-collection grid-container oro-collection-table\">
    ";
        // line 2
        $this->loadTemplate("OroOrderBundle:Discount:order_discount_collection.html.twig", "OroOrderBundle:Discount:order_discount_view_collection.html.twig", 2)->display(array_merge($context, array("collection" => $this->getAttribute(($context["entity"] ?? null), "discounts", array()), "editable" => false)));
        // line 3
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Discount:order_discount_view_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Discount:order_discount_view_collection.html.twig", "");
    }
}
