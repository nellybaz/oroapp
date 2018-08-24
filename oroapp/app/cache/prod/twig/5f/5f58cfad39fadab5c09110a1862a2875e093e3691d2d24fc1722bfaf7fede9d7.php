<?php

/* OroTagBundle:Datagrid/Property:tags.html.twig */
class __TwigTemplate_b409c50eee022201ee83deec95c422596cfd259a4226a357867033a62a16066f extends Twig_Template
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
        if (($context["value"] ?? null)) {
            // line 2
            echo "    ";
            echo twig_jsonencode_filter(($context["value"] ?? null));
            echo "
";
        } else {
            // line 4
            echo "    []
";
        }
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Datagrid/Property:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Datagrid/Property:tags.html.twig", "");
    }
}
