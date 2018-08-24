<?php

/* OroDataGridBundle:Grid/dialog:widget.html.twig */
class __TwigTemplate_2ce1f9dbbe41a21c71edcc2344d9557db3514a18824e8c502bd3a42d40cef5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDataGridBundle:Grid/widget:widget.html.twig", "OroDataGridBundle:Grid/dialog:widget.html.twig", 1);
        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDataGridBundle:Grid/widget:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_widget_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["renderParams"] = twig_array_merge(($context["renderParams"] ?? null), array("routerEnabled" => false, "requireJSModules" => array(0 => "orodatagrid/js/row-select-for-widget/builder"), "gridBuildersOptions" => array("rowSelectForWidget" => array("wid" => $this->getAttribute($this->getAttribute(        // line 9
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "multiSelect" => false))));
        // line 14
        echo "
    ";
        // line 15
        $this->displayParentBlock("widget_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:Grid/dialog:widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  35 => 14,  33 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:Grid/dialog:widget.html.twig", "");
    }
}
