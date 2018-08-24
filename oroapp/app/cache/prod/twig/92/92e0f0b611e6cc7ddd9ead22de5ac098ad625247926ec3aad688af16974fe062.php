<?php

/* OroPaymentTermBundle:PaymentTerm:fields.html.twig */
class __TwigTemplate_394e6c8f4d0fb184df9eabb76e81894b9c1013a00790499c79f39d46403d51de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_payment_term_select_row' => array($this, 'block_oro_payment_term_select_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_payment_term_select_row', $context, $blocks);
    }

    public function block_oro_payment_term_select_row($context, array $blocks = array())
    {
        // line 2
        echo "    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropaymentterm/js/app/views/payment-term-view", "selectionTemplate" => twig_include($this->env, $context, "OroPaymentTermBundle:PaymentTerm:Autocomplete/selection.html.twig"))), "html", null, true);
        // line 6
        echo "\"
         data-layout=\"separate\">
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:fields.html.twig", "");
    }
}
