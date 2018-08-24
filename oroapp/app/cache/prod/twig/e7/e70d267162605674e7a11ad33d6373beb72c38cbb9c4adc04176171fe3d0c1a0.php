<?php

/* OroInventoryBundle:Product:backOrder.html.twig */
class __TwigTemplate_7db3a9519df704577681e833ecc408a67600e9bef103053a79499fd029b321a6 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:backOrder.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["backOrder"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getFallbackValue(($context["entity"] ?? null), "backOrder");
        // line 4
        if ( !(null === ($context["backOrder"] ?? null))) {
            // line 5
            echo "    ";
            $context["backOrder"] = (((($context["backOrder"] ?? null) == true)) ? ("true") : ("false"));
        }
        // line 7
        $context["backOrderValue"] = (( !(null === ($context["backOrder"] ?? null))) ? (("oro.inventory.manage_inventory.choice." . ($context["backOrder"] ?? null))) : (null));
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.backorders.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["backOrderValue"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:backOrder.html.twig";
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
        return new Twig_Source("", "OroInventoryBundle:Product:backOrder.html.twig", "");
    }
}
