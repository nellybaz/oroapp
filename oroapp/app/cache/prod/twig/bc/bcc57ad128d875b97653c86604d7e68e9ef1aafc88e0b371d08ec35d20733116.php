<?php

/* OroEntityConfigBundle:Attribute:update.html.twig */
class __TwigTemplate_985c1cbcaea726f61d5716468957a6d099563cbd6eea459a0fc73e47f4a138ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroEntityConfigBundle:Config:fieldUpdate.html.twig", "OroEntityConfigBundle:Attribute:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroEntityConfigBundle:Config:fieldUpdate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute(($context["field"] ?? null), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%attributeName%" => $this->getAttribute(            // line 4
($context["field"] ?? null), "fieldName", array()))));
        } else {

            $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute.entity_label"))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_index", array("alias" => ($context["entityAlias"] ?? null)))), "method"), "html", null, true);
        echo "
    ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_create")) {
            // line 12
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_attribute_index", "params" => array("alias" => ($context["entityAlias"] ?? null)))), "method");
            // line 13
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_attribute_create", "params" => array("alias" =>             // line 15
($context["entityAlias"] ?? null)))), "method"));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_update")) {
            // line 19
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_attribute_update", "params" => array("id" => "\$id"))), "method"));
            // line 23
            echo "    ";
        }
        // line 24
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 27
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["entityTitle"] = (($this->getAttribute(($context["field"] ?? null), "id", array())) ? (_twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 29
($context["field_config"] ?? null), "get", array(0 => "label"), "method")), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fieldName", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute.entity_label")))));
        // line 32
        echo "
    ";
        // line 33
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_index", array("alias" =>         // line 35
($context["entityAlias"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 36
($context["attributesLabel"] ?? null)), "entityTitle" =>         // line 37
($context["entityTitle"] ?? null));
        // line 39
        echo "
    ";
        // line 40
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Attribute:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  90 => 39,  88 => 37,  87 => 36,  86 => 35,  85 => 33,  82 => 32,  80 => 29,  78 => 28,  75 => 27,  68 => 24,  65 => 23,  62 => 19,  59 => 18,  56 => 17,  54 => 15,  52 => 13,  49 => 12,  47 => 11,  42 => 10,  39 => 9,  35 => 1,  29 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Attribute:update.html.twig", "");
    }
}
