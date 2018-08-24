<?php

/* OroPromotionBundle:Promotion/discountPlaceholders:shipping.html.twig */
class __TwigTemplate_d72a7a6b34812489dc199e8a49360afb74ddcc71fa1174e7161bdd12d04790cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", "OroPromotionBundle:Promotion/discountPlaceholders:shipping.html.twig", 1);
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
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.discount_options.shipping_type.shipping_method.label"), 1 => call_user_func_array($this->env->getFunction('oro_shipping_method_with_type_label')->getCallable(), array($this->getAttribute($this->getAttribute(        // line 8
($context["options"] ?? null), "shipping_options", array(), "array"), "shipping_method", array(), "array"), $this->getAttribute($this->getAttribute(($context["options"] ?? null), "shipping_options", array(), "array"), "shipping_method_type", array(), "array")))), "method"));
        // line 11
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  37 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/discountPlaceholders:shipping.html.twig", "");
    }
}
