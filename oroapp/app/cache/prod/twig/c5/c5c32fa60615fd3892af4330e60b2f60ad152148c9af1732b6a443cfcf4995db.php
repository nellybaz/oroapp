<?php

/* OroPromotionBundle:Coupon:addCouponDialog.html.twig */
class __TwigTemplate_a661703d27d293ede96ea99f84c7eb51b41143df1872e1b0623b8564ec22f422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroPromotionBundle:Coupon:addCouponDialog.html.twig", 1);
        $this->blocks = array(
            'form_actions_inner' => array($this, 'block_form_actions_inner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_actions_inner($context, array $blocks = array())
    {
        // line 4
        echo "    <button class=\"btn\" type=\"reset\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["options"] ?? null), "cancelText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "cancelText", array()), "Cancel")) : ("Cancel"))), "html", null, true);
        echo "</button>
    <button class=\"btn btn-primary\" type=\"submit\" disabled=\"disabled\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["options"] ?? null), "okText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "okText", array()), "Submit")) : ("Submit"))), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:addCouponDialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:addCouponDialog.html.twig", "");
    }
}
