<?php

/* OroCustomerAccountBridgeBundle:Customer/widget:quotes.html.twig */
class __TwigTemplate_dc9e01ebb0b9071b38b524d07e1f0c2859312bba5af8c25a8ba59723e6d426f6 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerAccountBridgeBundle:Customer/widget:quotes.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["scope"] = twig_replace_filter("account-customer-%customer%", array("%customer%" => $this->getAttribute(($context["customer"] ?? null), "id", array())));
        // line 5
        echo "
    ";
        // line 6
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("customer-view-quote-grid",         // line 7
($context["scope"] ?? null)), array("customer_id" => $this->getAttribute(        // line 8
($context["customer"] ?? null), "id", array())));
        // line 9
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerAccountBridgeBundle:Customer/widget:quotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  32 => 8,  31 => 7,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerAccountBridgeBundle:Customer/widget:quotes.html.twig", "");
    }
}
