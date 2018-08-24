<?php

/* OroTaxBundle:CustomerTaxCode:view.html.twig */
class __TwigTemplate_b39d245fbfce44d694caa4aa247f425d8f22afd3f9550bd3b136f12b70ac6f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTaxBundle:CustomerTaxCode:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroTaxBundle:CustomerTaxCode:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%taxCode%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "code", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_customer_tax_code_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "code", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_content_data($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.code.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "code", array())), "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.description.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "description", array())), "method"), "html", null, true);
        echo "
    ";
        $context["customerTaxCodeInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 27
($context["customerTaxCodeInfo"] ?? null))))));
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid("tax-customer-grid", array("customer_tax_code_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"));
        echo "
    ";
        $context["customerGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
    ";
        // line 35
        ob_start();
        // line 36
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid("tax-customer-group-grid", array("customer_tax_code_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"));
        echo "
    ";
        $context["customerGroupGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.customers.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 44
($context["customerGrid"] ?? null)))))));
        // line 47
        echo "
    ";
        // line 48
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.customer_groups.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 53
($context["customerGroupGrid"] ?? null)))))));
        // line 56
        echo "
    ";
        // line 57
        $context["id"] = "tax-customer-tax-code-view";
        // line 58
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:CustomerTaxCode:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  116 => 59,  113 => 58,  111 => 57,  108 => 56,  106 => 53,  105 => 48,  102 => 47,  100 => 44,  99 => 39,  96 => 38,  90 => 36,  88 => 35,  85 => 34,  79 => 32,  77 => 31,  74 => 30,  72 => 27,  71 => 23,  68 => 22,  63 => 20,  58 => 19,  55 => 18,  52 => 17,  46 => 14,  43 => 13,  41 => 11,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:CustomerTaxCode:view.html.twig", "");
    }
}
