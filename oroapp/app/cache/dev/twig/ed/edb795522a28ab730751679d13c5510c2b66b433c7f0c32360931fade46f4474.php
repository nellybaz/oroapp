<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_1f47601e2dc540bceeaeb6c4358a55b0dfcce99c39ead35fec0f77d5ba2170ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_row_widget' => array($this, 'block_datagrid_row_widget'),
            'datagrid_cell_widget' => array($this, 'block_datagrid_cell_widget'),
            'datagrid_cell_value_widget' => array($this, 'block_datagrid_cell_value_widget'),
            'datagrid_header_row_widget' => array($this, 'block_datagrid_header_row_widget'),
            'datagrid_header_cell_widget' => array($this, 'block_datagrid_header_cell_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('datagrid_row_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('datagrid_cell_widget', $context, $blocks);
        // line 11
        $this->displayBlock('datagrid_cell_value_widget', $context, $blocks);
        // line 15
        $this->displayBlock('datagrid_header_row_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('datagrid_header_cell_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_datagrid_row_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_row_widget"));

        // line 2
        echo "    <script type=\"text/html\" id=\"template-datagrid-row\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_datagrid_cell_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_cell_widget"));

        // line 8
        echo "    <td <%= attributes('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? $this->getContext($context, "column_name")), "html", null, true);
        echo "', ";
        echo twig_jsonencode_filter(($context["attr"] ?? $this->getContext($context, "attr")));
        echo ") %>>";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</td>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_datagrid_cell_value_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_cell_value_widget"));

        // line 12
        echo "<%= render('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? $this->getContext($context, "column_name")), "html", null, true);
        echo "') %>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_datagrid_header_row_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_header_row_widget"));

        // line 16
        echo "    <script type=\"text/html\" id=\"template-datagrid-header-row\">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_datagrid_header_cell_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datagrid_header_cell_widget"));

        // line 22
        echo "    <th <%= attributes('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? $this->getContext($context, "column_name")), "html", null, true);
        echo "', ";
        echo twig_jsonencode_filter(($context["attr"] ?? $this->getContext($context, "attr")));
        echo ") %>><%= render('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? $this->getContext($context, "column_name")), "html", null, true);
        echo "') %></th>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 22,  121 => 21,  111 => 17,  108 => 16,  102 => 15,  93 => 12,  87 => 11,  73 => 8,  67 => 7,  57 => 3,  54 => 2,  48 => 1,  41 => 21,  38 => 20,  36 => 15,  34 => 11,  32 => 7,  29 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block datagrid_row_widget %}
    <script type=\"text/html\" id=\"template-datagrid-row\">
        {{ block_widget(block) }}
    </script>
{% endblock %}

{% block datagrid_cell_widget %}
    <td <%= attributes('{{ column_name }}', {{ attr|json_encode|raw }}) %>>{{ block_widget(block) }}</td>
{% endblock %}

{%- block datagrid_cell_value_widget -%}
    <%= render('{{ column_name }}') %>
{%- endblock -%}

{% block datagrid_header_row_widget %}
    <script type=\"text/html\" id=\"template-datagrid-header-row\">
        {{ block_widget(block) }}
    </script>
{% endblock %}

{% block datagrid_header_cell_widget %}
    <th <%= attributes('{{ column_name }}', {{ attr|json_encode|raw }}) %>><%= render('{{ column_name }}') %></th>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
