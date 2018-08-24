<?php

/* OroCMSBundle:LoginPage:index.html.twig */
class __TwigTemplate_9c378984806721afb68a5d666613a72fd1c32f3ba48f03f31c511a6b0fbc535e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroCMSBundle:LoginPage:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCMSBundle:LoginPage:index.html.twig", 3);
        // line 5
        $context["gridName"] = "cms-login-page-grid";
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:LoginPage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 6,  26 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:LoginPage:index.html.twig", "");
    }
}
