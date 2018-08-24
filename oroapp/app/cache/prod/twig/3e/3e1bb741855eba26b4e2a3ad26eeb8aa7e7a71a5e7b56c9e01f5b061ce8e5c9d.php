<?php

/* OroPaymentTermBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig */
class __TwigTemplate_665617b50849ce66612864c320db671f5bd2457decb8247eec1b6d64861a4be9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_payment_methods_payment_term_widget' => array($this, 'block__payment_methods_payment_term_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_payment_methods_payment_term_widget', $context, $blocks);
    }

    public function block__payment_methods_payment_term_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form__payment-methods\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["view"] ?? null), "options", array()), "value", array()), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:layouts/default/imports/oro_payment_method_options:layout.html.twig", "");
    }
}
