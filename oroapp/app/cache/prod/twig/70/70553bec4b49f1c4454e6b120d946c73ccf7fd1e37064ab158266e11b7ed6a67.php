<?php

/* OroPaymentBundle:PaymentTransaction/Datagrid:action.html.twig */
class __TwigTemplate_94b987d4b7076440a2e82f808cbfc7de6b06130f6f2f90e4f4f01fa710120f7f extends Twig_Template
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
        $context["action"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "action"), "method");
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.payment.paymenttransaction.types." . ($context["action"] ?? null)) . ".label")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentTransaction/Datagrid:action.html.twig";
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
        return new Twig_Source("", "OroPaymentBundle:PaymentTransaction/Datagrid:action.html.twig", "");
    }
}
