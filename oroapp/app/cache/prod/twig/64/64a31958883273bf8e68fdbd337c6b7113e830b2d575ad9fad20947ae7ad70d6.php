<?php

/* OroEntityPaginationBundle:Placeholder:viewPagination.html.twig */
class __TwigTemplate_b25115b912c6437549890a96ee220a65817b7ac8953722769e818bcb16daa597 extends Twig_Template
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
        $context["scope"] = twig_constant("Oro\\Bundle\\EntityPaginationBundle\\Manager\\EntityPaginationManager::VIEW_SCOPE");
        // line 2
        $this->loadTemplate("OroEntityPaginationBundle:Placeholder:entityPagination.html.twig", "OroEntityPaginationBundle:Placeholder:viewPagination.html.twig", 2)->display(array_merge($context, array("scope" => ($context["scope"] ?? null))));
    }

    public function getTemplateName()
    {
        return "OroEntityPaginationBundle:Placeholder:viewPagination.html.twig";
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
        return new Twig_Source("", "OroEntityPaginationBundle:Placeholder:viewPagination.html.twig", "");
    }
}
