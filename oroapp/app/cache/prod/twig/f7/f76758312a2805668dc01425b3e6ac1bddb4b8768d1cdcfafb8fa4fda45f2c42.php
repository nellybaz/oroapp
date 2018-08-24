<?php

/* OroSalesBundle:Dashboard:opportunityByStatus.html.twig */
class __TwigTemplate_e2c0a05e5ed729dd5271be67e3fe307e1fe747f7ba7f9e7b2e9832f89e8de922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:chartWidget.html.twig", "OroSalesBundle:Dashboard:opportunityByStatus.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:chartWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute(($context["chartView"] ?? null), "render", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:opportunityByStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:opportunityByStatus.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Dashboard/opportunityByStatus.html.twig");
    }
}
