<?php

/* OroCMSBundle:Page:update.html.twig */
class __TwigTemplate_bd98f9141f16af4669c0103460894fbc5a083d8e51e1362761c1c30ae8179cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCMSBundle:Page:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCMSBundle:Page:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 6
        if (($context["entityId"] ?? null)) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute($this->getAttribute(            // line 7
($context["entity"] ?? null), "defaultTitle", array()), "string", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_label"))));
        } else {

            $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_label"))));
        }
        // line 12
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_index")), "method"), "html", null, true);
        echo "
    ";
        // line 18
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 19
        echo "    ";
        if ((($context["entityId"] ?? null) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_cms_page_update"))) {
            // line 20
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 25
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 27
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 28
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute(            // line 31
($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 33
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 35
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_label")));
            // line 36
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCMSBundle:Page:update.html.twig", 36)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 37
            echo "    ";
        }
    }

    // line 40
    public function block_content_data($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["id"] = "page-edit";
        // line 42
        echo "
    ";
        // line 43
        ob_start();
        // line 44
        echo "        <div class=\"page-content-editor\">
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'widget');
        echo "
        </div>
    ";
        $context["pageContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
    ";
        // line 49
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 56
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titles", array()), 'row'), 1 =>         // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.content"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 65
($context["pageContent"] ?? null))))));
        // line 69
        echo "
    ";
        // line 70
        $context["data"] = array("formErrors" =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 72
($context["dataBlocks"] ?? null));
        // line 74
        echo "
    ";
        // line 75
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:Page:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 75,  140 => 74,  138 => 72,  137 => 71,  136 => 70,  133 => 69,  131 => 65,  130 => 57,  129 => 56,  128 => 49,  125 => 48,  119 => 45,  116 => 44,  114 => 43,  111 => 42,  108 => 41,  105 => 40,  100 => 37,  97 => 36,  94 => 35,  88 => 33,  86 => 31,  85 => 28,  83 => 27,  80 => 26,  77 => 25,  70 => 22,  67 => 21,  64 => 20,  61 => 19,  59 => 18,  55 => 17,  49 => 15,  46 => 14,  42 => 1,  40 => 12,  34 => 7,  31 => 6,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:Page:update.html.twig", "");
    }
}
