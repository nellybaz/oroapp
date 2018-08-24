<?php

/* OroOrderBundle:Order/Datagrid:shippingAddress.html.twig */
class __TwigTemplate_3378e459a0c9fe2708f5cfb0c8ae1a91e3ed2133f92c87fc622e8671a796066c extends Twig_Template
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
        $context["__internal_0eaaefa1707abe8cce68f84d4119045ae36a11346a87812e28da8d03d0f2ed93"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroOrderBundle:Order/Datagrid:shippingAddress.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["shippingAddress"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "shippingAddress"), "method");
        // line 4
        echo $context["__internal_0eaaefa1707abe8cce68f84d4119045ae36a11346a87812e28da8d03d0f2ed93"]->getrenderAddress(($context["shippingAddress"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:shippingAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:shippingAddress.html.twig", "");
    }
}
