<?php

/* OroTaxBundle:Js:item_items.html.twig */
class __TwigTemplate_2bdd1bab1da828ff7f486e07df35bcea6ab45e01474c6daaa7b350f646894c68 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTaxBundle:Js:item_items.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Js:item_items.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"tax-item-row-excludingTax\">
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
", "OroTaxBundle:Js:item_items.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/Js/item_items.html.twig");
    }
}
