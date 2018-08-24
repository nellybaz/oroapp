<?php

/* OroShoppingListBundle:layouts/blank/imports/product_list_matrix_grid_order:product_list_matrix_grid_order.html.twig */
class __TwigTemplate_b9384e78e841c395fd24ab090dd53bf9e8c5a77fae6181a35dbc50a07b381cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__product_list_matrix_grid_order__form_start_widget' => array($this, 'block___product_list_matrix_grid_order__form_start_widget'),
            '__product_list_matrix_grid_order__totals_widget' => array($this, 'block___product_list_matrix_grid_order__totals_widget'),
            '__product_list_matrix_grid_order__totals_wrapper_widget' => array($this, 'block___product_list_matrix_grid_order__totals_wrapper_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__product_list_matrix_grid_order__form_start_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('__product_list_matrix_grid_order__totals_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__product_list_matrix_grid_order__totals_wrapper_widget', $context, $blocks);
    }

    // line 1
    public function block___product_list_matrix_grid_order__form_start_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (($this->getAttribute(($context["rows"] ?? null), 1, array(), "array") == 1)) {
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
    public function block___product_list_matrix_grid_order__totals_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "product-totals--nested "));
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 23
    public function block___product_list_matrix_grid_order__totals_wrapper_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (        // line 25
($context["class_prefix"] ?? null) . "__wrapper--darken ")));
        // line 27
        echo "
    ";
        // line 28
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/imports/product_list_matrix_grid_order:product_list_matrix_grid_order.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  87 => 27,  85 => 25,  83 => 24,  80 => 23,  74 => 20,  71 => 19,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  53 => 10,  51 => 8,  49 => 7,  46 => 6,  44 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 23,  29 => 22,  27 => 15,  24 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/product_list_matrix_grid_order:product_list_matrix_grid_order.html.twig", "");
    }
}
