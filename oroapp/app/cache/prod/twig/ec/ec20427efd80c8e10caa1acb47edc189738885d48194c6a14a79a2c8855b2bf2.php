<?php

/* OroFrontendBundle:layouts/blank/page:require_js_config.html.twig */
class __TwigTemplate_00781e90f1ea35b214c0362e5bf8c80f297f3e18be680ce1d9572615131009d4 extends Twig_Template
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
        // line 1
        $this->displayBlock('_require_js_config_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('_require_js_multi_select_filter_config_widget', $context, $blocks);
    }

    // line 1
    public function block__require_js_config_widget($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? null), "html", null, true);
        echo "' ? ' caret' : ''),
                        iconHideText: true,
                        icon: 'filter' + ('";
        // line 52
        echo twig_escape_filter($this->env, ($context["NotMobileVersion"] ?? null), "html", null, true);
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
        if (($this->getAttribute(($context["app"] ?? null), "debug", array()) && $this->env->getExtension('Oro\Bundle\FrontendBundle\Twig\FileExtension')->getIsDebugRoutes($this->env))) {
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
    }

    // line 78
    public function block__require_js_multi_select_filter_config_widget($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["MobileVersion"] ?? null), "html", null, true);
        echo "',
                    themeName: 'all-at-once'
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/page:require_js_config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  144 => 80,  141 => 79,  138 => 78,  131 => 73,  125 => 71,  119 => 69,  117 => 68,  98 => 52,  93 => 50,  71 => 31,  63 => 28,  36 => 3,  33 => 2,  30 => 1,  26 => 78,  23 => 77,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/page:require_js_config.html.twig", "");
    }
}
