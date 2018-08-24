<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_28ae64e1925def0d195af8063aa69b310e5fb229a06fa3cc870a35273064db1c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:index.html.twig"));

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
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array())) {
                echo "dev-mode ";
            }
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 49
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("after_body_start", $context)) ? (_twig_default_filter(($context["after_body_start"] ?? $this->getContext($context, "after_body_start")), "after_body_start")) : ("after_body_start")), array());
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
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("before_body_end", $context)) ? (_twig_default_filter(($context["before_body_end"] ?? $this->getContext($context, "before_body_end")), "before_body_end")) : ("before_body_end")), array());
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("head_style", $context)) ? (_twig_default_filter(($context["head_style"] ?? $this->getContext($context, "head_style")), "head_style")) : ("head_style")), array());
        // line 18
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 21
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 24
        echo "                ";
        ob_start();
        // line 25
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter(($context["requirejs_config_extend"] ?? $this->getContext($context, "requirejs_config_extend")), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUIBundle:Default:index.html.twig", 27)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "debug", array()), "config_extend" =>         // line 29
($context["requirejs_config_extend"] ?? $this->getContext($context, "requirejs_config_extend")))));
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_after", $context)) ? (_twig_default_filter(($context["scripts_after"] ?? $this->getContext($context, "scripts_after")), "scripts_after")) : ("scripts_after")), array());
        // line 43
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 45
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_scripts_before($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_before"));

        // line 22
        echo "                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_before", $context)) ? (_twig_default_filter(($context["scripts_before"] ?? $this->getContext($context, "scripts_before")), "scripts_before")) : ("scripts_before")), array());
        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_application($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "application"));

        // line 32
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/app']);
                </script>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 44
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 59
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 60
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("before_navigation", $context)) ? (_twig_default_filter(($context["before_navigation"] ?? $this->getContext($context, "before_navigation")), "before_navigation")) : ("before_navigation")), array());
        // line 61
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 63
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("header_logo", $context)) ? (_twig_default_filter(($context["header_logo"] ?? $this->getContext($context, "header_logo")), "header_logo")) : ("header_logo")), array());
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("pin_tabs_list", $context)) ? (_twig_default_filter(($context["pin_tabs_list"] ?? $this->getContext($context, "pin_tabs_list")), "pin_tabs_list")) : ("pin_tabs_list")), array());
        // line 71
        echo "                        </div>
                    </div>
                    ";
        // line 73
        $this->loadTemplate("OroUIBundle:Default/navbar:top.html.twig", "OroUIBundle:Default:index.html.twig", 73)->display($context);
        // line 74
        echo "                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("after_navigation", $context)) ? (_twig_default_filter(($context["after_navigation"] ?? $this->getContext($context, "after_navigation")), "after_navigation")) : ("after_navigation")), array());
        // line 75
        echo "                </header>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_left_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_panel"));

        // line 79
        echo "                    <div id=\"left-panel\" data-layout=\"separate\">
                        ";
        // line 80
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("left_panel", $context)) ? (_twig_default_filter(($context["left_panel"] ?? $this->getContext($context, "left_panel")), "left_panel")) : ("left_panel")), array("placement" => "left"));
        // line 81
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_before_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content"));

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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_before", $context)) ? (_twig_default_filter(($context["breadcrumb_pin_before"] ?? $this->getContext($context, "breadcrumb_pin_before")), "breadcrumb_pin_before")) : ("breadcrumb_pin_before")), array());
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_after", $context)) ? (_twig_default_filter(($context["breadcrumb_pin_after"] ?? $this->getContext($context, "breadcrumb_pin_after")), "breadcrumb_pin_after")) : ("breadcrumb_pin_after")), array());
        // line 125
        echo "                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

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
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 99
            echo "                                            \$(function() {
                                                ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 115
        echo "                                ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("breadcrumb", $context)) ? (_twig_default_filter(($context["breadcrumb"] ?? $this->getContext($context, "breadcrumb")), "breadcrumb")) : ("breadcrumb")), array());
        // line 116
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 118
    public function block_pin_button($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_button"));

        // line 119
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("pin_button", $context)) ? (_twig_default_filter(($context["pin_button"] ?? $this->getContext($context, "pin_button")), "pin_button")) : ("pin_button")), array());
        // line 120
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_before_content_addition($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content_addition"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_page_container($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_container"));

        // line 129
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("content_before", $context)) ? (_twig_default_filter(($context["content_before"] ?? $this->getContext($context, "content_before")), "content_before")) : ("content_before")), array());
        // line 130
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("content_after", $context)) ? (_twig_default_filter(($context["content_after"] ?? $this->getContext($context, "content_after")), "content_after")) : ("content_after")), array());
        // line 174
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 179
    public function block_right_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_panel"));

        // line 180
        echo "                    <div id=\"right-panel\">
                        ";
        // line 181
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("right_panel", $context)) ? (_twig_default_filter(($context["right_panel"] ?? $this->getContext($context, "right_panel")), "right_panel")) : ("right_panel")), array("placement" => "right"));
        // line 182
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 185
    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 186
        echo "                <div id=\"dialog-extend-fixed-container\" class=\"ui-dialog-minimize-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                    ";
        // line 188
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("footer_inner", $context)) ? (_twig_default_filter(($context["footer_inner"] ?? $this->getContext($context, "footer_inner")), "footer_inner")) : ("footer_inner")), array());
        // line 189
        echo "                </footer>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  742 => 189,  740 => 188,  736 => 186,  730 => 185,  722 => 182,  720 => 181,  717 => 180,  711 => 179,  698 => 167,  691 => 163,  687 => 162,  682 => 160,  678 => 159,  674 => 158,  670 => 157,  666 => 156,  659 => 152,  655 => 151,  651 => 150,  647 => 149,  643 => 148,  636 => 144,  632 => 143,  628 => 142,  624 => 141,  620 => 140,  616 => 139,  612 => 138,  608 => 137,  600 => 131,  594 => 130,  587 => 174,  584 => 173,  581 => 130,  578 => 129,  572 => 128,  561 => 122,  554 => 120,  551 => 119,  545 => 118,  538 => 116,  535 => 115,  529 => 114,  520 => 107,  516 => 105,  510 => 104,  499 => 102,  494 => 101,  490 => 100,  487 => 99,  485 => 98,  474 => 89,  468 => 88,  460 => 125,  458 => 124,  455 => 123,  453 => 122,  450 => 121,  448 => 118,  445 => 117,  443 => 114,  440 => 113,  438 => 112,  434 => 110,  432 => 88,  429 => 87,  423 => 86,  414 => 175,  412 => 128,  405 => 127,  403 => 86,  400 => 85,  394 => 84,  386 => 81,  384 => 80,  381 => 79,  375 => 78,  367 => 75,  364 => 74,  362 => 73,  358 => 71,  356 => 70,  351 => 68,  345 => 65,  342 => 64,  340 => 63,  336 => 61,  334 => 60,  331 => 59,  325 => 58,  314 => 48,  307 => 44,  301 => 43,  291 => 32,  285 => 31,  278 => 23,  275 => 22,  269 => 21,  262 => 45,  259 => 43,  257 => 42,  254 => 41,  250 => 39,  248 => 38,  244 => 36,  241 => 31,  239 => 29,  238 => 28,  236 => 27,  233 => 25,  230 => 24,  227 => 21,  221 => 20,  214 => 18,  211 => 17,  205 => 15,  202 => 14,  196 => 13,  189 => 46,  187 => 20,  184 => 19,  182 => 13,  172 => 8,  168 => 7,  163 => 6,  157 => 5,  148 => 201,  146 => 200,  144 => 199,  141 => 198,  139 => 197,  134 => 194,  132 => 193,  128 => 191,  125 => 185,  122 => 184,  119 => 179,  116 => 178,  113 => 84,  110 => 83,  107 => 78,  104 => 77,  102 => 58,  92 => 51,  89 => 50,  87 => 49,  72 => 48,  69 => 47,  67 => 5,  58 => 3,  55 => 2,  53 => 1,  14 => 200,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not oro_is_hash_navigation() %}
    <!DOCTYPE html>
    <html class=\"{% if isMobileVersion() %}mobile{% else %}desktop{% endif %}-version\">
    <head>
        {% block head %}
            <title>{% trans %}Loading...{% endtrans %}</title>
            <script id=\"page-title\" type=\"text/html\">{{ oro_title_render() }}</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no{% if isMobileVersion() %}, viewport-fit=cover{% endif %}\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            {% block head_style %}
                {% if oro_theme_icon() %}
                    <link rel=\"shortcut icon\" href=\"{{ asset(oro_theme_icon()) }}\" />
                {% endif %}
               {% placeholder head_style %}
            {% endblock %}

            {% block script %}
                {% block scripts_before %}
                    {% placeholder scripts_before %}
                {% endblock %}
                {% set requirejs_config_extend %}
                    {%- placeholder requirejs_config_extend -%}
                {% endset %}
                {% include 'OroRequireJSBundle::scripts.html.twig' with {
                    compressed: not app.debug,
                    config_extend: requirejs_config_extend
                } %}
                {% block application %}
                <script type=\"text/javascript\">
                    require(['oroui/js/app']);
                </script>
                {% endblock %}
                <script type=\"text/javascript\">
                    require(['orouser/js/init-user', 'oroui/js/widget-manager']);
                {% if isMobileVersion() %}
                    require(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                {% endif %}
                </script>
                {% placeholder scripts_after %}
                {% block head_script %}
                {% endblock %}
            {% endblock %}
        {% endblock %}
    </head>
    <body class=\"{% if isMobileVersion() %}mobile{% else %}desktop{% endif %}-version lang-{{ oro_language()|slice(0,2) }} {% if app.debug %}dev-mode {% endif %}{% block bodyClass %}{% endblock %}\">
    {% placeholder after_body_start %}
    <div id=\"progressbar\">
        <h3>{% trans %}Loading...{% endtrans %}</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            {% block header %}
                <header class=\"navbar\" id=\"oroplatform-header\">
                    {% placeholder before_navigation %}
                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            {% placeholder header_logo %}
                            <ul class=\"nav pull-right user-menu\">
                                {{ block('user_menu') }}
                            </ul>
                            <div class=\"nav top-search shortcuts\" data-layout=\"separate\">
                                {{ block('navbar') }}
                            </div>
                            {% placeholder pin_tabs_list %}
                        </div>
                    </div>
                    {% include 'OroUIBundle:Default/navbar:top.html.twig' %}
                    {% placeholder after_navigation %}
                </header>
            {% endblock header %}
            {% if isDesktopVersion() %}
                {% block left_panel %}
                    <div id=\"left-panel\" data-layout=\"separate\">
                        {% placeholder left_panel with {placement: 'left'} %}
                    </div>
                {% endblock left_panel %}
            {% endif %}
            {% block main %}
                <div id=\"main\">
                    {% block before_content %}
                    <div id=\"flash-messages\">
                        {% block messages %}
                            <div class=\"flash-messages-frame\">
                                <div class=\"flash-messages-holder\"></div>
                            </div>
                            <script type=\"text/javascript\">
                                require(['jquery', 'oroui/js/messenger'],
                                        function(\$, messenger, template) {
                                            messenger.setup({
                                                container: '#flash-messages .flash-messages-holder'
                                            });
                                            {% if app.session.flashbag.peekAll|length > 0 %}
                                            \$(function() {
                                                {% for type, messages in app.session.flashbag.all %}
                                                {% for message in messages %}
                                                messenger.notificationFlashMessage({{ type|json_encode|raw }}, {{ message|trans|json_encode|raw }});
                                                {% endfor %}
                                                {% endfor %}
                                            });
                                            {% endif %}
                                        });
                            </script>
                        {% endblock messages %}
                    </div>
                    <div class=\"breadcrumb-pin\">
                        {% placeholder breadcrumb_pin_before %}
                        <div id=\"breadcrumb\">
                            {% block breadcrumb %}
                                {% placeholder breadcrumb %}
                            {% endblock breadcrumb %}
                        </div>
                        {% block pin_button %}
                            {% placeholder pin_button %}
                        {% endblock pin_button %}
                        <div id=\"before-content-addition\" data-layout=\"separate\">
                            {% block before_content_addition %}{% endblock before_content_addition %}
                        </div>
                        {% placeholder breadcrumb_pin_after %}
                    </div>
                    {% endblock before_content %}
                    <div id=\"container\"{% if isDesktopVersion() %} class=\"scrollable-container\"{% endif %} data-layout=\"separate\">
                        {% block page_container %}
                            {% placeholder content_before %}
                            {% block content %}
                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"{{ path('oro_ui_1column') }}\">1 column </a></li>
                                                <li><a href=\"{{ path('oro_ui_1column_toolbar') }}\">1 column with toolbar</a></li>
                                                <li><a href=\"{{ path('oro_ui_1column_menu') }}\">1 column with menu</a></li>
                                                <li><a href=\"{{ path('oro_ui_grid_page') }}\">grid page</a></li>
                                                <li><a href=\"{{ path('oro_ui_grid_without_bar_page') }}\">grid page without bar</a></li>
                                                <li><a href=\"{{ path('oro_ui_2columns_left') }}\">2 columns - left</a></li>
                                                <li><a href=\"{{ path('oro_ui_2columns_right') }}\">2 columns - right</a></li>
                                                <li><a href=\"{{ path('oro_ui_3columns') }}\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"{{ path('oro_ui_forgot_password') }}\">Forgot password</a></li>
                                                <li><a href=\"{{ path('oro_ui_login') }}\">Login page</a></li>
                                                <li><a href=\"{{ path('oro_ui_registration') }}\">Registration page</a></li>
                                                <li><a href=\"{{ path('oro_ui_404') }}\">404</a></li>
                                                <li><a href=\"{{ path('oro_ui_503') }}\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"{{ path('oro_ui_form_elements') }}\">Form elements</a></li>
                                                <li><a href=\"{{ path('oro_ui_form_horizontal') }}\">Form Horizontal</a></li>
                                                <li><a href=\"{{ path('oro_ui_messages') }}\">System messages</a></li>
                                                <li><a href=\"{{ path('oro_ui_title_bar') }}\">Entity Title Bar</a></li>
                                                <li><a href=\"{{ path('oro_ui_buttons') }}\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"{{ path('oro_ui_tables') }}\">Tables</a></li>
                                                <li><a href=\"{{ path('oro_ui_general_elements') }}\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"{{ path('oro_ui_dialog_styled') }}\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            {% endblock content %}
                            {% placeholder content_after %}
                        {% endblock page_container %}
                    </div>
                </div>
            {% endblock main %}
            {% if isDesktopVersion() %}
                {% block right_panel %}
                    <div id=\"right-panel\">
                        {% placeholder right_panel with {placement: 'right'} %}
                    </div>
                {% endblock right_panel %}
            {% endif %}
            {% block footer %}
                <div id=\"dialog-extend-fixed-container\" class=\"ui-dialog-minimize-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                    {% placeholder footer_inner %}
                </footer>
            {% endblock footer %}
        </div>
    </div>
    {% placeholder before_body_end %}
    </body>
    </html>
{% else %}
    {# Title should be generated as least once in order to pass data to title service #}
    {% set title = oro_title_render() %}
    {# Template for hash tag navigation#}
    {% use 'OroUIBundle:Default/navbar:blocks.html.twig' %}
    {% include 'OroNavigationBundle:HashNav:hashNavAjax.html.twig'
        with {
            'data': {
                'scripts': block('head_script'),
                'content': block('page_container'),
                'breadcrumb': block('breadcrumb')|trim,
                'beforeContentAddition': block('before_content_addition')
            }
        }
    %}
{% endif %}
", "OroUIBundle:Default:index.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/index.html.twig");
    }
}
