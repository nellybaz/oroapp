<?php

/* OroSalesBundle:SalesFunnel/widget:info.html.twig */
class __TwigTemplate_960ce3172fa5398758c3a3111e1342b8f84a0725b0b2dc5971dbd5ee8b7a2a23 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:SalesFunnel/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroSalesBundle:SalesFunnel/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.start_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "startDate", array())));
        echo "

            ";
        // line 9
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.lead.label"),         // line 11
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "lead", array()), (($this->getAttribute(($context["entity"] ?? null), "lead", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "name", array())) : (null)), "oro_sales_lead_view"));
        // line 12
        echo "

            ";
        // line 14
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.opportunity.label"),         // line 16
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), (($this->getAttribute(($context["entity"] ?? null), "opportunity", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "name", array())) : (null)), "oro_sales_opportunity_view"));
        // line 17
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:SalesFunnel/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  42 => 16,  41 => 14,  37 => 12,  35 => 11,  34 => 9,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:SalesFunnel/widget:info.html.twig", "");
    }
}
