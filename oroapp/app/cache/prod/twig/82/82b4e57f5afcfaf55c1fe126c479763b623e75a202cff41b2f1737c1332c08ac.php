<?php

/* OroOrderBundle:Order/Datagrid:total.html.twig */
class __TwigTemplate_bff8bda4dcb919b81c8206bdb82049342e91a22cc01c7bd3f4dc45bf3bc38c4f extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "total"), "method"), array("currency" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:total.html.twig";
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
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:total.html.twig", "");
    }
}
