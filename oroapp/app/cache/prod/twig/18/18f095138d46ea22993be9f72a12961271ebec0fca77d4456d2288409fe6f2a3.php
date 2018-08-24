<?php

/* OroTaxBundle:Tax:view.html.twig */
class __TwigTemplate_c5d450ec9c2a8e495f9455bca69784c1eb64bd50fa5c588474678f64adef50cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTaxBundle:Tax:view.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroTaxBundle:Tax:view.html.twig", 2);

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
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.code.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "code", array())), "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.description.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "description", array())), "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.rate.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(($context["entity"] ?? null), "rate", array()))), "method"), "html", null, true);
        echo "
    ";
        $context["taxInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 28
($context["taxInfo"] ?? null))))));
        // line 31
        echo "
    ";
        // line 32
        $context["id"] = "tax-tax-view";
        // line 33
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 34
        echo "
    ";
        // line 35
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Tax:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  86 => 34,  83 => 33,  81 => 32,  78 => 31,  76 => 28,  75 => 24,  72 => 23,  67 => 21,  63 => 20,  58 => 19,  55 => 18,  52 => 17,  46 => 14,  43 => 13,  41 => 11,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Tax:view.html.twig", "");
    }
}
