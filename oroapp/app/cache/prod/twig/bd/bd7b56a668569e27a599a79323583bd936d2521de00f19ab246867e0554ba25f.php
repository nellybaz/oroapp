<?php

/* OroDataGridBundle:Grid:widget/widget.html.twig */
class __TwigTemplate_081d314d156296c81f8c97ce89d9519f82011029ca2ec3913941c6c95d629d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroDataGridBundle:Grid:widget/widget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $this->displayBlock('widget_content', $context, $blocks);
        // line 14
        echo "</div>
";
    }

    // line 4
    public function block_widget_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"flash-messages\">
        <div class=\"flash-messages-frame\">
            <div class=\"flash-messages-holder\"></div>
        </div>
    </div>
    <div class=\"filters-view-container\"></div>

    ";
        // line 12
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null), twig_array_merge(array("enableViews" => false, "enableToggleFilters" => false), ($context["renderParams"] ?? null)));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:Grid:widget/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  36 => 5,  33 => 4,  28 => 14,  26 => 4,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:Grid:widget/widget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/Grid/widget/widget.html.twig");
    }
}
