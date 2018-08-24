<?php

/* OroChannelBundle:Channel:update.html.twig */
class __TwigTemplate_af0eb9c989fc10c40d8c6ee0af984ab73e0fbeceada5e3d18a4e30c37120aa5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroChannelBundle:Channel:update.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["channelMacro"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroChannelBundle:Channel:update.html.twig", 2);
        // line 4
        $context["entity"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array());
        // line 5
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_create")));
        // line 7
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%channel.name%" => $this->getAttribute(            // line 8
($context["entity"] ?? null), "name", array()))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 13
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 14
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 17
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
            // line 19
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 21
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_label")));
            // line 22
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroChannelBundle:Channel:update.html.twig", 22)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_navButtons($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_channel", array("id" => $this->getAttribute(            // line 29
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-channel", "dataId" => $this->getAttribute(            // line 33
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_label"))), "method"), "html", null, true);
            // line 35
            echo "
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_index")), "method"), "html", null, true);
        echo "

    ";
        // line 41
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_channel_view", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method");
        // line 45
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_channel_create")) {
            // line 46
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_channel_create")), "method"));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_channel_update"))) {
            // line 51
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_channel_update", "params" => array("id" => "\$id", "_enableContentProviders" => "mainMenu"))), "method"));
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 59
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["id"] = "channel-update";
        // line 65
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "channelType", array()), 'row'), 2 => (($this->getAttribute(        // line 73
($context["form"] ?? null), "dataSource", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dataSource", array()), 'row')) : ("")))))));
        // line 78
        echo "
    ";
        // line 79
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entities", array())) > 0)) {
            // line 80
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entities"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entities", array()), 'row')))))));
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    ";
        // line 89
        ob_start();
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_channel_additional_block", $context)) ? (_twig_default_filter(($context["oro_channel_additional_block"] ?? null), "oro_channel_additional_block")) : ("oro_channel_additional_block")), array("entity" => ($context["entity"] ?? null), "form" => ($context["form"] ?? null)));
        $context["additional"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        echo "    ";
        if (twig_trim_filter(($context["additional"] ?? null))) {
            // line 91
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 95
($context["additional"] ?? null)))))));
            // line 98
            echo "    ";
        }
        // line 99
        echo "
    ";
        // line 100
        $context["data"] = array("formErrors" => ((        // line 101
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 102
($context["dataBlocks"] ?? null));
        // line 104
        echo "
    ";
        // line 105
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "

    ";
        // line 107
        echo $context["channelMacro"]->getinitializeChannelForm(($context["form"] ?? null), $this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\MetadataExtension')->getEntitiesMetadata(), $this->getAttribute(($context["entity"] ?? null), "customerIdentity", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroChannelBundle:Channel:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 107,  187 => 105,  184 => 104,  182 => 102,  181 => 101,  180 => 100,  177 => 99,  174 => 98,  172 => 95,  170 => 91,  167 => 90,  163 => 89,  160 => 88,  157 => 87,  155 => 84,  153 => 80,  151 => 79,  148 => 78,  146 => 73,  145 => 72,  144 => 71,  142 => 65,  139 => 64,  136 => 63,  129 => 60,  126 => 59,  119 => 56,  116 => 55,  113 => 51,  110 => 50,  107 => 49,  104 => 46,  101 => 45,  99 => 41,  94 => 39,  91 => 38,  86 => 36,  83 => 35,  81 => 33,  80 => 29,  78 => 28,  75 => 27,  72 => 26,  67 => 23,  64 => 22,  61 => 21,  55 => 19,  53 => 17,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  40 => 1,  37 => 8,  34 => 7,  32 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle:Channel:update.html.twig", "");
    }
}
