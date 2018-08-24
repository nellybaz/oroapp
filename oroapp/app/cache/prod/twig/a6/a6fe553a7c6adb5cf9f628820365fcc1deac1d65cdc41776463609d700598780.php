<?php

/* OroChannelBundle:Channel:view.html.twig */
class __TwigTemplate_729eaa9500ef499a2f4720d2d675af6af18aec148145515a1ddee4a15ac46267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroChannelBundle:Channel:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["channelMacro"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroChannelBundle:Channel:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%channel.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)) && $this->getAttribute($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\MetadataExtension')->getChannelTypeMetadata(), $this->getAttribute(($context["entity"] ?? null), "channelType", array()), array(), "array", true, true))) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_update", array("id" => $this->getAttribute(            // line 20
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_label"))), "method"), "html", null, true);
            // line 22
            echo "
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_channel", array("id" => $this->getAttribute(            // line 27
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-channel", "dataId" => $this->getAttribute(            // line 31
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.entity_label"))), "method"), "html", null, true);
            // line 33
            echo "
    ";
        }
    }

    // line 37
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["id"] = "channel-view";
        // line 43
        echo "    ";
        ob_start();
        // line 44
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_channel_widget_info", array("id" => $this->getAttribute(        // line 46
($context["entity"] ?? null), "id", array())))));
        // line 47
        echo "
    ";
        $context["channelInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
    ";
        // line 50
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 54
($context["channelInformationWidget"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entities"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 60
$context["channelMacro"]->getinializeEntitiesViewComponent(($context["entity"] ?? null)))))));
        // line 63
        echo "
    ";
        // line 64
        $context["data"] = array("dataBlocks" =>         // line 65
($context["dataBlocks"] ?? null));
        // line 67
        echo "
    ";
        // line 68
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroChannelBundle:Channel:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 68,  124 => 67,  122 => 65,  121 => 64,  118 => 63,  116 => 60,  115 => 54,  114 => 50,  111 => 49,  107 => 47,  105 => 46,  103 => 44,  100 => 43,  97 => 42,  94 => 41,  87 => 38,  84 => 37,  78 => 33,  76 => 31,  75 => 27,  73 => 26,  71 => 25,  68 => 24,  64 => 22,  62 => 20,  60 => 19,  57 => 18,  54 => 17,  48 => 14,  45 => 13,  43 => 11,  42 => 8,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle:Channel:view.html.twig", "");
    }
}
