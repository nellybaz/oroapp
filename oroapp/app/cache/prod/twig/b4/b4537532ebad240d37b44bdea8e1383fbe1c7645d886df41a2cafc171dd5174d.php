<?php

/* OroFrontendLocalizationBundle:layouts/default:layout.html.twig */
class __TwigTemplate_c58166091252717acea30892d36ff41b285bd1d395b034c308df0b0c8a92f6f1 extends Twig_Template
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
        // line 1
        $this->displayBlock('localization_switcher_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('_localization_switcher_trigger_widget', $context, $blocks);
    }

    // line 1
    public function block_localization_switcher_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, ($context["localizations"] ?? null)) > 1)) {
            // line 3
            echo "        <div class=\"oro-toolbar oro-localization-switcher\">
            <div class=\"oro-toolbar__content\" data-toggle=\"dropdown\">
                ";
            // line 5
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["selected_localization"] ?? null), "titles", array()));
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
($context["selected_localization"] ?? null), "titles", array())), "localizationSwitcherRoute" => "oro_frontend_localization_frontend_set_current_localization")), "html", null, true);
            // line 16
            echo "\"
                     data-localization-menu-container
                >
                    <ul class=\"oro-toolbar__list\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localizations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
                // line 21
                echo "                            <li class=\"oro-toolbar__list-item\">
                                ";
                // line 22
                $context["title"] = $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute($context["localization"], "titles", array()));
                // line 23
                echo "                                ";
                if (($this->getAttribute(($context["selected_localization"] ?? null), "id", array()) == $this->getAttribute($context["localization"], "id", array()))) {
                    // line 24
                    echo "                                    <span class=\"oro-toolbar__link oro-toolbar__link--active\">
                                    ";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
    }

    // line 41
    public function block__localization_switcher_trigger_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        if ((twig_length_filter($this->env, ($context["localizations"] ?? null)) > 1)) {
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
    }

    public function getTemplateName()
    {
        return "OroFrontendLocalizationBundle:layouts/default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 58,  119 => 46,  114 => 43,  111 => 42,  108 => 41,  99 => 34,  92 => 32,  86 => 29,  81 => 28,  75 => 25,  72 => 24,  69 => 23,  67 => 22,  64 => 21,  60 => 20,  54 => 16,  52 => 14,  51 => 13,  40 => 5,  36 => 3,  33 => 2,  30 => 1,  26 => 41,  23 => 40,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendLocalizationBundle:layouts/default:layout.html.twig", "");
    }
}
