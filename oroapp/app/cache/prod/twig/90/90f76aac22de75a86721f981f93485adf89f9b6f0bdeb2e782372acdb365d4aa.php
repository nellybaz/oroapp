<?php

/* OroOrderBundle:Order/Datagrid:shippingTrackingMethod.html.twig */
class __TwigTemplate_8db04176fbac703343623b8dd1a6e8f7f46d94ba56fbb638135692dc2197316a extends Twig_Template
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
        $context["shippingMethod"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "method"), "method");
        // line 2
        if (($context["shippingMethod"] ?? null)) {
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatShippingTrackingMethod(($context["shippingMethod"] ?? null))), "html", null, true);
        } else {
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:shippingTrackingMethod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:shippingTrackingMethod.html.twig", "");
    }
}
