<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig */
class __TwigTemplate_85510b0ab86a453e23530b10d92542a438a38b5382638c79beec16ba2a521fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'localization_switcher_widget' => array($this, 'block_localization_switcher_widget'),
            '_localization_switcher_trigger_widget' => array($this, 'block__localization_switcher_trigger_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig"));

        // line 1
        $this->displayBlock('localization_switcher_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('_localization_switcher_trigger_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_localization_switcher_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "localization_switcher_widget"));

        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, ($context["localizations"] ?? $this->getContext($context, "localizations"))) > 1)) {
            // line 3
            echo "        <div class=\"oro-toolbar oro-localization-switcher\">
            <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
                ";
            // line 5
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["selected_localization"] ?? $this->getContext($context, "selected_localization")), "titles", array()));
            echo "
                <span class=\"oro-toolbar__icon\">
                    <i class=\"fa-angle-down\"></i>
                </span>
            </div>

            <div class=\"oro-toolbar__dropdown\">
                <div data-page-component-module=\"orofrontendlocalization/js/app/components/localization-switcher-component\"
                     data-page-component-options=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("selectedLocalization" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(            // line 14
($context["selected_localization"] ?? $this->getContext($context, "selected_localization")), "titles", array())), "localizationSwitcherRoute" => "oro_frontend_localization_frontend_set_current_localization")), "html", null, true);
            // line 16
            echo "\"
                     data-localization-menu-container
                >
                    <ul class=\"oro-toolbar__list\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localizations"] ?? $this->getContext($context, "localizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
                // line 21
                echo "                            <li class=\"oro-toolbar__list-item\">
                                ";
                // line 22
                $context["title"] = $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute($context["localization"], "titles", array()));
                // line 23
                echo "                                ";
                if (($this->getAttribute(($context["selected_localization"] ?? $this->getContext($context, "selected_localization")), "id", array()) == $this->getAttribute($context["localization"], "id", array()))) {
                    // line 24
                    echo "                                    <span class=\"oro-toolbar__link oro-toolbar__link--active\">
                                    ";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                    echo "
                                </span>
                                ";
                } else {
                    // line 28
                    echo "                                    <a class=\"oro-toolbar__link\" href=\"javascript: void(0);\" data-localization=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "id", array()), "html", null, true);
                    echo "\">
                                        ";
                    // line 29
                    echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                    echo "
                                    </a>
                                ";
                }
                // line 32
                echo "                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block__localization_switcher_trigger_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_localization_switcher_trigger_widget"));

        // line 42
        echo "    ";
        if ((twig_length_filter($this->env, ($context["localizations"] ?? $this->getContext($context, "localizations"))) > 1)) {
            // line 43
            echo "        <div class=\"header-row__container hidden-on-desktop\">
            <button class=\"header-row__trigger hidden-on-desktop\"
                data-page-component-module=\"oroui/js/app/components/viewport-component\"
                data-page-component-options=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orofrontend/blank/js/app/views/fullscreen-popup-view", "popupIcon" => "fa-globe fa--gray fa--x-large", "popupLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontendlocalization.select.label"), "contentElement" => "[data-localization-menu-container]", "contentAttributes" => array("class" => "oro-toolbar fullscreen-mode"))), "html", null, true);
            // line 58
            echo "\"
            >
                <span class=\"nav-trigger__icon nav-trigger__icon--transparent nav-trigger__icon--x-large\">
                    <span class=\"fa-globe fa--dark-gray fa--no-offset\"></span>
                </span>
            </button>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 58,  134 => 46,  129 => 43,  126 => 42,  120 => 41,  108 => 34,  101 => 32,  95 => 29,  90 => 28,  84 => 25,  81 => 24,  78 => 23,  76 => 22,  73 => 21,  69 => 20,  63 => 16,  61 => 14,  60 => 13,  49 => 5,  45 => 3,  42 => 2,  36 => 1,  29 => 41,  26 => 40,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block localization_switcher_widget %}
    {% if localizations|length > 1 %}
        <div class=\"oro-toolbar oro-localization-switcher\">
            <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
                {{ selected_localization.titles|localized_value }}
                <span class=\"oro-toolbar__icon\">
                    <i class=\"fa-angle-down\"></i>
                </span>
            </div>

            <div class=\"oro-toolbar__dropdown\">
                <div data-page-component-module=\"orofrontendlocalization/js/app/components/localization-switcher-component\"
                     data-page-component-options=\"{{ {
                        'selectedLocalization': selected_localization.titles|localized_value,
                        'localizationSwitcherRoute': 'oro_frontend_localization_frontend_set_current_localization'
                     }|json_encode }}\"
                     data-localization-menu-container
                >
                    <ul class=\"oro-toolbar__list\">
                        {% for localization in localizations %}
                            <li class=\"oro-toolbar__list-item\">
                                {% set title = localization.titles|localized_value %}
                                {% if selected_localization.id == localization.id %}
                                    <span class=\"oro-toolbar__link oro-toolbar__link--active\">
                                    {{ title }}
                                </span>
                                {% else %}
                                    <a class=\"oro-toolbar__link\" href=\"javascript: void(0);\" data-localization=\"{{ localization.id }}\">
                                        {{ title }}
                                    </a>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block _localization_switcher_trigger_widget %}
    {% if localizations|length > 1 %}
        <div class=\"header-row__container hidden-on-desktop\">
            <button class=\"header-row__trigger hidden-on-desktop\"
                data-page-component-module=\"oroui/js/app/components/viewport-component\"
                data-page-component-options=\"{{ {
                    viewport: {
                        maxScreenType: 'tablet',
                    },
                    component: 'oroui/js/app/components/view-component',
                    view: 'orofrontend/blank/js/app/views/fullscreen-popup-view',
                    popupIcon: 'fa-globe fa--gray fa--x-large',
                    popupLabel: 'oro.frontendlocalization.select.label'|trans,
                    contentElement: '[data-localization-menu-container]',
                    contentAttributes: {
                        'class': 'oro-toolbar fullscreen-mode'
                    }
                }|json_encode() }}\"
            >
                <span class=\"nav-trigger__icon nav-trigger__icon--transparent nav-trigger__icon--x-large\">
                    <span class=\"fa-globe fa--dark-gray fa--no-offset\"></span>
                </span>
            </button>
        </div>
    {% endif %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
