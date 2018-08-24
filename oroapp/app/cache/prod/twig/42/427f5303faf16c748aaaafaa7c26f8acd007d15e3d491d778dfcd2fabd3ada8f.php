<?php

/* OroEntityConfigBundle:Config/widget:entityFields.html.twig */
class __TwigTemplate_228d246d769543d36b03cdf4603a7f24b8821b0dcf2b56eff88945fc2d51203e extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityConfigBundle:Config/widget:entityFields.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("entityfields-grid", array("entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config/widget:entityFields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config/widget:entityFields.html.twig", "");
    }
}
