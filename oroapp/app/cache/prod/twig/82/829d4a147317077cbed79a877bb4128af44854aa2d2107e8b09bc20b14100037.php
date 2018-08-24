<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig */
class __TwigTemplate_11f61a81b77afc495cffeb7dbca575795b0e35f3c9b1dcc7dc1fd03751c92c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_widget' => array($this, 'block__header_row_widget'),
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
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_header_row_main_menu_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('_main_menu_container_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('_main_menu_list_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('_main_menu_widget', $context, $blocks);
    }

    // line 1
    public function block__header_row_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-sticky-target" => "top-sticky-panel", "~data-sticky" => array("isSticky" => true, "autoWidth" => true, "toggleClass" => "header-row--fixed slide-in-down", "placeholderId" => "sticky-header-row", "viewport" => array("maxScreenType" => "tablet")), "~class" => (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 13
($context["blocks"] ?? null), "header_row", array()), "children", array())) > 2)) ? (" header-row--from-left") : (""))));
        // line 15
        echo "
    <div class=\"page-area-container\">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    // line 21
    public function block__header_row_main_menu_widget($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"header-row__container header-row__container--unstack\">
        <button class=\"header-row__trigger hidden-on-desktop\"
                data-page-component-module=\"oroui/js/app/components/viewport-component\"
                data-page-component-options=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orofrontend/blank/js/app/views/fullscreen-popup-view", "contentElement" => "[data-main-menu-extra-container]", "popupLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.fullscreen_popup.menu.label"), "popupIcon" => "fa-navicon fa--gray fa--x-large", "contentAttributes" => array("class" => "fullscreen-mode"))), "html", null, true);
        // line 37
        echo "\"
        >
            <span class=\"nav-trigger__icon nav-trigger__icon--transparent nav-trigger__icon--large\">
                <span class=\"fa-navicon fa--gray fa--no-offset\"></span>
            </span>
        </button>
        <div class=\"header-row__toggle\">
            <div class=\"header-row__dropdown\" data-main-menu-container>
                ";
        // line 45
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function block__main_menu_container_widget($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu-outer", "data-page-component-module" => "oroui/js/app/components/viewport-component", "data-page-component-options" => array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orocommercemenu/js/app/widgets/menu-traveling-widget"), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
        // line 73
        echo "
    <div ";
        // line 74
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <button class=\"main-menu__back-trigger\"
                data-go-to=\"prev\"
        ><i class=\"fa-chevron-left\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.fullscreen_popup.back.label"), "html", null, true);
        echo "</button>
        <div class=\"main-menu-outer__container\">
            ";
        // line 79
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 84
    public function block__main_menu_list_widget($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "main-menu"));
        // line 88
        echo "    <ul ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 89
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 93
    public function block__main_menu_widget($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        ob_start();
        // line 95
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 97
                echo "                <li class=\"main-menu__item\">
                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getUriForPath", array(0 => $this->getAttribute($context["child"], "uri", array())), "method"), "html", null, true);
                echo "\" class=\"main-menu__link\">
                        ";
                // line 99
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 100
                echo "                        <span class=\"main-menu__text\">";
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
        // line 105
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  163 => 100,  161 => 99,  157 => 98,  154 => 97,  152 => 96,  147 => 95,  144 => 94,  141 => 93,  134 => 89,  129 => 88,  126 => 85,  123 => 84,  115 => 79,  110 => 77,  104 => 74,  101 => 73,  98 => 52,  95 => 51,  86 => 45,  76 => 37,  74 => 25,  69 => 22,  66 => 21,  59 => 17,  55 => 15,  53 => 13,  51 => 2,  48 => 1,  44 => 93,  41 => 92,  39 => 84,  36 => 83,  34 => 51,  31 => 50,  29 => 21,  26 => 20,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig");
    }
}
