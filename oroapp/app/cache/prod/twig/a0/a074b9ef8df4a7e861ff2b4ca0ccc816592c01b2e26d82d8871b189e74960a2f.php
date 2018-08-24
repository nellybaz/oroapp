<?php

/* OroProductBundle:ProductUnit/Datagrid:unitShortPlural.html.twig */
class __TwigTemplate_2eb996f357826007552744f7c93df83c17d00a04fe04aba8a1f0793a0cd11ac9 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["value"] ?? null), true, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:ProductUnit/Datagrid:unitShortPlural.html.twig";
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
        return new Twig_Source("", "OroProductBundle:ProductUnit/Datagrid:unitShortPlural.html.twig", "");
    }
}
