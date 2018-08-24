<?php

/* OroIntegrationBundle:Integration:update.html.twig */
class __TwigTemplate_09adef595745eb02810a61c6015bc05dbec033235c642863df9415917a533b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroIntegrationBundle:Integration:update.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroIntegrationBundle:Integration:update.html.twig", 2);
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), $this->env->getExtension('Oro\Bundle\IntegrationBundle\Twig\IntegrationExtension')->getThemes(($context["form"] ?? null)));
        // line 6
        $context["entity"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array());
        // line 7
        $context["formAction"] = ((array_key_exists("formAction", $context)) ? (        // line 8
($context["formAction"] ?? null)) : ((($this->getAttribute(        // line 9
($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_create")))));
        // line 12
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%integration.name%" => $this->getAttribute(            // line 13
($context["entity"] ?? null), "name", array()))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 19
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 20
            echo "            <div class=\"badge badge-enabled status-enabled\">
                <i class=\"icon-status-enabled fa-circle\"></i>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.enabled.active.label"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 23
            echo "            <div class=\"badge badge-disabled status-disabled\">
                <i class=\"icon-status-disabled fa-circle\"></i>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.enabled.inactive.label"), "html", null, true);
            echo "</div>
        ";
        }
        // line 26
        echo "    </div>
";
    }

    // line 29
    public function block_navButtons($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_index")), "method"), "html", null, true);
        echo "

    ";
        // line 32
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 33
            echo "        ";
            if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
                // line 34
                echo "        <div class=\"btn-group\" ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("view" => "orointegration/js/app/views/integration-sync-view", "options" => array("integrationName" => $this->getAttribute(                // line 37
($context["entity"] ?? null), "name", array())))), "method"), "html", null, true);
                // line 39
                echo ">
            ";
                // line 40
                ob_start();
                // line 41
                echo "                ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_integration_sync_button", $context)) ? (_twig_default_filter(($context["oro_integration_sync_button"] ?? null), "oro_integration_sync_button")) : ("oro_integration_sync_button")), array("entity" => ($context["entity"] ?? null)));
                // line 42
                echo "                ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_integration_force_sync_button", $context)) ? (_twig_default_filter(($context["oro_integration_force_sync_button"] ?? null), "oro_integration_force_sync_button")) : ("oro_integration_force_sync_button")), array("entity" => ($context["entity"] ?? null)));
                // line 43
                echo "            ";
                $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 44
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "pinnedDropdownButton", array(0 => array("html" => ($context["buttonsHtml"] ?? null))), "method"), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "choices", array()))) {
            // line 50
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_integration_index", "params" => array("_enableContentProviders" => "mainMenu"))), "method");
            // line 54
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_integration_create")) {
                // line 55
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_integration_create")), "method"));
                // line 58
                echo "        ";
            }
            // line 59
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_integration_update"))) {
                // line 60
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_integration_update", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method"));
                // line 64
                echo "        ";
            }
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
        // line 67
        echo "
";
    }

    // line 70
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 72
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 73
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 76
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
            // line 78
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 80
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.entity_label")));
            // line 81
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroIntegrationBundle:Integration:update.html.twig", 81)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 82
            echo "    ";
        }
    }

    // line 85
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 87
    public function block_content_data($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["id"] = "channel-update";
        // line 89
        echo "    ";
        $context["dataBlocks"] = array();
        // line 90
        echo "
    ";
        // line 91
        if (($this->getAttribute(($context["form"] ?? null), "synchronizationSettings", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "synchronizationSettings", array()), "count", array()))) {
            // line 92
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Synchronization Settings"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 96
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "synchronizationSettings", array()), 'widget')))))));
            // line 99
            echo "    ";
        }
        // line 100
        echo "
    ";
        // line 101
        if (($this->getAttribute(($context["form"] ?? null), "mappingSettings", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "mappingSettings", array()), "count", array()))) {
            // line 102
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mapping Settings"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 106
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mappingSettings", array()), 'widget')))))));
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) && (((array_key_exists("isWidgetContext", $context)) ? (_twig_default_filter(($context["isWidgetContext"] ?? null), false)) : (false)) === false))) {
            // line 112
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statuses"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 117
$context["dataGrid"]->getrenderGrid("oro-integration-status-grid", array("integrationId" => $this->getAttribute(            // line 118
($context["entity"] ?? null), "id", array()), "integrationType" => $this->getAttribute(            // line 119
($context["entity"] ?? null), "type", array())))))))));
            // line 124
            echo "    ";
        }
        // line 125
        echo "
    ";
        // line 126
        $context["dataBlocks"] = twig_array_merge(array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic Information"), "data" => array(0 =>         // line 131
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget')))))),         // line 133
($context["dataBlocks"] ?? null));
        // line 134
        echo "
    ";
        // line 135
        $context["data"] = array("formErrors" => ((        // line 136
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 137
($context["dataBlocks"] ?? null));
        // line 139
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Integration:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 139,  252 => 137,  251 => 136,  250 => 135,  247 => 134,  245 => 133,  244 => 131,  243 => 126,  240 => 125,  237 => 124,  235 => 119,  234 => 118,  233 => 117,  231 => 112,  229 => 111,  226 => 110,  223 => 109,  221 => 106,  219 => 102,  217 => 101,  214 => 100,  211 => 99,  209 => 96,  207 => 92,  205 => 91,  202 => 90,  199 => 89,  196 => 88,  193 => 87,  188 => 85,  183 => 82,  180 => 81,  177 => 80,  171 => 78,  169 => 76,  168 => 73,  166 => 72,  163 => 71,  160 => 70,  155 => 67,  149 => 65,  146 => 64,  143 => 60,  140 => 59,  137 => 58,  134 => 55,  131 => 54,  128 => 50,  126 => 49,  123 => 48,  120 => 47,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  102 => 40,  99 => 39,  97 => 37,  95 => 34,  92 => 33,  90 => 32,  84 => 30,  81 => 29,  76 => 26,  71 => 24,  68 => 23,  63 => 21,  60 => 20,  58 => 19,  52 => 17,  49 => 16,  45 => 1,  42 => 13,  39 => 12,  37 => 9,  36 => 8,  35 => 7,  33 => 6,  31 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Integration:update.html.twig", "");
    }
}
