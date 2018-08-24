<?php

/* OroOrderBundle:Order/Datagrid:subtotal.html.twig */
class __TwigTemplate_93ca5c285533ff7f1a48d1177a6965c7edfcf1cad64399d6dd618ca7dbe57f22 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "subtotal"), "method"), array("currency" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:subtotal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:subtotal.html.twig", "");
    }
}
