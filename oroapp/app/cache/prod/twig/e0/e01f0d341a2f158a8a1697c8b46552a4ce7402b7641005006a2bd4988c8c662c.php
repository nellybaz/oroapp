<?php

/* OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig */
class __TwigTemplate_9d2d75cbc87673e3a03e3772405a1acb0c0d028b2e76ae964783a877109a219f extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig", 1);
        // line 2
        $context["ui"] = $this->loadTemplate("OroMailChimpBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig", 3);
        // line 4
        echo "
";
        // line 5
        if ( !(null === ($context["stats"] ?? null))) {
            // line 6
            echo "    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.title.summary"), "html", null, true);
            echo "</strong>
    ";
            // line 7
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.title.orders"), $this->getAttribute(($context["stats"] ?? null), "qty", array()));
            echo "
    ";
            // line 8
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.title.total"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["stats"] ?? null), "total", array())));
            echo "

    ";
            // line 10
            echo $context["dataGrid"]->getrenderGrid("oro-abandonedcart-campaigns-grid", array("marketingListId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  39 => 8,  35 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAbandonedCartBundle:AbandonedCartConversion:stats.html.twig", "");
    }
}
