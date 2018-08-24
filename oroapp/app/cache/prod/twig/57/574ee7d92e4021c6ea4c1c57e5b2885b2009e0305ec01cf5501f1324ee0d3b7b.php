<?php

/* OroEntityBundle:Entities:update.html.twig */
class __TwigTemplate_34447933096f4590b383e2d303da2af0a1acbde157ea736b3b1ec2fac65de992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityBundle:Entities:update.html.twig", 1);
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
        // line 4
        $context["entityName"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? (_twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(        // line 5
($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.item", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["entity_config"] ?? null), "get", array(0 => "label"), "method"))))));

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" =>         // line 8
($context["entityName"] ?? null))));
        // line 10
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_update", array("entityName" => ($context["entity_name"] ?? null), "id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 12
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute($this->getAttribute(($context["entity_config"] ?? null), "getId", array()), "getClassName", array()), "\\", "_");
        // line 13
        $context["audit_entity_id"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 14
        $context["audit_title"] = _twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method")), "N/A");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_delete", array("entityName" =>             // line 19
($context["entity_class"] ?? null), "id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_index", array("entityName" =>             // line 20
($context["entity_class"] ?? null))), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 22
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-account", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(            // line 24
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))), "method"), "html", null, true);
            // line 25
            echo "
        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 28
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_index", array("entityName" => ($context["entity_name"] ?? null)))), "method"), "html", null, true);
        echo "
    ";
        // line 29
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_entity_view", "params" => array("entityName" =>         // line 31
($context["entity_name"] ?? null), "id" => "\$id"))), "method");
        // line 33
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CREATE", ("entity:" . ($context["entity_class"] ?? null)))) {
            // line 34
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_entity_update", "params" => array("entityName" =>             // line 36
($context["entity_name"] ?? null)))), "method"));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ("entity:" . ($context["entity_class"] ?? null))))) {
            // line 40
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_entity_update", "params" => array("entityName" =>             // line 42
($context["entity_name"] ?? null), "id" => "\$id"))), "method"));
            // line 44
            echo "    ";
        }
        // line 45
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 48
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.plural_label"), "entityTitle" =>         // line 53
($context["entityName"] ?? null), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_index", array("entityName" =>         // line 56
($context["entity_name"] ?? null))), "indexLabel" => _twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 57
($context["entity_config"] ?? null), "get", array(0 => "label"), "method")), "N/A"))));
        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 65
    public function block_stats($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 69
    public function block_content_data($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $context["id"] = "custom_entity-update";
        // line 71
        echo "    ";
        $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context, ($context["form"] ?? null));
        // line 72
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 74
($context["dataBlocks"] ?? null));
        // line 76
        echo "
    ";
        // line 77
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 77,  147 => 76,  145 => 74,  144 => 73,  142 => 72,  139 => 71,  136 => 70,  133 => 69,  126 => 66,  123 => 65,  117 => 62,  114 => 61,  112 => 57,  111 => 56,  110 => 53,  108 => 49,  105 => 48,  98 => 45,  95 => 44,  93 => 42,  91 => 40,  88 => 39,  85 => 38,  83 => 36,  81 => 34,  78 => 33,  76 => 31,  75 => 29,  70 => 28,  65 => 26,  62 => 25,  60 => 24,  59 => 22,  58 => 20,  57 => 19,  55 => 18,  52 => 17,  49 => 16,  45 => 1,  43 => 14,  41 => 13,  39 => 12,  37 => 10,  35 => 8,  32 => 6,  31 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Entities:update.html.twig", "");
    }
}
