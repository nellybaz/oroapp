<?php

/* OroInventoryBundle:Product:viewQuantityToOrder.html.twig */
class __TwigTemplate_d3644b2a317e7e17560261798651a2c9a25cf738a2f56310aba9498c206403d5 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:viewQuantityToOrder.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["minimumQuantity"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "minimumQuantityToOrder");
        // line 4
        $context["maximumQuantity"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "maximumQuantityToOrder");
        // line 5
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.fields.product.minimum_quantity_to_order.label"), ($context["minimumQuantity"] ?? null));
        echo "
";
        // line 6
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.fields.product.maximum_quantity_to_order.label"), ($context["maximumQuantity"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:viewQuantityToOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:viewQuantityToOrder.html.twig", "");
    }
}
