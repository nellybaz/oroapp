<?php

/* OroFormBundle:Autocomplete/fullName:selection.html.twig */
class __TwigTemplate_d1650b049eb7e97662193ffa6bd2ee3e139c48b315e1f055ddb150e440eafd4d extends Twig_Template
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
        echo "<%= _.escape(fullName) %><% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.form.add_new') %>)
    </span>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Autocomplete/fullName:selection.html.twig";
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
        return new Twig_Source("", "OroFormBundle:Autocomplete/fullName:selection.html.twig", "");
    }
}
