<?php

/* OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order.html.twig */
class __TwigTemplate_bd3db930fb77212b99c1a841b77cb9bb4272ddff1d51e4a1c7308ac0140b3531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__matrix_grid_order__wrapper_widget' => array($this, 'block___matrix_grid_order__wrapper_widget'),
            '__matrix_grid_order__form_start_widget' => array($this, 'block___matrix_grid_order__form_start_widget'),
            '__matrix_grid_order__form_summary_widget' => array($this, 'block___matrix_grid_order__form_summary_widget'),
            '__matrix_grid_order__form_end_widget' => array($this, 'block___matrix_grid_order__form_end_widget'),
            '__matrix_grid_order__form_fields_widget' => array($this, 'block___matrix_grid_order__form_fields_widget'),
            '__matrix_grid_order__matrix_form_clear_button_widget' => array($this, 'block___matrix_grid_order__matrix_form_clear_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__matrix_grid_order__wrapper_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('__matrix_grid_order__form_start_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('__matrix_grid_order__form_summary_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('__matrix_grid_order__form_end_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('__matrix_grid_order__form_fields_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('__matrix_grid_order__matrix_form_clear_button_widget', $context, $blocks);
    }

    // line 1
    public function block___matrix_grid_order__wrapper_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class_prefix"] = "matrix-order-widget";
        // line 3
        echo "
    ";
        // line 4
        if ( !array_key_exists("rows", $context)) {
            // line 5
            echo "        ";
            $context["rows"] = array(0 => twig_length_filter($this->env, $this->getAttribute(            // line 6
($context["form"] ?? null), "rows", array())), 1 => twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 7
($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array())));
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    ";
        // line 11
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("class_prefix" =>         // line 12
($context["class_prefix"] ?? null), "form" =>         // line 13
($context["form"] ?? null), "product" =>         // line 14
($context["product"] ?? null), "shoppingList" =>         // line 15
($context["shoppingList"] ?? null), "rows" =>         // line 16
($context["rows"] ?? null), "totals" =>         // line 17
($context["totals"] ?? null), "prices" =>         // line 18
($context["prices"] ?? null)));
        // line 20
        echo "
    ";
        // line 21
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}", "~data-page-component-view" => array("view" => "oropricing/js/app/views/base-product-matrix-view", "prices" =>         // line 25
($context["prices"] ?? null), "dimension" => $this->getAttribute(        // line 26
($context["rows"] ?? null), 1, array(), "array"))));
        // line 29
        echo "
    <div";
        // line 30
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 31
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    // line 35
    public function block___matrix_grid_order__form_start_widget($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["form_route_name"] = "oro_shopping_list_frontend_matrix_grid_order";
        // line 37
        echo "    ";
        $context["form_route_parameters"] = twig_array_merge(($context["form_route_parameters"] ?? null), array("productId" => $this->getAttribute(        // line 38
($context["product"] ?? null), "id", array()), "shoppingListId" => (( !twig_test_empty(        // line 39
($context["shoppingList"] ?? null))) ? ($this->getAttribute(($context["shoppingList"] ?? null), "id", array())) : (null))));
        // line 41
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (        // line 42
($context["class_prefix"] ?? null) . "__form fields-row"), "novalidate" => "novalidate"));
        // line 45
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 48
    public function block___matrix_grid_order__form_summary_widget($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (        // line 50
($context["class_prefix"] ?? null) . "__totals ")));
        // line 52
        echo "
    <div";
        // line 53
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 54
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    // line 58
    public function block___matrix_grid_order__form_end_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        if ( !array_key_exists("renderCache", $context)) {
            // line 60
            echo "        ";
            ob_start();
            // line 61
            echo "               ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
            echo "
           ";
            $context["renderCache"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 63
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("renderCache" =>             // line 64
($context["renderCache"] ?? null)));
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        echo twig_escape_filter($this->env, ($context["renderCache"] ?? null), "html", null, true);
        echo "

    ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
";
    }

    // line 72
    public function block___matrix_grid_order__form_fields_widget($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 77
    public function block___matrix_grid_order__matrix_form_clear_button_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        if (((($this->getAttribute(($context["totals"] ?? null), "quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["totals"] ?? null), "quantity", array()), 0)) : (0)) == 0)) {
            // line 79
            echo "        ";
            $context["style"] = (($context["style"] ?? null) . " disabled");
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 82,  207 => 81,  204 => 80,  201 => 79,  198 => 78,  195 => 77,  188 => 74,  186 => 73,  183 => 72,  177 => 69,  171 => 67,  168 => 66,  166 => 64,  164 => 63,  158 => 61,  155 => 60,  152 => 59,  149 => 58,  142 => 54,  138 => 53,  135 => 52,  133 => 50,  131 => 49,  128 => 48,  121 => 45,  119 => 42,  117 => 41,  115 => 39,  114 => 38,  112 => 37,  109 => 36,  106 => 35,  99 => 31,  95 => 30,  92 => 29,  90 => 26,  89 => 25,  88 => 21,  85 => 20,  83 => 18,  82 => 17,  81 => 16,  80 => 15,  79 => 14,  78 => 13,  77 => 12,  76 => 11,  73 => 10,  70 => 9,  68 => 7,  67 => 6,  65 => 5,  63 => 4,  60 => 3,  57 => 2,  54 => 1,  50 => 77,  47 => 76,  45 => 72,  42 => 71,  40 => 58,  37 => 57,  35 => 48,  32 => 47,  30 => 35,  27 => 34,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order.html.twig", "");
    }
}
