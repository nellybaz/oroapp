<?php

/* OroTagBundle:Tag/Autocomplete:result.html.twig */
class __TwigTemplate_6d24942d7b23b3b89eaec12bbc7bbf61b1d2862c59ecb2cc428f0154f004697a extends Twig_Template
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
        echo "<%= highlight(name) %><% if(typeof isNew != 'undefined') { %>
<span class=\"select2__result-entry-info\">
    ( <%= _.__('oro.tag.inline_editing.new_tag') %> )
</span>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Tag/Autocomplete:result.html.twig";
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
        return new Twig_Source("", "OroTagBundle:Tag/Autocomplete:result.html.twig", "");
    }
}
