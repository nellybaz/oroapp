<?php

/* OroPricingBundle:PriceList/widget:info.html.twig */
class __TwigTemplate_6cd982926943d9535d134d63939f27334678eb092229ac81a607b73a9c6e904f extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPricingBundle:PriceList/widget:info.html.twig", 1);
        // line 2
        $context["cronSchedulIntervals"] = $this->loadTemplate("OroCronBundle::macros.html.twig", "OroPricingBundle:PriceList/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroPricingBundle:PriceList/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "

            ";
        // line 10
        if ($this->getAttribute(($context["entity"] ?? null), "currencies", array())) {
            // line 11
            echo "                ";
            $context["currencies"] = array();
            // line 12
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "currencies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 13
                echo "                    ";
                $context["currencies"] = twig_array_merge(($context["currencies"] ?? null), array(0 => $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->getCurrencyName($context["currency"])));
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.currencies.label"), $context["UI"]->getrenderList(($context["currencies"] ?? null)));
            echo "
                ";
            // line 16
            $context["status"] = (($this->getAttribute(($context["entity"] ?? null), "active", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.status.enabled")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.status.disabled")));
            // line 17
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.status.label"), ($context["status"] ?? null));
            echo "
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if (($this->getAttribute(($context["entity"] ?? null), "isActive", array(), "method") &&  !$this->getAttribute($this->getAttribute(($context["entity"] ?? null), "schedules", array()), "isEmpty", array(), "method"))) {
            // line 21
            echo "                ";
            $context["labels"] = array("wasActivatedLabel" => "oro.pricing.pricelist_schedule.was_activated", "activeNowLabel" => "oro.pricing.pricelist_schedule.active_now", "notActiveNowLabel" => "oro.pricing.pricelist_schedule.not_active_now", "willBeActivatedLabel" => "oro.pricing.pricelist_schedule.will_be_acitivated", "wasDeactivatedLabel" => "oro.pricing.pricelist_schedule.was_deactivated", "willBeDeactivatedLabel" => "oro.pricing.pricelist_schedule.will_be_deacitivated");
            // line 29
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.schedule.label"), $context["cronSchedulIntervals"]->getscheduleIntervalsInfo($this->getAttribute(($context["entity"] ?? null), "schedules", array()), ($context["labels"] ?? null)));
            echo "
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceList/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  82 => 31,  76 => 29,  73 => 21,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  55 => 15,  49 => 14,  46 => 13,  41 => 12,  38 => 11,  36 => 10,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceList/widget:info.html.twig", "");
    }
}
