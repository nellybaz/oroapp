<?php

/* OroFormBundle:Autocomplete/icon:selection.html.twig */
class __TwigTemplate_eb15a19cd0a8a591df0241cdf1bc61fc6d8cf25b43e7e9d315f0a1a3813b780b extends Twig_Template
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
<i class=\"<%= id %> hide-text\"></i>&nbsp;<%= text %>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Autocomplete/icon:selection.html.twig";
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
        return new Twig_Source("", "OroFormBundle:Autocomplete/icon:selection.html.twig", "");
    }
}
