<?php

/* OroOrderBundle:Order/Datagrid:frontendQuantity.html.twig */
class __TwigTemplate_3b2f3dcd2984cf10d6d98b846ab90f864f541bacc47eb156d13d691e0be0b8cf extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "productUnitCode"), "method"))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatCode($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "quantity"), "method"), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "productUnitCode"), "method")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "quantity"), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:frontendQuantity.html.twig";
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
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:frontendQuantity.html.twig", "");
    }
}
