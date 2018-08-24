<?php

/* OroSalesBundle:Account/action:addOpportunityButton.html.twig */
class __TwigTemplate_be1662f929ca39fd988a2dbb182566ca2cfcd8245a71f6fa493a443fe79ba020 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:Account/action:addOpportunityButton.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_opportunity_create")) {
            // line 4
            echo "    ";
            echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_create", array("account" => $this->getAttribute(            // line 5
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.add_entity"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.add_entity"), "iCss" => "fa-usd"));
            // line 9
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Account/action:addOpportunityButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Account/action:addOpportunityButton.html.twig", "");
    }
}
