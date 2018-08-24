<?php

/* OroLocaleBundle:Localization:update.html.twig */
class __TwigTemplate_95ca450844cb9e32e0c1f415303de8c08a70e9e71b9212e27712264d31627609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroLocaleBundle:Localization:update.html.twig", 1);
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
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroLocaleBundle:Localization:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.entity_label"))));
        // line 9
        if ( !array_key_exists("formAction", $context)) {
            // line 10
            $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_locale_localization_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_locale_localization_create")));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 15
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_locale_localization_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 18
($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.navigation.view", array("%name%" => $this->getAttribute(($context["entity"] ?? null), "name", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.entity_label"))))));
        // line 20
        echo "
    ";
        // line 21
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block_navButtons($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 27
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_locale_localization_index"));
        echo "
    ";
        // line 28
        if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_locale_localization_update")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_locale_localization_create"))) {
            // line 29
            echo "        ";
            $context["html"] = $context["UI"]->getsaveAndStayButton(array("route" => "oro_locale_localization_update", "params" => array("id" => "\$id")));
            // line 33
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_locale_localization_view")) {
                // line 34
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndCloseButton(array("route" => "oro_locale_localization_view", "params" => array("id" => "\$id"))));
                // line 38
                echo "        ";
            }
            // line 39
            echo "
        ";
            // line 40
            echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
            echo "
    ";
        }
        // line 42
        echo "
";
    }

    // line 45
    public function block_content_data($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["id"] = "localization-edit";
        // line 47
        echo "
    ";
        // line 48
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget'))))));
        // line 59
        echo "
    ";
        // line 60
        $context["data"] = array("formErrors" =>         // line 61
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 62
($context["dataBlocks"] ?? null));
        // line 64
        echo "
    ";
        // line 65
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle:Localization:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 65,  117 => 64,  115 => 62,  114 => 61,  113 => 60,  110 => 59,  108 => 54,  107 => 48,  104 => 47,  101 => 46,  98 => 45,  93 => 42,  88 => 40,  85 => 39,  82 => 38,  79 => 34,  76 => 33,  73 => 29,  71 => 28,  67 => 27,  61 => 25,  58 => 24,  52 => 21,  49 => 20,  47 => 18,  46 => 15,  44 => 14,  41 => 13,  37 => 1,  34 => 10,  32 => 9,  30 => 5,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroLocaleBundle:Localization:update.html.twig", "");
    }
}
