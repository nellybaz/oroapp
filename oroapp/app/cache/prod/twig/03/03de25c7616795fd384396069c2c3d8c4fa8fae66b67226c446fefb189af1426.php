<?php

/* OroCommerceMenuBundle:layouts/blank/page:top_nav.html.twig */
class __TwigTemplate_bfdc36abd14958a528d38ccae171e6b1ec640fb8c8a4f8f65842de40908f1668 extends Twig_Template
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
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_top_nav_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_top_nav_menu_container_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar grid__row"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__top_nav_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu"));
        // line 14
        echo "
    ";
        // line 15
        $context["child_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["child_attr"] ?? null), array("~class" => " primary-menu__item primary-menu__item--offset-m"));
        // line 18
        echo "
    ";
        // line 19
        $context["link_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["link_attr"] ?? null), array("~class" => "link"));
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock("menu_widget", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block__top_nav_menu_container_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid__column grid__column--7"));
        // line 30
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"topbar-nav-menu\">
            ";
        // line 32
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:layouts/blank/page:top_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 30,  82 => 27,  79 => 26,  73 => 23,  70 => 22,  68 => 19,  65 => 18,  63 => 15,  60 => 14,  57 => 11,  54 => 10,  47 => 6,  42 => 5,  39 => 2,  36 => 1,  32 => 26,  29 => 25,  27 => 10,  24 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:layouts/blank/page:top_nav.html.twig", "");
    }
}
