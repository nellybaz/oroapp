<?php

/* OroEntityBundle:Select/entity_field:result.html.twig */
class __TwigTemplate_a472a92f021ba6afa8f402e2111a17cbc2dbdd6ac938eedebc3805905307cb32 extends Twig_Template
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
        echo "<%= highlight(_.escape(text)) %>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Select/entity_field:result.html.twig";
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
        return new Twig_Source("", "OroEntityBundle:Select/entity_field:result.html.twig", "");
    }
}
