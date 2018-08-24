<?php

/* OroNavigationBundle:Js:pinbar.js.twig */
class __TwigTemplate_b4f1464a8ad646546492406310590c39b51c1452a42c8f620a16be16ccd49259 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Js:pinbar.js.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"template-list-pin-item\">
    <div class=\"pin-holder\">
        <button class=\"btn-close fa-close\" href=\"#\">{{ 'close'|trans|e('html')|raw }}</button>
        <div><a href=\"<%= url %>\" data-options=\"{&quot;cache&quot;:true}\" title=\"<%- title_rendered %>\"><i class=\"fa-circle pin-status\"></i><%- title_rendered_short %></a></div>
    </div>
</script>
", "OroNavigationBundle:Js:pinbar.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Js/pinbar.js.twig");
    }
}
