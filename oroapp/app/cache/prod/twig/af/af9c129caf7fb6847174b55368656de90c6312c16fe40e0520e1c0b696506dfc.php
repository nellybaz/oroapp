<?php

/* OroPaymentTermBundle:PaymentTerm:deleteMessageDatagrid.html.twig */
class __TwigTemplate_42fc040c8a6027fc839ac0cb1b60b3583df70fdb2ee11e7dc209041401f45e18 extends Twig_Template
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
        $context["paymentTermId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "id"), "method");
        // line 2
        $context["message"] = $this->env->getExtension('Oro\Bundle\PaymentTermBundle\Twig\DeleteMessageTextExtension')->getDeleteMessageDatagrid(($context["paymentTermId"] ?? null));
        // line 3
        echo ($context["message"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:deleteMessageDatagrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:deleteMessageDatagrid.html.twig", "");
    }
}
