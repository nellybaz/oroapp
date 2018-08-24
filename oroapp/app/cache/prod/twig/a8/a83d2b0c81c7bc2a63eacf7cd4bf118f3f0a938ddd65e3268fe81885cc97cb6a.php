<?php

/* OroCustomThemeBundle:layouts/custom/page:main_menu.html.twig */
class __TwigTemplate_afe10d153c87d6ad8619198041f5efeb677bff819a15d70f24a2bf66b11c406a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_web_catalog_menu_widget' => array($this, 'block__web_catalog_menu_widget'),
            '_web_catalog_menu_second_level_item_head_widget' => array($this, 'block__web_catalog_menu_second_level_item_head_widget'),
            '_web_catalog_menu_second_level_sale_head_widget' => array($this, 'block__web_catalog_menu_second_level_sale_head_widget'),
            '_web_catalog_menu_second_level_sale_mega_widget' => array($this, 'block__web_catalog_menu_second_level_sale_mega_widget'),
            '_web_catalog_menu_second_level_item_mega_widget' => array($this, 'block__web_catalog_menu_second_level_item_mega_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_web_catalog_menu_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_web_catalog_menu_second_level_item_head_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('_web_catalog_menu_second_level_sale_head_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_web_catalog_menu_second_level_sale_mega_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_web_catalog_menu_second_level_item_mega_widget', $context, $blocks);
    }

    // line 1
    public function block__web_catalog_menu_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~data-page-component-options" => array("viewport" => array("maxScreenType" => "any"))));
        // line 9
        echo "
    ";
        // line 10
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 13
    public function block__web_catalog_menu_second_level_item_head_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("viewport" => array("maxScreenType" => "any")));
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 23
    public function block__web_catalog_menu_second_level_sale_head_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(array("viewport" => array("maxScreenType" => "any")),         // line 28
($context["attr"] ?? null));
        // line 29
        echo "
    ";
        // line 30
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 33
    public function block__web_catalog_menu_second_level_sale_mega_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(array("viewport" => array("maxScreenType" => "any")),         // line 38
($context["attr"] ?? null));
        // line 39
        echo "
    ";
        // line 40
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 43
    public function block__web_catalog_menu_second_level_item_mega_widget($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(array("viewport" => array("maxScreenType" => "any")),         // line 48
($context["attr"] ?? null));
        // line 49
        echo "
    ";
        // line 50
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/page:main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 50,  117 => 49,  115 => 48,  113 => 44,  110 => 43,  104 => 40,  101 => 39,  99 => 38,  97 => 34,  94 => 33,  88 => 30,  85 => 29,  83 => 28,  81 => 24,  78 => 23,  72 => 20,  69 => 19,  66 => 14,  63 => 13,  57 => 10,  54 => 9,  51 => 2,  48 => 1,  44 => 43,  41 => 42,  39 => 33,  36 => 32,  34 => 23,  31 => 22,  29 => 13,  26 => 12,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/page:main_menu.html.twig", "");
    }
}
