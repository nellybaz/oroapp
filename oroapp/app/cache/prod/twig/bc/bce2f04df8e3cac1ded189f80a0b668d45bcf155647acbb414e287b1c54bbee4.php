<?php

/* OroPricingBundle:PriceAttributePriceList/Datagrid:currencies.html.twig */
class __TwigTemplate_858c3d7187e3f72e35fc062b2fc2c69cbc546e5f27ddc1388ad03cd718576ebc extends Twig_Template
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
        $context["currencies"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 3
            echo "    ";
            $context["currencies"] = twig_array_merge(($context["currencies"] ?? null), array(0 => $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->getCurrencyName($context["currency"])));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo twig_escape_filter($this->env, twig_join_filter(($context["currencies"] ?? null), ", "), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceAttributePriceList/Datagrid:currencies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceAttributePriceList/Datagrid:currencies.html.twig", "");
    }
}
