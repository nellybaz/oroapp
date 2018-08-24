<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig */
class __TwigTemplate_f73348e4e0e0b89099e0209840dbd7122b3b35840e70ab2f7b59256698481362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_widget' => array($this, 'block_datagrid_widget'),
            'taggable_datagrid_widget' => array($this, 'block_taggable_datagrid_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig"));

        // line 1
        $context["grid_parameters"] = twig_array_merge(array("enableFullScreenLayout" => true), ($context["grid_parameters"] ?? $this->getContext($context, "grid_parameters")));
        // line 2
        $this->displayBlock('datagrid_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('taggable_datagrid_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_datagrid_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_widget"));

        // line 3
        echo "    ";
        if ((($context["split_to_cells"] ?? $this->getContext($context, "split_to_cells")) != false)) {
            // line 4
            echo "        ";
            $context["themeOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array()));
            // line 5
            echo "        ";
            $context["themeOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["themeOptions"] ?? $this->getContext($context, "themeOptions")), array("headerRowTemplateSelector" => "#template-datagrid-header-row", "rowTemplateSelector" => "#template-datagrid-row"));
            // line 9
            echo "        ";
            $context["toolbarOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array()), array())) : (array()));
            // line 10
            echo "        ";
            $context["toolbarOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["toolbarOptions"] ?? $this->getContext($context, "toolbarOptions")), array("columnManager" => array("addSorting" => false)));
            // line 13
            echo "        ";
            $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? $this->getContext($context, "grid_render_parameters")), array("themeOptions" =>             // line 14
($context["themeOptions"] ?? $this->getContext($context, "themeOptions")), "toolbarOptions" =>             // line 15
($context["toolbarOptions"] ?? $this->getContext($context, "toolbarOptions"))));
            // line 17
            echo "        ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
    ";
        }
        // line 19
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig", 19);
        // line 20
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid(($context["grid_full_name"] ?? $this->getContext($context, "grid_full_name")), ($context["grid_parameters"] ?? $this->getContext($context, "grid_parameters")), ($context["grid_render_parameters"] ?? $this->getContext($context, "grid_render_parameters")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_taggable_datagrid_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "taggable_datagrid_widget"));

        // line 24
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "

    ";
        // line 26
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig", 26);
        // line 27
        echo "
    <div ";
        // line 28
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => array("gridName" =>         // line 31
($context["grid_full_name"] ?? $this->getContext($context, "grid_full_name")))));
        // line 33
        echo "></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  101 => 31,  100 => 28,  97 => 27,  95 => 26,  89 => 24,  83 => 23,  73 => 20,  70 => 19,  64 => 17,  62 => 15,  61 => 14,  59 => 13,  56 => 10,  53 => 9,  50 => 5,  47 => 4,  44 => 3,  38 => 2,  31 => 23,  28 => 22,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_parameters = {'enableFullScreenLayout': true}|merge(grid_parameters) %}
{% block datagrid_widget %}
    {% if split_to_cells != false %}
        {% set themeOptions = grid_render_parameters.themeOptions|default({}) %}
        {% set themeOptions = layout_attr_defaults(themeOptions, {
            'headerRowTemplateSelector': '#template-datagrid-header-row',
            'rowTemplateSelector': '#template-datagrid-row'
        }) %}
        {% set toolbarOptions = grid_render_parameters.toolbarOptions|default({}) %}
        {% set toolbarOptions = layout_attr_defaults(toolbarOptions, {
            'columnManager': {'addSorting': false}
        }) %}
        {% set grid_render_parameters = grid_render_parameters|merge({
            'themeOptions': themeOptions,
            'toolbarOptions': toolbarOptions
        }) %}
        {{ block(\"container_widget\") }}
    {% endif %}
    {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}
    {{ dataGrid.renderGrid(grid_full_name, grid_parameters, grid_render_parameters) }}
{% endblock %}

{% block taggable_datagrid_widget %}
    {{ block_widget(block) }}

    {% import 'OroUIBundle::macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        module: 'orodatagrid/js/app/components/datagrid-allow-tracking-component',
        options: {
            gridName: grid_full_name
        }
    }) }}></div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig");
    }
}
