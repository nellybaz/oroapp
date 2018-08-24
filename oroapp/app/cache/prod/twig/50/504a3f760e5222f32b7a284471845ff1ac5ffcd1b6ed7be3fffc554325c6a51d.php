<?php

/* OroSalesBundle:LeadAddress/widget:addressBook.html.twig */
class __TwigTemplate_72896bde73348fc5f149029fbb074aa35e8f70c3a770a026077d8a5d4560019f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroAddressBundle:widget:addressBook.html.twig", "OroSalesBundle:LeadAddress/widget:addressBook.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroAddressBundle:widget:addressBook.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["addressListUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_lead_addresses", array("leadId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 3
        $context["addressCreateUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_address_create", array("leadId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 4
        $context["addressUpdateRoute"] = "oro_sales_lead_address_update";
        // line 5
        $context["addressDeleteRoute"] = "oro_api_delete_lead_address";
        // line 6
        $context["ownerParam"] = "leadId";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:LeadAddress/widget:addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:LeadAddress/widget:addressBook.html.twig", "");
    }
}
