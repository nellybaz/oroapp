<?php

/* OroTaxBundle:TaxJurisdiction:view.html.twig */
class __TwigTemplate_9893d8270dae11d2dedd4760a6b44b73a4be3fe8c0b6ff878fdaf21ca73e641c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTaxBundle:TaxJurisdiction:view.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroTaxBundle:TaxJurisdiction:view.html.twig", 2);

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
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_jurisdiction_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
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
        $context["codes"] = array();
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "zipCodes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["zipCode"]) {
            // line 21
            echo "            ";
            if ( !(null === $this->getAttribute($context["zipCode"], "zipCode", array()))) {
                // line 22
                echo "                ";
                $context["codes"] = twig_array_merge(($context["codes"] ?? null), array(0 => $this->getAttribute($context["zipCode"], "zipCode", array())));
                // line 23
                echo "            ";
            } elseif (( !(null === $this->getAttribute($context["zipCode"], "zipRangeStart", array())) &&  !(null === $this->getAttribute($context["zipCode"], "zipRangeEnd", array())))) {
                // line 24
                echo "                ";
                $context["codes"] = twig_array_merge(($context["codes"] ?? null), array(0 => (($this->getAttribute($context["zipCode"], "zipRangeStart", array()) . "-") . $this->getAttribute($context["zipCode"], "zipRangeEnd", array()))));
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zipCode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        echo twig_escape_filter($this->env, twig_join_filter(($context["codes"] ?? null), ", "), "html", null, true);
        echo "
    ";
        $context["zipCodes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        ob_start();
        // line 30
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.code.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "code", array())), "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.description.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "description", array())), "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.region.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "regionName", array())), "method"), "html", null, true);
        echo "
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.country.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "country", array())), "method"), "html", null, true);
        echo "
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxjurisdiction.zip_codes.label"), 1 => ($context["zipCodes"] ?? null)), "method"), "html", null, true);
        echo "
    ";
        $context["taxJurisdictionInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 41
($context["taxJurisdictionInfo"] ?? null))))));
        // line 44
        echo "
    ";
        // line 45
        $context["id"] = "tax-jusrisdiction-view";
        // line 46
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 47
        echo "
    ";
        // line 48
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:TaxJurisdiction:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  132 => 47,  129 => 46,  127 => 45,  124 => 44,  122 => 41,  121 => 37,  118 => 36,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  96 => 30,  93 => 29,  87 => 27,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  61 => 20,  58 => 19,  55 => 18,  52 => 17,  46 => 14,  43 => 13,  41 => 11,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:TaxJurisdiction:view.html.twig", "");
    }
}
