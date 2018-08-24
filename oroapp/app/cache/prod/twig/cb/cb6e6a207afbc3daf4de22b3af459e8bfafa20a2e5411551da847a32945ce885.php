<?php

/* OroEmailBundle:Email/action:sendEmailButton.html.twig */
class __TwigTemplate_ab5beef4178cc87d68ea92d447709ce252886a8fb2f976873c066b41823194fb extends Twig_Template
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
        $this->loadTemplate("OroEmailBundle:Email:activityLink.html.twig", "OroEmailBundle:Email/action:sendEmailButton.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/action:sendEmailButton.html.twig";
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
        return new Twig_Source("", "OroEmailBundle:Email/action:sendEmailButton.html.twig", "");
    }
}
