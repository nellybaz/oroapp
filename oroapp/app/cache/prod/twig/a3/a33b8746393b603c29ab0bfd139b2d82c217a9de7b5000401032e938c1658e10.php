<?php

/* OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order_form.html.twig */
class __TwigTemplate_bdd26344cbd03405ffd3dde0c0c2456c3f9c53b33af33034e847507496f867bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_matrix_collection_widget' => array($this, 'block__matrix_collection_widget'),
            '_matrix_collection_widget_head' => array($this, 'block__matrix_collection_widget_head'),
            '_matrix_collection_widget_head_cell' => array($this, 'block__matrix_collection_widget_head_cell'),
            '_matrix_collection_widget_head_cell_label' => array($this, 'block__matrix_collection_widget_head_cell_label'),
            '_matrix_collection_widget_cell_label' => array($this, 'block__matrix_collection_widget_cell_label'),
            '_matrix_collection_widget_side' => array($this, 'block__matrix_collection_widget_side'),
            '_matrix_collection_widget_side_cell' => array($this, 'block__matrix_collection_widget_side_cell'),
            '_matrix_collection_widget_side_cell_label' => array($this, 'block__matrix_collection_widget_side_cell_label'),
            '_matrix_collection_widget_body' => array($this, 'block__matrix_collection_widget_body'),
            '_matrix_collection_widget_body_row' => array($this, 'block__matrix_collection_widget_body_row'),
            '_matrix_collection_widget_body_row_cell' => array($this, 'block__matrix_collection_widget_body_row_cell'),
            '_matrix_collection_widget_body_row_cell_widget' => array($this, 'block__matrix_collection_widget_body_row_cell_widget'),
            '_matrix_collection_widget_footer' => array($this, 'block__matrix_collection_widget_footer'),
            '_matrix_collection_widget_footer_cell' => array($this, 'block__matrix_collection_widget_footer_cell'),
            '_matrix_collection_widget_errors' => array($this, 'block__matrix_collection_widget_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_matrix_collection_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_matrix_collection_widget_head', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('_matrix_collection_widget_head_cell', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_matrix_collection_widget_head_cell_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('_matrix_collection_widget_cell_label', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('_matrix_collection_widget_side', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('_matrix_collection_widget_side_cell', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('_matrix_collection_widget_side_cell_label', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('_matrix_collection_widget_body', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('_matrix_collection_widget_body_row', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('_matrix_collection_widget_body_row_cell', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('_matrix_collection_widget_body_row_cell_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('_matrix_collection_widget_footer', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('_matrix_collection_widget_footer_cell', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('_matrix_collection_widget_errors', $context, $blocks);
    }

    // line 1
    public function block__matrix_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class_prefix"] = "matrix-order-widget";
        // line 3
        echo "    ";
        $context["defaultColumns"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"), "columns", array());
        // line 4
        echo "    ";
        $context["rowsCount"] = twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "rows", array()));
        // line 5
        echo "    ";
        $context["columnsCount"] = twig_length_filter($this->env, ($context["defaultColumns"] ?? null));
        // line 6
        echo "    ";
        $context["columnsQty"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "columnsQty", array());
        // line 7
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid ";
        echo twig_escape_filter($this->env, (((($context["columnsCount"] ?? null) > 1)) ? ((($context["class_prefix"] ?? null) . "__grid--multi-rows")) : ("")), "html", null, true);
        echo "\" data-matrix-grid-container>
        ";
        // line 8
        if ((($context["columnsCount"] ?? null) > 1)) {
            // line 9
            echo "            ";
            $this->displayBlock("_matrix_collection_widget_head", $context, $blocks);
            echo "
        ";
        }
        // line 11
        echo "        ";
        $this->displayBlock("_matrix_collection_widget_side", $context, $blocks);
        echo "
        ";
        // line 12
        $this->displayBlock("_matrix_collection_widget_body", $context, $blocks);
        echo "
        ";
        // line 13
        $this->displayBlock("_matrix_collection_widget_footer", $context, $blocks);
        echo "
        ";
        // line 14
        $this->displayBlock("_matrix_collection_widget_errors", $context, $blocks);
        echo "
    </div>
";
    }

    // line 18
    public function block__matrix_collection_widget_head($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["cells"] = (((($context["columnsCount"] ?? null) > 1)) ? (($context["defaultColumns"] ?? null)) : ($this->getAttribute(($context["form"] ?? null), "rows", array())));
        // line 20
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-head\">
        <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-head-label\"></div>
        <div class=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-head-wrapper\">
            <div class=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-scrollable-area\" data-scroll-view-follow=\"x\">
                ";
        // line 24
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
            // line 25
            echo "                    ";
            $this->displayBlock("_matrix_collection_widget_head_cell", $context, $blocks);
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
        // line 27
        echo "            </div>
        </div>
    </div>
";
    }

    // line 32
    public function block__matrix_collection_widget_head_cell($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__col\">
        <div class=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__col-wrapper\">
            ";
        // line 35
        $this->displayBlock("_matrix_collection_widget_head_cell_label", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    // line 40
    public function block__matrix_collection_widget_head_cell_label($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayBlock("_matrix_collection_widget_cell_label", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block__matrix_collection_widget_cell_label($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cell"] ?? null), "vars", array()), "label", array()), "html", null, true);
        echo "
";
    }

    // line 48
    public function block__matrix_collection_widget_side($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        if ((($context["columnsCount"] ?? null) > 1)) {
            // line 50
            echo "    ";
            $context["cells"] = $this->getAttribute(($context["form"] ?? null), "rows", array());
            // line 51
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-side\">
        <div class=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-side-wrapper\" data-scroll-view-follow=\"y\">
            ";
            // line 53
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
                // line 54
                echo "                ";
                $this->displayBlock("_matrix_collection_widget_side_cell", $context, $blocks);
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
            // line 56
            echo "        </div>
    </div>
    ";
        }
    }

    // line 61
    public function block__matrix_collection_widget_side_cell($context, array $blocks = array())
    {
        // line 62
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__row\">
        ";
        // line 63
        $this->displayBlock("_matrix_collection_widget_side_cell_label", $context, $blocks);
        echo "
    </div>
";
    }

    // line 67
    public function block__matrix_collection_widget_side_cell_label($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $this->displayBlock("_matrix_collection_widget_cell_label", $context, $blocks);
        echo "
";
    }

    // line 71
    public function block__matrix_collection_widget_body($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $context["rows"] = (((($context["columnsCount"] ?? null) > 1)) ? ($this->getAttribute(($context["form"] ?? null), "rows", array())) : (array(0 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "rows", array()), 0, array(), "array"))));
        // line 73
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-body\" data-scroll-view>
        ";
        // line 74
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
            // line 75
            echo "            ";
            $context["rowIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 76
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
        // line 78
        echo "    </div>
";
    }

    // line 81
    public function block__matrix_collection_widget_body_row($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $context["cells"] = (((($context["columnsCount"] ?? null) > 1)) ? ($this->getAttribute(($context["row"] ?? null), "columns", array())) : ($this->getAttribute(($context["form"] ?? null), "rows", array())));
        // line 83
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__row\" data-row>
        ";
        // line 84
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
            // line 85
            echo "            ";
            $context["cellIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 86
            echo "            ";
            if ((($context["columnsCount"] ?? null) == 1)) {
                // line 87
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
                echo "__one-line\">
                    <p class=\"";
                // line 88
                echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
                echo "__label-wrap\">
                        ";
                // line 89
                $this->displayBlock("_matrix_collection_widget_head_cell_label", $context, $blocks);
                echo "
                    </p>
                    ";
                // line 91
                $this->displayBlock("_matrix_collection_widget_body_row_cell", $context, $blocks);
                echo "
                </div>
            ";
            } else {
                // line 94
                echo "                ";
                $this->displayBlock("_matrix_collection_widget_body_row_cell", $context, $blocks);
                echo "
            ";
            }
            // line 96
            echo "        ";
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
        // line 97
        echo "    </div>
";
    }

    // line 100
    public function block__matrix_collection_widget_body_row_cell($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $context["row"] = (((($context["columnsCount"] ?? null) > 1)) ? (($context["row"] ?? null)) : (($context["cell"] ?? null)));
        // line 102
        echo "    ";
        $context["cell"] = (((($context["columnsCount"] ?? null) > 1)) ? (($context["cell"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["row"] ?? null), "columns", array()), 0, array(), "array")));
        // line 103
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__col\">
        ";
        // line 104
        $this->displayBlock("_matrix_collection_widget_body_row_cell_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 108
    public function block__matrix_collection_widget_body_row_cell_widget($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["cell"] ?? null), "vars", array()), "productId", array()) == null)) {
            // line 110
            echo "        <p class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__item-not-available\">
            ";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.matrix_grid_order.not_available"), "html", null, true);
            echo "
        </p>
    ";
        } else {
            // line 114
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["cell"] ?? null), 'widget', array("attr" => array("data-product-id" => $this->getAttribute($this->getAttribute(            // line 116
($context["cell"] ?? null), "vars", array()), "productId", array()), "data-index" => twig_jsonencode_filter(array("row" =>             // line 118
($context["rowIndex"] ?? null), "column" =>             // line 119
($context["cellIndex"] ?? null))))));
            // line 122
            echo "
    ";
        }
    }

    // line 126
    public function block__matrix_collection_widget_footer($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        if ((($context["columnsCount"] ?? null) > 1)) {
            // line 128
            echo "    ";
            $context["cells"] = ($context["defaultColumns"] ?? null);
            // line 129
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-footer\">
        <div class=\"";
            // line 130
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-footer-label\">
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.matrix_grid_order.qty"), "html", null, true);
            echo "
        </div>
        <div class=\"";
            // line 133
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-footer-wrapper\">
            <div class=\"";
            // line 134
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "__grid-scrollable-area\" data-scroll-view-follow=\"x\">
                ";
            // line 135
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
            foreach ($context['_seq'] as $context["key"] => $context["cell"]) {
                // line 136
                echo "                    ";
                $context["cellIndex"] = $this->getAttribute($context["loop"], "index", array());
                // line 137
                echo "                    ";
                $this->displayBlock("_matrix_collection_widget_footer_cell", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "            </div>
        </div>
    </div>
    ";
        }
    }

    // line 145
    public function block__matrix_collection_widget_footer_cell($context, array $blocks = array())
    {
        // line 146
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__form__col\">
        <div class=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__grid-footer-total ";
        echo ((($this->getAttribute(($context["columnsQty"] ?? null), ($context["key"] ?? null), array(), "array") > 0)) ? ("valid") : (""));
        echo "\"
             data-columns-quantity=\"";
        // line 148
        echo twig_escape_filter($this->env, ($context["cellIndex"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute(($context["columnsQty"] ?? null), ($context["key"] ?? null), array(), "array"), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    // line 154
    public function block__matrix_collection_widget_errors($context, array $blocks = array())
    {
        // line 155
        echo "    <div class=\"fields-row-error\"></div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  636 => 155,  633 => 154,  625 => 149,  621 => 148,  615 => 147,  610 => 146,  607 => 145,  599 => 139,  582 => 137,  579 => 136,  562 => 135,  558 => 134,  554 => 133,  549 => 131,  545 => 130,  540 => 129,  537 => 128,  534 => 127,  531 => 126,  525 => 122,  523 => 119,  522 => 118,  521 => 116,  519 => 114,  513 => 111,  508 => 110,  505 => 109,  502 => 108,  495 => 104,  490 => 103,  487 => 102,  484 => 101,  481 => 100,  476 => 97,  462 => 96,  456 => 94,  450 => 91,  445 => 89,  441 => 88,  436 => 87,  433 => 86,  430 => 85,  413 => 84,  408 => 83,  405 => 82,  402 => 81,  397 => 78,  380 => 76,  377 => 75,  360 => 74,  355 => 73,  352 => 72,  349 => 71,  342 => 68,  339 => 67,  332 => 63,  327 => 62,  324 => 61,  317 => 56,  300 => 54,  283 => 53,  279 => 52,  274 => 51,  271 => 50,  268 => 49,  265 => 48,  258 => 45,  255 => 44,  248 => 41,  245 => 40,  237 => 35,  233 => 34,  228 => 33,  225 => 32,  218 => 27,  201 => 25,  184 => 24,  180 => 23,  176 => 22,  172 => 21,  167 => 20,  164 => 19,  161 => 18,  154 => 14,  150 => 13,  146 => 12,  141 => 11,  135 => 9,  133 => 8,  126 => 7,  123 => 6,  120 => 5,  117 => 4,  114 => 3,  111 => 2,  108 => 1,  104 => 154,  101 => 153,  99 => 145,  96 => 144,  94 => 126,  91 => 125,  89 => 108,  86 => 107,  84 => 100,  81 => 99,  79 => 81,  76 => 80,  74 => 71,  71 => 70,  69 => 67,  66 => 66,  64 => 61,  61 => 60,  59 => 48,  56 => 47,  54 => 44,  51 => 43,  49 => 40,  46 => 39,  44 => 32,  41 => 31,  39 => 18,  36 => 17,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/matrix_grid_order:matrix_grid_order_form.html.twig", "");
    }
}
