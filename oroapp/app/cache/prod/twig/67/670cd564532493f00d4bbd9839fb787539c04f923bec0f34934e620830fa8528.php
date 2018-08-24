<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig */
class __TwigTemplate_863a0711738bab8b00fc371a4d761146f0ea4b0709680cb17199ac076b0d0e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_nav_container_widget' => array($this, 'block__top_nav_container_widget'),
            '_top_nav_widget' => array($this, 'block__top_nav_widget'),
            '_top_nav_menu_container_widget' => array($this, 'block__top_nav_menu_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_nav_container_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_top_nav_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_top_nav_menu_container_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"page-area-container\">
            ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 12
    public function block__top_nav_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation"));
        // line 16
        echo "
    ";
        // line 17
        $context["child_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["child_attr"] ?? null), array("~class" => " topbar-navigation__item"));
        // line 20
        echo "
    ";
        // line 21
        $context["link_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["link_attr"] ?? null), array("~class" => "topbar-navigation__link"));
        // line 24
        echo "
    <div class=\"topbar-navigation-wrap\">
        ";
        // line 26
        $this->displayBlock("menu_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 30
    public function block__top_nav_menu_container_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-right"));
        // line 34
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  89 => 34,  86 => 31,  83 => 30,  76 => 26,  72 => 24,  70 => 21,  67 => 20,  65 => 17,  62 => 16,  59 => 13,  56 => 12,  48 => 7,  42 => 5,  39 => 2,  36 => 1,  32 => 30,  29 => 29,  27 => 12,  24 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig");
    }
}
