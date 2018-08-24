<?php

/* OroTaxBundle:TaxJurisdiction:index.html.twig */
class __TwigTemplate_ddd053af693c5375c14223a2ea5d615c0e3de93d79928e36aad47ec3d3361e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroTaxBundle:TaxJurisdiction:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaxBundle:TaxJurisdiction:index.html.twig", 3);
        // line 5
        $context["gridName"] = "tax-jurisdiction-grid";
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tax_jurisdiction_create")) {
            // line 10
            echo "        <div class=\"btn-group\">
            ";
            // line 11
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_jurisdiction_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.entity_label")));
            // line 14
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:TaxJurisdiction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  44 => 11,  41 => 10,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:TaxJurisdiction:index.html.twig", "");
    }
}
