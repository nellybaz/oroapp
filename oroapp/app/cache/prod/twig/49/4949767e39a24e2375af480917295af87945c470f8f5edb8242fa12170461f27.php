<?php

/* OroPromotionBundle:Promotion/discountPlaceholders:buyXGetY.html.twig */
class __TwigTemplate_80ca68af666eb09bfd1d5f16fc01db26f9fa50b992cb1d7467f62edc6fcc1569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", "OroPromotionBundle:Promotion/discountPlaceholders:buyXGetY.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["options"] = $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "discountConfiguration", array()), "options", array());
        // line 5
        echo "    ";
        $context["data"] = array(0 => $this->getAttribute(        // line 6
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.buy_x_get_y_type.product_unit.label"), 1 => $this->getAttribute(($context["options"] ?? null), "discount_product_unit_code", array(), "array")), "method"), 1 => $this->getAttribute(        // line 7
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.buy_x_get_y_type.buy_x.label"), 1 => $this->getAttribute(($context["options"] ?? null), "buy_x", array(), "array")), "method"), 2 => $this->getAttribute(        // line 8
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.buy_x_get_y_type.get_y.label"), 1 => $this->getAttribute(($context["options"] ?? null), "get_y", array(), "array")), "method"), 3 => $this->getAttribute(        // line 9
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.buy_x_get_y_type.apply_to.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount_options.buy_x_get_y_type.apply_to.choices." . $this->getAttribute(($context["options"] ?? null), "discount_apply_to", array(), "array")))), "method"), 4 => $this->getAttribute(        // line 10
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.buy_x_get_y_type.limit_times.label"), 1 => $this->getAttribute(($context["options"] ?? null), "discount_limit", array(), "array")), "method"));
        // line 12
        echo "
    ";
        // line 13
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:buyXGetY.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  42 => 12,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/discountPlaceholders:buyXGetY.html.twig", "");
    }
}
