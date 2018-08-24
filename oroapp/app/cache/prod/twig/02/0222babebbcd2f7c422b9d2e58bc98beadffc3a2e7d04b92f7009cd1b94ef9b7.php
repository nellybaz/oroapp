<?php

/* OroInventoryBundle:Product:lowInventoryThreshold.html.twig */
class __TwigTemplate_daf08dc38c2cc7a5e60fa044fa488608900c0ea1a7d24d8d4c910db6abdcde1b extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:lowInventoryThreshold.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["lowInventoryThresholdValue"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "lowInventoryThreshold");
        // line 4
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.low_inventory_threshold.label"), ($context["lowInventoryThresholdValue"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:lowInventoryThreshold.html.twig";
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
        return new Twig_Source("", "OroInventoryBundle:Product:lowInventoryThreshold.html.twig", "");
    }
}
