<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_4dbfa66fe6d531904209f2407d9a1ca8855853f9a97150f11558f34ec9f3f563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default:index.html.twig", 200);
        // line 200
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'head' => array($this, 'block_head'),
                'head_style' => array($this, 'block_head_style'),
                'script' => array($this, 'block_script'),
                'scripts_before' => array($this, 'block_scripts_before'),
                'application' => array($this, 'block_application'),
                'head_script' => array($this, 'block_head_script'),
                'bodyClass' => array($this, 'block_bodyClass'),
                'header' => array($this, 'block_header'),
                'left_panel' => array($this, 'block_left_panel'),
                'main' => array($this, 'block_main'),
                'before_content' => array($this, 'block_before_content'),
                'messages' => array($this, 'block_messages'),
                'breadcrumb' => array($this, 'block_breadcrumb'),
                'pin_button' => array($this, 'block_pin_button'),
                'before_content_addition' => array($this, 'block_before_content_addition'),
                'page_container' => array($this, 'block_page_container'),
                'content' => array($this, 'block_content'),
                'right_panel' => array($this, 'block_right_panel'),
                'footer' => array($this, 'block_footer'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !$this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\HashNavExtension')->checkIsHashNavigation()) {
            // line 2
            echo "    <!DOCTYPE html>
    <html class=\"";
            // line 3
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version\">
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 47
            echo "    </head>
    <body class=\"";
            // line 48
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version lang-";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getLanguage(), 0, 2), "html", null, true);
            echo " ";
            if ($this->getAttribute(($context["app"] ?? null), "debug", array())) {
                echo "dev-mode ";
            }
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 49
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("after_body_start", $context)) ? (_twig_default_filter(($context["after_body_start"] ?? null), "after_body_start")) : ("after_body_start")), array());
            // line 50
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Loading...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 58
            $this->displayBlock('header', $context, $blocks);
            // line 77
            echo "            ";
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
                // line 78
                echo "                ";
                $this->displayBlock('left_panel', $context, $blocks);
                // line 83
                echo "            ";
            }
            // line 84
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 178
            echo "            ";
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
                // line 179
                echo "                ";
                $this->displayBlock('right_panel', $context, $blocks);
                // line 184
                echo "            ";
            }
            // line 185
            echo "            ";
            $this->displayBlock('footer', $context, $blocks);
            // line 191
            echo "        </div>
    </div>
    ";
            // line 193
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("before_body_end", $context)) ? (_twig_default_filter(($context["before_body_end"] ?? null), "before_body_end")) : ("before_body_end")), array());
            // line 194
            echo "    </body>
    </html>
