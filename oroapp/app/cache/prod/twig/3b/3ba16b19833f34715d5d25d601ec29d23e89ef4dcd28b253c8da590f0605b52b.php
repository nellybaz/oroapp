<?php

/* OroProductBundle:Brand:update.html.twig */
class __TwigTemplate_893fc2f453fdeb0ebe0bee4a9f8ff90cb3728081eff50c81bd3ae1d8e595f257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroProductBundle:Brand:update.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Brand:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 6
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_brand_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_brand_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 14
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_brand_index"));
        echo "

    ";
        // line 16
        $context["html"] = $context["UI"]->getsaveAndCloseButton(array("route" => "oro_product_brand_index"));
        // line 17
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_product_brand_create")) {
            // line 18
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndNewButton(array("route" => "oro_product_brand_create")));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_product_brand_update"))) {
            // line 23
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton(array("route" => "oro_product_brand_update", "params" => array("id" => "\$id"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "

";
    }

    // line 32
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 34
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 35
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_brand_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 38
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 40
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 42
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.entity_label")));
            // line 43
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroProductBundle:Brand:update.html.twig", 43)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 44
            echo "    ";
        }
    }

    // line 47
    public function block_content_data($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["id"] = "brand-edit";
        // line 49
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.form.update.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 55
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "names", array()), 'row'), 1 =>         // line 56
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row'), 2 =>         // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 3 =>         // line 58
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptions", array()), 'row'), 4 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shortDescriptions", array()), 'row'))))));
        // line 64
        echo "
    ";
        // line 65
        $context["data"] = array("formErrors" =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 67
($context["dataBlocks"] ?? null));
        // line 69
        echo "
    ";
        // line 70
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Brand:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 70,  130 => 69,  128 => 67,  127 => 66,  126 => 65,  123 => 64,  121 => 59,  120 => 58,  119 => 57,  118 => 56,  117 => 55,  115 => 49,  112 => 48,  109 => 47,  104 => 44,  101 => 43,  98 => 42,  92 => 40,  90 => 38,  89 => 35,  87 => 34,  84 => 33,  81 => 32,  73 => 28,  70 => 27,  67 => 23,  64 => 22,  61 => 21,  58 => 18,  55 => 17,  53 => 16,  48 => 14,  42 => 12,  39 => 11,  35 => 1,  33 => 7,  32 => 6,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Brand:update.html.twig", "");
    }
}
