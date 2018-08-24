<?php

/* OroCustomerBundle:ApplicationMenu:dotsMenu.html.twig */
class __TwigTemplate_d7e5b9a7f531b03780c76e51ee4e60c308ed8d1241949bf346fd5e1bbbe0ad2b extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("frontend_dots_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:ApplicationMenu:dotsMenu.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:ApplicationMenu:dotsMenu.html.twig", "");
    }
}
