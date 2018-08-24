<?php

/* OroDataGridBundle:js:toolbar.html.twig */
class __TwigTemplate_c52ccfabe448deccca971d9258896a5ebb1ffecbe9d5300f9b02c0fcd76729ad extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:toolbar.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar\">
    <div class=\"grid-toolbar clearfix\">
    ";
        // line 3
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 4
            echo "        <div class=\"sorting pull-left form-horizontal\" data-grid-sorting></div>
        <div class=\"pull-left grid-toolbar-mass-actions\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
            <div class=\"extra-actions-panel\" data-grid-extra-actions-panel></div>
        </div>
        <div class=\"pull-right grid-toolbar-tools\">
            <div class=\"actions-panel pull-right form-horizontal\" data-grid-actions-panel></div>
            <div class=\"page-size pull-right form-horizontal\" data-grid-pagesize></div>
        </div>
        <div class=\"pagination pagination-centered\" data-grid-pagination></div>
        <div class=\"test\" data-grid-items-counter></div>
    ";
        } else {
            // line 16
            echo "        <div class=\"actions-panel pull-right\" data-grid-actions-panel></div>
        <div class=\"pull-left grid-toolbar-mass-actions\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
        </div>
        <div class=\"pagination-container\">
            <div class=\"pagination pull-left\" data-grid-pagination></div>
            <div class=\"page-size pull-left\" data-grid-pagesize></div>
        </div>
    ";
        }
        // line 25
        echo "    </div>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 25,  42 => 16,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"template-datagrid-toolbar\">
    <div class=\"grid-toolbar clearfix\">
    {% if isDesktopVersion() %}
        <div class=\"sorting pull-left form-horizontal\" data-grid-sorting></div>
        <div class=\"pull-left grid-toolbar-mass-actions\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
            <div class=\"extra-actions-panel\" data-grid-extra-actions-panel></div>
        </div>
        <div class=\"pull-right grid-toolbar-tools\">
            <div class=\"actions-panel pull-right form-horizontal\" data-grid-actions-panel></div>
            <div class=\"page-size pull-right form-horizontal\" data-grid-pagesize></div>
        </div>
        <div class=\"pagination pagination-centered\" data-grid-pagination></div>
        <div class=\"test\" data-grid-items-counter></div>
    {% else %}
        <div class=\"actions-panel pull-right\" data-grid-actions-panel></div>
        <div class=\"pull-left grid-toolbar-mass-actions\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
        </div>
        <div class=\"pagination-container\">
            <div class=\"pagination pull-left\" data-grid-pagination></div>
            <div class=\"page-size pull-left\" data-grid-pagesize></div>
        </div>
    {% endif %}
    </div>
</script>
", "OroDataGridBundle:js:toolbar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/js/toolbar.html.twig");
    }
}
