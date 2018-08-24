<?php

/* OroCommerceMenuBundle:layouts/blank/page:main_menu.html.twig */
class __TwigTemplate_d522497e93efeeeddad677ddb996797589763fe5a6d653cc28f7929ef1ed28ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_widget' => array($this, 'block__header_row_widget'),
            '_main_menu_extra_container_widget' => array($this, 'block__main_menu_extra_container_widget'),
            '_header_row_main_menu_widget' => array($this, 'block__header_row_main_menu_widget'),
            '_main_menu_container_widget' => array($this, 'block__main_menu_container_widget'),
            '_main_menu_list_widget' => array($this, 'block__main_menu_list_widget'),
            '_main_menu_widget' => array($this, 'block__main_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_header_row_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_main_menu_extra_container_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_header_row_main_menu_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_main_menu_container_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('_main_menu_list_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('_main_menu_widget', $context, $blocks);
    }

    // line 1
    public function block__header_row_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orocommercemenu/js/app/views/header-row-view"), "~class" => " header-row"));
        // line 7
        echo "
    <div ";
        // line 8
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 13
    public function block__main_menu_extra_container_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-main-menu-extra-container" => "", "data-header-row-toggle" => ""));
        // line 18
        echo "
    <div ";
        // line 19
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 24
    public function block__header_row_main_menu_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"custom-icon-menu header-row__trigger hidden-on-desktop\"
         data-page-component-module=\"oroui/js/app/components/viewport-component\"
         data-page-component-options=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orofrontend/blank/js/app/views/fullscreen-popup-view", "contentElement" => "[data-main-menu-extra-container]", "popupIcon" => "fa-navicon fa--gray", "popupLabel" => false, "contentAttributes" => array("class" => "fullscreen-mode"))), "html", null, true);
        // line 39
        echo "\"
    >
        <span class=\"custom-icon-menu__bar\"></span>
        <span class=\"custom-icon-menu__bar\"></span>
        <span class=\"custom-icon-menu__bar\"></span>
    </div>
    <div class=\"header-row__toggle\">
        ";
        // line 46
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 50
    public function block__main_menu_container_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu-outer", "data-page-component-module" => "oroui/js/app/components/viewport-component", "data-page-component-options" => array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orocommercemenu/js/app/widgets/menu-traveling-widget"), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
        // line 72
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <button class=\"main-menu__back-trigger\"
                data-go-to=\"prev\"
        ><i class=\"fa-chevron-left\"></i> ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.fullscreen_popup.back.label"), "html", null, true);
        echo "</button>
        <div class=\"main-menu-outer__container\">
            ";
        // line 77
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 82
    public function block__main_menu_list_widget($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu"));
        // line 86
        echo "
    <ul ";
        // line 87
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 88
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 92
    public function block__main_menu_widget($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        ob_start();
        // line 94
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 95
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 96
                echo "            <li class=\"main-menu__item\">
                <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getUriForPath", array(0 => $this->getAttribute($context["child"], "uri", array())), "method"), "html", null, true);
                echo "\" class=\"main-menu__link\">
                    ";
                // line 98
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 99
                echo "                    <span class=\"main-menu__text\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
                </a>
            </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:layouts/blank/page:main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 104,  187 => 99,  185 => 98,  181 => 97,  178 => 96,  176 => 95,  171 => 94,  168 => 93,  165 => 92,  158 => 88,  154 => 87,  151 => 86,  148 => 83,  145 => 82,  137 => 77,  132 => 75,  125 => 72,  122 => 51,  119 => 50,  112 => 46,  103 => 39,  101 => 27,  97 => 25,  94 => 24,  87 => 20,  83 => 19,  80 => 18,  77 => 14,  74 => 13,  67 => 9,  63 => 8,  60 => 7,  57 => 2,  54 => 1,  50 => 92,  47 => 91,  45 => 82,  42 => 81,  40 => 50,  37 => 49,  35 => 24,  32 => 23,  30 => 13,  27 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:layouts/blank/page:main_menu.html.twig", "");
    }
}
