<?php

/* OroShoppingListBundle:ShoppingList:view.html.twig */
class __TwigTemplate_d851e076b4f2d2c0863d363e3bcde6ffcf3b23d5a36c7af47d857424ea7c7358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroShoppingListBundle:ShoppingList:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroShoppingListBundle:ShoppingList:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_content_data($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.widgets.shopping_list_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_info", array("id" => $this->getAttribute(        // line 21
($context["entity"] ?? null), "id", array())))));
        // line 22
        echo "
    ";
        $context["shoppingListInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["shoppingListInformationWidget"] ?? null))));
        // line 26
        echo "
    ";
        // line 27
        ob_start();
        // line 28
        echo "        ";
        $this->loadTemplate("OroPricingBundle:Totals:totals.html.twig", "OroShoppingListBundle:ShoppingList:view.html.twig", 28)->display(array("options" => array("route" => "oro_pricing_entity_totals", "method" => "GET", "events" => array(0 => "datagrid:doRefresh:shopping-list-line-items-grid", 1 => "datagrid:afterRemoveRow:shopping-list-line-items-grid", 2 => "datagrid:afterMassRemoveRow:shopping-list-line-items-grid"), "entityClassName" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 37
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 38
($context["entity"] ?? null), "id", array()), "data" =>         // line 39
($context["totals"] ?? null))));
        // line 42
        echo "    ";
        $context["subtotals"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.sections.general"), "class" => "active", "subblocks" =>         // line 48
($context["generalSectionBlocks"] ?? null)));
        // line 51
        echo "
    ";
        // line 52
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.lineitem.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "spanClass" => "shopping-list-line-items", "data" => array(0 =>         // line 60
$context["dataGrid"]->getrenderGrid("shopping-list-line-items-grid", array("shopping_list_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 65
        echo "
    ";
        // line 66
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.sections.subtotals"), "subblocks" => array(0 => array("data" => array(0 =>         // line 68
($context["subtotals"] ?? null)))))));
        // line 70
        echo "
    ";
        // line 71
        $context["id"] = "shopping-list-view";
        // line 72
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 73
        echo "
    ";
        // line 74
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:ShoppingList:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 74,  109 => 73,  106 => 72,  104 => 71,  101 => 70,  99 => 68,  98 => 66,  95 => 65,  93 => 60,  92 => 52,  89 => 51,  87 => 48,  86 => 44,  83 => 43,  80 => 42,  78 => 39,  77 => 38,  76 => 37,  74 => 28,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  60 => 22,  58 => 21,  56 => 18,  53 => 17,  50 => 16,  43 => 13,  41 => 11,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:ShoppingList:view.html.twig", "");
    }
}
