<?php

/* OroOrderBundle:Customer:orders_view.html.twig */
class __TwigTemplate_f9b68632d87daa766a9dfa46adaab86f88ca9beea78fb46104c4001d4b8b2683 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrderBundle:Customer:orders_view.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["dataGrid"]->getrenderGrid("customer-orders-grid", array("customer_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Customer:orders_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Customer:orders_view.html.twig", "");
    }
}
