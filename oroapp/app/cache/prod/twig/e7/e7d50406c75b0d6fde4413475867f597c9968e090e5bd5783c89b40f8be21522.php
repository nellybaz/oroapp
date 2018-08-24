<?php

/* OroInvoiceBundle:Form:fields.html.twig */
class __TwigTemplate_5c268a9fc696e7f5d4be1f14ff9d3fa26adf3602fa0b727423b9312f02bf992b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_invoice_line_items_collection_widget' => array($this, 'block_oro_invoice_line_items_collection_widget'),
            'oro_invoice_line_item_widget' => array($this, 'block_oro_invoice_line_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('oro_invoice_line_items_collection_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('oro_invoice_line_item_widget', $context, $blocks);
    }

    // line 40
    public function block_oro_invoice_line_items_collection_widget($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        ob_start();
        // line 42
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 43
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_invoice_line_items_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 44
            echo "        ";
        }
        // line 45
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 46
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 47
        echo "        <div class=\"row-oro\">
            ";
        // line 48
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 49
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <input type=\"hidden\" name=\"validate_";
        // line 50
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><span>#</span></th>
                        <th><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.code.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.quantity.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.price.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.price_total.label"), "html", null, true);
        echo "</span></th>
                        ";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "allow_delete", array())) {
            // line 61
            echo "                            <th class=\"invoice-line-item-actions\"></th>
                        ";
        }
        // line 63
        echo "                    </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 67
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 68
                echo "                            ";
                echo $this->getAttribute($this, "oro_invoice_line_items_collection_item_prototype", array(0 => $context["child"], 1 => $this->getAttribute($context["loop"], "index", array())), "method");
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 71
            echo "                        ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                    ";
        }
        // line 73
        echo "                    </tbody>
                </table>
            </div>

            ";
        // line 77
        if (($context["allow_add"] ?? null)) {
            // line 78
            echo "                <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 80
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 84
    public function block_oro_invoice_line_item_widget($context, array $blocks = array())
    {
        // line 85
        echo "    <td class=\"invoice-line-item-sku\">
        <div class=\"invoice-line-item-type-product\">
            ";
        // line 87
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))) {
            // line 88
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "productSku", array()), "html", null, true);
            echo "
            ";
        }
        // line 90
        echo "        </div>
        <div class=\"invoice-line-item-type-free-form\" style=\"display: none;\">
            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productSku", array()), 'widget');
        echo "
        </div>
    </td>
    <td class=\"invoice-line-item-type\">
        <div class=\"fields-row\">
            <div class=\"invoice-line-item-type-product\">
                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'widget');
        echo "
                <a class=\"invoice-line-item-type-free-form\" href=\"javascript: void(0);\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.select.free_form"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"invoice-line-item-type-free-form\" style=\"display: none;\">
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'widget');
        echo "
                <br/><a class=\"invoice-line-item-type-product\" href=\"javascript: void(0);\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.select.product"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'errors');
        echo "
    </td>
    <td class=\"invoice-line-item-quantity\">
        <div class=\"fields-row\">
            ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
        echo "
            ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget');
        echo "
        </div>
        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "
        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'errors');
        echo "
    </td>
    <td class=\"invoice-line-item-price\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/line-item-product-prices-view")), "html", null, true);
        // line 121
        echo "\">
        <div class=\"fields-row\">
            ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'widget');
        echo "
            ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceType", array()), 'widget');
        echo "
        </div>
        ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'errors');
        echo "
        ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceType", array()), 'errors');
        echo "
    </td>
    <td class=\"invoice-line-item-total-price\"></td>
    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sortOrder", array()), 'widget');
        echo "
";
    }

    // line 1
    public function getoro_invoice_line_items_collection_item_prototype($__widget__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 5
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 6
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "disallow_delete", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disallow_delete", array()))) {
                    // line 9
                    echo "            ";
                    $context["allow_delete"] = false;
                    // line 10
                    echo "        ";
                } else {
                    // line 11
                    echo "            ";
                    $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                    // line 12
                    echo "        ";
                }
                // line 13
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 14
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 15
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    ";
            // line 18
            $context["page_component_options"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component_options", array()), array("disabled" =>  !            // line 19
($context["allow_delete"] ?? null)));
            // line 21
            echo "
    <tr data-content=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"invoice-line-item\"
        data-page-component-module=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component", array()), "html", null, true);
            echo "\"
        data-page-component-options=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\"
        data-layout=\"separate\">
        <td class=\"invoice-line-item-index\">";
            // line 27
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "</td>
        ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "

        ";
            // line 30
            if (($context["allow_delete"] ?? null)) {
                // line 31
                echo "            <td class=\"invoice-line-item-remove\">
                <button type=\"button\" class=\"removeLineItem btn icons-holder\"><i class=\"fa-close\"></i></button>
            </td>
        ";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array())) {
                // line 35
                echo "            <td></td>
        ";
            }
            // line 37
            echo "    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroInvoiceBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 37,  393 => 35,  391 => 34,  386 => 31,  384 => 30,  379 => 28,  375 => 27,  370 => 25,  366 => 24,  359 => 22,  356 => 21,  354 => 19,  353 => 18,  350 => 17,  347 => 16,  344 => 15,  341 => 14,  338 => 13,  335 => 12,  332 => 11,  329 => 10,  326 => 9,  323 => 8,  320 => 7,  317 => 6,  314 => 5,  311 => 4,  308 => 3,  305 => 2,  292 => 1,  286 => 130,  280 => 127,  276 => 126,  271 => 124,  267 => 123,  263 => 121,  261 => 119,  254 => 115,  250 => 114,  245 => 112,  241 => 111,  234 => 107,  230 => 106,  224 => 103,  220 => 102,  214 => 99,  210 => 98,  201 => 92,  197 => 90,  191 => 88,  189 => 87,  185 => 85,  182 => 84,  176 => 80,  170 => 78,  168 => 77,  162 => 73,  156 => 71,  153 => 70,  136 => 68,  118 => 67,  116 => 66,  104 => 65,  100 => 63,  96 => 61,  94 => 60,  90 => 59,  86 => 58,  82 => 57,  78 => 56,  74 => 55,  64 => 50,  59 => 49,  57 => 48,  54 => 47,  51 => 46,  48 => 45,  45 => 44,  42 => 43,  39 => 42,  36 => 41,  33 => 40,  29 => 84,  26 => 83,  24 => 40,  21 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInvoiceBundle:Form:fields.html.twig", "");
    }
}
