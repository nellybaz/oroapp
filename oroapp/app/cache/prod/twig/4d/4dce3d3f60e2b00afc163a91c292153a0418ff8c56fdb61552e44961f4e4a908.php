<?php

/* OroShoppingListBundle:layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog:mobile_matrix_grid_order_form.html.twig */
class __TwigTemplate_63b9c06f228bc50cba0714df8adc573b3feefcd64194c7838cb899e5ebb97e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_matrix_collection_widget' => array($this, 'block__matrix_collection_widget'),
            '_matrix_collection_widget_body' => array($this, 'block__matrix_collection_widget_body'),
            '_matrix_collection_widget_body_row' => array($this, 'block__matrix_collection_widget_body_row'),
            '_matrix_collection_widget_body_row_head' => array($this, 'block__matrix_collection_widget_body_row_head'),
            '_matrix_collection_widget_body_row_cells' => array($this, 'block__matrix_collection_widget_body_row_cells'),
            '_matrix_collection_widget_body_row_cell' => array($this, 'block__matrix_collection_widget_body_row_cell'),
            '_matrix_collection_widget_body_row_cell_widget' => array($this, 'block__matrix_collection_widget_body_row_cell_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_matrix_collection_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_matrix_collection_widget_body', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_matrix_collection_widget_body_row', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('_matrix_collection_widget_body_row_head', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('_matrix_collection_widget_body_row_cells', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('_matrix_collection_widget_body_row_cell', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('_matrix_collection_widget_body_row_cell_widget', $context, $blocks);
    }

    // line 1
    public function block__matrix_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class_prefix"] = "matrix-order-widget";
        // line 3
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->setClassPrefixToForm(($context["form"] ?? null), ($context["class_prefix"] ?? null));
        // line 4
        echo "    ";
        $context["defaultColumns"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array());
        // line 5
        echo "    ";
        $context["rowsCount"] = twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "rows", array()));
        // line 6
        echo "    ";
        $context["columnsCount"] = twig_length_filter($this->env, ($context["defaultColumns"] ?? null));
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock("_matrix_collection_widget_body", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block__matrix_collection_widget_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["rows"] = (((($context["columnsCount"] ?? null) > 1)) ? ($this->getAttribute(($context["form"] ?? null), "rows", array())) : (array(0 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"))));
        // line 13
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid--mobile fade-in\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 15
            echo "            ";
            $context["rowIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 16
            echo "            ";
            $this->displayBlock("_matrix_collection_widget_body_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block__matrix_collection_widget_body_row($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item\"
         data-page-component-collapse=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("openClass" => "expanded")), "html", null, true);
        // line 25
        echo "\"
    >
        ";
        // line 27
        $this->displayBlock("_matrix_collection_widget_body_row_head", $context, $blocks);
        echo "
        ";
        // line 28
        $this->displayBlock("_matrix_collection_widget_body_row_cells", $context, $blocks);
        echo "
    </div>
";
    }

    // line 32
    public function block__matrix_collection_widget_body_row_head($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-info\" data-collapse-trigger>
        ";
        // line 34
        if ((($context["columnsCount"] ?? null) > 1)) {
            // line 35
            echo "        <div>
            ";
            // line 36
            $context["cell"] = ($context["row"] ?? null);
            // line 37
            echo "            ";
            $this->displayBlock("_matrix_collection_widget_side_cell_label", $context, $blocks);
            echo "
        </div>
        ";
        }
        // line 40
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-info-wrapper\">
            <div>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.matrix_grid_order.total_qty"), "html", null, true);
        echo ": </span>
                <span data-rows-quantity=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["rowIndex"] ?? null), "html", null, true);
        echo "\">0</span>
            </div>
            <span class=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-separator\">|</span>
            <div>
                <span>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.matrix_grid_order.subtotal"), "html", null, true);
        echo ": </span>
                <span data-rows-price=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["rowIndex"] ?? null), "html", null, true);
        echo "\">0</span>
            </div>
        </div>
        <div class=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-icon-wrapper\">
            <span class=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-icon fa-plus fa--large\"></span>
            <span class=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-icon fa-minus fa--large\"></span>
        </div>
    </div>
