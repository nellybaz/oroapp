<?php

/* OroContactBundle:Contact/Datagrid/Property:contactName.html.twig */
class __TwigTemplate_52d0aa1fbf54938e5bb06be4de67e98120655371414fae7b7957a7bc53e7db2a extends Twig_Template
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
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_view", array("id" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "id"), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact/Datagrid/Property:contactName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact/Datagrid/Property:contactName.html.twig", "");
    }
}
