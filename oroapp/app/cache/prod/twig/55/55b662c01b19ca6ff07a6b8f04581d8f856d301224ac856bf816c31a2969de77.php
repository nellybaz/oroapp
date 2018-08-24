<?php

/* OroProductBundle:Product:update.html.twig */
class __TwigTemplate_c38536f30eb6a8c5028e6406563663cc96cfad60932a045a15277770e9386c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroProductBundle:Product:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%sku%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%name%" => _twig_default_filter((($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array()), "string", array())) : ("")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))));
        // line 6
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_create")));
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
            $context["saveAndDuplicateButton"] = $this->getAttribute(($context["UI"] ?? null), "saveActionButton", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.ui.save_and_duplicate"), "action" => "save_and_duplicate")), "method");
            // line 18
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . ($context["saveAndDuplicateButton"] ?? null));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_update"))) {
            // line 21
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 28
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 32
($context["entity"] ?? null), "sku", array()) . " - ") . $this->getAttribute(($context["entity"] ?? null), "defaultName", array())));
            // line 34
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label")));
            // line 37
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroProductBundle:Product:update.html.twig", 37)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product:update.html.twig", 42);
        // line 43
        echo "    <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroform/js/app/views/form-loading-view", "layout" => "separate"));
        // line 46
        echo " data-skip-input-widgets>
        ";
        // line 47
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    </div>
";
    }

    // line 51
    public function block_content_data($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $context["id"] = "product-edit";
        // line 53
        echo "    ";
        $context["generalData"] = array("sku" =>         // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sku", array()), 'row'), "names" =>         // line 55
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "names", array()), 'row'));
        // line 57
        echo "
    ";
        // line 58
        if ($this->getAttribute(($context["entity"] ?? null), "isConfigurable", array())) {
            // line 59
            echo "        ";
            ob_start();
            // line 60
            echo "            <div data-page-component-module=\"oroproduct/js/app/components/product-variant-component\">
              ";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "variantFields", array()), 'row');
            echo "
            </div>
        ";
            $context["productsVariantSelector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            echo "        ";
            $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>             // line 65
($context["productsVariantSelector"] ?? null)));
            // line 67
            echo "    ";
        }
        // line 68
        echo "
    ";
        // line 69
        $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row'), 1 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 2 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "featured", array()), 'row'), 3 =>         // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "newArrival", array()), 'row'), 4 =>         // line 74
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "brand", array()), 'row'), 5 =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primaryUnitPrecision", array()), 'row')));
        // line 77
        echo "
    ";
        // line 78
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitFieldsSettingsExtension')->isProductPrimaryUnitVisible(($context["entity"] ?? null))) {
            // line 79
            echo "        ";
            $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 =>             // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "additionalUnitPrecisions", array()), 'row')));
            // line 82
            echo "    ";
        }
        // line 83
        echo "
    ";
        // line 84
        $context["generalBlock"] = array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 89
