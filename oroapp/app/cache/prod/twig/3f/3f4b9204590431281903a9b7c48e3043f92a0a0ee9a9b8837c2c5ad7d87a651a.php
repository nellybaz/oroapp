<?php

/* OroPromotionBundle:Promotion/discountPlaceholders:lineItem.html.twig */
class __TwigTemplate_96f5fac1fdc602a7cb2330dbfeff35c7ca34231d64440d6c725dc5b4ef0070f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", "OroPromotionBundle:Promotion/discountPlaceholders:lineItem.html.twig", 1);
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
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.line_item_type.apply_to.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount_options.line_item_type.apply_to.choices." . $this->getAttribute(($context["options"] ?? null), "apply_to", array(), "array")))), "method"), 1 => $this->getAttribute(        // line 7
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.line_item_type.product_unit.label"), 1 => $this->getAttribute(($context["options"] ?? null), "discount_product_unit_code", array(), "array")), "method"), 2 => $this->getAttribute(        // line 8
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.line_item_type.maximum_qty.label"), 1 => $this->getAttribute(($context["options"] ?? null), "maximum_qty", array(), "array")), "method"));
        // line 10
        echo "
    ";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:lineItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  38 => 8,  37 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/discountPlaceholders:lineItem.html.twig", "");
    }
}
