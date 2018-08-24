<?php

/* OroProductBundle:Product:updateRelatedItems.html.twig */
class __TwigTemplate_f6aa798d61b2b49051bf924a20c4901872112255161d16ae982405dd31c142e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroProductBundle:Product:updateRelatedItems.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product:updateRelatedItems.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product:updateRelatedItems.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%sku%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%name%" => _twig_default_filter((($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array()), "string", array())) : ("")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))));
        // line 7
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_related_items_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_create")));
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
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"));
        echo "
    ";
        // line 13
        $context["html"] = $context["UI"]->getsaveAndCloseButton();
        // line 14
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_product_update"))) {
            // line 15
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton());
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
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
            $context["breadcrumbs"] = array("entity" =>             // line 24
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 27
($context["entity"] ?? null), "sku", array()) . " - ") . $this->getAttribute(($context["entity"] ?? null), "defaultName", array())));
            // line 30
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label")));
            // line 33
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroProductBundle:Product:updateRelatedItems.html.twig", 33)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 34
            echo "    ";
        }
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["id"] = "product-related-items-update";
        // line 39
        echo "    ";
        $context["dataBlocks"] = array();
        // line 40
        echo "
    ";
        // line 41
        $context["data"] = array("formErrors" =>         // line 42
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 43
($context["dataBlocks"] ?? null));
        // line 46
        echo "
    ";
        // line 47
        echo $context["UI"]->getscrollData(($context["id"] ?? null), ($context["data"] ?? null), ($context["entity"] ?? null), ($context["form"] ?? null));
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:updateRelatedItems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  115 => 46,  113 => 43,  112 => 42,  111 => 41,  108 => 40,  105 => 39,  102 => 38,  99 => 37,  94 => 34,  91 => 33,  88 => 32,  82 => 30,  80 => 27,  79 => 24,  77 => 22,  74 => 21,  71 => 20,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 12,  43 => 10,  40 => 9,  36 => 1,  34 => 7,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:updateRelatedItems.html.twig", "");
    }
}
