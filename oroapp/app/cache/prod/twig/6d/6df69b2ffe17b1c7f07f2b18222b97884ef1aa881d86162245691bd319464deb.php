<?php

/* OroPaymentBundle:PaymentTransaction:status.html.twig */
class __TwigTemplate_99c3279dc2e10bfbb02d6298aad5459f9beccacd6df7befb90a72c17c6fa1cd3 extends Twig_Template
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
        echo "<div class=\"control-group\">
    <label class=\"control-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.status.label"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
        <div class=\"control-label\">
            ";
        // line 5
        if ( !twig_test_empty(($context["data"] ?? null))) {
            // line 6
            echo "                ";
            echo $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentStatusExtension')->formatPaymentStatusLabel(($context["data"] ?? null));
            echo "
            ";
        } else {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
            echo "
            ";
        }
        // line 10
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentTransaction:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 8,  30 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentTransaction:status.html.twig", "");
    }
}
