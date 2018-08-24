<?php

/* OroEntityPaginationBundle:Placeholder:editPagination.html.twig */
class __TwigTemplate_319c293adc9b901057d6c6dd8e1b2c04abdd79277b3c81cb748684edb77bad9f extends Twig_Template
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
        $context["scope"] = twig_constant("Oro\\Bundle\\EntityPaginationBundle\\Manager\\EntityPaginationManager::EDIT_SCOPE");
        // line 2
        $this->loadTemplate("OroEntityPaginationBundle:Placeholder:entityPagination.html.twig", "OroEntityPaginationBundle:Placeholder:editPagination.html.twig", 2)->display(array_merge($context, array("scope" => ($context["scope"] ?? null))));
    }

    public function getTemplateName()
    {
        return "OroEntityPaginationBundle:Placeholder:editPagination.html.twig";
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
        return new Twig_Source("", "OroEntityPaginationBundle:Placeholder:editPagination.html.twig", "");
    }
}
