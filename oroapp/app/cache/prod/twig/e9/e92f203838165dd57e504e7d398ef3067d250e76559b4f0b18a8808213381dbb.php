<?php

/* OroProductBundle:Product:createStepTwo.html.twig */
class __TwigTemplate_4faa197fc81be23d85f64cd03018cc242455eec7da9ed2268df3167ab989413c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroProductBundle:Product:createStepTwo.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product:createStepTwo.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%sku%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%name%" => _twig_default_filter((($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array()), "string", array())) : ("")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))));
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_create_step_two");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index")), "method"), "html", null, true);
        echo "
    ";
        // line 12
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 13
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_create")) {
            // line 14
            echo "        ";
            $context["saveAndDuplicateButton"] = $this->getAttribute(($context["UI"] ?? null), "buttonType", array(0 => array("type" => "submit", "class" => "btn-success main-group", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.ui.save_and_duplicate"), "action" => "save_and_duplicate")), "method");
            // line 20
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . ($context["saveAndDuplicateButton"] ?? null));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_update"))) {
            // line 23
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 28
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 30
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 31
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 34
($context["entity"] ?? null), "sku", array()) . " - ") . $this->getAttribute(($context["entity"] ?? null), "defaultName", array())));
            // line 36
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 38
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label")));
            // line 39
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroProductBundle:Product:createStepTwo.html.twig", 39)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $this->displayBlock('stats', $context, $blocks);
    }

    public function block_stats($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
        ";
        // line 43
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_product_step_two_info", $context)) ? (_twig_default_filter(($context["oro_product_step_two_info"] ?? null), "oro_product_step_two_info")) : ("oro_product_step_two_info")), array("form" => ($context["form"] ?? null)));
        // line 44
        echo "    ";
    }

    // line 47
    public function block_content_data($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["id"] = "product-create-step-two";
        // line 49
        echo "
    ";
        // line 50
        $context["generalData"] = array("sku" =>         // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sku", array()), 'row'), "names" =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "names", array()), 'row'));
        // line 54
        echo "
    ";
        // line 55
        if ($this->getAttribute(($context["entity"] ?? null), "isConfigurable", array())) {
            // line 56
            echo "        ";
            ob_start();
            // line 57
            echo "            <div data-page-component-module=\"oroproduct/js/app/components/product-variant-component\">
                ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "variantFields", array()), 'row');
            echo "
            </div>
        ";
            $context["productsVariantSelector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 61
            echo "        ";
            $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>             // line 62
($context["productsVariantSelector"] ?? null)));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 1 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row'), 2 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "featured", array()), 'row'), 3 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "newArrival", array()), 'row'), 4 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "brand", array()), 'row'), 5 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primaryUnitPrecision", array()), 'row')));
        // line 74
        echo "
    ";
        // line 75
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitFieldsSettingsExtension')->isProductPrimaryUnitVisible()) {
            // line 76
            echo "        ";
            $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>             // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "additionalUnitPrecisions", array()), 'row')));
            // line 79
            echo "    ";
        }
        // line 80
        echo "
    ";
        // line 81
        $context["generalBlock"] = array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 86
