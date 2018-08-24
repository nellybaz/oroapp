<?php

/* OroOrderBundle:Order/Datagrid:price.html.twig */
class __TwigTemplate_ba0e925a0305ecd285d8b9056df555fb3259abdbf633485d0a2aa1bf19918dd4 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "price"), "method"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:price.html.twig";
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
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:price.html.twig", "");
    }
}
