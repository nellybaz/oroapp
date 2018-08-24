<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig */
class __TwigTemplate_1a464fcffbdb2629b08ba8c6d76f38297055911ce1e11a15e729d7e91ed73138 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__header_row_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orocommercemenu/js/app/views/header-row-view"), "~class" => " header-row"));
        // line 7
        echo "
    <div ";
        // line 8
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block__main_menu_extra_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_extra_container_widget"));

        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-main-menu-extra-container" => "", "data-header-row-toggle" => ""));
        // line 18
        echo "
    <div ";
        // line 19
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block__header_row_main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_main_menu_widget"));

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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block__main_menu_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_container_widget"));

        // line 51
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu-outer", "data-page-component-module" => "oroui/js/app/components/viewport-component", "data-page-component-options" => array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orocommercemenu/js/app/widgets/menu-traveling-widget"), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block__main_menu_list_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_list_widget"));

        // line 83
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu"));
        // line 86
        echo "
    <ul ";
        // line 87
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 88
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block__main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_widget"));

        // line 93
        echo "    ";
        ob_start();
        // line 94
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 95
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 96
                echo "            <li class=\"main-menu__item\">
                <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getUriForPath", array(0 => $this->getAttribute($context["child"], "uri", array())), "method"), "html", null, true);
                echo "\" class=\"main-menu__link\">
                    ";
                // line 98
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 99
                echo "                    <span class=\"main-menu__text\">";
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
        // line 104
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 104,  226 => 99,  224 => 98,  220 => 97,  217 => 96,  215 => 95,  210 => 94,  207 => 93,  201 => 92,  191 => 88,  187 => 87,  184 => 86,  181 => 83,  175 => 82,  164 => 77,  159 => 75,  152 => 72,  149 => 51,  143 => 50,  133 => 46,  124 => 39,  122 => 27,  118 => 25,  112 => 24,  102 => 20,  98 => 19,  95 => 18,  92 => 14,  86 => 13,  76 => 9,  72 => 8,  69 => 7,  66 => 2,  60 => 1,  53 => 92,  50 => 91,  48 => 82,  45 => 81,  43 => 50,  40 => 49,  38 => 24,  35 => 23,  33 => 13,  30 => 12,  28 => 1,);
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
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {view: 'orocommercemenu/js/app/views/header-row-view'},
        '~class': ' header-row'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _main_menu_extra_container_widget %}
    {% set attr =  layout_attr_defaults(attr, {
    'data-main-menu-extra-container': '',
    'data-header-row-toggle': ''
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _header_row_main_menu_widget %}
    <div class=\"custom-icon-menu header-row__trigger hidden-on-desktop\"
         data-page-component-module=\"oroui/js/app/components/viewport-component\"
         data-page-component-options=\"{{ {
             viewport: {
                 maxScreenType: 'tablet',
             },
             component: 'oroui/js/app/components/view-component',
             view: 'orofrontend/blank/js/app/views/fullscreen-popup-view',
             contentElement: '[data-main-menu-extra-container]',
             popupIcon: 'fa-navicon fa--gray',
             popupLabel: false,
             contentAttributes: {
                 'class': 'fullscreen-mode'
             }
         }|json_encode() }}\"
    >
        <span class=\"custom-icon-menu__bar\"></span>
        <span class=\"custom-icon-menu__bar\"></span>
        <span class=\"custom-icon-menu__bar\"></span>
    </div>
    <div class=\"header-row__toggle\">
        {{ block_widget(block) }}
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
        '~class': ' main-menu'
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
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig");
    }
}
