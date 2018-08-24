<?php

/* OroCallBundle:Call/action:logCallButton.html.twig */
class __TwigTemplate_f90ab4705c4fb75877b3224abd2288477b7515112cacded4d7e606650c1fd0b4 extends Twig_Template
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
        $context["cssClass"] = "btn icons-holder-text";
        // line 2
        $this->loadTemplate("OroCallBundle:Call:activityLink.html.twig", "OroCallBundle:Call/action:logCallButton.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call/action:logCallButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call/action:logCallButton.html.twig", "");
    }
}
