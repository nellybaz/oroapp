<?php

/* OroCustomerBundle:Windows:javascript.html.twig */
class __TwigTemplate_94da13c4abd4624067164d91a05edb750ebc2a5e15c4f274110ca7e0f603af26 extends Twig_Template
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
        return new Twig_Source("", "OroCustomerBundle:Windows:javascript.html.twig", "");
    }
}
