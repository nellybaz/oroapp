<?php

/* OroFrontendBundle:Organization:logo.html.twig */
class __TwigTemplate_d23688f5cecaa0a3653b4f165fc7254c93439b86f5095e812241fd49c855f62c extends Twig_Template
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
        return new Twig_Source("", "OroFrontendBundle:Organization:logo.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/Organization/logo.html.twig");
    }
}
