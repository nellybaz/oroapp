<?php

/* OroPromotionBundle:Coupon/Datagrid/Column:promotionName.html.twig */
class __TwigTemplate_06edfbce54e99ccf856821493c289aeab292dc805bac6f8b9989c32e4f456e59 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Coupon/Datagrid/Column:promotionName.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "promotionName"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "promotionName"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon/Datagrid/Column:promotionName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon/Datagrid/Column:promotionName.html.twig", "");
    }
}
