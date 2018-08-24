<?php

/* OroCustomerBundle:Windows:javascript.html.twig */
class __TwigTemplate_4b4884531d28adcd517adc9c645dba18183e0101c069b2612bb7eb3ae4dab4ed extends Twig_Template
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
        $this->loadTemplate("OroWindowsBundle:Include:javascript.html.twig", "OroCustomerBundle:Windows:javascript.html.twig", 1)->display(array_merge($context, array("urlRootRoute" => "oro_api_customer_get_windows")));
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Windows:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "OroCustomerBundle:Windows:javascript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/Windows/javascript.html.twig");
    }
}
