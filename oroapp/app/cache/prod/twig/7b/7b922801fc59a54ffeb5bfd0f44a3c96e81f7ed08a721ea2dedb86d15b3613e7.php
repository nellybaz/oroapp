<?php

/* OroPricingBundle:Totals:totals.html.twig */
class __TwigTemplate_4c8178cd554088658d4828ef2c72ad552d3fa3b224ab9a8752185bea8b2cdb93 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_before", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_before"] ?? null), "oro_pricing_totals_before")) : ("oro_pricing_totals_before")), array());
        // line 2
        echo "
";
        // line 3
        $context["pageComponent"] = ((array_key_exists("pageComponent", $context)) ? (_twig_default_filter(($context["pageComponent"] ?? null), "oropricing/js/app/components/totals-component")) : ("oropricing/js/app/components/totals-component"));
        // line 4
        echo "<div data-page-component-module=\"";
        echo twig_escape_filter($this->env, ($context["pageComponent"] ?? null), "html", null, true);
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array()))), "html", null, true);
        echo "\">
    <div class=\"totals-container\" data-totals-container></div>
    ";
        // line 6
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals", $context)) ? (_twig_default_filter(($context["oro_pricing_totals"] ?? null), "oro_pricing_totals")) : ("oro_pricing_totals")), array());
        // line 7
        echo "</div>

";
        // line 9
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_pricing_totals_after", $context)) ? (_twig_default_filter(($context["oro_pricing_totals_after"] ?? null), "oro_pricing_totals_after")) : ("oro_pricing_totals_after")), array());
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Totals:totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  36 => 7,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Totals:totals.html.twig", "");
    }
}
