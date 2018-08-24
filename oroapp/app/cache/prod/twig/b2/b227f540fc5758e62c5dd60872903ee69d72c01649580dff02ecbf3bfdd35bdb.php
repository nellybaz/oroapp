<?php

/* OroFormBundle:Autocomplete:icon/result.html.twig */
class __TwigTemplate_4c155028d4556775817da2e678e391b04aba760831f9c41916a35cc547f117cf extends Twig_Template
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
        echo "<% if (text.indexOf('fa') !== -1) { text = text.replace('fa-', '').replace(/-/g, ' '); } %>
<i class=\"<%= id %> hide-text\"></i>&nbsp;<%= highlight(text) %>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Autocomplete:icon/result.html.twig";
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
        return new Twig_Source("", "OroFormBundle:Autocomplete:icon/result.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/Autocomplete/icon/result.html.twig");
    }
}
