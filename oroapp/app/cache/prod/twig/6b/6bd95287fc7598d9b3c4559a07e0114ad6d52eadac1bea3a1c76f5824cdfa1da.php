<?php

/* OroAddressBundle:widget:addressBook.html.twig */
class __TwigTemplate_8b97dd2e9a23d68eb84ee4a10a582741aaab9d8377b23b61be8a1bf374c8a5da extends Twig_Template
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
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAddressBundle:widget:addressBook.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["addressBookOptions"] = array("view" => array("view" => "oroaddress/js/app/views/address-book-widget-view", "wid" => $this->getAttribute($this->getAttribute(        // line 7
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "addresses" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment(        // line 8
($context["addressListUrl"] ?? null)), "addressListUrl" =>         // line 9
($context["addressListUrl"] ?? null), "addressCreateUrl" =>         // line 10
($context["addressCreateUrl"] ?? null), "addressUpdateRoute" => array("route" =>         // line 12
($context["addressUpdateRoute"] ?? null), "params" => array(        // line 14
($context["ownerParam"] ?? null) => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "addressDeleteRoute" => array("route" =>         // line 18
($context["addressDeleteRoute"] ?? null), "params" => array(        // line 20
($context["ownerParam"] ?? null) => $this->getAttribute(($context["entity"] ?? null), "id", array())))));
        // line 25
        echo "
<div class=\"widget-content\" ";
        // line 26
        echo $context["UI"]->getrenderPageComponentAttributes(($context["addressBookOptions"] ?? null));
        echo ">
    ";
        // line 28
        echo "    ";
        $this->loadTemplate("OroAddressBundle:Js:address.js.twig", "OroAddressBundle:widget:addressBook.html.twig", 28)->display($context);
        // line 29
        echo "
    ";
        // line 31
        echo "    <div class=\"widget-actions\">
        ";
        // line 32
        if (( !array_key_exists("address_edit_acl_resource", $context) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["address_edit_acl_resource"] ?? null)))) {
            // line 33
            echo "        <button class=\"btn btn-mini btn-primary btn-uppercase\" type=\"button\" data-action-name=\"add_address\"> + ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Address"), "html", null, true);
            echo "</button>
        ";
        }
        // line 35
        echo "    </div>
    <div class=\"list-box map-box\" id=\"address-book\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroAddressBundle:widget:addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  52 => 33,  50 => 32,  47 => 31,  44 => 29,  41 => 28,  37 => 26,  34 => 25,  32 => 20,  31 => 18,  30 => 14,  29 => 12,  28 => 10,  27 => 9,  26 => 8,  25 => 7,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle:widget:addressBook.html.twig", "");
    }
}
