<?php

/* OroProductBundle:ProductUnit/Datagrid:unitShortSingle.html.twig */
class __TwigTemplate_0978c945fd224cca60205bd79990c01a858c6129f78fbf35e80a2d34ffd31fc4 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["value"] ?? null), true, false);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:ProductUnit/Datagrid:unitShortSingle.html.twig";
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
        return new Twig_Source("", "OroProductBundle:ProductUnit/Datagrid:unitShortSingle.html.twig", "");
    }
}
