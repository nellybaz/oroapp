<?php

/* OroPricingBundle:Datagrid/Column:total.html.twig */
class __TwigTemplate_664ab54e0289263f857df85b1ddb88a52b7449adf604db4adf41397c56ed6cb8 extends Twig_Template
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
        if ( !(null === $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "total"), "method"))) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "total"), "method"), array("currency" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method")));
            echo "
";
        } else {
            // line 4
            echo "    N/A
";
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Datagrid/Column:total.html.twig";
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
        return new Twig_Source("", "OroPricingBundle:Datagrid/Column:total.html.twig", "");
    }
}
