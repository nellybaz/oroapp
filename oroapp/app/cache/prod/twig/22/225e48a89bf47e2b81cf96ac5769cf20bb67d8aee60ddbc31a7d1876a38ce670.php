<?php

/* OroInvoiceBundle:Invoice/widget:info.html.twig */
class __TwigTemplate_1634be737d4e3671f9f326da634fddd614dc058d3a97d3071278720e885b3960 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInvoiceBundle:Invoice/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroInvoiceBundle:Invoice/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoice_number.label"), $this->getAttribute(($context["entity"] ?? null), "invoiceNumber", array()));
        echo "
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.po_number.label"), $this->getAttribute(($context["entity"] ?? null), "poNumber", array()));
        echo "
            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.currency.label"), $this->getAttribute(($context["entity"] ?? null), "currency", array()));
        echo "

            ";
        // line 11
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.customer.label"),         // line 13
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customer", array())), "oro_customer_customer_view"));
        // line 14
        echo "

            ";
        // line 16
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.customer_user.label"),         // line 18
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customerUser", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customerUser", array())), "oro_customer_customer_user_view"));
        // line 19
        echo "

            ";
        // line 21
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoice_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "invoiceDate", array())));
        echo "
            ";
        // line 22
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.payment_due_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "paymentDueDate", array())));
        echo "
            ";
        // line 23
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.subtotal.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "subtotal", array()), array("currency" => $this->getAttribute(($context["entity"] ?? null), "currency", array()))));
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 26
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInvoiceBundle:Invoice/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  64 => 23,  60 => 22,  56 => 21,  52 => 19,  50 => 18,  49 => 16,  45 => 14,  43 => 13,  42 => 11,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInvoiceBundle:Invoice/widget:info.html.twig", "");
    }
}
