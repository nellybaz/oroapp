<?php

/* OroProductBundle:Product/Datagrid:inventoryStatus.html.twig */
class __TwigTemplate_a4d225a08ce8713350351f59e4da5562af2ff771bc319bf539a1fd3d0ddd0bc7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "inventoryStatusName"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/Datagrid:inventoryStatus.html.twig";
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
        return new Twig_Source("", "OroProductBundle:Product/Datagrid:inventoryStatus.html.twig", "");
    }
}
