<?php

/* OroEntityBundle:Datagrid/Property:entity.html.twig */
class __TwigTemplate_2936c33ccefa4020316f097b096412b1f58b9b1984e23ff0b42bab273bb1e4a2 extends Twig_Template
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
        $context["entity"] = $this->getAttribute(($context["entity_provider"] ?? null), "getEntity", array(0 => ($context["value"] ?? null)), "method");
        echo "<i class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "icon", array()), "html", null, true);
        echo " hide-text\"></i>&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "label", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Datagrid/Property:entity.html.twig";
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
        return new Twig_Source("", "OroEntityBundle:Datagrid/Property:entity.html.twig", "");
    }
}
