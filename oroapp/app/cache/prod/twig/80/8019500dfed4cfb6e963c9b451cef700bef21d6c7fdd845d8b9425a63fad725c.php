<?php

/* OroEntityBundle:Select/entity_field:selection_multiple_with_relations.html.twig */
class __TwigTemplate_aef2a8385259aec6e0819b16ab5f9743c5a7ff511b79ebeea83a723710650183 extends Twig_Template
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
        echo "<% _.each(context.splitFieldId(id), function (val, index, list) { %>&#32;<%= _.escape(val.entity.label) %>&nbsp;<b><%= _.escape(val.label) %></b>&nbsp;<% if (index < list.length - 1) { %>><% } %><% }) %>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Select/entity_field:selection_multiple_with_relations.html.twig";
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
        return new Twig_Source("", "OroEntityBundle:Select/entity_field:selection_multiple_with_relations.html.twig", "");
    }
}
