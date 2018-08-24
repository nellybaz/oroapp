<?php

/* OroTagBundle:Tag/Autocomplete:selection.html.twig */
class __TwigTemplate_81af4a08cf088024e4982d581c0ae4ffee02543ff8f1bd2c08e2ef7d46bd929e extends Twig_Template
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
        echo "<%= highlight(name) %>
";
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Tag/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroTagBundle:Tag/Autocomplete:selection.html.twig", "");
    }
}
