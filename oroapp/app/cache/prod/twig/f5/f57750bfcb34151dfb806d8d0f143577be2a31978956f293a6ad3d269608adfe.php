<?php

/* OroFormBundle:Autocomplete/fullName:result.html.twig */
class __TwigTemplate_993cb2a9da7e8b0651fcbdb761876f2a22a5c68be7b89609f5930ac2882a7797 extends Twig_Template
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
        echo "<%= highlight(_.escape(fullName)) %><% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.form.add_new') %>)
    </span>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Autocomplete/fullName:result.html.twig";
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
        return new Twig_Source("", "OroFormBundle:Autocomplete/fullName:result.html.twig", "");
    }
}
