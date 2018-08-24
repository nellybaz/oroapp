<?php

/* OroFrontendBundle:Organization:logo_frontend.html.twig */
class __TwigTemplate_cc3bd3ef64369e26e29f946e6b4f3bf1403eb4e9a7c52f6ff65b26e0159b745f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["route"] = "oro_frontend_root";
        // line 2
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 3
            echo "    ";
            if (twig_length_filter($this->env, ($context["organization_name"] ?? null))) {
                // line 4
                echo "        ";
                $context["logo"] = $this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo();
                // line 5
                echo "        <h1 class=\"logo logo-";
                echo ((($context["logo"] ?? null)) ? ("image") : ("text"));
                echo "\">
            <a href=\"";
                // line 6
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["organization_name"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 7
                if (($context["logo"] ?? null)) {
                    // line 8
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["logo"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ($context["organization_name"] ?? null), "html", null, true);
                    echo "\">
                ";
                } else {
                    // line 10
                    echo twig_escape_filter($this->env, ($context["organization_name"] ?? null), "html", null, true);
                }
                // line 12
                echo "            </a>
        </h1>
    ";
            } else {
                // line 15
                echo "        <span class=\"logo-placeholder\"></span>
    ";
            }
        } else {
            // line 18
            echo "    ";
            // line 19
            echo "    <span id=\"main-menu-toggle\">
        <i class=\"fa-bars\"></i>
    </span>
    <h1 class=\"logo\">
        <span>
            <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(($context["organization_name"] ?? null))), "html", null, true);
            echo "\">
                ";
            // line 25
            if ($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()) {
                // line 26
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(($context["organization_name"] ?? null))), "html", null, true);
                echo "\">
                ";
            } else {
                // line 28
                echo twig_escape_filter($this->env, ($context["organization_name"] ?? null), "html", null, true);
            }
            // line 30
            echo "            </a>
        </span>
    </h1>
";
        }
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:Organization:logo_frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  88 => 28,  80 => 26,  78 => 25,  72 => 24,  65 => 19,  63 => 18,  58 => 15,  53 => 12,  50 => 10,  42 => 8,  40 => 7,  34 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:Organization:logo_frontend.html.twig", "");
    }
}
