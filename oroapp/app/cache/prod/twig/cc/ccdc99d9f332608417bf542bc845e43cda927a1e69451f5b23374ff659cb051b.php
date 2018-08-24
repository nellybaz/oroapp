<?php

/* OroNavigationBundle:Shortcut:shortcuts.html.twig */
class __TwigTemplate_d964c8a748e3d474840069486501ba22d6e27851923cbd7dc8d4fac4b8534f32 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("shortcuts", array("source" => "oro_api_get_shortcuts", "details" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shortcut_actionslist")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Shortcut:shortcuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Shortcut:shortcuts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Shortcut/shortcuts.html.twig");
    }
}
