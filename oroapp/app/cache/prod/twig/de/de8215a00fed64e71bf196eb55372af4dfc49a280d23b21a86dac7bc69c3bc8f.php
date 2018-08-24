<?php

/* OroDataGridBundle:Grid/dialog:multi.html.twig */
class __TwigTemplate_f2e61fdcdbeb86914ec8469b6eada9a4a64c754b5ff35b8f864ae7eac27ca4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"widget-content\">

        ";
        // line 21
        $context["itemsArray"] = array();
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entityTargets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            ";
            $context["itemArray"] = array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 24
$context["item"], "label", array())), "className" => $this->getAttribute(            // line 25
$context["item"], "className", array()), "gridName" => $this->getAttribute(            // line 26
$context["item"], "gridName", array()));
            // line 29
            echo "            ";
            $context["itemsArray"] = twig_array_merge(($context["itemsArray"] ?? null), array(0 => ($context["itemArray"] ?? null)));
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        ";
        // line 32
        $context["firstItem"] = twig_first($this->env, ($context["itemsArray"] ?? null));
        // line 33
        echo "        ";
        $context["options"] = twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("items" =>         // line 34
($context["itemsArray"] ?? null), "params" => ((        // line 35
array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), "gridWidgetName" =>         // line 36
($context["gridWidgetName"] ?? null), "dialogWidgetName" =>         // line 37
($context["dialogWidgetName"] ?? null), "sourceEntityId" => (($this->getAttribute(        // line 38
($context["sourceEntity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["sourceEntity"] ?? null), "id", array()), null)) : (null)), "sourceEntityClassAlias" =>         // line 39
($context["sourceEntityClassAlias"] ?? null)));
        // line 42
        echo "
        <script type=\"text/template\" id=\"multi-grid-item\">
            <li id=\"<%= entity.get('entityAlias') %>\" class=\"context-item\" data-cid=\"<%= entity.cid %>\">
                <%= entity.get('label') %>
            </li>
        </script>

        <div data-page-component-module=\"";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("multiGridComponent", $context)) ? (_twig_default_filter(($context["multiGridComponent"] ?? null), "orodatagrid/js/app/components/multi-grid-component")) : ("orodatagrid/js/app/components/multi-grid-component")), "html", null, true);
        echo "\"
             data-page-component-options=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\" class=\"btn-group\">
            <button class=\"activity-context-current-block dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"activity-context-current-item\"></span>
                <span class=\"fa-caret-down\"></span>
            </button>
            <ul class=\"context-items-dropdown dropdown-menu\"></ul>
        </div>

        ";
        // line 58
        if (($context["itemsArray"] ?? null)) {
            // line 59
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "widgetTemplate" => "dialog", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget", twig_array_merge(twig_array_merge((($this->getAttribute($this->getAttribute(            // line 64
($context["params"] ?? null), "grid_query", array(), "any", false, true), "params", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "grid_query", array(), "any", false, true), "params", array()), array())) : (array())), array("gridName" => $this->getAttribute(twig_first($this->env,             // line 65
($context["itemsArray"] ?? null)), "gridName", array(), "array"), "params" => array("class_name" => $this->getAttribute(twig_first($this->env,             // line 66
($context["itemsArray"] ?? null)), "className", array(), "array")))), ((            // line 67
array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())))), "alias" =>             // line 69
($context["gridWidgetName"] ?? null)));
            // line 70
            echo "
        ";
        }
        // line 72
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:Grid/dialog:multi.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 72,  100 => 70,  98 => 69,  97 => 67,  96 => 66,  95 => 65,  94 => 64,  92 => 59,  90 => 58,  79 => 50,  75 => 49,  66 => 42,  64 => 39,  63 => 38,  62 => 37,  61 => 36,  60 => 35,  59 => 34,  57 => 33,  55 => 32,  52 => 31,  46 => 30,  43 => 29,  41 => 26,  40 => 25,  39 => 24,  37 => 23,  32 => 22,  30 => 21,  26 => 19,  20 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:Grid/dialog:multi.html.twig", "");
    }
}
