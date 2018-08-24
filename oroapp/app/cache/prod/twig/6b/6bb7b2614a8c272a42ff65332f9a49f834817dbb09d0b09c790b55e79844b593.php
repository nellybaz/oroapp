<?php

/* OroDashboardBundle:Js:default_templates.js.twig */
class __TwigTemplate_605bd0fee0423aaf569fa4c6300c97ddae0b961a94c2e84deda250f1c4e8bd10 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:default_templates.js.twig";
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
        return new Twig_Source("", "OroDashboardBundle:Js:default_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Js/default_templates.js.twig");
    }
}
