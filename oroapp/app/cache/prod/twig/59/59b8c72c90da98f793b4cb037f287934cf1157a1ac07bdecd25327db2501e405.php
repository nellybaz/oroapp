<?php

/* OroDashboardBundle:Dashboard:chartWidget.html.twig */
class __TwigTemplate_6c570d161aca2ad13c39aa2550404d2df8796803b792309f4856b363743a1f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:chartWidget.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["chartColors"] = array(0 => "#ACD39C", 1 => "#BE9DE2", 2 => "#6598DA", 3 => "#ECC87E", 4 => "#A4A2F6", 5 => "#6487BF", 6 => "#65BC87", 7 => "#8985C2", 8 => "#ECB574", 9 => "#84A377");
        // line 4
        $context["chartFontSize"] = 9;
        // line 5
        $context["chartFontColor"] = "#454545";
        // line 6
        $context["chartHighlightColor"] = "#FF5E5E";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:chartWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:chartWidget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/chartWidget.html.twig");
    }
}
