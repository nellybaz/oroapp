<?php

/* OroCallBundle:Call/widget:baseCalls.html.twig */
class __TwigTemplate_8457521234b4c0566b639cca3114dd186833f0d52a1d7104b3e3ac494fa730ce extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCallBundle:Call/widget:baseCalls.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("widget-simplyfied-calls-grid", ($context["datagridParameters"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call/widget:baseCalls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call/widget:baseCalls.html.twig", "");
    }
}
