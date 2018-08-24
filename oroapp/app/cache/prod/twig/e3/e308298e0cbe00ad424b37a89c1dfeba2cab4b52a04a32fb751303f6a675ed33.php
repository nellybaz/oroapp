<?php

/* OroSearchBundle:Datagrid:itemContainer.html.twig */
class __TwigTemplate_89256893251b7047a51ab1215fc505fa3e7416b09755f4553253b3edce2687f1 extends Twig_Template
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
        ob_start();
        // line 3
        $context["indexer_item"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "indexer_item"), "method");
        // line 4
        echo "
";
        // line 6
        $context["entity"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "entity"), "method");
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["indexer_item"] ?? null), "entityConfig", array()), "search_template", array())) {
            // line 9
            echo "    ";
            $this->loadTemplate($this->getAttribute($this->getAttribute(($context["indexer_item"] ?? null), "entityConfig", array()), "search_template", array()), "OroSearchBundle:Datagrid:itemContainer.html.twig", 9)->display(array_merge($context, array("entity" => ($context["entity"] ?? null), "indexer_item" => ($context["indexer_item"] ?? null))));
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, ($context["entity"] ?? null), "html", null, true);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Datagrid:itemContainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  23 => 4,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSearchBundle:Datagrid:itemContainer.html.twig", "");
    }
}
