<?php

/* OroUIBundle:Default:RecordEdit.html.twig */
class __TwigTemplate_a77ffb77b9cb5187f577c7e478d6bdae099a5150932bff49f70bef2b72308977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:RecordEdit.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'pin_bar' => array($this, 'block_pin_bar'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/bootstrap/docs/assets/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div>
    ";
        // line 8
        $this->displayBlock('right_panel', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('left_panel', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('pin_bar', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 457
        echo "    </div>
";
    }

    // line 8
    public function block_right_panel($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    // line 12
    public function block_left_panel($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
    }

    // line 15
    public function block_pin_bar($context, array $blocks = array())
    {
        // line 16
        echo "        <div style=\"overflow: hidden;\">
        ";
        // line 17
        $this->displayParentBlock("pin_bar", $context, $blocks);
        echo "
        </div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        <div class=\"layout-content\">
            <div class=\"clearfix-oro\"><div class=\"navbar application-menu\">
                    <div class=\"clearfix-oro\">
                        <div class=\"\">
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
            <div class=\"clearfix-oro application-menu\">
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
                require(['jquery'],
                function(\$){
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
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"top-action-box\">
                    <div class=\"btn-group icons-holder icons-small\">
                        <button class=\"btn\"><i class=\"fa-window-minimize hide-text\">minimaze tab</i></button>
                        <button class=\"btn\"><i class=\"fa-arrows-alt hide-text\">full screen</i></button>
                        <button class=\"btn\"><i class=\"fa-close hide-text\">Close</i></button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"pull-right\">
                        <div class=\"btn-group icons-holder\">
                            <button class=\"btn\"><i class=\"fa-pencil-square-o hide-text\">edit</i></button>
                            <button class=\"btn\"><i class=\"fa-files-o hide-text\">copy</i></button>
                            <button class=\"btn\"><i class=\"fa-trash-o hide-text\">remove</i></button>
                        </div>
                        <div class=\"btn-group\">
                            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Export:<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu pull-right\">
                                <li><a href=\"#\">Export</a></li>
                                <li><a href=\"#\">Inport</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"span9 \">
                       <div class=\"customer-info well-small\">
                           <div class=\"visual\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/info-user.png"), "html", null, true);
        echo "\" alt=\"user avatar\"/></div>
                           <div class=\"customer-content\">
                               <div class=\"sub-title\">Customers</div>
                               <h1 class=\"user-name\">Anna Griffin</h1>
                               <ul class=\"inline\">
                                   <li>Last logged in 3 days ago</li>
                                   <li>Lifetime Sales: \$3004.92</li>
                                   <li>Retail Customer</li>
                               </ul>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"layout-content\">
                <div id=\"navbarExample\" class=\"navbar navbar-static scrollspy-nav\">
                    <div class=\"navbar-inner\">
                        <div class=\"container-fluid\" style=\"width: auto;\">
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"#scroll-a1\">Overview</a></li>
                                <li class=\"\"><a href=\"#scroll-a2\">Cases</a></li>
                                <li class=\"\"><a href=\"#scroll-a3\">Sales History</a></li>
                                <li class=\"\"><a href=\"#scroll-a4\">Activity History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix-oro\">
                    <form action=\"#\">
                    <div class=\"customer-info-actions container-fluid well-small\">
                        <div class=\"pull-right\">
                            <button type=\"button\" class=\"btn\">Cancel</button>
                            <button type=\"button\" class=\"btn btn-primary\">Save</button>
                        </div>
                    </div>
                    <div data-spy=\"scroll\" data-target=\"#navbarExample\" data-offset=\"50\" class=\"scrollspy container-fluid\">
                        <h4 id=\"scroll-a1\" class=\"scrollspy-title \">Overview</h4>
                        <div class=\"row-fluid\">
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label for=\"selectAccountName\" class=\"control-label\">User name</label>
                                    <div class=\"controls\">
                                        <select class=\"input-xlarge\" id=\"selectAccountName\">
                                            <option>Oro Inc</option>
                                            <option>Oro Inc2</option>
                                            <option>Oro Inc3</option>
                                            <option>Oro Inc4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputTitle\" class=\"control-label\">Title:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"inputTitle\" id=\"inputTitle\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputDepartment\" class=\"control-label\">Department:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" id=\"inputDepartment\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"selectAccountName\" class=\"control-label\">Type:</label>
                                    <div class=\"controls\">
                                        <select class=\"input-xlarge\" id=\"selectAccountName\">
                                            <option>Retail Customer</option>
                                            <option>Retail Customer2</option>
                                            <option>Retail Customer3</option>
                                            <option>Retail Customer4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputBirthdate\" class=\"control-label\">Birthdate:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"1975/12/25\" id=\"inputBirthdate\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLanguage\" class=\"control-label\">Language:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"English\" id=\"inputLanguage\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputTwitter\" class=\"control-label\">Twitter:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputTwitter\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLinkedIn\" class=\"control-label\">LinkedIn:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputLinkedIn\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputFacebook\" class=\"control-label\">Facebook:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputFacebook\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <div class=\"controls\">
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\"> Remember me
                                        </label>
                                        <button class=\"btn\" type=\"submit\">Sign in</button>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Phone:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Work <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Home <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Call <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Email:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Work <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Home <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Address:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <textarea class=\"input-xlarge\">1234 Dream Lane Portland, OR 97236 United States</textarea>
                                        </div>
                                        <div class=\"row-oro\">
                                            <textarea class=\"input-xlarge\">1234 Dream Lane Portland, OR 97236 United States</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <h4 id=\"scroll-a2\" class=\"scrollspy-title \">Cases</h4>
                        <div class=\"row-fluid\">
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">User name</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">Oro Inc</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Title:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">VP of Global Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Department:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">Global Services</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Type:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">Active Prospect</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Birthdate:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">01/01/1977</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLanguage\" class=\"control-label\">Language:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">English</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Twitter:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLinkedIn\" class=\"control-label\">LinkedIn:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Facebook:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Phone:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                            503-123-1234   <strong> Work</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                            503-123-1234   <strong> Home</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                503-123-1239   <strong> Cell</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Email:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                anna.griffin4321@gmail.com   <strong> Work</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                anna.griffin4321@dreamlane123.com   <strong> Work</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Address:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <p>1234 Dream Lane <br />Portland, OR 97236<br />United States</p>
                                        </div>
                                        <div class=\"row-oro\">
                                            <p>1234 Dream Lane <br />Portland, OR 97236<br />United States</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <h4 id=\"scroll-a3\" class=\"scrollspy-title \">Sales History</h4>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>In accumsan cursus erat ut tempor. Cras cursus lorem eu neque posuere eget rhoncus elit egestas. Suspendisse dictum augue nec mi malesuada feugiat. Morbi et sapien vitae nunc molestie tempus quis et purus. Vivamus vehicula velit ut nunc posuere suscipit. Etiam elementum volutpat ante, in facilisis velit egestas non. Integer ultricies vestibulum lacus, vitae vehicula urna ultricies et. Aliquam facilisis ipsum id enim rhoncus nec viverra nibh scelerisque. Vivamus auctor varius nisl nec fermentum. Morbi est est, suscipit eget hendrerit et, tincidunt tincidunt nisl. Integer eu nunc velit, euismod dictum tellus. Curabitur pulvinar consectetur feugiat. Aliquam metus mi, pretium a laoreet et, faucibus a purus. </p>
                        <h4 id=\"scroll-a4\" class=\"scrollspy-title \">Activity History</h4>
                        <p>Donec eu metus dolor, et eleifend lacus. Vivamus malesuada sodales purus, at ultrices lectus eleifend ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur sollicitudin ornare ornare. In ac purus eget enim varius feugiat vitae ac nulla. Donec bibendum aliquam auctor. Sed ultrices volutpat felis vel accumsan. Nullam tincidunt nibh tortor. </p>
                        <p>Nullam bibendum turpis vitae risus tempor tincidunt. Maecenas posuere, erat sed mattis dignissim, massa massa vestibulum dolor, et tristique est dolor sed est. Duis rhoncus augue eget metus auctor a ultricies nisi blandit. Duis sem ipsum, pretium in varius sit amet, dignissim sit amet erat. Sed vulputate risus nec ipsum ultrices a aliquam ligula lobortis. Suspendisse hendrerit sollicitudin tellus, in varius ipsum consequat id. Suspendisse potenti. Integer a enim ac erat volutpat imperdiet eget in ante. Nulla lacus arcu, dignissim in fermentum vel, ultrices vitae urna. Proin sed convallis urna. Nam ornare metus nec ipsum ornare ut dignissim dolor iaculis. Nullam vulputate scelerisque ligula quis blandit. Proin scelerisque, purus nec aliquam ultrices, lorem tortor vulputate ante, at fringilla ligula nisl eu est. Praesent eleifend semper metus, non semper leo scelerisque a. Suspendisse eget odio quis justo iaculis cursus. Donec placerat rutrum arcu non dignissim. </p>
                    </div>
                    </form>
                </div>
            </div>
       </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:RecordEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 113,  103 => 21,  100 => 20,  93 => 17,  90 => 16,  87 => 15,  82 => 13,  79 => 12,  74 => 9,  71 => 8,  66 => 457,  63 => 20,  60 => 15,  58 => 12,  55 => 11,  53 => 8,  50 => 7,  47 => 6,  41 => 4,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:RecordEdit.html.twig", "");
    }
}
