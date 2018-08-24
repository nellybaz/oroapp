<?php

/* OroCustomThemeBundle:layouts/custom/page:commerce_menu_main_menu.html.twig */
class __TwigTemplate_84e6f95d77056804cc5f98e1bf5990971fccdc427768e46b1fb68fa26a23d6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sidebar_main_menu_container_widget' => array($this, 'block__sidebar_main_menu_container_widget'),
            '_sidebar_product_categories_container_widget' => array($this, 'block__sidebar_product_categories_container_widget'),
            '_sidebar_quick_access_menu_container_widget' => array($this, 'block__sidebar_quick_access_menu_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_sidebar_main_menu_container_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_sidebar_product_categories_container_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('_sidebar_quick_access_menu_container_widget', $context, $blocks);
    }

    // line 1
    public function block__sidebar_main_menu_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sidebar__menu"));
        // line 5
        echo "
    ";
        // line 6
        $context["dom_relocation_options"] = twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]"))));
        // line 16
        echo "
    <div ";
        // line 17
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"main-menu\"
                data-dom-relocation-options=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["dom_relocation_options"] ?? null), "html", null, true);
        echo "\"
        >
            <ul class=\"main-menu__list\">
                ";
        // line 22
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
            </ul>
        </div>
    </div>
";
    }

    // line 28
    public function block__sidebar_product_categories_container_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sidebar__menu sidebar__menu--collapsible"));
        // line 32
        echo "
    ";
        // line 33
        $context["dom_relocation_options"] = twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]"))));
        // line 43
        echo "
    <div ";
        // line 44
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"collapse-view expanded\" data-page-component-collapse=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("storageKey" => ($context["id"] ?? null))), "html", null, true);
        echo "\">
            <a href=\"#\" class=\"main-menu__link main-menu__link--is-trigger\" data-collapse-trigger>
                <span class=\"badge categories-widget__badge\">
                    <i class=\"fa-shopping-cart\"></i>
                </span>
                <span class=\"collapse-view__trigger collapse-view__trigger--icon\">
                    <i class=\"collapse-view__trigger-icon fa-caret-right\" data-toggle=\"collapse\"></i>
                </span>
                <span class=\"collapse-view__text\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.categories.label"), "html", null, true);
        echo "</span>
            </a>
            <div data-collapse-container>
                <div data-page-component-module=\"oroui/js/app/components/viewport-component\"
                     data-page-component-options=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orocommercemenu/js/app/widgets/menu-traveling-widget")), "html", null, true);
        // line 63
        echo "\"
                     data-dom-relocation-options=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["dom_relocation_options"] ?? null), "html", null, true);
        echo "\"
                >
                    <button class=\"main-menu__back-trigger\"
                            data-go-to=\"prev\"
                    ><i class=\"fa-chevron-left\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.fullscreen_popup.back.label"), "html", null, true);
        echo "</button>
                    <ul class=\"main-menu\">
                        ";
        // line 70
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 78
    public function block__sidebar_quick_access_menu_container_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sidebar__quick-access"));
        // line 82
        echo "
    <div ";
        // line 83
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 84
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/page:commerce_menu_main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 84,  143 => 83,  140 => 82,  137 => 79,  134 => 78,  123 => 70,  118 => 68,  111 => 64,  108 => 63,  106 => 57,  99 => 53,  88 => 45,  84 => 44,  81 => 43,  79 => 33,  76 => 32,  73 => 29,  70 => 28,  61 => 22,  55 => 19,  50 => 17,  47 => 16,  45 => 6,  42 => 5,  39 => 2,  36 => 1,  32 => 78,  29 => 77,  27 => 28,  24 => 27,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/page:commerce_menu_main_menu.html.twig", "");
    }
}
