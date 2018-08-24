<?php

/* OroUIBundle:Default:EntityTitleBar.html.twig */
class __TwigTemplate_ef3c519faab84afa73fe201db4e924b90afa49dab6268b4a73264f94fbb32ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:EntityTitleBar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"layout-content\">
    <div class=\"clearfix\"><div class=\"navbar application-menu\">
            <div class=\"clearfix\">
                <div class=\"container\">
                    <div class=\" navbar-responsive-collapse\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"home\"><a href=\"#myhome\"><span>Home</span></a></li>
                            <li><a href=\"#mycrm\">My CRM</a></li>
                            <li><a href=\"#mypim\">My PIM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div></div>
    <div class=\"clearfix application-menu\">
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"myhome\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mycrm\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mypim\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard pim</a>
                    </li>
                    <li><a href=\"#\">Leads pim</a></li>
                    <li><a href=\"#\">Customers pim</a></li>
                    <li><a href=\"#\">Accounts pim</a></li>
                    <li><a href=\"#\">Forecasts pim</a></li>
                    <li><a href=\"#\">Reports pim</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        require(['jquery', 'jquery-ui', 'bootstrap'],
        function(\$) {
            \$(function () {
                \$('#myTab a:last').tab('show');
                \$('#myTab a').click(function (e) {
                    e.preventDefault();
                    \$(this).tab('show');
                });
                \$('a.popup-me').popover();
            });
        });
    </script>
    ";
        // line 71
        echo "    <div class=\"container-fluid\"><div class=\"navigation clearfix navbar-extra navbar-extra-right\">
        <div class=\"row\">
            <div class=\"pull-right\"><div class=\"pull-right\">

                <div class=\"pull-left customer-info-top-actions clearfix\">
                    <div class=\"btn-group\">
                        <button class=\"btn \" type=\"submit\"> Enabled</button>
                        <button class=\"btn disabled\" type=\"submit\"> Disabled</button>
                    </div>
                </div>
                <div class=\"pull-left customer-info-top-actions\">
                    <div class=\"btn-group\">
                        <a class=\"btn\" href=\"http://bap-dev.loc/app_dev.php/user\">Cancel</a>
                        <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-check fa-inverse hide-text\">Save </i>  Save</button>
                    </div>
                </div>
            </div>
            <div class=\"pull-right user-info-state customer-info-top-actions\">
                <div class=\"inline-decorate-container\">
                    <ul class=\"inline-decorate\">
                        <li>
                            Change to:
                            <div class=\"btn-group\">
                                <button class=\"btn\" data-toggle=\"dropdown\">Revision 1.5<span class=\"caret\"></span></button>
                                <a class=\"disable-filter\" href=\"#\"><i class=\"fa-close hide-text\">Close</i></a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li><a href=\"#\"> Revision 1.5</a></li>
                                    <li><a href=\"#\"> Revision 1.6</a></li>
                                    <li><a href=\"#\"> Revision 1.7</a></li>
                                    <li><a href=\"#\"> Revision 1.8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><i class=\"fa-declined\"></i>Declined</li>
                        <li class=\"status-enabled\"><i class=\"icon-status-enabled\"></i>Enabled</li>
                    </ul>
                </div>
            </div></div>
            <div class=\"pull-left\">
                <div class=\"customer-info well-small\">
                    <div class=\"visual\"><img alt=\"Holt, Ernest\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/test-user-img.png"), "html", null, true);
        echo "\"></div>
                    <div class=\"customer-content pull-left\">
                        <div class=\"clearfix-oro\">
                            <div class=\"sub-title\">User</div>
                            <span class=\"separator\">/</span>
                            <ul class=\"nav pull-left\">
                                <li class=\"dropdown\">
                                    <h1 data-toggle=\"dropdown\" class=\"dropdown-toggle user-name\">Doe, John <b class=\"caret\"></b></h1>
                                    <ul aria-labelledby=\"dropdownMenu\" role=\"menu\" class=\"dropdown-menu\">
                                        <li class=\"first\"><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_default");
        echo "\"><span class=\"light\">EN_US</span> <strong>Rosario Papadopoulos</strong></a></li>
                                        <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_default");
        echo "\"><span class=\"light\">ES_MX</span> <strong>Rosario Papadopoulos</strong></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <ul class=\"inline\">
                            <li>Created: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                            <li>Updated: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                            <li>Last logged in: N/A</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class=\"navbar navbar-static scrollspy-nav\" id=\"navbar-user\">
        <div class=\"navbar-inner\">
            <div style=\"width: auto;\" class=\"container-fluid\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"#scroll-main\">Overview</a></li>
                    <li><a href=\"#scroll-api\">API</a></li>
                    <li><a href=\"#scroll-attributes\">Additional data</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 149
        echo "    <div class=\"container-fluid\"><div class=\"navigation clearfix navbar-extra navbar-extra-right\">
        <div class=\"row\">
            <div class=\"pull-right\">
                <div class=\"pull-right\">
                    <div class=\"pull-left btn-group icons-holder\">
                        <a title=\"Delete user\" data-message=\"Are you sure you want to delete this user?\" data-id=\"108\" id=\"btn-remove-user\" class=\"btn icons-holder-text\" href=\"javascript: void(0);\"><i class=\"fa-trash-o hide-text\">Remove</i>Delete</a>
                    </div>
                    <div class=\"pull-left customer-info-top-actions\">
                        <div class=\"btn-group\">
                            <button class=\"btn \" type=\"submit\"> Enabled</button>
                            <button class=\"btn disabled\" type=\"submit\"> Disabled</button>
                        </div>
                    </div>
                    <div class=\"pull-left customer-info-top-actions\">
                        <div class=\"btn-group\">
                            <a class=\"btn\" href=\"http://bap-dev.loc/app_dev.php/user\">Cancel</a>
                            <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-check fa-inverse hide-text\">Save </i>  Save</button>
                        </div>
                    </div>
                </div>
                <div class=\"pull-right user-info-state\">
                    <div class=\"inline-decorate-container\">
                        <ul class=\"inline-decorate\">
                            <li><a href=\"/\">Revision 1.2</a></li>
                            <li><i class=\"fa-published\"></i> Published</li>
                            <li class=\"status-disabled\"><i class=\"icon-status-disabled\"></i>Disabled</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"pull-left\">
                <div class=\"customer-info well-small\">
                    <div class=\"visual\"><img alt=\"Holt, Ernest\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/test-user-img.png"), "html", null, true);
        echo "\"></div>
                    <div class=\"customer-content pull-left\">
                        <div class=\"clearfix-oro\">
                            <div class=\"sub-title\">User</div>
                            <span class=\"separator\">/</span>
                            <ul class=\"nav pull-left\">
                                <li class=\"dropdown\">
                                    <h1 data-toggle=\"dropdown\" class=\"dropdown-toggle user-name\">Doe, John <b class=\"caret\"></b></h1>
                                    <ul aria-labelledby=\"dropdownMenu\" role=\"menu\" class=\"dropdown-menu\">
                                        <li class=\"first\"><a href=\"/\">Rosario Papadopoulos</a></li>
                                        <li><a href=\"/\">Rosario Papadopoulos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <ul class=\"inline-extra\">
                            <li><span class=\"cb\">Created:</span> <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                            <li><span class=\"cb\">Updated:</span> <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                            <li><span class=\"cb\">Last logged in:</span> 3 days ago</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class=\"navbar navbar-static scrollspy-nav\" id=\"navbar-user\">
        <div class=\"navbar-inner\">
            <div style=\"width: auto;\" class=\"container-fluid\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"#scroll-main\">Overview</a></li>
                    <li><a href=\"#scroll-api\">API</a></li>
                    <li><a href=\"#scroll-attributes\">Additional data</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 219
        echo "
    <div class=\"container-fluid\"><div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-right\">
                    <div class=\"pull-right\">
                        <div class=\"pull-left btn-group icons-holder\">
                            <a title=\"Delete user\" data-message=\"Are you sure you want to delete this user?\" data-id=\"108\" id=\"btn-remove-user\" class=\"btn icons-holder-text\" href=\"javascript: void(0);\"><i class=\"fa-trash-o hide-text\">Remove</i>Delete</a>
                        </div>
                        <div class=\"pull-left customer-info-top-actions\">
                            <div class=\"btn-group\">
                                <button class=\"btn \" type=\"submit\"> Enabled</button>
                                <button class=\"btn disabled\" type=\"submit\"> Disabled</button>
                            </div>
                        </div>
                        <div class=\"pull-left customer-info-top-actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn\" href=\"http://bap-dev.loc/app_dev.php/user\">Cancel</a>
                                <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-check fa-inverse hide-text\">Save </i>  Save</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"pull-right user-info-state\">
                        <div class=\"inline-decorate-container\">
                            <ul class=\"inline-decorate\">
                                <li><a href=\"/\">Revision 1.2</a></li>
                                <li><i class=\"fa-draft\"></i> Draft</li>
                                <li class=\"status-enabled\"><span class=\"badge badge-enabled\"><i class=\"icon-status-enabled\"></i>Enabled</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"pull-left\">
                    <div class=\"customer-info well-small\">
                        <div class=\"visual\"><img alt=\"Holt, Ernest\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/test-user-img.png"), "html", null, true);
        echo "\"></div>
                        <div class=\"customer-content pull-left\">
                            <div class=\"clearfix-oro\">
                                <div class=\"sub-title\">User</div>
                                <span class=\"separator\">/</span>
                                <ul class=\"nav pull-left\">
                                    <li class=\"dropdown\">
                                        <h1 data-toggle=\"dropdown\" class=\"dropdown-toggle user-name\">Doe, John <b class=\"caret\"></b></h1>
                                        <ul aria-labelledby=\"dropdownMenu\" role=\"menu\" class=\"dropdown-menu\">
                                            <li class=\"first\"><a href=\"/\">Rosario Papadopoulos</a></li>
                                    <li><a href=\"/\">Rosario Papadopoulos</a></li>
                                </ul>
                                </li>
                                </ul>
                            </div>
                            <ul class=\"inline\">
                                <li>Created: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                                <li>Updated: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                                <li>Last logged in: N/A</li>
                                <li>Login count: 0</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"navbar navbar-static scrollspy-nav\" id=\"navbar-user\">
        <div class=\"navbar-inner\">
            <div style=\"width: auto;\" class=\"container-fluid\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"#scroll-main\">Overview</a></li>
                    <li><a href=\"#scroll-api\">API</a></li>
                    <li><a href=\"#scroll-attributes\">Additional data</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 291
        echo "
    <div class=\"container-fluid\"><div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-right\">
                    <div class=\"pull-right\">
                        <div class=\"pull-left btn-group icons-holder\">
                            <a title=\"Delete user\" data-message=\"Are you sure you want to delete this user?\" data-id=\"108\" id=\"btn-remove-user\" class=\"btn icons-holder-text\" href=\"javascript: void(0);\"><i class=\"fa-trash-o hide-text\">Remove</i>Delete</a>
                        </div>
                        <div class=\"pull-left customer-info-top-actions\">
                            <div class=\"btn-group\">
                                <button class=\"btn \" type=\"submit\"> Enabled</button>
                                <button class=\"btn disabled\" type=\"submit\"> Disabled</button>
                            </div>
                        </div>
                        <div class=\"pull-left customer-info-top-actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn\" href=\"http://bap-dev.loc/app_dev.php/user\">Cancel</a>
                                <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-check fa-inverse hide-text\">Save </i>  Save</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"pull-right user-info-state\">
                        <div class=\"inline-decorate-container\">
                            <ul class=\"inline-decorate\">
                                <li><a href=\"/\">Revision 1.2</a></li>
                                <li><i class=\"fa-draft\"></i> Draft</li>
                                <li class=\"status-disabled\"><span class=\"badge badge-disabled\"><i class=\"icon-status-disabled\"></i>Disabled</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"pull-left\">
                    <div class=\"customer-info well-small\">
                        <div class=\"visual\"><img alt=\"Holt, Ernest\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/test-user-img.png"), "html", null, true);
        echo "\"></div>
                        <div class=\"customer-content pull-left\">
                            <div class=\"clearfix-oro\">
                                <div class=\"sub-title\">User</div>
                                <span class=\"separator\">/</span>
                                <ul class=\"nav pull-left\">
                                    <li class=\"dropdown\">
                                        <h1 data-toggle=\"dropdown\" class=\"dropdown-toggle user-name\">Doe, John <b class=\"caret\"></b></h1>
                                        <ul aria-labelledby=\"dropdownMenu\" role=\"menu\" class=\"dropdown-menu\">
                                            <li class=\"first\"><a href=\"/\">Rosario Papadopoulos</a></li>
                                    <li><a href=\"/\">Rosario Papadopoulos</a></li>
                                </ul>
                                </li>
                                </ul>
                            </div>
                            <ul class=\"inline\">
                                <li>Created: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                                <li>Updated: <time datetime=\"2013-04-26T15:38:43+0300\">4/26/13 3:38 PM</time></li>
                                <li>Last logged in: N/A</li>
                                <li>Login count: 0</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"navbar navbar-static scrollspy-nav\" id=\"navbar-user\">
        <div class=\"navbar-inner\">
            <div style=\"width: auto;\" class=\"container-fluid\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"#scroll-main\">Overview</a></li>
                    <li><a href=\"#scroll-api\">API</a></li>
                    <li><a href=\"#scroll-attributes\">Additional data</a></li>
                </ul>
            </div>
        </div>
    </div>

    </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:EntityTitleBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 324,  338 => 291,  297 => 252,  262 => 219,  222 => 181,  188 => 149,  158 => 121,  154 => 120,  142 => 111,  100 => 71,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:EntityTitleBar.html.twig", "");
    }
}
