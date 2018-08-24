<?php

/* OroEntityConfigBundle:AttributeFamily:view.html.twig */
class __TwigTemplate_c18634edf304d2980a910fac60f52d800944ef2807c79dc1eee01286dc309f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEntityConfigBundle:AttributeFamily:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityConfigBundle:AttributeFamily:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute($this->getAttribute(        // line 4
($context["entity"] ?? null), "defaultLabel", array()), "string", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_family_update")) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_update", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_label"))), "method"), "html", null, true);
            // line 11
            echo "
    ";
        }
        // line 13
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_family_delete") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("delete", ($context["entity"] ?? null)))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_delete", array("id" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_index", array("alias" =>             // line 16
($context["entityAlias"] ?? null))), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_label"))), "method"), "html", null, true);
            // line 20
            echo "
    ";
        }
        // line 22
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
    }

    // line 25
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 27
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_index", array("alias" =>         // line 28
($context["entityAlias"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 30
($context["entity"] ?? null), "defaultLabel", array(), "method"));
        // line 32
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_content_data($context, array $blocks = array())
    {
        // line 36
        echo "
    ";
        // line 37
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.sections.attribute_family.attributes"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 44
$context["dataGrid"]->getrenderGrid("attribute-groups-grid", array("family_id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))))))));
        // line 50
        echo "
    ";
        // line 51
        $context["id"] = "attributefamily-view";
        // line 52
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 53
        echo "
    ";
        // line 54
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:AttributeFamily:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  103 => 53,  100 => 52,  98 => 51,  95 => 50,  93 => 44,  92 => 37,  89 => 36,  86 => 35,  79 => 32,  77 => 30,  76 => 28,  75 => 27,  73 => 26,  70 => 25,  63 => 22,  59 => 20,  57 => 18,  56 => 16,  55 => 15,  53 => 14,  50 => 13,  46 => 11,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:AttributeFamily:view.html.twig", "");
    }
}
