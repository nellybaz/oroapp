<?php

/* OroOrderBundle:Js:line_item_templates.js.twig */
class __TwigTemplate_a6cebbf93a2ce3e0760b754004a76bfbb6ffdcd83d2c8a4f3c59a2f26dfd37ba extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroOrderBundle:Js:line_item_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"order-notes-widget\">
    <div class=\"notes-widget\">
        <div class=\"notes-widget-preview\"></div>
        <div class=\"notes-widget-edit\"></div>
        <a class=\"notes-widget-edit-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.edit') %></a>
        <a class=\"notes-widget-add-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.add') %></a>
        <a class=\"notes-widget-remove-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.remove') %></a>
    </div>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Js:line_item_templates.js.twig";
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
        return new Twig_Source("<script type=\"text/template\" id=\"order-notes-widget\">
    <div class=\"notes-widget\">
        <div class=\"notes-widget-preview\"></div>
        <div class=\"notes-widget-edit\"></div>
        <a class=\"notes-widget-edit-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.edit') %></a>
        <a class=\"notes-widget-add-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.add') %></a>
        <a class=\"notes-widget-remove-btn\" href=\"javascript: void(0);\"><%= _.__('oro.order.notes_widget.remove') %></a>
    </div>
</script>
", "OroOrderBundle:Js:line_item_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/Js/line_item_templates.js.twig");
    }
}
