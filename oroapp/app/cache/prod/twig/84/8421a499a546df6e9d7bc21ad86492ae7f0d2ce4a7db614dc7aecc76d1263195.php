<?php

/* OroSalesBundle:B2bCustomer/widget:b2bCustomerLeads.html.twig */
class __TwigTemplate_33bfc4f598b1dc0c73fe0528b5516f907371d4a2cea30a11e2a19779f37cf4f6 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:b2bCustomerLeads.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["scope"] = ("customer-" . $this->getAttribute(($context["entity"] ?? null), "id", array()));
        // line 5
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("sales-b2bcustomer-leads-grid",         // line 6
($context["scope"] ?? null)), array("customerId" => $this->getAttribute(        // line 7
($context["entity"] ?? null), "id", array())));
        // line 8
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer/widget:b2bCustomerLeads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  29 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer/widget:b2bCustomerLeads.html.twig", "");
    }
}
