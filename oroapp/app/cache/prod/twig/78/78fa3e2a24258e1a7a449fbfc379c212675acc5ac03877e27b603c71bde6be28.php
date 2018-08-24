<?php

/* OroOrganizationBundle:Js:businessUnitResult.html.twig */
class __TwigTemplate_ffa065ca256c999c80559e15d617d8b113ea4a8f7032438488b3e651d3c99fed extends Twig_Template
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
        echo "&nbsp;<%= highlight(_.escape(name)) %>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Js:businessUnitResult.html.twig";
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
        return new Twig_Source("", "OroOrganizationBundle:Js:businessUnitResult.html.twig", "");
    }
}
