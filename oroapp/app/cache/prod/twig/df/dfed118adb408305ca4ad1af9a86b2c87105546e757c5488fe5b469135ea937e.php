<?php

/* OroNavigationBundle:Js:pinbar.js.twig */
class __TwigTemplate_e6e31112f6ce551ac8e73a2a3af8ffad25e7b5fc672bbee1025c7b0769bfd071 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-list-pin-item\">
    <div class=\"pin-holder\">
        <button class=\"btn-close fa-close\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("close"), "html");
        echo "</button>
        <div><a href=\"<%= url %>\" data-options=\"{&quot;cache&quot;:true}\" title=\"<%- title_rendered %>\"><i class=\"fa-circle pin-status\"></i><%- title_rendered_short %></a></div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:pinbar.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Js:pinbar.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Js/pinbar.js.twig");
    }
}
