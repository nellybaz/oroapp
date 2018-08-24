<?php

/* OroShoppingListBundle:Action:buttons.html.twig */
class __TwigTemplate_31267bcd5cca7224c38c3d807fae9ec5a88660af2d73e27de6da3e2d1a3ae799 extends Twig_Template
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
        $context["buttons"] = $this->loadTemplate("OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", "OroShoppingListBundle:Action:buttons.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["buttonOptions"] = array("dataUrl" => false, "dataAttributes" => array());
        // line 7
        echo "
";
        // line 8
        $context["buttonsOptions"] = array("new" =>         // line 9
($context["buttonOptions"] ?? null), "current" =>         // line 10
($context["buttonOptions"] ?? null), "existing" =>         // line 11
($context["buttonOptions"] ?? null), "singleButtonACss" => "btn--info", "shoppingLists" => $this->getAttribute(        // line 13
($context["actionData"] ?? null), "shoppingLists", array()), "componentModule" => (($this->getAttribute($this->getAttribute(        // line 14
($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "page_component_module", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "page_component_module", array()), "oroshoppinglist/js/app/views/product-quick-add-to-shopping-list-view")) : ("oroshoppinglist/js/app/views/product-quick-add-to-shopping-list-view")), "componentOptions" => twig_array_merge(array("quickAddComponentPrefix" => "quick-add"), (($this->getAttribute($this->getAttribute(        // line 17
($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "page_component_options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "page_component_options", array()), array())) : (array()))));
        // line 19
        echo "
<div class=\"widget-content btn-group\">
    <div class=\"mass-action-controls\">
        ";
        // line 22
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroShoppingListBundle:Action:buttons.html.twig", 22);
        // line 23
        echo "        ";
        echo $context["UI"]->getpinnedDropdownButton(array("html" =>         // line 24
$context["buttons"]->getgetButtonsHtml(($context["buttonsOptions"] ?? null)), "mobileEnabled" => true, "dataAttributes" => array("layout" => "deferred-initialize"), "options" => array("widgetModule" => "oroproduct/js/content-processor/product-add-to-dropdown-button", "widgetName" => "productAddToDropdownButtonProcessor", "truncateLength" => 25, "decoreClass" => "btn--info")));
        // line 35
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:Action:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 35,  46 => 24,  44 => 23,  42 => 22,  37 => 19,  35 => 17,  34 => 14,  33 => 13,  32 => 11,  31 => 10,  30 => 9,  29 => 8,  26 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:Action:buttons.html.twig", "");
    }
}
