<?php

/* OroSalesBundle:Lead/Autocomplete:selection.html.twig */
class __TwigTemplate_5a0ae14e3cabbc952d52aa6e5bf23ae2c1ac8ee9589026db5e797a691230b400 extends Twig_Template
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
        echo "<%= _.escape(name) %><%if (typeof firstName != 'undefined' && typeof lastName != 'undefined') { %> - <%= _.escape(firstName) %> <%= _.escape(lastName) %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Lead/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Lead/Autocomplete:selection.html.twig", "");
    }
}
