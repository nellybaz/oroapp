<?php

/* OroUserBundle::layout.html.twig */
class __TwigTemplate_e71e4abf9a381e0fe274348c66f6b0acd1f87f02a8ac18a9b28fca0603cd4374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body class=\"";
        // line 14
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version ";
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <div id=\"top-page\">
            ";
        // line 17
        ob_start();
        // line 18
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 22
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]);
                    echo "
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        // line 27
        echo "            ";
        $context["messagesContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('main', $context, $blocks);
        // line 40
        echo "        </div>
    </div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\">
    ";
        // line 7
        if ($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeIcon()) {
            // line 8
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeIcon()), "html", null, true);
            echo "\" />
    ";
        }
        // line 10
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("head_style", $context)) ? (_twig_default_filter(($context["head_style"] ?? null), "head_style")) : ("head_style")), array());
        // line 11
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("head_script", $context)) ? (_twig_default_filter(($context["head_script"] ?? null), "head_script")) : ("head_script")), array());
        // line 12
        echo "    ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render(), "html", null, true);
    }

    // line 14
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 29
    public function block_messages($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        echo twig_escape_filter($this->env, ($context["messagesContent"] ?? null), "html", null, true);
        echo "
            ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "            ";
    }

    // line 36
    public function block_main($context, array $blocks = array())
    {
        // line 37
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            ";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "                ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 38,  184 => 37,  180 => 39,  177 => 37,  174 => 36,  170 => 34,  167 => 33,  160 => 30,  157 => 29,  152 => 14,  146 => 5,  142 => 12,  139 => 11,  136 => 10,  130 => 8,  128 => 7,  122 => 5,  119 => 4,  111 => 40,  109 => 36,  106 => 35,  104 => 33,  101 => 32,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  84 => 25,  75 => 22,  70 => 21,  65 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 14,  40 => 13,  38 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle::layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/layout.html.twig");
    }
}