($context["generalData"] ?? null)), 1 => array("title" => "", "data" => array("descriptions" =>         // line 94
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptions", array()), 'row'), "shortDescriptions" =>         // line 95
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shortDescriptions", array()), 'row')), "spanClass" => "responsive-cell")));
        // line 100
        echo "
    ";
        // line 101
        $context["dataBlocks"] = array("general" =>         // line 102
($context["generalBlock"] ?? null));
        // line 104
        echo "
    ";
        // line 105
        $context["additionalData"] = array();
        // line 106
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 107
                echo "        ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()), $this->getAttribute(($context["entity"] ?? null), "variantFields", array()))) {
                    // line 108
                    echo "            ";
                    $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                    // line 109
                    echo "        ";
                }
                // line 110
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 112
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 117
($context["additionalData"] ?? null))))));
            // line 120
            echo "    ";
        }
        // line 121
        echo "
    ";
        // line 122
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("inventory" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.inventory"), "priority" => 5, "subblocks" => array(0 => array("title" => "", "data" => array("inventory_status" =>         // line 129
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inventory_status", array()), 'row')))))));
        // line 134
        echo "
    ";
        // line 135
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("images" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.images"), "priority" => 0, "subblocks" => array(0 => array("title" => "", "data" => array("images" =>         // line 142
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'row')))))));
        // line 147
        echo "
    ";
        // line 148
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array("design" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.design"), "priority" => 0, "subblocks" => array(0 => array("title" => "", "data" => array("pageTemplate" =>         // line 155
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pageTemplate", array()), 'row')))))));
        // line 160
        echo "
    ";
        // line 161
        $context["productHasVariants"] = ($this->getAttribute(($context["entity"] ?? null), "isConfigurable", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantFields", array()), "vars", array()), "data", array())) != 0));
        // line 162
        echo "
    ";
        // line 163
        if (($context["productHasVariants"] ?? null)) {
            // line 164
            echo "
        ";
            // line 165
            $context["dataGridParameters"] = array("parentProduct" => $this->getAttribute(            // line 166
($context["entity"] ?? null), "id", array()), "attributeFamily" => $this->getAttribute($this->getAttribute(            // line 167
($context["entity"] ?? null), "attributeFamily", array()), "id", array()));
            // line 169
            echo "
        ";
            // line 170
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantLinks", array()), "appendVariants", array()), "vars", array()), "value", array())) != 0)) {
                // line 171
                echo "            ";
                $context["dataGridParameters"] = twig_array_merge(($context["dataGridParameters"] ?? null), array("appendVariants" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "variantLinks", array()), "appendVariants", array()), "vars", array()), "value", array())));
                // line 172
                echo "        ";
            }
            // line 173
            echo "
        ";
            // line 174
            $context["variantLinksForm"] = $this->getAttribute(($context["form"] ?? null), "variantLinks", array());
            // line 175
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.productVariants"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 181
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["variantLinksForm"] ?? null), "appendVariants", array()), 'widget', array("id" => "productAppendVariants")), 1 =>             // line 182
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["variantLinksForm"] ?? null), "removeVariants", array()), 'widget', array("id" => "productRemoveVariants")), 2 =>             // line 183
$context["dataGrid"]->getrenderGrid("product-product-variants-edit", ($context["dataGridParameters"] ?? null), array("cssClass" => "inner-grid"))))))));
            // line 187
            echo "    ";
        }
        // line 188
        echo "    ";
        $context["data"] = array("formErrors" =>         // line 189
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 190
($context["dataBlocks"] ?? null));
        // line 192
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 194
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 194,  303 => 192,  301 => 190,  300 => 189,  298 => 188,  295 => 187,  293 => 183,  292 => 182,  291 => 181,  289 => 175,  287 => 174,  284 => 173,  281 => 172,  278 => 171,  276 => 170,  273 => 169,  271 => 167,  270 => 166,  269 => 165,  266 => 164,  264 => 163,  261 => 162,  259 => 161,  256 => 160,  254 => 155,  253 => 148,  250 => 147,  248 => 142,  247 => 135,  244 => 134,  242 => 129,  241 => 122,  238 => 121,  235 => 120,  233 => 117,  231 => 112,  228 => 111,  221 => 110,  218 => 109,  215 => 108,  212 => 107,  206 => 106,  204 => 105,  201 => 104,  199 => 102,  198 => 101,  195 => 100,  193 => 95,  192 => 94,  191 => 89,  190 => 84,  187 => 83,  184 => 82,  182 => 80,  180 => 79,  178 => 78,  175 => 77,  173 => 75,  172 => 74,  171 => 73,  170 => 72,  169 => 71,  168 => 70,  167 => 69,  164 => 68,  161 => 67,  159 => 65,  157 => 64,  151 => 61,  148 => 60,  145 => 59,  143 => 58,  140 => 57,  138 => 55,  137 => 54,  135 => 53,  132 => 52,  129 => 51,  122 => 47,  119 => 46,  116 => 43,  113 => 42,  110 => 41,  105 => 38,  102 => 37,  99 => 36,  93 => 34,  91 => 32,  90 => 29,  88 => 28,  85 => 27,  82 => 26,  75 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  42 => 9,  39 => 8,  35 => 1,  33 => 6,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:update.html.twig", "");
    }
}
