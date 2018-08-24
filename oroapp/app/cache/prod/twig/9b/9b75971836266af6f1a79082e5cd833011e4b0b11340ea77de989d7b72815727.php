<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_c82277da3c57728bafd07fed9ad0169c4094447fff0c24b47187d184d2f26319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'navbar' => array($this, 'block_navbar'),
            'before_content' => array($this, 'block_before_content'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("titleTemplate" => "%code% - %status%", "params" => array("%code%" =>         // line 2
($context["status_code"] ?? null), "%status%" => ($context["status_text"] ?? null)), "force" => true));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"error\" content=\"";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "error-page";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        if ( !(null === $this->getAttribute(($context["app"] ?? null), "user", array()))) {
            // line 14
            echo "        ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
            // line 15
            if ((($context["status_code"] ?? null) == 503)) {
                // line 16
                echo "            ";
                $this->displayBlock('navbar', $context, $blocks);
                // line 17
                echo "        ";
            }
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        <header class=\"navbar\" id=\"oroplatform-header\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    ";
            // line 22
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("header_logo", $context)) ? (_twig_default_filter(($context["header_logo"] ?? null), "header_logo")) : ("header_logo")), array());
            // line 23
            echo "                </div>
            </div>
        </header>
    ";
        }
    }

    // line 10
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 29
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 32
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if ( !(null === $this->getAttribute(($context["app"] ?? null), "user", array()))) {
            // line 34
            echo "        ";
            $this->displayParentBlock("scripts_before", $context, $blocks);
            echo "
    ";
        }
    }

    // line 38
    public function block_right_panel($context, array $blocks = array())
    {
    }

    // line 40
    public function block_left_panel($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "    <div class=\"popup-frame\">
        <div class=\"popup-holder\">
            <div class=\"pagination-centered popup-box-errors\">
                <h1><span>";
        // line 47
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</h1>
                <div class=\"popup-content\">
                    <p>
                        ";
        // line 50
        if ((($context["status_code"] ?? null) == 404)) {
            // line 51
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The page you requested could not be found. Please make sure the path you used is correct."), "html", null, true);
            echo "
                        ";
        } elseif ((        // line 52
($context["status_code"] ?? null) == 403)) {
            // line 53
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You don't have permission to access this page."), "html", null, true);
            echo "
                        ";
        } else {
            // line 55
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The System is currently under maintenance and should be available in a few minutes."), "html", null, true);
            echo "
                        ";
        }
        // line 57
        echo "                    </p>
                    ";
        // line 58
        if (((($context["status_code"] ?? null) == 404) || (($context["status_code"] ?? null) == 403))) {
            // line 59
            echo "                        <p><a href=\"#\" onclick=\"window.history.back(); return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click to go back"), "html", null, true);
            echo "</a></p>
                    ";
        }
        // line 61
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  186 => 59,  184 => 58,  181 => 57,  175 => 55,  169 => 53,  167 => 52,  162 => 51,  160 => 50,  152 => 47,  147 => 44,  144 => 43,  139 => 40,  134 => 38,  126 => 34,  123 => 33,  120 => 32,  115 => 29,  110 => 16,  106 => 11,  103 => 10,  95 => 23,  93 => 22,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  70 => 13,  67 => 12,  64 => 10,  61 => 9,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  37 => 1,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "");
    }
}
