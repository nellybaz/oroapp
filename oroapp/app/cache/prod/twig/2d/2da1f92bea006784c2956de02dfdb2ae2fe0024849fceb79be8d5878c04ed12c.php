<?php

/* OroEntityConfigBundle:Config:view.html.twig */
class __TwigTemplate_a2085c61f0d0412d55bd0d06730f8bfcff273339c7d776ec5b20f9391ceeafcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 5
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityconfig_manage")) {
            // line 8
            $context["audit_entity_class"] = twig_replace_filter($this->getAttribute(($context["entity"] ?? null), "classname", array()), "\\", "_");
            // line 9
            $context["audit_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), ($context["entity_name"] ?? null))) : (($context["entity_name"] ?? null))));
            // line 10
            $context["audit_path"] = "oro_entityconfig_audit";
            // line 11
            $context["audit_show_change_history"] = true;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityconfig_manage")) {
            // line 16
            echo "        ";
            if ($this->getAttribute(($context["extend_config"] ?? null), "is", array(0 => "is_extend"), "method")) {
                // line 17
                echo "            ";
                $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 17)->display(array_merge($context, array("alias" => "oro_field_config_model", "options" => array("entity_id" => $this->getAttribute(                // line 19
($context["entity"] ?? null), "id", array())))));
                // line 21
                echo "        ";
            }
            // line 22
            echo "
        ";
            // line 23
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))));
            echo "
        ";
            // line 24
            echo $context["entityConfig"]->getdisplayLayoutActions(($context["button_config"] ?? null));
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
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.entity.plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 33
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), ($context["entity_name"] ?? null))) : (($context["entity_name"] ?? null)))));
        // line 35
        echo "
    ";
        // line 36
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 39
    public function block_stats($context, array $blocks = array())
    {
        // line 40
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "created", array()));
        echo "</li>
    <li>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updated", array()));
        echo "</li>
    ";
        // line 42
        if (($context["link"] ?? null)) {
            // line 43
            echo "    <li>
        ";
            // line 44
            echo $context["UI"]->getlink(array("path" =>             // line 45
($context["link"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.info.records_count.label", array("%count%" => ((            // line 46
array_key_exists("entity_count", $context)) ? (_twig_default_filter(($context["entity_count"] ?? null), 0)) : (0))))));
            // line 47
            echo "
    </li>
    ";
        } else {
            // line 50
            echo "    <li>
        <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.info.records_count.label", array("%count%" => ((array_key_exists("entity_count", $context)) ? (_twig_default_filter(($context["entity_count"] ?? null), 0)) : (0)))), "html", null, true);
            echo "</span>
    </li>
    ";
        }
    }

    // line 56
    public function block_content_data($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if (twig_length_filter($this->env, ($context["require_js"] ?? null))) {
            // line 58
            echo "        <script type=\"text/javascript\">
            require(";
            // line 59
            echo twig_jsonencode_filter(($context["require_js"] ?? null));
            echo ")
        </script>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        ob_start();
        // line 64
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_widget_info", array("id" => $this->getAttribute(        // line 66
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.entity.information.label")));
        // line 68
        echo "
    ";
        $context["entityInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "
    ";
        // line 71
        ob_start();
        // line 72
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_widget_unique_keys", array("id" => $this->getAttribute(        // line 74
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.entity.unique.label")));
        // line 76
        echo "
    ";
        $context["uniqueKeysWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "
    ";
        // line 79
        ob_start();
        // line 80
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_widget_entity_fields", array("id" => $this->getAttribute(        // line 82
($context["entity"] ?? null), "id", array())))));
        // line 83
        echo "
    ";
        $context["entityFieldsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
    ";
        // line 86
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.block_titles.general.label"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 91
($context["entityInformationWidget"] ?? null))), 1 => array("data" => array(0 =>         // line 92
($context["uniqueKeysWidget"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.block_titles.fields.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 98
($context["entityFieldsWidget"] ?? null))))));
        // line 102
        echo "
    ";
        // line 103
        $context["id"] = "entityConfigView";
        // line 104
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 105
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 105,  207 => 104,  205 => 103,  202 => 102,  200 => 98,  199 => 92,  198 => 91,  197 => 86,  194 => 85,  190 => 83,  188 => 82,  186 => 80,  184 => 79,  181 => 78,  177 => 76,  175 => 74,  173 => 72,  171 => 71,  168 => 70,  164 => 68,  162 => 66,  160 => 64,  158 => 63,  155 => 62,  149 => 59,  146 => 58,  143 => 57,  140 => 56,  132 => 51,  129 => 50,  124 => 47,  122 => 46,  121 => 45,  120 => 44,  117 => 43,  115 => 42,  109 => 41,  102 => 40,  99 => 39,  93 => 36,  90 => 35,  88 => 33,  87 => 30,  85 => 29,  82 => 28,  75 => 24,  71 => 23,  68 => 22,  65 => 21,  63 => 19,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  48 => 1,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  37 => 7,  35 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config:view.html.twig", "");
    }
}
