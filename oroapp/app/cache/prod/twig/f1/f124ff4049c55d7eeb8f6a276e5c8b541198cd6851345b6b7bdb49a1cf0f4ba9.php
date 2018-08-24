<?php

/* OroPricingBundle:PriceAttributePriceList/widget:info.html.twig */
class __TwigTemplate_341d554e11046535f5c5c92a729024eb85056414253fbdb36967b29f6f57a977 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPricingBundle:PriceAttributePriceList/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroPricingBundle:PriceAttributePriceList/widget:info.html.twig", 2);
        // line 3
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.field_name.label"), $this->getAttribute(($context["entity"] ?? null), "fieldName", array()));
        echo "
            ";
        // line 8
        if ($this->getAttribute(($context["entity"] ?? null), "currencies", array())) {
            // line 9
            echo "                ";
            $context["currencies"] = array();
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "currencies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 11
                echo "                    ";
                $context["currencies"] = twig_array_merge(($context["currencies"] ?? null), array(0 => $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->getCurrencyName($context["currency"])));
                // line 12
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.currencies.label"), $context["UI"]->getrenderList(($context["currencies"] ?? null)));
            echo "
            ";
        }
        // line 15
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceAttributePriceList/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 13,  49 => 12,  46 => 11,  41 => 10,  38 => 9,  36 => 8,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceAttributePriceList/widget:info.html.twig", "");
    }
}
