<?php

/* OroInventoryBundle:Product:upcoming_view.html.twig */
class __TwigTemplate_d766f0848bc192011a319cf70a732b934d98ee53cce418c80739e95088f3904f extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:upcoming_view.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ($this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\ProductUpcomingExtension')->isUpcoming(($context["entity"] ?? null))) {
            // line 4
            echo "    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.choice.true"));
            // line 7
            echo "
    ";
            // line 8
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.availability_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\ProductUpcomingExtension')->getAvailabilityDate(            // line 10
($context["entity"] ?? null))),             // line 11
($context["entity"] ?? null));
            // line 12
            echo "
";
        } else {
            // line 14
            echo "    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.choice.false"));
            // line 17
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:upcoming_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  40 => 14,  36 => 12,  34 => 11,  33 => 10,  32 => 8,  29 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:upcoming_view.html.twig", "");
    }
}
