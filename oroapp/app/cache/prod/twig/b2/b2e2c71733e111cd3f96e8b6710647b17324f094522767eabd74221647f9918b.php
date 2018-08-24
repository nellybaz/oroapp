<?php

/* OroProductBundle:ProductUnit/Datagrid:quantity.html.twig */
class __TwigTemplate_7db07480e8f54659fc5f025782808659e7e31e9219f127f0870e2138fd0a0ed2 extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["unitColumnName"] ?? null)), "method"))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatCode($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["quantityColumnName"] ?? null)), "method"), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["unitColumnName"] ?? null)), "method"), ($context["isShortUnitCode"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["quantityColumnName"] ?? null)), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:ProductUnit/Datagrid:quantity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:ProductUnit/Datagrid:quantity.html.twig", "");
    }
}
