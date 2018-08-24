<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add:form.html.twig */
class __TwigTemplate_c6e9ed44aea8e4e73a6fd8892f3d84548f7837e080fb421c308c23cc20f95a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_product_row_widget' => array($this, 'block_oro_product_row_widget'),
            'oro_product_row_collection_widget' => array($this, 'block_oro_product_row_collection_widget'),
            'oro_product_quick_add_import_from_file_widget' => array($this, 'block_oro_product_quick_add_import_from_file_widget'),
            'oro_product_quick_add_copy_paste_widget' => array($this, 'block_oro_product_quick_add_copy_paste_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_product_row_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_product_row_collection_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('oro_product_quick_add_import_from_file_widget', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('oro_product_quick_add_copy_paste_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_product_row_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array());
        // line 3
        echo "    ";
        $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "disabled", array());
        // line 4
        echo "    ";
        $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
        // line 5
        echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroproduct/js/app/views/quick-add-item-view", "changeQuantity" => true)), "html", null, true);
        // line 10
        echo "\"
         data-content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
         data-validation-optional-group
         data-role=\"row\"
         class=\"quick-order-add__row fields-row\"
         ";
        // line 15
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
    >
        <div class=\"quick-order-add__row-content\">
            <div class=\"quick-order-add__col quick-order-add__product\">
                <label class=\"quick-order-add__label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.item_number.label"), "html", null, true);
        echo "</label>
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productDisplayName", array()), 'widget', array("attr" => array("placeholder" => "oro.product.sku.placeholder", "data-value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 22
($context["form"] ?? null), "productDisplayName", array()), "vars", array()), "value", array()), "data-dropdown-classes" => twig_jsonencode_filter(array("holder" => "select2-drop oro-select2__dropdown", "menu" => "select2-results", "item" => "select2-result", "link" => "select2-result-label")))));
        // line 29
        echo "
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productSku", array()), 'widget');
        echo "
            </div>
            <div class=\"quick-order-add__col quick-order-add__quantity\">
                <label class=\"quick-order-add__label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.quantity.label"), "html", null, true);
        echo "</label>
                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productQuantity", array()), 'widget', array("attr" => array("class" => " quick-order-add__quantity-input", "placeholder" => "oro.product.quantity.placeholder")));
        // line 37
        echo "
            </div>
            <div class=\"quick-order-add__col quick-order-add__unit\">
                <label class=\"quick-order-add__label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.unit.label"), "html", null, true);
        echo "</label>
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget', array("attr" => array("placeholder" => "oro.product.unit.placeholder")));
        echo "
            </div>
            ";
        // line 43
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_product_quick_add_additional_fields", $context)) ? (_twig_default_filter(($context["oro_product_quick_add_additional_fields"] ?? null), "oro_product_quick_add_additional_fields")) : ("oro_product_quick_add_additional_fields")), array());
        // line 44
        echo "            ";
        if (($context["allow_delete"] ?? null)) {
            // line 45
            echo "                <span class=\"quick-order-add__remove-row removeRow\" data-role=\"row-remove\"><i class=\"fa-close\"></i></span>
            ";
        }
        // line 47
        echo "        </div>
        <div class=\"quick-order-add__error fields-row-error\">";
        // line 48
        echo "</div>
        <div class=\"quick-order-add__error-autocomplete\">
            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productQuantity", array()), 'errors');
        echo "
            <div class=\"product-autocomplete-error\" style=\"display: none;\" data-role=\"autocomplete-error\">
                <span class=\"validation-failed\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.not_found"), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 58
    public function block_oro_product_row_collection_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 61
            echo "            ";
            $context["prototype_html"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), 'widget');
            // line 62
            echo "        ";
        }
        // line 63
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 64
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "quick-order-add__grid grid-container"), "data-validation" => false));
        // line 67
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 68
        echo "        ";
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 69
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 70
        $context["data_last_index"] = (($this->getAttribute(($context["form"] ?? null), "children", array())) ? (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array())));
        // line 71
        echo "            <div class=\"quick-order-add__body js-item-collection\"
                 data-last-index=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["data_last_index"] ?? null), "html", null, true);
        echo "\"
                 data-row-count-add=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\"
                 data-prototype-name=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            // line 75
            echo "                 data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        // line 76
        echo "            >
                ";
        // line 77
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 78
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 79
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 82
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "                        ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                ";
        }
        // line 86
        echo "            </div>
        </div>

        ";
        // line 89
        if (($context["allow_add"] ?? null)) {
            // line 90
            echo "            <a href=\"#\" class=\"btn btn--primary btn--full add-list-item\"
               data-container=\".js-item-collection\"
            >
                <i class=\"fa-plus-circle\"></i>
                <span>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 97
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 100
    public function block_oro_product_quick_add_import_from_file_widget($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        ob_start();
        // line 102
        echo "        <div class=\"quick-order-import__content\">
            <label class=\"btn btn--large\">
                ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.quick_add.import_from_file.choose_file.label"), "html", null, true);
        echo "
                ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
            </label>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 111
    public function block_oro_product_quick_add_copy_paste_widget($context, array $blocks = array())
    {
        // line 112
        echo "    ";
        ob_start();
        // line 113
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "copyPaste", array()), 'widget', array("attr" => array("class" => " quick-order-copy-paste__textarea", "placeholder" => "oro.product.frontend.quick_add.copy_paste.placeholder")));
        // line 116
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 116,  287 => 113,  284 => 112,  281 => 111,  272 => 105,  268 => 104,  264 => 102,  261 => 101,  258 => 100,  253 => 97,  247 => 94,  241 => 90,  239 => 89,  234 => 86,  231 => 85,  222 => 83,  217 => 82,  214 => 81,  205 => 79,  200 => 78,  198 => 77,  195 => 76,  190 => 75,  186 => 74,  182 => 73,  178 => 72,  175 => 71,  173 => 70,  168 => 69,  165 => 68,  162 => 67,  160 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  146 => 59,  143 => 58,  134 => 52,  129 => 50,  125 => 48,  122 => 47,  118 => 45,  115 => 44,  113 => 43,  108 => 41,  104 => 40,  99 => 37,  97 => 34,  93 => 33,  87 => 30,  84 => 29,  82 => 22,  81 => 20,  77 => 19,  70 => 15,  63 => 11,  60 => 10,  58 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 111,  35 => 110,  33 => 100,  30 => 99,  28 => 58,  25 => 57,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add:form.html.twig", "");
    }
}
