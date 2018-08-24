<?php

/* OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig */
class __TwigTemplate_a8d6d3e009a348058fdaf47373ec0803176dcbe44dfe4af8494d332041624c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_payment_methods_money_order_widget' => array($this, 'block__payment_methods_money_order_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_payment_methods_money_order_widget', $context, $blocks);
    }

    public function block__payment_methods_money_order_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods\">
        <table class=\"grid\">
            <tr>
                <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.money_order.pay_to"), "html", null, true);
        echo ": </td>
                <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["view"] ?? null), "options", array()), "pay_to", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.money_order.send_to"), "html", null, true);
        echo ": </td>
                <td>";
        // line 10
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["view"] ?? null), "options", array()), "send_to", array()), "html", null, true));
        echo "</td>
            </tr>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  43 => 9,  37 => 6,  33 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig", "");
    }
}
