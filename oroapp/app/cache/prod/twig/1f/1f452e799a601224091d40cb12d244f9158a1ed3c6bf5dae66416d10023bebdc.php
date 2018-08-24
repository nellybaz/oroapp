<?php

/* OroCommerceMenuBundle:CustomerGroupMenu/widget:contextIndex.html.twig */
class __TwigTemplate_ad6bba6699ce9788b2deefd5f35b26ac429dd011b83b1b2e56f8e5e1e2005b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig", "OroCommerceMenuBundle:CustomerGroupMenu/widget:contextIndex.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["gridName"] = "frontend-menu-by-scope-grid";
        // line 4
        $context["gridViewLinkRoute"] = "oro_commerce_menu_customer_group_menu_view";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:CustomerGroupMenu/widget:contextIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:CustomerGroupMenu/widget:contextIndex.html.twig", "");
    }
}
