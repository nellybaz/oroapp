<?php

/* OroEntityBundle:Choice/entity:selection.html.twig */
class __TwigTemplate_3dbd9dfadd6973bde5078a20bf8a45ad8776800b02833b6984b664fdcecf9c1f extends Twig_Template
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
        echo "<i class=\"<%= \$(element).data('icon') %> hide-text\"></i>&nbsp;<%= _.escape(text) %>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Choice/entity:selection.html.twig";
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
        return new Twig_Source("", "OroEntityBundle:Choice/entity:selection.html.twig", "");
    }
}
