<?php

/* OroPaymentTermBundle:PaymentTerm:deleteMessage.html.twig */
class __TwigTemplate_c96c268a3c2789d5b294642500dac0bfd98f0c664da1a373fb5741595f33c6be extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPaymentTermBundle:PaymentTerm:deleteMessage.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["message"] = "";
        // line 4
        if ((($context["customerGroupFilterUrl"] ?? null) && ($context["customerFilterUrl"] ?? null))) {
            // line 5
            echo "    ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.controller.paymentterm.delete.with_two_url.message", array("{{ customers }}" =>             // line 6
($context["customerFilterUrl"] ?? null), "{{ customer_groups }}" =>             // line 7
($context["customerGroupFilterUrl"] ?? null)));
        } elseif (        // line 9
($context["customerGroupFilterUrl"] ?? null)) {
            // line 10
            echo "    ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.controller.paymentterm.delete.with_url.message", array("{{ url }}" => ($context["customerGroupFilterUrl"] ?? null)));
        } elseif (        // line 11
($context["customerFilterUrl"] ?? null)) {
            // line 12
            echo "    ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.controller.paymentterm.delete.with_url.message", array("{{ url }}" => ($context["customerFilterUrl"] ?? null)));
        }
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_confirm", array("%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_label"))), "html", null, true);
        echo " ";
        echo ($context["message"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:deleteMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 12,  38 => 11,  35 => 10,  33 => 9,  31 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:deleteMessage.html.twig", "");
    }
}
