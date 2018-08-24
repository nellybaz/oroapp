<?php

/* OroSalesBundle:Opportunity:createOpportunityLink.html.twig */
class __TwigTemplate_7a7795e55d6e1c7cd4fccd8270ad2eb29fce96750065b87e6f5f0778693063c0 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_customer_aware_create", array("targetId" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "id", array()), "targetClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 3
($context["entity"] ?? null), true))), "html", null, true);
        // line 4
        echo "\">
    <i class=\"fa-usd hide-text\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.create.label"), "html", null, true);
        echo "
    </i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.create.label"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity:createOpportunityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  28 => 6,  24 => 4,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity:createOpportunityLink.html.twig", "");
    }
}
