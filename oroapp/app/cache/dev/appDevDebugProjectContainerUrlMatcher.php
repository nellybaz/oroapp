<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // test_test_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_test_test_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'test_test_homepage');
            }

            return array (  '_controller' => 'Test\\Bundle\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'test_test_homepage',);
        }
        not_test_test_homepage:

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/admin/api/doc') && preg_match('#^/admin/api/doc(?:/(?P<view>[^/]++))?$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // oro_default
            if ('/admin' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_default;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_default');
                }

                return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',  '_route' => 'oro_default',);
            }
            not_oro_default:

            // oro_sync_ticket
            if ('/admin/socket_ticket' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_sync_ticket;
                }

                return array (  '_controller' => 'Oro\\Bundle\\SyncBundle\\Controller\\TicketController::postAction',  '_route' => 'oro_sync_ticket',);
            }
            not_oro_sync_ticket:

            // oro_platform_system_info
            if ('/admin/platform/information' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\PlatformBundle\\Controller\\PlatformController::systemInfoAction',  '_route' => 'oro_platform_system_info',);
            }

            if (0 === strpos($pathinfo, '/admin/ui')) {
                // oro_ui_index
                if ('/admin/ui' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:index.html.twig',  '_route' => 'oro_ui_index',);
                }

                if (0 === strpos($pathinfo, '/admin/ui/1column')) {
                    // oro_ui_1column
                    if ('/admin/ui/1column' === $pathinfo) {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumn.html.twig',  '_route' => 'oro_ui_1column',);
                    }

                    if (0 === strpos($pathinfo, '/admin/ui/1column-')) {
                        // oro_ui_1column_menu
                        if ('/admin/ui/1column-menu' === $pathinfo) {
                            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnMenu.html.twig',  '_route' => 'oro_ui_1column_menu',);
                        }

                        // oro_ui_1column_toolbar
                        if ('/admin/ui/1column-toolbar' === $pathinfo) {
                            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnWithToolbar.html.twig',  '_route' => 'oro_ui_1column_toolbar',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/ui/2columns-')) {
                    // oro_ui_2columns_left
                    if ('/admin/ui/2columns-left' === $pathinfo) {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnLeft.html.twig',  '_route' => 'oro_ui_2columns_left',);
                    }

                    // oro_ui_2columns_right
                    if ('/admin/ui/2columns-right' === $pathinfo) {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnRight.html.twig',  '_route' => 'oro_ui_2columns_right',);
                    }

                }

                // oro_ui_3columns
                if ('/admin/ui/3columns' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:threeColumn.html.twig',  '_route' => 'oro_ui_3columns',);
                }

                // oro_ui_forgot_password
                if ('/admin/ui/forgot-password' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:forgotPassword.html.twig',  '_route' => 'oro_ui_forgot_password',);
                }

                // oro_ui_login
                if ('/admin/ui/login' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:loginPage.html.twig',  '_route' => 'oro_ui_login',);
                }

                // oro_ui_registration
                if ('/admin/ui/registration' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:registrationPage.html.twig',  '_route' => 'oro_ui_registration',);
                }

                // oro_ui_404
                if ('/admin/ui/404' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page404.html.twig',  '_route' => 'oro_ui_404',);
                }

                // oro_ui_503
                if ('/admin/ui/503' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page503.html.twig',  '_route' => 'oro_ui_503',);
                }

                // oro_ui_form_elements
                if ('/admin/ui/form-elements' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formElements.html.twig',  '_route' => 'oro_ui_form_elements',);
                }

                // oro_ui_messages
                if ('/admin/ui/messages' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:systemMessages.html.twig',  '_route' => 'oro_ui_messages',);
                }

                // oro_ui_buttons
                if ('/admin/ui/buttons' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:buttonsPage.html.twig',  '_route' => 'oro_ui_buttons',);
                }

                // oro_ui_tables
                if ('/admin/ui/tables' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:tablesPage.html.twig',  '_route' => 'oro_ui_tables',);
                }

                // oro_ui_general_elements
                if ('/admin/ui/general-elements' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:generalElements.html.twig',  '_route' => 'oro_ui_general_elements',);
                }

                // oro_ui_dialog_styled
                if ('/admin/ui/dialog-styled' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:dialogStyledPage.html.twig',  '_route' => 'oro_ui_dialog_styled',);
                }

                if (0 === strpos($pathinfo, '/admin/ui/grid-page')) {
                    // oro_ui_grid_page
                    if ('/admin/ui/grid-page' === $pathinfo) {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPage.html.twig',  '_route' => 'oro_ui_grid_page',);
                    }

                    // oro_ui_grid_without_bar_page
                    if ('/admin/ui/grid-page-withoutabr' === $pathinfo) {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPageWithoutBar.html.twig',  '_route' => 'oro_ui_grid_without_bar_page',);
                    }

                }

                // oro_ui_record_edit
                if ('/admin/ui/record-edit' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:RecordEdit.html.twig',  '_route' => 'oro_ui_record_edit',);
                }

                // oro_ui_title_bar
                if ('/admin/ui/entity-title-bar' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:EntityTitleBar.html.twig',  '_route' => 'oro_ui_title_bar',);
                }

                // oro_ui_form_horizontal
                if ('/admin/ui/form-horizontal' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formHorizontal.html.twig',  '_route' => 'oro_ui_form_horizontal',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/organization')) {
                if (0 === strpos($pathinfo, '/admin/organization/business_unit')) {
                    // oro_business_unit_create
                    if ('/admin/organization/business_unit/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction',  '_route' => 'oro_business_unit_create',);
                    }

                    // oro_business_unit_view
                    if (0 === strpos($pathinfo, '/admin/organization/business_unit/view') && preg_match('#^/admin/organization/business_unit/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_view')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction',));
                    }

                    // oro_business_unit_search
                    if (0 === strpos($pathinfo, '/admin/organization/business_unit/search') && preg_match('#^/admin/organization/business_unit/search/(?P<organizationId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_search')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::searchAction',));
                    }

                    // oro_business_unit_update
                    if (0 === strpos($pathinfo, '/admin/organization/business_unit/update') && preg_match('#^/admin/organization/business_unit/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction',));
                    }

                    // oro_business_unit_index
                    if (preg_match('#^/admin/organization/business_unit(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/organization/business_unit/widget')) {
                        // oro_business_unit_widget_info
                        if (0 === strpos($pathinfo, '/admin/organization/business_unit/widget/info') && preg_match('#^/admin/organization/business_unit/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_info')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::infoAction',));
                        }

                        // oro_business_unit_widget_users
                        if (0 === strpos($pathinfo, '/admin/organization/business_unit/widget/users') && preg_match('#^/admin/organization/business_unit/widget/users/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_users')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::usersAction',));
                        }

                    }

                }

                // oro_organization_update_current
                if ('/admin/organization/update_current' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\OrganizationController::updateCurrentAction',  '_route' => 'oro_organization_update_current',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_businessunits
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_businessunits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_businessunits:

                // oro_api_post_businessunit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_businessunit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_businessunit:

                // oro_api_put_businessunit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_businessunit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_businessunit:

                // oro_api_get_businessunit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_businessunit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_businessunit:

                // oro_api_delete_businessunit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_businessunit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_businessunit:

                // oro_api_options_businessunits
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_businessunits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_businessunits:

                // oro_api_options_businessunits_auto_1412
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_businessunits_auto_1412;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits_auto_1412')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_businessunits_auto_1412:

                // oro_api_post_businessunit_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_businessunit_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit_deprecated')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_businessunit_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/security')) {
                // oro_security_access_levels
                if (0 === strpos($pathinfo, '/admin/security/acl-access-levels') && preg_match('#^/admin/security/acl\\-access\\-levels/(?P<oid>[\\w]+:[\\w\\:\\(\\)\\|]+)(?:/(?P<permission>[\\w/]+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_access_levels')), array (  '_format' => 'json',  'permission' => NULL,  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
                }

                // oro_security_switch_organization
                if (0 === strpos($pathinfo, '/admin/security/switch-organization') && preg_match('#^/admin/security/switch\\-organization(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_switch_organization')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::switchOrganizationAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/attachment')) {
                    // oro_attachment_widget_attachments
                    if (0 === strpos($pathinfo, '/admin/attachment/view/widget') && preg_match('#^/admin/attachment/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_widget_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::widgetAction',));
                    }

                    // oro_attachment_create
                    if (0 === strpos($pathinfo, '/admin/attachment/create') && preg_match('#^/admin/attachment/create/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_create')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::createAction',));
                    }

                    // oro_attachment_update
                    if (0 === strpos($pathinfo, '/admin/attachment/update') && preg_match('#^/admin/attachment/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_update')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::updateAction',));
                    }

                    // oro_attachment_file
                    if (preg_match('#^/admin/attachment/(?P<codedString>[^/\\.]++)\\.(?P<extension>\\w+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getAttachmentAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_attachment
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_attachment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_attachment:

                    // oro_api_delete_attachment
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_attachment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_delete_attachment:

                    // oro_api_options_attachments
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/attachments(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_attachments;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_attachments:

                    // oro_api_options_attachments_auto_1413
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/attachment(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_attachments_auto_1413;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments_auto_1413')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_attachments_auto_1413:

                    // oro_api_get_file
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/files/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|binary))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_file;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_file:

                    // oro_api_options_files
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/files(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_files;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_files:

                    // oro_api_options_files_auto_1414
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/file(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_files_auto_1414;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files_auto_1414')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_files_auto_1414:

                }

            }

            if (0 === strpos($pathinfo, '/admin/message-queue/jobs')) {
                // oro_message_queue_root_jobs
                if ('/admin/message-queue/jobs' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_message_queue_root_jobs;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_message_queue_root_jobs');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\JobController::rootJobsAction',  '_route' => 'oro_message_queue_root_jobs',);
                }
                not_oro_message_queue_root_jobs:

                // oro_message_queue_child_jobs
                if (preg_match('#^/admin/message\\-queue/jobs/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_message_queue_child_jobs')), array (  '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\JobController::childJobsAction',));
                }

            }

            // oro_api_message_queue_job_interrupt_root_job
            if (0 === strpos($pathinfo, '/admin/api/rest') && preg_match('#^/admin/api/rest/(?P<version>latest|v1)/message\\-queue/job/interrupt/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_message_queue_job_interrupt_root_job;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_message_queue_job_interrupt_root_job')), array (  '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\Api\\Rest\\JobController::interruptRootJobAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_message_queue_job_interrupt_root_job:

            if (0 === strpos($pathinfo, '/admin/email')) {
                if (0 === strpos($pathinfo, '/admin/email/autoresponserule')) {
                    // oro_email_autoresponserule_create
                    if (0 === strpos($pathinfo, '/admin/email/autoresponserule/create') && preg_match('#^/admin/email/autoresponserule/create(?:/(?P<mailbox>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_create')), array (  'mailbox' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::createAction',));
                    }

                    // oro_email_autoresponserule_update
                    if (0 === strpos($pathinfo, '/admin/email/autoresponserule/update') && preg_match('#^/admin/email/autoresponserule/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::updateAction',));
                    }

                }

                // oro_email_check_smtp_connection
                if ('/admin/email/check-smtp-connection' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::checkSmtpConnectionAction',  '_route' => 'oro_email_check_smtp_connection',);
                }

                // oro_email_purge_emails_attachments
                if ('/admin/email/purge-emails-attachments' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::purgeEmailsAttachmentsAction',  '_route' => 'oro_email_purge_emails_attachments',);
                }

                // oro_email_view
                if (0 === strpos($pathinfo, '/admin/email/view') && preg_match('#^/admin/email/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction',));
                }

                // oro_email_last
                if ('/admin/email/last' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::lastAction',  '_route' => 'oro_email_last',);
                }

                // oro_email_thread_view
                if (0 === strpos($pathinfo, '/admin/email/view/thread') && preg_match('#^/admin/email/view/thread/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewThreadAction',));
                }

                // oro_email_thread_widget
                if (0 === strpos($pathinfo, '/admin/email/widget/thread') && preg_match('#^/admin/email/widget/thread/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_widget')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::threadWidgetAction',));
                }

                // oro_email_user_thread_view
                if (0 === strpos($pathinfo, '/admin/email/view/user-thread') && preg_match('#^/admin/email/view/user\\-thread/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_user_thread_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewUserThreadAction',));
                }

                // oro_email_user_thread_widget
                if (0 === strpos($pathinfo, '/admin/email/widget/user-thread') && preg_match('#^/admin/email/widget/user\\-thread/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_user_thread_widget')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userThreadWidgetAction',));
                }

                if (0 === strpos($pathinfo, '/admin/email/view-')) {
                    // oro_email_items_view
                    if ('/admin/email/view-items' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::itemsAction',  '_route' => 'oro_email_items_view',);
                    }

                    // oro_email_view_group
                    if (0 === strpos($pathinfo, '/admin/email/view-group') && preg_match('#^/admin/email/view\\-group/(?P<id>\\d+)$#sD', $pathinfo, $matches) && (($request !== null) && $request->get("_widgetContainer"))) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view_group')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewGroupAction',));
                    }

                }

                // oro_email_activity_view
                if (0 === strpos($pathinfo, '/admin/email/activity/view') && preg_match('#^/admin/email/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_activity_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::activityAction',));
                }

                // oro_email_email_create
                if ('/admin/email/create' === $pathinfo && (($request !== null) && $request->get("_widgetContainer"))) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction',  '_route' => 'oro_email_email_create',);
                }

                if (0 === strpos($pathinfo, '/admin/email/reply')) {
                    // oro_email_email_reply
                    if (preg_match('#^/admin/email/reply/(?P<id>\\d+)$#sD', $pathinfo, $matches) && (($request !== null) && $request->get("_widgetContainer"))) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAction',));
                    }

                    // oro_email_email_reply_all
                    if (0 === strpos($pathinfo, '/admin/email/replyall') && preg_match('#^/admin/email/replyall/(?P<id>\\d+)$#sD', $pathinfo, $matches) && (($request !== null) && $request->get("_widgetContainer"))) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply_all')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAllAction',));
                    }

                }

                // oro_email_email_forward
                if (0 === strpos($pathinfo, '/admin/email/forward') && preg_match('#^/admin/email/forward/(?P<id>\\d+)$#sD', $pathinfo, $matches) && (($request !== null) && $request->get("_widgetContainer"))) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_forward')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::forwardAction',));
                }

                // oro_email_body
                if (0 === strpos($pathinfo, '/admin/email/body') && preg_match('#^/admin/email/body/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction',));
                }

                // oro_email_attachment
                if (0 === strpos($pathinfo, '/admin/email/attachment') && preg_match('#^/admin/email/attachment/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction',));
                }

                // oro_resize_email_attachment
                if (0 === strpos($pathinfo, '/admin/email/media/cache/email_attachment/resize') && preg_match('#^/admin/email/media/cache/email_attachment/resize/(?P<id>\\d+)/(?P<width>\\d+)/(?P<height>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_resize_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::getResizedAttachmentImageAction',));
                }

                if (0 === strpos($pathinfo, '/admin/email/attachment')) {
                    // oro_email_body_attachments
                    if (0 === strpos($pathinfo, '/admin/email/attachments') && preg_match('#^/admin/email/attachments/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body_attachments')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::downloadAttachmentsAction',));
                    }

                    // oro_email_attachment_link
                    if (preg_match('#^/admin/email/attachment/(?P<id>\\d+)/link$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment_link')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::linkAction',));
                    }

                }

                // oro_email_widget_emails
                if ('/admin/email/widget' === $pathinfo && (($request !== null) && $request->get("_widgetContainer"))) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::emailsAction',  '_route' => 'oro_email_widget_emails',);
                }

                // oro_email_widget_base_emails
                if ('/admin/email/base-widget' === $pathinfo && (($request !== null) && $request->get("_widgetContainer"))) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::baseEmailsAction',  '_route' => 'oro_email_widget_base_emails',);
                }

                if (0 === strpos($pathinfo, '/admin/email/user-')) {
                    // oro_email_user_emails
                    if ('/admin/email/user-emails' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsAction',  '_route' => 'oro_email_user_emails',);
                    }

                    // oro_email_user_sync_emails
                    if ('/admin/email/user-sync-emails' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsSyncAction',  '_route' => 'oro_email_user_sync_emails',);
                    }

                }

                // oro_email_toggle_seen
                if (0 === strpos($pathinfo, '/admin/email/toggle-seen') && preg_match('#^/admin/email/toggle\\-seen/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_toggle_seen')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::toggleSeenAction',));
                }

                if (0 === strpos($pathinfo, '/admin/email/mark')) {
                    // oro_email_mark_seen
                    if (0 === strpos($pathinfo, '/admin/email/mark-seen') && preg_match('#^/admin/email/mark\\-seen/(?P<id>\\d+)/(?P<status>\\d+)(?:/(?P<checkThread>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_seen')), array (  'checkThread' => true,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markSeenAction',));
                    }

                    // oro_email_mark_all_as_seen
                    if ('/admin/email/mark_all_as_seen' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markAllEmailsAsSeenAction',  '_route' => 'oro_email_mark_all_as_seen',);
                    }

                }

                // oro_email_mark_massaction
                if (preg_match('#^/admin/email/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_massaction')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markMassAction',));
                }

                // oro_email_autocomplete_recipient
                if ('/admin/email/autocomplete-recipient' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::autocompleteRecipientAction',  '_route' => 'oro_email_autocomplete_recipient',);
                }

                if (0 === strpos($pathinfo, '/admin/email/email')) {
                    if (0 === strpos($pathinfo, '/admin/email/emailtemplate')) {
                        // oro_email_emailtemplate_index
                        if (preg_match('#^/admin/email/emailtemplate(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction',));
                        }

                        // oro_email_emailtemplate_update
                        if (0 === strpos($pathinfo, '/admin/email/emailtemplate/update') && preg_match('#^/admin/email/emailtemplate/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/email/emailtemplate/c')) {
                            // oro_email_emailtemplate_create
                            if ('/admin/email/emailtemplate/create' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction',  '_route' => 'oro_email_emailtemplate_create',);
                            }

                            // oro_email_emailtemplate_clone
                            if (0 === strpos($pathinfo, '/admin/email/emailtemplate/clone') && preg_match('#^/admin/email/emailtemplate/clone(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_clone')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction',));
                            }

                        }

                        // oro_email_emailtemplate_preview
                        if (0 === strpos($pathinfo, '/admin/email/emailtemplate/preview') && preg_match('#^/admin/email/emailtemplate/preview(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_preview')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction',));
                        }

                    }

                    // oro_email_emailorigin_list
                    if ('/admin/email/emailorigin/list' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\OriginController::listAction',  '_route' => 'oro_email_emailorigin_list',);
                    }

                }

            }

            // oro_email_dashboard_recent_emails
            if (0 === strpos($pathinfo, '/admin/dashboard/recent_emails') && preg_match('#^/admin/dashboard/recent_emails/(?P<widget>[\\w-]+)(?:/(?P<activeTab>inbox|sent|new)(?:/(?P<contentType>full|tab))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_dashboard_recent_emails')), array (  'activeTab' => 'inbox',  'contentType' => 'full',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Dashboard\\DashboardController::recentEmailsAction',));
            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_emails
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emails:

                // oro_api_get_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emails/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_email:

                // oro_api_put_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_email:

                // oro_api_post_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_email:

                // oro_api_options_emails
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emails:

                // oro_api_options_emails_auto_1415
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/email(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emails_auto_1415;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails_auto_1415')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emails_auto_1415:

                // oro_api_delete_autoresponserule
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/autoresponserules/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_autoresponserule;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_autoresponserule')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_autoresponserule:

                // oro_api_options_autoresponserules
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/autoresponserules(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_autoresponserules;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_autoresponserules:

                // oro_api_options_autoresponserules_auto_1416
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/autoresponserule(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_autoresponserules_auto_1416;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules_auto_1416')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_autoresponserules_auto_1416:

                // oro_api_get_emailorigins
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emailorigins;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emailorigins:

                // oro_api_get_emailorigin
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailorigins/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emailorigin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigin')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emailorigin:

                // oro_api_options_emailorigins
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emailorigins;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emailorigins:

                // oro_api_options_emailorigins_auto_1417
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailorigin(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emailorigins_auto_1417;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins_auto_1417')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emailorigins_auto_1417:

                // oro_api_delete_emailtemplate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_emailtemplate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_emailtemplate:

                // oro_api_get_emailtemplates
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplates/list(?:/(?P<entityName>\\w+)(?:/(?P<includeNonEntity>\\d+)(?:/(?P<includeSystemTemplates>\\d+)(?:\\.(?P<_format>json))?)?)?)?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emailtemplates;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',  'entityName' => NULL,  'includeNonEntity' => false,  'includeSystemTemplates' => true,  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emailtemplates:

                // oro_api_get_emailtemplate_variables
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplates/variables(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emailtemplate_variables;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_variables')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emailtemplate_variables:

                // oro_api_get_emailtemplate_compiled
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplates/compiled/(?P<id>\\d+)/(?P<entityId>\\d*)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_emailtemplate_compiled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_compiled')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_emailtemplate_compiled:

                // oro_api_options_emailtemplates
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplates(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emailtemplates;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emailtemplates:

                // oro_api_options_emailtemplates_auto_1418
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailtemplate(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_emailtemplates_auto_1418;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates_auto_1418')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_emailtemplates_auto_1418:

                // oro_api_get_email_activity_relations_by_filters
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_email_activity_relations_by_filters;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_activity_relations_by_filters')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::cgetByFiltersAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_email_activity_relations_by_filters:

                // oro_api_options_email_activity_relations
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/email/activity/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_email_activity_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityEntityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_email_activity_relations:

                // oro_api_options_email_search_relations
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/email/search/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_email_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_email_search_relations:

                // oro_api_get_activity_email_suggestions
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/suggestions(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_email_suggestions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_email_suggestions')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_email_suggestions:

                // oro_api_options_activity_email_suggestions
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/email/suggestions(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_email_suggestions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_email_suggestions')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_email_suggestions:

                // oro_api_options_activity_email_suggestions_auto_1419
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/email/suggestion(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_email_suggestions_auto_1419;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_email_suggestions_auto_1419')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_email_suggestions_auto_1419:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/config/mailbox')) {
                    // oro_email_mailbox_update
                    if (0 === strpos($pathinfo, '/admin/config/mailbox/update') && preg_match('#^/admin/config/mailbox/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::updateAction',));
                    }

                    // oro_email_mailbox_create
                    if ('/admin/config/mailbox/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::createAction',  '_route' => 'oro_email_mailbox_create',);
                    }

                    // oro_email_mailbox_delete
                    if (0 === strpos($pathinfo, '/admin/config/mailbox/delete') && preg_match('#^/admin/config/mailbox/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_email_mailbox_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_delete')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::deleteAction',));
                    }
                    not_oro_email_mailbox_delete:

                    // oro_email_mailbox_users_search
                    if (0 === strpos($pathinfo, '/admin/config/mailbox/users/search') && preg_match('#^/admin/config/mailbox/users/search/(?P<organizationId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_users_search')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::searchUsersAction',));
                    }

                }

                // oro_cron_schedule_index
                if ('/admin/cron/schedule' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_cron_schedule_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_cron_schedule_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\ScheduleController::indexAction',  '_route' => 'oro_cron_schedule_index',);
                }
                not_oro_cron_schedule_index:

            }

            // oro_user_google_login
            if ('/admin/login/check-google' === $pathinfo) {
                return array('_route' => 'oro_user_google_login');
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                if (0 === strpos($pathinfo, '/admin/user/group')) {
                    // oro_user_group_create
                    if ('/admin/user/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                    }

                    // oro_user_group_update
                    if (0 === strpos($pathinfo, '/admin/user/group/update') && preg_match('#^/admin/user/group/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',));
                    }

                    // oro_user_group_index
                    if (preg_match('#^/admin/user/group(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',));
                    }

                }

                // oro_user_reset_send_email
                if ('/admin/user/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_user_reset_send_email;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
                }
                not_oro_user_reset_send_email:

                // oro_user_reset_request
                if ('/admin/user/reset-request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_user_reset_request;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
                }
                not_oro_user_reset_request:

                // oro_user_send_forced_password_reset_email
                if (0 === strpos($pathinfo, '/admin/user/send-forced-password-reset-email') && preg_match('#^/admin/user/send\\-forced\\-password\\-reset\\-email/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_send_forced_password_reset_email')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendForcedResetEmailAction',));
                }

                // oro_user_mass_password_reset
                if ('/admin/user/mass-password-reset' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_user_mass_password_reset;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_user_mass_password_reset');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::massPasswordResetAction',  '_route' => 'oro_user_mass_password_reset',);
                }
                not_oro_user_mass_password_reset:

                // oro_user_reset_check_email
                if ('/admin/user/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_user_reset_check_email;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
                }
                not_oro_user_reset_check_email:

                // oro_user_reset_reset
                if (0 === strpos($pathinfo, '/admin/user/reset') && preg_match('#^/admin/user/reset/(?P<token>\\w+)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_reset_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
                }
                not_oro_user_reset_reset:

                // oro_user_reset_set_password
                if (0 === strpos($pathinfo, '/admin/user/set-password') && preg_match('#^/admin/user/set\\-password/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_reset_set_password;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_set_password')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::setPasswordAction',));
                }
                not_oro_user_reset_set_password:

                if (0 === strpos($pathinfo, '/admin/user/role')) {
                    // oro_user_role_create
                    if ('/admin/user/role/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                    }

                    // oro_user_role_view
                    if (0 === strpos($pathinfo, '/admin/user/role/view') && preg_match('#^/admin/user/role/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::viewAction',));
                    }

                    // oro_user_role_update
                    if (0 === strpos($pathinfo, '/admin/user/role/update') && preg_match('#^/admin/user/role/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',));
                    }

                    // oro_user_role_index
                    if (preg_match('#^/admin/user/role(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user/log')) {
                    if (0 === strpos($pathinfo, '/admin/user/login')) {
                        // oro_user_security_login
                        if ('/admin/user/login' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                        }

                        // oro_user_security_check
                        if ('/admin/user/login-check' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                        }

                    }

                    // oro_user_security_logout
                    if ('/admin/user/logout' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user/status')) {
                    // oro_user_status_list
                    if ('/admin/user/status' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_user_status_list;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_user_status_list');
                        }

                        return array (  'limit' => 10,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::indexAction',  '_route' => 'oro_user_status_list',);
                    }
                    not_oro_user_status_list:

                    // oro_user_status_create
                    if ('/admin/user/status/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::createAction',  '_route' => 'oro_user_status_create',);
                    }

                    // oro_user_status_delete
                    if (0 === strpos($pathinfo, '/admin/user/status/delete') && preg_match('#^/admin/user/status/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::deleteAction',));
                    }

                    // oro_user_status_set_current
                    if (0 === strpos($pathinfo, '/admin/user/status/set-current') && preg_match('#^/admin/user/status/set\\-current/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_set_current')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::setCurrentStatusAction',));
                    }

                    // oro_user_status_clear_current
                    if ('/admin/user/status/clear-current' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::clearCurrentStatusAction',  '_route' => 'oro_user_status_clear_current',);
                    }

                }

                // oro_user_view
                if (0 === strpos($pathinfo, '/admin/user/view') && preg_match('#^/admin/user/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/user/profile')) {
                    // oro_user_profile_view
                    if ('/admin/user/profile/view' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                    }

                    // oro_user_profile_update
                    if ('/admin/user/profile/edit' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                    }

                }

                // oro_user_apigen
                if (0 === strpos($pathinfo, '/admin/user/apigen') && preg_match('#^/admin/user/apigen/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_apigen;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
                }
                not_oro_user_apigen:

                // oro_user_create
                if ('/admin/user/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
                }

                // oro_user_update
                if (0 === strpos($pathinfo, '/admin/user/update') && preg_match('#^/admin/user/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',));
                }

                // oro_user_index
                if (preg_match('#^/admin/user(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',));
                }

                // oro_user_widget_info
                if (0 === strpos($pathinfo, '/admin/user/widget/info') && preg_match('#^/admin/user/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_widget_info')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::infoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/config/user')) {
                // oro_user_config
                if (preg_match('#^/admin/config/user/(?P<id>\\d+)(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_config')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ConfigurationController::userConfigAction',));
                }

                // oro_user_profile_configuration
                if (0 === strpos($pathinfo, '/admin/config/user/profile') && preg_match('#^/admin/config/user/profile(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_profile_configuration')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ConfigurationController::userProfileConfigAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_users
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_users:

                // oro_api_get_user
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user:

                // oro_api_post_user
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_user:

                // oro_api_put_user
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_user:

                // oro_api_delete_user
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_user:

                // oro_api_get_user_roles
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/roles(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_roles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_roles:

                // oro_api_get_user_groups
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/groups(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_groups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_groups:

                // oro_api_get_user_filter
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/user/filter(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_filter')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_filter:

                // oro_api_options_users
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_users:

                // oro_api_options_users_auto_1420
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_users_auto_1420;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users_auto_1420')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_users_auto_1420:

                // oro_api_get_roles
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_roles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_roles:

                // oro_api_get_role
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_role:

                // oro_api_post_role
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_role:

                // oro_api_put_role
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_role:

                // oro_api_delete_role
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_role:

                // oro_api_get_role_byname
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles/(?P<name>[^/]++)/byname(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_role_byname;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role_byname')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_role_byname:

                // oro_api_options_roles
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_roles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_roles:

                // oro_api_options_roles_auto_1421
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_roles_auto_1421;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles_auto_1421')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_roles_auto_1421:

                // oro_api_get_groups
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_groups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_groups:

                // oro_api_get_group
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_group:

                // oro_api_post_group
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_group:

                // oro_api_put_group
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_group:

                // oro_api_delete_group
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_group:

                // oro_api_options_groups
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_groups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_groups:

                // oro_api_options_groups_auto_1422
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_groups_auto_1422;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups_auto_1422')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_groups_auto_1422:

                // oro_api_get_user_permissions
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/permissions(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_permissions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_permissions:

                // oro_api_options_user_permissions
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/user/permissions(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_user_permissions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_user_permissions:

                // oro_api_options_user_permissions_auto_1423
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/user/permission(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_user_permissions_auto_1423;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions_auto_1423')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_user_permissions_auto_1423:

                // oro_api_post_role_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_role_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_role_deprecated:

                // oro_api_post_user_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_user_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_user_deprecated:

                // oro_api_post_group_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_group_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_group_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/datagrid')) {
                // oro_datagrid_widget
                if (0 === strpos($pathinfo, '/admin/datagrid/widget') && preg_match('#^/admin/datagrid/widget/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_widget')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::widgetAction',));
                }

                // oro_datagrid_index
                if (preg_match('#^/admin/datagrid/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
                }

                // oro_datagrid_export_action
                if (preg_match('#^/admin/datagrid/(?P<gridName>[\\w\\:-]+)/export/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_datagrid_export_action;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_datagrid_export_action');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_export_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::exportAction',));
                }
                not_oro_datagrid_export_action:

                // oro_datagrid_mass_action
                if (preg_match('#^/admin/datagrid/(?P<gridName>[\\w\\:-]+)/massAction/(?P<actionName>[\\w-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_datagrid_api_rest_gridview_post
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/gridviews(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_datagrid_api_rest_gridview_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_post')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_datagrid_api_rest_gridview_post:

                // oro_datagrid_api_rest_gridview_put
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_datagrid_api_rest_gridview_put;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_put')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_datagrid_api_rest_gridview_put:

                // oro_datagrid_api_rest_gridview_delete
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_datagrid_api_rest_gridview_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_delete')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_datagrid_api_rest_gridview_delete:

                // oro_datagrid_api_rest_gridview_default
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>.+)/default/(?P<default>\\d+)/gridName(?:/(?P<gridName>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_datagrid_api_rest_gridview_default;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_default')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::defaultAction',  'default' => false,  'gridName' => NULL,  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_datagrid_api_rest_gridview_default:

                // oro_datagrid_api_rest_gridview_options
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_datagrid_api_rest_gridview_options;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_options')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_datagrid_api_rest_gridview_options:

            }

            // oro_sso_google_login
            if ('/admin/login/check-google' === $pathinfo) {
                return array('_route' => 'oro_sso_google_login');
            }

            if (0 === strpos($pathinfo, '/admin/translation')) {
                // oro_translation_translation_index
                if ('/admin/translation' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_translation_translation_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_translation_translation_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\TranslationController::indexAction',  '_route' => 'oro_translation_translation_index',);
                }
                not_oro_translation_translation_index:

                // oro_translation_mass_reset
                if (preg_match('#^/admin/translation/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_mass_reset')), array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\TranslationController::resetMassAction',));
                }

            }

            // oro_translation_language_index
            if ('/admin/language' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_translation_language_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_translation_language_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\LanguageController::indexAction',  '_route' => 'oro_translation_language_index',);
            }
            not_oro_translation_language_index:

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_translations
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/translations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_translations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_translations')), array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_translations:

                // oro_api_patch_translation
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/translations/(?P<locale>[^/]++)/(?P<domain>[^/]++)/(?P<key>[^/]++)/patch(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_api_patch_translation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_patch_translation')), array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::patchAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_patch_translation:

            }

            if (0 === strpos($pathinfo, '/admin/dictionary')) {
                // oro_dictionary_search
                if (preg_match('#^/admin/dictionary/(?P<dictionary>[^/]++)/search$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_search')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::searchAction',));
                }

                // oro_dictionary_value
                if (preg_match('#^/admin/dictionary/(?P<dictionary>[^/]++)/values$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_value')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::valuesAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/entity')) {
                // oro_entity_index
                if (preg_match('#^/admin/entity/(?P<entityName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_index')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction',));
                }

                // oro_entity_detailed
                if (0 === strpos($pathinfo, '/admin/entity/detailed') && preg_match('#^/admin/entity/detailed/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_detailed')), array (  'id' => 0,  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction',));
                }

                // oro_entity_relation
                if (0 === strpos($pathinfo, '/admin/entity/relation') && preg_match('#^/admin/entity/relation/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_relation')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction',));
                }

                // oro_entity_view
                if (0 === strpos($pathinfo, '/admin/entity/view') && preg_match('#^/admin/entity/view/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_view')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction',));
                }

                // oro_entity_update
                if (0 === strpos($pathinfo, '/admin/entity/update') && preg_match('#^/admin/entity/update/(?P<entityName>[^/]++)/item(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction',));
                }

                // oro_entity_delete
                if (0 === strpos($pathinfo, '/admin/entity/delete') && preg_match('#^/admin/entity/delete/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_delete')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_fields_entity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entities/fields(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_fields_entity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_fields_entity:

                // oro_api_get_entities
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entities(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_entities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entities')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_entities:

                // oro_api_get_entity_fields
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entities/(?P<entityName>((\\w+)_)+(\\w+))/fields(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_entity_fields;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_entity_fields:

                // oro_api_get_entity_aliases
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entities/aliases(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_entity_aliases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_aliases')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityAliasController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_entity_aliases:

                // oro_api_patch_entity_data
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entity_data/(?P<className>[^/]++)/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_api_patch_entity_data;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_patch_entity_data')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityDataController::patchAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_patch_entity_data:

            }

            if (0 === strpos($pathinfo, '/admin/locale/localization')) {
                // oro_locale_localization_view
                if (0 === strpos($pathinfo, '/admin/locale/localization/view') && preg_match('#^/admin/locale/localization/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_locale_localization_view')), array (  '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::viewAction',));
                }

                // oro_locale_localization_index
                if ('/admin/locale/localization' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_locale_localization_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_locale_localization_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::indexAction',  '_route' => 'oro_locale_localization_index',);
                }
                not_oro_locale_localization_index:

                // oro_locale_localization_create
                if ('/admin/locale/localization/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::createAction',  '_route' => 'oro_locale_localization_create',);
                }

                // oro_locale_localization_update
                if (0 === strpos($pathinfo, '/admin/locale/localization/update') && preg_match('#^/admin/locale/localization/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_locale_localization_update')), array (  '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/attribute')) {
                // oro_attribute_create
                if (0 === strpos($pathinfo, '/admin/attribute/create') && preg_match('#^/admin/attribute/create/(?P<alias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_create')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::createAction',));
                }

                // oro_attribute_save
                if (0 === strpos($pathinfo, '/admin/attribute/save') && preg_match('#^/admin/attribute/save/(?P<alias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_save')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::saveAction',));
                }

                // oro_attribute_update
                if (0 === strpos($pathinfo, '/admin/attribute/update') && preg_match('#^/admin/attribute/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::updateAction',));
                }

                // oro_attribute_index
                if (0 === strpos($pathinfo, '/admin/attribute/index') && preg_match('#^/admin/attribute/index/(?P<alias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_index')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::indexAction',));
                }

                // oro_attribute_remove
                if (0 === strpos($pathinfo, '/admin/attribute/remove') && preg_match('#^/admin/attribute/remove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::removeAction',));
                }

                // oro_attribute_unremove
                if (0 === strpos($pathinfo, '/admin/attribute/unremove') && preg_match('#^/admin/attribute/unremove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::unremoveAction',));
                }

                if (0 === strpos($pathinfo, '/admin/attribute/family')) {
                    // oro_attribute_family_create
                    if (0 === strpos($pathinfo, '/admin/attribute/family/create') && preg_match('#^/admin/attribute/family/create/(?P<alias>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_family_create')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::createAction',));
                    }

                    // oro_attribute_family_update
                    if (0 === strpos($pathinfo, '/admin/attribute/family/update') && preg_match('#^/admin/attribute/family/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_family_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::updateAction',));
                    }

                    // oro_attribute_family_index
                    if (0 === strpos($pathinfo, '/admin/attribute/family/index') && preg_match('#^/admin/attribute/family/index/(?P<alias>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_family_index')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::indexAction',));
                    }

                    // oro_attribute_family_delete
                    if (0 === strpos($pathinfo, '/admin/attribute/family/delete') && preg_match('#^/admin/attribute/family/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_family_delete')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::deleteAction',));
                    }

                    // oro_attribute_family_view
                    if (0 === strpos($pathinfo, '/admin/attribute/family/view') && preg_match('#^/admin/attribute/family/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attribute_family_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::viewAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/entity')) {
                if (0 === strpos($pathinfo, '/admin/entity/config')) {
                    if (0 === strpos($pathinfo, '/admin/entity/config/audit')) {
                        // oro_entityconfig_audit
                        if (preg_match('#^/admin/entity/config/audit(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction',));
                        }

                        // oro_entityconfig_audit_field
                        if (0 === strpos($pathinfo, '/admin/entity/config/audit_field') && preg_match('#^/admin/entity/config/audit_field(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit_field')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction',));
                        }

                    }

                    // oro_entityconfig_index
                    if ('/admin/entity/config' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_entityconfig_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_entityconfig_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction',  '_route' => 'oro_entityconfig_index',);
                    }
                    not_oro_entityconfig_index:

                    // oro_entityconfig_update
                    if (0 === strpos($pathinfo, '/admin/entity/config/update') && preg_match('#^/admin/entity/config/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction',));
                    }

                    // oro_entityconfig_view
                    if (0 === strpos($pathinfo, '/admin/entity/config/view') && preg_match('#^/admin/entity/config/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/entity/config/field')) {
                        // oro_entityconfig_fields
                        if (0 === strpos($pathinfo, '/admin/entity/config/fields') && preg_match('#^/admin/entity/config/fields(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_fields')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction',));
                        }

                        // oro_entityconfig_field_update
                        if (0 === strpos($pathinfo, '/admin/entity/config/field/update') && preg_match('#^/admin/entity/config/field/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction',));
                        }

                        // oro_entityconfig_field_search
                        if (0 === strpos($pathinfo, '/admin/entity/config/field/search') && preg_match('#^/admin/entity/config/field/search(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/entity/config/widget')) {
                        // oro_entityconfig_widget_info
                        if (0 === strpos($pathinfo, '/admin/entity/config/widget/info') && preg_match('#^/admin/entity/config/widget/info/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_info')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::infoAction',));
                        }

                        // oro_entityconfig_widget_unique_keys
                        if (0 === strpos($pathinfo, '/admin/entity/config/widget/unique_keys') && preg_match('#^/admin/entity/config/widget/unique_keys/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_unique_keys')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::uniqueKeysAction',));
                        }

                        // oro_entityconfig_widget_entity_fields
                        if (0 === strpos($pathinfo, '/admin/entity/config/widget/entity_fields') && preg_match('#^/admin/entity/config/widget/entity_fields/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::entityFieldsAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/entity/extend')) {
                    if (0 === strpos($pathinfo, '/admin/entity/extend/update')) {
                        // oro_entityextend_update
                        if (preg_match('#^/admin/entity/extend/update(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction',));
                        }

                        // oro_entityextend_attribute_schema_update
                        if ('/admin/entity/extend/update_attribute_schema' === $pathinfo) {
                            return array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAttributeSchemaAction',  '_route' => 'oro_entityextend_attribute_schema_update',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/entity/extend/entity')) {
                        // oro_entityextend_entity_unique_key
                        if (0 === strpos($pathinfo, '/admin/entity/extend/entity/unique-key') && preg_match('#^/admin/entity/extend/entity/unique\\-key(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unique_key')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction',));
                        }

                        // oro_entityextend_entity_create
                        if ('/admin/entity/extend/entity/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction',  '_route' => 'oro_entityextend_entity_create',);
                        }

                        // oro_entityextend_entity_remove
                        if (0 === strpos($pathinfo, '/admin/entity/extend/entity/remove') && preg_match('#^/admin/entity/extend/entity/remove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction',));
                        }

                        // oro_entityextend_entity_unremove
                        if (0 === strpos($pathinfo, '/admin/entity/extend/entity/unremove') && preg_match('#^/admin/entity/extend/entity/unremove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/entity/extend/field')) {
                        // oro_entityextend_field_create
                        if (0 === strpos($pathinfo, '/admin/entity/extend/field/create') && preg_match('#^/admin/entity/extend/field/create(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_create')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction',));
                        }

                        // oro_entityextend_field_update
                        if (0 === strpos($pathinfo, '/admin/entity/extend/field/update') && preg_match('#^/admin/entity/extend/field/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction',));
                        }

                        // oro_entityextend_field_remove
                        if (0 === strpos($pathinfo, '/admin/entity/extend/field/remove') && preg_match('#^/admin/entity/extend/field/remove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction',));
                        }

                        // oro_entityextend_field_unremove
                        if (0 === strpos($pathinfo, '/admin/entity/extend/field/unremove') && preg_match('#^/admin/entity/extend/field/unremove(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction',));
                        }

                    }

                }

            }

            // oro_api_get_entity_extend_enum
            if (0 === strpos($pathinfo, '/admin/api/rest') && preg_match('#^/admin/api/rest/(?P<version>latest|v1)/entity_extends/enum/(?P<entityName>((\\w+)_)+(\\w+))(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_extend_enum;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_extend_enum')), array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\Api\\Rest\\EnumController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_extend_enum:

            if (0 === strpos($pathinfo, '/admin/integration')) {
                // oro_integration_index
                if ('/admin/integration' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_integration_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_integration_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::indexAction',  '_route' => 'oro_integration_index',);
                }
                not_oro_integration_index:

                // oro_integration_create
                if ('/admin/integration/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::createAction',  '_route' => 'oro_integration_create',);
                }

                // oro_integration_update
                if (0 === strpos($pathinfo, '/admin/integration/update') && preg_match('#^/admin/integration/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_update')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::updateAction',));
                }

                // oro_integration_schedule
                if (0 === strpos($pathinfo, '/admin/integration/schedule') && preg_match('#^/admin/integration/schedule/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_schedule')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::scheduleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/notification')) {
                if (0 === strpos($pathinfo, '/admin/notification/email')) {
                    // oro_notification_emailnotification_index
                    if (preg_match('#^/admin/notification/email(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::indexAction',));
                    }

                    // oro_notification_emailnotification_update
                    if (0 === strpos($pathinfo, '/admin/notification/email/update') && preg_match('#^/admin/notification/email/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::updateAction',));
                    }

                    // oro_notification_emailnotification_create
                    if ('/admin/notification/email/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::createAction',  '_route' => 'oro_notification_emailnotification_create',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/notification/massnotification')) {
                    // oro_notification_massnotification_index
                    if (preg_match('#^/admin/notification/massnotification(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_massnotification_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::indexAction',));
                    }

                    // oro_notification_massnotification_view
                    if (0 === strpos($pathinfo, '/admin/notification/massnotification/view') && preg_match('#^/admin/notification/massnotification/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_massnotification_view')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::viewAction',));
                    }

                    // oro_notification_massnotification_info
                    if (0 === strpos($pathinfo, '/admin/notification/massnotification/info') && preg_match('#^/admin/notification/massnotification/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_massnotification_info')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::infoAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_delete_emailnotication
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailnotications/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_emailnotication;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailnotication')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_delete_emailnotication:

                    // oro_api_options_emailnotications
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailnotications(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_emailnotications;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailnotications')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_emailnotications:

                }

                if (0 === strpos($pathinfo, '/admin/actionwidget')) {
                    // oro_action_widget_buttons
                    if ('/admin/actionwidget/buttons' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::buttonsAction',  '_route' => 'oro_action_widget_buttons',);
                    }

                    // oro_action_widget_form
                    if (0 === strpos($pathinfo, '/admin/actionwidget/form') && preg_match('#^/admin/actionwidget/form/(?P<operationName>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_action_widget_form')), array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::formAction',));
                    }

                }

                // oro_action_operation_execute
                if (0 === strpos($pathinfo, '/admin/ajax/operation/execute') && preg_match('#^/admin/ajax/operation/execute/(?P<operationName>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_action_operation_execute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_action_operation_execute')), array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\AjaxController::executeAction',));
                }
                not_oro_action_operation_execute:

                if (0 === strpos($pathinfo, '/admin/activities')) {
                    // oro_activity_view_activities
                    if (0 === strpos($pathinfo, '/admin/activities/view') && preg_match('#^/admin/activities/view/(?P<entity>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_view_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::activitiesAction',));
                    }

                    // oro_activity_context
                    if (preg_match('#^/admin/activities/(?P<activity>[^/]++)/(?P<id>[^/]++)/context$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_context')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::contextAction',));
                    }

                    // oro_activity_form_autocomplete_search
                    if (preg_match('#^/admin/activities/(?P<activity>[^/]++)/search/autocomplete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_form_autocomplete_search')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\AutocompleteController::autocompleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_activity_types
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_types;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTypesAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activity_types:

                    // oro_api_get_activity_target_types_auto_1424
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_types_auto_1424;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_1424')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                    }
                    not_oro_api_get_activity_target_types_auto_1424:

                    // oro_api_get_activity_target_types_auto_1425
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_types_auto_1425;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_1425')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_get_activity_target_types_auto_1425:

                    // oro_api_get_activity_target_types_auto_1426
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_types_auto_1426;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_1426')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_get_activity_target_types_auto_1426:

                    // oro_api_get_activity_target_types_auto_1427
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_types_auto_1427;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_1427')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_get_activity_target_types_auto_1427:

                    // oro_api_get_activity_target_types_auto_1428
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_types_auto_1428;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_1428')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_get_activity_target_types_auto_1428:

                    // oro_api_options_activities
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activities;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activities:

                    // oro_api_options_activities_auto_1429
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activities_auto_1429;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities_auto_1429')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activities_auto_1429:

                    // oro_api_get_email_activity_relations
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>[^/]++)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_email_activity_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_email_activity_relations:

                    // oro_api_get_activity_relations_auto_1430
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_relations_auto_1430;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_1430')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_get_activity_relations_auto_1430:

                    // oro_api_get_activity_relations_auto_1431
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_relations_auto_1431;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_1431')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_get_activity_relations_auto_1431:

                    // oro_api_get_activity_relations_auto_1432
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_relations_auto_1432;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_1432')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_get_activity_relations_auto_1432:

                    // oro_api_get_activity_relations_auto_1433
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_relations_auto_1433;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_1433')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_get_activity_relations_auto_1433:

                    // oro_api_post_activity_relation_auto_1434
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_activity_relation_auto_1434;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_1434')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                    }
                    not_oro_api_post_activity_relation_auto_1434:

                    // oro_api_post_activity_relation_auto_1435
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_activity_relation_auto_1435;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_1435')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_post_activity_relation_auto_1435:

                    // oro_api_post_activity_relation_auto_1436
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_activity_relation_auto_1436;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_1436')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_post_activity_relation_auto_1436:

                    // oro_api_post_activity_relation_auto_1437
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_activity_relation_auto_1437;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_1437')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_post_activity_relation_auto_1437:

                    // oro_api_post_activity_relation_auto_1438
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_activity_relation_auto_1438;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_1438')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_post_activity_relation_auto_1438:

                    // oro_api_delete_activity_relation_auto_1439
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_activity_relation_auto_1439;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_1439')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                    }
                    not_oro_api_delete_activity_relation_auto_1439:

                    // oro_api_delete_activity_relation_auto_1440
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_activity_relation_auto_1440;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_1440')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_delete_activity_relation_auto_1440:

                    // oro_api_delete_activity_relation_auto_1441
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_activity_relation_auto_1441;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_1441')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_delete_activity_relation_auto_1441:

                    // oro_api_delete_activity_relation_auto_1442
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_activity_relation_auto_1442;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_1442')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_delete_activity_relation_auto_1442:

                    // oro_api_delete_activity_relation_auto_1443
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_activity_relation_auto_1443;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_1443')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_delete_activity_relation_auto_1443:

                    // oro_api_options_activity_relations
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_relations:

                    // oro_api_get_email_search_relations
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/relations/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_email_search_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_email_search_relations:

                    // oro_api_get_activity_search_relations_auto_1444
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes/relations/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_search_relations_auto_1444;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_1444')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_get_activity_search_relations_auto_1444:

                    // oro_api_get_activity_search_relations_auto_1445
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents/relations/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_search_relations_auto_1445;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_1445')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_get_activity_search_relations_auto_1445:

                    // oro_api_get_activity_search_relations_auto_1446
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls/relations/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_search_relations_auto_1446;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_1446')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_get_activity_search_relations_auto_1446:

                    // oro_api_get_activity_search_relations_auto_1447
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks/relations/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_search_relations_auto_1447;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_1447')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_get_activity_search_relations_auto_1447:

                    // oro_api_options_activity_search_relations
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/search/relations(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_search_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_search_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_search_relations:

                    // oro_api_get_activity_target_all_types
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/targets(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_all_types;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_all_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getAllTypesAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activity_target_all_types:

                    // oro_api_get_activity_target_activity_types
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_activity_types;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivityTypesAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activity_target_activity_types:

                    // oro_api_get_activity_target_activities
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_target_activities;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivitiesAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activity_target_activities:

                    // oro_api_options_activity_targets
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/targets(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_targets;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_targets:

                    // oro_api_options_activity_targets_auto_1448
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/target(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_targets_auto_1448;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets_auto_1448')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_targets_auto_1448:

                    // oro_api_get_activity_context_auto_1449
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_context_auto_1449;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_context_auto_1449')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                    }
                    not_oro_api_get_activity_context_auto_1449:

                    // oro_api_get_activity_context_auto_1450
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/notes/(?P<id>\\d+)/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_context_auto_1450;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_context_auto_1450')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'notes',));
                    }
                    not_oro_api_get_activity_context_auto_1450:

                    // oro_api_get_activity_context_auto_1451
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_context_auto_1451;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_context_auto_1451')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                    }
                    not_oro_api_get_activity_context_auto_1451:

                    // oro_api_get_activity_context_auto_1452
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_context_auto_1452;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_context_auto_1452')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                    }
                    not_oro_api_get_activity_context_auto_1452:

                    // oro_api_get_activity_context_auto_1453
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activity_context_auto_1453;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_context_auto_1453')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                    }
                    not_oro_api_get_activity_context_auto_1453:

                    // oro_api_options_activity_contexts
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/contexts(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_contexts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_contexts')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_contexts:

                    // oro_api_options_activity_contexts_auto_1454
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activity/context(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activity_contexts_auto_1454;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_contexts_auto_1454')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activity_contexts_auto_1454:

                }

                if (0 === strpos($pathinfo, '/admin/activity-')) {
                    // oro_activity_contact_metrics
                    if (0 === strpos($pathinfo, '/admin/activity-contact/metrics') && preg_match('#^/admin/activity\\-contact/metrics/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_contact_metrics')), array (  '_controller' => 'Oro\\Bundle\\ActivityContactBundle\\Controller\\ActivityContactController::metricsAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/activity-list')) {
                        // oro_activity_list_widget_activities
                        if (0 === strpos($pathinfo, '/admin/activity-list/view/widget') && preg_match('#^/admin/activity\\-list/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_widget_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\ActivityListController::widgetAction',));
                        }

                        // oro_activitylist_segment_activitycondition
                        if ('/admin/activity-list/segment/activity-condition' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\SegmentController::activityConditionAction',  '_route' => 'oro_activitylist_segment_activitycondition',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_activitylists
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityClass>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activitylists;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activitylists:

                    // oro_api_get_activitylist_activity_list_item
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityId>[^/]++)/activity/list/item(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activitylist_activity_list_item;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activitylist_activity_list_item:

                    // oro_api_get_activitylist_activity_list_option
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activitylist/activity/list/option(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_activitylist_activity_list_option;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_option')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListOptionAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_activitylist_activity_list_option:

                    // oro_api_options_activitylists
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activitylists(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activitylists;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activitylists:

                    // oro_api_options_activitylists_auto_1455
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/activitylist(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_activitylists_auto_1455;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists_auto_1455')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_activitylists_auto_1455:

                    // oro_activity_list_api_get_list
                    if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_activity_list_api_get_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_list')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_activity_list_api_get_list:

                    // oro_activity_list_api_get_item
                    if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_activity_list_api_get_item;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_activity_list_api_get_item:

                    // oro_api_get_addresstypes
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/addresstypes(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_addresstypes;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_addresstypes:

                    // oro_api_get_addresstype
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/addresstypes/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_addresstype;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstype')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_addresstype:

                    // oro_api_get_countries
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/countries(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_countries;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_countries:

                    // oro_api_get_country
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_country;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_country')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_country:

                    // oro_api_get_region
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/region(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_region;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_region')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\RegionController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_region:

                    // oro_api_country_get_regions
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/country/regions/(?P<country>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_country_get_regions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_country_get_regions')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryRegionsController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_country_get_regions:

                }

            }

            // oro_config_configuration_system
            if (0 === strpos($pathinfo, '/admin/config/system') && preg_match('#^/admin/config/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',));
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_configurations
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/configuration(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_configurations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configurations')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_configurations:

                    // oro_api_get_configuration
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/configuration/(?P<path>[\\w-]+[\\w-\\/]*)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_configuration;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configuration')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_configuration:

                }

                if (0 === strpos($pathinfo, '/admin/audit')) {
                    // oro_dataaudit_index
                    if (preg_match('#^/admin/audit(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction',));
                    }

                    // oro_dataaudit_history
                    if (0 === strpos($pathinfo, '/admin/audit/history') && preg_match('#^/admin/audit/history(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_history')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_audits
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_audits;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_audits:

                    // oro_api_get_audit
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/audits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_audit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_audit:

                    // oro_api_get_audit_fields
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/audit/fields(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_audit_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit_fields')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_audit_fields:

                    // oro_api_options_audits
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_audits;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_audits:

                    // oro_api_options_audits_auto_1450
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/audit(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_audits_auto_1450;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits_auto_1450')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_audits_auto_1450:

                }

            }

            if (0 === strpos($pathinfo, '/admin/embedded-form')) {
                if (0 === strpos($pathinfo, '/admin/embedded-form/su')) {
                    // oro_embedded_form_submit
                    if (0 === strpos($pathinfo, '/admin/embedded-form/submit') && preg_match('#^/admin/embedded\\-form/submit/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_submit')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formAction',));
                    }

                    // oro_embedded_form_success
                    if (0 === strpos($pathinfo, '/admin/embedded-form/success') && preg_match('#^/admin/embedded\\-form/success/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_success')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formSuccessAction',));
                    }

                }

                // oro_embedded_form_list
                if ('/admin/embedded-form' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_embedded_form_list;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_embedded_form_list');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::indexAction',  '_route' => 'oro_embedded_form_list',);
                }
                not_oro_embedded_form_list:

                // oro_embedded_form_create
                if ('/admin/embedded-form/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::createAction',  '_route' => 'oro_embedded_form_create',);
                }

                if (0 === strpos($pathinfo, '/admin/embedded-form/de')) {
                    // oro_embedded_form_delete
                    if (0 === strpos($pathinfo, '/admin/embedded-form/delete') && preg_match('#^/admin/embedded\\-form/delete/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_delete')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::deleteAction',));
                    }

                    // oro_embedded_form_default_data
                    if (0 === strpos($pathinfo, '/admin/embedded-form/default-data') && preg_match('#^/admin/embedded\\-form/default\\-data/(?P<formType>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_default_data')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::defaultDataAction',));
                    }

                }

                // oro_embedded_form_update
                if (0 === strpos($pathinfo, '/admin/embedded-form/update') && preg_match('#^/admin/embedded\\-form/update/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_update')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::updateAction',));
                }

                // oro_embedded_form_view
                if (0 === strpos($pathinfo, '/admin/embedded-form/view') && preg_match('#^/admin/embedded\\-form/view/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_view')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::viewAction',));
                }

                // oro_embedded_form_info
                if (0 === strpos($pathinfo, '/admin/embedded-form/info') && preg_match('#^/admin/embedded\\-form/info/(?P<id>[-\\d\\w]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_info')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::infoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/merge')) {
                // oro_entity_merge_massaction
                if (preg_match('#^/admin/merge/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_merge_massaction')), array (  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeMassActionAction',));
                }

                // oro_entity_merge
                if ('/admin/merge' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeAction',  '_route' => 'oro_entity_merge',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/entity-pagination')) {
                // oro_entity_pagination_first
                if (0 === strpos($pathinfo, '/admin/entity-pagination/first') && preg_match('#^/admin/entity\\-pagination/first/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_first')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::firstAction',));
                }

                // oro_entity_pagination_previous
                if (0 === strpos($pathinfo, '/admin/entity-pagination/previous') && preg_match('#^/admin/entity\\-pagination/previous/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_previous')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::previousAction',));
                }

                // oro_entity_pagination_next
                if (0 === strpos($pathinfo, '/admin/entity-pagination/next') && preg_match('#^/admin/entity\\-pagination/next/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_next')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::nextAction',));
                }

                // oro_entity_pagination_last
                if (0 === strpos($pathinfo, '/admin/entity-pagination/last') && preg_match('#^/admin/entity\\-pagination/last/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_last')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::lastAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // oro_form_autocomplete_search
                if ('/admin/autocomplete/search' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_form_autocomplete_search',);
                }

                // oro_api_autocomplete_search
                if (0 === strpos($pathinfo, '/admin/api/rest') && preg_match('#^/admin/api/rest/(?P<version>latest|v1)/autocomplete/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_autocomplete_search;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_autocomplete_search')), array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\Api\\Rest\\AutocompleteController::searchAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_autocomplete_search:

            }

        }

        // oro_frontend_localization_frontend_set_current_localization
        if ('/localization/set-current-localization' === $pathinfo) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_oro_frontend_localization_frontend_set_current_localization;
            }

            return array (  '_controller' => 'Oro\\Bundle\\FrontendLocalizationBundle\\Controller\\Frontend\\AjaxLocalizationController::setCurrentLocalizationAction',  '_route' => 'oro_frontend_localization_frontend_set_current_localization',);
        }
        not_oro_frontend_localization_frontend_set_current_localization:

        if (0 === strpos($pathinfo, '/admin')) {
            // oro_imap_connection_check
            if ('/admin/connection/check' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_imap_connection_check;
                }

                return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::checkAction',  '_route' => 'oro_imap_connection_check',);
            }
            not_oro_imap_connection_check:

            // oro_imap_change_account_type
            if ('/admin/imap/connection/account/change' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_imap_change_account_type;
                }

                return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::getFormAction',  '_route' => 'oro_imap_change_account_type',);
            }
            not_oro_imap_change_account_type:

            if (0 === strpos($pathinfo, '/admin/gmail/connection')) {
                // oro_imap_gmail_connection_check
                if ('/admin/gmail/connection/check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_imap_gmail_connection_check;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\GmailConnectionController::checkAction',  '_route' => 'oro_imap_gmail_connection_check',);
                }
                not_oro_imap_gmail_connection_check:

                // oro_imap_gmail_access_token
                if ('/admin/gmail/connection/access-token' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_imap_gmail_access_token;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\GmailConnectionController::accessTokenAction',  '_route' => 'oro_imap_gmail_access_token',);
                }
                not_oro_imap_gmail_access_token:

            }

            if (0 === strpos($pathinfo, '/admin/import')) {
                // oro_importexport_import_form
                if ('/admin/import' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importFormAction',  '_route' => 'oro_importexport_import_form',);
                }

                // oro_importexport_import_validate_export_template_form
                if ('/admin/import_validate_export' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateExportTemplateFormAction',  '_route' => 'oro_importexport_import_validate_export_template_form',);
                }

                // oro_importexport_import_validation_form
                if ('/admin/import-validate' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateFormAction',  '_route' => 'oro_importexport_import_validation_form',);
                }

                // oro_importexport_import_validate
                if (0 === strpos($pathinfo, '/admin/import/validate') && preg_match('#^/admin/import/validate/(?P<processorAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_validate')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateAction',));
                }

                // oro_importexport_import_process
                if (0 === strpos($pathinfo, '/admin/import/process') && preg_match('#^/admin/import/process/(?P<processorAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_process')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importProcessAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/export')) {
                // oro_importexport_export_instant
                if (0 === strpos($pathinfo, '/admin/export/instant') && preg_match('#^/admin/export/instant/(?P<processorAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_instant')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::instantExportAction',));
                }

                // oro_importexport_export_config
                if ('/admin/export/config' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::configurableExportAction',  '_route' => 'oro_importexport_export_config',);
                }

                if (0 === strpos($pathinfo, '/admin/export/template')) {
                    // oro_importexport_export_template_config
                    if ('/admin/export/template/config' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::configurableTemplateExportAction',  '_route' => 'oro_importexport_export_template_config',);
                    }

                    // oro_importexport_export_template
                    if (preg_match('#^/admin/export/template/(?P<processorAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_template')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::templateExportAction',));
                    }

                }

                // oro_importexport_export_download
                if (0 === strpos($pathinfo, '/admin/export/download') && preg_match('#^/admin/export/download/(?P<fileName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_download')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::downloadExportResultAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/import_export')) {
                // oro_importexport_error_log
                if (0 === strpos($pathinfo, '/admin/import_export/error') && preg_match('#^/admin/import_export/error/(?P<jobCode>[^/\\.]++)\\.log$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_error_log')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::errorLogAction',));
                }

                // oro_importexport_job_error_log
                if (0 === strpos($pathinfo, '/admin/import_export/job-error-log') && preg_match('#^/admin/import_export/job\\-error\\-log/(?P<jobId>[^/\\.]++)\\.log$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_job_error_log')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importExportJobErrorLogAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/notes')) {
                if (0 === strpos($pathinfo, '/admin/notes/view')) {
                    // oro_note_widget_notes
                    if (0 === strpos($pathinfo, '/admin/notes/view/widget') && preg_match('#^/admin/notes/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::widgetAction',));
                    }

                    // oro_note_notes
                    if (preg_match('#^/admin/notes/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::getAction',));
                    }

                }

                // oro_note_widget_info
                if (0 === strpos($pathinfo, '/admin/notes/widget/info') && preg_match('#^/admin/notes/widget/info/(?P<id>\\d+)(?:/(?P<renderContexts>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_info')), array (  'renderContexts' => true,  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::infoAction',));
                }

                // oro_note_create
                if ('/admin/notes/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::createAction',  '_route' => 'oro_note_create',);
                }

                // oro_note_update
                if (0 === strpos($pathinfo, '/admin/notes/update') && preg_match('#^/admin/notes/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_update')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_put_note
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_note:

                // oro_api_delete_note
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_note:

                // oro_api_options_notes
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/notes(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_notes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_notes:

                // oro_api_options_notes_auto_1451
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/note(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_notes_auto_1451;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes_auto_1451')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_notes_auto_1451:

                // oro_api_get_notes
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/notes/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_notes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::cgetAction',  '_format' => 'json',));
                }
                not_oro_api_get_notes:

                // oro_api_get_note
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::getAction',  '_format' => 'json',));
                }
                not_oro_api_get_note:

                // oro_api_post_note
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/notes(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::postAction',  '_format' => 'json',));
                }
                not_oro_api_post_note:

                // oro_api_querydesigner_fields_entity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/querydesigner/entities/fields(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_querydesigner_fields_entity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_querydesigner_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\QueryDesignerBundle\\Controller\\Api\\Rest\\QueryDesignerEntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_querydesigner_fields_entity:

            }

            if (0 === strpos($pathinfo, '/admin/report')) {
                if (0 === strpos($pathinfo, '/admin/report/view')) {
                    // oro_report_view
                    if (preg_match('#^/admin/report/view(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewAction',));
                    }

                    // oro_report_view_grid
                    if (preg_match('#^/admin/report/view/(?P<gridName>[-\\w]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_view_grid')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewFromGridAction',));
                    }

                }

                // oro_report_create
                if ('/admin/report/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::createAction',  '_route' => 'oro_report_create',);
                }

                // oro_report_update
                if (0 === strpos($pathinfo, '/admin/report/update') && preg_match('#^/admin/report/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::updateAction',));
                }

                // oro_report_index
                if (preg_match('#^/admin/report(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_delete_report
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/reports/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_report;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_report')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_report:

                // oro_api_options_reports
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/reports(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_reports;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_reports:

                // oro_api_options_reports_auto_1452
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/report(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_reports_auto_1452;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports_auto_1452')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_reports_auto_1452:

            }

            // oro_reportcrm_index
            if (0 === strpos($pathinfo, '/admin/report/static') && preg_match('#^/admin/report/static/(?P<reportGroupName>\\w+)/(?P<reportName>\\w+)(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_reportcrm_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ReportCRMBundle\\Controller\\ReportController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/search')) {
                // oro_search_advanced
                if ('/admin/search/advanced-search' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::ajaxAdvancedSearchAction',  '_route' => 'oro_search_advanced',);
                }

                if (0 === strpos($pathinfo, '/admin/search/s')) {
                    // oro_search_bar
                    if ('/admin/search/search-bar' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchBarAction',  '_route' => 'oro_search_bar',);
                    }

                    // oro_search_suggestion
                    if ('/admin/search/suggestion' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchSuggestionAction',  '_route' => 'oro_search_suggestion',);
                    }

                }

                // oro_search_results
                if ('/admin/search' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_search_results;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_search_results');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchResultsAction',  '_route' => 'oro_search_results',);
                }
                not_oro_search_results:

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_search
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/search(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_search;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_search:

                // oro_api_get_search_advanced
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/search/advanced(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_search_advanced;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_advanced')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchAdvancedController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_search_advanced:

            }

            if (0 === strpos($pathinfo, '/admin/segment')) {
                // oro_segment_index
                if (preg_match('#^/admin/segment(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::indexAction',));
                }

                // oro_segment_view
                if (0 === strpos($pathinfo, '/admin/segment/view') && preg_match('#^/admin/segment/view(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::viewAction',));
                }

                // oro_segment_create
                if ('/admin/segment/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::createAction',  '_route' => 'oro_segment_create',);
                }

                // oro_segment_update
                if (0 === strpos($pathinfo, '/admin/segment/update') && preg_match('#^/admin/segment/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::updateAction',));
                }

                // oro_segment_refresh
                if (0 === strpos($pathinfo, '/admin/segment/refresh') && preg_match('#^/admin/segment/refresh(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_refresh')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::refreshAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_segment_items
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segment/items(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items:

                // oro_api_delete_segment
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_segment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_segment')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_segment:

                // oro_api_post_segment_run
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/runs(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run:

                // oro_api_options_segments
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segments(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments:

                // oro_api_options_segments_auto_1453
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segment(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments_auto_1453;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments_auto_1453')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments_auto_1453:

                // oro_api_get_segment_items_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segments/(?P<entityName>[^/]++)/items(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\DeprecatedSegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items_deprecated:

                // oro_api_post_segment_run_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/run(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run_deprecated:

                // oro_api_cget_sidebarwidgets
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_cget_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_cget_sidebarwidgets:

                // oro_api_get_sidebarwidgets
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebarwidgets:

                // oro_api_post_sidebarwidgets
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebarwidgets(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebarwidgets:

                // oro_api_put_sidebarwidgets
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebarwidgets:

                // oro_api_delete_sidebarwidgets
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_sidebarwidgets:

                // oro_api_get_sidebars
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebars/(?P<position>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebars:

                // oro_api_post_sidebars
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebars(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebars:

                // oro_api_put_sidebars
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/sidebars/(?P<stateId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebars:

            }

            if (0 === strpos($pathinfo, '/admin/ta')) {
                if (0 === strpos($pathinfo, '/admin/tag')) {
                    // oro_tag_index
                    if (preg_match('#^/admin/tag(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::indexAction',));
                    }

                    // oro_tag_create
                    if ('/admin/tag/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::createAction',  '_route' => 'oro_tag_create',);
                    }

                    // oro_tag_update
                    if (0 === strpos($pathinfo, '/admin/tag/update') && preg_match('#^/admin/tag/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::updateAction',));
                    }

                    // oro_tag_search
                    if (0 === strpos($pathinfo, '/admin/tag/search') && preg_match('#^/admin/tag/search(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::searchAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/taxonomy')) {
                    // oro_taxonomy_index
                    if (preg_match('#^/admin/taxonomy(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_taxonomy_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::indexAction',));
                    }

                    // oro_taxonomy_create
                    if ('/admin/taxonomy/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::createAction',  '_route' => 'oro_taxonomy_create',);
                    }

                    // oro_taxonomy_update
                    if (0 === strpos($pathinfo, '/admin/taxonomy/update') && preg_match('#^/admin/taxonomy/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_taxonomy_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::updateAction',));
                    }

                    // oro_taxonomy_view
                    if (0 === strpos($pathinfo, '/admin/taxonomy/view') && preg_match('#^/admin/taxonomy/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_taxonomy_view')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::viewAction',));
                    }

                    // oro_taxonomy_widget_info
                    if (0 === strpos($pathinfo, '/admin/taxonomy/widget/info') && preg_match('#^/admin/taxonomy/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_taxonomy_widget_info')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::infoAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_delete_tag
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_tag;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tag')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_tag:

                // oro_api_options_tags
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tags(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_tags;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_tags:

                // oro_api_options_tags_auto_1454
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tag(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_tags_auto_1454;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags_auto_1454')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_tags_auto_1454:

                // oro_api_delete_taxonomy
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taxonomies/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_taxonomy;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_taxonomy')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_taxonomy:

                // oro_api_options_taxonomies
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taxonomies(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_taxonomies;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_taxonomies')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_taxonomies:

                // oro_api_options_taxonomies_auto_1455
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taxonomy(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_taxonomies_auto_1455;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_taxonomies_auto_1455')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_taxonomies_auto_1455:

                // oro_api_post_taggable
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tags/(?P<entity>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_taggable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_taggable')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_taggable:

                // oro_api_options_taggables
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taggables(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_taggables;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_taggables')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_taggables:

                // oro_api_options_taggables_auto_1456
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taggable(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_taggables_auto_1456;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_taggables_auto_1456')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_taggables_auto_1456:

            }

        }

        // oro_website_search_results
        if ('/website-search' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_oro_website_search_results;
            } else {
                return $this->redirect($rawPathinfo.'/', 'oro_website_search_results');
            }

            return array (  '_controller' => 'Oro\\Bundle\\WebsiteSearchBundle\\Controller\\Frontend\\WebsiteSearchController::searchResultsAction',  '_route' => 'oro_website_search_results',);
        }
        not_oro_website_search_results:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_cget_windows
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_cget_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_cget_windows:

                // oro_api_get_windows
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_windows:

                // oro_api_post_windows
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_windows:

                // oro_api_put_windows
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_windows:

                // oro_api_delete_windows
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_windows:

            }

            if (0 === strpos($pathinfo, '/admin/processdefinition')) {
                // oro_process_definition_index
                if ('/admin/processdefinition' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::indexAction',  '_route' => 'oro_process_definition_index',);
                }

                // oro_process_definition_view
                if (0 === strpos($pathinfo, '/admin/processdefinition/view') && preg_match('#^/admin/processdefinition/view/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_process_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/workflow')) {
                if (0 === strpos($pathinfo, '/admin/workflowwidget')) {
                    // oro_workflow_widget_entity_workflows
                    if (0 === strpos($pathinfo, '/admin/workflowwidget/entity-workflows') && preg_match('#^/admin/workflowwidget/entity\\-workflows/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_entity_workflows')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::entityWorkflowsAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/workflowwidget/transition')) {
                        // oro_workflow_widget_start_transition_form
                        if (0 === strpos($pathinfo, '/admin/workflowwidget/transition/create/attributes') && preg_match('#^/admin/workflowwidget/transition/create/attributes/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::startTransitionFormAction',));
                        }

                        // oro_workflow_widget_transition_form
                        if (0 === strpos($pathinfo, '/admin/workflowwidget/transition/edit/attributes') && preg_match('#^/admin/workflowwidget/transition/edit/attributes/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::transitionFormAction',));
                        }

                    }

                    // oro_workflow_widget_buttons
                    if (0 === strpos($pathinfo, '/admin/workflowwidget/buttons') && preg_match('#^/admin/workflowwidget/buttons/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_buttons')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::buttonsAction',));
                    }

                }

                // oro_workflow_start_transition_form
                if (0 === strpos($pathinfo, '/admin/workflow/start') && preg_match('#^/admin/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::startTransitionAction',));
                }

                // oro_workflow_transition_form
                if (0 === strpos($pathinfo, '/admin/workflow/transit') && preg_match('#^/admin/workflow/transit/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::transitionAction',));
                }

                if (0 === strpos($pathinfo, '/admin/workflowdefinition')) {
                    // oro_workflow_definition_index
                    if ('/admin/workflowdefinition' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::indexAction',  '_route' => 'oro_workflow_definition_index',);
                    }

                    // oro_workflow_definition_create
                    if ('/admin/workflowdefinition/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::createAction',  '_route' => 'oro_workflow_definition_create',);
                    }

                    // oro_workflow_definition_update
                    if (0 === strpos($pathinfo, '/admin/workflowdefinition/update') && preg_match('#^/admin/workflowdefinition/update/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_update')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::updateAction',));
                    }

                    // oro_workflow_definition_configure
                    if (0 === strpos($pathinfo, '/admin/workflowdefinition/configure') && preg_match('#^/admin/workflowdefinition/configure/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_configure')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::configureAction',));
                    }

                    // oro_workflow_definition_view
                    if (0 === strpos($pathinfo, '/admin/workflowdefinition/view') && preg_match('#^/admin/workflowdefinition/view/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::viewAction',));
                    }

                    // oro_workflow_definition_activate_from_widget
                    if (0 === strpos($pathinfo, '/admin/workflowdefinition/activate-form') && preg_match('#^/admin/workflowdefinition/activate\\-form/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_activate_from_widget')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::activateFormAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_workflow_start
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_start;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_start:

                // oro_api_workflow_transit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_transit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_transit:

                // oro_api_workflow_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_get:

                // oro_api_workflow_delete
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_workflow_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_delete:

                // oro_api_workflow_activate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_activate:

                // oro_api_workflow_deactivate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_deactivate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_deactivate:

                // oro_api_workflow_definition_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_definition_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_get:

                // oro_api_workflow_definition_put
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_workflow_definition_put;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_put')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_put:

                // oro_api_workflow_definition_post
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition(?:/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_workflow_definition_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_post')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',  'version' => 'latest',  '_format' => 'json',  'workflowDefinition' => NULL,));
                }
                not_oro_api_workflow_definition_post:

                // oro_api_workflow_definition_delete
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_workflow_definition_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_delete:

                // oro_api_workflow_entity_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowentity(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_entity_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_entity_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_entity_get:

                // oro_api_process_activate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/process/activate/(?P<processDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_process_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_process_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_process_activate:

                // oro_api_process_deactivate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/process/deactivate/(?P<processDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_process_deactivate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_process_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_process_deactivate:

                // oro_workflow_api_rest_process_activate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/process/activate/(?P<processDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_process_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_process_activate:

                // oro_workflow_api_rest_process_deactivate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/process/deactivate/(?P<processDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_process_deactivate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_process_deactivate:

                // oro_workflow_api_rest_workflowdefinition_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflowdefinition_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflowdefinition_get:

                // oro_workflow_api_rest_workflowdefinition_post
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition(?:/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_workflow_api_rest_workflowdefinition_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_post')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',  '_format' => 'json',  'version' => 'latest',  'workflowDefinition' => NULL,));
                }
                not_oro_workflow_api_rest_workflowdefinition_post:

                // oro_workflow_api_rest_workflowdefinition_put
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_workflow_api_rest_workflowdefinition_put;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_put')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflowdefinition_put:

                // oro_workflow_api_rest_workflowdefinition_delete
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_workflow_api_rest_workflowdefinition_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflowdefinition_delete:

                // oro_workflow_api_rest_entity_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflowentity(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_entity_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_entity_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_entity_get:

                // oro_workflow_api_rest_workflow_get
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflow_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_get:

                // oro_workflow_api_rest_workflow_delete
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_workflow_api_rest_workflow_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_delete:

                // oro_workflow_api_rest_workflow_activate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflow_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_activate:

                // oro_workflow_api_rest_workflow_deactivate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflow_deactivate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_deactivate:

                // oro_workflow_api_rest_workflow_start
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflow_start;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_start:

                // oro_workflow_api_rest_workflow_transit
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_workflow_api_rest_workflow_transit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_workflow_api_rest_workflow_transit:

            }

            // oro_comment_form
            if ('/admin/comments/form' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\CommentController::getFormAction',  '_route' => 'oro_comment_form',);
            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_comment_get_items
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_comment_get_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_items')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_get_items:

                // oro_api_comment_create_item
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_comment_create_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_create_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_create_item:

                // oro_api_comment_get_item
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_comment_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_get_item:

                // oro_api_comment_update_item
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_comment_update_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_update_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_update_item:

                // oro_api_comment_remove_attachment_item
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/]++)/removeAttachment(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_comment_remove_attachment_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_remove_attachment_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::removeAttachmentAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_remove_attachment_item:

                // oro_api_comment_delete_item
                if (preg_match('#^/admin/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_comment_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_delete_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_comment_delete_item:

            }

            if (0 === strpos($pathinfo, '/admin/dashboard')) {
                // oro_dashboard_index
                if (preg_match('#^/admin/dashboard(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction',));
                }

                // oro_dashboard_view
                if (0 === strpos($pathinfo, '/admin/dashboard/view') && preg_match('#^/admin/dashboard/view(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_view')), array (  'id' => '0',  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',));
                }

                // oro_dashboard_configure
                if (0 === strpos($pathinfo, '/admin/dashboard/configure') && preg_match('#^/admin/dashboard/configure/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_dashboard_configure;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_configure')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::configureAction',));
                }
                not_oro_dashboard_configure:

                // oro_dashboard_update
                if (0 === strpos($pathinfo, '/admin/dashboard/update') && preg_match('#^/admin/dashboard/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::updateAction',));
                }

                // oro_dashboard_create
                if ('/admin/dashboard/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::createAction',  '_route' => 'oro_dashboard_create',);
                }

                // oro_dashboard_widget
                if (0 === strpos($pathinfo, '/admin/dashboard/widget') && preg_match('#^/admin/dashboard/widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::widgetAction',));
                }

                if (0 === strpos($pathinfo, '/admin/dashboard/itemized_')) {
                    // oro_dashboard_itemized_widget
                    if (0 === strpos($pathinfo, '/admin/dashboard/itemized_widget') && preg_match('#^/admin/dashboard/itemized_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedWidgetAction',));
                    }

                    // oro_dashboard_itemized_data_widget
                    if (0 === strpos($pathinfo, '/admin/dashboard/itemized_data_widget') && preg_match('#^/admin/dashboard/itemized_data_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_data_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedDataWidgetAction',));
                    }

                }

                // oro_dashboard_quick_launchpad
                if ('/admin/dashboard/launchpad' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::quickLaunchpadAction',  '_route' => 'oro_dashboard_quick_launchpad',);
                }

                // oro_dashboard_grid
                if (0 === strpos($pathinfo, '/admin/dashboard/grid') && preg_match('#^/admin/dashboard/grid/(?P<widget>[^/]++)/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_grid')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::gridAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_put_dashboard_widget
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_dashboard_widget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_dashboard_widget:

                // oro_api_delete_dashboard_widget
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_dashboard_widget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_dashboard_widget:

                // oro_api_put_dashboard_widget_positions
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widget/positions(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_dashboard_widget_positions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget_positions')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putPositionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_dashboard_widget_positions:

                // oro_api_post_dashboard_widget_add_widget
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboards/widgets/adds/widgets(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_dashboard_widget_add_widget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_dashboard_widget_add_widget:

                // oro_api_delete_dashboard
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboards/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_dashboard;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\DashboardController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_dashboard:

                // oro_api_post_dashboard_widget_add_widget_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dashboard/widget/add/widget(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_dashboard_widget_add_widget_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget_deprecated')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_dashboard_widget_add_widget_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/calendar')) {
                if (0 === strpos($pathinfo, '/admin/calendar/event/ajax')) {
                    // oro_calendar_event_accepted
                    if (0 === strpos($pathinfo, '/admin/calendar/event/ajax/accepted') && preg_match('#^/admin/calendar/event/ajax/accepted/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_accepted')), array (  'status' => 'accepted',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction',));
                    }

                    // oro_calendar_event_tentative
                    if (0 === strpos($pathinfo, '/admin/calendar/event/ajax/tentative') && preg_match('#^/admin/calendar/event/ajax/tentative/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_tentative')), array (  'status' => 'tentative',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction',));
                    }

                    // oro_calendar_event_declined
                    if (0 === strpos($pathinfo, '/admin/calendar/event/ajax/declined') && preg_match('#^/admin/calendar/event/ajax/declined/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_declined')), array (  'status' => 'declined',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction',));
                    }

                }

                // oro_calendarevent_autocomplete_attendees
                if ('/admin/calendar/calendarevents/autocomplete/attendees' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AutocompleteController::autocompleteAttendeesAction',  '_route' => 'oro_calendarevent_autocomplete_attendees',);
                }

                // oro_calendar_view_default
                if ('/admin/calendar/default' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewDefaultAction',  '_route' => 'oro_calendar_view_default',);
                }

                // oro_calendar_view
                if (0 === strpos($pathinfo, '/admin/calendar/view') && preg_match('#^/admin/calendar/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/calendar/event')) {
                    // oro_calendar_event_index
                    if ('/admin/calendar/event' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::indexAction',  '_route' => 'oro_calendar_event_index',);
                    }

                    // oro_calendar_event_view
                    if (0 === strpos($pathinfo, '/admin/calendar/event/view') && preg_match('#^/admin/calendar/event/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::viewAction',));
                    }

                    // oro_calendar_event_widget_info
                    if (0 === strpos($pathinfo, '/admin/calendar/event/widget/info') && preg_match('#^/admin/calendar/event/widget/info/(?P<id>\\d+)(?:/(?P<renderContexts>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_widget_info')), array (  'renderContexts' => true,  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::infoAction',));
                    }

                    // oro_calendar_event_activity_view
                    if (0 === strpos($pathinfo, '/admin/calendar/event/activity/view') && preg_match('#^/admin/calendar/event/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_activity_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::activityAction',));
                    }

                    // oro_calendar_event_create
                    if ('/admin/calendar/event/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::createAction',  '_route' => 'oro_calendar_event_create',);
                    }

                    // oro_calendar_event_update
                    if (0 === strpos($pathinfo, '/admin/calendar/event/update') && preg_match('#^/admin/calendar/event/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::updateAction',));
                    }

                    // oro_calendar_event_delete
                    if (0 === strpos($pathinfo, '/admin/calendar/event/delete') && preg_match('#^/admin/calendar/event/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_delete')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/system-calendar')) {
                // oro_system_calendar_index
                if ('/admin/system-calendar' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_system_calendar_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_system_calendar_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::indexAction',  '_route' => 'oro_system_calendar_index',);
                }
                not_oro_system_calendar_index:

                // oro_system_calendar_view
                if (0 === strpos($pathinfo, '/admin/system-calendar/view') && preg_match('#^/admin/system\\-calendar/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::viewAction',));
                }

                // oro_system_calendar_create
                if ('/admin/system-calendar/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::createAction',  '_route' => 'oro_system_calendar_create',);
                }

                // oro_system_calendar_update
                if (0 === strpos($pathinfo, '/admin/system-calendar/update') && preg_match('#^/admin/system\\-calendar/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::updateAction',));
                }

                // oro_system_calendar_widget_events
                if (0 === strpos($pathinfo, '/admin/system-calendar/widget/events') && preg_match('#^/admin/system\\-calendar/widget/events/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_widget_events')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::eventsAction',));
                }

                // oro_system_calendar_event_view
                if (0 === strpos($pathinfo, '/admin/system-calendar/event/view') && preg_match('#^/admin/system\\-calendar/event/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::viewAction',));
                }

                // oro_system_calendar_event_widget_info
                if (0 === strpos($pathinfo, '/admin/system-calendar/widget/info') && preg_match('#^/admin/system\\-calendar/widget/info/(?P<id>\\d+)(?:/(?P<renderContexts>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_widget_info')), array (  'renderContexts' => true,  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::infoAction',));
                }

                // oro_system_calendar_event_create
                if (preg_match('#^/admin/system\\-calendar/(?P<id>\\d+)/event/create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_create')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::createAction',));
                }

                // oro_system_calendar_event_update
                if (0 === strpos($pathinfo, '/admin/system-calendar/event/update') && preg_match('#^/admin/system\\-calendar/event/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::updateAction',));
                }

            }

            // oro_calendar_dashboard_my_calendar
            if (0 === strpos($pathinfo, '/admin/dashboard/my_calendar') && preg_match('#^/admin/dashboard/my_calendar/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_dashboard_my_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Dashboard\\DashboardController::myCalendarAction',));
            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_calendar_connections
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/connections(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_calendar_connections;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_calendar_connections:

                // oro_api_put_calendar_connection
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_calendar_connection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_calendar_connection:

                // oro_api_post_calendar_connection
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarconnections(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_calendar_connection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_calendar_connection:

                // oro_api_delete_calendar_connection
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_calendar_connection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_calendar_connection:

                // oro_api_options_calendar_connections
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendar/connections(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_calendar_connections;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_calendar_connections:

                // oro_api_options_calendar_connections_auto_1457
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendar/connection(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_calendar_connections_auto_1457;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections_auto_1457')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_calendar_connections_auto_1457:

                // oro_api_get_calendarevents
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_calendarevents;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_calendarevents:

                // oro_api_get_calendarevent
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_calendarevent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_calendarevent:

                // oro_api_get_calendarevent_by_calendar
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/events/(?P<eventId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_calendarevent_by_calendar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent_by_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_calendarevent_by_calendar:

                // oro_api_put_calendarevent
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_calendarevent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_calendarevent:

                // oro_api_post_calendarevent
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_calendarevent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_calendarevent:

                // oro_api_delete_calendarevent
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_calendarevent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_calendarevent:

                // oro_api_options_calendarevents
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_calendarevents;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_calendarevents:

                // oro_api_options_calendarevents_auto_1458
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendarevent(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_calendarevents_auto_1458;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents_auto_1458')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_calendarevents_auto_1458:

                // oro_api_get_calendar_default
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calendars/default(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_calendar_default;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_default')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_calendar_default:

                // oro_api_delete_systemcalendar
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/systemcalendars/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_systemcalendar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_systemcalendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_systemcalendar:

                // oro_api_options_systemcalendars
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/systemcalendars(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_systemcalendars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_systemcalendars:

                // oro_api_options_systemcalendars_auto_1459
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/systemcalendar(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_systemcalendars_auto_1459;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars_auto_1459')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_systemcalendars_auto_1459:

            }

        }

        // oro_frontend_root
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_oro_frontend_root;
            } else {
                return $this->redirect($rawPathinfo.'/', 'oro_frontend_root');
            }

            return array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendController::indexAction',  '_route' => 'oro_frontend_root',);
        }
        not_oro_frontend_root:

        // oro_frontend_exception
        if (0 === strpos($pathinfo, '/exception') && preg_match('#^/exception/(?P<code>\\d+)/(?P<text>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_exception')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendController::exceptionAction',));
        }

        // oro_frontend_datagrid_widget
        if (0 === strpos($pathinfo, '/datagrid/widget') && preg_match('#^/datagrid/widget/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_datagrid_widget')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\GridController::widgetAction',));
        }

        if (0 === strpos($pathinfo, '/style-book')) {
            // oro_frontend_style_book
            if ('/style-book' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_frontend_style_book;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_frontend_style_book');
                }

                return array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\StyleBookController::indexAction',  '_route' => 'oro_frontend_style_book',);
            }
            not_oro_frontend_style_book:

            // oro_frontend_style_book_group
            if (preg_match('#^/style\\-book/(?P<group>\\w+)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_frontend_style_book_group;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_frontend_style_book_group');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_style_book_group')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\StyleBookController::groupAction',));
            }
            not_oro_frontend_style_book_group:

        }

        // oro_frontend_rest_api_doc
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_frontend_rest_api_doc;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_doc')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'frontend_rest_json_api',));
        }
        not_oro_frontend_rest_api_doc:

        if (0 === strpos($pathinfo, '/installer')) {
            // oro_installer_flow
            if ('/installer' === $pathinfo) {
                return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'oro_installer',  '_route' => 'oro_installer_flow',);
            }

            if (0 === strpos($pathinfo, '/installer/flow')) {
                // sylius_flow_start
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                }

                // sylius_flow_display
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                }

                // sylius_flow_forward
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/dictionary')) {
                // oro_frontend_dictionary_search
                if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/search$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_dictionary_search')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::searchAction',));
                }

                // oro_frontend_dictionary_value
                if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/values$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_dictionary_value')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::valuesAction',));
                }

            }

            // oro_frontend_datagrid_index
            if (0 === strpos($pathinfo, '/datagrid') && preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/actionwidget')) {
                // oro_frontend_action_widget_form
                if (0 === strpos($pathinfo, '/actionwidget/form') && preg_match('#^/actionwidget/form/(?P<operationName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_action_widget_form')), array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::formAction',));
                }

                // oro_frontend_action_widget_buttons
                if ('/actionwidget/buttons' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::buttonsAction',  '_route' => 'oro_frontend_action_widget_buttons',);
                }

            }

            // oro_frontend_action_operation_execute
            if (0 === strpos($pathinfo, '/ajax/operation/execute') && preg_match('#^/ajax/operation/execute/(?P<operationName>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_action_operation_execute')), array (  '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\AjaxController::executeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/workflow')) {
            if (0 === strpos($pathinfo, '/workflow/widget')) {
                // oro_frontend_workflow_widget_start_transition_form
                if (0 === strpos($pathinfo, '/workflow/widget/start') && preg_match('#^/workflow/widget/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_workflow_widget_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Workflow\\WidgetController::startTransitionFormAction',));
                }

                // oro_frontend_workflow_widget_transition_form
                if (0 === strpos($pathinfo, '/workflow/widget/transit') && preg_match('#^/workflow/widget/transit/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_workflow_widget_transition_form')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Workflow\\WidgetController::transitionFormAction',));
                }

            }

            // oro_frontend_workflow_start_transition_form
            if (0 === strpos($pathinfo, '/workflow/start') && preg_match('#^/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_workflow_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Workflow\\WorkflowController::startTransitionAction',));
            }

            // oro_frontend_workflow_transition_form
            if (0 === strpos($pathinfo, '/workflow/transit') && preg_match('#^/workflow/transit/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_workflow_transition_form')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Workflow\\WorkflowController::transitionAction',));
            }

            // oro_frontend_workflow_widget_buttons
            if (0 === strpos($pathinfo, '/workflowwidget/buttons') && preg_match('#^/workflowwidget/buttons/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_workflow_widget_buttons')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::buttonsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_frontend_workflow_start
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_frontend_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_frontend_workflow_start:

            // oro_api_frontend_workflow_transit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_frontend_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_frontend_workflow_transit:

        }

        if (0 === strpos($pathinfo, '/media/cache/attachment/resize')) {
            // oro_filtered_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<filter>[^/]++)/(?P<filename>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_filtered_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getFilteredImageAction',));
            }

            // oro_resize_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<width>\\d+)/(?P<height>\\d+)/(?P<filename>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_resize_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getResizedAttachmentImageAction',));
            }

        }

        // oro_frontend_attachment_file
        if (0 === strpos($pathinfo, '/attachment') && preg_match('#^/attachment/(?P<codedString>[^/\\.]++)\\.(?P<extension>\\w+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_attachment_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getAttachmentAction',));
        }

        // oro_frontend_js_routing_js
        if (0 === strpos($pathinfo, '/js/frontend_routes') && preg_match('#^/js/frontend_routes(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_js_routing_js')), array (  '_controller' => 'oro_frontend.js_routing_controller:indexAction',  '_format' => 'js',));
        }

        // oro_datagrid_front_mass_action
        if (preg_match('#^/(?P<gridName>[\\w\\:-]+)/massFrontAction/(?P<actionName>[\\w-]+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_front_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/contact')) {
                // oro_contact_address_book
                if (0 === strpos($pathinfo, '/admin/contact/address-book') && preg_match('#^/admin/contact/address\\-book/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_address_book')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::addressBookAction',));
                }

                // oro_contact_address_create
                if (preg_match('#^/admin/contact/(?P<contactId>\\d+)/address\\-create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_address_create')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::createAction',));
                }

                // oro_contact_address_update
                if (preg_match('#^/admin/contact/(?P<contactId>\\d+)/address\\-update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_address_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::updateAction',));
                }

                // oro_contact_view
                if (0 === strpos($pathinfo, '/admin/contact/view') && preg_match('#^/admin/contact/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_view')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::viewAction',));
                }

                // oro_contact_info
                if (0 === strpos($pathinfo, '/admin/contact/info') && preg_match('#^/admin/contact/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_info')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::infoAction',));
                }

                // oro_contact_create
                if ('/admin/contact/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::createAction',  '_route' => 'oro_contact_create',);
                }

                // oro_contact_update
                if (0 === strpos($pathinfo, '/admin/contact/update') && preg_match('#^/admin/contact/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_update')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::updateAction',));
                }

                // oro_contact_index
                if (preg_match('#^/admin/contact(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::indexAction',));
                }

                // oro_account_widget_contacts
                if (0 === strpos($pathinfo, '/admin/contact/widget/account-contacts') && preg_match('#^/admin/contact/widget/account\\-contacts/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_widget_contacts')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::accountContactsAction',));
                }

                if (0 === strpos($pathinfo, '/admin/contact/group')) {
                    // oro_contact_group_create
                    if ('/admin/contact/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_contact_group_create',);
                    }

                    // oro_contact_group_update
                    if (0 === strpos($pathinfo, '/admin/contact/group/update') && preg_match('#^/admin/contact/group/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::updateAction',));
                    }

                    // oro_contact_group_index
                    if (preg_match('#^/admin/contact/group(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contact_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::indexAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_contacts
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contacts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contacts')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contacts:

                // oro_api_get_contact
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact:

                // oro_api_put_contact
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_contact')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_contact:

                // oro_api_post_contact
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact:

                // oro_api_delete_contact
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact:

                // oro_api_options_contacts
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contacts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contacts')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contacts:

                // oro_api_options_contacts_auto_1460
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contacts_auto_1460;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contacts_auto_1460')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contacts_auto_1460:

                // oro_api_get_contactgroups
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contactgroups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contactgroups')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contactgroups:

                // oro_api_get_contactgroup
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contactgroup')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contactgroup:

                // oro_api_put_contactgroup
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_contactgroup')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_contactgroup:

                // oro_api_post_contactgroup
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contactgroup')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contactgroup:

                // oro_api_delete_contactgroup
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contactgroup')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contactgroup:

                // oro_api_options_contactgroups
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactgroups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactgroups')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactgroups:

                // oro_api_options_contactgroups_auto_1461
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroup(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactgroups_auto_1461;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactgroups_auto_1461')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactgroups_auto_1461:

                // oro_api_get_contact_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address:

                // oro_api_get_contact_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_addresses')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_addresses:

                // oro_api_delete_contact_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact_address')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact_address:

                // oro_api_get_contact_address_by_type
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address_by_type')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address_by_type:

                // oro_api_get_contact_address_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/address/primary(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address_primary')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address_primary:

                // oro_api_options_contact_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_addresses')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_addresses:

                // oro_api_options_contact_addresses_auto_1462
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_addresses_auto_1462;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_addresses_auto_1462')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_addresses_auto_1462:

                // oro_api_get_contact_phones
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_phones')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_phones:

                // oro_api_get_contact_phone_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/phone/primary(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_phone_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_phone_primary')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_phone_primary:

                // oro_api_post_contact_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact_phone')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact_phone:

                // oro_api_delete_contact_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/]++)/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact_phone')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact_phone:

                // oro_api_options_contact_phones
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_phones')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_phones:

                // oro_api_options_contact_phones_auto_1463
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_phones_auto_1463;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_phones_auto_1463')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_phones_auto_1463:

                // oro_api_post_contact_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/emails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact_email')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact_email:

                // oro_api_delete_contact_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/]++)/email(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact_email')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact_email:

                // oro_api_options_contact_emails
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/emails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_emails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_emails')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_emails:

                // oro_api_options_contact_emails_auto_1464
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact/email(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_emails_auto_1464;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_emails_auto_1464')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_emails_auto_1464:

                // oro_api_post_contact_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contact(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact_deprecated')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact_deprecated:

                // oro_api_post_contactgroup_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactgroup(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contactgroup_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contactgroup_deprecated')), array (  '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contactgroup_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/menu/global')) {
                // oro_navigation_global_menu_ajax_reset
                if (0 === strpos($pathinfo, '/admin/menu/global/reset') && preg_match('#^/admin/menu/global/reset/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_navigation_global_menu_ajax_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_reset')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::resetAction',));
                }
                not_oro_navigation_global_menu_ajax_reset:

                // oro_navigation_global_menu_ajax_create
                if (0 === strpos($pathinfo, '/admin/menu/global/create') && preg_match('#^/admin/menu/global/create/(?P<menuName>[^/]++)/(?P<parentKey>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_navigation_global_menu_ajax_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_create')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::createAction',));
                }
                not_oro_navigation_global_menu_ajax_create:

                // oro_navigation_global_menu_ajax_delete
                if (0 === strpos($pathinfo, '/admin/menu/global/delete') && preg_match('#^/admin/menu/global/delete/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_navigation_global_menu_ajax_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_delete')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::deleteAction',));
                }
                not_oro_navigation_global_menu_ajax_delete:

                // oro_navigation_global_menu_ajax_show
                if (0 === strpos($pathinfo, '/admin/menu/global/show') && preg_match('#^/admin/menu/global/show/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_global_menu_ajax_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_show')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::showAction',));
                }
                not_oro_navigation_global_menu_ajax_show:

                // oro_navigation_global_menu_ajax_hide
                if (0 === strpos($pathinfo, '/admin/menu/global/hide') && preg_match('#^/admin/menu/global/hide/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_global_menu_ajax_hide;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_hide')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::hideAction',));
                }
                not_oro_navigation_global_menu_ajax_hide:

                // oro_navigation_global_menu_ajax_move
                if (0 === strpos($pathinfo, '/admin/menu/global/move') && preg_match('#^/admin/menu/global/move/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_global_menu_ajax_move;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_ajax_move')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::moveAction',));
                }
                not_oro_navigation_global_menu_ajax_move:

                // oro_navigation_global_menu_index
                if ('/admin/menu/global' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_navigation_global_menu_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_navigation_global_menu_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::indexAction',  '_route' => 'oro_navigation_global_menu_index',);
                }
                not_oro_navigation_global_menu_index:

                // oro_navigation_global_menu_view
                if (preg_match('#^/admin/menu/global/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_view')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::viewAction',));
                }

                // oro_navigation_global_menu_create
                if (preg_match('#^/admin/menu/global/(?P<menuName>[^/]++)/create(?:/(?P<parentKey>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_create')), array (  'parentKey' => NULL,  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::createAction',));
                }

                // oro_navigation_global_menu_update
                if (preg_match('#^/admin/menu/global/(?P<menuName>[^/]++)/update/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_update')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::updateAction',));
                }

                // oro_navigation_global_menu_move
                if (preg_match('#^/admin/menu/global/(?P<menuName>[^/]++)/move$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_global_menu_move')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::moveAction',));
                }

            }

            // oro_shortcut_actionslist
            if ('/admin/shortcutactionslist' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction',  '_route' => 'oro_shortcut_actionslist',);
            }

            if (0 === strpos($pathinfo, '/admin/menu/user')) {
                // oro_navigation_user_menu_ajax_reset
                if (0 === strpos($pathinfo, '/admin/menu/user/reset') && preg_match('#^/admin/menu/user/reset/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_navigation_user_menu_ajax_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_reset')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::resetAction',));
                }
                not_oro_navigation_user_menu_ajax_reset:

                // oro_navigation_user_menu_ajax_create
                if (0 === strpos($pathinfo, '/admin/menu/user/create') && preg_match('#^/admin/menu/user/create/(?P<menuName>[^/]++)/(?P<parentKey>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_navigation_user_menu_ajax_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_create')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::createAction',));
                }
                not_oro_navigation_user_menu_ajax_create:

                // oro_navigation_user_menu_ajax_delete
                if (0 === strpos($pathinfo, '/admin/menu/user/delete') && preg_match('#^/admin/menu/user/delete/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_navigation_user_menu_ajax_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_delete')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::deleteAction',));
                }
                not_oro_navigation_user_menu_ajax_delete:

                // oro_navigation_user_menu_ajax_show
                if (0 === strpos($pathinfo, '/admin/menu/user/show') && preg_match('#^/admin/menu/user/show/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_user_menu_ajax_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_show')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::showAction',));
                }
                not_oro_navigation_user_menu_ajax_show:

                // oro_navigation_user_menu_ajax_hide
                if (0 === strpos($pathinfo, '/admin/menu/user/hide') && preg_match('#^/admin/menu/user/hide/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_user_menu_ajax_hide;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_hide')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::hideAction',));
                }
                not_oro_navigation_user_menu_ajax_hide:

                // oro_navigation_user_menu_ajax_move
                if (0 === strpos($pathinfo, '/admin/menu/user/move') && preg_match('#^/admin/menu/user/move/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_navigation_user_menu_ajax_move;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_ajax_move')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::moveAction',));
                }
                not_oro_navigation_user_menu_ajax_move:

                // oro_navigation_user_menu_index
                if ('/admin/menu/user' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_navigation_user_menu_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_navigation_user_menu_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::indexAction',  '_route' => 'oro_navigation_user_menu_index',);
                }
                not_oro_navigation_user_menu_index:

                // oro_navigation_user_menu_view
                if (preg_match('#^/admin/menu/user/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_view')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::viewAction',));
                }

                // oro_navigation_user_menu_create
                if (preg_match('#^/admin/menu/user/(?P<menuName>[^/]++)/create(?:/(?P<parentKey>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_create')), array (  'parentKey' => NULL,  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::createAction',));
                }

                // oro_navigation_user_menu_update
                if (preg_match('#^/admin/menu/user/(?P<menuName>[^/]++)/update/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_update')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::updateAction',));
                }

                // oro_navigation_user_menu_move
                if (preg_match('#^/admin/menu/user/(?P<menuName>[^/]++)/move$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_navigation_user_menu_move')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::moveAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_navigationitems
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_navigationitems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_navigationitems:

                // oro_api_post_navigationitems
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_navigationitems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_navigationitems:

                // oro_api_put_navigationitems_id
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_navigationitems_id;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_navigationitems_id:

                // oro_api_delete_navigationitems_id
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_navigationitems_id;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_navigationitems_id:

                // oro_api_get_shortcuts
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/shortcuts/(?P<query>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_shortcuts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_shortcuts')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_shortcuts:

                // oro_api_get_pagestates
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_pagestates;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_pagestates:

                // oro_api_get_pagestate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_pagestate:

                // oro_api_post_pagestate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_pagestate:

                // oro_api_put_pagestate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_pagestate:

                // oro_api_delete_pagestate
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_pagestate:

                // oro_api_get_pagestate_checkid
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestate/checkid(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_pagestate_checkid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_pagestate_checkid:

            }

            // oro_pinbar_help
            if ('/admin/pinbar/help' === $pathinfo) {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_post_pagestate_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/pagestate(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_pagestate_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate_deprecated')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_pagestate_deprecated:

                // oro_api_slugify_slug
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/redirect/slugify/(?P<string>.+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_slugify_slug;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_slugify_slug')), array (  '_controller' => 'Oro\\Bundle\\RedirectBundle\\Controller\\Api\\Rest\\RedirectController::slugifyAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_slugify_slug:

            }

            if (0 === strpos($pathinfo, '/admin/webcatalog')) {
                // oro_web_catalog_index
                if ('/admin/webcatalog' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_web_catalog_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_web_catalog_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\WebCatalogController::indexAction',  '_route' => 'oro_web_catalog_index',);
                }
                not_oro_web_catalog_index:

                // oro_web_catalog_view
                if (0 === strpos($pathinfo, '/admin/webcatalog/view') && preg_match('#^/admin/webcatalog/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_web_catalog_view')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\WebCatalogController::viewAction',));
                }

                // oro_web_catalog_create
                if ('/admin/webcatalog/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\WebCatalogController::createAction',  '_route' => 'oro_web_catalog_create',);
                }

                // oro_web_catalog_update
                if (0 === strpos($pathinfo, '/admin/webcatalog/update') && preg_match('#^/admin/webcatalog/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_web_catalog_update')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\WebCatalogController::updateAction',));
                }

                // oro_web_catalog_move
                if (0 === strpos($pathinfo, '/admin/webcatalog/move') && preg_match('#^/admin/webcatalog/move/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_web_catalog_move')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\WebCatalogController::moveAction',));
                }

                if (0 === strpos($pathinfo, '/admin/webcatalog/node')) {
                    // oro_content_node_update_root
                    if (0 === strpos($pathinfo, '/admin/webcatalog/node/root') && preg_match('#^/admin/webcatalog/node/root/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_content_node_update_root')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::createRootAction',));
                    }

                    // oro_content_node_create
                    if (0 === strpos($pathinfo, '/admin/webcatalog/node/create/parent') && preg_match('#^/admin/webcatalog/node/create/parent/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_content_node_create')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::createAction',));
                    }

                    // oro_content_node_update
                    if (0 === strpos($pathinfo, '/admin/webcatalog/node/update') && preg_match('#^/admin/webcatalog/node/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_content_node_update')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::updateAction',));
                    }

                    // oro_content_node_move
                    if ('/admin/webcatalog/node/move' === $pathinfo) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_content_node_move;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::moveAction',  '_route' => 'oro_content_node_move',);
                    }
                    not_oro_content_node_move:

                    if (0 === strpos($pathinfo, '/admin/webcatalog/node/get-')) {
                        // oro_content_node_get_possible_urls
                        if (0 === strpos($pathinfo, '/admin/webcatalog/node/get-possible-urls') && preg_match('#^/admin/webcatalog/node/get\\-possible\\-urls/(?P<id>\\d+)/(?P<newParentId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_content_node_get_possible_urls')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::getPossibleUrlsAction',));
                        }

                        // oro_content_node_get_changed_urls
                        if (0 === strpos($pathinfo, '/admin/webcatalog/node/get-changed-urls') && preg_match('#^/admin/webcatalog/node/get\\-changed\\-urls/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_content_node_get_changed_urls')), array (  '_controller' => 'Oro\\Bundle\\WebCatalogBundle\\Controller\\ContentNodeController::getChangedUrlsAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/menu')) {
                if (0 === strpos($pathinfo, '/admin/menu/customer')) {
                    // oro_commerce_menu_customer_menu_ajax_reset
                    if (0 === strpos($pathinfo, '/admin/menu/customer/reset') && preg_match('#^/admin/menu/customer/reset/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_commerce_menu_customer_menu_ajax_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_reset')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::resetAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_reset:

                    // oro_commerce_menu_customer_menu_ajax_create
                    if (0 === strpos($pathinfo, '/admin/menu/customer/create') && preg_match('#^/admin/menu/customer/create/(?P<menuName>[^/]++)/(?P<parentKey>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_commerce_menu_customer_menu_ajax_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_create')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::createAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_create:

                    // oro_commerce_menu_customer_menu_ajax_delete
                    if (0 === strpos($pathinfo, '/admin/menu/customer/delete') && preg_match('#^/admin/menu/customer/delete/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_commerce_menu_customer_menu_ajax_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_delete')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::deleteAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_delete:

                    // oro_commerce_menu_customer_menu_ajax_show
                    if (0 === strpos($pathinfo, '/admin/menu/customer/show') && preg_match('#^/admin/menu/customer/show/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_customer_menu_ajax_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_show')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::showAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_show:

                    // oro_commerce_menu_customer_menu_ajax_hide
                    if (0 === strpos($pathinfo, '/admin/menu/customer/hide') && preg_match('#^/admin/menu/customer/hide/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_customer_menu_ajax_hide;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_hide')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::hideAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_hide:

                    // oro_commerce_menu_customer_menu_ajax_move
                    if (0 === strpos($pathinfo, '/admin/menu/customer/move') && preg_match('#^/admin/menu/customer/move/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_customer_menu_ajax_move;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_ajax_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerAjaxMenuController::moveAction',));
                    }
                    not_oro_commerce_menu_customer_menu_ajax_move:

                    if (0 === strpos($pathinfo, '/admin/menu/customer-group')) {
                        // oro_commerce_menu_customer_group_menu_ajax_reset
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/reset') && preg_match('#^/admin/menu/customer\\-group/reset/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_reset;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_reset')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::resetAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_reset:

                        // oro_commerce_menu_customer_group_menu_ajax_create
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/create') && preg_match('#^/admin/menu/customer\\-group/create/(?P<menuName>[^/]++)/(?P<parentKey>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_create')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::createAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_create:

                        // oro_commerce_menu_customer_group_menu_ajax_delete
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/delete') && preg_match('#^/admin/menu/customer\\-group/delete/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_delete')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::deleteAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_delete:

                        // oro_commerce_menu_customer_group_menu_ajax_show
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/show') && preg_match('#^/admin/menu/customer\\-group/show/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_show')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::showAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_show:

                        // oro_commerce_menu_customer_group_menu_ajax_hide
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/hide') && preg_match('#^/admin/menu/customer\\-group/hide/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_hide;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_hide')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::hideAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_hide:

                        // oro_commerce_menu_customer_group_menu_ajax_move
                        if (0 === strpos($pathinfo, '/admin/menu/customer-group/move') && preg_match('#^/admin/menu/customer\\-group/move/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_oro_commerce_menu_customer_group_menu_ajax_move;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_ajax_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupAjaxMenuController::moveAction',));
                        }
                        not_oro_commerce_menu_customer_group_menu_ajax_move:

                        // oro_commerce_menu_customer_group_menu_index
                        if (preg_match('#^/admin/menu/customer\\-group/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_index')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::indexAction',));
                        }

                        // oro_commerce_menu_customer_group_menu_context_index
                        if ('/admin/menu/customer-group/context' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_oro_commerce_menu_customer_group_menu_context_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'oro_commerce_menu_customer_group_menu_context_index');
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::contextIndexAction',  '_route' => 'oro_commerce_menu_customer_group_menu_context_index',);
                        }
                        not_oro_commerce_menu_customer_group_menu_context_index:

                        // oro_commerce_menu_customer_group_menu_view
                        if (preg_match('#^/admin/menu/customer\\-group/(?P<menuName>[^/]++)/view$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_view')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::viewAction',));
                        }

                        // oro_commerce_menu_customer_group_menu_create
                        if (preg_match('#^/admin/menu/customer\\-group/(?P<menuName>[^/]++)/create(?:/(?P<parentKey>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_create')), array (  'parentKey' => NULL,  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::createAction',));
                        }

                        // oro_commerce_menu_customer_group_menu_update
                        if (preg_match('#^/admin/menu/customer\\-group/(?P<menuName>[^/]++)/update/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_update')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::updateAction',));
                        }

                        // oro_commerce_menu_customer_group_menu_move
                        if (preg_match('#^/admin/menu/customer\\-group/(?P<menuName>[^/]++)/move$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_group_menu_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerGroupMenuController::moveAction',));
                        }

                    }

                    // oro_commerce_menu_customer_menu_index
                    if (preg_match('#^/admin/menu/customer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_index')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::indexAction',));
                    }

                    // oro_commerce_menu_customer_menu_context_index
                    if ('/admin/menu/customer/context' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_commerce_menu_customer_menu_context_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_commerce_menu_customer_menu_context_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::contextIndexAction',  '_route' => 'oro_commerce_menu_customer_menu_context_index',);
                    }
                    not_oro_commerce_menu_customer_menu_context_index:

                    // oro_commerce_menu_customer_menu_view
                    if (preg_match('#^/admin/menu/customer/(?P<menuName>[^/]++)/view$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_view')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::viewAction',));
                    }

                    // oro_commerce_menu_customer_menu_create
                    if (preg_match('#^/admin/menu/customer/(?P<menuName>[^/]++)/create(?:/(?P<parentKey>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_create')), array (  'parentKey' => NULL,  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::createAction',));
                    }

                    // oro_commerce_menu_customer_menu_update
                    if (preg_match('#^/admin/menu/customer/(?P<menuName>[^/]++)/update/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_update')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::updateAction',));
                    }

                    // oro_commerce_menu_customer_menu_move
                    if (preg_match('#^/admin/menu/customer/(?P<menuName>[^/]++)/move$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_customer_menu_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\CustomerMenuController::moveAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/menu/frontend/global')) {
                    // oro_commerce_menu_global_menu_ajax_reset
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/reset') && preg_match('#^/admin/menu/frontend/global/reset/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_commerce_menu_global_menu_ajax_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_reset')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::resetAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_reset:

                    // oro_commerce_menu_global_menu_ajax_create
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/create') && preg_match('#^/admin/menu/frontend/global/create/(?P<menuName>[^/]++)/(?P<parentKey>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_commerce_menu_global_menu_ajax_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_create')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::createAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_create:

                    // oro_commerce_menu_global_menu_ajax_delete
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/delete') && preg_match('#^/admin/menu/frontend/global/delete/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_commerce_menu_global_menu_ajax_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_delete')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::deleteAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_delete:

                    // oro_commerce_menu_global_menu_ajax_show
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/show') && preg_match('#^/admin/menu/frontend/global/show/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_global_menu_ajax_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_show')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::showAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_show:

                    // oro_commerce_menu_global_menu_ajax_hide
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/hide') && preg_match('#^/admin/menu/frontend/global/hide/(?P<menuName>[^/]++)/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_global_menu_ajax_hide;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_hide')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::hideAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_hide:

                    // oro_commerce_menu_global_menu_ajax_move
                    if (0 === strpos($pathinfo, '/admin/menu/frontend/global/move') && preg_match('#^/admin/menu/frontend/global/move/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_commerce_menu_global_menu_ajax_move;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_ajax_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalAjaxMenuController::moveAction',));
                    }
                    not_oro_commerce_menu_global_menu_ajax_move:

                    // oro_commerce_menu_global_menu_index
                    if ('/admin/menu/frontend/global' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_commerce_menu_global_menu_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_commerce_menu_global_menu_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalMenuController::indexAction',  '_route' => 'oro_commerce_menu_global_menu_index',);
                    }
                    not_oro_commerce_menu_global_menu_index:

                    // oro_commerce_menu_global_menu_view
                    if (preg_match('#^/admin/menu/frontend/global/(?P<menuName>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_view')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalMenuController::viewAction',));
                    }

                    // oro_commerce_menu_global_menu_create
                    if (preg_match('#^/admin/menu/frontend/global/(?P<menuName>[^/]++)/create(?:/(?P<parentKey>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_create')), array (  'parentKey' => NULL,  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalMenuController::createAction',));
                    }

                    // oro_commerce_menu_global_menu_update
                    if (preg_match('#^/admin/menu/frontend/global/(?P<menuName>[^/]++)/update/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_update')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalMenuController::updateAction',));
                    }

                    // oro_commerce_menu_global_menu_move
                    if (preg_match('#^/admin/menu/frontend/global/(?P<menuName>[^/]++)/move$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_commerce_menu_global_menu_move')), array (  '_controller' => 'Oro\\Bundle\\CommerceMenuBundle\\Controller\\GlobalMenuController::moveAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // oro_product_view
                if (0 === strpos($pathinfo, '/admin/product/view') && preg_match('#^/admin/product/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_view')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::viewAction',));
                }

                // oro_product_info
                if (0 === strpos($pathinfo, '/admin/product/info') && preg_match('#^/admin/product/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_info')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::infoAction',));
                }

                // oro_product_index
                if ('/admin/product' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_product_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_product_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::indexAction',  '_route' => 'oro_product_index',);
                }
                not_oro_product_index:

                if (0 === strpos($pathinfo, '/admin/product/create')) {
                    // oro_product_create
                    if ('/admin/product/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::createAction',  '_route' => 'oro_product_create',);
                    }

                    // oro_product_create_step_two
                    if ('/admin/product/create/step-two' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::createStepTwoAction',  '_route' => 'oro_product_create_step_two',);
                    }

                }

                // oro_product_update
                if (0 === strpos($pathinfo, '/admin/product/update') && preg_match('#^/admin/product/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_update')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::updateAction',));
                }

                // oro_product_related_items_update
                if (0 === strpos($pathinfo, '/admin/product/related-items-update') && preg_match('#^/admin/product/related\\-items\\-update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_related_items_update')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::updateRelatedItemsAction',));
                }

                if (0 === strpos($pathinfo, '/admin/product/get-')) {
                    if (0 === strpos($pathinfo, '/admin/product/get-changed-')) {
                        // oro_product_get_changed_slugs
                        if (0 === strpos($pathinfo, '/admin/product/get-changed-urls') && preg_match('#^/admin/product/get\\-changed\\-urls/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_get_changed_slugs')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::getChangedSlugsAction',));
                        }

                        // oro_product_get_changed_default_slug
                        if (0 === strpos($pathinfo, '/admin/product/get-changed-default-url') && preg_match('#^/admin/product/get\\-changed\\-default\\-url/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_get_changed_default_slug')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::getChangedDefaultSlugAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/product/get-possible-products-for-')) {
                        // oro_product_possible_products_for_related_products
                        if (0 === strpos($pathinfo, '/admin/product/get-possible-products-for-related-products') && preg_match('#^/admin/product/get\\-possible\\-products\\-for\\-related\\-products/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_possible_products_for_related_products')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::getPossibleProductsForRelatedProductsAction',));
                        }

                        // oro_product_possible_products_for_upsell_products
                        if (0 === strpos($pathinfo, '/admin/product/get-possible-products-for-upsell-products') && preg_match('#^/admin/product/get\\-possible\\-products\\-for\\-upsell\\-products/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_possible_products_for_upsell_products')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::getPossibleProductsForUpsellProductsAction',));
                        }

                    }

                }

                // oro_add_products_widget
                if (0 === strpos($pathinfo, '/admin/product/add-products-widget') && preg_match('#^/admin/product/add\\-products\\-widget/(?P<gridName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_add_products_widget')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\ProductController::addProductsWidgetAction',));
                }

                if (0 === strpos($pathinfo, '/admin/product-')) {
                    if (0 === strpos($pathinfo, '/admin/product-unit/product-units')) {
                        // oro_product_unit_all_product_units
                        if ('/admin/product-unit/product-units' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\AjaxProductUnitController::getAllProductUnitsAction',  '_route' => 'oro_product_unit_all_product_units',);
                        }

                        // oro_product_unit_product_units
                        if (preg_match('#^/admin/product\\-unit/product\\-units/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_unit_product_units')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\AjaxProductUnitController::getProductUnitsAction',));
                        }

                    }

                    // oro_product_datagrid_count_get
                    if (0 === strpos($pathinfo, '/admin/product-grid/get-count') && preg_match('#^/admin/product\\-grid/get\\-count/(?P<gridName>[\\w\\:-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_datagrid_count_get')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\AjaxGetProductsCountController::getAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // oro_product_frontend_product_index
            if ('/product' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_product_frontend_product_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_product_frontend_product_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\ProductController::indexAction',  '_route' => 'oro_product_frontend_product_index',);
            }
            not_oro_product_frontend_product_index:

            // oro_product_frontend_product_view
            if (0 === strpos($pathinfo, '/product/view') && preg_match('#^/product/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_frontend_product_view')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\ProductController::viewAction',));
            }

            // oro_product_frontend_ajax_names_by_skus
            if ('/product/names-by-skus' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_product_frontend_ajax_names_by_skus;
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\AjaxProductController::productNamesBySkusAction',  '_route' => 'oro_product_frontend_ajax_names_by_skus',);
            }
            not_oro_product_frontend_ajax_names_by_skus:

            // oro_product_frontend_ajax_images_by_id
            if (0 === strpos($pathinfo, '/product/images-by-id') && preg_match('#^/product/images\\-by\\-id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_product_frontend_ajax_images_by_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_frontend_ajax_images_by_id')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\AjaxProductController::productImagesByIdAction',));
            }
            not_oro_product_frontend_ajax_images_by_id:

            if (0 === strpos($pathinfo, '/product-')) {
                // oro_product_frontend_ajaxproductunit_productunits
                if (0 === strpos($pathinfo, '/product-unit/product-units') && preg_match('#^/product\\-unit/product\\-units/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_frontend_ajaxproductunit_productunits')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\AjaxProductUnitController::productUnitsAction',));
                }

                // oro_product_frontend_ajax_product_variant_get_available
                if (0 === strpos($pathinfo, '/product-variant/available-variants') && preg_match('#^/product\\-variant/available\\-variants/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_frontend_ajax_product_variant_get_available')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\AjaxProductVariantController::getAvailableAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/customer/product/quick-add')) {
            // oro_product_frontend_quick_add
            if ('/customer/product/quick-add' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_product_frontend_quick_add;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_product_frontend_quick_add');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\QuickAddController::addAction',  '_route' => 'oro_product_frontend_quick_add',);
            }
            not_oro_product_frontend_quick_add:

            // oro_product_frontend_quick_add_import
            if ('/customer/product/quick-add/import' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_product_frontend_quick_add_import;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_product_frontend_quick_add_import');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\QuickAddController::importAction',  '_route' => 'oro_product_frontend_quick_add_import',);
            }
            not_oro_product_frontend_quick_add_import:

            // oro_product_frontend_quick_add_copy_paste
            if ('/customer/product/quick-add/copy-paste' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_product_frontend_quick_add_copy_paste;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_product_frontend_quick_add_copy_paste');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\QuickAddController::copyPasteAction',  '_route' => 'oro_product_frontend_quick_add_copy_paste',);
            }
            not_oro_product_frontend_quick_add_copy_paste:

            // oro_product_frontend_quick_add_validation_result
            if ('/customer/product/quick-add/validation/result' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_product_frontend_quick_add_validation_result;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_product_frontend_quick_add_validation_result');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Frontend\\QuickAddController::validationResultAction',  '_route' => 'oro_product_frontend_quick_add_validation_result',);
            }
            not_oro_product_frontend_quick_add_validation_result:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_patch_product_inline_edit_name
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/inline\\-edit/product/(?P<id>[^/]++)/name/patch(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_api_patch_product_inline_edit_name;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_patch_product_inline_edit_name')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\InlineEditProductController::patchNameAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_patch_product_inline_edit_name:

                // oro_api_patch_product_inline_edit_inventory_status
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/inline\\-edit/product/(?P<id>[^/]++)/inventory\\-status/patch(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_api_patch_product_inline_edit_inventory_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_patch_product_inline_edit_inventory_status')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\InlineEditProductController::patchInventoryStatusAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_patch_product_inline_edit_inventory_status:

                // oro_api_get_brand
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/brands/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_brand;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_brand')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\BrandController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_brand:

                // oro_api_delete_brand
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/brands/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_brand;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_brand')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\BrandController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_brand:

                // oro_api_options_brands
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/brands(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_brands;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_brands')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\BrandController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_brands:

                // oro_api_options_brands_auto_1465
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/brand(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_brands_auto_1465;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_brands_auto_1465')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\Api\\Rest\\BrandController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_brands_auto_1465:

            }

            if (0 === strpos($pathinfo, '/admin/brand')) {
                // oro_product_brand_index
                if ('/admin/brand' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_product_brand_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_product_brand_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\BrandController::indexAction',  '_route' => 'oro_product_brand_index',);
                }
                not_oro_product_brand_index:

                // oro_product_brand_create
                if ('/admin/brand/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\BrandController::createAction',  '_route' => 'oro_product_brand_create',);
                }

                // oro_product_brand_update
                if (0 === strpos($pathinfo, '/admin/brand/update') && preg_match('#^/admin/brand/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_brand_update')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\BrandController::updateAction',));
                }

                // oro_product_brand_get_changed_slugs
                if (0 === strpos($pathinfo, '/admin/brand/get-changed-urls') && preg_match('#^/admin/brand/get\\-changed\\-urls/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_brand_get_changed_slugs')), array (  '_controller' => 'Oro\\Bundle\\ProductBundle\\Controller\\BrandController::getChangedSlugsAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/catalog')) {
                if (0 === strpos($pathinfo, '/admin/catalog/category')) {
                    // oro_catalog_category_create
                    if (0 === strpos($pathinfo, '/admin/catalog/category/create') && preg_match('#^/admin/catalog/category/create/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_catalog_category_create')), array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::createAction',));
                    }

                    // oro_catalog_category_update
                    if (0 === strpos($pathinfo, '/admin/catalog/category/update') && preg_match('#^/admin/catalog/category/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_catalog_category_update')), array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::updateAction',));
                    }

                    // oro_catalog_category_index
                    if ('/admin/catalog/category' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_catalog_category_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_catalog_category_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::indexAction',  '_route' => 'oro_catalog_category_index',);
                    }
                    not_oro_catalog_category_index:

                    // oro_catalog_category_move_form
                    if ('/admin/catalog/category/move' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::moveAction',  '_route' => 'oro_catalog_category_move_form',);
                    }

                    // oro_catalog_category_tree_widget
                    if ('/admin/catalog/category/widget/tree' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::treeWidgetAction',  '_route' => 'oro_catalog_category_tree_widget',);
                    }

                    // oro_catalog_category_get_changed_slugs
                    if (0 === strpos($pathinfo, '/admin/catalog/category/get-changed-urls') && preg_match('#^/admin/catalog/category/get\\-changed\\-urls/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_catalog_category_get_changed_slugs')), array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\CategoryController::getChangedSlugsAction',));
                    }

                }

                // oro_catalog_category_product_sidebar
                if ('/admin/catalog/product/sidebar' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\ProductController::sidebarAction',  '_route' => 'oro_catalog_category_product_sidebar',);
                }

                // oro_catalog_category_move
                if ('/admin/catalog/ajax/category-move' === $pathinfo) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_catalog_category_move;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\AjaxCatalogController::categoryMoveAction',  '_route' => 'oro_catalog_category_move',);
                }
                not_oro_catalog_category_move:

            }

        }

        // oro_catalog_frontend_product_allproducts
        if ('/catalog/allproducts' === $pathinfo) {
            return array (  '_controller' => 'Oro\\Bundle\\CatalogBundle\\Controller\\Frontend\\ProductController::allProductsAction',  '_route' => 'oro_catalog_frontend_product_allproducts',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/marketing-list')) {
                // oro_marketing_list_index
                if ('/admin/marketing-list' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_marketing_list_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_marketing_list_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::indexAction',  '_route' => 'oro_marketing_list_index',);
                }
                not_oro_marketing_list_index:

                // oro_marketing_list_view
                if (0 === strpos($pathinfo, '/admin/marketing-list/view') && preg_match('#^/admin/marketing\\-list/view(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_list_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::viewAction',));
                }

                // oro_marketing_list_create
                if ('/admin/marketing-list/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::createAction',  '_route' => 'oro_marketing_list_create',);
                }

                // oro_marketing_list_update
                if (0 === strpos($pathinfo, '/admin/marketing-list/update') && preg_match('#^/admin/marketing\\-list/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_list_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_contact_marketinglist_information_field_type
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/contact\\-information/field/type(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_contact_marketinglist_information_field_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_contact_marketinglist_information_field_type')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::contactInformationFieldTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_contact_marketinglist_information_field_type:

                // oro_api_entity_marketinglist_contact_information_fields
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/contact\\-information/entity/fields(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_entity_marketinglist_contact_information_fields;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_entity_marketinglist_contact_information_fields')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::entityContactInformationFieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_entity_marketinglist_contact_information_fields:

                // oro_api_delete_marketinglist
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_marketinglist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_marketinglist')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_marketinglist:

                // oro_api_options_marketinglists
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglists;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglists')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglists:

                // oro_api_options_marketinglists_auto_1466
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglists_auto_1466;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglists_auto_1466')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglists_auto_1466:

                // oro_api_remove_marketinglist_removeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/remove/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_remove_marketinglist_removeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_remove_marketinglist_removeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::removeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_remove_marketinglist_removeditem:

                // oro_api_unremove_marketinglist_removeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/unremove/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_unremove_marketinglist_removeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_unremove_marketinglist_removeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::unremoveAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_unremove_marketinglist_removeditem:

                // oro_api_post_marketinglist_removeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/removeditems(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_removeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_removeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_removeditem:

                // oro_api_delete_marketinglist_removeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/removeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_marketinglist_removeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_marketinglist_removeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_marketinglist_removeditem:

                // oro_api_options_marketinglist_removeditems
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/removeditems(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglist_removeditems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglist_removeditems')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglist_removeditems:

                // oro_api_options_marketinglist_removeditems_auto_1467
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/removeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglist_removeditems_auto_1467;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglist_removeditems_auto_1467')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglist_removeditems_auto_1467:

                // oro_api_unsubscribe_marketinglist_unsubscribeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/unsubscribe/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_unsubscribe_marketinglist_unsubscribeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_unsubscribe_marketinglist_unsubscribeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::unsubscribeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_unsubscribe_marketinglist_unsubscribeditem:

                // oro_api_subscribe_marketinglist_unsubscribeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/subscribe/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_subscribe_marketinglist_unsubscribeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_subscribe_marketinglist_unsubscribeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::subscribeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_subscribe_marketinglist_unsubscribeditem:

                // oro_api_post_marketinglist_unsubscribeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/unsubscribeditems(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_unsubscribeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_unsubscribeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_unsubscribeditem:

                // oro_api_delete_marketinglist_unsubscribeditem
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/unsubscribeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_marketinglist_unsubscribeditem;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_marketinglist_unsubscribeditem')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_marketinglist_unsubscribeditem:

                // oro_api_options_marketinglist_unsubscribeditems
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditems(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglist_unsubscribeditems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglist_unsubscribeditems')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglist_unsubscribeditems:

                // oro_api_options_marketinglist_unsubscribeditems_auto_1468
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglist_unsubscribeditems_auto_1468;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglist_unsubscribeditems_auto_1468')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglist_unsubscribeditems_auto_1468:

                // oro_api_post_marketinglist_segment_run
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/segments/runs(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_segment_run;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_segment_run')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_segment_run:

                // oro_api_options_marketinglist_segments
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/segments(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_marketinglist_segments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_marketinglist_segments')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_marketinglist_segments:

                // oro_api_post_marketinglist_removeditem_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/removeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_removeditem_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_removeditem_deprecated')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_removeditem_deprecated:

                // oro_api_post_marketinglist_segment_run_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/segment/run(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_segment_run_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_segment_run_deprecated')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_segment_run_deprecated:

                // oro_api_post_marketinglist_unsubscribeditem_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditem(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_marketinglist_unsubscribeditem_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_marketinglist_unsubscribeditem_deprecated')), array (  '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_marketinglist_unsubscribeditem_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/customer')) {
                // oro_customer_customer_index
                if ('/admin/customer' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_customer_customer_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_customer_customer_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerController::indexAction',  '_route' => 'oro_customer_customer_index',);
                }
                not_oro_customer_customer_index:

                // oro_customer_customer_view
                if (0 === strpos($pathinfo, '/admin/customer/view') && preg_match('#^/admin/customer/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerController::viewAction',));
                }

                // oro_customer_customer_create
                if ('/admin/customer/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerController::createAction',  '_route' => 'oro_customer_customer_create',);
                }

                // oro_customer_customer_update
                if (0 === strpos($pathinfo, '/admin/customer/update') && preg_match('#^/admin/customer/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerController::updateAction',));
                }

                // oro_customer_customer_info
                if (0 === strpos($pathinfo, '/admin/customer/info') && preg_match('#^/admin/customer/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_info')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerController::infoAction',));
                }

                if (0 === strpos($pathinfo, '/admin/customer/address')) {
                    // oro_customer_address_book
                    if (0 === strpos($pathinfo, '/admin/customer/address/address-book') && preg_match('#^/admin/customer/address/address\\-book/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_address_book')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerAddressController::addressBookAction',));
                    }

                    // oro_customer_address_create
                    if (preg_match('#^/admin/customer/address/(?P<entityId>\\d+)/address\\-create$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_address_create')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerAddressController::createAction',));
                    }

                    // oro_customer_address_update
                    if (preg_match('#^/admin/customer/address/(?P<entityId>\\d+)/address\\-update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_address_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerAddressController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/customer/user/address')) {
                    // oro_customer_customer_user_address_book
                    if (0 === strpos($pathinfo, '/admin/customer/user/address/address-book') && preg_match('#^/admin/customer/user/address/address\\-book/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_address_book')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserAddressController::addressBookAction',));
                    }

                    // oro_customer_customer_user_address_create
                    if (preg_match('#^/admin/customer/user/address/(?P<entityId>[^/]++)/address\\-create$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_address_create')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserAddressController::createAction',));
                    }

                    // oro_customer_customer_user_address_update
                    if (preg_match('#^/admin/customer/user/address/(?P<entityId>[^/]++)/address\\-update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_address_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserAddressController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/customer/group')) {
                    // oro_customer_customer_group_index
                    if ('/admin/customer/group' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_customer_customer_group_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_customer_customer_group_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerGroupController::indexAction',  '_route' => 'oro_customer_customer_group_index',);
                    }
                    not_oro_customer_customer_group_index:

                    // oro_customer_customer_group_view
                    if (0 === strpos($pathinfo, '/admin/customer/group/view') && preg_match('#^/admin/customer/group/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_group_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerGroupController::viewAction',));
                    }

                    // oro_customer_customer_group_create
                    if ('/admin/customer/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerGroupController::createAction',  '_route' => 'oro_customer_customer_group_create',);
                    }

                    // oro_customer_customer_group_update
                    if (0 === strpos($pathinfo, '/admin/customer/group/update') && preg_match('#^/admin/customer/group/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_group_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerGroupController::updateAction',));
                    }

                    // oro_customer_customer_group_info
                    if (0 === strpos($pathinfo, '/admin/customer/group/info') && preg_match('#^/admin/customer/group/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_group_info')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerGroupController::infoAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/customer/user')) {
                    // oro_customer_customer_user_view
                    if (0 === strpos($pathinfo, '/admin/customer/user/view') && preg_match('#^/admin/customer/user/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::viewAction',));
                    }

                    // oro_customer_customer_user_index
                    if ('/admin/customer/user' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_customer_customer_user_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_customer_customer_user_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::indexAction',  '_route' => 'oro_customer_customer_user_index',);
                    }
                    not_oro_customer_customer_user_index:

                    // oro_customer_customer_user_info
                    if (0 === strpos($pathinfo, '/admin/customer/user/info') && preg_match('#^/admin/customer/user/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_info')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::infoAction',));
                    }

                    // oro_customer_customer_user_roles
                    if (0 === strpos($pathinfo, '/admin/customer/user/get-roles') && preg_match('#^/admin/customer/user/get\\-roles(?:/(?P<customerUserId>\\d+)(?:/(?P<customerId>\\d+))?)?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_roles')), array (  'customerId' => 0,  'customerUserId' => 0,  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::getRolesAction',));
                    }

                    // oro_customer_customer_user_create
                    if ('/admin/customer/user/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::createAction',  '_route' => 'oro_customer_customer_user_create',);
                    }

                    // oro_customer_customer_user_update
                    if (0 === strpos($pathinfo, '/admin/customer/user/update') && preg_match('#^/admin/customer/user/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserController::updateAction',));
                    }

                    // oro_customer_customer_user_get_customer
                    if (0 === strpos($pathinfo, '/admin/customer/user/get-customer') && preg_match('#^/admin/customer/user/get\\-customer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_get_customer')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\AjaxCustomerUserController::getCustomerIdAction',));
                    }

                }

            }

        }

        // oro_customer_frontend_customer_user_get_customer
        if (0 === strpos($pathinfo, '/customer/user/get-customer') && preg_match('#^/customer/user/get\\-customer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_get_customer')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\AjaxCustomerUserController::getCustomerIdAction',));
        }

        if (0 === strpos($pathinfo, '/admin/customer')) {
            if (0 === strpos($pathinfo, '/admin/customer/user/role')) {
                // oro_customer_customer_user_role_index
                if ('/admin/customer/user/role' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_customer_customer_user_role_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_customer_customer_user_role_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserRoleController::indexAction',  '_route' => 'oro_customer_customer_user_role_index',);
                }
                not_oro_customer_customer_user_role_index:

                // oro_customer_customer_user_role_view
                if (0 === strpos($pathinfo, '/admin/customer/user/role/view') && preg_match('#^/admin/customer/user/role/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_role_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserRoleController::viewAction',));
                }

                // oro_customer_customer_user_role_create
                if ('/admin/customer/user/role/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserRoleController::createAction',  '_route' => 'oro_customer_customer_user_role_create',);
                }

                // oro_customer_customer_user_role_update
                if (0 === strpos($pathinfo, '/admin/customer/user/role/update') && preg_match('#^/admin/customer/user/role/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_customer_user_role_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\CustomerUserRoleController::updateAction',));
                }

            }

            // oro_customer_acl_access_levels
            if (0 === strpos($pathinfo, '/admin/customer/acl/acl-access-levels') && preg_match('#^/admin/customer/acl/acl\\-access\\-levels/(?P<oid>[\\w]+:[\\w\\:\\(\\)\\|]+)(?:/(?P<permission>[\\w/]+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_acl_access_levels')), array (  '_format' => 'json',  'permission' => NULL,  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/customer')) {
            if (0 === strpos($pathinfo, '/customer/profile')) {
                // oro_customer_frontend_customer_user_profile
                if ('/customer/profile' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_customer_frontend_customer_user_profile;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_customer_frontend_customer_user_profile');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserProfileController::profileAction',  '_route' => 'oro_customer_frontend_customer_user_profile',);
                }
                not_oro_customer_frontend_customer_user_profile:

                // oro_customer_frontend_customer_user_profile_update
                if ('/customer/profile/update' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserProfileController::updateAction',  '_route' => 'oro_customer_frontend_customer_user_profile_update',);
                }

            }

            if (0 === strpos($pathinfo, '/customer/user')) {
                // oro_customer_frontend_customer_user_register
                if ('/customer/user/registration' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRegisterController::registerAction',  '_route' => 'oro_customer_frontend_customer_user_register',);
                }

                // oro_customer_frontend_customer_user_confirmation
                if ('/customer/user/confirm-email' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRegisterController::confirmEmailAction',  '_route' => 'oro_customer_frontend_customer_user_confirmation',);
                }

                // oro_customer_frontend_customer_user_view
                if (0 === strpos($pathinfo, '/customer/user/view') && preg_match('#^/customer/user/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserController::viewAction',));
                }

                // oro_customer_frontend_customer_user_index
                if ('/customer/user' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_customer_frontend_customer_user_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_customer_frontend_customer_user_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserController::indexAction',  '_route' => 'oro_customer_frontend_customer_user_index',);
                }
                not_oro_customer_frontend_customer_user_index:

                // oro_customer_frontend_customer_user_create
                if ('/customer/user/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserController::createAction',  '_route' => 'oro_customer_frontend_customer_user_create',);
                }

                // oro_customer_frontend_customer_user_update
                if (0 === strpos($pathinfo, '/customer/user/update') && preg_match('#^/customer/user/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/customer/user/address')) {
                    // oro_customer_frontend_customer_user_address_index
                    if ('/customer/user/address' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_customer_frontend_customer_user_address_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_customer_frontend_customer_user_address_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserAddressController::indexAction',  '_route' => 'oro_customer_frontend_customer_user_address_index',);
                    }
                    not_oro_customer_frontend_customer_user_address_index:

                    // oro_customer_frontend_customer_user_address_create
                    if (preg_match('#^/customer/user/address/(?P<entityId>\\d+)/address\\-create$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_address_create')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserAddressController::createAction',));
                    }

                    // oro_customer_frontend_customer_user_address_update
                    if (preg_match('#^/customer/user/address/(?P<entityId>\\d+)/address/(?P<id>\\d+)/update$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_address_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserAddressController::updateAction',));
                    }

                    if (0 === strpos($pathinfo, '/customer/user/address/customer')) {
                        // oro_customer_frontend_customer_address_create
                        if (preg_match('#^/customer/user/address/customer/(?P<entityId>\\d+)/create$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_address_create')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerAddressController::createAction',));
                        }

                        // oro_customer_frontend_customer_address_update
                        if (preg_match('#^/customer/user/address/customer/(?P<entityId>\\d+)/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_address_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerAddressController::updateAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/customer/user/log')) {
                    if (0 === strpos($pathinfo, '/customer/user/login')) {
                        // oro_customer_customer_user_security_login
                        if ('/customer/user/login' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_customer_customer_user_security_login',);
                        }

                        // oro_customer_customer_user_security_check
                        if ('/customer/user/login-check' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_customer_customer_user_security_check',);
                        }

                    }

                    // oro_customer_customer_user_security_logout
                    if ('/customer/user/logout' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_customer_customer_user_security_logout',);
                    }

                }

                // oro_customer_frontend_customer_user_reset_request
                if ('/customer/user/reset-request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_customer_frontend_customer_user_reset_request;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\ResetController::requestAction',  '_route' => 'oro_customer_frontend_customer_user_reset_request',);
                }
                not_oro_customer_frontend_customer_user_reset_request:

                // oro_customer_frontend_customer_user_reset_check_email
                if ('/customer/user/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_customer_frontend_customer_user_reset_check_email;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\ResetController::checkEmailAction',  '_route' => 'oro_customer_frontend_customer_user_reset_check_email',);
                }
                not_oro_customer_frontend_customer_user_reset_check_email:

                // oro_customer_frontend_customer_user_password_reset
                if ('/customer/user/reset' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_customer_frontend_customer_user_password_reset;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\ResetController::resetAction',  '_route' => 'oro_customer_frontend_customer_user_password_reset',);
                }
                not_oro_customer_frontend_customer_user_password_reset:

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_customer_get_commercecustomer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_commercecustomer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_commercecustomer_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_commercecustomer_address:

                // oro_api_customer_get_commercecustomer_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomers/(?P<entityId>[^/]++)/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_commercecustomer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_commercecustomer_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_commercecustomer_addresses:

                // oro_api_customer_delete_commercecustomer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_customer_delete_commercecustomer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_delete_commercecustomer_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_delete_commercecustomer_address:

                // oro_api_customer_get_commercecustomer_address_by_type
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomers/(?P<entityId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_commercecustomer_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_commercecustomer_address_by_type')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_commercecustomer_address_by_type:

                // oro_api_customer_get_commercecustomer_address_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomers/(?P<entityId>[^/]++)/address/primary(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_commercecustomer_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_commercecustomer_address_primary')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_commercecustomer_address_primary:

                // oro_api_customer_options_commercecustomer_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomer/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_options_commercecustomer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_options_commercecustomer_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_options_commercecustomer_addresses:

                // oro_api_customer_options_commercecustomer_addresses_auto_1469
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/commercecustomer/address(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_options_commercecustomer_addresses_auto_1469;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_options_commercecustomer_addresses_auto_1469')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CommerceCustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_options_commercecustomer_addresses_auto_1469:

                // oro_api_customer_get_customeruser_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_customeruser_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_customeruser_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_customeruser_address:

                // oro_api_customer_get_customeruser_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_customeruser_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_customeruser_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_customeruser_addresses:

                // oro_api_customer_delete_customeruser_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_customer_delete_customeruser_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_delete_customeruser_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_delete_customeruser_address:

                // oro_api_customer_get_customeruser_address_by_type
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_customeruser_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_customeruser_address_by_type')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_customeruser_address_by_type:

                // oro_api_customer_get_customeruser_address_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/address/primary(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_customeruser_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_customeruser_address_primary')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_customeruser_address_primary:

                // oro_api_customer_options_customeruser_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customeruser/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_options_customeruser_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_options_customeruser_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_options_customeruser_addresses:

                // oro_api_customer_options_customeruser_addresses_auto_1470
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customeruser/address(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_options_customeruser_addresses_auto_1470;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_options_customeruser_addresses_auto_1470')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\CustomerUserAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_options_customeruser_addresses_auto_1470:

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_customer_frontend_get_customeruser_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customeruser_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customeruser_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customeruser_address:

                // oro_api_customer_frontend_get_customeruser_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customeruser_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customeruser_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customeruser_addresses:

                // oro_api_customer_frontend_delete_customeruser_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_customer_frontend_delete_customeruser_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_delete_customeruser_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_delete_customeruser_address:

                // oro_api_customer_frontend_get_customeruser_address_by_type
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customeruser_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customeruser_address_by_type')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customeruser_address_by_type:

                // oro_api_customer_frontend_get_customeruser_address_primary
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customerusers/(?P<entityId>[^/]++)/address/primary(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customeruser_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customeruser_address_primary')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customeruser_address_primary:

                // oro_api_customer_frontend_options_customeruser_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customeruser/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_frontend_options_customeruser_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_options_customeruser_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_options_customeruser_addresses:

                // oro_api_customer_frontend_options_customeruser_addresses_auto_1471
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customeruser/address(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_frontend_options_customeruser_addresses_auto_1471;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_options_customeruser_addresses_auto_1471')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerUserAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_options_customeruser_addresses_auto_1471:

                // oro_api_customer_frontend_get_customer_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customer_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customer_address:

                // oro_api_customer_frontend_get_customer_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<entityId>[^/]++)/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customer_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customer_addresses:

                // oro_api_customer_frontend_delete_customer_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<entityId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_customer_frontend_delete_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_delete_customer_address')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_delete_customer_address:

                // oro_api_customer_frontend_get_customer_address_by_type
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<entityId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customer_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customer_address_by_type')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customer_address_by_type:

                // oro_api_customer_frontend_get_customer_address_primary
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<entityId>[^/]++)/address/primary(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_frontend_get_customer_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_get_customer_address_primary')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_get_customer_address_primary:

                // oro_api_customer_frontend_options_customer_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customer/addresses(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_frontend_options_customer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_options_customer_addresses')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_options_customer_addresses:

                // oro_api_customer_frontend_options_customer_addresses_auto_1472
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/customer/address(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_customer_frontend_options_customer_addresses_auto_1472;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_frontend_options_customer_addresses_auto_1472')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_frontend_options_customer_addresses_auto_1472:

                // oro_api_frontend_get_navigationitems
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_navigationitems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_navigationitems:

                // oro_api_frontend_post_navigationitems
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_post_navigationitems;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_post_navigationitems:

                // oro_api_frontend_put_navigationitems_id
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_frontend_put_navigationitems_id;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_put_navigationitems_id:

                // oro_api_frontend_delete_navigationitems_id
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_frontend_delete_navigationitems_id;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_delete_navigationitems_id:

                // oro_api_frontend_get_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<position>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_sidebars')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\SidebarController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_sidebars:

                // oro_api_frontend_post_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_post_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_post_sidebars')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\SidebarController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_post_sidebars:

                // oro_api_frontend_put_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<stateId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_frontend_put_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_put_sidebars')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\SidebarController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_put_sidebars:

                // oro_api_frontend_cget_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_cget_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_cget_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_cget_sidebarwidgets:

                // oro_api_frontend_get_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_sidebarwidgets:

                // oro_api_frontend_post_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_post_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_post_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\WidgetController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_post_sidebarwidgets:

                // oro_api_frontend_put_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_frontend_put_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_put_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_put_sidebarwidgets:

                // oro_api_frontend_delete_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_frontend_delete_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_delete_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_delete_sidebarwidgets:

                // oro_api_frontend_get_pagestates
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_pagestates;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_pagestates:

                // oro_api_frontend_get_pagestate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_pagestate:

                // oro_api_frontend_post_pagestate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_post_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_post_pagestate:

                // oro_api_frontend_put_pagestate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_frontend_put_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_put_pagestate:

                // oro_api_frontend_delete_pagestate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_frontend_delete_pagestate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_delete_pagestate:

                // oro_api_frontend_get_pagestate_checkid
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate/checkid(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_get_pagestate_checkid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_get_pagestate_checkid:

                // oro_api_frontend_country_get_regions
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/country/regions/(?P<country>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_frontend_country_get_regions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_country_get_regions')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\CountryRegionsController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_country_get_regions:

                // oro_api_frontend_patch_entity_data
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/entity_data/(?P<className>[^/]++)/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_api_frontend_patch_entity_data;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_patch_entity_data')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\EntityDataController::patchAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_patch_entity_data:

                // oro_api_customer_cget_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_cget_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_cget_windows')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\FrontendWindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_cget_windows:

                // oro_api_customer_get_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_customer_get_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_get_windows')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\FrontendWindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_get_windows:

                // oro_api_customer_post_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_customer_post_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_post_windows')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\FrontendWindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_post_windows:

                // oro_api_customer_put_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_customer_put_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_put_windows')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\FrontendWindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_put_windows:

                // oro_api_customer_delete_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_customer_delete_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_customer_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Api\\Rest\\FrontendWindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_customer_delete_windows:

                // oro_api_frontend_datagrid_gridview_post
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_datagrid_gridview_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_datagrid_gridview_post')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\GridViewController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_datagrid_gridview_post:

                // oro_api_frontend_datagrid_gridview_put
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_frontend_datagrid_gridview_put;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_datagrid_gridview_put')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\GridViewController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_datagrid_gridview_put:

                // oro_api_frontend_datagrid_gridview_delete
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_frontend_datagrid_gridview_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_datagrid_gridview_delete')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\GridViewController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_datagrid_gridview_delete:

                // oro_api_frontend_datagrid_gridview_default
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>.+)/default/(?P<default>\\d+)/gridName(?:/(?P<gridName>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_frontend_datagrid_gridview_default;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_datagrid_gridview_default')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\GridViewController::defaultAction',  'default' => false,  'gridName' => NULL,  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_datagrid_gridview_default:

                // oro_api_frontend_datagrid_gridview_options
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_frontend_datagrid_gridview_options;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_frontend_datagrid_gridview_options')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\GridViewController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_frontend_datagrid_gridview_options:

            }

        }

        // oro_customer_pinbar_help
        if ('/pinbar/help' === $pathinfo) {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_customer_pinbar_help',);
        }

        if (0 === strpos($pathinfo, '/customer/roles')) {
            // oro_customer_frontend_customer_user_role_index
            if ('/customer/roles' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_customer_frontend_customer_user_role_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_customer_frontend_customer_user_role_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRoleController::indexAction',  '_route' => 'oro_customer_frontend_customer_user_role_index',);
            }
            not_oro_customer_frontend_customer_user_role_index:

            // oro_customer_frontend_customer_user_role_view
            if (0 === strpos($pathinfo, '/customer/roles/view') && preg_match('#^/customer/roles/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_role_view')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRoleController::viewAction',));
            }

            // oro_customer_frontend_customer_user_role_create
            if ('/customer/roles/create' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRoleController::createAction',  '_route' => 'oro_customer_frontend_customer_user_role_create',);
            }

            // oro_customer_frontend_customer_user_role_update
            if (0 === strpos($pathinfo, '/customer/roles/update') && preg_match('#^/customer/roles/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_customer_user_role_update')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\CustomerUserRoleController::updateAction',));
            }

            // oro_customer_frontend_acl_access_levels
            if (0 === strpos($pathinfo, '/customer/roles/acl-access-levels') && preg_match('#^/customer/roles/acl\\-access\\-levels/(?P<oid>\\w+:[\\w\\(\\)]+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_acl_access_levels')), array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',  '_format' => 'json',));
            }

        }

        // oro_frontend_autocomplete_search
        if ('/autocomplete/search' === $pathinfo) {
            return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_frontend_autocomplete_search',);
        }

        if (0 === strpos($pathinfo, '/entity-pagination')) {
            // oro_customer_frontend_entity_pagination_first
            if (0 === strpos($pathinfo, '/entity-pagination/first') && preg_match('#^/entity\\-pagination/first/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]+)"$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_entity_pagination_first')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::firstAction',));
            }

            // oro_customer_frontend_entity_pagination_previous
            if (0 === strpos($pathinfo, '/entity-pagination/previous') && preg_match('#^/entity\\-pagination/previous/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]+)"$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_entity_pagination_previous')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::previousAction',));
            }

            // oro_customer_frontend_entity_pagination_next
            if (0 === strpos($pathinfo, '/entity-pagination/next') && preg_match('#^/entity\\-pagination/next/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]+)"$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_entity_pagination_next')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::nextAction',));
            }

            // oro_customer_frontend_entity_pagination_last
            if (0 === strpos($pathinfo, '/entity-pagination/last') && preg_match('#^/entity\\-pagination/last/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]+)"$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_customer_frontend_entity_pagination_last')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::lastAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // oro_frontend_api_login
            if ('/api/login' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_frontend_api_login;
                }

                return array (  '_controller' => 'Oro\\Bundle\\CustomerBundle\\Controller\\Frontend\\Api\\Rest\\LoginController::postAction',  '_route' => 'oro_frontend_api_login',);
            }
            not_oro_frontend_api_login:

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/tracking')) {
                    // oro_tracking_data_create
                    if ('/admin/tracking/data/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingDataController::createAction',  '_route' => 'oro_tracking_data_create',);
                    }

                    if (0 === strpos($pathinfo, '/admin/tracking/website')) {
                        // oro_tracking_website_index
                        if (preg_match('#^/admin/tracking/website(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::indexAction',));
                        }

                        // oro_tracking_website_create
                        if ('/admin/tracking/website/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::createAction',  '_route' => 'oro_tracking_website_create',);
                        }

                        // oro_tracking_website_update
                        if (0 === strpos($pathinfo, '/admin/tracking/website/update') && preg_match('#^/admin/tracking/website/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_update')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::updateAction',));
                        }

                        // oro_tracking_website_view
                        if (0 === strpos($pathinfo, '/admin/tracking/website/view') && preg_match('#^/admin/tracking/website/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_view')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::viewAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/a')) {
                    if (0 === strpos($pathinfo, '/admin/api/rest')) {
                        // oro_api_delete_tracking_website
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/trackings/(?P<id>[^/]++)/website(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_api_delete_tracking_website;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tracking_website')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_delete_tracking_website:

                        // oro_api_options_tracking_websites
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tracking/websites(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_tracking_websites;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_tracking_websites:

                        // oro_api_options_tracking_websites_auto_1473
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tracking/website(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_tracking_websites_auto_1473;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites_auto_1473')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_tracking_websites_auto_1473:

                    }

                    if (0 === strpos($pathinfo, '/admin/account')) {
                        // oro_account_view
                        if (0 === strpos($pathinfo, '/admin/account/view') && preg_match('#^/admin/account/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_view')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::viewAction',));
                        }

                        // oro_account_create
                        if ('/admin/account/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::createAction',  '_route' => 'oro_account_create',);
                        }

                        // oro_account_update
                        if (0 === strpos($pathinfo, '/admin/account/update') && preg_match('#^/admin/account/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_update')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::updateAction',));
                        }

                        // oro_account_index
                        if (preg_match('#^/admin/account(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::indexAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/account/widget')) {
                            // oro_account_widget_contacts_info
                            if (0 === strpos($pathinfo, '/admin/account/widget/contacts') && preg_match('#^/admin/account/widget/contacts(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_widget_contacts_info')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::contactsInfoAction',));
                            }

                            // oro_account_widget_info
                            if (0 === strpos($pathinfo, '/admin/account/widget/info') && preg_match('#^/admin/account/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_widget_info')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::infoAction',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/api/rest')) {
                        // oro_api_get_accounts
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_get_accounts;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_accounts')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_get_accounts:

                        // oro_api_get_account
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_get_account;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_account')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::getAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_get_account:

                        // oro_api_put_account
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_oro_api_put_account;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_account')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::putAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_put_account:

                        // oro_api_post_account
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_oro_api_post_account;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_account')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_post_account:

                        // oro_api_delete_account
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_api_delete_account;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_account')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_delete_account:

                        // oro_api_options_accounts
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_accounts;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_accounts')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_accounts:

                        // oro_api_options_accounts_auto_1474
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/account(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_accounts_auto_1474;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_accounts_auto_1474')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_accounts_auto_1474:

                        // oro_api_post_account_deprecated
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/account(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_oro_api_post_account_deprecated;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_account_deprecated')), array (  '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_post_account_deprecated:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/product/visibility/edit')) {
                    // oro_product_visibility_edit
                    if (preg_match('#^/admin/product/visibility/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_visibility_edit')), array (  '_controller' => 'Oro\\Bundle\\VisibilityBundle\\Controller\\ProductVisibilityController::editAction',));
                    }

                    // oro_product_visibility_scoped
                    if (preg_match('#^/admin/product/visibility/edit/(?P<productId>\\d+)/scope/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_visibility_scoped')), array (  '_controller' => 'Oro\\Bundle\\VisibilityBundle\\Controller\\ProductVisibilityController::scopeWidgetAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/call')) {
                    // oro_call_activity_view
                    if (0 === strpos($pathinfo, '/admin/call/activity/view') && preg_match('#^/admin/call/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_call_activity_view')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::activityAction',));
                    }

                    // oro_call_create
                    if ('/admin/call/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::createAction',  '_route' => 'oro_call_create',);
                    }

                    // oro_call_update
                    if (0 === strpos($pathinfo, '/admin/call/update') && preg_match('#^/admin/call/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_call_update')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::updateAction',));
                    }

                    // oro_call_index
                    if ('/admin/call' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_call_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_call_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::indexAction',  '_route' => 'oro_call_index',);
                    }
                    not_oro_call_index:

                    // oro_call_view
                    if (0 === strpos($pathinfo, '/admin/call/view') && preg_match('#^/admin/call/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_call_view')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::viewAction',));
                    }

                    // oro_call_widget_calls
                    if ('/admin/call/widget' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::callsAction',  '_route' => 'oro_call_widget_calls',);
                    }

                    // oro_call_base_widget_calls
                    if ('/admin/call/base-widget' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::baseCallsAction',  '_route' => 'oro_call_base_widget_calls',);
                    }

                    // oro_call_widget_info
                    if (0 === strpos($pathinfo, '/admin/call/widget/info') && preg_match('#^/admin/call/widget/info/(?P<id>\\d+)(?:/(?P<renderContexts>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_call_widget_info')), array (  'renderContexts' => true,  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::infoAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_calls
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_calls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calls')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_calls:

                    // oro_api_get_call
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_call;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_call')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_call:

                    // oro_api_put_call
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_api_put_call;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_call')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::putAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_put_call:

                    // oro_api_post_call
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_call;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_call')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_post_call:

                    // oro_api_delete_call
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_call;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_call')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_delete_call:

                    // oro_api_options_calls
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_calls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calls')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_calls:

                    // oro_api_options_calls_auto_1475
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/call(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_calls_auto_1475;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calls_auto_1475')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_calls_auto_1475:

                    // oro_api_post_call_deprecated
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/call(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_api_post_call_deprecated;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_call_deprecated')), array (  '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_post_call_deprecated:

                }

                if (0 === strpos($pathinfo, '/admin/campaign')) {
                    // oro_campaign_index
                    if ('/admin/campaign' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_campaign_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_campaign_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::indexAction',  '_route' => 'oro_campaign_index',);
                    }
                    not_oro_campaign_index:

                    // oro_campaign_create
                    if ('/admin/campaign/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::createAction',  '_route' => 'oro_campaign_create',);
                    }

                    // oro_campaign_update
                    if (0 === strpos($pathinfo, '/admin/campaign/update') && preg_match('#^/admin/campaign/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::updateAction',));
                    }

                    // oro_campaign_view
                    if (0 === strpos($pathinfo, '/admin/campaign/view') && preg_match('#^/admin/campaign/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_view')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::viewAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/campaign/e')) {
                        // oro_campaign_event_plot
                        if (0 === strpos($pathinfo, '/admin/campaign/event/plot') && preg_match('#^/admin/campaign/event/plot/(?P<period>[^/]++)/(?P<campaign>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_event_plot')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignEventController::plotAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/campaign/email')) {
                            // oro_email_campaign_index
                            if ('/admin/campaign/email' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_oro_email_campaign_index;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'oro_email_campaign_index');
                                }

                                return array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::indexAction',  '_route' => 'oro_email_campaign_index',);
                            }
                            not_oro_email_campaign_index:

                            // oro_email_campaign_create
                            if ('/admin/campaign/email/create' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::createAction',  '_route' => 'oro_email_campaign_create',);
                            }

                            // oro_email_campaign_update
                            if (0 === strpos($pathinfo, '/admin/campaign/email/update') && preg_match('#^/admin/campaign/email/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_campaign_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::updateAction',));
                            }

                            // oro_email_campaign_view
                            if (0 === strpos($pathinfo, '/admin/campaign/email/view') && preg_match('#^/admin/campaign/email/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_campaign_view')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::viewAction',));
                            }

                            // oro_email_campaign_send
                            if (0 === strpos($pathinfo, '/admin/campaign/email/send') && preg_match('#^/admin/campaign/email/send/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_campaign_send')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::sendAction',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/dashboard/campaign_')) {
                    // oro_campaign_dashboard_campaigns_leads_chart
                    if (0 === strpos($pathinfo, '/admin/dashboard/campaign_lead/chart') && preg_match('#^/admin/dashboard/campaign_lead/chart/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_dashboard_campaigns_leads_chart')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignLeadsAction',));
                    }

                    // oro_campaign_dashboard_campaigns_opportunity_chart
                    if (0 === strpos($pathinfo, '/admin/dashboard/campaign_opportunity/chart') && preg_match('#^/admin/dashboard/campaign_opportunity/chart/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_dashboard_campaigns_opportunity_chart')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignOpportunityAction',));
                    }

                    // oro_campaign_dashboard_campaigns_by_close_revenue_chart
                    if (0 === strpos($pathinfo, '/admin/dashboard/campaign_by_close_revenue/chart') && preg_match('#^/admin/dashboard/campaign_by_close_revenue/chart/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_campaign_dashboard_campaigns_by_close_revenue_chart')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignByCloseRevenueAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_emailcampaign_email_templates
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailcampaigns/(?P<id>[^/]++)/email/templates(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_emailcampaign_email_templates;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailcampaign_email_templates')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_emailcampaign_email_templates:

                    // oro_api_options_emailcampaign_email_templates
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/emailcampaign/email/templates(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_emailcampaign_email_templates;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailcampaign_email_templates')), array (  '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_emailcampaign_email_templates:

                }

                if (0 === strpos($pathinfo, '/admin/channel')) {
                    // oro_channel_index
                    if (preg_match('#^/admin/channel(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::indexAction',));
                    }

                    // oro_channel_create
                    if ('/admin/channel/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::createAction',  '_route' => 'oro_channel_create',);
                    }

                    // oro_channel_update
                    if (0 === strpos($pathinfo, '/admin/channel/update') && preg_match('#^/admin/channel/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_update')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::updateAction',));
                    }

                    // oro_channel_view
                    if (0 === strpos($pathinfo, '/admin/channel/view') && preg_match('#^/admin/channel/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_view')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::viewAction',));
                    }

                    // oro_channel_widget_info
                    if (0 === strpos($pathinfo, '/admin/channel/widget/info') && preg_match('#^/admin/channel/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_widget_info')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::infoAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/channel/integration')) {
                        // oro_channel_integration_create
                        if (0 === strpos($pathinfo, '/admin/channel/integration/create') && preg_match('#^/admin/channel/integration/create/(?P<type>\\w+)(?:/(?P<channelName>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_integration_create')), array (  'channelName' => NULL,  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::createAction',));
                        }

                        // oro_channel_integration_update
                        if (0 === strpos($pathinfo, '/admin/channel/integration/update') && preg_match('#^/admin/channel/integration/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_integration_update')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::updateAction',));
                        }

                    }

                    // oro_channel_dashboard_average_lifetime_sales_chart
                    if (0 === strpos($pathinfo, '/admin/channel/dashboard/chart') && preg_match('#^/admin/channel/dashboard/chart/(?P<widget>[\\w_-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_channel_dashboard_average_lifetime_sales_chart')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Dashboard\\DashboardController::averageLifetimeSalesAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_get_channels
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/channels(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_channels;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_channels')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_channels:

                    // oro_api_delete_channel
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/channels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_api_delete_channel;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_channel')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_delete_channel:

                    // oro_api_options_channels
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/channels(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_channels;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_channels')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_channels:

                    // oro_api_options_channels_auto_1476
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/channel(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_channels_auto_1476;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_channels_auto_1476')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_channels_auto_1476:

                    // oro_api_get_search_customers
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/search(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_search_customers;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_customers')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_search_customers:

                    // oro_api_options_search_customers
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/search/customers(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_search_customers;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_search_customers')), array (  '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_search_customers:

                }

            }

        }

        if (0 === strpos($pathinfo, '/payment/callback')) {
            // oro_payment_callback_return
            if (0 === strpos($pathinfo, '/payment/callback/return') && preg_match('#^/payment/callback/return/(?P<accessIdentifier>[a-zA-Z0-9\\-]+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_payment_callback_return;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_callback_return')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Frontend\\CallbackController::callbackReturnAction',));
            }
            not_oro_payment_callback_return:

            // oro_payment_callback_error
            if (0 === strpos($pathinfo, '/payment/callback/error') && preg_match('#^/payment/callback/error/(?P<accessIdentifier>[a-zA-Z0-9\\-]+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_payment_callback_error;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_callback_error')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Frontend\\CallbackController::callbackErrorAction',));
            }
            not_oro_payment_callback_error:

            // oro_payment_callback_notify
            if (0 === strpos($pathinfo, '/payment/callback/notify') && preg_match('#^/payment/callback/notify/(?P<accessIdentifier>[a-zA-Z0-9\\-]+)/(?P<accessToken>[a-zA-Z0-9\\-]+)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_payment_callback_notify;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_callback_notify')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Frontend\\CallbackController::callbackNotifyAction',));
            }
            not_oro_payment_callback_notify:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/paymentrule')) {
                // oro_payment_methods_configs_rule_index
                if ('/admin/paymentrule' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_payment_methods_configs_rule_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_payment_methods_configs_rule_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\PaymentMethodsConfigsRuleController::indexAction',  '_route' => 'oro_payment_methods_configs_rule_index',);
                }
                not_oro_payment_methods_configs_rule_index:

                // oro_payment_methods_configs_rule_create
                if ('/admin/paymentrule/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\PaymentMethodsConfigsRuleController::createAction',  '_route' => 'oro_payment_methods_configs_rule_create',);
                }

                // oro_payment_methods_configs_rule_view
                if (0 === strpos($pathinfo, '/admin/paymentrule/view') && preg_match('#^/admin/paymentrule/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_methods_configs_rule_view')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\PaymentMethodsConfigsRuleController::viewAction',));
                }

                // oro_payment_methods_configs_rule_update
                if (0 === strpos($pathinfo, '/admin/paymentrule/update') && preg_match('#^/admin/paymentrule/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_methods_configs_rule_update')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\PaymentMethodsConfigsRuleController::updateAction',));
                }

                // oro_payment_methods_configs_massaction
                if (preg_match('#^/admin/paymentrule/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_methods_configs_massaction')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\PaymentMethodsConfigsRuleController::markMassAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_enable_paymentmethodsconfigsrules
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentrules/(?P<id>[^/]++)/enable(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_enable_paymentmethodsconfigsrules;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_enable_paymentmethodsconfigsrules')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::enableAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_enable_paymentmethodsconfigsrules:

                // oro_api_disable_paymentmethodsconfigsrules
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentrules/(?P<id>[^/]++)/disable(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_disable_paymentmethodsconfigsrules;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_disable_paymentmethodsconfigsrules')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::disableAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_disable_paymentmethodsconfigsrules:

                // oro_api_coptions_paymentmethodsconfigsrules
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentmethodsconfigsrules(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_coptions_paymentmethodsconfigsrules;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_coptions_paymentmethodsconfigsrules')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_coptions_paymentmethodsconfigsrules:

                // oro_api_coptions_paymentmethodsconfigsrules_auto_1477
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentmethodsconfigsrule(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_coptions_paymentmethodsconfigsrules_auto_1477;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_coptions_paymentmethodsconfigsrules_auto_1477')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_coptions_paymentmethodsconfigsrules_auto_1477:

                // oro_api_options_paymentmethodsconfigsrules
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentmethodsconfigsrules(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_paymentmethodsconfigsrules;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_paymentmethodsconfigsrules')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_paymentmethodsconfigsrules:

                // oro_api_options_paymentmethodsconfigsrules_auto_1478
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/paymentmethodsconfigsrule(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_paymentmethodsconfigsrules_auto_1478;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_paymentmethodsconfigsrules_auto_1478')), array (  '_controller' => 'Oro\\Bundle\\PaymentBundle\\Controller\\Api\\Rest\\PaymentMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_paymentmethodsconfigsrules_auto_1478:

                // oro_api_post_reminder_shown
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/reminders/showns(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_reminder_shown;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_reminder_shown:

                // oro_api_post_reminder_shown_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/reminder/shown(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_reminder_shown_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown_deprecated')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_reminder_shown_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/task')) {
                // oro_task_index
                if (preg_match('#^/admin/task(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::indexAction',));
                }

                // oro_task_widget_sidebar_tasks
                if (0 === strpos($pathinfo, '/admin/task/widget/sidebar-tasks') && preg_match('#^/admin/task/widget/sidebar\\-tasks(?:/(?P<perPage>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_widget_sidebar_tasks')), array (  'perPage' => 10,  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::tasksWidgetAction',));
                }

                // oro_task_create
                if ('/admin/task/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::createAction',  '_route' => 'oro_task_create',);
                }

                // oro_task_view
                if (0 === strpos($pathinfo, '/admin/task/view') && preg_match('#^/admin/task/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_view')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::viewAction',));
                }

                // oro_task_activity_view
                if (0 === strpos($pathinfo, '/admin/task/activity/view') && preg_match('#^/admin/task/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_activity_view')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::activityAction',));
                }

                // oro_task_update
                if (0 === strpos($pathinfo, '/admin/task/update') && preg_match('#^/admin/task/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_update')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::updateAction',));
                }

                // oro_task_widget_info
                if (0 === strpos($pathinfo, '/admin/task/widget/info') && preg_match('#^/admin/task/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_widget_info')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::infoAction',));
                }

                // oro_task_user_tasks
                if (0 === strpos($pathinfo, '/admin/task/user') && preg_match('#^/admin/task/user/(?P<userId>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_task_user_tasks')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::userTasksAction',));
                }

                // oro_task_my_tasks
                if ('/admin/task/my' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::myTasksAction',  '_route' => 'oro_task_my_tasks',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_tasks
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_tasks;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_tasks')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_tasks:

                // oro_api_get_task
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_task')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_task:

                // oro_api_put_task
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_task')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_task:

                // oro_api_post_task
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_task')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_task:

                // oro_api_delete_task
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_task')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_task:

                // oro_api_options_tasks
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_tasks;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tasks')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_tasks:

                // oro_api_options_tasks_auto_1479
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/task(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_tasks_auto_1479;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tasks_auto_1479')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_tasks_auto_1479:

                // oro_api_post_task_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/task(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_task_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_task_deprecated')), array (  '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_task_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/cms/page')) {
                // oro_cms_page_view
                if (0 === strpos($pathinfo, '/admin/cms/page/view') && preg_match('#^/admin/cms/page/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_page_view')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::viewAction',));
                }

                // oro_cms_page_info
                if (0 === strpos($pathinfo, '/admin/cms/page/info') && preg_match('#^/admin/cms/page/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_page_info')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::infoAction',));
                }

                // oro_cms_page_index
                if ('/admin/cms/page' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_cms_page_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_cms_page_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::indexAction',  '_route' => 'oro_cms_page_index',);
                }
                not_oro_cms_page_index:

                // oro_cms_page_create
                if ('/admin/cms/page/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::createAction',  '_route' => 'oro_cms_page_create',);
                }

                // oro_cms_page_update
                if (0 === strpos($pathinfo, '/admin/cms/page/update') && preg_match('#^/admin/cms/page/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_page_update')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::updateAction',));
                }

                // oro_cms_page_get_changed_urls
                if (0 === strpos($pathinfo, '/admin/cms/page/get-changed-urls') && preg_match('#^/admin/cms/page/get\\-changed\\-urls/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_page_get_changed_urls')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\PageController::getChangedSlugsAction',));
                }

            }

        }

        // oro_cms_frontend_page_view
        if (0 === strpos($pathinfo, '/cms/page/view') && preg_match('#^/cms/page/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_frontend_page_view')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\Frontend\\PageController::viewAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/cms')) {
                if (0 === strpos($pathinfo, '/admin/cms/login-page')) {
                    // oro_cms_loginpage_index
                    if ('/admin/cms/login-page' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_cms_loginpage_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_cms_loginpage_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\LoginPageController::indexAction',  '_route' => 'oro_cms_loginpage_index',);
                    }
                    not_oro_cms_loginpage_index:

                    // oro_cms_loginpage_view
                    if (0 === strpos($pathinfo, '/admin/cms/login-page/view') && preg_match('#^/admin/cms/login\\-page/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_loginpage_view')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\LoginPageController::viewAction',));
                    }

                    // oro_cms_loginpage_create
                    if ('/admin/cms/login-page/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\LoginPageController::createAction',  '_route' => 'oro_cms_loginpage_create',);
                    }

                    // oro_cms_loginpage_update
                    if (0 === strpos($pathinfo, '/admin/cms/login-page/update') && preg_match('#^/admin/cms/login\\-page/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_loginpage_update')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\LoginPageController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/cms/content-block')) {
                    // oro_cms_content_block_index
                    if ('/admin/cms/content-block' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_cms_content_block_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_cms_content_block_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\ContentBlockController::indexAction',  '_route' => 'oro_cms_content_block_index',);
                    }
                    not_oro_cms_content_block_index:

                    // oro_cms_content_block_view
                    if (preg_match('#^/admin/cms/content\\-block/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_content_block_view')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\ContentBlockController::viewAction',));
                    }

                    // oro_cms_content_block_create
                    if ('/admin/cms/content-block/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\ContentBlockController::createAction',  '_route' => 'oro_cms_content_block_create',);
                    }

                    // oro_cms_content_block_update
                    if (0 === strpos($pathinfo, '/admin/cms/content-block/update') && preg_match('#^/admin/cms/content\\-block/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cms_content_block_update')), array (  '_controller' => 'Oro\\Bundle\\CMSBundle\\Controller\\ContentBlockController::updateAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/marketing-activity')) {
                // oro_marketing_activity_widget_summary
                if (0 === strpos($pathinfo, '/admin/marketing-activity/widget/marketing-activities/summary') && preg_match('#^/admin/marketing\\-activity/widget/marketing\\-activities/summary/(?P<campaignId>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_activity_widget_summary')), array (  '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::summaryAction',));
                }

                // oro_marketing_activity_widget_marketing_activities
                if (0 === strpos($pathinfo, '/admin/marketing-activity/view/widget/marketing-activities') && preg_match('#^/admin/marketing\\-activity/view/widget/marketing\\-activities/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_activity_widget_marketing_activities')), array (  '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::widgetAction',));
                }

                // oro_marketing_activity_widget_marketing_activities_info
                if (0 === strpos($pathinfo, '/admin/marketing-activity/widget/marketing-activities/info') && preg_match('#^/admin/marketing\\-activity/widget/marketing\\-activities/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_activity_widget_marketing_activities_info')), array (  '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::infoAction',));
                }

                // oro_marketing_activity_widget_marketing_activities_list
                if (0 === strpos($pathinfo, '/admin/marketing-activity/view/widget/marketing-activities/list') && preg_match('#^/admin/marketing\\-activity/view/widget/marketing\\-activities/list/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_marketing_activity_widget_marketing_activities_list')), array (  '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::listAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/payment/term')) {
                    // oro_payment_term_view
                    if (0 === strpos($pathinfo, '/admin/payment/term/view') && preg_match('#^/admin/payment/term/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_term_view')), array (  '_controller' => 'Oro\\Bundle\\PaymentTermBundle\\Controller\\PaymentTermController::viewAction',));
                    }

                    // oro_payment_term_index
                    if ('/admin/payment/term' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_payment_term_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_payment_term_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\PaymentTermBundle\\Controller\\PaymentTermController::indexAction',  '_route' => 'oro_payment_term_index',);
                    }
                    not_oro_payment_term_index:

                    // oro_payment_term_create
                    if ('/admin/payment/term/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\PaymentTermBundle\\Controller\\PaymentTermController::createAction',  '_route' => 'oro_payment_term_create',);
                    }

                    // oro_payment_term_update
                    if (0 === strpos($pathinfo, '/admin/payment/term/update') && preg_match('#^/admin/payment/term/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_term_update')), array (  '_controller' => 'Oro\\Bundle\\PaymentTermBundle\\Controller\\PaymentTermController::updateAction',));
                    }

                    // oro_payment_term_widget_info
                    if (0 === strpos($pathinfo, '/admin/payment/term/widget/info') && preg_match('#^/admin/payment/term/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_payment_term_widget_info')), array (  '_controller' => 'Oro\\Bundle\\PaymentTermBundle\\Controller\\PaymentTermController::infoAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pr')) {
                    if (0 === strpos($pathinfo, '/admin/price')) {
                        if (0 === strpos($pathinfo, '/admin/pricelist')) {
                            // oro_pricing_price_list_view
                            if (0 === strpos($pathinfo, '/admin/pricelist/view') && preg_match('#^/admin/pricelist/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_list_view')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceListController::viewAction',));
                            }

                            // oro_pricing_price_list_info
                            if (0 === strpos($pathinfo, '/admin/pricelist/info') && preg_match('#^/admin/pricelist/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_list_info')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceListController::infoAction',));
                            }

                            // oro_pricing_price_list_index
                            if ('/admin/pricelist' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_oro_pricing_price_list_index;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'oro_pricing_price_list_index');
                                }

                                return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceListController::indexAction',  '_route' => 'oro_pricing_price_list_index',);
                            }
                            not_oro_pricing_price_list_index:

                            // oro_pricing_price_list_create
                            if ('/admin/pricelist/create' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceListController::createAction',  '_route' => 'oro_pricing_price_list_create',);
                            }

                            // oro_pricing_price_list_update
                            if (0 === strpos($pathinfo, '/admin/pricelist/update') && preg_match('#^/admin/pricelist/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_list_update')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceListController::updateAction',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/priceattribute')) {
                            // oro_pricing_price_attribute_price_list_index
                            if ('/admin/priceattribute' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_oro_pricing_price_attribute_price_list_index;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'oro_pricing_price_attribute_price_list_index');
                                }

                                return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceAttributePriceListController::indexAction',  '_route' => 'oro_pricing_price_attribute_price_list_index',);
                            }
                            not_oro_pricing_price_attribute_price_list_index:

                            // oro_pricing_price_attribute_price_list_view
                            if (0 === strpos($pathinfo, '/admin/priceattribute/view') && preg_match('#^/admin/priceattribute/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_attribute_price_list_view')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceAttributePriceListController::viewAction',));
                            }

                            // oro_pricing_price_attribute_price_list_create
                            if ('/admin/priceattribute/create' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceAttributePriceListController::createAction',  '_route' => 'oro_pricing_price_attribute_price_list_create',);
                            }

                            // oro_pricing_price_attribute_price_list_update
                            if (0 === strpos($pathinfo, '/admin/priceattribute/update') && preg_match('#^/admin/priceattribute/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_attribute_price_list_update')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceAttributePriceListController::updateAction',));
                            }

                            // oro_pricing_price_attribute_price_list_info
                            if (0 === strpos($pathinfo, '/admin/priceattribute/info') && preg_match('#^/admin/priceattribute/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_attribute_price_list_info')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\PriceAttributePriceListController::infoAction',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/pricelist')) {
                            // oro_pricing_price_list_default
                            if (0 === strpos($pathinfo, '/admin/pricelist/default') && preg_match('#^/admin/pricelist/default/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_list_default')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxPriceListController::defaultAction',));
                            }

                            // oro_pricing_price_list_currency_list
                            if (0 === strpos($pathinfo, '/admin/pricelist/get-pricelist-currency-list') && preg_match('#^/admin/pricelist/get\\-pricelist\\-currency\\-list/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_price_list_currency_list')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxPriceListController::getPriceListCurrencyListAction',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/productprice')) {
                        // oro_pricing_price_by_customer
                        if ('/admin/productprice/get-product-prices-by-customer' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_pricing_price_by_customer;
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxProductPriceController::getProductPricesByCustomerAction',  '_route' => 'oro_pricing_price_by_customer',);
                        }
                        not_oro_pricing_price_by_customer:

                        // oro_product_price_update_widget
                        if (0 === strpos($pathinfo, '/admin/productprice/update') && preg_match('#^/admin/productprice/update/(?P<priceList>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_price_update_widget')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxProductPriceController::updateAction',));
                        }

                        // oro_pricing_matching_price
                        if ('/admin/productprice/get-matching-price' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_pricing_matching_price;
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxProductPriceController::getMatchingPriceAction',  '_route' => 'oro_pricing_matching_price',);
                        }
                        not_oro_pricing_matching_price:

                        // oro_product_price_delete
                        if (0 === strpos($pathinfo, '/admin/productprice/delete-product-price') && preg_match('#^/admin/productprice/delete\\-product\\-price/(?P<priceListId>[^/]++)/(?P<productPriceId>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_product_price_delete')), array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxProductPriceController::deleteAction',));
                        }

                        // oro_pricing_price_product_sidebar
                        if ('/admin/productprice/product/sidebar' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\ProductController::sidebarAction',  '_route' => 'oro_pricing_price_product_sidebar',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/productprice')) {
            if (0 === strpos($pathinfo, '/productprice/get-')) {
                // oro_pricing_frontend_price_by_customer
                if ('/productprice/get-product-prices-by-customer' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_pricing_frontend_price_by_customer;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxProductPriceController::getProductPricesByCustomerAction',  '_route' => 'oro_pricing_frontend_price_by_customer',);
                }
                not_oro_pricing_frontend_price_by_customer:

                // oro_pricing_frontend_matching_price
                if ('/productprice/get-matching-price' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_pricing_frontend_matching_price;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxProductPriceController::getMatchingPriceAction',  '_route' => 'oro_pricing_frontend_matching_price',);
                }
                not_oro_pricing_frontend_matching_price:

                // oro_pricing_frontend_units_by_pricelist
                if ('/productprice/get-product-units-by-currency' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_pricing_frontend_units_by_pricelist;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxProductPriceController::getProductUnitsByCurrencyAction',  '_route' => 'oro_pricing_frontend_units_by_pricelist',);
                }
                not_oro_pricing_frontend_units_by_pricelist:

            }

            // oro_pricing_frontend_set_current_currency
            if ('/productprice/set-current-currency' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_pricing_frontend_set_current_currency;
                }

                return array (  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxProductPriceController::setCurrentCurrencyAction',  '_route' => 'oro_pricing_frontend_set_current_currency',);
            }
            not_oro_pricing_frontend_set_current_currency:

        }

        if (0 === strpos($pathinfo, '/admin/entitytotals')) {
            // oro_pricing_entity_totals
            if (0 === strpos($pathinfo, '/admin/entitytotals/get-totals-for-entity') && preg_match('#^/admin/entitytotals/get\\-totals\\-for\\-entity(?:/(?P<entityClassName>[^/]++)(?:/(?P<entityId>\\d+))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_entity_totals')), array (  'entityId' => 0,  'entityClassName' => '',  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxEntityTotalsController::getEntityTotalsAction',));
            }

            // oro_pricing_recalculate_entity_totals
            if (0 === strpos($pathinfo, '/admin/entitytotals/recalculate-totals-for-entity') && preg_match('#^/admin/entitytotals/recalculate\\-totals\\-for\\-entity(?:/(?P<entityClassName>[^/]++)(?:/(?P<entityId>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_pricing_recalculate_entity_totals;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_recalculate_entity_totals')), array (  'entityId' => 0,  'entityClassName' => '',  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\AjaxEntityTotalsController::recalculateTotalsAction',));
            }
            not_oro_pricing_recalculate_entity_totals:

        }

        if (0 === strpos($pathinfo, '/entitytotals')) {
            // oro_pricing_frontend_entity_totals
            if (0 === strpos($pathinfo, '/entitytotals/get-totals-for-entity') && preg_match('#^/entitytotals/get\\-totals\\-for\\-entity(?:/(?P<entityClassName>[^/]++)(?:/(?P<entityId>\\d+))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_frontend_entity_totals')), array (  'entityId' => 0,  'entityClassName' => '',  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxEntityTotalsController::getEntityTotalsAction',));
            }

            // oro_pricing_frontend_recalculate_entity_totals
            if (0 === strpos($pathinfo, '/entitytotals/recalculate-totals-for-entity') && preg_match('#^/entitytotals/recalculate\\-totals\\-for\\-entity(?:/(?P<entityClassName>[^/]++)(?:/(?P<entityId>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_pricing_frontend_recalculate_entity_totals;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_pricing_frontend_recalculate_entity_totals')), array (  'entityId' => 0,  'entityClassName' => '',  '_controller' => 'Oro\\Bundle\\PricingBundle\\Controller\\Frontend\\AjaxEntityTotalsController::recalculateTotalsAction',));
            }
            not_oro_pricing_frontend_recalculate_entity_totals:

        }

        if (0 === strpos($pathinfo, '/admin/rfp/request')) {
            // oro_rfp_request_view
            if (0 === strpos($pathinfo, '/admin/rfp/request/view') && preg_match('#^/admin/rfp/request/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_request_view')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\RequestController::viewAction',));
            }

            // oro_rfp_request_info
            if (0 === strpos($pathinfo, '/admin/rfp/request/info') && preg_match('#^/admin/rfp/request/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_request_info')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\RequestController::infoAction',));
            }

            // oro_rfp_request_index
            if ('/admin/rfp/request' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_rfp_request_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_rfp_request_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\RequestController::indexAction',  '_route' => 'oro_rfp_request_index',);
            }
            not_oro_rfp_request_index:

            // oro_rfp_request_update
            if (0 === strpos($pathinfo, '/admin/rfp/request/update') && preg_match('#^/admin/rfp/request/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_request_update')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\RequestController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/customer/rfp')) {
            // oro_rfp_frontend_request_view
            if (0 === strpos($pathinfo, '/customer/rfp/view') && preg_match('#^/customer/rfp/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_frontend_request_view')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\Frontend\\RequestController::viewAction',));
            }

            // oro_rfp_frontend_request_index
            if ('/customer/rfp' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_rfp_frontend_request_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_rfp_frontend_request_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\Frontend\\RequestController::indexAction',  '_route' => 'oro_rfp_frontend_request_index',);
            }
            not_oro_rfp_frontend_request_index:

            // oro_rfp_frontend_request_create
            if ('/customer/rfp/create' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\Frontend\\RequestController::createAction',  '_route' => 'oro_rfp_frontend_request_create',);
            }

            // oro_rfp_frontend_request_update
            if (0 === strpos($pathinfo, '/customer/rfp/update') && preg_match('#^/customer/rfp/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_frontend_request_update')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\Frontend\\RequestController::updateAction',));
            }

            // oro_rfp_frontend_request_success
            if ('/customer/rfp/success' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\Frontend\\RequestController::successAction',  '_route' => 'oro_rfp_frontend_request_success',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // oro_rfp_request_create_order
            if (0 === strpos($pathinfo, '/admin/rfp/order/create') && preg_match('#^/admin/rfp/order/create/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rfp_request_create_order')), array (  '_controller' => 'Oro\\Bundle\\RFPBundle\\Controller\\OrderController::createAction',));
            }

            // oro_sales_customers_form_autocomplete_search
            if (0 === strpos($pathinfo, '/admin/sales/customers') && preg_match('#^/admin/sales/customers/(?P<ownerClassAlias>[^/]++)/search/autocomplete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_customers_form_autocomplete_search')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\AutocompleteController::autocompleteCustomersAction',));
            }

            if (0 === strpos($pathinfo, '/admin/b2bcustomer')) {
                // oro_sales_b2bcustomer_index
                if (preg_match('#^/admin/b2bcustomer(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::indexAction',));
                }

                // oro_sales_b2bcustomer_view
                if (0 === strpos($pathinfo, '/admin/b2bcustomer/view') && preg_match('#^/admin/b2bcustomer/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_view')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget')) {
                    // oro_sales_b2bcustomer_widget_info
                    if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/info') && preg_match('#^/admin/b2bcustomer/widget/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_widget_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::infoAction',));
                    }

                    // oro_sales_b2bcustomer_widget_leads
                    if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/b2bcustomer-leads') && preg_match('#^/admin/b2bcustomer/widget/b2bcustomer\\-leads/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_widget_leads')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerLeadsAction',));
                    }

                }

                // oro_sales_b2bcustomer_create
                if ('/admin/b2bcustomer/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::createAction',  '_route' => 'oro_sales_b2bcustomer_create',);
                }

                // oro_sales_b2bcustomer_update
                if (0 === strpos($pathinfo, '/admin/b2bcustomer/update') && preg_match('#^/admin/b2bcustomer/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/b2bcustomer')) {
                    // oro_sales_b2bcustomer_widget_opportunities
                    if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/b2bcustomer-opportunities') && preg_match('#^/admin/b2bcustomer/widget/b2bcustomer\\-opportunities/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_b2bcustomer_widget_opportunities')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerOpportunitiesAction',));
                    }

                    // oro_sales_widget_account_b2bcustomers_info
                    if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/b2bcustomers-info/account') && preg_match('#^/admin/b2bcustomer/widget/b2bcustomers\\-info/account/(?P<accountId>\\d+)/channel/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_widget_account_b2bcustomers_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::accountCustomersInfoAction',));
                    }

                    // oro_sales_widget_b2bcustomer_info
                    if (0 === strpos($pathinfo, '/admin/b2bcustomer/widget/b2bcustomer-info') && preg_match('#^/admin/b2bcustomer/widget/b2bcustomer\\-info/(?P<id>\\d+)/channel/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_widget_b2bcustomer_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::customerInfoAction',));
                    }

                }

            }

            // oro_sales_customer_grid_dialog
            if (0 === strpos($pathinfo, '/admin/customer/customer/grid-dialog') && preg_match('#^/admin/customer/customer/grid\\-dialog/(?P<entityClass>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_customer_grid_dialog')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\CustomerController::gridDialogAction',));
            }

            if (0 === strpos($pathinfo, '/admin/lead')) {
                // oro_sales_lead_address_book
                if (0 === strpos($pathinfo, '/admin/lead/address-book') && preg_match('#^/admin/lead/address\\-book/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_address_book')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::addressBookAction',));
                }

                // oro_sales_lead_address_create
                if (preg_match('#^/admin/lead/(?P<leadId>\\d+)/address\\-create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_address_create')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::createAction',));
                }

                // oro_sales_lead_address_update
                if (preg_match('#^/admin/lead/(?P<leadId>\\d+)/address\\-update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_address_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::updateAction',));
                }

                // oro_sales_lead_view
                if (0 === strpos($pathinfo, '/admin/lead/view') && preg_match('#^/admin/lead/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_view')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::viewAction',));
                }

                // oro_sales_lead_info
                if (0 === strpos($pathinfo, '/admin/lead/info') && preg_match('#^/admin/lead/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::infoAction',));
                }

                // oro_sales_lead_create
                if ('/admin/lead/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::createAction',  '_route' => 'oro_sales_lead_create',);
                }

                // oro_sales_lead_update
                if (0 === strpos($pathinfo, '/admin/lead/update') && preg_match('#^/admin/lead/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::updateAction',));
                }

                // oro_sales_lead_index
                if (preg_match('#^/admin/lead(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::indexAction',));
                }

                // oro_sales_widget_account_leads
                if (0 === strpos($pathinfo, '/admin/lead/widget/account-leads') && preg_match('#^/admin/lead/widget/account\\-leads/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_widget_account_leads')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::accountLeadsAction',));
                }

                // oro_sales_lead_data_channel_aware_create
                if (0 === strpos($pathinfo, '/admin/lead/create') && preg_match('#^/admin/lead/create/(?P<channelIds>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_data_channel_aware_create')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::leadWithDataChannelCreateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/lead/d')) {
                    // oro_sales_datagrid_lead_datachannel_aware
                    if (0 === strpos($pathinfo, '/admin/lead/datagrid/lead-with-datachannel') && preg_match('#^/admin/lead/datagrid/lead\\-with\\-datachannel/(?P<channelIds>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_datagrid_lead_datachannel_aware')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::leadWithDataChannelGridAction',));
                    }

                    // oro_sales_lead_disqualify
                    if (0 === strpos($pathinfo, '/admin/lead/disqualify') && preg_match('#^/admin/lead/disqualify/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_disqualify')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::disqualifyAction',));
                    }

                }

                // oro_sales_lead_convert_to_opportunity
                if (0 === strpos($pathinfo, '/admin/lead/convert') && preg_match('#^/admin/lead/convert/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_lead_convert_to_opportunity')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::convertToOpportunityAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/opportunity')) {
                // oro_sales_opportunity_view
                if (0 === strpos($pathinfo, '/admin/opportunity/view') && preg_match('#^/admin/opportunity/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_view')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::viewAction',));
                }

                // oro_sales_opportunity_info
                if (0 === strpos($pathinfo, '/admin/opportunity/info') && preg_match('#^/admin/opportunity/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::infoAction',));
                }

                // oro_sales_opportunity_create
                if ('/admin/opportunity/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::createAction',  '_route' => 'oro_sales_opportunity_create',);
                }

                // oro_sales_opportunity_update
                if (0 === strpos($pathinfo, '/admin/opportunity/update') && preg_match('#^/admin/opportunity/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::updateAction',));
                }

                // oro_sales_opportunity_index
                if (preg_match('#^/admin/opportunity(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/admin/opportunity/create')) {
                    // oro_sales_opportunity_data_channel_aware_create
                    if (preg_match('#^/admin/opportunity/create/(?P<channelIds>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_data_channel_aware_create')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::opportunityWithDataChannelCreateAction',));
                    }

                    // oro_sales_opportunity_customer_aware_create
                    if (preg_match('#^/admin/opportunity/create/(?P<targetClass>[^/]++)/(?P<targetId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_opportunity_customer_aware_create')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::opportunityWithCustomerCreateAction',));
                    }

                }

                // oro_sales_datagrid_opportunity_datachannel_aware
                if (0 === strpos($pathinfo, '/admin/opportunity/datagrid/opportunity-with-datachannel') && preg_match('#^/admin/opportunity/datagrid/opportunity\\-with\\-datachannel/(?P<channelIds>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_datagrid_opportunity_datachannel_aware')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::opportunityWithDataChannelGridAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/salesfunnel')) {
                // oro_sales_salesfunnel_index
                if (preg_match('#^/admin/salesfunnel(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_salesfunnel_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::indexAction',));
                }

                // oro_sales_salesfunnel_view
                if (0 === strpos($pathinfo, '/admin/salesfunnel/view') && preg_match('#^/admin/salesfunnel/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_salesfunnel_view')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::viewAction',));
                }

                // oro_sales_salesfunnel_info
                if (0 === strpos($pathinfo, '/admin/salesfunnel/info') && preg_match('#^/admin/salesfunnel/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_salesfunnel_info')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::infoAction',));
                }

                // oro_sales_salesfunnel_create
                if ('/admin/salesfunnel/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::createAction',  '_route' => 'oro_sales_salesfunnel_create',);
                }

                // oro_sales_salesfunnel_update
                if (0 === strpos($pathinfo, '/admin/salesfunnel/update') && preg_match('#^/admin/salesfunnel/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_salesfunnel_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/dashboard')) {
                if (0 === strpos($pathinfo, '/admin/dashboard/opportunit')) {
                    // oro_sales_dashboard_opportunities_by_lead_source_chart
                    if (0 === strpos($pathinfo, '/admin/dashboard/opportunities_by_lead_source/chart') && preg_match('#^/admin/dashboard/opportunities_by_lead_source/chart/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_dashboard_opportunities_by_lead_source_chart')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunitiesByLeadSourceAction',));
                    }

                    // oro_sales_dashboard_opportunity_by_state_chart
                    if (0 === strpos($pathinfo, '/admin/dashboard/opportunity_state/chart') && preg_match('#^/admin/dashboard/opportunity_state/chart/(?P<widget>[\\w-]+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_dashboard_opportunity_by_state_chart')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunityByStatusAction',));
                    }

                }

                // oro_sales_dashboard_sales_flow_b2b_chart
                if (0 === strpos($pathinfo, '/admin/dashboard/sales_flow_b2b/chart') && preg_match('#^/admin/dashboard/sales_flow_b2b/chart/(?P<widget>[\\w_-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sales_dashboard_sales_flow_b2b_chart')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::mySalesFlowB2BAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_opportunities
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_opportunities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_opportunities')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_opportunities:

                // oro_api_get_opportunity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_opportunity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_opportunity')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_opportunity:

                // oro_api_put_opportunity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_opportunity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_opportunity')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_opportunity:

                // oro_api_post_opportunity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_opportunity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_opportunity')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_opportunity:

                // oro_api_delete_opportunity
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_opportunity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_opportunity')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_opportunity:

                // oro_api_options_opportunities
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_opportunities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_opportunities')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_opportunities:

                // oro_api_options_opportunities_auto_1480
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunity(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_opportunities_auto_1480;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_opportunities_auto_1480')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_opportunities_auto_1480:

                // oro_api_get_lead_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<leadId>[^/]++)/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_lead_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead_address')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::getAddressAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_lead_address:

                // oro_api_get_leads
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_leads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_leads')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_leads:

                // oro_api_get_lead
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_lead;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_lead:

                // oro_api_put_lead
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_lead;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_lead')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_lead:

                // oro_api_post_lead
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_lead;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_lead')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_lead:

                // oro_api_delete_lead
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_lead;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_lead')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_lead:

                // oro_api_options_leads
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_leads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leads')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_leads:

                // oro_api_options_leads_auto_1481
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_leads_auto_1481;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leads_auto_1481')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_leads_auto_1481:

                // oro_api_get_lead_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<leadId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_lead_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead_addresses')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_lead_addresses:

                // oro_api_get_lead_address_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<leadId>[^/]++)/address/primary(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_lead_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead_address_primary')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_lead_address_primary:

                // oro_api_delete_lead_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<leadId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_lead_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_lead_address')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_lead_address:

                // oro_api_options_lead_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_lead_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_lead_addresses')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_lead_addresses:

                // oro_api_options_lead_addresses_auto_1482
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_lead_addresses_auto_1482;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_lead_addresses_auto_1482')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_lead_addresses_auto_1482:

                // oro_api_get_salesfunnels
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_salesfunnels;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_salesfunnels')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_salesfunnels:

                // oro_api_get_salesfunnel
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_salesfunnel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_salesfunnel')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_salesfunnel:

                // oro_api_put_salesfunnel
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_salesfunnel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_salesfunnel')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_salesfunnel:

                // oro_api_post_salesfunnel
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_salesfunnel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_salesfunnel')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_salesfunnel:

                // oro_api_delete_salesfunnel
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_salesfunnel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_salesfunnel')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_salesfunnel:

                // oro_api_options_salesfunnels
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_salesfunnels;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_salesfunnels')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_salesfunnels:

                // oro_api_options_salesfunnels_auto_1483
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnel(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_salesfunnels_auto_1483;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_salesfunnels_auto_1483')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_salesfunnels_auto_1483:

                // oro_api_get_b2bcustomers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_b2bcustomers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomers')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_b2bcustomers:

                // oro_api_get_b2bcustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_b2bcustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomer')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_b2bcustomer:

                // oro_api_put_b2bcustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_b2bcustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_b2bcustomer')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_b2bcustomer:

                // oro_api_post_b2bcustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_b2bcustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_b2bcustomer')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_b2bcustomer:

                // oro_api_delete_b2bcustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_b2bcustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_b2bcustomer')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_b2bcustomer:

                // oro_api_options_b2bcustomers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomers')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomers:

                // oro_api_options_b2bcustomers_auto_1484
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomer(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomers_auto_1484;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomers_auto_1484')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomers_auto_1484:

                // oro_api_post_lead_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_lead_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_lead_phone')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_lead_phone:

                // oro_api_delete_lead_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/]++)/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_lead_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_lead_phone')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_lead_phone:

                // oro_api_options_lead_phones
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_lead_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_lead_phones')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_lead_phones:

                // oro_api_options_lead_phones_auto_1485
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_lead_phones_auto_1485;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_lead_phones_auto_1485')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_lead_phones_auto_1485:

                // oro_api_post_leademail
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leademails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_leademail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_leademail')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_leademail:

                // oro_api_delete_leademail
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leademails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_leademail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_leademail')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_leademail:

                // oro_api_options_leademails
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leademails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_leademails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leademails')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_leademails:

                // oro_api_options_leademails_auto_1486
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/leademail(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_leademails_auto_1486;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leademails_auto_1486')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_leademails_auto_1486:

                // oro_api_post_b2bcustomer_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/emails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_b2bcustomer_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_b2bcustomer_email')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_b2bcustomer_email:

                // oro_api_delete_b2bcustomer_email
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/]++)/email(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_b2bcustomer_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_b2bcustomer_email')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_b2bcustomer_email:

                // oro_api_options_b2bcustomer_emails
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomer/emails(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomer_emails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomer_emails')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomer_emails:

                // oro_api_options_b2bcustomer_emails_auto_1487
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomer/email(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomer_emails_auto_1487;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomer_emails_auto_1487')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomer_emails_auto_1487:

                // oro_api_get_b2bcustomer_phones
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<customerId>[^/]++)/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_b2bcustomer_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomer_phones')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_b2bcustomer_phones:

                // oro_api_get_b2bcustomer_phone_primary
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<customerId>[^/]++)/phone/primary(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_b2bcustomer_phone_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomer_phone_primary')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_b2bcustomer_phone_primary:

                // oro_api_post_b2bcustomer_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_b2bcustomer_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_b2bcustomer_phone')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_b2bcustomer_phone:

                // oro_api_delete_b2bcustomer_phone
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/]++)/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_b2bcustomer_phone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_b2bcustomer_phone')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_b2bcustomer_phone:

                // oro_api_options_b2bcustomer_phones
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomer/phones(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomer_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomer_phones')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomer_phones:

                // oro_api_options_b2bcustomer_phones_auto_1488
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/b2bcustomer/phone(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_b2bcustomer_phones_auto_1488;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomer_phones_auto_1488')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_b2bcustomer_phones_auto_1488:

                // oro_api_post_salesfunnel_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/salesfunnel(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_salesfunnel_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_salesfunnel_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_salesfunnel_deprecated:

                // oro_api_post_lead_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/lead(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_lead_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_lead_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_lead_deprecated:

                // oro_api_post_opportunity_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/opportunity(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_opportunity_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_opportunity_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_opportunity_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/contact-us')) {
                // oro_contactus_request_view
                if (0 === strpos($pathinfo, '/admin/contact-us/view') && preg_match('#^/admin/contact\\-us/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_request_view')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::viewAction',));
                }

                // oro_contactus_request_index
                if ('/admin/contact-us' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_contactus_request_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_contactus_request_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::indexAction',  '_route' => 'oro_contactus_request_index',);
                }
                not_oro_contactus_request_index:

                // oro_contactus_request_info
                if (0 === strpos($pathinfo, '/admin/contact-us/info') && preg_match('#^/admin/contact\\-us/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_request_info')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::infoAction',));
                }

                // oro_contactus_request_update
                if (0 === strpos($pathinfo, '/admin/contact-us/update') && preg_match('#^/admin/contact\\-us/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_request_update')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::updateAction',));
                }

                // oro_contactus_request_create
                if ('/admin/contact-us/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::createAction',  '_route' => 'oro_contactus_request_create',);
                }

                // oro_contactus_request_delete
                if (0 === strpos($pathinfo, '/admin/contact-us/delete') && preg_match('#^/admin/contact\\-us/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_request_delete')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_contactrequest
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactrequests/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contactrequest;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contactrequest')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contactrequest:

                // oro_api_options_contactrequests
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactrequests(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactrequests;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactrequests')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactrequests:

                // oro_api_options_contactrequests_auto_1489
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/contactrequest(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactrequests_auto_1489;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactrequests_auto_1489')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactrequests_auto_1489:

            }

            if (0 === strpos($pathinfo, '/admin/contact-reason')) {
                // oro_contactus_reason_index
                if ('/admin/contact-reason' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_contactus_reason_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_contactus_reason_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::indexAction',  '_route' => 'oro_contactus_reason_index',);
                }
                not_oro_contactus_reason_index:

                // oro_contactus_reason_create
                if ('/admin/contact-reason/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::createAction',  '_route' => 'oro_contactus_reason_create',);
                }

                // oro_contactus_reason_update
                if (0 === strpos($pathinfo, '/admin/contact-reason/update') && preg_match('#^/admin/contact\\-reason/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_reason_update')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::updateAction',));
                }

                // oro_contactus_reason_delete
                if (0 === strpos($pathinfo, '/admin/contact-reason/delete') && preg_match('#^/admin/contact\\-reason/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_contactus_reason_delete')), array (  '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/invoice')) {
                // oro_invoice_index
                if ('/admin/invoice' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_invoice_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_invoice_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\InvoiceBundle\\Controller\\InvoiceController::indexAction',  '_route' => 'oro_invoice_index',);
                }
                not_oro_invoice_index:

                // oro_invoice_info
                if (0 === strpos($pathinfo, '/admin/invoice/info') && preg_match('#^/admin/invoice/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_invoice_info')), array (  '_controller' => 'Oro\\Bundle\\InvoiceBundle\\Controller\\InvoiceController::infoAction',));
                }

                // oro_invoice_view
                if (0 === strpos($pathinfo, '/admin/invoice/view') && preg_match('#^/admin/invoice/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_invoice_view')), array (  '_controller' => 'Oro\\Bundle\\InvoiceBundle\\Controller\\InvoiceController::viewAction',));
                }

                // oro_invoice_create
                if ('/admin/invoice/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\InvoiceBundle\\Controller\\InvoiceController::createAction',  '_route' => 'oro_invoice_create',);
                }

                // oro_invoice_update
                if (0 === strpos($pathinfo, '/admin/invoice/update') && preg_match('#^/admin/invoice/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_invoice_update')), array (  '_controller' => 'Oro\\Bundle\\InvoiceBundle\\Controller\\InvoiceController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/magento')) {
                if (0 === strpos($pathinfo, '/admin/magento/c')) {
                    if (0 === strpos($pathinfo, '/admin/magento/cart')) {
                        // oro_magento_cart_index
                        if ('/admin/magento/cart' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_oro_magento_cart_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'oro_magento_cart_index');
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::indexAction',  '_route' => 'oro_magento_cart_index',);
                        }
                        not_oro_magento_cart_index:

                        // oro_magento_cart_view
                        if (0 === strpos($pathinfo, '/admin/magento/cart/view') && preg_match('#^/admin/magento/cart/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_cart_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::viewAction',));
                        }

                        // oro_magento_cart_widget_info
                        if (0 === strpos($pathinfo, '/admin/magento/cart/info') && preg_match('#^/admin/magento/cart/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_cart_widget_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::infoAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/magento/cart/widget')) {
                            // oro_magento_cart_widget_items
                            if (0 === strpos($pathinfo, '/admin/magento/cart/widget/grid') && preg_match('#^/admin/magento/cart/widget/grid/(?P<id>\\d+)(?:/(?P<isRemoved>\\d+))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_cart_widget_items')), array (  'isRemoved' => false,  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::itemsAction',));
                            }

                            // oro_magento_widget_customer_carts
                            if (0 === strpos($pathinfo, '/admin/magento/cart/widget/account_cart') && preg_match('#^/admin/magento/cart/widget/account_cart/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_carts')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::customerCartsAction',));
                            }

                            // oro_magento_customer_carts_widget
                            if (0 === strpos($pathinfo, '/admin/magento/cart/widget/customer_cart') && preg_match('#^/admin/magento/cart/widget/customer_cart/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_carts_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::customerCartsWidgetAction',));
                            }

                        }

                        // oro_magento_cart_actualize
                        if (0 === strpos($pathinfo, '/admin/magento/cart/actualize') && preg_match('#^/admin/magento/cart/actualize/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_cart_actualize')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CartController::actualizeAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/magento/credit-memo')) {
                        // oro_magento_credit_memo_index
                        if ('/admin/magento/credit-memo' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_oro_magento_credit_memo_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'oro_magento_credit_memo_index');
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::indexAction',  '_route' => 'oro_magento_credit_memo_index',);
                        }
                        not_oro_magento_credit_memo_index:

                        // oro_magento_credit_memo_view
                        if (0 === strpos($pathinfo, '/admin/magento/credit-memo/view') && preg_match('#^/admin/magento/credit\\-memo/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_credit_memo_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::viewAction',));
                        }

                        // oro_magento_credit_memo_widget_info
                        if (0 === strpos($pathinfo, '/admin/magento/credit-memo/info') && preg_match('#^/admin/magento/credit\\-memo/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_credit_memo_widget_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::infoAction',));
                        }

                        // oro_magento_credit_memo_widget_items
                        if (0 === strpos($pathinfo, '/admin/magento/credit-memo/widget/grid') && preg_match('#^/admin/magento/credit\\-memo/widget/grid/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_credit_memo_widget_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::itemsAction',));
                        }

                        // oro_magento_widget_customer_credit_memo
                        if (0 === strpos($pathinfo, '/admin/magento/credit-memo/account-widget/customer_credit_memo') && preg_match('#^/admin/magento/credit\\-memo/account\\-widget/customer_credit_memo/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_credit_memo')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::customerCreditMemosAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/magento/credit-memo/widget')) {
                            // oro_magento_customer_credit_memo_widget
                            if (0 === strpos($pathinfo, '/admin/magento/credit-memo/widget/customer_credit_memo') && preg_match('#^/admin/magento/credit\\-memo/widget/customer_credit_memo/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_credit_memo_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::customerCreditMemosWidgetAction',));
                            }

                            // oro_magento_order_credit_memo_widget
                            if (0 === strpos($pathinfo, '/admin/magento/credit-memo/widget/order_credit_memo') && preg_match('#^/admin/magento/credit\\-memo/widget/order_credit_memo/(?P<orderId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_credit_memo_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CreditMemoController::orderCreditMemosWidgetAction',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/magento/customer')) {
                        // oro_magento_customer_index
                        if ('/admin/magento/customer' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_oro_magento_customer_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'oro_magento_customer_index');
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::indexAction',  '_route' => 'oro_magento_customer_index',);
                        }
                        not_oro_magento_customer_index:

                        // oro_magento_customer_view
                        if (0 === strpos($pathinfo, '/admin/magento/customer/view') && preg_match('#^/admin/magento/customer/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::viewAction',));
                        }

                        // oro_magento_customer_update
                        if (0 === strpos($pathinfo, '/admin/magento/customer/update') && preg_match('#^/admin/magento/customer/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_update')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::updateAction',));
                        }

                        // oro_magento_customer_create
                        if ('/admin/magento/customer/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::createAction',  '_route' => 'oro_magento_customer_create',);
                        }

                        // oro_magento_customer_register
                        if (0 === strpos($pathinfo, '/admin/magento/customer/register') && preg_match('#^/admin/magento/customer/register/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_register')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::registerAction',));
                        }

                        // oro_magento_customer_info
                        if (0 === strpos($pathinfo, '/admin/magento/customer/info') && preg_match('#^/admin/magento/customer/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::infoAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/magento/customer/widget/customer')) {
                            // oro_magento_widget_account_customers_info
                            if (0 === strpos($pathinfo, '/admin/magento/customer/widget/customers-info') && preg_match('#^/admin/magento/customer/widget/customers\\-info/(?P<accountId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_account_customers_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::accountCustomersInfoAction',));
                            }

                            // oro_magento_widget_customer_info
                            if (0 === strpos($pathinfo, '/admin/magento/customer/widget/customer-info') && preg_match('#^/admin/magento/customer/widget/customer\\-info/(?P<id>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::customerInfoAction',));
                            }

                        }

                        // oro_magento_customer_orderplace
                        if (0 === strpos($pathinfo, '/admin/magento/customer/order') && preg_match('#^/admin/magento/customer/order/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_orderplace')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::placeOrderAction',));
                        }

                        // oro_magento_customer_address_book
                        if (0 === strpos($pathinfo, '/admin/magento/customer/addressBook') && preg_match('#^/admin/magento/customer/addressBook/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_address_book')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\CustomerController::addressBookAction',));
                        }

                    }

                    // oro_magento_integration_check
                    if ('/admin/magento/check' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\IntegrationConfigController::checkAction',  '_route' => 'oro_magento_integration_check',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber')) {
                    // oro_magento_newsletter_subscriber_index
                    if ('/admin/magento/newsletter-subscriber' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_magento_newsletter_subscriber_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_magento_newsletter_subscriber_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::indexAction',  '_route' => 'oro_magento_newsletter_subscriber_index',);
                    }
                    not_oro_magento_newsletter_subscriber_index:

                    // oro_magento_newsletter_subscriber_view
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/view') && preg_match('#^/admin/magento/newsletter\\-subscriber/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::viewAction',));
                    }

                    // oro_magento_newsletter_subscriber_info
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/info') && preg_match('#^/admin/magento/newsletter\\-subscriber/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::infoAction',));
                    }

                    // oro_magento_newsletter_subscriber_subscribe
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/subscribe') && preg_match('#^/admin/magento/newsletter\\-subscriber/subscribe/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_subscribe')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::subscribeAction',));
                    }

                    // oro_magento_newsletter_subscriber_unsubscribe
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/unsubscribe') && preg_match('#^/admin/magento/newsletter\\-subscriber/unsubscribe/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_unsubscribe')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::unsubscribeAction',));
                    }

                    // oro_magento_newsletter_subscriber_subscribe_customer
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/subscribe/customer') && preg_match('#^/admin/magento/newsletter\\-subscriber/subscribe/customer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_subscribe_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::subscribeByCustomerAction',));
                    }

                    // oro_magento_newsletter_subscriber_unsubscribe_customer
                    if (0 === strpos($pathinfo, '/admin/magento/newsletter-subscriber/unsubscribe/customer') && preg_match('#^/admin/magento/newsletter\\-subscriber/unsubscribe/customer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_newsletter_subscriber_unsubscribe_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::unsubscribeByCustomerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/magento/order')) {
                    // oro_magento_order_index
                    if ('/admin/magento/order' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_magento_order_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_magento_order_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::indexAction',  '_route' => 'oro_magento_order_index',);
                    }
                    not_oro_magento_order_index:

                    // oro_magento_order_view
                    if (0 === strpos($pathinfo, '/admin/magento/order/view') && preg_match('#^/admin/magento/order/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::viewAction',));
                    }

                    // oro_magento_order_widget_info
                    if (0 === strpos($pathinfo, '/admin/magento/order/info') && preg_match('#^/admin/magento/order/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_widget_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::infoAction',));
                    }

                    // oro_magento_order_widget_items
                    if (0 === strpos($pathinfo, '/admin/magento/order/widget/grid') && preg_match('#^/admin/magento/order/widget/grid/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_widget_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::itemsAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/magento/order/account-widget/customer-')) {
                        // oro_magento_widget_customer_orders
                        if (0 === strpos($pathinfo, '/admin/magento/order/account-widget/customer-orders') && preg_match('#^/admin/magento/order/account\\-widget/customer\\-orders/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_orders')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrdersAction',));
                        }

                        // oro_magento_widget_customer_recent_purchases
                        if (0 === strpos($pathinfo, '/admin/magento/order/account-widget/customer-recent-purchases') && preg_match('#^/admin/magento/order/account\\-widget/customer\\-recent\\-purchases/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_recent_purchases')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerRecentPurchasesAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/magento/order/customer-widget/customer-')) {
                        // oro_magento_customer_orders_widget
                        if (0 === strpos($pathinfo, '/admin/magento/order/customer-widget/customer-orders') && preg_match('#^/admin/magento/order/customer\\-widget/customer\\-orders/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_orders_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrdersWidgetAction',));
                        }

                        // oro_magento_customer_recent_purchases_widget
                        if (0 === strpos($pathinfo, '/admin/magento/order/customer-widget/customer-recent-purchases') && preg_match('#^/admin/magento/order/customer\\-widget/customer\\-recent\\-purchases/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_recent_purchases_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerRecentPurchasesWidgetAction',));
                        }

                    }

                    // oro_magento_widget_customer_order_notes
                    if (0 === strpos($pathinfo, '/admin/magento/order/account-widget/order-notes') && preg_match('#^/admin/magento/order/account\\-widget/order\\-notes/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_order_notes')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrderNotesAction',));
                    }

                    // oro_magento_customer_order_notes_widget
                    if (0 === strpos($pathinfo, '/admin/magento/order/customer-widget/order-notes') && preg_match('#^/admin/magento/order/customer\\-widget/order\\-notes/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_customer_order_notes_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrderNotesWidgetAction',));
                    }

                    // oro_magento_order_notes_widget
                    if (0 === strpos($pathinfo, '/admin/magento/order/widget/order_notes') && preg_match('#^/admin/magento/order/widget/order_notes/(?P<orderId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_notes_widget')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::orderNotesWidgetAction',));
                    }

                    // oro_magento_order_actualize
                    if (0 === strpos($pathinfo, '/admin/magento/order/actualize') && preg_match('#^/admin/magento/order/actualize/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_order_actualize')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::actualizeAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/magento/order/place')) {
                        // oro_magento_orderplace_cart
                        if (0 === strpos($pathinfo, '/admin/magento/order/place/cart') && preg_match('#^/admin/magento/order/place/cart/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_orderplace_cart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::cartAction',));
                        }

                        // oro_magento_orderplace_new_cart_order_sync
                        if (0 === strpos($pathinfo, '/admin/magento/order/place/sync') && preg_match('#^/admin/magento/order/place/sync/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_orderplace_new_cart_order_sync')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::syncAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/magento/order/place/customer')) {
                            // oro_magento_widget_customer_orderplace
                            if (preg_match('#^/admin/magento/order/place/customer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_widget_customer_orderplace')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::customerAction',));
                            }

                            // oro_magento_orderplace_new_customer_order_sync
                            if (0 === strpos($pathinfo, '/admin/magento/order/place/customer_sync') && preg_match('#^/admin/magento/order/place/customer_sync/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_orderplace_new_customer_order_sync')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::customerSyncAction',));
                            }

                        }

                        // oro_magento_orderplace_success
                        if ('/admin/magento/order/place/success' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::successAction',  '_route' => 'oro_magento_orderplace_success',);
                        }

                        // oro_magento_orderplace_error
                        if ('/admin/magento/order/place/error' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::errorAction',  '_route' => 'oro_magento_orderplace_error',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/magento/product')) {
                    // oro_magento_product_index
                    if ('/admin/magento/product' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_magento_product_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_magento_product_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\ProductController::indexAction',  '_route' => 'oro_magento_product_index',);
                    }
                    not_oro_magento_product_index:

                    // oro_magento_product_view
                    if (0 === strpos($pathinfo, '/admin/magento/product/view') && preg_match('#^/admin/magento/product/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_product_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\ProductController::viewAction',));
                    }

                    // oro_magento_product_info
                    if (0 === strpos($pathinfo, '/admin/magento/product/info') && preg_match('#^/admin/magento/product/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_product_info')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\ProductController::infoAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/dashboard')) {
                // oro_magento_dashboard_sales_flow_b2c_chart
                if (0 === strpos($pathinfo, '/admin/dashboard/sales_flow_b2c/chart') && preg_match('#^/admin/dashboard/sales_flow_b2c/chart/(?P<widget>[\\w_-]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magento_dashboard_sales_flow_b2c_chart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::mySalesFlowB2CAction',));
                }

                // oro_magento_dashboard_average_order_amount
                if ('/admin/dashboard/average_order_amount_by_customer' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::averageOrderAmountAction',  '_route' => 'oro_magento_dashboard_average_order_amount',);
                }

                if (0 === strpos($pathinfo, '/admin/dashboard/oro_magento_dashboard_')) {
                    // oro_magento_dashboard_new_customers_chart
                    if ('/admin/dashboard/oro_magento_dashboard_new_customers_chart' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::newCustomersAction',  '_route' => 'oro_magento_dashboard_new_customers_chart',);
                    }

                    // oro_magento_dashboard_purchase_chart
                    if ('/admin/dashboard/oro_magento_dashboard_purchase_chart' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::purchaseAction',  '_route' => 'oro_magento_dashboard_purchase_chart',);
                    }

                    // oro_magento_dashboard_revenue_over_time_chart
                    if ('/admin/dashboard/oro_magento_dashboard_revenue_over_time_chart' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::revenueOverTimeAction',  '_route' => 'oro_magento_dashboard_revenue_over_time_chart',);
                    }

                    // oro_magento_dashboard_orders_over_time_chart
                    if ('/admin/dashboard/oro_magento_dashboard_orders_over_time_chart' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::ordersOverTimeAction',  '_route' => 'oro_magento_dashboard_orders_over_time_chart',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_api_get_customer_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_customer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer_addresses')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_customer_addresses:

                // oro_api_post_customer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_customer_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_customer_address:

                // oro_api_get_customer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_customer_address:

                // oro_api_put_customer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_customer_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_customer_address:

                // oro_api_delete_customer_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_customer_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_customer_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_customer_address:

                // oro_api_options_customer_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customer/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_customer_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customer_addresses')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_customer_addresses:

                // oro_api_options_customer_addresses_auto_1491
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customer/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_customer_addresses_auto_1491;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customer_addresses_auto_1491')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_customer_addresses_auto_1491:

                // oro_api_get_customers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_customers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customers')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_customers:

                // oro_api_get_customer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_customer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_customer:

                // oro_api_post_customer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_customer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_customer:

                // oro_api_put_customer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_customer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_customer:

                // oro_api_delete_customer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_customer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_customer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_customer:

                // oro_api_options_customers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_customers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customers')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_customers:

                // oro_api_options_customers_auto_1492
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/customer(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_customers_auto_1492;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customers_auto_1492')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_customers_auto_1492:

                // oro_api_get_magentocustomers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_magentocustomers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentocustomers')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_magentocustomers:

                // oro_api_get_magentocustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_magentocustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentocustomer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_magentocustomer:

                // oro_api_post_magentocustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_magentocustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_magentocustomer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_magentocustomer:

                // oro_api_put_magentocustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_magentocustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_magentocustomer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_magentocustomer:

                // oro_api_delete_magentocustomer
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_magentocustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_magentocustomer')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_magentocustomer:

                // oro_api_options_magentocustomers
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_magentocustomers;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_magentocustomers')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_magentocustomers:

                // oro_api_options_magentocustomers_auto_1493
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocustomer(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_magentocustomers_auto_1493;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_magentocustomers_auto_1493')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_magentocustomers_auto_1493:

                // oro_api_get_orders
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_orders;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_orders')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_orders:

                // oro_api_post_order
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_order:

                // oro_api_get_order
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_order:

                // oro_api_put_order
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_order:

                // oro_api_delete_order
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_order:

                // oro_api_options_orders
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_orders;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_orders')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_orders:

                // oro_api_options_orders_auto_1495
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/order(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_orders_auto_1495;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_orders_auto_1495')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_orders_auto_1495:

                // oro_api_get_order_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_order_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_addresses')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_order_addresses:

                // oro_api_post_order_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_order_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_order_address:

                // oro_api_get_order_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_order_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_order_address:

                // oro_api_put_order_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_order_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_order_address:

                // oro_api_delete_order_address
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_order_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order_address')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_order_address:

                // oro_api_options_order_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/order/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_order_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_addresses')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_order_addresses:

                // oro_api_options_order_addresses_auto_1496
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/order/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_order_addresses_auto_1496;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_addresses_auto_1496')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_order_addresses_auto_1496:

                // oro_api_post_order_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_order_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_order_item:

                // oro_api_get_order_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_order_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_order_item:

                // oro_api_get_order_items
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_order_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_order_items:

                // oro_api_put_order_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_order_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_order_item:

                // oro_api_delete_order_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_order_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_order_item:

                // oro_api_options_order_items
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/order/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_order_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_order_items:

                // oro_api_options_order_items_auto_1497
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/order/item(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_order_items_auto_1497;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_items_auto_1497')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_order_items_auto_1497:

                // oro_api_get_carts
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_carts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_carts')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_carts:

                // oro_api_post_cart
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_cart;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_cart:

                // oro_api_get_cart
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_cart;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_cart:

                // oro_api_put_cart
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_cart;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_cart:

                // oro_api_delete_cart
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_cart;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_cart:

                // oro_api_options_carts
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_carts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_carts')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_carts:

                // oro_api_options_carts_auto_1499
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cart(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_carts_auto_1499;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_carts_auto_1499')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_carts_auto_1499:

                // oro_api_post_cart_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_cart_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_cart_item:

                // oro_api_get_cart_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_cart_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_cart_item:

                // oro_api_get_cart_items
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_cart_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_cart_items:

                // oro_api_put_cart_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_cart_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_cart_item:

                // oro_api_delete_cart_item
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_cart_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_item')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_cart_item:

                // oro_api_options_cart_items
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cart/items(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_cart_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_items')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_cart_items:

                // oro_api_options_cart_items_auto_1500
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cart/item(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_cart_items_auto_1500;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_items_auto_1500')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_cart_items_auto_1500:

                // oro_api_post_cart_address_shipping
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/addresses/shippings(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_cart_address_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_address_shipping')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::postShippingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_cart_address_shipping:

                // oro_api_post_cart_address_billing
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/addresses/billings(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_cart_address_billing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_address_billing')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::postBillingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_cart_address_billing:

                // oro_api_get_cart_address_shipping
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_cart_address_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_address_shipping')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::getShippingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_cart_address_shipping:

                // oro_api_get_cart_address_billing
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_cart_address_billing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_address_billing')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::getBillingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_cart_address_billing:

                // oro_api_put_cart_address_shipping
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_cart_address_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_address_shipping')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::putShippingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_cart_address_shipping:

                // oro_api_put_cart_address_billing
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_cart_address_billing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_address_billing')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::putBillingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_cart_address_billing:

                // oro_api_delete_cart_address_shipping
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_cart_address_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_address_shipping')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::deleteShippingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_cart_address_shipping:

                // oro_api_delete_cart_address_billing
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_cart_address_billing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_address_billing')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::deleteBillingAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_cart_address_billing:

                // oro_api_options_cart_addresses
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cart/addresses(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_cart_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_addresses')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_cart_addresses:

                // oro_api_options_cart_addresses_auto_1501
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cart/address(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_cart_addresses_auto_1501;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_addresses_auto_1501')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_cart_addresses_auto_1501:

            }

            if (0 === strpos($pathinfo, '/admin/order')) {
                // oro_order_view
                if (0 === strpos($pathinfo, '/admin/order/view') && preg_match('#^/admin/order/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_order_view')), array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\OrderController::viewAction',));
                }

                // oro_order_info
                if (0 === strpos($pathinfo, '/admin/order/info') && preg_match('#^/admin/order/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_order_info')), array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\OrderController::infoAction',));
                }

                // oro_order_index
                if ('/admin/order' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_order_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_order_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\OrderController::indexAction',  '_route' => 'oro_order_index',);
                }
                not_oro_order_index:

                // oro_order_create
                if ('/admin/order/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\OrderController::createAction',  '_route' => 'oro_order_create',);
                }

                // oro_order_update
                if (0 === strpos($pathinfo, '/admin/order/update') && preg_match('#^/admin/order/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_order_update')), array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\OrderController::updateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/customer/order')) {
            // oro_order_frontend_index
            if ('/customer/order' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_order_frontend_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_order_frontend_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\Frontend\\OrderController::indexAction',  '_route' => 'oro_order_frontend_index',);
            }
            not_oro_order_frontend_index:

            // oro_order_frontend_view
            if (0 === strpos($pathinfo, '/customer/order/view') && preg_match('#^/customer/order/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_order_frontend_view')), array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\Frontend\\OrderController::viewAction',));
            }

        }

        // oro_order_entry_point
        if (0 === strpos($pathinfo, '/admin/order/entry-point') && preg_match('#^/admin/order/entry\\-point(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_order_entry_point')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\AjaxOrderController::entryPointAction',));
        }

        // oro_order_products_frontend_previously_purchased
        if ('/customer/order/products/previously-purchased' === $pathinfo) {
            return array (  '_controller' => 'Oro\\Bundle\\OrderBundle\\Controller\\Frontend\\ProductsController::previouslyPurchasedAction',  '_route' => 'oro_order_products_frontend_previously_purchased',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/tax')) {
                if (0 === strpos($pathinfo, '/admin/tax/product')) {
                    // oro_tax_product_tax_code_index
                    if ('/admin/tax/product' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_tax_product_tax_code_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_tax_product_tax_code_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\ProductTaxCodeController::indexAction',  '_route' => 'oro_tax_product_tax_code_index',);
                    }
                    not_oro_tax_product_tax_code_index:

                    // oro_tax_product_tax_code_view
                    if (0 === strpos($pathinfo, '/admin/tax/product/view') && preg_match('#^/admin/tax/product/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_product_tax_code_view')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\ProductTaxCodeController::viewAction',));
                    }

                    // oro_tax_product_tax_code_create
                    if ('/admin/tax/product/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\ProductTaxCodeController::createAction',  '_route' => 'oro_tax_product_tax_code_create',);
                    }

                    // oro_tax_product_tax_code_update
                    if (0 === strpos($pathinfo, '/admin/tax/product/update') && preg_match('#^/admin/tax/product/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_product_tax_code_update')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\ProductTaxCodeController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/tax/customer')) {
                    // oro_tax_customer_tax_code_index
                    if ('/admin/tax/customer' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_tax_customer_tax_code_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_tax_customer_tax_code_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\CustomerTaxCodeController::indexAction',  '_route' => 'oro_tax_customer_tax_code_index',);
                    }
                    not_oro_tax_customer_tax_code_index:

                    // oro_tax_customer_tax_code_view
                    if (0 === strpos($pathinfo, '/admin/tax/customer/view') && preg_match('#^/admin/tax/customer/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_customer_tax_code_view')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\CustomerTaxCodeController::viewAction',));
                    }

                    // oro_tax_customer_tax_code_create
                    if ('/admin/tax/customer/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\CustomerTaxCodeController::createAction',  '_route' => 'oro_tax_customer_tax_code_create',);
                    }

                    // oro_tax_customer_tax_code_update
                    if (0 === strpos($pathinfo, '/admin/tax/customer/update') && preg_match('#^/admin/tax/customer/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_customer_tax_code_update')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\CustomerTaxCodeController::updateAction',));
                    }

                }

                // oro_tax_index
                if ('/admin/tax' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_tax_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_tax_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxController::indexAction',  '_route' => 'oro_tax_index',);
                }
                not_oro_tax_index:

                // oro_tax_view
                if (0 === strpos($pathinfo, '/admin/tax/view') && preg_match('#^/admin/tax/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_view')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxController::viewAction',));
                }

                // oro_tax_create
                if ('/admin/tax/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxController::createAction',  '_route' => 'oro_tax_create',);
                }

                // oro_tax_update
                if (0 === strpos($pathinfo, '/admin/tax/update') && preg_match('#^/admin/tax/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_update')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/tax/rule')) {
                    // oro_tax_rule_index
                    if ('/admin/tax/rule' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_tax_rule_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_tax_rule_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxRuleController::indexAction',  '_route' => 'oro_tax_rule_index',);
                    }
                    not_oro_tax_rule_index:

                    // oro_tax_rule_view
                    if (0 === strpos($pathinfo, '/admin/tax/rule/view') && preg_match('#^/admin/tax/rule/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_rule_view')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxRuleController::viewAction',));
                    }

                    // oro_tax_rule_create
                    if ('/admin/tax/rule/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxRuleController::createAction',  '_route' => 'oro_tax_rule_create',);
                    }

                    // oro_tax_rule_update
                    if (0 === strpos($pathinfo, '/admin/tax/rule/update') && preg_match('#^/admin/tax/rule/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_rule_update')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxRuleController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/tax/jurisdiction')) {
                    // oro_tax_jurisdiction_index
                    if ('/admin/tax/jurisdiction' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_tax_jurisdiction_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_tax_jurisdiction_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxJurisdictionController::indexAction',  '_route' => 'oro_tax_jurisdiction_index',);
                    }
                    not_oro_tax_jurisdiction_index:

                    // oro_tax_jurisdiction_view
                    if (0 === strpos($pathinfo, '/admin/tax/jurisdiction/view') && preg_match('#^/admin/tax/jurisdiction/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_jurisdiction_view')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxJurisdictionController::viewAction',));
                    }

                    // oro_tax_jurisdiction_create
                    if ('/admin/tax/jurisdiction/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxJurisdictionController::createAction',  '_route' => 'oro_tax_jurisdiction_create',);
                    }

                    // oro_tax_jurisdiction_update
                    if (0 === strpos($pathinfo, '/admin/tax/jurisdiction/update') && preg_match('#^/admin/tax/jurisdiction/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tax_jurisdiction_update')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\TaxJurisdictionController::updateAction',));
                    }

                }

            }

            // oro_api_patch_product_tax_code
            if (0 === strpos($pathinfo, '/admin/api/rest') && preg_match('#^/admin/api/rest/(?P<version>latest|v1)/taxcode/product/(?P<id>[^/]++)/patch(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_oro_api_patch_product_tax_code;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_patch_product_tax_code')), array (  '_controller' => 'Oro\\Bundle\\TaxBundle\\Controller\\Api\\Rest\\ProductTaxCodeController::patchAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_patch_product_tax_code:

            // oro_magento_widget_tracking_events
            if ('/admin/magento/customer/widget/tracking-events' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bridge\\MarketingCRM\\Controller\\CustomerController::trackingEventsAction',  '_route' => 'oro_magento_widget_tracking_events',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/customer')) {
                if (0 === strpos($pathinfo, '/customer/checkout')) {
                    // oro_checkout_frontend_checkout
                    if (preg_match('#^/customer/checkout/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_checkout_frontend_checkout')), array (  '_controller' => 'Oro\\Bundle\\CheckoutBundle\\Controller\\Frontend\\CheckoutController::checkoutAction',));
                    }

                    // oro_checkout_frontend_totals
                    if (0 === strpos($pathinfo, '/customer/checkout/get-totals-for-checkout') && preg_match('#^/customer/checkout/get\\-totals\\-for\\-checkout/(?P<entityId>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_checkout_frontend_totals')), array (  '_controller' => 'Oro\\Bundle\\CheckoutBundle\\Controller\\Frontend\\AjaxCheckoutController::getTotalsAction',));
                    }

                }

                // oro_checkout_frontend_open_orders
                if ('/customer/open-orders' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_checkout_frontend_open_orders;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_checkout_frontend_open_orders');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CheckoutBundle\\Controller\\Frontend\\OpenOrdersController::openOrdersAction',  '_route' => 'oro_checkout_frontend_open_orders',);
                }
                not_oro_checkout_frontend_open_orders:

            }

            if (0 === strpos($pathinfo, '/contact-us')) {
                // oro_contactus_bridge_request_create
                if ('/contact-us/create' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_contactus_bridge_request_create;
                    }

                    return array (  '_controller' => 'Oro\\Bridge\\ContactUs\\Controller\\ContactRequestController::createAction',  '_route' => 'oro_contactus_bridge_request_create',);
                }
                not_oro_contactus_bridge_request_create:

                // oro_contactus_bridge_contact_us_page
                if ('/contact-us' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_contactus_bridge_contact_us_page;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_contactus_bridge_contact_us_page');
                    }

                    return array (  '_controller' => 'Oro\\Bridge\\ContactUs\\Controller\\ContactRequestController::contactUsPageAction',  '_route' => 'oro_contactus_bridge_contact_us_page',);
                }
                not_oro_contactus_bridge_contact_us_page:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/sale/quote')) {
                // oro_sale_quote_view
                if (0 === strpos($pathinfo, '/admin/sale/quote/view') && preg_match('#^/admin/sale/quote/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_view')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\QuoteController::viewAction',));
                }

                // oro_sale_quote_index
                if ('/admin/sale/quote' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_sale_quote_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_sale_quote_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\QuoteController::indexAction',  '_route' => 'oro_sale_quote_index',);
                }
                not_oro_sale_quote_index:

                // oro_sale_quote_create
                if ('/admin/sale/quote/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\QuoteController::createAction',  '_route' => 'oro_sale_quote_create',);
                }

                // oro_sale_quote_update
                if (0 === strpos($pathinfo, '/admin/sale/quote/update') && preg_match('#^/admin/sale/quote/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_update')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\QuoteController::updateAction',));
                }

                // oro_sale_quote_info
                if (0 === strpos($pathinfo, '/admin/sale/quote/info') && preg_match('#^/admin/sale/quote/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_info')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\QuoteController::infoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/quote')) {
                // oro_quote_related_data
                if ('/admin/quote/related-data' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_quote_related_data;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\AjaxQuoteController::getRelatedDataAction',  '_route' => 'oro_quote_related_data',);
                }
                not_oro_quote_related_data:

                // oro_quote_entry_point
                if (0 === strpos($pathinfo, '/admin/quote/entry-point') && preg_match('#^/admin/quote/entry\\-point(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_quote_entry_point')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\AjaxQuoteController::entryPointAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/customer/quote')) {
            // oro_sale_quote_frontend_view
            if (0 === strpos($pathinfo, '/customer/quote/view') && preg_match('#^/customer/quote/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_frontend_view')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\Frontend\\QuoteController::viewAction',));
            }

            // oro_sale_quote_frontend_index
            if ('/customer/quote' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_sale_quote_frontend_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_sale_quote_frontend_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\Frontend\\QuoteController::indexAction',  '_route' => 'oro_sale_quote_frontend_index',);
            }
            not_oro_sale_quote_frontend_index:

            // oro_sale_quote_frontend_choice
            if (0 === strpos($pathinfo, '/customer/quote/choice') && preg_match('#^/customer/quote/choice/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_frontend_choice')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\Frontend\\QuoteController::choiceAction',));
            }

            // oro_sale_quote_frontend_subtotals
            if (0 === strpos($pathinfo, '/customer/quote/subtotals') && preg_match('#^/customer/quote/subtotals/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_frontend_subtotals')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\Frontend\\QuoteController::subtotalsAction',));
            }

            // oro_sale_quote_frontend_quote_product_match_offer
            if (0 === strpos($pathinfo, '/customer/quoteproduct/match-offer') && preg_match('#^/customer/quoteproduct/match\\-offer/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_sale_quote_frontend_quote_product_match_offer')), array (  '_controller' => 'Oro\\Bundle\\SaleBundle\\Controller\\Frontend\\AjaxQuoteProductController::matchQuoteProductOfferAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/shoppinglist')) {
            // oro_shopping_list_view
            if (0 === strpos($pathinfo, '/admin/shoppinglist/view') && preg_match('#^/admin/shoppinglist/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_view')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\ShoppingListController::viewAction',));
            }

            // oro_shopping_list_info
            if (0 === strpos($pathinfo, '/admin/shoppinglist/info') && preg_match('#^/admin/shoppinglist/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_info')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\ShoppingListController::infoAction',));
            }

            // oro_shopping_list_index
            if ('/admin/shoppinglist' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_oro_shopping_list_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'oro_shopping_list_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\ShoppingListController::indexAction',  '_route' => 'oro_shopping_list_index',);
            }
            not_oro_shopping_list_index:

        }

        if (0 === strpos($pathinfo, '/customer/shoppinglist')) {
            // oro_shopping_list_frontend_view
            if (preg_match('#^/customer/shoppinglist(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_frontend_view')), array (  'id' => NULL,  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\ShoppingListController::viewAction',));
            }

            // oro_shopping_list_frontend_create
            if ('/customer/shoppinglist/create' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\ShoppingListController::createAction',  '_route' => 'oro_shopping_list_frontend_create',);
            }

        }

        // oro_shopping_list_frontend_matrix_grid_order
        if (0 === strpos($pathinfo, '/shoppinglist/matrix-grid-order') && preg_match('#^/shoppinglist/matrix\\-grid\\-order/(?P<productId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_frontend_matrix_grid_order')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\MatrixGridOrderController::orderAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_set_shopping_list_current
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shoppinglists/current/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_set_shopping_list_current;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_set_shopping_list_current')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\ShoppingListController::setCurrentAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_set_shopping_list_current:

            // oro_api_set_shopping_list_owner
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shoppinglists/(?P<id>[^/]++)/owner(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_set_shopping_list_owner;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_set_shopping_list_owner')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\ShoppingListController::setOwnerAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_set_shopping_list_owner:

            // oro_api_options_shopping_lists
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shopping/lists(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_shopping_lists;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_shopping_lists')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\ShoppingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_shopping_lists:

            // oro_api_options_shopping_lists_auto_1502
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shopping/list(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_shopping_lists_auto_1502;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_shopping_lists_auto_1502')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\ShoppingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_shopping_lists_auto_1502:

            // oro_api_shopping_list_frontend_delete_line_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/lines/(?P<id>[^/]++)/item(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_shopping_list_frontend_delete_line_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_shopping_list_frontend_delete_line_item')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\LineItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_shopping_list_frontend_delete_line_item:

            // oro_api_shopping_list_frontend_put_line_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/lines/(?P<id>[^/]++)/item(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_shopping_list_frontend_put_line_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_shopping_list_frontend_put_line_item')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\LineItemController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_shopping_list_frontend_put_line_item:

            // oro_api_shopping_list_frontend_options_line_items
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/line/items(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_shopping_list_frontend_options_line_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_shopping_list_frontend_options_line_items')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\LineItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_shopping_list_frontend_options_line_items:

            // oro_api_shopping_list_frontend_options_line_items_auto_1503
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/line/item(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_shopping_list_frontend_options_line_items_auto_1503;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_shopping_list_frontend_options_line_items_auto_1503')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\Api\\Rest\\LineItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_shopping_list_frontend_options_line_items_auto_1503:

        }

        if (0 === strpos($pathinfo, '/customer/shoppinglist')) {
            if (0 === strpos($pathinfo, '/customer/shoppinglist/lineitem/ajax')) {
                // oro_shopping_list_frontend_add_product
                if (0 === strpos($pathinfo, '/customer/shoppinglist/lineitem/ajax/add-product-from-view') && preg_match('#^/customer/shoppinglist/lineitem/ajax/add\\-product\\-from\\-view/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_frontend_add_product')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\AjaxLineItemController::addProductFromViewAction',));
                }

                // oro_shopping_list_frontend_remove_product
                if (0 === strpos($pathinfo, '/customer/shoppinglist/lineitem/ajax/remove-product-from-view') && preg_match('#^/customer/shoppinglist/lineitem/ajax/remove\\-product\\-from\\-view/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_shopping_list_frontend_remove_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_frontend_remove_product')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\AjaxLineItemController::removeProductFromViewAction',));
                }
                not_oro_shopping_list_frontend_remove_product:

                // oro_shopping_list_add_products_massaction
                if (preg_match('#^/customer/shoppinglist/lineitem/ajax/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_add_products_massaction')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\AjaxLineItemController::addProductsMassAction',));
                }

                // oro_shopping_list_add_products_to_new_massaction
                if (preg_match('#^/customer/shoppinglist/lineitem/ajax/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)/create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shopping_list_add_products_to_new_massaction')), array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\AjaxLineItemController::addProductsToNewMassAction',));
                }

            }

            // oro_shopping_list_frontend_get_mass_actions
            if ('/customer/shoppinglist/mass-action/ajax/get-mass-actions' === $pathinfo) {
                return array (  '_controller' => 'Oro\\Bundle\\ShoppingListBundle\\Controller\\Frontend\\AjaxMassActionController::getMassActionsAction',  '_route' => 'oro_shopping_list_frontend_get_mass_actions',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/case')) {
                // oro_case_index
                if ('/admin/case' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_case_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_case_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::indexAction',  '_route' => 'oro_case_index',);
                }
                not_oro_case_index:

                // oro_case_view
                if (0 === strpos($pathinfo, '/admin/case/view') && preg_match('#^/admin/case/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_view')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/case/widget')) {
                    // oro_case_account_widget_cases
                    if (0 === strpos($pathinfo, '/admin/case/widget/account-cases') && preg_match('#^/admin/case/widget/account\\-cases/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_account_widget_cases')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::accountCasesAction',));
                    }

                    // oro_case_contact_widget_cases
                    if (0 === strpos($pathinfo, '/admin/case/widget/contact-cases') && preg_match('#^/admin/case/widget/contact\\-cases/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_contact_widget_cases')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::contactCasesAction',));
                    }

                }

                // oro_case_create
                if ('/admin/case/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::createAction',  '_route' => 'oro_case_create',);
                }

                // oro_case_update
                if (0 === strpos($pathinfo, '/admin/case/update') && preg_match('#^/admin/case/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_update')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::updateAction',));
                }

                // oro_case_comment_list
                if (preg_match('#^/admin/case/(?P<id>\\d+)/comment/list(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_comment_list')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::commentsListAction',));
                }

                // oro_case_widget_comments
                if (preg_match('#^/admin/case/(?P<id>\\d+)/widget/comment$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_widget_comments')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::commentsWidgetAction',));
                }

                // oro_case_comment_create
                if (preg_match('#^/admin/case/(?P<caseId>\\d+)/comment/create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_comment_create')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::createAction',));
                }

                // oro_case_comment_update
                if (0 === strpos($pathinfo, '/admin/case/comment') && preg_match('#^/admin/case/comment/(?P<id>\\d+)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_comment_update')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/api/rest')) {
                // oro_case_api_get_cases
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_case_api_get_cases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_get_cases')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_get_cases:

                // oro_case_api_get_case
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_case_api_get_case;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_get_case')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_get_case:

                // oro_case_api_put_case
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_case_api_put_case;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_put_case')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_put_case:

                // oro_case_api_post_case
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_case_api_post_case;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_post_case')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_post_case:

                // oro_case_api_delete_case
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_case_api_delete_case;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_delete_case')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_delete_case:

                // oro_case_api_options_cases
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_case_api_options_cases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_options_cases')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_options_cases:

                // oro_case_api_options_cases_auto_1504
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_case_api_options_cases_auto_1504;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_options_cases_auto_1504')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_options_cases_auto_1504:

                // oro_case_api_get_comments
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/(?P<id>\\d+)/comments(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_case_api_get_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_get_comments')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_get_comments:

                // oro_case_api_get_comment
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_case_api_get_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_get_comment')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_get_comment:

                // oro_case_api_put_comment
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_case_api_put_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_put_comment')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_put_comment:

                // oro_case_api_post_comment
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/(?P<id>\\d+)/comment(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_case_api_post_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_post_comment')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_post_comment:

                // oro_case_api_delete_comment
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_case_api_delete_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_delete_comment')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_delete_comment:

                // oro_case_api_options_comments
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case/comments(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_case_api_options_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_options_comments')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_options_comments:

                // oro_case_api_post_case_deprecated
                if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/case(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_case_api_post_case_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_case_api_post_case_deprecated')), array (  '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_case_api_post_case_deprecated:

            }

            if (0 === strpos($pathinfo, '/admin/inventory/inventory-level')) {
                // oro_inventory_level_index
                if ('/admin/inventory/inventory-level' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_inventory_level_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_inventory_level_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\InventoryBundle\\Controller\\InventoryLevelController::indexAction',  '_route' => 'oro_inventory_level_index',);
                }
                not_oro_inventory_level_index:

                // oro_inventory_level_update
                if (0 === strpos($pathinfo, '/admin/inventory/inventory-level/update') && preg_match('#^/admin/inventory/inventory\\-level/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_inventory_level_update')), array (  '_controller' => 'Oro\\Bundle\\InventoryBundle\\Controller\\InventoryLevelController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/promotion')) {
                if (0 === strpos($pathinfo, '/admin/promotion/ajax/get-')) {
                    // oro_promotion_get_promotion_by_promotion
                    if (0 === strpos($pathinfo, '/admin/promotion/ajax/get-promotion-details') && preg_match('#^/admin/promotion/ajax/get\\-promotion\\-details/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_get_promotion_by_promotion')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\AjaxPromotionController::getPromotionDataByPromotionAction',));
                    }

                    // oro_promotion_get_promotion_by_applied_promotion
                    if (0 === strpos($pathinfo, '/admin/promotion/ajax/get-applied-promotion-details') && preg_match('#^/admin/promotion/ajax/get\\-applied\\-promotion\\-details/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_get_promotion_by_applied_promotion')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\AjaxPromotionController::getPromotionDataByAppliedPromotionAction',));
                    }

                }

                // oro_promotion_view
                if (0 === strpos($pathinfo, '/admin/promotion/view') && preg_match('#^/admin/promotion/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_view')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\PromotionController::viewAction',));
                }

                // oro_promotion_index
                if ('/admin/promotion' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_oro_promotion_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'oro_promotion_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\PromotionController::indexAction',  '_route' => 'oro_promotion_index',);
                }
                not_oro_promotion_index:

                // oro_promotion_create
                if ('/admin/promotion/create' === $pathinfo) {
                    return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\PromotionController::createAction',  '_route' => 'oro_promotion_create',);
                }

                // oro_promotion_update
                if (0 === strpos($pathinfo, '/admin/promotion/update') && preg_match('#^/admin/promotion/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_update')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\PromotionController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/promotion/coupon')) {
                    // oro_promotion_coupon_index
                    if ('/admin/promotion/coupon' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_oro_promotion_coupon_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'oro_promotion_coupon_index');
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::indexAction',  '_route' => 'oro_promotion_coupon_index',);
                    }
                    not_oro_promotion_coupon_index:

                    // oro_promotion_coupon_create
                    if ('/admin/promotion/coupon/create' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::createAction',  '_route' => 'oro_promotion_coupon_create',);
                    }

                    // oro_promotion_coupon_update
                    if (0 === strpos($pathinfo, '/admin/promotion/coupon/update') && preg_match('#^/admin/promotion/coupon/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_coupon_update')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::updateAction',));
                    }

                    // oro_promotion_coupon_view
                    if (0 === strpos($pathinfo, '/admin/promotion/coupon/view') && preg_match('#^/admin/promotion/coupon/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_coupon_view')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::viewAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/promotion/coupon/coupon-')) {
                        // oro_promotion_coupon_mass_edit_widget
                        if ('/admin/promotion/coupon/coupon-mass-edit-widget' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::massUpdateWidgetAction',  '_route' => 'oro_promotion_coupon_mass_edit_widget',);
                        }

                        // oro_promotion_coupon_generation_preview
                        if ('/admin/promotion/coupon/coupon-generation-preview' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_oro_promotion_coupon_generation_preview;
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\CouponController::couponGenerationPreview',  '_route' => 'oro_promotion_coupon_generation_preview',);
                        }
                        not_oro_promotion_coupon_generation_preview:

                    }

                    if (0 === strpos($pathinfo, '/admin/promotion/coupon/ajax')) {
                        // oro_promotion_get_added_coupons_table
                        if (0 === strpos($pathinfo, '/admin/promotion/coupon/ajax/get-added-coupons-table') && preg_match('#^/admin/promotion/coupon/ajax/get\\-added\\-coupons\\-table(?:/(?P<addedCouponIds>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_get_added_coupons_table')), array (  'addedCouponIds' => '0',  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\AjaxCouponController::getAddedCouponsTableAction',));
                        }

                        // oro_promotion_validate_coupon_applicability
                        if ('/admin/promotion/coupon/ajax/validate-coupon-applicability' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\AjaxCouponController::validateCouponApplicabilityAction',  '_route' => 'oro_promotion_validate_coupon_applicability',);
                        }

                        // oro_promotion_get_applied_coupons_data
                        if (0 === strpos($pathinfo, '/admin/promotion/coupon/ajax/get-applied-coupons-data') && preg_match('#^/admin/promotion/coupon/ajax/get\\-applied\\-coupons\\-data(?:/(?P<couponIds>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_get_applied_coupons_data')), array (  'couponIds' => '0',  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\AjaxCouponController::getAppliedCouponsData',));
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/promotion/coupon/ajax')) {
            // oro_promotion_frontend_add_coupon
            if ('/promotion/coupon/ajax/add-coupon' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_promotion_frontend_add_coupon;
                }

                return array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\Frontend\\AjaxCouponController::addCouponAction',  '_route' => 'oro_promotion_frontend_add_coupon',);
            }
            not_oro_promotion_frontend_add_coupon:

            // oro_promotion_frontend_remove_coupon
            if (preg_match('#^/promotion/coupon/ajax/(?P<entityClass>[^/]++)/(?P<entityId>\\d+)/remove\\-coupon/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_promotion_frontend_remove_coupon;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_promotion_frontend_remove_coupon')), array (  '_controller' => 'Oro\\Bundle\\PromotionBundle\\Controller\\Frontend\\AjaxCouponController::removeCouponAction',));
            }
            not_oro_promotion_frontend_remove_coupon:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // oro_api_post_ticket_sync_case
                if (0 === strpos($pathinfo, '/admin/api/rest') && preg_match('#^/admin/api/rest/(?P<version>latest|v1)/ticket/sync/case/(?P<id>\\d+)/channel/(?P<channelId>\\d+)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_ticket_sync_case;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_ticket_sync_case')), array (  '_controller' => 'Oro\\Bundle\\ZendeskBundle\\Controller\\Api\\Rest\\TicketController::postSyncCaseAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_ticket_sync_case:

                // 
                if (0 === strpos($pathinfo, '/admin/staticsegment') && preg_match('#^/admin/staticsegment/(?P<id>\\d+)/status$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\Api\\Rest\\StaticSegmentController::updateStatusAction',));
                }
                not_:

                if (0 === strpos($pathinfo, '/admin/mailchimp')) {
                    // oro_mailchimp_ping
                    if ('/admin/mailchimp/ping' === $pathinfo) {
                        return array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\MailChimpController::pingAction',  '_route' => 'oro_mailchimp_ping',);
                    }

                    // oro_mailchimp_marketing_list_connect
                    if (0 === strpos($pathinfo, '/admin/mailchimp/manage-connection/marketing-list') && preg_match('#^/admin/mailchimp/manage\\-connection/marketing\\-list/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_mailchimp_marketing_list_connect')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\MailChimpController::manageConnectionAction',));
                    }

                    // oro_mailchimp_sync_status
                    if (0 === strpos($pathinfo, '/admin/mailchimp/sync-status') && preg_match('#^/admin/mailchimp/sync\\-status/(?P<marketingList>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_mailchimp_sync_status')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\MailChimpController::marketingListSyncStatusAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/mailchimp/email-campaign')) {
                        // oro_mailchimp_email_campaign_status
                        if (0 === strpos($pathinfo, '/admin/mailchimp/email-campaign-status-positive') && preg_match('#^/admin/mailchimp/email\\-campaign\\-status\\-positive/(?P<entity>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_mailchimp_email_campaign_status')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\MailChimpController::emailCampaignStatsAction',));
                        }

                        // oro_mailchimp_email_campaign_activity_update_toggle
                        if (preg_match('#^/admin/mailchimp/email\\-campaign/(?P<id>\\d+)/activity\\-updates/toggle$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_mailchimp_email_campaign_activity_update_toggle')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\MailChimpController::toggleUpdateStateAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/a')) {
                    if (0 === strpos($pathinfo, '/admin/api/rest')) {
                        // oro_api_update_staticsegment_status
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/staticsegment/(?P<id>\\d+)/status(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_oro_api_update_staticsegment_status;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_update_staticsegment_status')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\Api\\Rest\\StaticSegmentController::updateStatusAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_update_staticsegment_status:

                        // oro_api_delete_staticsegment
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/staticsegments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_api_delete_staticsegment;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_staticsegment')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\Api\\Rest\\StaticSegmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_delete_staticsegment:

                        // oro_api_options_staticsegments
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/staticsegments(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_staticsegments;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_staticsegments')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\Api\\Rest\\StaticSegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_staticsegments:

                        // oro_api_options_staticsegments_auto_1505
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/staticsegment(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_staticsegments_auto_1505;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_staticsegments_auto_1505')), array (  '_controller' => 'Oro\\Bundle\\MailChimpBundle\\Controller\\Api\\Rest\\StaticSegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_staticsegments_auto_1505:

                    }

                    if (0 === strpos($pathinfo, '/admin/account-customer/widget')) {
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/customer')) {
                            // oro_account_widget_customers_info
                            if (0 === strpos($pathinfo, '/admin/account-customer/widget/customers-info') && preg_match('#^/admin/account\\-customer/widget/customers\\-info/(?P<accountId>\\d+)/(?P<channelId>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_widget_customers_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::accountCustomersInfoAction',));
                            }

                            if (0 === strpos($pathinfo, '/admin/account-customer/widget/customer-')) {
                                // oro_account_customer_widget_customer_info
                                if (0 === strpos($pathinfo, '/admin/account-customer/widget/customer-info') && preg_match('#^/admin/account\\-customer/widget/customer\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_customer_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::customerInfoAction',));
                                }

                                // oro_account_customer_widget_customer_user_info
                                if (0 === strpos($pathinfo, '/admin/account-customer/widget/customer-users-info') && preg_match('#^/admin/account\\-customer/widget/customer\\-users\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_customer_user_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::customerUsersAction',));
                                }

                            }

                        }

                        // oro_account_customer_widget_shopping_lists_info
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/shopping-lists-info') && preg_match('#^/admin/account\\-customer/widget/shopping\\-lists\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_shopping_lists_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::shoppingListsAction',));
                        }

                        // oro_account_customer_widget_rfq_info
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/rfq-info') && preg_match('#^/admin/account\\-customer/widget/rfq\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_rfq_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::rfqAction',));
                        }

                        // oro_account_customer_widget_orders_info
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/orders-info') && preg_match('#^/admin/account\\-customer/widget/orders\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_orders_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::ordersAction',));
                        }

                        // oro_account_customer_widget_quotes_info
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/quotes-info') && preg_match('#^/admin/account\\-customer/widget/quotes\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_quotes_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::quotesAction',));
                        }

                        // oro_account_customer_widget_opportunities_info
                        if (0 === strpos($pathinfo, '/admin/account-customer/widget/opportunities-info') && preg_match('#^/admin/account\\-customer/widget/opportunities\\-info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_account_customer_widget_opportunities_info')), array (  '_controller' => 'Oro\\Bridge\\CustomerAccount\\Controller\\CustomerController::opportunitiesAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/dotmailer')) {
                    if (0 === strpos($pathinfo, '/admin/dotmailer/address-book')) {
                        if (0 === strpos($pathinfo, '/admin/dotmailer/address-book/synchronize')) {
                            // oro_dotmailer_synchronize_adddress_book
                            if (preg_match('#^/admin/dotmailer/address\\-book/synchronize/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_synchronize_adddress_book')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::synchronizeAddressBookAction',));
                            }

                            // oro_dotmailer_synchronize_adddress_book_datafields
                            if (0 === strpos($pathinfo, '/admin/dotmailer/address-book/synchronize_datafields') && preg_match('#^/admin/dotmailer/address\\-book/synchronize_datafields/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_synchronize_adddress_book_datafields')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::synchronizeAddressBookDataFieldsAction',));
                            }

                        }

                        // oro_dotmailer_marketing_list_disconnect
                        if (0 === strpos($pathinfo, '/admin/dotmailer/address-book/marketing-list/disconnect') && preg_match('#^/admin/dotmailer/address\\-book/marketing\\-list/disconnect/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_marketing_list_disconnect')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::disconnectMarketingListAction',));
                        }

                        // oro_dotmailer_marketing_list_connect
                        if (0 === strpos($pathinfo, '/admin/dotmailer/address-book/widget/manage-connection/marketing-list') && preg_match('#^/admin/dotmailer/address\\-book/widget/manage\\-connection/marketing\\-list/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_marketing_list_connect')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::addressBookConnectionUpdateAction',));
                        }

                        // oro_dotmailer_marketing_list_buttons
                        if (0 === strpos($pathinfo, '/admin/dotmailer/address-book/marketing-list/buttons') && preg_match('#^/admin/dotmailer/address\\-book/marketing\\-list/buttons/(?P<entity>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_marketing_list_buttons')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::connectionButtonsAction',));
                        }

                        // oro_dotmailer_address_book_create
                        if ('/admin/dotmailer/address-book/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::createAction',  '_route' => 'oro_dotmailer_address_book_create',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/dotmailer/d')) {
                        if (0 === strpos($pathinfo, '/admin/dotmailer/data-field')) {
                            // oro_dotmailer_datafield_view
                            if (0 === strpos($pathinfo, '/admin/dotmailer/data-field/view') && preg_match('#^/admin/dotmailer/data\\-field/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_datafield_view')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::viewAction',));
                            }

                            // oro_dotmailer_datafield_info
                            if (0 === strpos($pathinfo, '/admin/dotmailer/data-field/info') && preg_match('#^/admin/dotmailer/data\\-field/info/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_datafield_info')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::infoAction',));
                            }

                            // oro_dotmailer_datafield_create
                            if ('/admin/dotmailer/data-field/create' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::createAction',  '_route' => 'oro_dotmailer_datafield_create',);
                            }

                            // oro_dotmailer_datafield_index
                            if (preg_match('#^/admin/dotmailer/data\\-field(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_datafield_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::indexAction',));
                            }

                            // oro_dotmailer_datafield_synchronize
                            if ('/admin/dotmailer/data-field/synchronize' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::synchronizeAction',  '_route' => 'oro_dotmailer_datafield_synchronize',);
                            }

                            if (0 === strpos($pathinfo, '/admin/dotmailer/data-field-mapping')) {
                                // oro_dotmailer_datafield_mapping_index
                                if (preg_match('#^/admin/dotmailer/data\\-field\\-mapping(?:/(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_datafield_mapping_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::indexAction',));
                                }

                                // oro_dotmailer_datafield_mapping_update
                                if (0 === strpos($pathinfo, '/admin/dotmailer/data-field-mapping/update') && preg_match('#^/admin/dotmailer/data\\-field\\-mapping/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_datafield_mapping_update')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::updateAction',));
                                }

                                // oro_dotmailer_datafield_mapping_create
                                if ('/admin/dotmailer/data-field-mapping/create' === $pathinfo) {
                                    return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::createAction',  '_route' => 'oro_dotmailer_datafield_mapping_create',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/dotmailer/dotmailer')) {
                            // oro_dotmailer_email_campaign_status
                            if (0 === strpos($pathinfo, '/admin/dotmailer/dotmailer/email-campaign-status') && preg_match('#^/admin/dotmailer/dotmailer/email\\-campaign\\-status/(?P<entity>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_email_campaign_status')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::emailCampaignStatsAction',));
                            }

                            // oro_dotmailer_sync_status
                            if (0 === strpos($pathinfo, '/admin/dotmailer/dotmailer/sync-status') && preg_match('#^/admin/dotmailer/dotmailer/sync\\-status/(?P<marketingList>\\d+)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_sync_status')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::marketingListSyncStatusAction',));
                            }

                            // oro_dotmailer_ping
                            if ('/admin/dotmailer/dotmailer/ping' === $pathinfo) {
                                return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::pingAction',  '_route' => 'oro_dotmailer_ping',);
                            }

                            // oro_dotmailer_integration_connection
                            if (0 === strpos($pathinfo, '/admin/dotmailer/dotmailer/integration-connection') && preg_match('#^/admin/dotmailer/dotmailer/integration\\-connection(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_integration_connection')), array (  'id' => '0',  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::integrationConnectionAction',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/dotmailer/oauth')) {
                        // oro_dotmailer_oauth_disconnect
                        if (0 === strpos($pathinfo, '/admin/dotmailer/oauth/disconnect') && preg_match('#^/admin/dotmailer/oauth/disconnect/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dotmailer_oauth_disconnect')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\OauthController::disconnectAction',));
                        }

                        // oro_dotmailer_oauth_callback
                        if ('/admin/dotmailer/oauth/callback' === $pathinfo) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                if (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_oro_dotmailer_oauth_callback;
                                }

                                return $this->redirect($rawPathinfo, 'oro_dotmailer_oauth_callback', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\OauthController::callbackAction',  '_route' => 'oro_dotmailer_oauth_callback',);
                        }
                        not_oro_dotmailer_oauth_callback:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/a')) {
                    if (0 === strpos($pathinfo, '/admin/api/rest')) {
                        // oro_api_delete_dotmailer_datafield
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dotmailers/(?P<id>[^/]++)/datafield(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_api_delete_dotmailer_datafield;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dotmailer_datafield')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_delete_dotmailer_datafield:

                        // oro_api_options_dotmailer_datafields
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dotmailer/datafields(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_dotmailer_datafields;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_dotmailer_datafields')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_dotmailer_datafields:

                        // oro_api_fields_dotmailer_datafield_mapping
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dotmailers/datafields/mappings/fields(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_fields_dotmailer_datafield_mapping;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_fields_dotmailer_datafield_mapping')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_fields_dotmailer_datafield_mapping:

                        // oro_api_delete_dotmailer_datafield_mapping
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dotmailers/(?P<id>[^/]++)/datafield/mapping(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_oro_api_delete_dotmailer_datafield_mapping;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dotmailer_datafield_mapping')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_delete_dotmailer_datafield_mapping:

                        // oro_api_options_dotmailer_datafield_mappings
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dotmailer/datafield/mappings(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_dotmailer_datafield_mappings;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_dotmailer_datafield_mappings')), array (  '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_dotmailer_datafield_mappings:

                    }

                    if (0 === strpos($pathinfo, '/admin/abandoned-cart')) {
                        // oro_abandoned_cart_list
                        if ('/admin/abandoned-cart/list' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::listAction',  '_route' => 'oro_abandoned_cart_list',);
                        }

                        // oro_abandoned_cart_list_view
                        if (0 === strpos($pathinfo, '/admin/abandoned-cart/view') && preg_match('#^/admin/abandoned\\-cart/view(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_abandoned_cart_list_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::viewAction',));
                        }

                        // oro_abandoned_cart_list_create
                        if ('/admin/abandoned-cart/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::createAction',  '_route' => 'oro_abandoned_cart_list_create',);
                        }

                        // oro_abandoned_cart_list_update
                        if (0 === strpos($pathinfo, '/admin/abandoned-cart/update') && preg_match('#^/admin/abandoned\\-cart/update(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_abandoned_cart_list_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::updateAction',));
                        }

                        // oro_abandoned_cart_list_delete
                        if (0 === strpos($pathinfo, '/admin/abandoned-cart/delete') && preg_match('#^/admin/abandoned\\-cart/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_abandoned_cart_list_delete')), array (  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::deleteAction',));
                        }

                        // oro_abandoned_cart_buttons
                        if (0 === strpos($pathinfo, '/admin/abandoned-cart/buttons') && preg_match('#^/admin/abandoned\\-cart/buttons/(?P<entity>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_abandoned_cart_buttons')), array (  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartController::connectionButtonsAction',));
                        }

                        // oro_abandoned_cart_manage_workflow
                        if (0 === strpos($pathinfo, '/admin/abandoned-cart-conversion/manage-workflow') && preg_match('#^/admin/abandoned\\-cart\\-conversion/manage\\-workflow/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_abandoned_cart_manage_workflow')), array (  '_controller' => 'Oro\\Bundle\\AbandonedCartBundle\\Controller\\AbandonedCartConversionController::manageWorkflowAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/shipping')) {
                    if (0 === strpos($pathinfo, '/admin/shippingrule')) {
                        // oro_shipping_methods_configs_rule_index
                        if ('/admin/shippingrule' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_oro_shipping_methods_configs_rule_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'oro_shipping_methods_configs_rule_index');
                            }

                            return array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\ShippingMethodsConfigsRuleController::indexAction',  '_route' => 'oro_shipping_methods_configs_rule_index',);
                        }
                        not_oro_shipping_methods_configs_rule_index:

                        // oro_shipping_methods_configs_rule_create
                        if ('/admin/shippingrule/create' === $pathinfo) {
                            return array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\ShippingMethodsConfigsRuleController::createAction',  '_route' => 'oro_shipping_methods_configs_rule_create',);
                        }

                        // oro_shipping_methods_configs_rule_view
                        if (0 === strpos($pathinfo, '/admin/shippingrule/view') && preg_match('#^/admin/shippingrule/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shipping_methods_configs_rule_view')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\ShippingMethodsConfigsRuleController::viewAction',));
                        }

                        // oro_shipping_methods_configs_rule_update
                        if (0 === strpos($pathinfo, '/admin/shippingrule/update') && preg_match('#^/admin/shippingrule/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_shipping_methods_configs_rule_update')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\ShippingMethodsConfigsRuleController::updateAction',));
                        }

                        // oro_status_shipping_rule_massaction
                        if (preg_match('#^/admin/shippingrule/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_status_shipping_rule_massaction')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\ShippingMethodsConfigsRuleController::markMassAction',));
                        }

                    }

                    // oro_shipping_freight_classes
                    if ('/admin/shipping/product-shipping/freight-classes' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_shipping_freight_classes;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\AjaxProductShippingOptionsController::getAvailableProductUnitFreightClassesAction',  '_route' => 'oro_shipping_freight_classes',);
                    }
                    not_oro_shipping_freight_classes:

                }

                if (0 === strpos($pathinfo, '/admin/api/rest')) {
                    // oro_api_enable_shippingrules
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/shippingrules/(?P<id>[^/]++)/enable(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_enable_shippingrules;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_enable_shippingrules')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\Api\\Rest\\ShippingMethodsConfigsRuleController::enableAction',  'version' => 'latest',  '_format' => 'json',));
                    }
                    not_oro_api_enable_shippingrules:

                    // oro_api_disable_shippingrules
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/shippingrules/(?P<id>[^/]++)/disable(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_disable_shippingrules;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_disable_shippingrules')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\Api\\Rest\\ShippingMethodsConfigsRuleController::disableAction',  'version' => 'latest',  '_format' => 'json',));
                    }
                    not_oro_api_disable_shippingrules:

                    // oro_api_coptions_shippingrules
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/shippingrules(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_coptions_shippingrules;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_coptions_shippingrules')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\Api\\Rest\\ShippingMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_coptions_shippingrules:

                    // oro_api_options_shippingrules
                    if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/shippingrules(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_oro_api_options_shippingrules;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_shippingrules')), array (  '_controller' => 'Oro\\Bundle\\ShippingBundle\\Controller\\Api\\Rest\\ShippingMethodsConfigsRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_options_shippingrules:

                }

                // oro_fedex_validate_connection
                if (0 === strpos($pathinfo, '/admin/fedex-shipping/validate-connection') && preg_match('#^/admin/fedex\\-shipping/validate\\-connection/(?P<channelId>[^/]++)/$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_fedex_validate_connection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_fedex_validate_connection')), array (  '_controller' => 'Oro\\Bundle\\FedexShippingBundle\\Controller\\ValidateConnectionController::validateConnectionAction',));
                }
                not_oro_fedex_validate_connection:

                if (0 === strpos($pathinfo, '/admin/ups')) {
                    // oro_ups_country_shipping_services
                    if (0 === strpos($pathinfo, '/admin/ups/get-shipping-services-by-country') && preg_match('#^/admin/ups/get\\-shipping\\-services\\-by\\-country/(?P<code>[A-Z]{2})$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_ups_country_shipping_services;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_ups_country_shipping_services')), array (  '_controller' => 'Oro\\Bundle\\UPSBundle\\Controller\\AjaxUPSController::getShippingServicesByCountryAction',));
                    }
                    not_oro_ups_country_shipping_services:

                    // oro_ups_validate_connection
                    if (0 === strpos($pathinfo, '/admin/ups/validate-connection') && preg_match('#^/admin/ups/validate\\-connection/(?P<channelId>[^/]++)/$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_ups_validate_connection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_ups_validate_connection')), array (  '_controller' => 'Oro\\Bundle\\UPSBundle\\Controller\\AjaxUPSController::validateConnectionAction',));
                    }
                    not_oro_ups_validate_connection:

                }

                // oro_magentoorder_view
                if (0 === strpos($pathinfo, '/admin/magentoorder/view') && preg_match('#^/admin/magentoorder/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_magentoorder_view')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\OrderController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/api')) {
                    if (0 === strpos($pathinfo, '/admin/api/rest')) {
                        // oro_api_get_magentoorders
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentoorders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_get_magentoorders;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentoorders')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::getAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_get_magentoorders:

                        // oro_api_get_magentocarts
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/magentocarts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_get_magentocarts;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentocarts')), array (  '_controller' => 'Oro\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::getAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_get_magentocarts:

                        // oro_api_get_dictionary_values
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/(?P<dictionary>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oro_api_get_dictionary_values;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_get_dictionary_values:

                        // oro_api_options_dictionary_values
                        if (preg_match('#^/admin/api/rest/(?P<version>latest|v1)/dictionary/values(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_oro_api_options_dictionary_values;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                        }
                        not_oro_api_options_dictionary_values:

                    }

                    // oro_rest_api_get_user_profile
                    if ('/admin/api/userprofile' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_rest_api_get_user_profile;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::getAction',  '_action' => 'get',  'entity' => 'userprofile',  '_route' => 'oro_rest_api_get_user_profile',);
                    }
                    not_oro_rest_api_get_user_profile:

                    // oro_rest_api_get
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_rest_api_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_get')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::getAction',  '_action' => 'get',));
                    }
                    not_oro_rest_api_get:

                    // oro_rest_api_cget
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_rest_api_cget;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_cget')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::cgetAction',  '_action' => 'get_list',));
                    }
                    not_oro_rest_api_cget:

                    // oro_rest_api_delete
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_rest_api_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_delete')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::deleteAction',  '_action' => 'delete',));
                    }
                    not_oro_rest_api_delete:

                    // oro_rest_api_cdelete
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_rest_api_cdelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_cdelete')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::cdeleteAction',  '_action' => 'delete_list',));
                    }
                    not_oro_rest_api_cdelete:

                    // oro_rest_api_post
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_rest_api_post;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_post')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::postAction',  '_action' => 'create',));
                    }
                    not_oro_rest_api_post:

                    // oro_rest_api_patch
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_oro_rest_api_patch;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_patch')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::patchAction',  '_action' => 'update',));
                    }
                    not_oro_rest_api_patch:

                    // oro_rest_api_get_subresource
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_rest_api_get_subresource;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_get_subresource')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiSubresourceController::getAction',  '_action' => 'get_subresource',));
                    }
                    not_oro_rest_api_get_subresource:

                    // oro_rest_api_get_relationship
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_rest_api_get_relationship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_get_relationship')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiRelationshipController::getAction',  '_action' => 'get_relationship',));
                    }
                    not_oro_rest_api_get_relationship:

                    // oro_rest_api_patch_relationship
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_oro_rest_api_patch_relationship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_patch_relationship')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiRelationshipController::patchAction',  '_action' => 'update_relationship',));
                    }
                    not_oro_rest_api_patch_relationship:

                    // oro_rest_api_post_relationship
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_rest_api_post_relationship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_post_relationship')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiRelationshipController::postAction',  '_action' => 'add_relationship',));
                    }
                    not_oro_rest_api_post_relationship:

                    // oro_rest_api_delete_relationship
                    if (preg_match('#^/admin/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_rest_api_delete_relationship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_rest_api_delete_relationship')), array (  '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiRelationshipController::deleteAction',  '_action' => 'delete_relationship',));
                    }
                    not_oro_rest_api_delete_relationship:

                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                // oro_frontend_rest_api_get
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_frontend_rest_api_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_get')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::getAction',  '_action' => 'get',));
                }
                not_oro_frontend_rest_api_get:

                // oro_frontend_rest_api_cget
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_frontend_rest_api_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_cget')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::cgetAction',  '_action' => 'get_list',));
                }
                not_oro_frontend_rest_api_cget:

                // oro_frontend_rest_api_delete
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_frontend_rest_api_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_delete')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::deleteAction',  '_action' => 'delete',));
                }
                not_oro_frontend_rest_api_delete:

                // oro_frontend_rest_api_cdelete
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_frontend_rest_api_cdelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_cdelete')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::cdeleteAction',  '_action' => 'delete_list',));
                }
                not_oro_frontend_rest_api_cdelete:

                // oro_frontend_rest_api_post
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_frontend_rest_api_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_post')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::postAction',  '_action' => 'create',));
                }
                not_oro_frontend_rest_api_post:

                // oro_frontend_rest_api_patch
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_frontend_rest_api_patch;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_patch')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiController::patchAction',  '_action' => 'update',));
                }
                not_oro_frontend_rest_api_patch:

                // oro_frontend_rest_api_get_subresource
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_frontend_rest_api_get_subresource;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_get_subresource')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiSubresourceController::getAction',  '_action' => 'get_subresource',));
                }
                not_oro_frontend_rest_api_get_subresource:

                // oro_frontend_rest_api_get_relationship
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_frontend_rest_api_get_relationship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_get_relationship')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiRelationshipController::getAction',  '_action' => 'get_relationship',));
                }
                not_oro_frontend_rest_api_get_relationship:

                // oro_frontend_rest_api_patch_relationship
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_oro_frontend_rest_api_patch_relationship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_patch_relationship')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiRelationshipController::patchAction',  '_action' => 'update_relationship',));
                }
                not_oro_frontend_rest_api_patch_relationship:

                // oro_frontend_rest_api_post_relationship
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_frontend_rest_api_post_relationship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_post_relationship')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiRelationshipController::postAction',  '_action' => 'add_relationship',));
                }
                not_oro_frontend_rest_api_post_relationship:

                // oro_frontend_rest_api_delete_relationship
                if (preg_match('#^/api/(?P<entity>(?:(?!(soap|rest)(/|$))[^/]+))/(?P<id>[^/]++)/relationships/(?P<association>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_frontend_rest_api_delete_relationship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_frontend_rest_api_delete_relationship')), array (  '_controller' => 'Oro\\Bundle\\FrontendBundle\\Controller\\FrontendRestApiRelationshipController::deleteAction',  '_action' => 'delete_relationship',));
                }
                not_oro_frontend_rest_api_delete_relationship:

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // oro_email_autoresponserule_edittemplate
                if (0 === strpos($pathinfo, '/admin/email/autoresponserule/template') && preg_match('#^/admin/email/autoresponserule/template/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_edittemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::editTemplateAction',));
                }

                // oro_datagrid_filter_metadata
                if (0 === strpos($pathinfo, '/admin/datagrid') && preg_match('#^/admin/datagrid/(?P<gridName>[^/]++)/filter\\-metadata$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_filter_metadata')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::filterMetadataAction',));
                }

            }

        }

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        // oro_calendar_event_attendees_autocomplete_data
        if (0 === strpos($pathinfo, '/admin/calendar/event/ajax/attendees-autocomplete-data') && preg_match('#^/admin/calendar/event/ajax/attendees\\-autocomplete\\-data/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_attendees_autocomplete_data')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::attendeesAutocompleteDataAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
