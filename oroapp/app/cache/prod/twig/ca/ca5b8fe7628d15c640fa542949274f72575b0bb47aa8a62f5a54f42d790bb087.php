<?php

/* OroEntityBundle:Entities:relation.html.twig */
class __TwigTemplate_c18fcb9229c194d2a18c3bb13e029a10f0ebe7436eb5b93827c21f258f576598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityBundle:Entities:relation.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content grid-widget-content\">
    ";
        // line 3
        $context["gridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("entity-relation-grid", ((($context["entity_name"] ?? null) . "-") . ($context["field_name"] ?? null)));
        // line 4
        echo "
    ";
        // line 5
        $context["gridParams"] = array("_parameters" => array("data_in" => (($this->getAttribute($this->getAttribute(        // line 7
($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method")) ? (twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method"), ",")) : (array())), "data_not_in" => (($this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method")) ? (twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method"), ",")) : (array()))), "class_name" =>         // line 10
($context["entity_class"] ?? null), "field_name" =>         // line 11
($context["field_name"] ?? null), "id" =>         // line 12
($context["id"] ?? null));
        // line 14
        echo "
    <style type=\"text/css\">
        .grid-widget-content .grid, .grid-widget-content .table{margin-bottom: 0;}
    </style>

    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:relation.html.twig", 25);
        // line 26
        echo "
    ";
        // line 27
        $context["extraData"] = array();
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["relation"] ?? null), "get", array(0 => "target_grid"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldName"]) {
            // line 29
            echo "        ";
            $context["extraData"] = twig_array_merge(($context["extraData"] ?? null), array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(            // line 30
($context["entity_provider"] ?? null), "getConfig", array(0 => $this->getAttribute(($context["relation"] ?? null), "get", array(0 => "target_entity"), "method"), 1 => $context["fieldName"]), "method"), "get", array(0 => "label"), "method")), "value" =>             // line 31
$context["fieldName"])));
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <div ";
        // line 35
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroentity/js/app/components/multiple-entity-component", "options" => array("wid" => $this->getAttribute($this->getAttribute(        // line 38
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "gridName" =>         // line 39
($context["gridName"] ?? null), "fieldTitles" => $this->getAttribute(        // line 40
($context["relation"] ?? null), "get", array(0 => "target_title"), "method"), "entityName" => twig_replace_filter(        // line 41
($context["entity_class"] ?? null), "\\", "_"), "fieldName" =>         // line 42
($context["field_name"] ?? null), "extraData" =>         // line 43
($context["extraData"] ?? null))));
        // line 45
        echo "></div>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["gridParams"] ?? null));
        echo "
        <input type=\"hidden\" name=\"appendRelation\" id=\"appendRelation\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeRelation\" id=\"removeRelation\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method"), "html", null, true);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  108 => 21,  103 => 20,  100 => 19,  92 => 49,  88 => 48,  83 => 45,  81 => 43,  80 => 42,  79 => 41,  78 => 40,  77 => 39,  76 => 38,  75 => 35,  72 => 34,  66 => 33,  64 => 31,  63 => 30,  61 => 29,  56 => 28,  54 => 27,  51 => 26,  49 => 25,  46 => 24,  44 => 19,  37 => 14,  35 => 12,  34 => 11,  33 => 10,  32 => 8,  31 => 7,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Entities:relation.html.twig", "");
    }
}
