<?php

/* OroProductBundle:layouts/blank/oro_product_frontend_product_view:line_item_form.html.twig */
class __TwigTemplate_2f67f6dbbe6752eec1f51c3a26322b54726a625d6a4f05f096ed9e3179acba4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_line_item_form_widget' => array($this, 'block__line_item_form_widget'),
            '_line_item_form_fields_widget' => array($this, 'block__line_item_form_fields_widget'),
            '_product_line_item_form_buttons_widget' => array($this, 'block__product_line_item_form_buttons_widget'),
            '_line_item_form_end_widget' => array($this, 'block__line_item_form_end_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_line_item_form_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_line_item_form_fields_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('_product_line_item_form_buttons_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_line_item_form_end_widget', $context, $blocks);
    }

    // line 1
    public function block__line_item_form_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-role" => "line-item-form-container"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__line_item_form_fields_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ( !($context["isProductUnitSelectionVisible"] ?? null)) {
            // line 12
            echo "        <div class=\"form__col\">
            ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'label');
            echo "
            ";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "input--short")));
            echo "
            ";
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
            echo "

            ";
            // line 18
            if (($context["isUnitVisible"] ?? null)) {
                // line 19
                echo "                <span class=\"label\">
                    ";
                // line 20
                echo $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "primaryUnitPrecision", array()), "unit", array()), "code", array()));
                echo "
                </span>
            ";
            }
            // line 23
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 26
            echo "        <div class=\"product-view-quantity fields-row\">
            <div class=\"product-view-quantity__unit\">
                ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
            echo "
            </div>
            <div class=\"product-view-quantity__value\">
                ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
            </div>
            <div class=\"fields-row-error\"></div>
        </div>
    ";
        }
    }

    // line 38
    public function block__product_line_item_form_buttons_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 40
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " form__col"));
            // line 43
            echo "
        <div ";
            // line 44
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 45
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 50
    public function block__line_item_form_end_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
    ";
        // line 52
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/oro_product_frontend_product_view:line_item_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  148 => 51,  145 => 50,  137 => 45,  133 => 44,  130 => 43,  127 => 40,  124 => 39,  121 => 38,  111 => 31,  105 => 28,  101 => 26,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 16,  73 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  53 => 6,  48 => 5,  45 => 2,  42 => 1,  38 => 50,  35 => 49,  33 => 38,  30 => 37,  28 => 10,  25 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:line_item_form.html.twig", "");
    }
}
