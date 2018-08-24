<?php

/* OroEntityConfigBundle:AttributeFamily:update.html.twig */
class __TwigTemplate_b813d8bbd36096f421f431764084c3b030d486409c585e97f350a28acf555768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityConfigBundle:AttributeFamily:update.html.twig", 1);
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
        // line 4
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%familyName%" => $this->getAttribute($this->getAttribute(            // line 5
($context["entity"] ?? null), "defaultLabel", array()), "string", array()))));
            // line 6
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        } else {
            // line 8
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_create", array("alias" => ($context["entityAlias"] ?? null)));

            $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_label"))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_family_delete", ($context["entity"] ?? null))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("delete", ($context["entity"] ?? null)))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_delete", array("id" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_index", array("alias" =>             // line 16
($context["entityAlias"] ?? null))), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_label"))), "method"), "html", null, true);
            // line 20
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_index", array("alias" => ($context["entityAlias"] ?? null)))), "method"), "html", null, true);
        echo "

    ";
        // line 25
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_attribute_family_index", "params" => array("alias" =>         // line 27
($context["entityAlias"] ?? null)))), "method");
        // line 29
        echo "
    ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_family_create")) {
            // line 31
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_attribute_family_create", "params" => array("alias" =>             // line 33
($context["entityAlias"] ?? null)))), "method"));
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 38
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_attribute_family_update", "params" => array("id" => "\$id", "alias" =>             // line 40
($context["entityAlias"] ?? null)))), "method"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 47
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 49
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 50
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_family_index", array("alias" =>             // line 51
($context["entityAlias"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 53
($context["entity"] ?? null), "defaultLabel", array(), "method"));
            // line 55
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute_family.entity_label")));
            // line 58
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroEntityConfigBundle:AttributeFamily:update.html.twig", 58)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 59
            echo "    ";
        }
        // line 60
        echo "
";
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["id"] = "attribute-family-create";
        // line 65
        echo "    ";
        $context["data"] = array("formErrors" =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" => $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context,         // line 67
($context["form"] ?? null)), "hiddenData" =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest'));
        // line 70
        echo "
    ";
        // line 71
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:AttributeFamily:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 71,  152 => 70,  150 => 68,  149 => 67,  148 => 66,  146 => 65,  143 => 64,  140 => 63,  135 => 60,  132 => 59,  129 => 58,  126 => 57,  120 => 55,  118 => 53,  117 => 51,  116 => 50,  114 => 49,  111 => 48,  108 => 47,  102 => 44,  99 => 43,  96 => 42,  94 => 40,  92 => 38,  90 => 37,  87 => 36,  84 => 35,  82 => 33,  80 => 31,  78 => 30,  75 => 29,  73 => 27,  72 => 25,  66 => 23,  61 => 21,  58 => 20,  56 => 18,  55 => 16,  54 => 15,  52 => 14,  49 => 13,  46 => 12,  42 => 1,  37 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:AttributeFamily:update.html.twig", "");
    }
}
