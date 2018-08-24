<?php

/* OroShoppingListBundle:Datagrid/Column:customer_user.html.twig */
class __TwigTemplate_b6bfbf2374f123030f69a39a82881e42fbb606ebdcd26404eea595d64e6882bd extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "customer_user"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "customer_user"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:Datagrid/Column:customer_user.html.twig";
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
        return new Twig_Source("", "OroShoppingListBundle:Datagrid/Column:customer_user.html.twig", "");
    }
}
