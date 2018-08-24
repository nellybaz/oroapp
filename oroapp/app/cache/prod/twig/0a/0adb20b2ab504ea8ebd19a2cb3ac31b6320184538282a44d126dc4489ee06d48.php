<?php

/* OroEntitySerializedFieldsBundle:Datagrid/Property:serialized.html.twig */
class __TwigTemplate_90e09deb03708150e7f9a11e6e8ff7162d97d2cd9bec2048a2032a3550b18224 extends Twig_Template
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
        if (((array_key_exists("field_name", $context) && array_key_exists("field_type", $context)) &&  !(null === $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["field_name"] ?? null)), "method")))) {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroEntitySerializedFieldsBundle:Datagrid/Property:serialized.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["ui"]->getformatDynamicFieldValue(null, null, ($context["field_name"] ?? null), array("value" => $this->getAttribute(            // line 5
($context["record"] ?? null), "getValue", array(0 => ($context["field_name"] ?? null)), "method"), "type" =>             // line 6
($context["field_type"] ?? null)));
            // line 7
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEntitySerializedFieldsBundle:Datagrid/Property:serialized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  29 => 6,  28 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntitySerializedFieldsBundle:Datagrid/Property:serialized.html.twig", "");
    }
}
