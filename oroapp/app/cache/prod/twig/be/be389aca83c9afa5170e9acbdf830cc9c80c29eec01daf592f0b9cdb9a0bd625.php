<?php

/* OroPromotionBundle:Promotion/discountPlaceholders:order.html.twig */
class __TwigTemplate_ae8c2053b4fbd45d38499eafefe207eb9a0ccf2628dc91f617a4341663a5652b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroPromotionBundle:Promotion/discountPlaceholders:baseDiscountPlaceholder.html.twig", "OroPromotionBundle:Promotion/discountPlaceholders:order.html.twig", 1);
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
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/discountPlaceholders:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/discountPlaceholders:order.html.twig", "");
    }
}
