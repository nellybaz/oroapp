<?php

/* OroDashboardBundle:Js:default_templates.js.twig */
class __TwigTemplate_9d92c4c6835a82dbb5c46e943d9d550c473d46bf379510dbf43c3cc9dbdc030a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Js:default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.start %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.end %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
        </div>
    </div>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.start %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.end %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
        </div>
    </div>
</script>
", "OroDashboardBundle:Js:default_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Js/default_templates.js.twig");
    }
}
