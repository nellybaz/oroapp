<?php

/* OroEntityPaginationBundle:Placeholder:editPagination.html.twig */
class __TwigTemplate_cc0e21c0cfd94128d43f65958be40ecf6cb3c0296efb57f0b2e0884a55bbec06 extends Twig_Template
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
        return new Twig_Source("", "OroEntityPaginationBundle:Placeholder:editPagination.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityPaginationBundle/Resources/views/Placeholder/editPagination.html.twig");
    }
}
