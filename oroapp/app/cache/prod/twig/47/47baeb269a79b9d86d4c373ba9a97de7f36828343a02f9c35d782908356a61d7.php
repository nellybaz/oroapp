<?php

/* OroShoppingListBundle:layouts/blank/imports/shopping_list_matrix_grid_order:shopping_list_matrix_grid_order.html.twig */
class __TwigTemplate_6ea299b491d601a62f0c9b16b6efde91886e1deef3af72e817993553c5c722ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__shopping_list_matrix_grid_order__form_start_widget' => array($this, 'block___shopping_list_matrix_grid_order__form_start_widget'),
            '__shopping_list_matrix_grid_order__totals_widget' => array($this, 'block___shopping_list_matrix_grid_order__totals_widget'),
            '__shopping_list_matrix_grid_order__totals_wrapper_widget' => array($this, 'block___shopping_list_matrix_grid_order__totals_wrapper_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__shopping_list_matrix_grid_order__form_start_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('__shopping_list_matrix_grid_order__totals_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('__shopping_list_matrix_grid_order__totals_wrapper_widget', $context, $blocks);
        // line 38
        echo "
";
    }

    // line 1
    public function block___shopping_list_matrix_grid_order__form_start_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array())) == 1)) {
            // line 3
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (            // line 4
($context["class_prefix"] ?? null) . "__form--inline ")));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (            // line 8
($context["class_prefix"] ?? null) . "__form--colored ")));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 15
    public function block___shopping_list_matrix_grid_order__totals_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array())) != 1)) {
            // line 17
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "product-totals--nested "));
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 25
    public function block___shopping_list_matrix_grid_order__totals_wrapper_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array())) == 1)) {
            // line 27
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (            // line 28
($context["class_prefix"] ?? null) . "__wrapper--narrow ")));
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (            // line 32
($context["class_prefix"] ?? null) . "__wrapper--transparent ")));
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/imports/shopping_list_matrix_grid_order:shopping_list_matrix_grid_order.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  109 => 35,  106 => 34,  104 => 32,  102 => 31,  99 => 30,  97 => 28,  95 => 27,  92 => 26,  89 => 25,  83 => 22,  80 => 21,  77 => 20,  74 => 17,  71 => 16,  68 => 15,  62 => 12,  59 => 11,  56 => 10,  54 => 8,  52 => 7,  49 => 6,  47 => 4,  45 => 3,  42 => 2,  39 => 1,  34 => 38,  32 => 25,  29 => 24,  27 => 15,  24 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/shopping_list_matrix_grid_order:shopping_list_matrix_grid_order.html.twig", "");
    }
}
