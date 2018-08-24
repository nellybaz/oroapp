<?php

/* OroPricingBundle:PriceAttributePriceList:update.html.twig */
class __TwigTemplate_30c2f48d47e2911f38ebb832084f23638457e20b023accea3a7fad930924d554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroPricingBundle:PriceAttributePriceList:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPricingBundle:PriceAttributePriceList:update.html.twig", 2);
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.entity_label"))));
        // line 7
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_attribute_price_list_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_attribute_price_list_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_attribute_price_list_index")), "method"), "html", null, true);
        echo "
    ";
        // line 13
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 14
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_pricing_price_attribute_price_list_update"))) {
            // line 15
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 22
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 23
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_attribute_price_list_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 26
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 28
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 30
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceattributepricelist.entity_label")));
            // line 31
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPricingBundle:PriceAttributePriceList:update.html.twig", 31)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_content_data($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["id"] = "price-attribute-edit";
        // line 37
        echo "
    ";
        // line 38
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 44
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 45
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fieldName", array()), 'row'), 2 =>         // line 46
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currencies", array()), 'row'))))));
        // line 51
        echo "
    ";
        // line 52
        $context["data"] = array("formErrors" =>         // line 53
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 54
($context["dataBlocks"] ?? null));
        // line 56
        echo "
    ";
        // line 57
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceAttributePriceList:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  120 => 56,  118 => 54,  117 => 53,  116 => 52,  113 => 51,  111 => 46,  110 => 45,  109 => 44,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  94 => 32,  91 => 31,  88 => 30,  82 => 28,  80 => 26,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 12,  43 => 10,  40 => 9,  36 => 1,  34 => 7,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceAttributePriceList:update.html.twig", "");
    }
}
