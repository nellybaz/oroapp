<?php

/* OroPricingBundle:PriceList:view.html.twig */
class __TwigTemplate_ae37523b77c5c9534667fd117204889cb843cb6cec2322c3650d384554def926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPricingBundle:PriceList:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPricingBundle:PriceList:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_list_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroPricingBundle:PriceList:view.html.twig", 17)->display(array_merge($context, array("alias" => "oro_product_price", "options" => array("price_list_id" => $this->getAttribute(        // line 19
($context["entity"] ?? null), "id", array()), "unique_job_slug" => $this->getAttribute(($context["entity"] ?? null), "id", array())))));
        // line 21
        echo "
    ";
        // line 22
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
    }

    // line 25
    public function block_content_data($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        ob_start();
        // line 27
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.widgets.pricing_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_list_info", array("id" => $this->getAttribute(        // line 30
($context["entity"] ?? null), "id", array())))));
        // line 31
        echo "
    ";
        $context["pricingInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["pricingInformationWidget"] ?? null))));
        // line 35
        echo "
    ";
        // line 36
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.sections.general"), "class" => "active", "subblocks" =>         // line 40
($context["generalSectionBlocks"] ?? null)));
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 51
$context["dataGrid"]->getrenderGrid("price-list-product-prices-grid", array("price_list_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 56
        echo "
    ";
        // line 57
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 64
$context["dataGrid"]->getrenderGrid("price-list-customers-grid", array("price_list_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 69
        echo "
    ";
        // line 70
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 77
$context["dataGrid"]->getrenderGrid("price-list-customer-groups-grid", array("price_list_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 82
        echo "
    ";
        // line 83
        $context["id"] = "price-list-view";
        // line 84
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 85
        echo "
    ";
        // line 86
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceList:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 86,  118 => 85,  115 => 84,  113 => 83,  110 => 82,  108 => 77,  107 => 70,  104 => 69,  102 => 64,  101 => 57,  98 => 56,  96 => 51,  95 => 44,  92 => 43,  90 => 40,  89 => 36,  86 => 35,  84 => 34,  81 => 33,  77 => 31,  75 => 30,  73 => 27,  70 => 26,  67 => 25,  61 => 22,  58 => 21,  56 => 19,  54 => 17,  51 => 16,  44 => 13,  42 => 11,  41 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceList:view.html.twig", "");
    }
}
