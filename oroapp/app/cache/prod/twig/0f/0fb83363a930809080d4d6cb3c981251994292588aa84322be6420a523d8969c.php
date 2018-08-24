<?php

/* OroEntityBundle:Entities:view.html.twig */
class __TwigTemplate_b6ef93af054fd4391c858ceda32e89cc3d44ccdfb056f67818a502c8da0cd4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEntityBundle:Entities:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroEntityBundle:Entities:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 5
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))), "%recordName%" => _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(        // line 6
($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.item", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array())))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_update", array("entityName" =>             // line 12
($context["entity_name"] ?? null), "id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(            // line 13
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))), "method"), "html", null, true);
            // line 14
            echo "
    ";
        }
        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_delete", array("entityName" =>             // line 18
($context["entity_class"] ?? null), "id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_index", array("entityName" =>             // line 19
($context["entity_class"] ?? null))), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-account", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(            // line 23
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))), "method"), "html", null, true);
            // line 24
            echo "
    ";
        }
    }

    // line 28
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 30
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.plural_label"), "entityTitle" => _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(        // line 33
($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.item", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array())))), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_index", array("entityName" =>         // line 35
($context["entity_name"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 36
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
        // line 39
        echo "
    ";
        // line 40
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 43
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["data"] = array("dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "data" => array(0 =>         // line 52
$context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null), ($context["entity_class"] ?? null))))))));
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
        return "OroEntityBundle:Entities:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 56,  100 => 55,  98 => 52,  96 => 47,  93 => 46,  88 => 43,  82 => 40,  79 => 39,  77 => 36,  76 => 35,  75 => 33,  74 => 30,  72 => 29,  69 => 28,  63 => 24,  61 => 23,  60 => 21,  59 => 19,  58 => 18,  56 => 17,  53 => 16,  49 => 14,  47 => 13,  46 => 12,  44 => 11,  41 => 10,  38 => 9,  34 => 1,  32 => 6,  31 => 5,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Entities:view.html.twig", "");
    }
}