($context["generalData"] ?? null)), 1 => array("title" => "", "data" => array("descriptions" =>         // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptions", array()), 'row'), "shortDescriptions" =>         // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shortDescriptions", array()), 'row')), "spanClass" => "responsive-cell")));
        // line 97
        echo "
    ";
        // line 98
        $context["dataBlocks"] = array("general" =>         // line 99
($context["generalBlock"] ?? null));
        // line 101
        echo "
    ";
        // line 102
        $context["additionalData"] = array();
        // line 103
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 104
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 105
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
    ";
        // line 107
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 108
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 113
($context["additionalData"] ?? null))))));
            // line 116
            echo "    ";
        }
        // line 117
        echo "
    ";
        // line 118
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("inventory" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.inventory"), "priority" => 5, "subblocks" => array(0 => array("title" => "", "data" => array("inventory_status" =>         // line 125
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inventory_status", array()), 'row')))))));
        // line 130
        echo "
    ";
        // line 131
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("images" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.images"), "priority" => 0, "subblocks" => array(0 => array("title" => "", "data" => array("images" =>         // line 138
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'row')))))));
        // line 143
        echo "
    ";
        // line 144
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("design" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.design"), "priority" => 0, "subblocks" => array(0 => array("title" => "", "data" => array("pageTemplate" =>         // line 151
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pageTemplate", array()), 'row')))))));
        // line 156
        echo "
    ";
        // line 157
        $context["productHasVariants"] = ($this->getAttribute(($context["entity"] ?? null), "isConfigurable", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantFields", array()), "vars", array()), "data", array())) != 0));
        // line 158
        echo "
    ";
        // line 159
        if (($context["productHasVariants"] ?? null)) {
            // line 160
            echo "
        ";
            // line 161
            $context["dataGridParameters"] = array("parentProduct" => 0, "attributeFamily" => $this->getAttribute($this->getAttribute(            // line 163
($context["entity"] ?? null), "attributeFamily", array()), "id", array()));
            // line 165
            echo "
        ";
            // line 166
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantLinks", array()), "appendVariants", array()), "vars", array()), "value", array())) != 0)) {
                // line 167
                echo "            ";
                $context["dataGridParameters"] = twig_array_merge(($context["dataGridParameters"] ?? null), array("appendVariants" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantLinks", array()), "appendVariants", array()), "vars", array()), "value", array())));
                // line 168
                echo "        ";
            }
            // line 169
            echo "
        ";
            // line 170
            $context["variantLinksForm"] = $this->getAttribute(($context["form"] ?? null), "variantLinks", array());
            // line 171
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.productVariants"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 177
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["variantLinksForm"] ?? null), "appendVariants", array()), 'widget', array("id" => "productAppendVariants")), 1 =>             // line 178
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["variantLinksForm"] ?? null), "removeVariants", array()), 'widget', array("id" => "productRemoveVariants")), 2 =>             // line 179
$context["dataGrid"]->getrenderGrid("product-product-variants-edit", ($context["dataGridParameters"] ?? null), array("cssClass" => "inner-grid"))))))));
            // line 183
            echo "    ";
        }
        // line 184
        echo "
    ";
        // line 185
        $context["data"] = array("formErrors" =>         // line 186
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 187
($context["dataBlocks"] ?? null));
        // line 189
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 191
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:createStepTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 191,  299 => 189,  297 => 187,  296 => 186,  295 => 185,  292 => 184,  289 => 183,  287 => 179,  286 => 178,  285 => 177,  283 => 171,  281 => 170,  278 => 169,  275 => 168,  272 => 167,  270 => 166,  267 => 165,  265 => 163,  264 => 161,  261 => 160,  259 => 159,  256 => 158,  254 => 157,  251 => 156,  249 => 151,  248 => 144,  245 => 143,  243 => 138,  242 => 131,  239 => 130,  237 => 125,  236 => 118,  233 => 117,  230 => 116,  228 => 113,  226 => 108,  224 => 107,  221 => 106,  214 => 105,  211 => 104,  205 => 103,  203 => 102,  200 => 101,  198 => 99,  197 => 98,  194 => 97,  192 => 92,  191 => 91,  190 => 86,  189 => 81,  186 => 80,  183 => 79,  181 => 77,  179 => 76,  177 => 75,  174 => 74,  172 => 72,  171 => 71,  170 => 70,  169 => 69,  168 => 68,  167 => 67,  166 => 66,  163 => 65,  160 => 64,  158 => 62,  156 => 61,  150 => 58,  147 => 57,  144 => 56,  142 => 55,  139 => 54,  137 => 52,  136 => 51,  135 => 50,  132 => 49,  129 => 48,  126 => 47,  122 => 44,  120 => 43,  115 => 42,  108 => 41,  105 => 40,  102 => 39,  99 => 38,  93 => 36,  91 => 34,  90 => 31,  88 => 30,  85 => 29,  82 => 28,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  60 => 20,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  42 => 9,  39 => 8,  35 => 1,  33 => 6,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:createStepTwo.html.twig", "");
    }
}
