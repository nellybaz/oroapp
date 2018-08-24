<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule:index.html.twig */
class __TwigTemplate_23764597ea6018f3abbacc1a809a1b58e34465ada971d4363213fb78d3d4535b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:index.html.twig", 2);
        // line 3
        $context["gridName"] = "payment-methods-configs-rule-grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.entity_short_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_payment_methods_configs_rule_create")) {
            // line 8
            echo "        <div class=\"btn-group pull-right\">
            ";
            // line 9
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.entity_short_label")));
            // line 12
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule:index.html.twig", "");
    }
}
