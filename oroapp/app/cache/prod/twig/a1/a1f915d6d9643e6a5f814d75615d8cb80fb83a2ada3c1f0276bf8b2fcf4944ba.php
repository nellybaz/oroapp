<?php

/* OroSaleBundle:Quote:createWithReturn.html.twig */
class __TwigTemplate_d293aca114d927a24a572ac4f7631e06cf039fd23713cc96a9447ab32dc17fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroSaleBundle:Quote:update.html.twig", "OroSaleBundle:Quote:createWithReturn.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSaleBundle:Quote:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["addQueryParameters"] = false;
        // line 4
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_create", array("redirect_back" => true));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute(        // line 8
($context["return_route"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["return_route"] ?? null), "route", array()), "oro_sale_quote_index")) : ("oro_sale_quote_index")), (($this->getAttribute(        // line 9
($context["return_route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["return_route"] ?? null), "parameters", array()), array())) : (array())))), "method"), "html", null, true);
        // line 10
        echo "
    ";
        // line 11
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sale_quote_create"))) {
            // line 12
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Quote:createWithReturn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  38 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Quote:createWithReturn.html.twig", "");
    }
}
