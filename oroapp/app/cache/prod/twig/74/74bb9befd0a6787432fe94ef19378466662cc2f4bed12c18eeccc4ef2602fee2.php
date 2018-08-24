<?php

/* OroMarketingListBundle:MarketingList/Datagrid/Property:listType.html.twig */
class __TwigTemplate_1fd724521a08e02512f1048e1c8f4519ba2ad3a7794d1d44768fc03a4ada83b6 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? null)), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "segmentLastRun"), "method")) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketinglist.datagrid.refreshedOn"), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "segmentLastRun"), "method"));
            echo ")";
        }
    }

    public function getTemplateName()
    {
        return "OroMarketingListBundle:MarketingList/Datagrid/Property:listType.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "OroMarketingListBundle:MarketingList/Datagrid/Property:listType.html.twig", "");
    }
}
