<?php

/* OroNavigationBundle:menuUpdate:editMenusButton.html.twig */
class __TwigTemplate_cec160450821fa641d2a5a745fa78df9b52e436154db027f6971a5eb222fa2a5 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "oro_user_profile_view")) {
            // line 2
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 3
            ob_start();
            // line 4
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_navigation_user_menu_index");
            echo "\" class=\"btn icons-holder-text\">
                <i class=\"fa-cog\"></i>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.edit_menus"), "html", null, true);
            echo "
            </a>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 8
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:editMenusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:editMenusButton.html.twig", "");
    }
}
