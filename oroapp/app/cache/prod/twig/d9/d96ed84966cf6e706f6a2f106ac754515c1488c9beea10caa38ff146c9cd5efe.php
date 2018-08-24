<?php

/* OroCallBundle:Datagrid/Column:direction.html.twig */
class __TwigTemplate_5a64fa6583dfb74c602b1e126f7a351acedb116ca9c1442c5101560d2ed4df41 extends Twig_Template
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
        if ((($context["value"] ?? null) == "outgoing")) {
            // line 2
            echo "    <i class=\"fa-sign-out out-call\"></i>
";
        } else {
            // line 4
            echo "    <i class=\"fa-sign-in in-call\"></i>
";
        }
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Datagrid/Column:direction.html.twig";
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
        return new Twig_Source("", "OroCallBundle:Datagrid/Column:direction.html.twig", "");
    }
}
