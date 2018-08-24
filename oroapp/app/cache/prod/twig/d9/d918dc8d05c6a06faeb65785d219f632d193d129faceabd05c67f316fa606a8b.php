<?php

/* OroOrderBundle:Order/Datagrid:paymentStatus.html.twig */
class __TwigTemplate_dde95f19450cbf9ba3475d2ef103381f70b888c0a34c98a6cea827ce75e41682 extends Twig_Template
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
        $context["data"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "paymentStatus"), "method");
        // line 2
        if ( !twig_test_empty(($context["data"] ?? null))) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentStatusExtension')->formatPaymentStatusLabel(($context["data"] ?? null));
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:paymentStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:paymentStatus.html.twig", "");
    }
}
