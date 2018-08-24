<?php

/* OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig */
class __TwigTemplate_f3970cf982faf52792bb314ef2a28aa25af201df76adfb99d3021b2fb3040d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["options"] = $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "discountConfiguration", array()), "options", array());
        // line 5
        echo "    ";
        if (($this->getAttribute(($context["options"] ?? null), "discount_type", array(), "array") == twig_constant("Oro\\Bundle\\PromotionBundle\\Discount\\DiscountInterface::TYPE_AMOUNT"))) {
            // line 6
            echo "        ";
            $context["discountValue"] = $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["options"] ?? null), "discount_value", array(), "array"), array("currency" => $this->getAttribute(($context["options"] ?? null), "discount_currency", array(), "array")));
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context["discountValue"] = $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(($context["options"] ?? null), "discount_value", array(), "array"));
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    ";
        // line 11
        $context["data"] = twig_array_merge(array(0 =>         // line 12
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.discountconfiguration.type.discount.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount.type.choices." . $this->getAttribute($this->getAttribute(        // line 14
($context["entity"] ?? null), "discountConfiguration", array()), "type", array())))), 1 =>         // line 16
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.discountconfiguration.options.type.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount_options.general.type.choices." . $this->getAttribute(        // line 18
($context["options"] ?? null), "discount_type", array(), "array")))), 2 =>         // line 20
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.discountconfiguration.options.discount_value.label"), ($context["discountValue"] ?? null))), ((        // line 21
array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), array())) : (array())));
        // line 22
        echo "
    ";
        // line 23
        echo $context["UI"]->getscrollSubblock(null, ($context["data"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  58 => 21,  57 => 20,  56 => 18,  55 => 16,  54 => 14,  53 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", "");
    }
}
