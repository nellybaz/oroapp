<?php

/* OroCustomerBundle:EntityPagination:editPagination.html.twig */
class __TwigTemplate_7a045bf8ad78f1fcf16e6f86293ceb7aeacb601cdeef36a1c59cc01726c88406 extends Twig_Template
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
        $this->loadTemplate("OroEntityPaginationBundle:Placeholder:entityPagination.html.twig", "OroCustomerBundle:EntityPagination:editPagination.html.twig", 2)->display(array_merge($context, array("scope" =>         // line 3
($context["scope"] ?? null), "first_route" => "oro_customer_frontend_entity_pagination_first", "previous_route" => "oro_customer_frontend_entity_pagination_previous", "next_route" => "oro_customer_frontend_entity_pagination_next", "last_route" => "oro_customer_frontend_entity_pagination_last")));
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:EntityPagination:editPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:EntityPagination:editPagination.html.twig", "");
    }
}
