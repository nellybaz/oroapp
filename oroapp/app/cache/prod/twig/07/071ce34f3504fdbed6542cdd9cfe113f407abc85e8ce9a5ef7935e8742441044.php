<?php

/* OroDistributionBundle::base_inner.html.twig */
class __TwigTemplate_011de6bc483b11e511dd7ed839cc02a5d0d2fb957a37d83a5a66325c9a170963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base.html.twig", "OroDistributionBundle::base_inner.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'page' => array($this, 'block_page'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDistributionBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orodistribution/js/loader.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orodistribution/js/util.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orodistribution/js/package.manager.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npmassets/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npmassets/bootbox/bootbox.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">

            \$(function () {
                \$(document).ajaxError(function (event, jqxhr, settings) {
                    loader.displayOriginalElement();
                    if (jqxhr.status === 500) {
                        var message;
                        if (settings.url.substr(0, Urls.install.length) === Urls.install) {
                            message = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.ajax_500error", array("{{ action }}" => twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.install")))), "html", null, true);
        // line 23
        echo "\";
                        } else if (settings.url.substr(0, Urls.update.length) === Urls.update) {
                            message = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.ajax_500error", array("{{ action }}" => twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.update")))), "html", null, true);
        // line 27
        echo "\";
                        } else {
                            message = \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.ajax_500error", array("{{ action }}" => twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.perform_the_action_to")))), "html", null, true);
        // line 31
        echo "\";
                        }
                        util.error(message);
                    } else {
                        util.error(\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.ajax_error"), "html", null, true);
        echo "\");
                    }
                });

                var Urls = {
                    install: \"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_install");
        echo "\",
                    update: \"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_update");
        echo "\",
                    available: \"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_listavailable");
        echo "\",
                    installed: \"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_listinstalled");
        echo "\"
                };

                var loader = new Loader(\$('.ajax-loading'));
                var util = new Util(\$('#alerts'));
                var pm = new PackageManager(Urls, util);
                var ajaxButtons = \$('.ajax');
                ajaxButtons.on('click', function () {
                    var me = \$(this);
                    if (me.hasClass('disabled')) {
                        return;
                    }

                    var action = me.data('action');
                    var params = me.data('params');
                    var actionParams = {};
                    for (var key in params) {
                        if (params.hasOwnProperty(key)) {
                            if (params[key].indexOf('#') === 0) {
                                var \$el = \$(params[key]);
                                var val = \$el.val();
                                if (\$el.attr('required') && (!val || /^\\s*\$/.test(val))) {
                                    util.error(\$el.data('required-message'));
                                    return;
                                }
                                actionParams[key] = val;
                            } else {
                                actionParams[key] = params[key];
                            }
                        }
                    }

                    ajaxButtons.addClass('disabled');
                    loader.setClickedElement(me);
                    loader.displayLoadingProgress();
                    pm[action](actionParams, function () {
                        loader.displayOriginalElement();
                        ajaxButtons.removeClass('disabled');
                    });

                    return false;
                });

                util.displayCookieMessage();
            });
        </script>
    ";
    }

    // line 91
    public function block_page($context, array $blocks = array())
    {
        // line 92
        echo "        <div class=\"wrapper\">
            <div id=\"alerts\">
                ";
        // line 94
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 95
            echo "                    <div class=\"alert fade in alert-error\">
                        <i class=\"fa-error\"></i>
                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.unexpected_error"), "html", null, true);
            echo ":
                        <ul>
                            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 100
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                        </ul>
                    </div>
                ";
        }
        // line 105
        echo "                ";
        if ((twig_length_filter($this->env, ($context["notWritableSystemPaths"] ?? null)) > 0)) {
            // line 106
            echo "                    <div class=\"alert fade in alert-notice\">
                        <i class=\"fa-info-circle\"></i>
                        ";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.not_writable"), "html", null, true);
            echo ":
                        <ul>
                            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notWritableSystemPaths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 111
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        </ul>
                    </div>

                ";
        }
        // line 117
        echo "            </div>
            <div class=\"content\">
                <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroinstaller/img/icon/wait.png"), "html", null, true);
        echo "\" alt=\"\" class=\"ajax-loading\"/>

                <div class=\"title clearfix\">
                    <h2 class=\"pull-left\">";
        // line 122
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

                    <div class=\"menu pull-right \">
                        ";
        // line 125
        $this->displayBlock('menu', $context, $blocks);
        // line 126
        echo "                    </div>
                </div>
                <div class=\"alert alert-warning\">
                    ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.settings.recommendation");
        echo "
                </div>
                <div class=\"body\">
                    ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 125
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle::base_inner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 132,  272 => 125,  265 => 133,  263 => 132,  257 => 129,  252 => 126,  250 => 125,  244 => 122,  238 => 119,  234 => 117,  228 => 113,  219 => 111,  215 => 110,  210 => 108,  206 => 106,  203 => 105,  198 => 102,  189 => 100,  185 => 99,  180 => 97,  176 => 95,  174 => 94,  170 => 92,  167 => 91,  116 => 43,  112 => 42,  108 => 41,  104 => 40,  96 => 35,  90 => 31,  88 => 29,  84 => 27,  82 => 25,  78 => 23,  76 => 21,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle::base_inner.html.twig", "");
    }
}
