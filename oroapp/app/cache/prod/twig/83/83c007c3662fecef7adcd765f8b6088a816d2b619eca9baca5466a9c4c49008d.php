<?php

/* OroOrderBundle:Order/Datagrid:product.html.twig */
class __TwigTemplate_10daa3aea36e345b3de4f00d8d2d7ad2b4d2be10ea14fe0c0a6ad26ee5ad68f0 extends Twig_Template
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
        $context["isFreeFormProduct"] = (twig_test_empty($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "productName"), "method")) &&  !twig_test_empty($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "freeFormProduct"), "method")));
        // line 2
        if (($context["isFreeFormProduct"] ?? null)) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "freeFormProduct"), "method"), "html", null, true);
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "productName"), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:product.html.twig", "");
    }
}
