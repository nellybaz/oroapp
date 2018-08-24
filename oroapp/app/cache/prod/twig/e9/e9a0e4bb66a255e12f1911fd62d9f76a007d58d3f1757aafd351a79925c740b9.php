<?php

/* OroProductBundle:ProductUnit/Datagrid:decimalQuantity.html.twig */
class __TwigTemplate_82efe8181254b335bb80cdbfd9c3655eeda4e6d3c6a1a5da5ed852d0716cc94a extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatCode($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["quantityColumnName"] ?? null)), "method")), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["unitColumnName"] ?? null)), "method"), ($context["isShortUnitCode"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["quantityColumnName"] ?? null)), "method"));
            echo "
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:ProductUnit/Datagrid:decimalQuantity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:ProductUnit/Datagrid:decimalQuantity.html.twig", "");
    }
}
