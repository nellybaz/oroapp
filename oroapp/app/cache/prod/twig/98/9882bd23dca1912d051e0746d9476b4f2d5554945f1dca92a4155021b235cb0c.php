<?php

/* OroEntityConfigBundle:Config:fieldUpdate.html.twig */
class __TwigTemplate_732cdfeaa2bb4360028adb5e56d2dc8020a594f99e95b7746c479d9432ffadcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityConfigBundle:Config:fieldUpdate.html.twig", 1);
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEntityBundle:Form:fields.html.twig"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 8
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))), "%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 9
($context["field"] ?? null), "fieldName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "fieldName", array()), "N/A")) : ("N/A"))))));
        // line 12
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "entity", array()), "className", array()), "\\", "_");
        // line 13
        $context["audit_title"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["field"] ?? null), "fieldName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "fieldName", array()), "N/A")) : ("N/A"))) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))));
        // line 14
        $context["audit_path"] = "oro_entityconfig_audit_field";
        // line 15
        $context["audit_entity_id"] = $this->getAttribute(($context["field"] ?? null), "id", array());
        // line 16
        $context["audit_show_change_history"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_navButtons($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityconfig_manage")) {
            // line 20
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute($this->getAttribute(($context["field"] ?? null), "entity", array()), "id", array())))), "method"), "html", null, true);
            echo "
        ";
            // line 21
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_entityconfig_view", "params" => array("id" => "\$entity.id"))), "method");
            // line 25
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityextend_field_create")) {
                // line 26
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_entityextend_field_create", "params" => array("id" => "\$entity.id"))), "method"));
                // line 30
                echo "        ";
            }
            // line 31
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_entityconfig_field_update", "params" => array("id" => "\$id"))), "method"));
            // line 35
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 39
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if (( !array_key_exists("entityTitle", $context) &&  !array_key_exists("breadcrumbs", $context))) {
            // line 41
            echo "        ";
            $context["entityTitle"] = (($this->getAttribute(($context["field"] ?? null), "id", array())) ? (_twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 42
($context["field_config"] ?? null), "get", array(0 => "label"), "method")), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fieldName", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.info.new_field.label")));
            // line 45
            echo "
        ";
            // line 46
            $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.entity.plural_label"), "entityTitle" =>             // line 50
($context["entityTitle"] ?? null), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute($this->getAttribute(            // line 53
($context["field"] ?? null), "entity", array()), "id", array()))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(            // line 54
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if ((array_key_exists("require_js", $context) && twig_length_filter($this->env, ($context["require_js"] ?? null)))) {
            // line 65
            echo "        <script type=\"text/javascript\">
            require(";
            // line 66
            echo twig_jsonencode_filter(($context["require_js"] ?? null));
            echo ")
        </script>
    ";
        }
        // line 69
        echo "
    ";
        // line 70
        $context["id"] = "configfield-update";
        // line 71
        echo "    ";
        $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context, ($context["form"] ?? null));
        // line 72
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 74
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest'));
        // line 77
        echo "
    ";
        // line 78
        if (((array_key_exists("non_extended_entities_classes", $context) && $this->getAttribute($this->getAttribute(        // line 79
($context["form"] ?? null), "extend", array(), "any", false, true), "relation", array(), "any", true, true)) && ($this->getAttribute(        // line 80
($context["field"] ?? null), "type", array()) != twig_constant("Oro\\Bundle\\EntityExtendBundle\\Extend\\RelationType::ONE_TO_MANY")))) {
            // line 82
            echo "        ";
            $context["options"] = array("nonExtendedEntitiesClassNames" =>             // line 83
($context["non_extended_entities_classes"] ?? null));
            // line 85
            echo "        <div data-page-component-module=\"oroentityextend/js/bidirectional-only-for-extended-component\"
             data-page-component-options=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 89
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:fieldUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 89,  153 => 86,  150 => 85,  148 => 83,  146 => 82,  144 => 80,  143 => 79,  142 => 78,  139 => 77,  137 => 75,  136 => 74,  135 => 73,  133 => 72,  130 => 71,  128 => 70,  125 => 69,  119 => 66,  116 => 65,  113 => 64,  110 => 63,  104 => 60,  101 => 59,  98 => 58,  96 => 54,  95 => 53,  94 => 50,  93 => 46,  90 => 45,  88 => 42,  86 => 41,  83 => 40,  80 => 39,  72 => 35,  69 => 31,  66 => 30,  63 => 26,  60 => 25,  58 => 21,  53 => 20,  50 => 19,  47 => 18,  43 => 1,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  33 => 12,  31 => 9,  30 => 8,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config:fieldUpdate.html.twig", "");
    }
}
