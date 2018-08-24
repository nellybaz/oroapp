<?php

/* OroCMSBundle:LoginPage:update.html.twig */
class __TwigTemplate_4f657dd70dbe30ee604cbff39c3cdf61abea66a09c0fd74be979393a3f3c8acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCMSBundle:LoginPage:update.html.twig", 1);
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
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_loginpage_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_loginpage_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.entity_label"))));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_loginpage_index")), "method"), "html", null, true);
        echo "

    ";
        // line 12
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 13
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_crm_login_page_update"))) {
            // line 14
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 19
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 21
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 22
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_loginpage_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 25
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 27
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 29
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.entity_label")));
            // line 30
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCMSBundle:LoginPage:update.html.twig", 30)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 31
            echo "    ";
        }
    }

    // line 34
    public function block_content_data($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["id"] = "login-page-edit";
        // line 36
        echo "
    ";
        // line 37
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 44
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "topContent", array()), 'row'), 1 =>         // line 45
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bottomContent", array()), 'row'), 2 =>         // line 46
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "css", array()), 'row'), 3 =>         // line 47
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "logoImage", array()), 'row'), 4 =>         // line 48
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundImage", array()), 'row'))))));
        // line 54
        echo "
    ";
        // line 55
        $context["data"] = array("formErrors" =>         // line 56
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 57
($context["dataBlocks"] ?? null));
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:LoginPage:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  118 => 59,  116 => 57,  115 => 56,  114 => 55,  111 => 54,  109 => 48,  108 => 47,  107 => 46,  106 => 45,  105 => 44,  104 => 37,  101 => 36,  98 => 35,  95 => 34,  90 => 31,  87 => 30,  84 => 29,  78 => 27,  76 => 25,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  44 => 10,  38 => 8,  35 => 7,  31 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:LoginPage:update.html.twig", "");
    }
}
