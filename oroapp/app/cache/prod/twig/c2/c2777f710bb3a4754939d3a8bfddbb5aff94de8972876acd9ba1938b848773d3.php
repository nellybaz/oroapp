<?php

/* OroTaxBundle:Form:fields.html.twig */
class __TwigTemplate_af21edbf4649f15d664e88631adc198b849801a0dc8fea31a38835dd792245b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_tax_zip_code_collection_type_widget' => array($this, 'block_oro_tax_zip_code_collection_type_widget'),
            'oro_tax_zip_code_type_widget' => array($this, 'block_oro_tax_zip_code_type_widget'),
            '_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_country_row' => array($this, 'block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_country_row'),
            '_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_row' => array($this, 'block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_row'),
            '_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_text_row' => array($this, 'block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_text_row'),
            '_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_option_row' => array($this, 'block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_option_row'),
            '_tax_calculation_oro_tax___use_as_base_exclusions_value_widget' => array($this, 'block__tax_calculation_oro_tax___use_as_base_exclusions_value_widget'),
            '_tax_calculation_oro_tax___origin_address_value_country_row' => array($this, 'block__tax_calculation_oro_tax___origin_address_value_country_row'),
            '_tax_calculation_oro_tax___origin_address_value_region_row' => array($this, 'block__tax_calculation_oro_tax___origin_address_value_region_row'),
            '_tax_calculation_oro_tax___origin_address_value_region_text_row' => array($this, 'block__tax_calculation_oro_tax___origin_address_value_region_text_row'),
            '_tax_calculation_oro_tax___origin_address_value_postal_code_row' => array($this, 'block__tax_calculation_oro_tax___origin_address_value_postal_code_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_tax_zip_code_collection_type_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('oro_tax_zip_code_type_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_country_row', $context, $blocks);
        // line 64
        $this->displayBlock('_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_row', $context, $blocks);
        // line 65
        $this->displayBlock('_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_text_row', $context, $blocks);
        // line 66
        $this->displayBlock('_tax_calculation_oro_tax___use_as_base_exclusions_value_entry_option_row', $context, $blocks);
        // line 67
        echo "
";
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('_tax_calculation_oro_tax___use_as_base_exclusions_value_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('_tax_calculation_oro_tax___origin_address_value_country_row', $context, $blocks);
        // line 130
        $this->displayBlock('_tax_calculation_oro_tax___origin_address_value_region_row', $context, $blocks);
        // line 131
        $this->displayBlock('_tax_calculation_oro_tax___origin_address_value_region_text_row', $context, $blocks);
        // line 132
        $this->displayBlock('_tax_calculation_oro_tax___origin_address_value_postal_code_row', $context, $blocks);
    }

    // line 1
    public function block_oro_tax_zip_code_collection_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 4
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_tax_zip_code_collection_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 5
            echo "        ";
        }
        // line 6
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 7
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 8
        echo "        <div class=\"row-oro\">
            ";
        // line 9
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 10
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.zipcode.zip_range_start.label"), "html", null, true);
        echo "</span></th>
                        <th></th>
                        <th><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.zipcode.zip_range_end.label"), "html", null, true);
        echo "</span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class=\"tax-zip-code-list-items\" data-last-index=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo " data-content>
                    ";
        // line 21
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 23
                echo "                            ";
                echo $this->getAttribute($this, "oro_tax_zip_code_collection_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 26
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                            ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 33
        if (($context["allow_add"] ?? null)) {
            // line 34
            echo "                <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 36
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 57
    public function block_oro_tax_zip_code_type_widget($context, array $blocks = array())
    {
        // line 58
        echo "    <td>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zipRangeStart", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zipRangeStart", array()), 'errors');
        echo "</td>
    <td> - </td>
    <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zipRangeEnd", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zipRangeEnd", array()), 'errors');
        echo "</td>
";
    }

    // line 63
    public function block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_country_row($context, array $blocks = array())
    {
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => false), "method");
    }

    // line 64
    public function block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_row($context, array $blocks = array())
    {
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => false), "method");
    }

    // line 65
    public function block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_region_text_row($context, array $blocks = array())
    {
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => false), "method");
    }

    // line 66
    public function block__tax_calculation_oro_tax___use_as_base_exclusions_value_entry_option_row($context, array $blocks = array())
    {
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => false), "method");
    }

    // line 95
    public function block__tax_calculation_oro_tax___use_as_base_exclusions_value_widget($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        ob_start();
        // line 97
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 98
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 99
            echo "        ";
        }
        // line 100
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 101
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 102
        echo "        <div class=\"row-oro\">
            ";
        // line 103
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 104
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
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
        // line 105
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 106
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 110
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 111
                echo "                        ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                ";
        }
        // line 114
        echo "            </div>
            ";
        // line 115
        if (($context["allow_add"] ?? null)) {
            // line 116
            echo "                <a class=\"btn add-list-item\" href=\"javascript: void(0);\" ";
            echo ((($context["disabled"] ?? null)) ? ("disabled=disabled") : (""));
            echo ">
                    <i class=\"fa-plus\"></i>";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 120
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 129
    public function block__tax_calculation_oro_tax___origin_address_value_country_row($context, array $blocks = array())
    {
        echo "<div class=\"control-group\">";
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "</div>";
    }

    // line 130
    public function block__tax_calculation_oro_tax___origin_address_value_region_row($context, array $blocks = array())
    {
        echo "<div class=\"control-group\">";
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "</div>";
    }

    // line 131
    public function block__tax_calculation_oro_tax___origin_address_value_region_text_row($context, array $blocks = array())
    {
        echo "<div class=\"control-group\">";
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "</div>";
    }

    // line 132
    public function block__tax_calculation_oro_tax___origin_address_value_postal_code_row($context, array $blocks = array())
    {
        echo "<div class=\"control-group\">";
        echo $this->getAttribute($this, "tax_address_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "</div>";
    }

    // line 40
    public function getoro_tax_zip_code_collection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 42
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 43
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 46
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 47
                echo "    ";
            }
            // line 48
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"tax-zip-code-list tax-zip-code-list-item\">
        ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <td class=\"tax-zip-code-list-remove\">
            <button type=\"button\" class=\"removeRow btn icons-holder\"><i class=\"fa-close\"></i></button>
        </td>
    </tr>
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

    // line 68
    public function getoro_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 69
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 70
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 71
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 72
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 73
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 74
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_add_after", array());
                // line 75
                echo "    ";
            } else {
                // line 76
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 77
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 78
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 79
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 80
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 81
                echo "    ";
            }
            // line 82
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group class=\"well tax-address-row ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder";
            // line 83
            if ( !($context["allow_delete"] ?? null)) {
                echo " not-removable";
            }
            echo "\">
            ";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
            echo "
            ";
            // line 85
            if (($context["allow_delete"] ?? null)) {
                // line 86
                echo "                <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">×</button>
            ";
            }
            // line 88
            echo "            ";
            if (($context["allow_add_after"] ?? null)) {
                // line 89
                echo "                <button class=\"addAfterRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">+</button>
            ";
            }
            // line 91
            echo "        </div>
    </div>
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

    // line 124
    public function gettax_address_block($__form__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 125
            echo "    ";
            $context["attrs"] = array("attr" => array("data-validation" => twig_jsonencode_filter(array("NotBlank" => null))), "disabled" => ($context["disabled"] ?? null));
            // line 126
            echo "    <div class=\"controls tax-address ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["attrs"] ?? null));
            echo "</div>
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
        return "OroTaxBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 126,  553 => 125,  540 => 124,  523 => 91,  517 => 89,  514 => 88,  508 => 86,  506 => 85,  502 => 84,  496 => 83,  489 => 82,  486 => 81,  483 => 80,  480 => 79,  477 => 78,  474 => 77,  471 => 76,  468 => 75,  465 => 74,  462 => 73,  459 => 72,  456 => 71,  453 => 70,  450 => 69,  438 => 68,  417 => 50,  409 => 48,  406 => 47,  403 => 46,  400 => 45,  397 => 44,  394 => 43,  391 => 42,  388 => 41,  376 => 40,  368 => 132,  360 => 131,  352 => 130,  344 => 129,  338 => 120,  332 => 117,  327 => 116,  325 => 115,  322 => 114,  319 => 113,  310 => 111,  305 => 110,  302 => 109,  293 => 107,  288 => 106,  286 => 105,  269 => 104,  267 => 103,  264 => 102,  261 => 101,  258 => 100,  255 => 99,  252 => 98,  249 => 97,  246 => 96,  243 => 95,  237 => 66,  231 => 65,  225 => 64,  219 => 63,  211 => 60,  203 => 58,  200 => 57,  194 => 36,  188 => 34,  186 => 33,  181 => 30,  178 => 29,  169 => 27,  164 => 26,  161 => 25,  152 => 23,  147 => 22,  145 => 21,  133 => 20,  126 => 16,  121 => 14,  101 => 10,  99 => 9,  96 => 8,  93 => 7,  90 => 6,  87 => 5,  84 => 4,  81 => 3,  78 => 2,  75 => 1,  71 => 132,  69 => 131,  67 => 130,  65 => 129,  62 => 128,  59 => 123,  57 => 95,  54 => 94,  51 => 67,  49 => 66,  47 => 65,  45 => 64,  43 => 63,  40 => 62,  38 => 57,  35 => 56,  32 => 39,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Form:fields.html.twig", "");
    }
}
