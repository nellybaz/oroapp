<?php

/* OroProductBundle:layouts/blank/imports/oro_product_line_item_form:oro_product_line_item_form.html.twig */
class __TwigTemplate_b79c71404cc2b7bf045c5146b642853d83bd5caf86349e5466b704ec5efc6053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_line_item_form__line_item_form_start_widget' => array($this, 'block___oro_product_line_item_form__line_item_form_start_widget'),
            '__oro_product_line_item_form__line_item_form_fields_widget' => array($this, 'block___oro_product_line_item_form__line_item_form_fields_widget'),
            '__oro_product_line_item_form__line_item_form_widget' => array($this, 'block___oro_product_line_item_form__line_item_form_widget'),
            '__oro_product_line_item_form__line_item_form_buttons_widget' => array($this, 'block___oro_product_line_item_form__line_item_form_buttons_widget'),
            '__oro_product_line_item_form__line_item_buttons_widget' => array($this, 'block___oro_product_line_item_form__line_item_buttons_widget'),
            '__oro_product_line_item_form__line_item_view_details_widget' => array($this, 'block___oro_product_line_item_form__line_item_view_details_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_line_item_form__line_item_form_start_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('__oro_product_line_item_form__line_item_form_fields_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('__oro_product_line_item_form__line_item_form_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('__oro_product_line_item_form__line_item_form_buttons_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('__oro_product_line_item_form__line_item_buttons_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('__oro_product_line_item_form__line_item_view_details_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_line_item_form__line_item_form_start_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->setUniqueLineItemFormId(($context["form"] ?? null), ($context["product"] ?? null)), "html", null, true);
        echo "
    ";
        // line 3
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => $this->getAttribute($this->getAttribute(        // line 4
($context["form"] ?? null), "vars", array()), "id", array())));
        // line 6
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block___oro_product_line_item_form__line_item_form_fields_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["class_prefix"] = "line_item_form_fields";
        // line 11
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("class_prefix" =>         // line 12
($context["class_prefix"] ?? null)));
        // line 14
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->setClassPrefixToForm(($context["form"] ?? null), ($context["class_prefix"] ?? null));
        // line 15
        echo "    ";
        if ( !array_key_exists("renderCache", $context)) {
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__qty__current-grid", "data-page-component-module" => "oroproduct/js/app/components/product-unit-select-component", "data-page-component-options" => twig_jsonencode_filter(array("singleUnitMode" =>             // line 21
($context["singleUnitMode"] ?? null), "singleUnitModeCodeVisible" =>             // line 22
($context["singleUnitModeCodeVisible"] ?? null), "configDefaultUnit" =>             // line 23
($context["defaultUnitCode"] ?? null)))));
            // line 26
            echo "
            <div ";
            // line 27
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
                <div>
                    <div class=\"form-row ";
            // line 29
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "product-item__qty-input")));
            // line 32
            echo "
                    </div>
                    <div class=\"form-row ";
            // line 34
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("data-skip-input-widgets" => "")));
            // line 37
            echo "
                    </div>
                </div>
                ";
            // line 40
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
            </div>
        ";
            $context["renderCache"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("renderCache" =>             // line 44
($context["renderCache"] ?? null)));
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, ($context["renderCache"] ?? null), "html", null, true);
            echo "
    ";
        }
    }

    // line 52
    public function block___oro_product_line_item_form__line_item_form_widget($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:layouts/blank/imports/oro_product_line_item_form:oro_product_line_item_form.html.twig", 53);
        // line 54
        echo "
    ";
        // line 55
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__qty product-item__qty--{{ class_prefix }}", "data-role" => "line-item-form-container"));
        // line 59
        echo "
    <div ";
        // line 60
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 61
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 65
    public function block___oro_product_line_item_form__line_item_form_buttons_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 67
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " add-product-from-view-component"));
            // line 70
            echo "
        <div ";
            // line 71
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 72
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 77
    public function block___oro_product_line_item_form__line_item_buttons_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~options" => array("truncateLength" => 25, "appendToBody" => true, "decoreClass" => "btn--info")));
        // line 85
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 88
    public function block___oro_product_line_item_form__line_item_view_details_widget($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array())) && (($context["matrixFormType"] ?? null) == "none"))) {
            // line 90
            echo "        ";
            $context["path"] = (($this->getAttribute(($context["product"] ?? null), "view_link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "view_link", array()), "")) : (""));
            // line 91
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " btn btn--info full"));
            // line 94
            echo "        
        ";
            // line 95
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_product_line_item_form:oro_product_line_item_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 95,  224 => 94,  221 => 91,  218 => 90,  215 => 89,  212 => 88,  205 => 85,  202 => 78,  199 => 77,  191 => 72,  187 => 71,  184 => 70,  181 => 67,  178 => 66,  175 => 65,  168 => 61,  164 => 60,  161 => 59,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  142 => 48,  139 => 47,  136 => 46,  134 => 44,  132 => 43,  126 => 40,  121 => 37,  119 => 35,  115 => 34,  111 => 32,  109 => 30,  105 => 29,  100 => 27,  97 => 26,  95 => 23,  94 => 22,  93 => 21,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  80 => 12,  78 => 11,  75 => 10,  72 => 9,  65 => 6,  63 => 4,  62 => 3,  57 => 2,  54 => 1,  50 => 88,  47 => 87,  45 => 77,  42 => 76,  40 => 65,  37 => 64,  35 => 52,  32 => 51,  30 => 9,  27 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_product_line_item_form:oro_product_line_item_form.html.twig", "");
    }
}
