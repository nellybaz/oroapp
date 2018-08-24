<?php

/* OroCommerceMenuBundle:GlobalMenu:index.html.twig */
class __TwigTemplate_82fb92e562012c994e4feac93f8f4dadb9d111d76c17b1451726b423bfe571e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:menuUpdate:index.html.twig", "OroCommerceMenuBundle:GlobalMenu:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:menuUpdate:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["breadcrumbs"] = array("entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.menuupdate.roots_plural_label"));
        // line 6
        $context["gridName"] = "frontend-menu-global-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:GlobalMenu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  26 => 6,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:GlobalMenu:index.html.twig", "");
    }
}
