<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig */
class __TwigTemplate_9456928727c783ac348c5f0d213e117a0f797c9cb4a64367b03b1a42b4ef689e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__scroll_top__scroll_top_widget' => array($this, 'block___scroll_top__scroll_top_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__scroll_top__scroll_top_widget', $context, $blocks);
    }

    public function block___scroll_top__scroll_top_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/default/js/app/views/scroll-top-view", "viewport" => array("minScreenType" => "desktop")), "data-scroll-top" => "", "~class" => (" scroll-top scroll-top--" .         // line 11
($context["scroll_top_position"] ?? null))));
        // line 13
        echo "    ";
        if ((array_key_exists("enabled", $context) && (($context["enabled"] ?? null) == true))) {
            // line 14
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <button type=\"button\" class=\"btn btn--plain\">
                <i class=\"fa-arrow-circle-up fa--no-offset fa--xxxl\"></i>
            </button>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  30 => 13,  28 => 11,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig");
    }
}
