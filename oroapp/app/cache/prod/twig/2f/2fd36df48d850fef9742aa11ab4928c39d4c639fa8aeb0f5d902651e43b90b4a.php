<?php

/* OroTaxBundle:Customer:tax_code_view.html.twig */
class __TwigTemplate_00383f11cb9205b1e4f9d3c41dfd9374790171eaaa474c2e55de98bbfe46e41d extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaxBundle:Customer:tax_code_view.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        if (($context["entity"] ?? null)) {
            // line 5
            echo "        ";
            echo $context["UI"]->getentityViewLink(($context["entity"] ?? null), $this->getAttribute(($context["entity"] ?? null), "code", array()), "oro_tax_customer_tax_code_view");
            echo "
    ";
        } elseif (        // line 6
($context["groupCustomerTaxCode"] ?? null)) {
            // line 7
            echo "        ";
            echo $context["UI"]->getentityViewLink(($context["groupCustomerTaxCode"] ?? null), $this->getAttribute(($context["groupCustomerTaxCode"] ?? null), "code", array()), "oro_tax_customer_tax_code_view");
            echo "
        (";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.customer_group.view.label"), "html", null, true);
            echo ")
    ";
        }
        $context["taxCode"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "
";
        // line 12
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxcode.label"), ($context["taxCode"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Customer:tax_code_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  41 => 8,  36 => 7,  34 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Customer:tax_code_view.html.twig", "");
    }
}
