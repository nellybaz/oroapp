<?php

/* OroProductBundle:ProductUnit/Datagrid:unitFullSingle.html.twig */
class __TwigTemplate_c5971f591892e61f68c601adb6907648574c4b8a8ce41f3c40c6e8e69e60031e extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["value"] ?? null), false, false);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:ProductUnit/Datagrid:unitFullSingle.html.twig";
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
        return new Twig_Source("", "OroProductBundle:ProductUnit/Datagrid:unitFullSingle.html.twig", "");
    }
}
