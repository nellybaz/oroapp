<?php

/* OroSalesBundle:Dashboard:leadsLaunchpad.html.twig */
class __TwigTemplate_46ac844f806f7f6d18a6119c56f638ecd589b364193eed723bfd1bb37b58ebf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:launchpad.html.twig", "OroSalesBundle:Dashboard:leadsLaunchpad.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:launchpad.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetName"] = "leads_launchpad";
        // line 4
        $context["widgetLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.entity_plural_label");
        // line 5
        $context["widgetIcon"] = "phone";
        // line 6
        $context["widgetAcl"] = "oro_sales_lead_view";
        // line 8
        $context["items"] = array("index" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.list"), "route" => "oro_sales_lead_index", "acl" => "oro_sales_lead_view"), "create" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.entity_label"))), "route" => "oro_sales_lead_create", "acl" => "oro_sales_lead_create"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:leadsLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 8,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:leadsLaunchpad.html.twig", "");
    }
}
