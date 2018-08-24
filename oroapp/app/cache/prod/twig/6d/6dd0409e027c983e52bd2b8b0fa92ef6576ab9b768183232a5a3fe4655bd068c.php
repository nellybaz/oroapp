<?php

/* OroCustomerBundle:CustomerUser:searchResult.html.twig */
class __TwigTemplate_354529d84be7d785b88394dd8c47b6eed8fb9a84cfe034e2a92b6d363052e7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroCustomerBundle:CustomerUser:searchResult.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["showImage"] = false;
        // line 5
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 6
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->getAttribute(($context["entity"] ?? null), "email", array())) : ($this->getAttribute(($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 8
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label");
        // line 10
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.first_name.label"), "value" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "firstName", array())), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.last_name.label"), "value" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "lastName", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,  34 => 12,  33 => 11,  32 => 10,  30 => 8,  28 => 6,  26 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser:searchResult.html.twig", "");
    }
}
