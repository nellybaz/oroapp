<?php

/* OroOrderBundle:Order/Datagrid:shippingMethodFull.html.twig */
class __TwigTemplate_c32ba35ded351936f81ac767469b7d69140b35f47bc0cfa2d38d2bd700fb01dd extends Twig_Template
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
        $context["shippingMethod"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "shippingMethod"), "method");
        // line 2
        $context["shippingMethodType"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "shippingMethodType"), "method");
        // line 3
        if (($context["shippingMethod"] ?? null)) {
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_type_label')->getCallable(), array(($context["shippingMethod"] ?? null), ($context["shippingMethodType"] ?? null)))), "html", null, true);
        } else {
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:shippingMethodFull.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:shippingMethodFull.html.twig", "");
    }
}
