<?php

/* OroInventoryBundle:Product:highlightLowInventory.html.twig */
class __TwigTemplate_8e8b3a819db921b6aa05eb631c110527ad5cac806af9b0fcaf9beb0625959d28 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:highlightLowInventory.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["highlightLowInventory"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "highlightLowInventory");
        // line 4
        if ( !(null === ($context["highlightLowInventory"] ?? null))) {
            // line 5
            echo "    ";
            $context["highlightLowInventory"] = (((($context["highlightLowInventory"] ?? null) == true)) ? ("true") : ("false"));
        }
        // line 7
        $context["highlightLowInventoryValue"] = (( !(null === ($context["highlightLowInventory"] ?? null))) ? (("oro.inventory.highlight_low_inventory.choice." . ($context["highlightLowInventory"] ?? null))) : (null));
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.highlight_low_inventory.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["highlightLowInventoryValue"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:highlightLowInventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  32 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:highlightLowInventory.html.twig", "");
    }
}
