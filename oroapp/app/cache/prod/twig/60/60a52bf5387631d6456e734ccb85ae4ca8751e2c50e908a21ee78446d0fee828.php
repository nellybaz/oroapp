<?php

/* OroNavigationBundle:Js:dot.menu.js.twig */
class __TwigTemplate_65f7f82689ccc61719eee59e247e36e16f7b0a1e32d327896a6f56d18acd96c5 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-dot-menu-item\">
    <button class=\"close\" type=\"button\">&times;</button><a href=\"<%= url %>\"><%- title_rendered %></a>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:dot.menu.js.twig";
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
        return new Twig_Source("", "OroNavigationBundle:Js:dot.menu.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Js/dot.menu.js.twig");
    }
}
