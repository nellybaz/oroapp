<?php

/* OroFrontendBundle:layouts/blank/imports/sticky_panel:sticky_panel.html.twig */
class __TwigTemplate_31a330b899d84aa88632008cfba3b01473b9296a72f375ee472b339bc8822356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__sticky_panel__sticky_panel_widget' => array($this, 'block___sticky_panel__sticky_panel_widget'),
            '__sticky_panel__sticky_panel_content_widget' => array($this, 'block___sticky_panel__sticky_panel_content_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__sticky_panel__sticky_panel_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('__sticky_panel__sticky_panel_content_widget', $context, $blocks);
    }

    // line 1
    public function block___sticky_panel__sticky_panel_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-sticky-name" =>         // line 3
($context["sticky_name"] ?? null), "data-stick-to" =>         // line 4
($context["stick_to"] ?? null), "data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/default/js/app/views/sticky-panel-view"), "~class" => (" sticky-panel sticky-panel--" .         // line 9
($context["stick_to"] ?? null))));
        // line 11
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 16
    public function block___sticky_panel__sticky_panel_content_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sticky-panel__content"));
        // line 20
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/imports/sticky_panel:sticky_panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 17,  51 => 16,  44 => 12,  39 => 11,  37 => 9,  36 => 4,  35 => 3,  33 => 2,  30 => 1,  26 => 16,  23 => 15,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/imports/sticky_panel:sticky_panel.html.twig", "");
    }
}
