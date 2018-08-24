<?php

/* OroSidebarBundle::sidebar.html.twig */
class __TwigTemplate_07c4791150f83b0147bcf17dfd7c17767606ccfeda84c357061a1c1f07ec24ba extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSidebarBundle::sidebar.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("sidebarsGetURL", $context)) {
            // line 4
            echo "    ";
            $context["sidebarsGetURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_sidebars", array("position" => ("SIDEBAR_" . twig_upper_filter($this->env, ($context["placement"] ?? null)))));
        }
        // line 6
        echo "
";
        // line 7
        if ( !array_key_exists("sidebarPostURL", $context)) {
            // line 8
            echo "    ";
            $context["sidebarPostURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_post_sidebars");
        }
        // line 10
        echo "
";
        // line 11
        if ( !array_key_exists("widgetsGetURL", $context)) {
            // line 12
            echo "    ";
            $context["widgetsGetURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_sidebarwidgets", array("placement" => ($context["placement"] ?? null)));
        }
        // line 14
        echo "
";
        // line 15
        if ( !array_key_exists("widgetPostURL", $context)) {
            // line 16
            echo "    ";
            $context["widgetPostURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_post_sidebarwidgets");
        }
        // line 18
        echo "
";
        // line 19
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue((("oro_sidebar.sidebar_" . ($context["placement"] ?? null)) . "_active")) == true))) {
            // line 20
            echo "    ";
            $context["pageComponent"] = array("sidebarData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment(            // line 21
($context["sidebarsGetURL"] ?? null)), "widgetsData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment(            // line 22
($context["widgetsGetURL"] ?? null)), "availableWidgets" => $this->env->getExtension('Oro\Bundle\SidebarBundle\Twig\SidebarExtension')->getWidgetDefinitions(            // line 23
($context["placement"] ?? null)), "urlRoot" =>             // line 24
($context["sidebarPostURL"] ?? null), "url" =>             // line 25
($context["widgetPostURL"] ?? null));
            // line 27
            echo "    ";
            if (twig_test_empty($this->getAttribute(($context["pageComponent"] ?? null), "sidebarData", array()))) {
                // line 28
                echo "        ";
                $context["pageComponent"] = twig_array_merge(($context["pageComponent"] ?? null), array("sidebarData" => twig_jsonencode_filter(array("position" => ("SIDEBAR_" . twig_upper_filter($this->env,                 // line 29
($context["placement"] ?? null)))))));
                // line 31
                echo "    ";
            }
            // line 32
            echo "
<div id=\"sidebar-";
            // line 33
            echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
            echo "\" class=\"sidebar sidebar-";
            echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
            echo "\"
     data-page-component-options=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["pageComponent"] ?? null)), "html", null, true);
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSidebarBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  83 => 33,  80 => 32,  77 => 31,  75 => 29,  73 => 28,  70 => 27,  68 => 25,  67 => 24,  66 => 23,  65 => 22,  64 => 21,  62 => 20,  60 => 19,  57 => 18,  53 => 16,  51 => 15,  48 => 14,  44 => 12,  42 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSidebarBundle::sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SidebarBundle/Resources/views/sidebar.html.twig");
    }
}