";
        } else {
            // line 197
            echo "    ";
            // line 198
            echo "    ";
            $context["title"] = $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render();
            // line 199
            echo "    ";
            // line 200
            echo "    ";
            // line 201
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "OroUIBundle:Default:index.html.twig", 201)->display(array_merge($context, array("data" => array("scripts" =>             $this->renderBlock("head_script", $context, $blocks), "content" =>             $this->renderBlock("page_container", $context, $blocks), "breadcrumb" => twig_trim_filter(            $this->renderBlock("breadcrumb", $context, $blocks)), "beforeContentAddition" =>             $this->renderBlock("before_content_addition", $context, $blocks)))));
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no";
        // line 8
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            echo ", viewport-fit=cover";
        }
        echo "\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            ";
        // line 13
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 46
        echo "        ";
    }

    // line 13
    public function block_head_style($context, array $blocks = array())
    {
        // line 14
        echo "                ";
        if ($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeIcon()) {
            // line 15
            echo "                    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeIcon()), "html", null, true);
            echo "\" />
                ";
        }
        // line 17
        echo "               ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("head_style", $context)) ? (_twig_default_filter(($context["head_style"] ?? null), "head_style")) : ("head_style")), array());
        // line 18
        echo "            ";
    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        // line 21
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 24
        echo "                ";
        ob_start();
        // line 25
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter(($context["requirejs_config_extend"] ?? null), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUIBundle:Default:index.html.twig", 27)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 28
($context["app"] ?? null), "debug", array()), "config_extend" =>         // line 29
($context["requirejs_config_extend"] ?? null))));
        // line 31
        echo "                ";
        $this->displayBlock('application', $context, $blocks);
        // line 36
        echo "                <script type=\"text/javascript\">
                    require(['orouser/js/init-user', 'oroui/js/widget-manager']);
                ";
        // line 38
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 39
            echo "                    require(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                ";
        }
        // line 41
        echo "                </script>
                ";
        // line 42
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_after", $context)) ? (_twig_default_filter(($context["scripts_after"] ?? null), "scripts_after")) : ("scripts_after")), array());
        // line 43
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 45
        echo "            ";
    }

    // line 21
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_before", $context)) ? (_twig_default_filter(($context["scripts_before"] ?? null), "scripts_before")) : ("scripts_before")), array());
        // line 23
        echo "                ";
    }

    // line 31
    public function block_application($context, array $blocks = array())
    {
        // line 32
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/app']);
                </script>
                ";
    }

    // line 43
    public function block_head_script($context, array $blocks = array())
    {
        // line 44
        echo "                ";
    }

    // line 48
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 60
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("before_navigation", $context)) ? (_twig_default_filter(($context["before_navigation"] ?? null), "before_navigation")) : ("before_navigation")), array());
        // line 61
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 63
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("header_logo", $context)) ? (_twig_default_filter(($context["header_logo"] ?? null), "header_logo")) : ("header_logo")), array());
        // line 64
        echo "                            <ul class=\"nav pull-right user-menu\">
                                ";
        // line 65
        $this->displayBlock("user_menu", $context, $blocks);
        echo "
                            </ul>
                            <div class=\"nav top-search shortcuts\" data-layout=\"separate\">
                                ";
        // line 68
        $this->displayBlock("navbar", $context, $blocks);
        echo "
                            </div>
                            ";
        // line 70
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("pin_tabs_list", $context)) ? (_twig_default_filter(($context["pin_tabs_list"] ?? null), "pin_tabs_list")) : ("pin_tabs_list")), array());
        // line 71
        echo "                        </div>
                    </div>
                    ";
        // line 73
        $this->loadTemplate("OroUIBundle:Default/navbar:top.html.twig", "OroUIBundle:Default:index.html.twig", 73)->display($context);
        // line 74
        echo "                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("after_navigation", $context)) ? (_twig_default_filter(($context["after_navigation"] ?? null), "after_navigation")) : ("after_navigation")), array());
        // line 75
        echo "                </header>
            ";
    }

    // line 78
    public function block_left_panel($context, array $blocks = array())
    {
        // line 79
        echo "                    <div id=\"left-panel\" data-layout=\"separate\">
                        ";
        // line 80
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("left_panel", $context)) ? (_twig_default_filter(($context["left_panel"] ?? null), "left_panel")) : ("left_panel")), array("placement" => "left"));
        // line 81
        echo "                    </div>
                ";
    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        // line 85
        echo "                <div id=\"main\">
                    ";
        // line 86
        $this->displayBlock('before_content', $context, $blocks);
        // line 127
        echo "                    <div id=\"container\"";
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            echo " class=\"scrollable-container\"";
        }
        echo " data-layout=\"separate\">
                        ";
        // line 128
        $this->displayBlock('page_container', $context, $blocks);
        // line 175
        echo "                    </div>
                </div>
            ";
    }

    // line 86
    public function block_before_content($context, array $blocks = array())
    {
        // line 87
        echo "                    <div id=\"flash-messages\">
                        ";
        // line 88
        $this->displayBlock('messages', $context, $blocks);
        // line 110
        echo "                    </div>
                    <div class=\"breadcrumb-pin\">
                        ";
        // line 112
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_before", $context)) ? (_twig_default_filter(($context["breadcrumb_pin_before"] ?? null), "breadcrumb_pin_before")) : ("breadcrumb_pin_before")), array());
        // line 113
        echo "                        <div id=\"breadcrumb\">
                            ";
        // line 114
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 117
        echo "                        </div>
                        ";
        // line 118
        $this->displayBlock('pin_button', $context, $blocks);
        // line 121
        echo "                        <div id=\"before-content-addition\" data-layout=\"separate\">
                            ";
        // line 122
        $this->displayBlock('before_content_addition', $context, $blocks);
        // line 123
        echo "                        </div>
                        ";
        // line 124
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_after", $context)) ? (_twig_default_filter(($context["breadcrumb_pin_after"] ?? null), "breadcrumb_pin_after")) : ("breadcrumb_pin_after")), array());
        // line 125
        echo "                    </div>
                    ";
    }

    // line 88
    public function block_messages($context, array $blocks = array())
    {
        // line 89
        echo "                            <div class=\"flash-messages-frame\">
                                <div class=\"flash-messages-holder\"></div>
                            </div>
                            <script type=\"text/javascript\">
                                require(['jquery', 'oroui/js/messenger'],
                                        function(\$, messenger, template) {
                                            messenger.setup({
                                                container: '#flash-messages .flash-messages-holder'
                                            });
                                            ";
        // line 98
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 99
            echo "                                            \$(function() {
                                                ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 101
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 102
                    echo "                                                messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]));
                    echo ");
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                                            });
                                            ";
        }
        // line 107
        echo "                                        });
                            </script>
                        ";
    }

    // line 114
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 115
        echo "                                ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb", $context)) ? (_twig_default_filter(($context["breadcrumb"] ?? null), "breadcrumb")) : ("breadcrumb")), array());
        // line 116
        echo "                            ";
    }

    // line 118
    public function block_pin_button($context, array $blocks = array())
    {
        // line 119
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("pin_button", $context)) ? (_twig_default_filter(($context["pin_button"] ?? null), "pin_button")) : ("pin_button")), array());
        // line 120
        echo "                        ";
    }

    // line 122
    public function block_before_content_addition($context, array $blocks = array())
    {
    }

    // line 128
    public function block_page_container($context, array $blocks = array())
    {
        // line 129
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("content_before", $context)) ? (_twig_default_filter(($context["content_before"] ?? null), "content_before")) : ("content_before")), array());
        // line 130
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("content_after", $context)) ? (_twig_default_filter(($context["content_after"] ?? null), "content_after")) : ("content_after")), array());
        // line 174
        echo "                        ";
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        // line 131
        echo "                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_1column");
        echo "\">1 column </a></li>
                                                <li><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_1column_toolbar");
        echo "\">1 column with toolbar</a></li>
                                                <li><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_1column_menu");
        echo "\">1 column with menu</a></li>
                                                <li><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_grid_page");
        echo "\">grid page</a></li>
                                                <li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_grid_without_bar_page");
        echo "\">grid page without bar</a></li>
                                                <li><a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_2columns_left");
        echo "\">2 columns - left</a></li>
                                                <li><a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_2columns_right");
        echo "\">2 columns - right</a></li>
                                                <li><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_3columns");
        echo "\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_forgot_password");
        echo "\">Forgot password</a></li>
                                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_login");
        echo "\">Login page</a></li>
                                                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_registration");
        echo "\">Registration page</a></li>
                                                <li><a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_404");
        echo "\">404</a></li>
                                                <li><a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_503");
        echo "\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_form_elements");
        echo "\">Form elements</a></li>
                                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_form_horizontal");
        echo "\">Form Horizontal</a></li>
                                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_messages");
        echo "\">System messages</a></li>
                                                <li><a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_title_bar");
        echo "\">Entity Title Bar</a></li>
                                                <li><a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_buttons");
        echo "\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_tables");
        echo "\">Tables</a></li>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_general_elements");
        echo "\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ui_dialog_styled");
        echo "\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            ";
    }

    // line 179
    public function block_right_panel($context, array $blocks = array())
    {
        // line 180
        echo "                    <div id=\"right-panel\">
                        ";
        // line 181
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("right_panel", $context)) ? (_twig_default_filter(($context["right_panel"] ?? null), "right_panel")) : ("right_panel")), array("placement" => "right"));
        // line 182
        echo "                    </div>
                ";
    }

    // line 185
    public function block_footer($context, array $blocks = array())
    {
        // line 186
        echo "                <div id=\"dialog-extend-fixed-container\" class=\"ui-dialog-minimize-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                    ";
        // line 188
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("footer_inner", $context)) ? (_twig_default_filter(($context["footer_inner"] ?? null), "footer_inner")) : ("footer_inner")), array());
        // line 189
        echo "                </footer>
            ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 189,  623 => 188,  619 => 186,  616 => 185,  611 => 182,  609 => 181,  606 => 180,  603 => 179,  593 => 167,  586 => 163,  582 => 162,  577 => 160,  573 => 159,  569 => 158,  565 => 157,  561 => 156,  554 => 152,  550 => 151,  546 => 150,  542 => 149,  538 => 148,  531 => 144,  527 => 143,  523 => 142,  519 => 141,  515 => 140,  511 => 139,  507 => 138,  503 => 137,  495 => 131,  492 => 130,  488 => 174,  485 => 173,  482 => 130,  479 => 129,  476 => 128,  471 => 122,  467 => 120,  464 => 119,  461 => 118,  457 => 116,  454 => 115,  451 => 114,  445 => 107,  441 => 105,  435 => 104,  424 => 102,  419 => 101,  415 => 100,  412 => 99,  410 => 98,  399 => 89,  396 => 88,  391 => 125,  389 => 124,  386 => 123,  384 => 122,  381 => 121,  379 => 118,  376 => 117,  374 => 114,  371 => 113,  369 => 112,  365 => 110,  363 => 88,  360 => 87,  357 => 86,  351 => 175,  349 => 128,  342 => 127,  340 => 86,  337 => 85,  334 => 84,  329 => 81,  327 => 80,  324 => 79,  321 => 78,  316 => 75,  313 => 74,  311 => 73,  307 => 71,  305 => 70,  300 => 68,  294 => 65,  291 => 64,  289 => 63,  285 => 61,  283 => 60,  280 => 59,  277 => 58,  272 => 48,  268 => 44,  265 => 43,  258 => 32,  255 => 31,  251 => 23,  248 => 22,  245 => 21,  241 => 45,  238 => 43,  236 => 42,  233 => 41,  229 => 39,  227 => 38,  223 => 36,  220 => 31,  218 => 29,  217 => 28,  215 => 27,  212 => 25,  209 => 24,  206 => 21,  203 => 20,  199 => 18,  196 => 17,  190 => 15,  187 => 14,  184 => 13,  180 => 46,  178 => 20,  175 => 19,  173 => 13,  163 => 8,  159 => 7,  154 => 6,  151 => 5,  145 => 201,  143 => 200,  141 => 199,  138 => 198,  136 => 197,  131 => 194,  129 => 193,  125 => 191,  122 => 185,  119 => 184,  116 => 179,  113 => 178,  110 => 84,  107 => 83,  104 => 78,  101 => 77,  99 => 58,  89 => 51,  86 => 50,  84 => 49,  69 => 48,  66 => 47,  64 => 5,  55 => 3,  52 => 2,  50 => 1,  14 => 200,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:index.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/index.html.twig");
    }
}