";
    }

    // line 58
    public function block__matrix_collection_widget_body_row_cells($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["cells"] = (((($context["columnsCount"] ?? null) > 1)) ? ($this->getAttribute(($context["row"] ?? null), "columns", array())) : ($this->getAttribute(($context["form"] ?? null), "rows", array())));
        // line 60
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-container\" data-collapse-container>
        <div class=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-content-wrapper\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cells"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
            // line 63
            echo "                ";
            $context["cellIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 64
            echo "                ";
            $this->displayBlock("_matrix_collection_widget_body_row_cell", $context, $blocks);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </div>
    </div>
";
    }

    // line 70
    public function block__matrix_collection_widget_body_row_cell($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $context["row"] = (((($context["columnsCount"] ?? null) > 1)) ? (($context["row"] ?? null)) : (($context["cell"] ?? null)));
        // line 72
        echo "    ";
        $context["cell"] = (((($context["columnsCount"] ?? null) > 1)) ? (($context["cell"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["row"] ?? null), "columns", array()), 0, array(), "array")));
        // line 73
        echo "    <label class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-content\" data-zoom-disable>
        ";
        // line 74
        $this->displayBlock("_matrix_collection_widget_body_row_cell_widget", $context, $blocks);
        echo "
    </label>
";
    }

    // line 78
    public function block__matrix_collection_widget_body_row_cell_widget($context, array $blocks = array())
    {
        // line 79
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__item-label\">
        ";
        // line 80
        if ((($context["columnsCount"] ?? null) == 1)) {
            // line 81
            echo "            ";
            $context["tempCell"] = ($context["cell"] ?? null);
            // line 82
            echo "            ";
            $context["cell"] = ($context["row"] ?? null);
            // line 83
            echo "        ";
        }
        // line 84
        echo "        ";
        $this->displayBlock("_matrix_collection_widget_head_cell_label", $context, $blocks);
        echo "
        ";
        // line 85
        if ((($context["columnsCount"] ?? null) == 1)) {
            // line 86
            echo "            ";
            $context["cell"] = ($context["tempCell"] ?? null);
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </div>
    ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["cell"] ?? null), 'widget', array("attr" => array("class" => (        // line 91
($context["class_prefix"] ?? null) . "__item-value"), "data-product-id" => $this->getAttribute($this->getAttribute(        // line 92
($context["cell"] ?? null), "vars", array()), "productId", array()), "data-index" => twig_jsonencode_filter(array("row" =>         // line 94
($context["rowIndex"] ?? null), "column" =>         // line 95
($context["cellIndex"] ?? null))))));
        // line 98
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog:mobile_matrix_grid_order_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 98,  351 => 95,  350 => 94,  349 => 92,  348 => 91,  347 => 89,  344 => 88,  341 => 87,  338 => 86,  336 => 85,  331 => 84,  328 => 83,  325 => 82,  322 => 81,  320 => 80,  315 => 79,  312 => 78,  305 => 74,  300 => 73,  297 => 72,  294 => 71,  291 => 70,  285 => 66,  268 => 64,  265 => 63,  248 => 62,  244 => 61,  239 => 60,  236 => 59,  233 => 58,  225 => 53,  221 => 52,  217 => 51,  211 => 48,  207 => 47,  202 => 45,  197 => 43,  193 => 42,  187 => 40,  180 => 37,  178 => 36,  175 => 35,  173 => 34,  168 => 33,  165 => 32,  158 => 28,  154 => 27,  150 => 25,  148 => 23,  143 => 22,  140 => 21,  135 => 18,  118 => 16,  115 => 15,  98 => 14,  93 => 13,  90 => 12,  87 => 11,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  60 => 1,  56 => 78,  53 => 77,  51 => 70,  48 => 69,  46 => 58,  43 => 57,  41 => 32,  38 => 31,  36 => 21,  33 => 20,  31 => 11,  28 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog:mobile_matrix_grid_order_form.html.twig", "");
    }
}
