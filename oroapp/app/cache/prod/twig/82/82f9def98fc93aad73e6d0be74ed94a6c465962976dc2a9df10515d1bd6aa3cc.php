<?php

/* OroContactBundle:ContactAddress/widget:addressBook.html.twig */
class __TwigTemplate_52bd3b367803bfe90fdfe542e8929a6378340f51d95901cb273deb0cfc1b3334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroAddressBundle:widget:addressBook.html.twig", "OroContactBundle:ContactAddress/widget:addressBook.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroAddressBundle:widget:addressBook.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["addressListUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_contact_addresses", array("contactId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 3
        $context["addressCreateUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_address_create", array("contactId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 4
        $context["addressUpdateRoute"] = "oro_contact_address_update";
        // line 5
        $context["addressDeleteRoute"] = "oro_api_delete_contact_address";
        // line 6
        $context["ownerParam"] = "contactId";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroContactBundle:ContactAddress/widget:addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:ContactAddress/widget:addressBook.html.twig", "");
    }
}
