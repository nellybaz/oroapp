<?php

/* OroPaymentTermBundle:PaymentTerm:column.html.twig */
class __TwigTemplate_42f6ec74b4ae2cf8c79a0655ff7901d068be69d29eddc78b75003396294da5c5 extends Twig_Template
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
        $context["customerGroupPaymentTermLabel"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "customer_group_payment_term"), "method");
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("customerGroupPaymentTermLabel", $context) && ($context["customerGroupPaymentTermLabel"] ?? null)) &&  !($context["value"] ?? null))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.customer.customer_group_defined", array("{{ payment_term }}" => ($context["customerGroupPaymentTermLabel"] ?? null))), "html", null, true);
            echo "
";
        } elseif (        // line 5
($context["value"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:column.html.twig", "");
    }
}
