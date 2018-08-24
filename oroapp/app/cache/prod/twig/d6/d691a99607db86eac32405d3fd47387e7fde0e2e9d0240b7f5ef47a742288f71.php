<?php

/* OroWindowsBundle:Include:javascript.html.twig */
class __TwigTemplate_352a538543b317fd8be41e4450862d87bdb570a473f2e5a825835544e69c7947 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(['orowindows/js/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((array_key_exists("urlRootRoute", $context)) ? (_twig_default_filter(($context["urlRootRoute"] ?? null), "oro_api_get_windows")) : ("oro_api_get_windows"))));
        echo ";
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroWindowsBundle:Include:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWindowsBundle:Include:javascript.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/Include/javascript.html.twig");
    }
}
