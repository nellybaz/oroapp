<?php

/* OroEntityExtendBundle:ConfigEntityGrid:create.html.twig */
class __TwigTemplate_39bd2e661b9406462131add98ebde7e893ebd62c781ed613b524413ee6aaabbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigEntityGrid:create.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 5
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityextend_entity_create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index")), "method"), "html", null, true);
        echo "
    ";
        // line 9
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_entityconfig_view", "params" => array("id" => "\$id"))), "method");
        // line 13
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityextend_entity_create")) {
            // line 14
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_entityextend_entity_create")), "method"));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_entityconfig_update", "params" => array("id" => "\$id"))), "method"));
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
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.entities"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.new_entity"));
        // line 32
        echo "
    ";
        // line 33
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_stats($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_content_data($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["id"] = "configentity-create";
        // line 42
        echo "    ";
        $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context, ($context["form"] ?? null));
        // line 43
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 44
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 45
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 46
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest'));
        // line 48
        echo "
    ";
        // line 49
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigEntityGrid:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  107 => 48,  105 => 46,  104 => 45,  103 => 44,  101 => 43,  98 => 42,  95 => 41,  92 => 40,  85 => 37,  82 => 36,  76 => 33,  73 => 32,  70 => 26,  67 => 25,  60 => 22,  57 => 18,  54 => 17,  51 => 14,  48 => 13,  46 => 9,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:ConfigEntityGrid:create.html.twig", "");
    }
}
