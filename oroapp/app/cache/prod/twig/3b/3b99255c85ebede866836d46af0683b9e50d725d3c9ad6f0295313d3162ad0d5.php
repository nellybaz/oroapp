<?php

/* OroEntityExtendBundle:ConfigFieldGrid:create.html.twig */
class __TwigTemplate_45b5da510c1cfd34d836623ef30dffd53c0a489ed5b36d8f8384f12820a5c5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig", 1);
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 4
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
        // line 6
        if ( !array_key_exists("formAction", $context)) {
            // line 7
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityextend_field_create", array("id" => ($context["entity_id"] ?? null)));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" => ($context["entity_id"] ?? null)))), "method"), "html", null, true);
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "saveActionButton", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue"), "route" => "oro_entityextend_field_update", "params" => array("id" => "\$id"))), "method"), "html", null, true);
        // line 16
        echo "
";
    }

    // line 19
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 21
            echo "        ";
            $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.entities"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.new_field"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" =>             // line 28
($context["entity_id"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(            // line 29
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
            // line 33
            echo "    ";
        }
        // line 34
        echo "
    ";
        // line 35
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 38
    public function block_content_data($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["id"] = "configfield-create";
        // line 40
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 41
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" => $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context,         // line 42
($context["form"] ?? null)), "hiddenData" =>         // line 43
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest'));
        // line 45
        echo "
    ";
        // line 46
        $context["options"] = array("typeId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 47
($context["form"] ?? null), "type", array()), "vars", array()), "id", array()), "fieldId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 48
($context["form"] ?? null), "fieldName", array()), "vars", array()), "id", array()));
        // line 50
        echo "
    <div data-page-component-module=\"oroentityextend/js/extend-field-form-component\"
         data-page-component-options=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 53
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  102 => 52,  98 => 50,  96 => 48,  95 => 47,  94 => 46,  91 => 45,  89 => 43,  88 => 42,  87 => 41,  85 => 40,  82 => 39,  79 => 38,  73 => 35,  70 => 34,  67 => 33,  65 => 29,  64 => 28,  62 => 21,  59 => 20,  56 => 19,  51 => 16,  49 => 12,  44 => 11,  41 => 10,  37 => 1,  34 => 7,  32 => 6,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig", "");
    }
}
