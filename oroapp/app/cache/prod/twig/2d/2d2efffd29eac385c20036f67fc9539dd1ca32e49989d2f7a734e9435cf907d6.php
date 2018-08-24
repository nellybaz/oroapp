<?php

/* OroCMSBundle:ContentBlock:update.html.twig */
class __TwigTemplate_e5c62c291c293ccc7cf41962cf62bcc6423987d74226543032d427d35ad86352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCMSBundle:ContentBlock:update.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
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
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(            // line 4
($context["entity"] ?? null), "alias", array()))));
        }
        // line 7
        $context["formAction"] = ((array_key_exists("formAction", $context)) ? (_twig_default_filter(($context["formAction"] ?? null), (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_update", array("id" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_create"))))) : ((($this->getAttribute(        // line 7
($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_update", array("id" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_create")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 15
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 16
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 19
($context["entity"] ?? null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "alias", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 21
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.entity_label")));
            // line 24
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCMSBundle:ContentBlock:update.html.twig", 24)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 25
            echo "    ";
        }
    }

    // line 28
    public function block_navButtons($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_index")), "method"), "html", null, true);
        echo "
    ";
        // line 32
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_cms_content_block_view", "params" => array("id" => "\$id"))), "method");
        // line 38
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_cms_content_block_update")) {
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_cms_content_block_update", "params" => array("id" => "\$id"))), "method"));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 49
    public function block_content_data($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["id"] = "contentblock-edit";
        // line 51
        echo "
    ";
        // line 52
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.sections.general.label"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "alias", array()), 'row'), 1 =>         // line 60
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titles", array()), 'row'), 2 =>         // line 61
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.sections.use_for.label"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'widget'))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contentVariants", array()), 'widget'))))));
        // line 80
        echo "
    ";
        // line 81
        $context["data"] = array("formErrors" =>         // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 83
($context["dataBlocks"] ?? null));
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
        return "OroCMSBundle:ContentBlock:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 86,  124 => 85,  122 => 83,  121 => 82,  120 => 81,  117 => 80,  115 => 76,  114 => 69,  113 => 61,  112 => 60,  111 => 59,  110 => 52,  107 => 51,  104 => 50,  101 => 49,  94 => 46,  91 => 45,  88 => 39,  85 => 38,  83 => 32,  79 => 31,  73 => 29,  70 => 28,  65 => 25,  62 => 24,  59 => 23,  53 => 21,  51 => 19,  50 => 16,  48 => 15,  45 => 14,  42 => 13,  38 => 1,  36 => 8,  35 => 7,  34 => 8,  33 => 7,  30 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:ContentBlock:update.html.twig", "");
    }
}
