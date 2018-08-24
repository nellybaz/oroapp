<?php

/* OroTaxBundle:Tax:index.html.twig */
class __TwigTemplate_4ce2ed2720fe58d70cbd89bc6b601160cc6bb0cc6d627f6fe7586a99edfa46df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroTaxBundle:Tax:index.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaxBundle:Tax:index.html.twig", 3);
        // line 5
        $context["gridName"] = "tax-taxes-grid";
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroTaxBundle:Tax:index.html.twig", 9)->display(array_merge($context, array("alias" => "oro_tax")));
        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tax_create")) {
            // line 13
            echo "        <div class=\"btn-group\">
            ";
            // line 14
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.entity_label")));
            // line 17
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Tax:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  47 => 14,  44 => 13,  41 => 12,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Tax:index.html.twig", "");
    }
}
