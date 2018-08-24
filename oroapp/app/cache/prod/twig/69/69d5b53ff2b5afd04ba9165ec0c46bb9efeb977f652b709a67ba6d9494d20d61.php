<?php

/* OroDashboardBundle:Dashboard:update.html.twig */
class __TwigTemplate_b903a027ec179fbb8e5fd2be230ce9eeda72835ceba2dd7ddc71ba176a44c705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroDashboardBundle:Dashboard:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_label"), "%label%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "label", array()))));
        // line 5
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 6
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 12
            echo "        ";
            $context["breadcrumbs"] = array("entity" => array(), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.management_title"), "entityTitle" => $this->getAttribute(            // line 16
($context["entity"] ?? null), "label", array()));
            // line 18
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 20
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_label")));
            // line 21
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroDashboardBundle:Dashboard:update.html.twig", 21)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 22
            echo "    ";
        }
    }

    // line 25
    public function block_navButtons($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_index")), "method"), "html", null, true);
        echo "
    ";
        // line 27
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_dashboard_view", "params" => array("id" => "\$id", "change_dashboard" => true, "_enableContentProviders" => "mainMenu"))), "method");
        // line 35
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dashboard_create")) {
            // line 36
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_dashboard_create")), "method"));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dashboard_update"))) {
            // line 41
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_dashboard_update", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method"));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 52
    public function block_content_data($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context["id"] = "task-form";
        // line 54
        echo "
    ";
        // line 55
        ob_start();
        // line 56
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row');
        echo "
        ";
        // line 57
        if ($this->getAttribute(($context["form"] ?? null), "startDashboard", array(), "any", true, true)) {
            // line 58
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "startDashboard", array()), 'row');
            echo "
        ";
        }
        // line 60
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 61
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
            echo "
    ";
        }
        // line 63
        echo "    ";
        $context["dataBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
    ";
        // line 65
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 72
($context["dataBlock"] ?? null))))));
        // line 77
        echo "
    ";
        // line 78
        $context["data"] = array("formErrors" => ((        // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 80
($context["dataBlocks"] ?? null));
        // line 82
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 82,  148 => 80,  147 => 79,  146 => 78,  143 => 77,  141 => 72,  140 => 65,  137 => 64,  134 => 63,  128 => 61,  125 => 60,  119 => 58,  117 => 57,  112 => 56,  110 => 55,  107 => 54,  104 => 53,  101 => 52,  94 => 49,  91 => 48,  88 => 41,  85 => 40,  82 => 39,  79 => 36,  76 => 35,  74 => 27,  69 => 26,  66 => 25,  61 => 22,  58 => 21,  55 => 20,  49 => 18,  47 => 16,  45 => 12,  42 => 11,  39 => 10,  35 => 1,  33 => 7,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:update.html.twig", "");
    }
}
