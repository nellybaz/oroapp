<?php

/* OroOrderBundle:Order/Datagrid:sourceDocument.html.twig */
class __TwigTemplate_4774ab168f80982d43618fa68d0088d5e560a6da17d5b7ebcf33a4f293e24d7a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatSourceDocument($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "sourceEntityClass"), "method"), $this->getAttribute(        // line 2
($context["record"] ?? null), "getValue", array(0 => "sourceEntityId"), "method"), $this->getAttribute(        // line 3
($context["record"] ?? null), "getValue", array(0 => "sourceEntityIdentifier"), "method")), "html", null, true);
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:sourceDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:sourceDocument.html.twig", "");
    }
}
