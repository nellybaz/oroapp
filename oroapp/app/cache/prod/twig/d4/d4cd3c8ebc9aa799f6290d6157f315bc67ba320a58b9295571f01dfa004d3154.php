<?php

/* OroMagentoBundle:Cart/widget:items.html.twig */
class __TwigTemplate_a8fa310391b4ef4af00c4d2e6923128c10e313839ab8123f01bdac4f52d7932a extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:items.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        if ((($context["is_removed"] ?? null) == 0)) {
            // line 5
            echo "        ";
            echo $context["dataGrid"]->getrenderGrid("magento-cartitem-active-grid", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo $context["dataGrid"]->getrenderGrid("magento-cartitem-removed-grid", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
            echo "
    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Cart/widget:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Cart/widget:items.html.twig", "");
    }
}
