<?php

/* OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig */
class __TwigTemplate_eb9cb60e20ac233dc2bdc082b777593e566b0d4642d22c6e821292be3f61bf19 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->renderBreadCrumbs($this->env, "application_menu");
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig";
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
        return new Twig_Source("", "OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig", "");
    }
}
