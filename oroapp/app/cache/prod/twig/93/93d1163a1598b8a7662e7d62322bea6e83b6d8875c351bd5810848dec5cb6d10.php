<?php

/* OroFrontendBundle:Organization:logo.html.twig */
class __TwigTemplate_b1b2447478cc14b7729b04231b6f399f28580b03a6676f8317f94f12f20ce6c8 extends Twig_Template
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
        $this->loadTemplate("@OroUI/Default/logo.html.twig", "OroFrontendBundle:Organization:logo.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:Organization:logo.html.twig";
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
        return new Twig_Source("", "OroFrontendBundle:Organization:logo.html.twig", "");
    }
}
