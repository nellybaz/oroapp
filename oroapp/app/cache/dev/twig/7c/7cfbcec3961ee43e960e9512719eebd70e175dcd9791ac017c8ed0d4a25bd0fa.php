<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig */
class __TwigTemplate_e4ba893174bd906f33000d6c95fe1b28ae8a1e531632abc0ec50b097ba823f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_require_js_config_widget' => array($this, 'block__require_js_config_widget'),
            '_require_js_multi_select_filter_config_widget' => array($this, 'block__require_js_multi_select_filter_config_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig"));

        // line 1
        $this->displayBlock('_require_js_config_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('_require_js_multi_select_filter_config_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__require_js_config_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_require_js_config_widget"));

        // line 2
        echo "    ";
        $context["NotMobileVersion"] =  !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile();
        // line 3
        echo "    <script>
        require({
            config: {
                'controllers/page-controller': {fullRedirect: true},

                'oroui/js/app': {routeLinks: ''},
                'oroui/js/error' : {loginRoute: 'oro_customer_customer_user_security_login'},

                'orodatagrid/js/datagrid/grid-views/model': {route: 'oro_api_frontend_datagrid_gridview_post'},

                'oroui/js/modal': {defaults: {okButtonClass: 'btn btn--info ok'}},

                'oro/datagrid/cell/action-cell': {showCloseButton: false},
                'orodatagrid/js/app/plugins/grid/column-manager-plugin': {
                    icon: 'gear',
                    wrapperClassName: 'datagrid-manager btn-group ',
                    className: 'btn btn--default btn--size-s dropdown-toggle--expanded ',
                    iconHideText: true
                },
                'orodatagrid/js/datagrid/action-launcher': {iconHideText: false},
                'orodatagrid/js/grid-views-builder': {GridViewsView: 'orofrontend/js/datagrid/grid-views/frontend-grid-views-view'},
                'orodatagrid/js/app/views/column-manager/column-manager-collection-view': {fallbackSelector: '.datagrid-manager__no-columns'},

                'oro/filter/abstract-filter': {
                    placeholder: null,
                    labelPrefix: !'";
        // line 28
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? $this->getContext($context, "NotMobileVersion")), "html", null, true);
        echo "' ? '' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.filter.by"), "html", null, true);
        echo " '
                },
                'oro/filter/select-filter': {
                    populateDefault: '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All"), "html", null, true);
        echo "'
                },
                'oro/filter/text-filter': {notAlignCriteria: false},
                'oro/filter/date-filter': {
                    inputClass: 'input input--size-m date-visual-element'
                },
                'oro/filter/datetime-filter': {
                    inputClass: 'input input--size-m datetime-visual-element',
                    timeInputAttrs: {
                        'class': 'input input--size-m timepicker-input',
                        'placeholder': 'oro.form.choose_time'
                    }
                },
                'orofilter/js/filters-manager': {
                    dropdownContainer: '.filter-item'
                },
                'orofilter/js/filter-hint': {inline: false},
                'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin': {
                    launcherOptions: {
                        className: 'btn btn--default btn--size-s' + ('";
        // line 50
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? $this->getContext($context, "NotMobileVersion")), "html", null, true);
        echo "' ? ' caret' : ''),
                        iconHideText: true,
                        icon: 'filter' + ('";
        // line 52
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? $this->getContext($context, "NotMobileVersion")), "html", null, true);
        echo "' ? '' : ' fa--no-offset')
                    },
                    order: 650
                },
                'orofilter/js/datafilter-builder': {
                    FiltersManager: 'orofrontend/js/app/datafilter/frontend-collection-filters-manager',
                    enableToggleFilters: true
                },

                'oroaddress/js/region/view': {switchState: 'disable'},

                'oro/dialog-widget': {
                    messengerContainerClass: 'ui-dialog-messages'
                }
            },
            paths: {
                ";
        // line 68
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array()) && $this->env->getExtension('Oro\Bundle\FrontendBundle\Twig\FileExtension')->getIsDebugRoutes($this->env))) {
            // line 69
            echo "                    'oro/routes': '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_frontend_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "'
                ";
        } else {
            // line 71
            echo "                    'oro/routes': '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->generateUrlWithoutFrontController("oro_frontend_js_routing_js"), "html", null, true);
            echo "'
                ";
        }
        // line 73
        echo "            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block__require_js_multi_select_filter_config_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_require_js_multi_select_filter_config_widget"));

        // line 79
        echo "    ";
        $context["MobileVersion"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile();
        // line 80
        echo "
    <script>
        require({
            config: {
                'orofrontend/js/app/datafilter/frontend-multiselect-decorator': {
                    hideHeader: !!'";
        // line 85
        echo twig_escape_filter($this->env, ($context["MobileVersion"] ?? $this->getContext($context, "MobileVersion")), "html", null, true);
        echo "',
                    themeName: 'all-at-once'
                }
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 85,  159 => 80,  156 => 79,  150 => 78,  140 => 73,  134 => 71,  128 => 69,  126 => 68,  107 => 52,  102 => 50,  80 => 31,  72 => 28,  45 => 3,  42 => 2,  36 => 1,  29 => 78,  26 => 77,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _require_js_config_widget %}
    {% set NotMobileVersion = not isMobileVersion() %}
    <script>
        require({
            config: {
                'controllers/page-controller': {fullRedirect: true},

                'oroui/js/app': {routeLinks: ''},
                'oroui/js/error' : {loginRoute: 'oro_customer_customer_user_security_login'},

                'orodatagrid/js/datagrid/grid-views/model': {route: 'oro_api_frontend_datagrid_gridview_post'},

                'oroui/js/modal': {defaults: {okButtonClass: 'btn btn--info ok'}},

                'oro/datagrid/cell/action-cell': {showCloseButton: false},
                'orodatagrid/js/app/plugins/grid/column-manager-plugin': {
                    icon: 'gear',
                    wrapperClassName: 'datagrid-manager btn-group ',
                    className: 'btn btn--default btn--size-s dropdown-toggle--expanded ',
                    iconHideText: true
                },
                'orodatagrid/js/datagrid/action-launcher': {iconHideText: false},
                'orodatagrid/js/grid-views-builder': {GridViewsView: 'orofrontend/js/datagrid/grid-views/frontend-grid-views-view'},
                'orodatagrid/js/app/views/column-manager/column-manager-collection-view': {fallbackSelector: '.datagrid-manager__no-columns'},

                'oro/filter/abstract-filter': {
                    placeholder: null,
                    labelPrefix: !'{{ NotMobileVersion }}' ? '' : '{{ 'oro.ui.filter.by'|trans }} '
                },
                'oro/filter/select-filter': {
                    populateDefault: '{{ 'All'|trans  }}'
                },
                'oro/filter/text-filter': {notAlignCriteria: false},
                'oro/filter/date-filter': {
                    inputClass: 'input input--size-m date-visual-element'
                },
                'oro/filter/datetime-filter': {
                    inputClass: 'input input--size-m datetime-visual-element',
                    timeInputAttrs: {
                        'class': 'input input--size-m timepicker-input',
                        'placeholder': 'oro.form.choose_time'
                    }
                },
                'orofilter/js/filters-manager': {
                    dropdownContainer: '.filter-item'
                },
                'orofilter/js/filter-hint': {inline: false},
                'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin': {
                    launcherOptions: {
                        className: 'btn btn--default btn--size-s' + ('{{ NotMobileVersion }}' ? ' caret' : ''),
                        iconHideText: true,
                        icon: 'filter' + ('{{ NotMobileVersion }}' ? '' : ' fa--no-offset')
                    },
                    order: 650
                },
                'orofilter/js/datafilter-builder': {
                    FiltersManager: 'orofrontend/js/app/datafilter/frontend-collection-filters-manager',
                    enableToggleFilters: true
                },

                'oroaddress/js/region/view': {switchState: 'disable'},

                'oro/dialog-widget': {
                    messengerContainerClass: 'ui-dialog-messages'
                }
            },
            paths: {
                {% if app.debug and oro_frontend_debug_routes() %}
                    'oro/routes': '{{ path('oro_frontend_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}'
                {% else %}
                    'oro/routes': '{{ asset_path('oro_frontend_js_routing_js') }}'
                {% endif %}
            }
        });
    </script>
{% endblock %}

{% block _require_js_multi_select_filter_config_widget %}
    {% set MobileVersion = isMobileVersion() %}

    <script>
        require({
            config: {
                'orofrontend/js/app/datafilter/frontend-multiselect-decorator': {
                    hideHeader: !!'{{ MobileVersion }}',
                    themeName: 'all-at-once'
                }
            }
        });
    </script>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig");
    }
}
