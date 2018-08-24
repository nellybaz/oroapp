<?php

/* OroUserBundle:Security:login.html.twig */
class __TwigTemplate_5fc1c5b4588f7e156666ba6738174b200efd6488384f92e7a550a88d2de3b0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle::layout.html.twig";
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
    ";
        // line 5
        echo "    <style type=\"text/css\">
        #login-page-loader {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 1000;
            background: white url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAzOCAzOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCB4MT0iOC4wNDIlIiB5MT0iMCUiIHgyPSI2NS42ODIlIiB5Mj0iMjMuODY1JSIgaWQ9ImEiPgogICAgICAgICAgICA8c3RvcCBzdG9wLWNvbG9yPSIjODg4IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMCUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgc3RvcC1vcGFjaXR5PSIuNjMxIiBvZmZzZXQ9IjYzLjE0NiUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgb2Zmc2V0PSIxMDAlIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMSAxKSI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNiAxOGMwLTkuOTQtOC4wNi0xOC0xOC0xOCIgaWQ9Ik92YWwtMiIgc3Ryb2tlPSJ1cmwoI2EpIiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICAgICAgPGFuaW1hdGVUcmFuc2Zvcm0KICAgICAgICAgICAgICAgICAgICBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iCiAgICAgICAgICAgICAgICAgICAgdHlwZT0icm90YXRlIgogICAgICAgICAgICAgICAgICAgIGZyb209IjAgMTggMTgiCiAgICAgICAgICAgICAgICAgICAgdG89IjM2MCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICBkdXI9IjAuOXMiCiAgICAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIC8+CiAgICAgICAgICAgIDwvcGF0aD4KICAgICAgICAgICAgPGNpcmNsZSBmaWxsPSIjZmZmIiBjeD0iMzYiIGN5PSIxOCIgcj0iMSI+CiAgICAgICAgICAgICAgICA8YW5pbWF0ZVRyYW5zZm9ybQogICAgICAgICAgICAgICAgICAgIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIKICAgICAgICAgICAgICAgICAgICB0eXBlPSJyb3RhdGUiCiAgICAgICAgICAgICAgICAgICAgZnJvbT0iMCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICB0bz0iMzYwIDE4IDE4IgogICAgICAgICAgICAgICAgICAgIGR1cj0iMC45cyIKICAgICAgICAgICAgICAgICAgICByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICAgICAgICAgICAgPC9jaXJjbGU+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K') center center no-repeat;
        }
    </style>
";
    }

    // line 17
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 18
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<div id=\"login-page-loader\"></div>
<div class=\"container\">
    <form id=\"login-form\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            ";
        // line 25
        if ($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()) {
            // line 26
            echo "            <h1 class=\"title logo-";
            echo (($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()) ? ("image") : ("text"));
            echo "\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()), "html", null, true);
            echo "\">
            </h1>
            <span class=\"divider-vertical\"></span>
            ";
        }
        // line 31
        echo "            <h2 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset>
            ";
        // line 34
        if (($context["error"] ?? null)) {
            // line 35
            echo "                <div class=\"alert alert-error\">
                    <div>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 39
        echo "            ";
        echo twig_escape_filter($this->env, ($context["messagesContent"] ?? null), "html", null, true);
        // line 40
        $context["usernameLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username");
        // line 41
        $context["passwordLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password");
        // line 42
        $context["organizationLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Organization");
        // line 43
        $context["showLabels"] = ((twig_length_filter($this->env, ($context["usernameLabel"] ?? null)) <= 9) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["passwordLabel"] ?? null)) <= 9));
        // line 44
        echo "            <div class=\"input-prepend\">
                ";
        // line 45
        if (($context["showLabels"] ?? null)) {
            // line 46
            echo "                <label for=\"prependedInput\" class=\"add-on\">";
            echo twig_escape_filter($this->env, ($context["usernameLabel"] ?? null), "html", null, true);
            echo "</label>
                ";
        }
        // line 48
        echo "                <input type=\"text\" id=\"prependedInput\" class=\"span2\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username or Email"), "html", null, true);
        echo "\" autofocus/>
            </div>
            <div class=\"input-prepend\">
                ";
        // line 51
        if (($context["showLabels"] ?? null)) {
            // line 52
            echo "                <label for=\"prependedInput2\" class=\"add-on\">";
            echo twig_escape_filter($this->env, ($context["passwordLabel"] ?? null), "html", null, true);
            echo "</label>
                ";
        }
        // line 54
        echo "                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <label class=\"checkbox oro-remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me on this computer"), "html", null, true);
        echo "
            </label>
            <div class=\"control-group form-row\">
                <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn btn-large  btn-primary pull-right\" id=\"_submit\" name=\"_submit\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in"), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 63
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_user_login_form", $context)) ? (_twig_default_filter(($context["oro_user_login_form"] ?? null), "oro_user_login_form")) : ("oro_user_login_form")), array());
        // line 64
        echo "        </fieldset>
        <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
    </form>
    <script type=\"text/javascript\">
        document.getElementById('login-form').addEventListener('submit', function (event) {
            var buttons = event.target.getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].setAttribute('disabled', 'disabled');
            }
        });
        window.addEventListener('load', function() {
            var loader = document.getElementById('login-page-loader');
            if (loader) {
                loader.parentNode.removeChild(loader);
            }
        });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  174 => 64,  172 => 63,  167 => 61,  161 => 60,  155 => 57,  148 => 54,  142 => 52,  140 => 51,  131 => 48,  125 => 46,  123 => 45,  120 => 44,  118 => 43,  116 => 42,  114 => 41,  112 => 40,  109 => 39,  103 => 36,  100 => 35,  98 => 34,  91 => 31,  84 => 27,  79 => 26,  77 => 25,  72 => 23,  68 => 21,  65 => 20,  60 => 18,  54 => 17,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Security:login.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Security/login.html.twig");
    }
}
