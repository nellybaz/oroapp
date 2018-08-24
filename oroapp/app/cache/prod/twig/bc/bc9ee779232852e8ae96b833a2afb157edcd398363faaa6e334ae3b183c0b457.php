<?php

/* OroProductBundle:layouts/default/imports/oro_product_quick_add_validation:quick_add_validation.html.twig */
class __TwigTemplate_94d9f03298ee466741090aa8018ba65abcc78721bb6b5745e7148ce19151fc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_quick_add_validation__quick_add_validation_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_items_table_container_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_items_table_container_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_invalid_items_warning_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_invalid_items_warning_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_items_table_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_items_table_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_items_table_header_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_items_table_header_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_header_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_header_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_items_table_body_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_items_table_body_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_valid_items_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_valid_items_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_widget'),
            '__oro_product_quick_add_validation__quick_add_validation_additional_fields_widget' => array($this, 'block___oro_product_quick_add_validation__quick_add_validation_additional_fields_widget'),
            '_quick_add_validation_buttons_widget' => array($this, 'block__quick_add_validation_buttons_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_items_table_container_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_invalid_items_warning_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_items_table_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_items_table_header_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_header_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_items_table_body_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_valid_items_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('__oro_product_quick_add_validation__quick_add_validation_additional_fields_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('_quick_add_validation_buttons_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_quick_add_validation__quick_add_validation_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["widgetOptions"] = array("_wid" => $this->getAttribute($this->getAttribute(        // line 3
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge(array("id" => "import-validation", "data-page-component-module" => "oroproduct/js/app/components/quick-add-import-validation-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(        // line 8
($context["widgetOptions"] ?? null), array("titleTemplate" => "<%- title %><span class=\"quick-order-add-widget-subtitle\"> <%- subtitle %></span>", "validItemsCount" => twig_length_filter($this->env, $this->getAttribute(        // line 10
($context["collection"] ?? null), "validRows", array()))))), "class" => "validation-info hidden-form"),         // line 13
($context["attr"] ?? null));
        // line 14
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 19
    public function block___oro_product_quick_add_validation__quick_add_validation_items_table_container_widget($context, array $blocks = array())
    {
        // line 20
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 25
    public function block___oro_product_quick_add_validation__quick_add_validation_invalid_items_warning_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collection"] ?? null), "invalidRows", array()))) {
            // line 27
            echo "        <p class=\"notification--error\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.invalid_records"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 33
    public function block___oro_product_quick_add_validation__quick_add_validation_items_table_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 35
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " table table-condensed table-hover")));
        // line 37
        echo "    <table ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 38
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </table>
";
    }

    // line 42
    public function block___oro_product_quick_add_validation__quick_add_validation_items_table_header_widget($context, array $blocks = array())
    {
        // line 43
        echo "    <thead>
        <tr>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.item_number.label"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.quantity.label"), "html", null, true);
        echo "</th>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.unit.label"), "html", null, true);
        echo "</th>
            ";
        // line 48
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </tr>
    </thead>
";
    }

    // line 53
    public function block___oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_header_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 57
    public function block___oro_product_quick_add_validation__quick_add_validation_items_table_body_widget($context, array $blocks = array())
    {
        // line 58
        echo "    <tbody>
        ";
        // line 59
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </tbody>
";
    }

    // line 63
    public function block___oro_product_quick_add_validation__quick_add_validation_valid_items_widget($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collection"] ?? null), "validRows", array()))) {
            // line 65
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? null), "validRows", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["validRow"]) {
                // line 66
                echo "        <tr>
            <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["validRow"], "sku", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["validRow"], "product", array()), "name", array()), "html", null, true);
                echo "</td>
            <td class=\"text-center\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["validRow"], "quantity", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["validRow"], "unit", array()), "html", null, true);
                echo "</td>
            ";
                // line 70
                $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("validRow" => $context["validRow"]));
                // line 71
                echo "            ";
                $this->displayBlock("container_widget", $context, $blocks);
                echo "
            <td class=\"hidden\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["validRow"], "sku", array()), "html", null, true);
                echo "</td>
        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['validRow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    ";
        }
    }

    // line 78
    public function block___oro_product_quick_add_validation__quick_add_validation_valid_items_additional_fields_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("additionalFields" => $this->getAttribute(($context["validRow"] ?? null), "additionalFields", array())));
        // line 80
        echo "    ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
";
    }

    // line 83
    public function block___oro_product_quick_add_validation__quick_add_validation_additional_fields_widget($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 85
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-import-validation__additional_fields")));
        // line 87
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 88
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 92
    public function block__quick_add_validation_buttons_widget($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 94
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " widget-actions")));
        // line 96
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 97
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/imports/oro_product_quick_add_validation:quick_add_validation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 97,  319 => 96,  317 => 94,  315 => 93,  312 => 92,  305 => 88,  300 => 87,  298 => 85,  296 => 84,  293 => 83,  286 => 80,  283 => 79,  280 => 78,  275 => 75,  258 => 72,  253 => 71,  251 => 70,  247 => 69,  243 => 68,  237 => 67,  234 => 66,  216 => 65,  213 => 64,  210 => 63,  203 => 59,  200 => 58,  197 => 57,  190 => 54,  187 => 53,  179 => 48,  175 => 47,  171 => 46,  167 => 45,  163 => 43,  160 => 42,  153 => 38,  148 => 37,  146 => 35,  144 => 34,  141 => 33,  133 => 28,  130 => 27,  127 => 26,  124 => 25,  117 => 21,  112 => 20,  109 => 19,  102 => 15,  97 => 14,  95 => 13,  94 => 10,  93 => 8,  91 => 5,  89 => 3,  87 => 2,  84 => 1,  80 => 92,  77 => 91,  75 => 83,  72 => 82,  70 => 78,  67 => 77,  65 => 63,  62 => 62,  60 => 57,  57 => 56,  55 => 53,  52 => 52,  50 => 42,  47 => 41,  45 => 33,  42 => 32,  40 => 25,  37 => 24,  35 => 19,  32 => 18,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/imports/oro_product_quick_add_validation:quick_add_validation.html.twig", "");
    }
}
