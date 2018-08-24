<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig */
class __TwigTemplate_02e1d44e3e36ba71faf4822715b3284e088489b281aa3c28e4249f56ea3dbb04 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__header_row_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-sticky-target" => "top-sticky-panel", "~data-sticky" => array("isSticky" => true, "autoWidth" => true, "toggleClass" => "header-row--fixed slide-in-down", "placeholderId" => "sticky-header-row", "viewport" => array("maxScreenType" => "tablet")), "~class" => (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 13
($context["blocks"] ?? $this->getContext($context, "blocks")), "header_row", array()), "children", array())) > 2)) ? (" header-row--from-left") : (""))));
        // line 15
        echo "
    <div class=\"page-area-container\">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block__header_row_main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_main_menu_widget"));

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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block__main_menu_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_container_widget"));

        // line 52
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu-outer", "data-page-component-module" => "oroui/js/app/components/viewport-component", "data-page-component-options" => array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orocommercemenu/js/app/widgets/menu-traveling-widget"), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block__main_menu_list_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_list_widget"));

        // line 85
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => "main-menu"));
        // line 88
        echo "    <ul ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 89
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block__main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_widget"));

        // line 94
        echo "    ";
        ob_start();
        // line 95
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 97
                echo "                <li class=\"main-menu__item\">
                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getUriForPath", array(0 => $this->getAttribute($context["child"], "uri", array())), "method"), "html", null, true);
                echo "\" class=\"main-menu__link\">
                        ";
                // line 99
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 100
                echo "                        <span class=\"main-menu__text\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 105,  196 => 100,  194 => 99,  190 => 98,  187 => 97,  185 => 96,  180 => 95,  177 => 94,  171 => 93,  161 => 89,  156 => 88,  153 => 85,  147 => 84,  136 => 79,  131 => 77,  125 => 74,  122 => 73,  119 => 52,  113 => 51,  101 => 45,  91 => 37,  89 => 25,  84 => 22,  78 => 21,  68 => 17,  64 => 15,  62 => 13,  60 => 2,  54 => 1,  47 => 93,  44 => 92,  42 => 84,  39 => 83,  37 => 51,  34 => 50,  32 => 21,  29 => 20,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _header_row_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-sticky-target': 'top-sticky-panel',
        '~data-sticky': {
            isSticky: true,
            autoWidth: true,
            toggleClass: 'header-row--fixed slide-in-down',
            placeholderId: 'sticky-header-row',
            viewport: {
                maxScreenType: 'tablet',
            },
        },
        '~class': (blocks.header_row.children|length > 2 ? ' header-row--from-left')
    }) %}

    <div class=\"page-area-container\">
        {{ parent_block_widget(block, {attr: attr}) }}
    </div>
{% endblock %}

{% block _header_row_main_menu_widget %}
    <div class=\"header-row__container header-row__container--unstack\">
        <button class=\"header-row__trigger hidden-on-desktop\"
                data-page-component-module=\"oroui/js/app/components/viewport-component\"
                data-page-component-options=\"{{ {
                    viewport: {
                        maxScreenType: 'tablet'
                    },
                    component: 'oroui/js/app/components/view-component',
                    view: 'orofrontend/blank/js/app/views/fullscreen-popup-view',
                    contentElement: '[data-main-menu-extra-container]',
                    popupLabel: 'oro_frontend.fullscreen_popup.menu.label'|trans,
                    popupIcon: 'fa-navicon fa--gray fa--x-large',
                    contentAttributes: {
                        'class': 'fullscreen-mode'
                    }
                }|json_encode() }}\"
        >
            <span class=\"nav-trigger__icon nav-trigger__icon--transparent nav-trigger__icon--large\">
                <span class=\"fa-navicon fa--gray fa--no-offset\"></span>
            </span>
        </button>
        <div class=\"header-row__toggle\">
            <div class=\"header-row__dropdown\" data-main-menu-container>
                {{ block_widget(block) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block _main_menu_container_widget %}
    {% set attr =  layout_attr_defaults(attr, {
        '~class': ' main-menu-outer',
        'data-page-component-module': 'oroui/js/app/components/viewport-component',
        'data-page-component-options': {
            viewport: {
                maxScreenType: 'tablet',
            },
            component: 'oroui/js/app/components/view-component',
            view: 'orocommercemenu/js/app/widgets/menu-traveling-widget'
         },
        'data-dom-relocation-options': {
            responsive: [
                {
                    viewport: {
                        maxScreenType: 'tablet',
                    },
                    moveTo: '[data-main-menu-extra-container]'
                }
            ]
        }
    }) %}

    <div {{ block('block_attributes') }}>
        <button class=\"main-menu__back-trigger\"
                data-go-to=\"prev\"
        ><i class=\"fa-chevron-left\"></i> {{ 'oro_frontend.fullscreen_popup.back.label'|trans }}</button>
        <div class=\"main-menu-outer__container\">
            {{ block_widget(block) }}
        </div>
    </div>
{% endblock %}

{% block _main_menu_list_widget %}
    {% set attr =  layout_attr_defaults(attr, {
        '~class': 'main-menu'
    }) %}
    <ul {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </ul>
{% endblock %}

{% block _main_menu_widget %}
    {% spaceless %}
        {% for child in item.children -%}
            {% if child.displayed and child.extras.isAllowed %}
                <li class=\"main-menu__item\">
                    <a href=\"{{ app.request.getUriForPath(child.uri) }}\" class=\"main-menu__link\">
                        {% set label = child.extras.custom is defined and child.extras.custom == true ? child.label : child.label|trans %}
                        <span class=\"main-menu__text\">{{ label }}</span>
                    </a>
                </li>
            {% endif %}
        {%- endfor %}
    {% endspaceless %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.html.twig");
    }
}
