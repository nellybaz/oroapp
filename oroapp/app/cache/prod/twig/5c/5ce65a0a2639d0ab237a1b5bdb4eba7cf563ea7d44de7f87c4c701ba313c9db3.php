<?php

/* OroOrderBundle:Js:line_item_templates.js.twig */
class __TwigTemplate_c647e17e3ffe66eefcccf48af69bc36e803ea330c948980765c1d469dad25128 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Js:line_item_templates.js.twig";
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
        return new Twig_Source("", "OroOrderBundle:Js:line_item_templates.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/Js/line_item_templates.js.twig");
    }
}