<?php

/* OroInventoryBundle:Product:decrementQuantity.html.twig */
class __TwigTemplate_64c06ad73d341114e06b83d3ad6ad63c083baf0e75d760838e9fbd82639d6a24 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:decrementQuantity.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["decrementQuantity"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "decrementQuantity");
        // line 4
        if ( !(null === ($context["decrementQuantity"] ?? null))) {
            // line 5
            echo "    ";
            $context["decrementQuantity"] = (((($context["decrementQuantity"] ?? null) == true)) ? ("true") : ("false"));
        }
        // line 7
        $context["decrementQuantityValue"] = (( !(null === ($context["decrementQuantity"] ?? null))) ? (("oro.inventory.decrement_inventory.choice." . ($context["decrementQuantity"] ?? null))) : (null));
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.decrement_inventory.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["decrementQuantityValue"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:decrementQuantity.html.twig";
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
        return new Twig_Source("", "OroInventoryBundle:Product:decrementQuantity.html.twig", "");
    }
}
