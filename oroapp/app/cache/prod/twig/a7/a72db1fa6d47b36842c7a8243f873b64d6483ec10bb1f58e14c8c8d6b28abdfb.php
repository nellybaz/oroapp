<?php

/* OroCommerceMenuBundle:menuUpdate:view.html.twig */
class __TwigTemplate_acfdb058a5732c5787a5536d145b143044525e99cd2c101fec92a72bdead75a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:menuUpdate:view.html.twig", "OroCommerceMenuBundle:menuUpdate:view.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:menuUpdate:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["movedMessage"] = "oro.commercemenu.menuupdate.moved_success_message";
        // line 4
        $context["dividerCreatedMessage"] = "oro.commercemenu.menuupdate.divider_created";
        // line 5
        $context["resetedMessage"] = "oro.commercemenu.menuupdate.reset_message";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:menuUpdate:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:menuUpdate:view.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/menuUpdate/view.html.twig");
    }
}
