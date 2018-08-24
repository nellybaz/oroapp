<?php

/* OroTaxBundle:ProductTaxCode:update.html.twig */
class __TwigTemplate_ca8922f80b21a45beeeb1f5651070374258c287c11e0a80ec9bd240314ee911a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroTaxBundle:ProductTaxCode:update.html.twig", 1);
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
        // line 3
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_product_tax_code_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_product_tax_code_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%taxCode%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "code", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.producttaxcode.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_product_tax_code_index")), "method"), "html", null, true);
        echo "
    ";
        // line 11
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 12
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tax_product_tax_code_update"))) {
            // line 13
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 20
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 21
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tax_product_tax_code_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.producttaxcode.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 24
($context["entity"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "code", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 26
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 28
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.producttaxcode.entity_label")));
            // line 29
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroTaxBundle:ProductTaxCode:update.html.twig", 29)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 30
            echo "    ";
        }
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["id"] = "product-tax-code-edit";
        // line 35
        echo "
    ";
        // line 36
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 43
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "code", array()), 'row'), 1 =>         // line 44
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'))))));
        // line 50
        echo "
    ";
        // line 51
        $context["data"] = array("formErrors" =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 53
($context["dataBlocks"] ?? null));
        // line 55
        echo "
    ";
        // line 56
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:ProductTaxCode:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  115 => 55,  113 => 53,  112 => 52,  111 => 51,  108 => 50,  106 => 44,  105 => 43,  104 => 36,  101 => 35,  98 => 34,  95 => 33,  90 => 30,  87 => 29,  84 => 28,  78 => 26,  76 => 24,  75 => 21,  73 => 20,  70 => 19,  67 => 18,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:ProductTaxCode:update.html.twig", "");
    }
}
