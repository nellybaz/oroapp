<?php

/* OroInventoryBundle:Product:inventoryThreshold.html.twig */
class __TwigTemplate_15c816017456380968f0466fef1047bcc586dfe91a030f72c3f19d8e5082f1c7 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:inventoryThreshold.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["inventoryThresholdValue"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "inventoryThreshold");
        // line 4
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.inventory_threshold.label"), ($context["inventoryThresholdValue"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:inventoryThreshold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:inventoryThreshold.html.twig", "");
    }
}
