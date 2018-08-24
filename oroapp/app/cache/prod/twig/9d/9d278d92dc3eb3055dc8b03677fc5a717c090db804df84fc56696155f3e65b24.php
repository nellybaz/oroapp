<?php

/* OroEntityBundle:Choice/entity_field:selection.html.twig */
class __TwigTemplate_3283b04978bece7169858487d79aad66e7500b220eda4e8b4b46f88f341b13cc extends Twig_Template
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
        echo "<% var field = context.getFieldData(id); %><% if (!_.isUndefined(field.relation_type)) { %><%= _.escape(field.related_entity_plural_label) %>&#32;(<b><%= _.escape(text) %></b>)<% } else { %><%= _.escape(text) %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Choice/entity_field:selection.html.twig";
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
        return new Twig_Source("", "OroEntityBundle:Choice/entity_field:selection.html.twig", "");
    }
}
