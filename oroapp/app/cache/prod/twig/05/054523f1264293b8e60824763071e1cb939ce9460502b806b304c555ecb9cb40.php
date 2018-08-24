<?php

/* OroCustomerBundle:Address/widget:addressBook.html.twig */
class __TwigTemplate_09ddb88d055696253c6c60439fb3d796475abe83980e7c352ed9bec09545b55d extends Twig_Template
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
        echo "<div class=\"widget-content\">
    ";
        // line 3
        echo "    ";
        $this->loadTemplate("OroCustomerBundle:Address/Js:address.js.twig", "OroCustomerBundle:Address/widget:addressBook.html.twig", 3)->display($context);
        // line 4
        echo "
    ";
        // line 6
        echo "    <div class=\"widget-actions\">
        ";
        // line 7
        if (( !$this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array(), "any", false, true), "addressCreate", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array()), "addressCreate", array())))) {
            // line 8
            echo "            <button class=\"btn btn-mini btn-primary btn-uppercase\" type=\"button\" data-action-name=\"add_address\"> + ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.address.add"), "html", null, true);
            echo "</button>
        ";
        }
        // line 10
        echo "    </div>

    <div class=\"list-box map-box\" id=\"address-book\" data-page-component-module=\"orocustomer/js/app/components/customer-address-book-component\"
         data-page-component-options=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Address/widget:addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  39 => 10,  33 => 8,  31 => 7,  28 => 6,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Address/widget:addressBook.html.twig", "");
    }
}
