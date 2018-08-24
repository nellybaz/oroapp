<?php

/* OroChannelBundle:Channel/widget:info.html.twig */
class __TwigTemplate_14dafd20dbef90f4eba45b2593deec8e23c81b26dc128a152310b9dcedca418e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroChannelBundle:Channel/widget:info.html.twig", 1);
        // line 2
        $context["channelTypes"] = $this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\MetadataExtension')->getChannelTypeMetadata();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.name.label"), $this->getAttribute(($context["channel"] ?? null), "name", array()));
        echo "
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.channel_type.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["channelTypes"] ?? null), $this->getAttribute(($context["channel"] ?? null), "channelType", array()), array(), "array")));
        echo "
            ";
        // line 9
        if ($this->getAttribute(($context["channel"] ?? null), "dataSource", array())) {
            // line 10
            echo "                ";
            $context["inegrationLink"] = $context["UI"]->getlink(array("label" => $this->getAttribute($this->getAttribute(            // line 11
($context["channel"] ?? null), "dataSource", array()), "name", array()), "title" => $this->getAttribute($this->getAttribute(            // line 12
($context["channel"] ?? null), "dataSource", array()), "name", array()), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_integration_update", array("id" => $this->getAttribute($this->getAttribute(            // line 13
($context["channel"] ?? null), "dataSource", array()), "id", array())))));
            // line 15
            echo "                ";
            echo $context["UI"]->getrenderHTMLProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.channel.data_source.label"), ($context["inegrationLink"] ?? null));
            echo "
            ";
        }
        // line 17
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroChannelBundle:Channel/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  45 => 15,  43 => 13,  42 => 12,  41 => 11,  39 => 10,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle:Channel/widget:info.html.twig", "");
    }
}
