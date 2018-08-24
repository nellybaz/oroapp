<?php

/* OroNavigationBundle:Menu:pin_tabs_list.html.twig */
class __TwigTemplate_4d825d9c9f50f02fb5104106132db945832e7c509ed31e704d9d4a4005bd2c77 extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 2
            echo "<div class=\"list-bar-wrapper\" id=\"pinbar\">
    <div class=\"list-bar\">
        <ul></ul>
        <div class=\"pin-bar-empty\" ><a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pinbar_help");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn how to use this space"), "html", null, true);
            echo "</a></div>
    </div>
    <div class=\"show-more dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa-ellipsis-v\"></i></a><div class=\"dropdown-menu pull-right\"><ul></ul></div></div>
    ";
            // line 8
            echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("pinbar");
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pin_tabs_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:pin_tabs_list.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/pin_tabs_list.html.twig");
    }
}
